let feedRow1 = document.getElementById('instafeed-row1');
let feedRow2 = document.getElementById('instafeed-row2');
function handleInstagramImages(res){
  var i = 0;
  res.graphql.user.edge_owner_to_timeline_media.edges.forEach(el => {
    createAndAppendImageContainer(el, i);
    i++;
  });
  // for(let i = 0,c = 12;i<c;i++){
  //   console.log(res.graphql.user.edge_owner_to_timeline_media.edges);
  //   createAndAppendImageContainer(res.data[i], i);
  // }
}

function createAndAppendImageContainer(data, i){
  console.log(data);
// create imagecontainer
let imageContainer = document.createElement('div');
imageContainer.className = 'image';
// create image
let image = document.createElement('img');
image.className = 'image__image';
image.src = data.node.thumbnail_resources[0].src;
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

function getData() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let data = JSON.parse(this.response);
      appendBio(data);
      handleInstagramImages(data);
    }
  };
  xhttp.open("GET", "https://www.instagram.com/erikavangogh/?__a=1", true);
  xhttp.send();
}
getData();

function appendBio(data){
  document.getElementsByClassName('bio')[0].innerText = data.graphql.user.biography;
}

document.getElementById('jsLogo').addEventListener('mouseover', function(){
  this.src = '/wp-content/themes/EVG/src/images/bio-pic.jpg';
  this.height = 500;
})

document.getElementById('jsLogo').addEventListener('mouseout', function(){
  this.src = '/wp-content/themes/EVG/src/images/logo.png';
  this.height = 500;
})