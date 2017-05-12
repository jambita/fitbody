<?php
	$array_pages = array("brend", "o-nama", "video", "contact");
	$path_fix = "";
	$server_fix = str_replace("/", "", $_SERVER["REQUEST_URI"]);
	if(in_array($server_fix, $array_pages)) {
		$path_fix = "../";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FitLab || Responsive HTML 5 Template</title>
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header class="header stricky">
	<div class="container">
		<div class="logo pull-left">
			<a href="index.html">
				<img src="img/resources/logo.png" alt="Awesome Image"/>
			</a>
		</div>
		<div class="header-right pull-right">
			<nav class="mainmenu-holder">
				<div class="nav-header">
					<ul class="navigation">
						<li class="dropdown">
							<a href="index.html">Naslovna</a>
						</li>
						<li class="dropdown">
							<a href="about.html">Proizvodi</a>
						</li>
						<li class="dropdown">
							<a href="our-class.html">Blog</a>
							<ul class="submenu">
								<li><a href="our-package.html">Suplementi</a></li>
								<li><a href="schedule.html">Ishrana</a></li>
								<li><a href="single-class.html"></a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="shop.html">O nama</a>
							<ul class="submenu">
								<li><a href="single-shop.html">Single Shop</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="blog-left.html">Video</a>
						</li>
						<li><a href="contact.html">Kontakt</a></li>
					</ul>
				</div>
				<div class="nav-footer">
					<ul>
						<li>
							<button><i class="fa fa-search"></i></button>
							<ul class="search-box">
								<li>
									<form action="#">
										<input type="text" placeholder="Search for something...">
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</li>
							</ul>
						</li>
						<li><button class="menu-expander"><i class="fa fa-list-ul"></i></button></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>

	<section class="inner-banner">
		<div class="container">
			<div class="title pull-left">
				<h3>Proizvodi</h3>
		</div>
	</section>
	


	<section class="blog-page-content latest-news section-padding our-product shop-page">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12 pull-right">
					<div class="quantity-box clearfix">
						<div class="text-box pull-left">
							<p><span>8</span> showing of <span>20</span> results</p>
						</div>
						<div class="select-box pull-right">
							<select name="sorting" class="select-menu">
								<option value="">Deafult Sorting</option>
								<option value="">Sort By Title</option>
								<option value="">Sort By Date</option>
								<option value="">Sort By Alphabet</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="single-our-product">
								<div class="img-box">
									<img src="img/our-products/1.png" alt="">
								</div>
								<h3>Combat Protein Power</h3>
								<span>$110</span>
								<a href="#" class="read-more">Detalji i kupovina</a>
							</div>
						</div>
					</div>
					
					<ul class="page-navigation">
						<li><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-12 pull-left">
					<div class="single-sidebar-wrapper">
						<div class="single-sidebar popular-product">
							<div class="sidebar-title">
								<h3>Popularan proizvod</h3>
							</div>
							<ul>
								<li class="clearfix">
									<div class="content-box pull-left">
										<h3>Grass Trimmer</h3>
										<ul class="list-inline">
											<li><span><i class="fa fa-star"></i></span></li>
											<li><span><i class="fa fa-star"></i></span></li>
											<li><span><i class="fa fa-star"></i></span></li>
											<li><span><i class="fa fa-star"></i></span></li>
											<li><span><i class="fa fa-star-o"></i></span></li>
										</ul>
										<span class="price">$37</span>
									</div>
									<div class="img-box pull-right">
										<img src="img/our-products/thumb-3.png" alt="Awesome Image"/>
									</div>
								</li>
							</ul>
						</div>
						<div class="single-sidebar categories">
							<div class="sidebar-title">
								<h3>Kategorije</h3>
							</div>
							<ul>
								<li><a href="#">Nutrition</a></li>
							</ul>
						</div>
						<div class="single-sidebar categories">
							<div class="sidebar-title">
								<h3>U ponudi</h3>
							</div>
							<ul>
								<li><a href="#">Nutrition</a></li>
							</ul>
						</div>
						<div class="single-sidebar call-to-action-box">
							<h3>Imate bilo kakvo pitanje ?</h3>
							<h3>Pozovite nas :</h3>
							<h3><span>(+880) 1723801729</span></h3>
							<h3>Za detalje</h3>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>



	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget">
						<a href="index.html">
							<img src="img/resources/logo.png" alt="Awesome Image"/>
						</a>
						<p>Lorem ipsum dolor sit amet, eu me seo  laboramus, iudico dummy  text <br>vituperatoribus at usu cum ex nostrud singulis, vis et nibh</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="footer-widget quick-link-widget">
						<div class="title">
							<h3>Quick Links</h3>
						</div>
						<ul class="cateogry-link">
							<li><a href="our-class.html">Classes</a></li>
							<li><a href="faq.html">Faq</a></li>
							<li><a href="trainer.html">Our Trainer</a></li>
							<li><a href="gallery-v1.html">Daily workout </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget latest-post-widget">
						<div class="title">
							<h3>Quick Links</h3>
						</div>
						<ul class="address-list">
							<li>
								<div class="icon-box">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="text-box">
									<p>60 Grant Ave. Carteret NJ 0708</p>
								</div>
							</li>
							<li>
								<div class="icon-box">
									<i class="fa fa-phone"></i>
								</div>
								<div class="text-box">
									<p>(880) 1723801729</p>
								</div>
							</li>
							<li>
								<div class="icon-box">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div class="text-box">
									<p>example@gmail.com</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget">
						<div class="title">
							<h3>Address</h3>
						</div>
						<ul class="address-list">
							<li>
								<div class="icon-box">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="text-box">
									<p>60 Grant Ave. Carteret NJ 0708</p>
								</div>
							</li>
							<li>
								<div class="icon-box">
									<i class="fa fa-phone"></i>
								</div>
								<div class="text-box">
									<p>(880) 1723801729</p>
								</div>
							</li>
							<li>
								<div class="icon-box">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div class="text-box">
									<p>example@gmail.com</p>
								</div>
							</li>
						</ul>
					</div>
					
				</div>
			</div>			
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="text-center bottom-text">
							Theme Created By <a href="#">Template_path</a> with love
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<!-- Modal -->
	<div class="modal contact-page fade booking-form" id="booking-form" tabindex="-1" role="dialog" aria-labelledby="booking-form">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="main-title"><i class="flaticon-interface"></i>Join us Today!!! </h3>
					<form class="contact-form search-form-box" action="inc/sendemail.php">
						<h3 class="title"><i class="fa fa-user"></i>Basic Information</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-grp">
									<input type="text" name="name" placeholder="Enter your First name*">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-grp">
									<input type="text" name="name" placeholder="Enter your Last name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-grp">
									<input type="text" name="email" placeholder="Enter your email*">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-grp">
									<input type="text" name="phone" placeholder="Enter your phone">
								</div>
							</div>							
							<div class="col-md-6">
								<div class="form-grp">
									<select class="select-menu">
										<option value="#">Gender</option>
										<option value="#">Male</option>
										<option value="#">Female</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-grp">
									<input type="text" placeholder="Enter your Date of Birth" class="date-picker">
								</div>
							</div>			
							<div class="clear"></div>							
							
						</div>
						<h3 class="title"><i class="fa fa-male"></i>Physical Information</h3>								
						<div class="row">								
								
								<div class="col-md-6">
									<div class="form-grp">
										<input type="text" name="phone" placeholder="Enter your Weight In KG">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-grp">
										<input type="text" name="phone" placeholder="Enter your height In Inch">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-grp">
										<select class="select-menu">
											<option value="#">Course Name</option>
											<option value="#">Course Name</option>
											<option value="#">Course Name</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-grp">
										<input type="text" name="phone" placeholder="Enter your Age">
									</div>
								</div>
							</div>
							<h3 class="title"><i class="fa fa-suitcase"></i>Personal Information</h3>								
							<div class="row">
								<div class="col-md-12">
									<div class="form-grp">
										<input type="text" placeholder="Enter Your Address">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-grp has-textarea">
										<textarea name="message" placeholder="Enter Your message"></textarea>
									</div>
									<button type="submit" class="pull-right thm-btn">JOIN US</button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>




		<!-- jQuery js -->
	<script src="assets/jquery/jquery-1.11.3.min.js"></script>
	<!-- bootstrap js -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- jQuery ui js -->
	<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
	<!-- owl carousel js -->
	<script src="assets/owl.carousel-2/owl.carousel.min.js"></script>
	<!-- jQuery validation -->
	<script src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
	<!-- gmap.js helper -->
	<script src="http://maps.google.com/maps/api/js"></script>
	<!-- gmap.js -->
	<script src="assets/gmap.js"></script>
	<!-- mixit up -->
	<script src="assets/jquery.mixitup.min.js"></script>
	<script src="assets/isotope.pkgd.min.js"></script>

	<!-- revolution slider js -->
	<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

	<!-- fancy box -->
	<script src="assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
	<script src="assets/bmi-calculator.js"></script>
	<script src="assets/scrollbar.js"></script>

	<!-- theme custom js  -->
	<script src="js/default-map-script.js"></script>
	<script src="js/custom.js"></script>


	
</body>
</html>