
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <!-- mid section end -->
    <!-- mid section two start -->
     <section class="section-data">
        <div class="container">
            <div class="mid-section-wrapper-two">
                <div class="mid-shape">
                    <h1 class="text-center text-white  wow animate__animated animate__fadeInDown">Thank you, We will get back to you soon!</h1>
                    <p class="text-center text-white  wow animate__animated animate__fadeInDown">Look at what our clients have to say about us below.</p>
                </div>
    
            </div>
        </div>
     </section>
 

    <!-- mid section two start -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function () {
            $('.portfolio-slider').slick({
                slidesToShow: 3,
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
    </script>
<script>
        new WOW().init(); // initialize WOW
</script>
</body>

</html>