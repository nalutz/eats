<!DOCTYPE html>
<html>
	
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<header>
			<div class="title-container">
				<button id="menu-btn"></button>
				<a id="home-link" href="/"><img id="logo" src="/wp-content/themes/eats/images/logo.svg" />
				<h1 class="site-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
			</div>
				<?php //get main nav menu
				wp_nav_menu( array( 
					'theme_location' => 'top_menu', 
					'menu_class' => 'main-nav' ) ); 
				?>
		</header>
		<div class="site-content">