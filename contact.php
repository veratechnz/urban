<!DOCTYPE html>
<html lang="en">

<?php include 'inc/head.inc.php';?>
<body>
<!--Contact section-->
<section>

<?php include 'inc/logonav.inc.php';?>
<?php include 'inc/js.inc.php';?>


<div id="map-canvas"></div>
<div class="container-fluid" id="main">
  <div class="row">
  	<div class="col-xs-4 col-xs-push-2" id="left">
          <h1>Contact</h1>

<!-- 
<div class="container">
<div class="row" id="contact-header">
<div class="col-lg-6 col-lg-push-3">
<h1>Contact</h1>
</div>
</div> -->
<!--Contact details-->

<div class="col-lg-6">
<p><a href="tel:03-477-2277"><i class="fa fa-phone"></a></i> 03-477-2277</p>					
<p><a href="mailto:someone@gmail.com?Subject=Hello" target="_top"><i class="fa fa-envelope-o"></a></i> faye@urbancalm.co.nz</p>
<p><i class="fa fa-map-marker"></i> Level 1, Clarion Building,</p>
<p>286 princes St, Dunedin</p>

<!--Map-->
<div class="col-lg-6">
<div id="map">
<iframe src="https://www.google.com/maps/
embed?pb=!1m14!1m8!1m3!1d2777.646030259445!2d170.5
0105800000003!3d-45.878391!3m2!1i1024!2i768!4f13.1
!3m3!1m2!1s0xa82eac0e54e7cee3%3A0xccb251b76e78a986
!2ssiliconcoach+ltd!5e0!3m2!1sen!2snz!4v1407901911
734" width="400" height="300" frameborder="0" 
style="border:0" class="img-circle"></iframe>
</div>
</div>

<div class="container" id="message">
<div class="col-lg-6 col-lg-push-6">

          <h1>Contact</h1>
			<div class="col-md-6">
				<div class="form-group">
					<label for="name">
						Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
					</div>
					<div class="form-group">
						<label for="email">
							Email Address</label>
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
							</span>
							<input type="email" class="form-control" id="email" placeholder="Your email here" required="required" /></div>
						</div>
						<div class="form-group">
							<label for="subject">
								Subject</label>
								<select id="subject" name="subject" class="form-control" required="required">
									<option value="na" selected="">Choose One:</option>
									<option value="service">General Customer Service</option>
									<option value="suggestions">Suggestions</option>
									<option value="product">Product Support</option>
								</select>
							</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="name">
						Message</label>
						<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
						placeholder="Message"></textarea>
					</div>
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
						Send Message</button>
					</div>
				</div>
			</form>
		</div>



<!--Send us a message form-->



		<div class="row">
			<div class="col-md-3">
				<img src="images/pagedevider900.png">
			</div>
		</div>
		<br>
		<div class="row" id="address">
			<div class="col-md-12 col-md-offset-3">
				<p>PHONE: 03-477-2277 | LEVEL 1, CLARION BUILDING, 286 PRINCES STREET, DUNEDIN</P>
				</div>
			</div>
		</section>

					<script>
					$(window).load(function(){
//This 'body' jQuery will only load the fully rendered page when it is ready with js.  
$('body').show();
// nivoSlider instructions
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