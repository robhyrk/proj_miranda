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
  $( ".read-more" ).hide();
  $readBtn.on("click", function() {
    $( ".read-more" ).slideToggle('slow');
    $readBtn.html() === 'Read More' ? $readBtn.text('Show Less') : $readBtn.text('Read More')
    });

  //change input field text
  // $("input[type='file']").prop('value', 'Attach');
  // console.log($("input[type='file']"))

  $("input[type='file']").hide();
  $(".attach").click(function () {
    $("input[type='file']").trigger('click');
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