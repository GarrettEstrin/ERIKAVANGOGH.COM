<?php 
  $pageSlug = $post->post_name;
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width" id="jsViewPort">
    <title>ErikaVanGogh.com</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/dist/css/<?php echo $pageSlug; ?>.css">
  </head>
  <body>
  <header class="hdr" id="jsHeader">
    <div class="container">
    <img src="<?php bloginfo('stylesheet_directory')?>/src/images/logo.png" alt="" class="hdr__logo">
    <navigation class="hdr__nav" id="jsNav">
      <?php wp_nav_menu(); ?>
    </navigation>
    </div>
  </header>
