const aisleMainImage = document.querySelectorAll(".aisle__page .main__image"); 

for (var i = 0; i < aisleMainImage.length; i++) {
    aisleMainImage[i].addEventListener("mouseover", switchImage);
}

for (var i = 0; i < aisleMainImage.length; i++) {
    aisleMainImage[i].addEventListener("mouseout", switchImage);
}

function switchImage() {
    let parent = this.parentNode; 
    let children = parent.getElementsByTagName('img');
    let temp = children[0].src; 
    children[0].src = children[1].src;
    children[1].src = temp; 
}