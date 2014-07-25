<!DOCTYPE html>
<html lang="en">
    <!-- Php Head Begins -->
    <?php include 'inc/head.inc.php';?>
    <!-- Php Head Ends -->
  <body>
    <!-- container begins -->  
    <div class="container">  
    <!-- Logo Nav Begins -->
    <?php include 'inc/logonav.inc.php';?>
    <!-- Logo Nav Ends -->
    <!-- Home Page Slider Section -->
        <div class="row voffset3">
          <div class="col-md-6 col-md-offset-3">
            <div class="rounded nivoSlider" id="slider">
              <img src="images/slide-1.png" class="center-block text-center slider-panel" alt="Welcome To Urban Calm">
              <img src="images/slider-2.jpg" class="center-block text-center slider-panel" alt="Welcome To Urban Calm">
              <img src="images/slider-3.jpg" class="center-block text-center slider-panel" alt="Welcome To Urban Calm">
              <img src="images/slider-4.jpg" class="center-block text-center slider-panel" alt="Welcome To Urban Calm">
              <img src="images/slider-5.jpg" class="center-block text-center slider-panel" alt="Welcome To Urban Calm">
              </div>
              <p class="text-center">Phone: 03 477 2277 &nbsp;|&nbsp; Level 1 Clarion Building, 286 Princess Street Dunedin.</p>
          </div>
        </div>
    <!-- Home Page Slider Section Ends -->
    </div> 
    <!-- /container ends -->
    <!-- Js Scripts Begin -->
    <?php include 'inc/js.inc.php';?>
    <!-- Js Scripts End -->
    <script>
    $(window).load(function(){
      $('#slider').nivoSlider({
        effect: 'fade',
        animSpeed: 3000,
        pauseTime: 8000,
        directionNav: false,
        controlNav: false 
      });
    });
    </script>
  </body>
</html>
