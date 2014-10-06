<!DOCTYPE html>
<html lang="en">
<!-- Php Head Begins -->
<?php include 'inc/head.inc.php';?>
<!-- Php Head Ends -->
<body>
<!--About section-->
<section id="about">
<!-- Php Nav and Links -->
<?php include 'inc/logonav.inc.php';?>
<?php include 'inc/js.inc.php';?>
<!-- Php Nav and Links End -->
  <div class="container fader">  
    <!-- Home Page Slider Section -->
        <div class="row voffset3">
          <div class="col-md-6 col-md-offset-3">
            <div class="rounded nivoSlider" id="slider">
              <img src="images/slider-1.jpg" class="center-block text-center slider-panel" alt="Welcome To Urban Calm">
              <img src="images/slider-2.png" class="center-block text-center slider-panel" alt="Welcome To Urban Calm">
              </div>
              <p class="text-center homepara">Phone: 03 477 2277 &nbsp;|&nbsp; Level 1 Clarion Building, 286 Princess Street Dunedin.</p>
          </div>
        </div>
    <!-- Home Page Slider Section Ends -->
    </div> 
    <!-- /container ends -->
    <!-- Js Scripts Begin -->
    <?php include 'inc/js.inc.php';?>
    <!-- Js Scripts End -->
    <!-- Non js fallback to override body element non-display issues that may arise. -->
    <?php include 'inc/noscript.inc.php';?>
    <!-- End of non js fallback -->
  </body>
</html>
