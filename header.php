<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Meta -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="/wp-content/themes/codecamp/assets/images/logo.png"> 


    <?php wp_head(); ?>

</head> 

<body>
    
    <header class="header text-center">	    
        
<nav class="navbar navbar-expand-lg navbar-light bg-light pl-4">
					<?php
					if(function_exists('the_custom_logo')){
						$custom_logo_id = get_theme_mod('custom_logo'); //finds uploaded logo
						$logo = wp_get_attachment_image_src($custom_logo_id); //get array with path and dimensions
					}
				?>
  <a class="navbar-brand" href="#">Navbar</a>
  <button
    class="mr-3 navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item pl-5 ml-5 active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-5 ml-5" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-5 ml-5" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-5 ml-5" href="#">Disabled</a>
      </li>
    </ul>
        <?php wp_nav_menu( array(
                'menu' => 'primary',
                'container' => '', //Insert a class name here if needed
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'

            ) 
        );
            ?>

				<?php
				dynamic_sidebar('sidebar-1');
			?>
  </div>
</nav>

		
    </header>



