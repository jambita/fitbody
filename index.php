<?php

    // Tomorrow

    $where = "";
    if(isset($_GET['supplements']) && !empty(trim($_GET['supplements'])) && is_numeric($_GET['supplements'])){
        
        $supplement_id = (int)$_GET['supplements'];
        $supplement_category = "supplement_id"; // Suplementi
        $where = "WHERE products.$supplement_category=$supplement_id";
    }
    else if(isset($_GET['category']) && !empty(trim($_GET['category'])) && is_numeric($_GET['category'])){
        
        $category_id = (int)$_GET['category'];
        $category_name = "category_id"; // Suplementi
        $where = "WHERE products.$category_name=$category_id";
    }
    
    $items_sql = "SELECT * FROM products INNER JOIN supplements ON products.supplement_id=supplements.supplements_id INNER JOIN category ON products.category_id=category.category_id $where";

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
		
		</div>
	</section>
    <section class="call-to-action">
		<div class="container">
			<div class="col-md-6">
				<div class="single-call-to-action left">
					<div class="title">
						<h3>Bcaa</h3>
						<h4>Proširiti svoju snagu</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, id nec modo tantas amet <br><b>stet laboramus cu usu</b> qui te ipsum dolor.</p>
					<a href="#" class="see-more">See Impact</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="single-call-to-action right" style="background-image: url(images/banner/211.jpg), url(images/banner/background-shape.png);">
					<div class="content">
						<div class="title">
							<h3>On nutrition</h3>
							<h4>Protein whey</h4>
						</div>
						<p>Lorem ipsum dolor sit amet, id nec modo tantas amet <br><b>stet laboramus cu usu</b> qui te ipsum dolor.</p>
						<a href="#" class="see-more">Learn more</a>
					</div>
				</div>
			</div>
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
						<?php
							//$items_sql = "SELECT * FROM products ORDER BY products_id DESC LIMIT 9";
							$items_result = mysqli_query($connect, $items_sql);

							if($items_result){
								while($product = mysqli_fetch_assoc($items_result)){ ?>
									<div class="col-md-3 col-sm-6">
										<div class="single-our-product">
											<div class="img-box">
												<img src="images/<?php echo $product['category_id'] . "/" . $product['product_image']; ?>" alt="">
											</div>
											<h3><?php echo $product['product_name']; ?></h3>
											<span><?php echo $product['product_price']; ?></span>
											<a href="#" class="read-more">Detalji i kupovina</a>
										</div>
									</div>
								<?php }
							}
						?>
                                                <?php
                                                    
                                                ?>
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
	<?php include_once("include/footer.php"); ?>


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

	<!-- fancy box -->
	<script src="assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
	<script src="assets/bmi-calculator.js"></script>
	<script src="assets/scrollbar.js"></script>

	<!-- theme custom js  -->
	<script src="js/default-map-script.js"></script>
	<script src="js/custom.js"></script>


	<?php mysqli_close($connect); ?>
</body>
</html>