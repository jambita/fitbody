<?php
    require_once("config.php");
    require_once("connect.php");
    include_once("include/constant.php");
	
    $title = "Home Page"; 
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
				<h3>Brendovi</h3>
			</div>
			<div class="breadcumb pull-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Product Page</a></li>
				</ul>
			</div>
		</div>
	</section>
    
     <section class="our-trainer section-padding our-trainer-page">
		<div class="container">
                    <img src="images/brend/amix.jpg" alt="">
                    <img src="images/brend/opticum.jpg" alt="">
                    <img src="images/brend/olimp.jpg" alt="">
		</div>
	</section>

        
        <?php include_once("include/footer.php"); ?>
    




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


	<!-- fancy box -->
	<script src="assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
	<script src="assets/bmi-calculator.js"></script>
	<script src="assets/scrollbar.js"></script>

	<!-- theme custom js  -->
	<script src="js/default-map-script.js"></script>
	<script src="js/custom.js"></script>


	
</body>
</html>
