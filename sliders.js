var currentImg = 0;
var imgs = document.querySelectorAll('.slider img');
var dots = document.querySelectorAll('.dot');
var interval = 3000;

var timer = setInterval(changeSlide, interval);

function changeSlide(n) {
    for (var i = 0; i < imgs.length; i++) {
        imgs[i].classList.remove('active');
        dots[i].classList.remove('active');
    }

    if (n !== undefined) {
        clearInterval(timer);
        timer = setInterval(changeSlide, interval);
        currentImg = n;
    } else {
        currentImg = (currentImg + 1) % imgs.length;
    }

    imgs[currentImg].classList.add('active');
    dots[currentImg].classList.add('active');
}
