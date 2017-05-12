<nav class="mainmenu-holder">
	<div class="nav-header">
		<ul class="navigation">
			<li><a href="<?php echo $url; ?>">Naslovna</a></li>
			<li><a href="<?php echo $brend; ?>">Brend</a></li>
			<li class="dropdown">
				<a href="<?php echo $blog; ?>">Blog</a>
				<ul class="submenu">
					<li><a href="">Suplementi</a></li>
					<li><a href="">Ishrana</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $onama; ?>">O nama</a></li>
			<li><a href="<?php echo $kontakt; ?>">Kontakt</a></li>
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