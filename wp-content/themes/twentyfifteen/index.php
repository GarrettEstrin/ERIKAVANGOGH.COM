<?php
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=900">
    <title>ErikaVanGogh.com</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/instagram-feed.css">
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
    

  </style>
  </head>
  <body>
  <div class="container">
    <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo.png" alt="" class="logo">
  </div>
  <div id="instafeed" class="instafeed">
    <div id="instafeed-row1" class="instafeed__row"></div>
    <div id="instafeed-row2" class="instafeed__row"></div>
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
        success: handleInstagramImages
    });
    feed.run();
    let feedRow1 = document.getElementById('instafeed-row1');
    let feedRow2 = document.getElementById('instafeed-row2');
    function handleInstagramImages(res){
      for(let i = 0,c = res.data.length;i<c;i++){
        createAndAppendImageContainer(res.data[i], i);
      }
    }

    function createAndAppendImageContainer(data, i){
      console.log(data.caption);
      // create imagecontainer
      let imageContainer = document.createElement('div');
      imageContainer.className = 'image';
      // create image
      let image = document.createElement('img');
      image.className = 'image__image';
      image.src = data.images.thumbnail.url;
      imageContainer.appendChild(image);
      // create caption element
      let caption = document.createElement('div');
      caption.className = 'image__caption';
      // create text element
      let text = document.createElement('p');
      text.className = 'image__caption-text';
      if(data.caption){
        text.innerText = data.caption.text;
      } else {
        text.innerText = 'erikavangogh';
      }
      imageContainer.appendChild(caption);
      imageContainer.appendChild(text);
      // create link element
      let link = document.createElement('a');
      link.href = data.link
      link.className = 'image__link';
      link.appendChild(imageContainer);
      if(i > 5){
        feedRow2.appendChild(link);
      } else  {
        feedRow1.appendChild(link);
      }
    }
  </script>
  </body>
</html>
