<!DOCTYPE html>
<html lang="en">
<!-- Php Head Begins -->
<?php include 'inc/head.inc.php';?>
<!-- Php Head Ends -->
<body>
	<!-- container begins -->  

	<!-- /container ends -->
	<!--About section-->
	<section>
		<section>

			<?php include 'inc/logonav.inc.php';?>
			<?php include 'inc/js.inc.php';?>

			<div class="container">
				<div class="row" id="events-header">
					<div class="col-md-3 col-md-push-11">
						<h1>Events</h1>
					</div>
				</div>
				<div class="row" id="events">     
					<div class="col-md-3">
						<img src="images/slider-6.jpg" class="img-circle" class="img-responsive" alt="image 1">
						<h3>Opening Day</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Consequatur, ea nihil repellendus nulla placeat veritatis
							enim odio sunt corporis aliquid nobis distinctio rerum 
							in eaque quibusdam magnam voluptatem iste autem.    
						</div>
						<div class="col-md-3">
							<img src="images/slider-7.jpg" class="img-circle" class="img-responsive" alt="image 1">
							<h3>Timetable</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Consequatur, ea nihil repellendus nulla placeat veritatis
								enim odio sunt corporis aliquid nobis distinctio rerum 
								in eaque quibusdam magnam voluptatem iste autem.    
							</div>
							<div class="col-md-3">
								<img src="images/slider-5.jpg" class="img-circle" class="img-responsive" alt="image 1">
								<h3>Yoga Abound</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
									Consequatur, ea nihil repellendus nulla placeat veritatis
									enim odio sunt corporis aliquid nobis distinctio rerum 
									in eaque quibusdam magnam voluptatem iste autem.    
								</div>
								<div class="col-md-3">
									<img src="images/slider-4.jpg" class="img-circle" class="img-responsive" alt="image 1">
									<h3>Free Session</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
										Consequatur, ea nihil repellendus nulla placeat veritatis
										enim odio sunt corporis aliquid nobis distinctio rerum 
										in eaque quibusdam magnam voluptatem iste autem.    
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-3 col-md-push-2">
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