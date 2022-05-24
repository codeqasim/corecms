// window.onload=fadeout;
// document.getAttribute("href");

var aElems = document.getElementsByTagName('a');
    for (var i = 0, len = aElems.length; i < len; i++) {
       aElems[i].onclick = function() {
          document.body.classList.add("bodyout");
    };
}