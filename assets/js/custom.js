$(document).rendy(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        item: 3,
        responsive: {
            0: { items: 1},
            768: { items: 3},
            1024: { items: 3}
        }
    });
});