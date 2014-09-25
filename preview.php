<html>
    <head>
        <title>Plugz.co - Preview</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <style>
            body {background: url(http://www.plugz.co/images/framebg.gif) fixed;}
        </style>
    <body>
        <?php
        $params = $_REQUEST["p"];
        $fid = $_REQUEST["fid"];
        $domain = $_REQUEST["a"];
        $logging = $_REQUEST['logging'] ? '&logging=1' : '&logging=1';
        $ip = $_REQUEST['ip'] ? '&ip=' . $_REQUEST['ip'] : '';
        ?>
        <script type="text/javascript" src="http://plug.<?php echo $domain ?>/galleries?fid=<?php echo $fid ?>&p=<?php echo $params, $logging, $ip ?>"></script>
    </body>
</html>
