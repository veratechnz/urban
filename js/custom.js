//All Home Page Slider Controls
    $(window).load(function(){
      // nivoSlider instructions
          $('#slider').nivoSlider({
            effect: 'fade',
            animSpeed: 3000,
            pauseTime: 4000,
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

//Page Fade Effect // Separate From The Slide Show
            $('.fader').css('display', 'none');
            $('.fader').fadeIn(1200);

            $('.cent-fix a').click(function(event){
                event.preventDefault();
                newLocation = this.href;
                $('.fader').fadeOut(1200, newPage);
            });

          function newPage() {
            window.location = newLocation;
          }

//Window.load function ends
    });

