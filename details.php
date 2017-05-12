<?php
require_once("config.php");
	require_once("connect.php");
	include_once("include/constant.php");
        
        $title = "Details";
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
				<h3>Product Page</h3>
			</div>
			<div class="breadcumb pull-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Product Page</a></li>
				</ul>
			</div>
		</div>
	</section>


	<section class="blog-page-content latest-news section-padding shop-page single-blog-page single-class-content">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12 col-xs-12 pull-left">
					<div class="single-product-box">
						<div class="row">
							<div class="col-md-6">
								<div class="single-product-carousel-content-box owl-carousel owl-theme">
									<div class="item">
										<img src="img/our-products/1.png" alt="Awesome Image"/>
									</div>
									<div class="item">
										<img src="img/our-products/2.png" alt="Awesome Image"/>
									</div>
									<div class="item">
										<img src="img/our-products/3.png" alt="Awesome Image"/>
									</div>
									<div class="item">
										<img src="img/our-products/4.png" alt="Awesome Image"/>
									</div>
								</div>
								<div class="single-product-carousel-thumbnail-box owl-carousel owl-theme">									
									<div class="item">
										<img src="img/our-products/thumb-4.png" alt="">
									</div>
									<div class="item">
										<img src="img/our-products/thumb-2.png" alt="">
									</div>
									<div class="item">
										<img src="img/our-products/thumb-1.png" alt="">
									</div>
									<div class="item">
										<img src="img/our-products/thumb-3.png" alt="">
									</div>
								</div>

							</div>
							<div class="col-md-6">
								<div class="top-box clearfix">
									<div class="text-box pull-left">
										<h3>Power Combat</h3>
										<div class="box">
											<ul class="list-inline">
												<li><span><i class="fa fa-star"></i></span></li>
												<li><span><i class="fa fa-star"></i></span></li>
												<li><span><i class="fa fa-star"></i></span></li>
												<li><span><i class="fa fa-star"></i></span></li>
												<li><span><i class="fa fa-star-o"></i></span></li>
											</ul>
											<span>( 3 Reviwes )</span>
										</div>
									</div>
									<div class="price-box pull-right">
										$25
									</div>
								</div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								<div class="bottom-box clearifx">
									<div class="input-box pull-left">
										<input type="number" value="1">
									</div>
									<div class="button-box pull-right">
										<a href="#" class="thm-btn">Add to Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-box">
							<div class="tab-title">
								<ul role="tablist">
									<li class="active" data-tab-name="description"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Descrption</a></li>
									<li data-tab-name="review"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">REVIEWS</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="single-tab-content tab-pane fade in active" id="description">
									<h3>Product Details</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus try's standard dummy text ever since the 1500s, when an unknown printer took a galley of types and scramie bled it to make a type specimen book.It has survived not only five centuries, but also the leap into</p>
									<br>
									<p><b>This is Bold text.</b> duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invul- idunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores <span class="highlighted">This is selected text</span> gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam <strong><i>This is italic style text</i></strong> eos erat, et nonumy sed tet or et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p><br>
									<h3 class="sub-title">Buletted List</h3>
									<div class="row bulleted-list">
										<div class="col-md-6">
											<ul>
												<li>A tailored, modern cut with a roomier </li>
												<li>no rebum. sanctus sea sed takimata ut</li>
												<li>cusam et justo duo dolores et </li>
												<li>aliquyam erat, sed diam voluptua. At</li>
												<li> Nonfunctional buttons at cuffs. </li>
												<li>os et accusam et justo duo dolores et</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul>
												<li>A tailored, modern cut with a roomier </li>
												<li>no rebum. sanctus sea sed takimata ut</li>
												<li>cusam et justo duo dolores et </li>
												<li>aliquyam erat, sed diam voluptua. At </li>
												<li> Nonfunctional buttons at cuffs. </li>
												<li>os et accusam et justo duo dolores et</li>
											</ul>
										</div>
									</div>
									<p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam, ea cum luptatum definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per, falli epicuri te eam. Sed sint quas at. Per aliquip necessi tatibus ne, per in movet fabulas, solum equidem ancillae id pro. Et sed zril veniam democritum</p>

								</div>
								<div class="single-tab-content tab-pane fade" id="review">
									<h3>Reviews</h3>
									<div class="single-comment-box">
										<div class="img-box">
											<img src="img/blog-post/comment-1.png" alt="Awesome Image"/>
										</div>
										<div class="content-box">
											<div class="top-box clearfix">
												<div class="left-box pull-left">
													<h3>jannatul</h3>
													<span class="date">15 january 2015</span>
												</div>
												<div class="right-box pull-right">
					 								<a class="reply-button" href="#">Reply</a>
												</div>
											</div>
											<p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam, ea cum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per. </p>

										</div>
									</div>
									<div class="single-comment-box">
										<div class="img-box">
											<img src="img/blog-post/comment-2.png" alt="Awesome Image"/>
										</div>
										<div class="content-box">
											<div class="top-box clearfix">
												<div class="left-box pull-left">
													<h3>jannatul</h3>
													<span class="date">15 january 2015</span>
												</div>
												<div class="right-box pull-right">
					 								<a class="reply-button" href="#">Reply</a>
												</div>
											</div>
											<p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam, ea cum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per. </p>

										</div>
									</div>
									<div class="single-comment-box">
										<div class="img-box">
											<img src="img/blog-post/comment-3.png" alt="Awesome Image"/>
										</div>
										<div class="content-box">
											<div class="top-box clearfix">
												<div class="left-box pull-left">
													<h3>jannatul</h3>
													<span class="date">15 january 2015</span>
												</div>
												<div class="right-box pull-right">
					 								<a class="reply-button" href="#">Reply</a>
												</div>
											</div>
											<p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam, ea cum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per. </p>

										</div>
									</div>

									<br><h3>Leave A Review</h3><br>
									<div class="leave-comment">
										<form action="#" class="row">
											<div class="col-md-6">
												<div class="form-grp">
													<input type="text" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-grp">
													<input type="text" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-grp">
													<textarea placeholder="Your Message"></textarea>
												</div>
												<button type="submit" class="thm-btn">Submit Review</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="related-popular-class">
						<h3 class="main-title">Releted Product</h3>
						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="single-our-product">
									<div class="img-box">
										<img src="img/our-products/1.png" alt="">
									</div>
									<h3>Combat Protein Power</h3>
									<span>$110</span>
									<a href="#" class="read-more">Add to cart</a>
								</div>
							</div>
							<div class="item">
								<div class="single-our-product">
									<div class="img-box">
										<img src="img/our-products/2.png" alt="">
									</div>
									<h3>Combat Protein Power</h3>
									<span>$110</span>
									<a href="#" class="read-more">Add to cart</a>
								</div>
							</div>
							<div class="item">
								<div class="single-our-product">
									<div class="img-box">
										<img src="img/our-products/3.png" alt="">
									</div>
									<h3>Combat Protein Power</h3>
									<span>$110</span>
									<a href="#" class="read-more">Add to cart</a>
								</div>
							</div>
							<div class="item">
								<div class="single-our-product">
									<div class="img-box">
										<img src="img/our-products/4.png" alt="">
									</div>
									<h3>Combat Protein Power</h3>
									<span>$110</span>
									<a href="#" class="read-more">Add to cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                            
				<?php include_once("include/sidebar.php"); ?>
			</div>
		</div>
	</section>	

<?php
include ('include/footer.php');
?>
