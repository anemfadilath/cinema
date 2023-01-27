// carousel owl deplacement owl 
$(document).ready(() => {
    let navText = ["<em class='bx bx-chevron-left'></em>", "<em class='bx bx-chevron-right'></em>"];
    $('#header-carousel').owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: navText,
        autoplay: true,
        autoplayHoverPause: true
    });

});