<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
   <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
   <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
<section class="slide owl-carousel owl-theme">
    <div class="slider-item slider-item-one">

    </div>
    <div class="slider-item slider-item-two">

    
    </div>
    <div class="slider-item slider-item-three">
    </div>
    <div class="slider-item slider-item-four">
</div>
    <div class="slider-item slider-item-five">
</div>
    <div class="slider-item slider-item-six">
</div>
</section>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    
    </script>
    
    
</body>
</html>