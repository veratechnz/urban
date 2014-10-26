<?php
//If the form is submitted
if(isset($_POST['submit'])) {

  //Check to make sure that the name field is not empty
  if(trim($_POST['contactname']) == '') {
    $hasError = true;
  } else {
    $name = trim($_POST['contactname']);
  }

  //Check to make sure that the phone field is not empty
  if(trim($_POST['phone']) == '') {
    $hasError = true;
  } else {
    $phone = trim($_POST['phone']);
  }

  //Check to make sure sure that a valid email address is submitted
  if(trim($_POST['email']) == '')  {
    $hasError = true;
  } else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }

  //Check to make sure comments were entered
  if(trim($_POST['message']) == '') {
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['message']));
    } else {
      $comments = trim($_POST['message']);
    }
  }

  //If there is no error, send the email
  if(!isset($hasError)) {
    $emailTo = 'faye@urbancalm.co.nz'; // Put your own email address here
    $body = "Name: $name \n\nEmail: $email \n\nComments:\n $comments";
    $headers = 'From: Urban Calm Web Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
    $subject = 'Urban Calm Contact Form Mail';    
    
    mail($emailTo, $subject, $body, $headers);
    $emailSent = true;
  }
}
?>
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
          <p><a target="_blank" href="https://goo.gl/maps/Q4jKQ"><img src="images/map.jpg" alt="" class="img-rounded img-responsive vboffset" href="https://goo.gl/maps/Q4jKQ"></a></p>
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
        <?php include 'inc/cta.inc.php';?>
  <?php include 'inc/mobfooter.inc.php';?>
<!-- Container End -->
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
