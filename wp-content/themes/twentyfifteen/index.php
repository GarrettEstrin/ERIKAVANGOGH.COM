<?php
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=600">
    <title>ErkaVanGogh.com</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <style>
    html, body {
      height: 100%;
      width: 100%;
      box-sizing: border-box;
    }
    .container {
      text-align: center;
      display: flex; 
      align-items:center;
      width: 100%;
    }
    .logo {
      display: block;
      margin: 0 auto;
    }
    #instaFeed {
      margin: 0 auto;
      width: 100%;
    }

    #instafeed {
      width: 100%;
      margin: 0 auto;
    }
    #instafeed-row1, #instafeed-row2{
      display: flex;
      max-width: 900px;
      margin: 0 auto;
    }
    .img-cont {
      /* width: 16.66666667%; */
      display: inline-block;
    }
    </style>
  </head>
  <body>
  <div class="container">
    <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo.png" alt="" class="logo">
  </div>
  <div id="instafeed">
    <div id="instafeed-row1"></div>
    <div id="instafeed-row2"></div>
  </div>
  <script src="<?php bloginfo('stylesheet_directory')?>/assets/js/instaFeed.js"></script>
  <script>

    var feed = new Instafeed({
        get: 'user',
        userId: '3263819873',
        accessToken: '12784715.3a81a9f.5698dc3ea8cd4db3922251d364162aaa',
        sortBy: 'most-recent',
        links: true,
        limit: 12,
        mock: true,
        resolution: 'low_resolution',
        success: handleInstagramImages
    });
    feed.run();
    let feedRow1 = document.getElementById('instafeed-row1');
    let feedRow2 = document.getElementById('instafeed-row2');
    function handleInstagramImages(res){
      console.log(res.data.length);
      for(let i = 0,c = res.data.length;i<c;i++){
        createAndAppendImageContainer(res.data[i], i);
      }
    }

    function createAndAppendImageContainer(data, i){
      if(i > 5){
        let imageContainer = document.createElement('div');
        imageContainer.className = "img-cont";
        let image = document.createElement('img');
        image.className = "img-cont__img"
        image.src = data.images.thumbnail.url;
        imageContainer.appendChild(image);
        feedRow2.appendChild(imageContainer);
      } else  {
        let imageContainer = document.createElement('div');
        imageContainer.className = "img-cont";
        let image = document.createElement('img');
        image.className = "img-cont__img"
        image.src = data.images.thumbnail.url;
        imageContainer.appendChild(image);
        feedRow1.appendChild(imageContainer);
      }
    }
  </script>
  </body>
</html>
