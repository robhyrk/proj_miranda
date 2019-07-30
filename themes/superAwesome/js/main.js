jQuery(document).ready(function($){

    var $carousel = $('.carousel').flickity({
        imagesLoaded: true,
        percentPosition: false,
        fullscreen: true,
        lazyLoad: 1
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