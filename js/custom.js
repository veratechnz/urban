//All Home Page Slider Controls
$(window).load(function(){
  // nivoSlider instructions
      $('#slider').nivoSlider({
        effect: 'fade',
        animSpeed: 3000,
        pauseTime: 2000,
        directionNav: false,
        controlNav: false,
        startSlide:1,
        //This code is a work around that gets the slideshow to stop. It uses the slides slightly 
        //out of order.
        slideshowEnd: function(){
          $('#slider').data('nivo:vars').stop = true;} 
      });
      //This 'body' show is where jQuery will only load the fully rendered page when it is ready.  
      $('body').show();
//Window.load function ends
});

// Ajax Page Transition Function -- The .fader class is the overall container.
// The infader class is the subcontainer. 
$('.cent-fix a').on('click', function(e) {
      e.preventDefault();
      var url = this.href;

      //Romove and update the active menu type
      $('.cent-fix a').removeClass('active');
      $(this).addClass('active');

      //switch the page contents with ajax
      $('.infader').fadeOut(2000).delay(2000, function(){
          $('.fader').load(url + ' .fader').hide().fadeIn(2000);      
      });

  
//Click Function Ends
});

