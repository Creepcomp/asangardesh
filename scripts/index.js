var slideIndex = 0;
var slideCount = 8;

addEventListener('load', slideShow);

function slideShow() {
    document.getElementById('image').style.backgroundImage = 'url(./images/gallery/' + slideIndex + '.jpg)';
    setSlide(slideIndex);
    slideIndex++;
    if (slideIndex >= slideCount) {slideIndex = 0}
    setTimeout(slideShow, 5000);
}

function setSlide(slideIndex) {
    for (let index = 0; index < slideCount; index++) {
        document.getElementById('imageNote').getElementsByTagName('div')[index].hidden = true;
        document.getElementById('imageCircles').getElementsByTagName('span')[index].style.backgroundColor = 'rgba(255, 255, 255, .5)';
    }
    document.getElementById('imageNote').getElementsByTagName('div')[slideIndex].hidden = false;
    document.getElementById('imageCircles').getElementsByTagName('span')[slideIndex].style.backgroundColor = 'rgba(255, 255, 255, 1)';
}