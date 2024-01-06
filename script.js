let print = console.log;
function hasTouch() {
    return 'ontouchstart' in document.documentElement
           || navigator.maxTouchPoints > 0
           || navigator.msMaxTouchPoints > 0;
  }
  
  if (hasTouch()) { // remove all the :hover stylesheets
    try { // prevent exception on browsers not supporting DOM styleSheets properly
      for (var si in document.styleSheets) {
        var styleSheet = document.styleSheets[si];
        if (!styleSheet.rules) continue;
  
        for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
          if (!styleSheet.rules[ri].selectorText) continue;
  
          if (styleSheet.rules[ri].selectorText.match(':hover')) {
            styleSheet.deleteRule(ri);
          }
        }
      }
    } catch (ex) {}
  }
  
function openImage(lokacioni){
    // let img = new Image();
    // img.src = lokacioni;
    let imagediv = document.getElementById("imageWholeScreen");
    imagediv.style.visibility = 'visible';
    // document.getElementById("mainImageWhole").appendChild(img);
}
function clearImage(){
    let imagediv = document.getElementById("imageWholeScreen");
    // imagediv.innerHTML = '<div id = "x-image"><img src="fotot/ParentLogos/0.png" alt="" onclick="clearImage()" class="x-logo"></div> <div id = "mainImageWhole"> </div>';
    imagediv.style.visibility = 'hidden';
}

