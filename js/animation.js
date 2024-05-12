var box = document.querySelector('.serv_image');

var animation = anime({
    targets: box,
    translateX: 250,
    easing: 'easeInOutQuad',
    duration: 1000
});