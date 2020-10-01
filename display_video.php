<?php
include "common.php";
check_session("login/login.html");
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <title>Stream View</title>
    <style type="text/css">
      html, body {
        background-color: #111;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <canvas id="video-canvas" style="display: block; width: 100%;"></canvas>
    <script type="text/javascript" src="jsmpeg/jsmpeg.min.js"></script>
    <script type="text/javascript">
      var canvas = document.getElementById('video-canvas');
      var url = 'ws://'+document.location.hostname+':8082/';
      var player = new JSMpeg.Player(url, {canvas: canvas});
    </script>
  </body>
</html>

