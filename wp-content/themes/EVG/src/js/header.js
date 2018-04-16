// resize header on scroll
let body = document.getElementsByTagName('body')[0];
let header = document.getElementById('jsHeader');
let nav = document.getElementById('jsNav');
let scrollEl = document.getElementById('jsScrollCont');
 function getScrollTop(el){
   return el.scrollTop;
 }

window.onscroll = function(){
  if(getScrollTop(body) > 50){
    header.style.height = 100;
    header.style.position = 'fixed';
    header.style.top = 0;
    scrollEl.classList.add('hdr__pos');
  } else {
    header.style.height = 600;
    header.style.position = 'relative';
    scrollEl.classList.remove('hdr__pos');
  }
}