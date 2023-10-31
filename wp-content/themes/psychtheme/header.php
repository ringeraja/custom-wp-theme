<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="wp-content/themes/psychtheme/assets/images/test-logo.png"> 
    
    <?php 
    wp_head();
    ?>
    
</head> 

<body>
	<div class="container pt-4 text-center">
	<div class="row">
		<div class="col">
			<?php
				if(function_exists('the_custom_logo')){
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
					}
			?>
			<a href="http://localhost/"><img class="img-fluid float-start" src="<?php echo $logo[0] ?>" alt="logo" ></a>
		</div>
		<div class="col-6">
			<ul class="social-list list-inline p-3 text-black">
				<li class="list-inline-item fw-bold"><p>Conditions <i class="fa-sharp fa-solid fa-chevron-down"></i></p></li>
				<li class="list-inline-item fw-bold"><p>Discover <i class="fa-sharp fa-solid fa-chevron-down"></i></p></li>
				<li class="list-inline-item fw-bold"><p>Quizzes <i class="fa-sharp fa-solid fa-chevron-down"></i></p></li>
				<li class="list-inline-item fw-bold"><p>Resources <i class="fa-sharp fa-solid fa-chevron-down"></i></p></li>
			</ul>
		</div>
		<div class="col">
			<a class="subscribeLink text-decoration-none text-uppercase pt-5 pr-4" href="index.html">Subscribe</a>
			<a href="#"><i class="fa-solid fa-magnifying-glass text-black float-end"></i></a>
		</div>
	</div>
	</div>

	<div class="row border-bottom border-black">
			
	</div>
    <header class="header text-center">	    
        
		<a class="pt-3" href="#">
			<?php
				echo get_bloginfo('name');
			?>
		</a>
			
		<nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<?php
				if(function_exists('the_custom_logo')){
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);

				}
				?>
				<img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >			


                <?php
                    wp_nav_menu(
						array(
							'menu' => 'primary',
							'container'=> '', 
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left"%3$s</
							ul>'
						)
					);
                ?>
				<hr>
				<ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul>

			</div>
		</nav>
    </header>
    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>