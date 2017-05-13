<?php
    
    require_once("config.php");
    require_once("connect.php");
    include_once("include/constant.php");
	
    $title = "blog"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title . " - " .$sitename; ?></title>
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
			<a href="<?php echo $url; ?>">
				<img src="img/resources/logo.png" alt="Awesome Image"/>
			</a>
		</div>
		<div class="header-right pull-right">
			<?php include_once("include/menu.php"); ?>
		</div>
	</div>
</header>
    
	
	<section class="inner-banner">
		<div class="container">
			<div class="title pull-left">
				<h3>Blog</h3>
			</div>
			<div class="breadcumb pull-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Blog Two Col</a></li>
				</ul>
			</div>
		</div>
	</section>	
	
        
        
	<section class="blog-page-content latest-news section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8  col-sm-12 pull-right">
					<div class="single-blog-post">
						<div class="img-box">
							<img src="img/blog-post/2-1.jpg" alt="Awesome Image"/>
							<div class="overlay">
								<div class="box">
									<div class="box-content">
										<h3>Sports</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="title-box">
							<h3>Loss fast fat with 6 ABS exersice</h3>
							<p><a href="#">By Rashed kabir</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">April 5, 2015</a></p>
						</div>
						<p>Lorem ipsum dolor sit amet, habeo porro congue it cum in, ei duo vide summo. Essent insolens ad vim posse set reformidans ex qui. Sea ut eius.</p>
						<a href="#" class="read-more">READ MORE</a>
					</div>

					<div class="single-blog-post">
						<div class="img-box">
							<img src="img/blog-post/2-2.jpg" alt="Awesome Image"/>
							<div class="overlay">
								<div class="box">
									<div class="box-content">
										<h3>Sports</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="title-box">
							<h3>Loss fast fat with 6 ABS exersice</h3>
							<p><a href="#">By Rashed kabir</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">April 5, 2015</a></p>
						</div>
						<p>Lorem ipsum dolor sit amet, habeo porro congue it cum in, ei duo vide summo. Essent insolens ad vim posse set reformidans ex qui. Sea ut eius.</p>
						<a href="#" class="read-more">READ MORE</a>
					</div>

					<div class="single-blog-post">
						<div class="img-box">
							<img src="img/blog-post/2-3.jpg" alt="Awesome Image"/>
							<div class="overlay">
								<div class="box">
									<div class="box-content">
										<h3>Sports</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="title-box">
							<h3>Loss fast fat with 6 ABS exersice</h3>
							<p><a href="#">By Rashed kabir</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">April 5, 2015</a></p>
						</div>
						<p>Lorem ipsum dolor sit amet, habeo porro congue it cum in, ei duo vide summo. Essent insolens ad vim posse set reformidans ex qui. Sea ut eius.</p>
						<a href="#" class="read-more">READ MORE</a>
					</div>

					<div class="single-blog-post">
						<div class="img-box">
							<img src="img/blog-post/2-4.jpg" alt="Awesome Image"/>
							<div class="overlay">
								<div class="box">
									<div class="box-content">
										<h3>Sports</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="title-box">
							<h3>Loss fast fat with 6 ABS exersice</h3>
							<p><a href="#">By Rashed kabir</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">April 5, 2015</a></p>
						</div>
						<p>Lorem ipsum dolor sit amet, habeo porro congue it cum in, ei duo vide summo. Essent insolens ad vim posse set reformidans ex qui. Sea ut eius.</p>
						<a href="#" class="read-more">READ MORE</a>
					</div>
					<ul class="page-navigation">
						<li><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
                            <?php include_once("include/sidebar.php"); ?>
			</div>
		</div>
	</section>


<?php
   include_once("include/footer.php");  
?>







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

