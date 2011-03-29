<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>P..</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<style type="text/css">
  html, body{padding: 0; margin: 0;}
  body{background: #eee; font-family:"Courier New", Courier, monospace; font-size: 14px;}
</style>
<script src="<?php echo $config['url'];?>jquery-1.5.min.js"></script>
<script src="<?php echo $config['url'];?>processing-1.0.0.min.js"></script>
</head>
<body>
  <canvas data-processing-sources="<?php echo $config['url'];?>cache/<?php echo $_REQUEST['sk'];?>.pjs" id="canvas">
    Your browser does not support the canvas.
  </canvas>
</body>
</html>