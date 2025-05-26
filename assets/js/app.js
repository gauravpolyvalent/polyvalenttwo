 const burger = document.querySelector(".burger-menu");
 const nav = document.querySelector(".navbar-header");
burger.addEventListener("click", () => {
        nav.classList.toggle("active");
    });

// cursor code here 

$(document).ready(function () {
    $('.client-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    arrows: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false
                }
            },
            {
                breakpoint: 480, // More realistic than 320
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            }
        ]
    });
});