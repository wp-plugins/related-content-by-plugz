<?php

/**
 * plugz Common functions
 *
 * Common functions
 *
 * @package plugz
 * @subpackage Functions
 */
function plugz_request($params) {
    $params['format'] = 'json';

    if (isset($params['action'])) {
        $action = $params['action'];
    } else {
        $action = '';
    }

    $plugz = get_option('plugz-settings');

    $params['email'] = $plugz['user'];
    $params['password'] = $plugz['password'];
    $params['apiKey'] = get_option('plugz-api-key');
    $params['frid'] = get_option('plugz-frid');
    $params['domain'] = plugz_domain_from_url(get_option('siteurl'));
    $params['origin'] = $params['domain'];

    if (function_exists('curl_init')) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HEADER, TRUE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_URL, (APPLICATION_ENV == 'development' ? 'http://' : 'https://') . API_DOMAIN . '/wpapi/v1/' . $action);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        $result = $headers = curl_exec($curl);
        $result = explode("\r\n\r\n", $result, 3);
        $result = (array) json_decode($result[2], TRUE);
        if (preg_match('/x-plugz-status: ([0-9]{3})/i', $headers, $match)) {
            $result['status'] = $match[1];
        }

        return $result;
    } else {
        return array('status' => '400', 'message' => 'CURL is required for this plugin to work');
    }
}

function plugz_get_image_meta($url) {
    $dimensions = null;
    $dimensions = getimagesize($url);
    return $dimensions;
}

function plugz_connected() {
    $result = plugz_request(array('action' => 'hello'));
    $frid = get_option('plugz-frid');
    
    if (isset($result[0]) && $result[0] == 'success') {
        return true;
    } else {
        return false;
    }
}

function plugz_reindex() {
    $args = array(
        'posts_per_page' => 0,
        'offset' => 0,
        'category' => '',
        'orderby' => 'post_date',
        'order' => 'DESC',
        'include' => '',
        'exclude' => '',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'post',
        'post_mime_type' => '',
        'post_parent' => '',
        'post_status' => 'publish',
        'suppress_filters' => true);

    $posts_array = get_posts($args);
    $plugz = get_option('plugz-settings');

    $imageUrls = array();
    $data = array();

    foreach ($posts_array as $post) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');

        if (!empty($image[0])) {
            $imageUrls[$post->ID] = $image[0];
        } else {
            $dom = new domDocument;
            $dom->loadHTML($post->post_content);
            $dom->preserveWhiteSpace = false;
            $imagesDom = $dom->getElementsByTagName('img');

            $images = array();
            foreach ($imagesDom as $node) {
                $images[] = $node;
            }

            if (isset($images[0])) {
                $imageUrls[$post->ID] = $images[0]->getAttribute('src');
            }
        }

        if (isset($imageUrls[$post->ID])) {
            $meta = plugz_get_image_meta($imageUrls[$post->ID]);
            add_post_meta($post->ID, '_plugz_posted', 1, true) || update_post_meta($post->ID, '_plugz_posted', 1);

            $tags = wp_get_post_tags($post->ID);
            $plug['tags'] = array();

            foreach ($tags as $tag) {
                $plug['tags'][] = $tag->name;
            }

            $plugz_post = get_post_meta($post->ID, '_plugz', TRUE);
            $plugz_post_content = get_post($post->ID);

            $plug['description'] = $plugz_post_content->post_excerpt;

            if (!isset($plugz_post['categories'])) {
                $plugz_post['categories'] = '';
            }

            $plugz_post['categories'] = explode(',', $plugz_post['categories']);

            $data[$post->ID] = array(
                'title' => $post->post_title,
                'name' => $post->post_name,
                'url' => $post->guid,
                'descr' => $plug['description'],
                'image' => $imageUrls[$post->ID],
                'width' => $meta[0],
                'height' => $meta[1],
                'categories' => implode(',', $plugz_post['categories']),
                'tags' => implode(',', $plug['tags']),
                'posttype' => (isset($plugz['website_type']) && $plugz['website_type'] == 'M' ? 'TUBE' : 'GALLERY'),
                'models' => '',
                'action' => 'REINDEX'
            );
        }
    }

    if (count($data)) {
        $result = plugz_request(array('action' => 'reindex', 'posts' => http_build_query($data)));

        if (isset($result[0]) && $result[0] == 'success') {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
