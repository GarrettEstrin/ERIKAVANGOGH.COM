let feedRow1 = document.getElementById('instafeed-row1');
let feedRow2 = document.getElementById('instafeed-row2');
function handleInstagramImages(res){
  var i = 0;
  res.data.forEach(el => {
    createAndAppendImageContainer(el, i);
    i++;
  });
}

function createAndAppendImageContainer(data, i){
// create imagecontainer
let imageContainer = document.createElement('div');
imageContainer.className = 'image';
// create image
let image = document.createElement('img');
image.className = 'image__image';
image.src = data.images.low_resolution.url;
imageContainer.appendChild(image);
// create caption element
let caption = document.createElement('div');
caption.className = 'image__caption';
// create text element
let text = document.createElement('p');
text.className = 'image__caption-text';
let captionText = data.caption.text.replace(/\r?\n|\r/g, '');
if(captionText.length > 0){
  if(captionText.length > 100){
    text.innerText = captionText.slice(0, 100) + "...";
  } else {
    text.innerText = captionText;
  }
} else {
  text.innerText = 'erikavangogh';
}
imageContainer.appendChild(caption);
imageContainer.appendChild(text);
// create link element
let link = document.createElement('a');
link.href = data.link;
link.className = 'image__link';
link.target = '_blank';
link.appendChild(imageContainer);
if(i > 5){
  feedRow2.appendChild(link);
} else  {
  feedRow1.appendChild(link);
}
}

function getData(url, use) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let data = JSON.parse(this.response);
      if(use === 'bio'){
        appendBio(data);
      } else if (use === 'media'){
        handleInstagramImages(data);
      }
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
// make api call for images
getData('https://api.instagram.com/v1/users/self/media/recent/?access_token=2166898.4cec3d1.3f1fcb9e6e464b5b81864fa1abe369c8&count=12', 'media');
// make api call for user data
getData('https://api.instagram.com/v1/users/self/?access_token=2166898.4cec3d1.3f1fcb9e6e464b5b81864fa1abe369c8','bio')

function appendBio(data){
  document.getElementsByClassName('bio')[0].innerText = data.data.bio;
}

document.getElementById('jsLogo').addEventListener('mouseover', function(){
  this.src = '/wp-content/themes/EVG/src/images/bio-pic.png';
  if(window.innerWidth < 501){
    this.height = 400;
  } else {
    this.height = 500;
  }
})

document.getElementById('jsLogo').addEventListener('mouseout', function(){
  this.src = '/wp-content/themes/EVG/src/images/logo.png';
  if(window.innerWidth < 501){
    this.height = 400;
  } else {
    this.height = 500;
  }
})