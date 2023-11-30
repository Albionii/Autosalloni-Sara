let print = console.log;

function openImage(lokacioni){
    let img = new Image();
    img.src = lokacioni;
    let imagediv = document.getElementById("imageWholeScreen");
    imagediv.style.visibility = 'visible';
    document.getElementById("imageWholeScreen").appendChild(img);
}
function clearImage(){
    let imagediv = document.getElementById("imageWholeScreen");
    imagediv.innerHTML = "";
    imagediv.style.visibility = 'hidden';
}

