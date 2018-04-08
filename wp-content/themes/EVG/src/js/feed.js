var Instafeed = require('instafeed.js');
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

function getBio() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    let data = JSON.parse(this.response);

    document.getElementsByClassName('bio')[0].innerText = data.data.bio;
  }
};
xhttp.open("GET", "https://api.instagram.com/v1/users/3263819873/?access_token=12784715.3a81a9f.5698dc3ea8cd4db3922251d364162aaa", true);
xhttp.send();
}
getBio();

document.getElementById('jsLogo').addEventListener('mouseover', function(){
  this.src = '/wp-content/themes/EVG/src/images/bio-pic.jpg';
  this.height = 500;
})

document.getElementById('jsLogo').addEventListener('mouseout', function(){
  this.src = '/wp-content/themes/EVG/src/images/logo.png';
  this.height = 500;
})