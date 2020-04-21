     // Owl-carousel for blog
     $(document).ready(function(){
    
     $('.owl-carousel').owlCarousel({

         loop:true,
         autoplay:true,
         autoplayTimeout:4000,
         dots:true,
         nav:true,
         navText:[$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next')]

     });
     
     })