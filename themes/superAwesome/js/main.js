jQuery(document).ready(function($){

  //nav menu
  $( ".menu" ).hide();
  $( ".hamburger" ).on("click", function() {
    $( ".hamburger" ).toggleClass('is-active');
    $( "#navbar" ).toggleClass('sticky');
    $( ".menu" ).slideToggle( 'fast', function(){
    });
  });

// window.onscroll = function() {stickyNav()};

// const navbar = document.getElementById("navbar");
// const sticky = navbar.offsetTop;

// function stickyNav() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky")
//   } else {
//     navbar.classList.remove("sticky");
//   }
// }
  
  //flickity
    var $carousel = $('.carousel').flickity({
        imagesLoaded: true,
        percentPosition: false,
        watchCSS: true,
        fullscreen: true,
      });
      
      var $imgs = $carousel.find('.carousel-cell img');
      // get transform property
      var docStyle = document.documentElement.style;
      var transformProp = typeof docStyle.transform == 'string' ?
        'transform' : 'WebkitTransform';
      // get Flickity instance
      var flkty = $carousel.data('flickity');
      
      $carousel.on( 'scroll.flickity', function() {
        flkty.slides.forEach( function( slide, i ) {
          var img = $imgs[i];
          var x = ( slide.target + flkty.x ) * -1/3;
          img.style[ transformProp ] = 'translateX(' + x  + 'px)';
        });
      });

})