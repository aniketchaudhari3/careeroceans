	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
    <link rel="manifest" href="manifest.json">
<meta name="google-site-verification" content="J7LkBAQKjjXreFqyx3vYiGnPDHqv2ja-PtazbiBBidI" />
		<?php include_once('includes/metalinks.inc.php'); ?>
		<body>

		<?php include_once('includes/header.inc.php'); ?>
		<!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								Find your <span>Dream</span> Job today			
							</h1>	
							<form action="search.php" method="GET"   class="serach-form-area">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="job_title" placeholder="Job Title" required>
									</div>
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="job_location" placeholder="Job Location" required>
									</div>
									<div class="col-lg-4 form-cols">
									    <button type="submit" class="btn btn-info" name="search">
									      <span class="lnr lnr-magnifier"></span> Find Jobs
									    </button>
									</div>								
								</div>
							</form>	
							<h3 class="text-white"> or</h3>
											

							<form action="search.php" method="GET" class="serach-form-area">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
									
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select"">
											<select name="company">
												
												<option value="computer">COMPUTER</option>
												<option value="electrical">ELECTRICAL</option>
												<option value="mechanical">MECHANICAL</option>
												<option value="eletronic">ELECTRONIC</option>
											</select>
										</div>
									</div>

										
										</div>
						
									<div class="col-lg-4 form-cols">
									    <button type="submit" class="btn btn-info"  name="department">
									      <span class="lnr lnr-magnifier"></span> Find Jobs
									    </button>
									</div>								
								</div>
							</form>	

							<!-- <p class="text-white"> <span>Search by tags:</span> Technology, Business, Consulting, IT Company, Design, Development</p> -->
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
<br><br><br><br>
			<!-- Start features Area -->
			<section class="features-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Searching</h4>
								<p>
									We help you find the best jobs.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Applying</h4>
								<p>
									Apply to the jobs you	 really need
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Security</h4>
								<p>
									We never compromise on Security
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Notifications</h4>
								<p>
									We notify you about the best jobs
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End features Area -->
			
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Featured Job Categories</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a >
									<img src="img/o1.png" alt="">
								</a>
								<p>Accounting</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a >
									<img src="img/o2.png" alt="">
								</a>
								<p>Development</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a >
									<img src="img/o3.png" alt="">
								</a>
								<p>Technology</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a >
									<img src="img/o4.png" alt="">
								</a>
								<p>Media & News</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a >
									<img src="img/o5.png" alt="">
								</a>
								<p>Medical</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a >
									<img src="img/o6.png" alt="">
								</a>
								<p>Goverment</p>
							</div>			
						</div>																											
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->
			
			<script>
if ("serviceWorker" in navigator) {
    window.addEventListener("load", function () {
        navigator.serviceWorker.register("/service-worker.js");
    });
}

</script>	

			<!-- Start callto-action Area -->
			
			<?php include_once('includes/calltoaction.inc.php'); ?>
			<!-- End calto-action Area -->

			<!-- start footer Area -->		
			<?php include_once('includes/footer.inc.php'); ?>
			<!-- End footer Area -->		

			<!-- start scripts -->
			<?php include_once('includes/scripts.inc.php'); ?>
			<!-- # end scripts -->
		</body>
	</html>



