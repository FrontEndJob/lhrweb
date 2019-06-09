<?php include 'header.php';?>
<?php 

$page_name = "Contact Us";


include 'page-banner.php';


?>

	<!--================================
        contact us  part start 
    =====================================-->
	<section id="contact-main">
		 <div class="google_map_wrapper">
			<div id="map"></div>
		</div> 
		<div class="contact-form-area-padding">
			<div class="container">
				<div class="row contact-form-area">
					<div class="col-lg-6 contact-address">
						<h4>our contacts</h4>
						<p>We are a awward winning multinaitonal Company.
							<br> We Believe quality and standard worlwide</p>
						<div class="con-num">
							<a class="d-block" href="#">
								<i class="fa fa-map-marker"></i>
								123, USA New Work.
							</a>
							<a class="d-block" href="tel:+333123456789">
								<i class="fa fa-phone"></i>
								+333 123-456-789
							</a>
							<a class="d-block" href="tel:+333123456789">
								<i class="fa fa-phone"></i>
								+333 234-654-465
							</a>
							<a class="d-block" href="mailto:envatoprime@gmail.com">
								<i class="fa fa-envelope"></i>
								demomailname@gmail.com
							</a>
							<a class="d-block" href="mailto:envatoprime@gmail.com">
								<i class="fa fa-envelope"></i>
								examplemailname@gmail.com
							</a>
							<a class="d-block" href="#">
								<i class="fa fa-globe"></i>
								www.demositelink.com
							</a>
							<a class="d-block" href="#">
								<i class="fa fa-globe"></i>
								www.anothername.com
							</a>
						</div>
						<div class="f-social-links">
							<a href="#" target="_blank">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#" target="_blank">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#" target="_blank">
								<span class="fa fa-linkedin"></span>
							</a>
							<a href="#" target="_blank">
								<span class="fa fa-instagram"></span>
							</a>
							<a href="#" target="_blank">
								<span class="fa fa-pinterest"></span>
							</a>
						</div>
					</div>
					<div class="col-lg-6 contact-form">
						<div class="row">
							<div class="col-12">
								<div class="contact-block-form">
									<h4>send us a message</h4>
									<p>Feel free to drop us a line below.</p>
								</div>
							</div>
						</div>
						<form id="c-form" action="#" method="post">
							<div class="row">
								<div class="col-md-12">
									<input type="text" class="form-control" id="name" placeholder="Enter Name" required>
								</div>
								<div class="col-md-12">
									<input type="email" class="form-control" id="email" placeholder="Eenter Mail" required>
								</div>
								<div class="col-md-12">
									<input type="tel" class="form-control" id="phone" placeholder="Phone Number" required>
								</div>
								<div class="col-12">
									<textarea class="form-control" rows="3" id="message" placeholder="Comment" required></textarea>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-contact"> Send Us
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--================================
			contact us part end
			=====================================-->

<?php include 'footer.php';?>