jQuery(document).ready(function($){

  //nav menu
  $( ".menu" ).hide();
  $( ".hamburger" ).on("click", function() {
    $( ".hamburger" ).toggleClass('is-active');
    $( "#navbar" ).toggleClass('sticky');
    $( ".menu" ).slideToggle( 'fast', function(){
    });
  });

  //toggles text on/off in about me section
  const $readBtn = $(".bottom button")
  $( ".bottom .textwidget" ).hide();
  $readBtn.on("click", function() {
    $( ".read-more .textwidget" ).toggle();
    $readBtn.html() === 'Read More' ? $readBtn.text('Show Less') : $readBtn.text('Read More')
    });

  
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
    });