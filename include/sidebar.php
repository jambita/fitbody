<div class="col-md-3 col-sm-12 pull-left">
	<div class="single-sidebar-wrapper">
		
		<div class="single-sidebar categories">
			<div class="sidebar-title">
				<h3>Proizodi</h3>
			</div>
			<ul>
				<?php  
					$supplements_sql = "SELECT * FROM supplements";
					$supplements_query = mysqli_query($connect, $supplements_sql);

					if($supplements_query){
						while($supplement = mysqli_fetch_assoc($supplements_query)){ 
							$supplement_name = $supplement['supplement_name'];
							$supplement_name = str_replace("-", " ", $supplement_name);
							$supplement_name = ucwords($supplement_name);
						?>
							<li><a href="?supplements=<?php echo $supplement['supplements_id'];?>"><?php echo $supplement_name;?></a></li>
						<?php }
					}
				?>
			</ul>
		</div>

		<div class="single-sidebar categories">
			<div class="sidebar-title">
				<h3>U Ponudi</h3>
			</div>
			<ul>
				<?php  
					$category_sql = "SELECT category_name FROM category";
					$category_query = mysqli_query($connect, $category_sql);

					if($category_query){
						while($category_row = mysqli_fetch_assoc($category_query)){ 
							$category_name = $category_row['category_name'];
							$category_name = str_replace("-", " ", $category_name);
							$category_name = ucwords($category_name);
						?>
							<li><a href="?buy=<?php echo $category_name; ?>"><?php echo $category_name;?></a></li>               
						<?php }
					} 
				?>  
			</ul>
		</div>
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
		<div class="single-sidebar call-to-action-box">
			<h3>Imate bilo kakvo pitanje ?</h3>
			<h3>Pozovite nas :</h3>
			<h3><span><?php echo $phone; ?></span></h3>
			<h3>Za detalje</h3>
		</div>
		
	</div>
</div>