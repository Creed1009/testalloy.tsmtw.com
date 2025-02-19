$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 3,
        responsive: {
            0: { items: 1},
            768: { items: 1},
            1024: { items: 1}
        }
    });
});