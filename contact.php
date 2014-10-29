<?php include 'inc/contact.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<!-- Php Head Begins -->
<?php include 'inc/head.inc.php';?>
<!-- Php Head Ends -->
<body>
  <div id="wrap">
<!--About section-->
<section id="about">
<!-- Php Nav and Links -->
<?php include 'inc/logonav.inc.php';?>
<!-- Php Nav and Links End -->
<div class="container fader">
  <div class="infader">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1">
        <div class="headerb hidden-xs">
            <h1>CONTACT</h1>
        </div>
        <div class="row">
          <div class="col-md-4">
              <p><i class="fa fa-phone voffset4"></i>&nbsp;03 477 2277</p>
              <p><i class="fa fa-envelope-o"></i>&nbsp;faye@urbancalm.co.nz</p>
              <p class="vboffset1"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Level 1 Clarion Building<br>286 Princess Street Dunedin</p>
          <p><a target="_blank" href="https://goo.gl/maps/Q4jKQ"><img src="images/map.jpg" alt="Map Of Urban Calm Dunedin Yin Yoga" title="Go To Our Google Map" class="img-rounded img-responsive vboffset" href="https://goo.gl/maps/Q4jKQ"></a></p>
                <a href="bookings.php" class="btn btn-default btn-lg center-block bwidth voffset7">BOOK TODAY</a>                 
            </div>
            <div class="col-md-8">
                    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">

                    <?php if(isset($hasError)) { //If errors are found ?>
                      <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
                    <?php } ?>

                    <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                      <div class="alert alert-success">
                        <p><strong>Message Successfully Sent!</strong></p>
                        <p>Thank you for using our contact form, <strong><?php echo $name;?></strong>Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>
                      </div>
                    <?php } ?>

                    <div class="form-group" id="contact-page">
                      <label for="name" class="label-new">Your Name<span class="help-required">*</span></label>
                      <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
                    </div>

                    <div class="form-group" id="contact-page">
                      <label for="email" class="label-new">Your Email<span class="help-required">*</span></label>
                      <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
                    </div>

                    <div class="form-group" id="contact-page">
                      <label for="message" class="label-new">Message<span class="help-required">*</span></label>
                      <textarea rows="4" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
                    </div>

                    <div class="actions">
                      <input type="submit" value="SEND" name="submit" id="submitButton" class="btn btn-default btn-lg voffset6" title="Click here to submit your message!" />
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
        </div>
      </div>
      <!-- Full CTA Section -->
        <div class="col-sm-12">     
                    <!-- Blockquote -->
                    <div class="col-md-12 vboffset">
                      <hr>
                    <blockquote>
                    <h2>"IT WAS AN AMAZINGLY COMFORTABLE FIRST CONTACT WITH YOGA AND IT HAS BECOME SO QUICKLY A PART OF MY LIFE. I LOOK FORWARD TO IT AND ALWAYS TAKE A SENSE OF 
                      CALMNESS WITH ME AFTER HAVING SPENT AN HOUR HERE."</h2>
                        <h2 class="person">ANON</h2>
                        <!-- Float Fix div -->
                        <div style="clear: both;"></div>
                        <!-- Float Fix div ends -->
                    </blockquote>
                    <hr>
                    </div>
                    <!-- Blockquote End -->
        </div>
        <!-- Booking Info Ends -->
        <!-- CTA Buttons -->
        <div class="col-md-4 vboffset1">
          <h3 class="text-center">TEACHER TRAINING</h3>
            <a href="bookings.php" class="btn btn-default btn-lg center-block bwidth voffset1">BOOK TODAY</a>                  
        </div>
        <div class="col-md-4 vboffset1">
          <h3 class="text-center">PAYMENTS ONLINE</h3>
            <a href="bookings.php" class="btn btn-default btn-lg center-block bwidth voffset1">BOOK TODAY</a>                  
        </div>
        <div class="col-md-4 vboffset1">
          <h3 class="text-center">BOOK YOUR CLASS</h3>
            <a href="bookings.php" class="btn btn-default btn-lg center-block bwidth voffset1">BOOK TODAY</a>                  
        </div>
        <!-- Full CTA Buttons End -->
<?php include 'inc/urban-div.inc.php';?>
<?php include 'inc/mobfooter.inc.php';?>
<!-- Container End -->
</div>
</div>
</div>
</div>
</div>
</div>
<!--Spiritual information section ends-->
<?php include 'inc/footer.inc.php';?>
</section>
<?php include 'inc/js.inc.php';?>
</body>
</html>
