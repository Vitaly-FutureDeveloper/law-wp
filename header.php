<!DOCTYPE HTML>
<html>
	<head>

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	 <? wp_head(); ?>



	</head>
	<body <? body_class(); ?>>
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<? echo home_url('/') ?>">
						<!-- Law<span>.</span> -->
						<? bloginfo('name') ?>
					</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<? wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'container'       => false,
							'walker'          => new Law_Header_Menu,
						) ) ?>
						<!-- <ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="practice.html">Practice Areas</a></li>
							<li><a href="won.html">Won Cases</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Sign Up</span></a></li>
						</ul> -->
					</div>
				</div>
				
			</div>
		</div>
	</nav>