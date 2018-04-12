<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" id="jsViewPort">
    <title>ErikaVanGogh.com</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/dist/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>
  <div class="container container--logo">
    <img data-src="<?php bloginfo('stylesheet_directory')?>/src/images/logo.png" alt="" class="logo lazyload" id="jsLogo">
  </div>
  <div class="container">
    <p class="bio"></p>
  </div>
  <div class="container">
    <div id="instafeed" class="instafeed">
      <div id="instafeed-row1" class="instafeed__row"></div>
      <div id="instafeed-row2" class="instafeed__row"></div>
    </div>
  </div>
  <script src="<?php bloginfo('stylesheet_directory')?>/dist/js/index.js" async></script>
  </body>
</html>
