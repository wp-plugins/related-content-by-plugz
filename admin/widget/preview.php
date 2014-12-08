<html>
    <head>
        <title>Plugz.co - Preview</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <style>
            body {background: url(http://www.plugz.co/images/framebg.gif) fixed;}
        </style>
    <body>
        <?php
        if (strlen($widget['id']) == 32) {
            if (is_array($widget) && count($widget)) {
                if ($widget['adult']) {
                    $domain = 'plugerr.com';
                } else {
                    $domain = 'plugs.co';
                }

                $fid = $widget['frid'];
                $x = json_decode($widget['wdata'], true);

                $x['wt'] = $x['widgettype'];
                $x['str'] = $x['show_only_my_articles'];
                $x['sntw'] = $x['show_only_my_trades'];
                $x['it'] = $x['imagetype'];
                $x['wt'] = $x['widgettype'];
                $x['iw'] = $x['imgwidth'];
                $x['pd'] = $x['padding'];
                $x['br'] = $x['border'];
                $x['bty'] = $x['bordertype'];
                $x['brc'] = $x['imgbdcolor'];
                $x['db'] = $x['imagenumber'];
                $x['st'] = $x['titleyn'];
                $x['c'] = $x['widget_width'];
                $x['adv'] = $x['show_referer_url'];
                $x['lp'] = $x['search_engine_traffic_enable'];
                $x['tp'] = $x['textpos'];
                $x['ta'] = $x['textalign'];
                $x['dec'] = $x['hover'];
                $x['ff'] = $x['fontfamily'];
                $x['fsz'] = $x['fontsize'];
                $x['fw'] = $x['fontweight'];
                $x['fc'] = $x['fontcolor'];
                $x['ch'] = $x['letternum'];
                $x['ca'] = $x['soft'];
                $x['ibch'] = $x['imgbdcolorhover'];
                $x['htc'] = $x['hovertextcolor'];
                $x['iyn'] = $x['imageyn'];
                $x['id'] = $x['fid'];
                $x['st'] = $x['titleyn'];
                $x['customcss'] = trim(preg_replace('/\s\s+/', ' ', str_replace('#', '|hash|', str_replace('%', '|percent|', str_replace("\n", '', $x['customcss'])))));
                $x['nh'] = $x['0'];
                $x['ai'] = $x['0'];
                $x['opa'] = $x['opacity'];
                $x['fid'] = $x['id'];

                unset(
                    $x['opacolor_rgba'], $x['opacolor_rgb'], $x['widget_placement'], $x['widget_page_id'], $x['widget_post_id'], $x['widget_placement_paragraph']
                );

                $params = array();
                
                foreach ($x as $k => $v) {
                    $params[] = urlencode($k.'='.$v);
                }
                
                $params = implode(',', $params);
                $logging = '&logging=1';
            }
        } else {
            $domain = $_REQUEST["a"];
            $params = $_REQUEST["p"];
            $fid = $_REQUEST["fid"];
            $logging = $_REQUEST['logging'] ? '&logging=1' : '';
        }

        $ip = $_REQUEST['ip'] ? '&ip=' . $_REQUEST['ip'] : '';
        ?>
        <script type="text/javascript" src="http://plug.<?php echo $domain ?>/galleries?fid=<?php echo $fid ?>&p=<?php echo $params, $logging, $ip ?>"></script>
    </body>
</html>
