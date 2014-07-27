<?php

/**
 * plugz Admin Settings
 *
 * Admin settings for all plugz plugins
 *
 * @package plugz
 * @subpackage Functions
 */
function plugz_widgets_page() {
    $frid = get_option('plugz-frid');
    
    if (!plugz_connected() || empty($frid)) {
        $plugzConnected = false;
        echo '<div id="message" class="error fade"><p><strong>Cannot connect to Plugz API, please try again later.</strong></p></div>';
    } else {
        $plugzConnected = true;
    }

    $apiKey = get_option('plugz-api-key', '');

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        if (isset($_GET['q'])) {
            die(json_encode(array(array('id' => $_GET['q'], 'text' => $_GET['q']))));
        } elseif ($_POST['action'] == 'get_preview') {
            die('');
        } elseif ($_POST['action'] == 'save' && isset($_GET['create'])) {
            $result = plugz_request(array('action' => 'saveWidget', 'data' => http_build_query(array('post' => $_POST))));
            header("Content-type: application/json");
            die(json_encode($result));
        } elseif (isset($_POST['widget_placement'])) {
            header('Content-Type: application/json');
            
            $widgetPlacements = get_option('plugz-widget-placements', array());
            
            foreach ($_POST['widget_placement'] as $widgetId => $widgetPlacement) {
                $placement = array(
                    'placement' => $widgetPlacement
                );
                
                if (isset($_POST['widget_post_id'][$widgetId])) {
                    $placement['post_id'] = $_POST['widget_post_id'][$widgetId];
                }
                
                if (isset($_POST['widget_page_id'][$widgetId])) {
                    $placement['page_id'] = $_POST['widget_page_id'][$widgetId];
                }
                
                if (isset($_POST['widget_placement_paragraph'][$widgetId])) {
                    $placement['paragraph'] = $_POST['widget_placement_paragraph'][$widgetId];
                }

                if ($widgetId == 0) {
                    $widgetId = $_POST['widget_id'];
                }
                
                $widgetPlacements[$widgetId] = $placement;
            }
            
            update_option('plugz-widget-placements', $widgetPlacements);
            
            die(json_encode($widgetPlacements));
        } else {
            die();
        }
    }

    if (isset($_GET['create'])) {
        $plugz = get_option('plugz-settings');
        include_once(dirname(__FILE__) . '/widget/add.php');
    } else if (isset($_GET['delete'])) {
        if (is_numeric($_GET['delete'])) {
            $result = plugz_request(array('action' => 'deleteWidget', 'id' => $_GET['delete']));
        }
        
        wp_redirect( 'admin.php?page=plugz/widgets', 301 ); 
        exit;
    } else if (isset($_GET['edit'])) {
        if (is_numeric($_GET['edit'])) {
            wp_redirect( (APPLICATION_ENV == 'development' ? 'http://' : 'https://').'www.plugz.co/sign-in.plug?redirect=/publisher/widget/edit.plug%3Fid%3D'.$_GET['edit'].'&sig='.$apiKey, 301 ); 
        } else {
            wp_redirect( 'admin.php?page=plugz/widgets', 301 ); 
        }
        
        exit;
    } else {
        $widgetPlacements = get_option('plugz-widget-placements', array());
        
        include_once(dirname(__FILE__) . '/widget/index.php');
    }
}
