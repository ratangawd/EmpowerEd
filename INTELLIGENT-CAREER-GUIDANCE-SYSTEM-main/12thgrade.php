<!-- for knowlegde network -->
<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<?php include 'header.php'?>
		
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.html">Home</a></li>
							<li>Recommended Secondary Education</li>
						</ul>
						<h1 class="white-text">You can choose from the below education options</h1>
					</div>
				</div>
				
			</div>

		</div>
		<!-- /Hero-area -->

		

		<!-- Knowledge Network -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">
				<!-- tags widget -->
					<div class="widget tags-widget">
							<a class="tag" href="#bdp">Bachelor's Degree Programs</a>
							<a class="tag" href="#et ">Engineering and Technology</a>
							<a class="tag" href="#med">Medical and Allied Sciences</a>
							<a class="tag" href="#law">Law</a>
							<a class="tag" href="#commerce">Commerce and Business</a>
							<a class="tag" href="#darts">Design and Arts</a>
							
						</div>
						<!-- /tags widget -->
				<!-- row -->
				<div class="row" id="bdp">

					<!-- main Knowledge Network -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">

						<ul class="list" >

							<li id="et">
								<h2>

									<!-- Title -->
									Bachelor's Degree Programs
									
								</h2>
								<p> 
                                <strong>Bachelor of Arts (BA)</strong>: A three-year undergraduate program that covers subjects such as literature, history, sociology, and more.<br>
<strong>Bachelor of Science (BSc)</strong>: A three-year program focusing on science subjects like physics, chemistry, biology, mathematics, etc.<br>
<strong>Bachelor of Commerce (BCom)</strong>: A three-year program specializing in commerce and business-related subjects.</p>
								
							</li>

							<li>
								<h2 id="med">

									<!-- Title -->
                                    Engineering and Technology

								</h2>
								<p><strong>Bachelor of Technology (B.Tech)</strong>: A four-year undergraduate program in various engineering disciplines like mechanical, electrical, computer science, etc.<br>
<strong>Bachelor of Engineering (BE)</strong>: Similar to B.Tech, BE is a four-year program offered in engineering disciplines.</p>
								
							</li>

							<li>
								<h2 id="law">

									<!-- Title -->
									Medical and Allied Sciences

								</h2>
								<p><strong>Bachelor of Medicine and Bachelor of Surgery (MBBS)</strong>: A five-and-a-half-year program for those interested in pursuing a career in medicine.<br>
<strong>Bachelor of Dental Surgery (BDS)</strong>: A five-year program for dental studies. 
                                </p>
							</li>

							<li>
								<h2 id="commerce">

									<!-- Title -->
									Law

								</h2>
								<p><strong>Bachelor of Laws (LLB)</strong>: A three-year program for those aspiring to become lawyers</p>
							
							</li>

							<li>
								<h2 id="darts">

									<!-- Title -->
                                    Commerce and Business

								</h2>
								<p><strong>Bachelor of Business Administration (BBA)</strong>: A three-year program focusing on business and management studies.<br>
<strong>Chartered Accountancy (CA)</strong>: A professional accounting course that can be pursued alongside graduation.</p>
								<
							</li>

							<li>
								<h2 id="Cyber Security Specialist">

								<!-- Title -->
                                Design and Arts
								</h2>
								<p> <strong>Bachelor of Design (B.Des)</strong>: A four-year program for students interested in various design disciplines.<br>
<strong>Bachelor of Fine Arts (BFA)</strong>: A degree in fine arts, covering areas like painting, sculpture, and applied arts.</p>
								
							</li>

							

						</ul>

							

						</div>
						<!-- /row -->
						
					</div>
					<!-- /main Knowledge Network -->


				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Knowledge Network -->

		
		<?php include 'footer.php'?>

	</body>
</html>
