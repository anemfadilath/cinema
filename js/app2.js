// carousel owl deplacement owl 
$(document).ready(() => {

    let navText = ["<em class='bx bx-chevron-left'></em>", "<em class='bx bx-chevron-right'></em>"];


    $('.contenu-slide').owlCarousel({
        items: 2,
        dots: false,
        nav: true,
        navText: navText,
        margin: 15,
        responsive: {
            500: {
                items: 2
            },
            1280: {
                items: 4
            },
            1600: {
                items: 6
            }
        }
    });



    

});

