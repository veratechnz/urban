    $(window).load(function(){
      // nivoSlider instructions
      $('#slider').nivoSlider({
        effect: 'fade',
        animSpeed: 3000,
        pauseTime: 8000,
        directionNav: false,
        controlNav: false,
        startSlide:1,
        //This code is a work around that gets the slideshow to stop. It uses the slides slightly 
        //out of order.
        slideshowEnd: function(){$('#slider').data('nivo:vars').stop = true;} 
      });
      //This 'body' show is where jQuery will only load the fully rendered page when it is ready.  
      $('body').show();
    });