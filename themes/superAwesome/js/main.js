jQuery(document).ready(function($){

  //nav menu hides on click
  $( ".menu" ).hide();
  $( ".hamburger" ).unbind("click touchend").on("click touchend", function(event) {

    event.stopPropagation();

    $(".menu").slideUp("fast")
    $( ".hamburger" ).addClass('is-active').hide();
    // $( "#navbar" ).toggleClass('sticky');
    $( ".menu" ).slideToggle( 'fast', function(){
      $("body").unbind("click touchend").on("click touchend", function(event){
        event.stopPropagation();
        if(event.target !== 'menu' || event.target == 'li' && $( ".hamburger").hasClass('is-active')){
          console.log('yo')
          $(".menu").slideUp("fast")
          $( ".hamburger" ).removeClass('is-active').show(); 
        }
      });
    })
    return false 
  }); 

  $( ".menu ul a li" ).on("click",  function() {
    $( ".hamburger" ).toggleClass('is-active');
  
    $('.menu').toggle()
  });

  $('textarea').addClass('notes')
  $('textarea').attr('rows', '5')

  //toggles text on/off in about me section
  const $readBtn = $(".bottom button")
  $( ".read-more" ).hide();
  $readBtn.on("click", function() {
    $( ".read-more" ).slideToggle('slow');
    $('.dots').slideToggle('slow');
    $readBtn.html() === 'READ MORE' ? $readBtn.text('SHOW LESS') : $readBtn.text('READ MORE')
    });

  //loads grid project content on/off
  
  const $loadBtn = $(".projects button")
  if ($(window).width() > 1024) {
    $( ".carousel-cell:nth-child(n+7)" ).hide();
  }
  $loadBtn.on("click", function() {
    $( ".carousel-cell:nth-child(n+7)" ).slideToggle('slow');
    $loadBtn.html() === 'LOAD MORE' ? $loadBtn.text('SHOW LESS') : $loadBtn.text('LOAD MORE')
    });

  //shows/hide 'load more' button based on screen width
  if ($(window).width() < 1024) {
      $loadBtn.hide();
      $('.gradLine2').hide();
  }
  $(window).resize(function() {
    if ($(window).width() < 1024) {
        $loadBtn.hide();
    } else if ($(window).width() >= 1024) {
      $loadBtn.show();
  }
  });

  //changes input functionality for attachments to display icon and custom text
  $("input[type='file']").hide();
  $(".attach").click(function () {
    $("input[type='file']").trigger('click');
  });
  $("input[type='file']").on('change', function(event) {
    $('p.attach-notice').remove()
    $('.attach').append(`<p class="attach-notice">You've selected: ${event.target.files[0].name}</p>`)
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
