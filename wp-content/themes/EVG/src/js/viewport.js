window.addEventListener("resize", function () {
  adjustViewport(window.outerWidth, vp);
});

function adjustViewport(width, vp){
  if(width > 1000){
    vp.setAttribute('content', 'width=1000');
  } else if(width > 700) {
    vp.setAttribute('content', 'width=700');
  } else {
    vp.setAttribute('content', 'width=400');
  }
}
var vp = document.getElementById('jsViewPort');
adjustViewport(window.outerWidth, vp);