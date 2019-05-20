<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include_once('includes/metalinks.inc.php'); ?>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>

		<body>

		<?php include_once('includes/header.inc.php'); ?>
		<!-- #header --><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Us				
							</h1>	
							<p class="text-white"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contact Us</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 d-flex flex-column">
							<!-- <a class="contact-btns" href="#">Submit Your CV</a>
							<a class="contact-btns" href="#">Post New Job</a> -->
							<a class="contact-btns" href="#">Create New Account</a>
						</div>
						<div class="col-lg-8">
							<div class="form-area "  class="text-right">
								<div class="row">	
									<div class="col-lg-12 form-group">
										<input name="name" id="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" id="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" id="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
										<textarea  id="msg" class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										<button id="save_contact" class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

		<script>	
			$("#save_contact").click(function(){

var name = $("#name").val();
var email = $("#email").val();

var sub = $("#subject").val();
var msg = $("#msg").val();


  $.post("contact_save.php",
    {

      name:name,
      email:email,
      sub:sub,	
      msg:msg	
      
 },
    function(data,status){
   
console.log(data);

$(".alert-msg").text("Saved");


var name = $("#name").val("");
var email = $("#email").val("");

var sub = $("#subject").val("");
var msg = $("#msg").val("");

 });
  });


</script>

	
			<!-- start footer Area -->		
			<!-- start footer Area -->		
			<?php include_once('includes/footer.inc.php'); ?>
			<!-- End footer Area -->			

			<!-- start scripts -->
			<?php include_once('includes/scripts.inc.php'); ?>
			<!-- # end scripts -->	
		</body>
	</html>