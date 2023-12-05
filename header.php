<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <a href="index.html">
        
    </a>
    <nav>

    <div class="logo">
			
			<a href="http://localhost/planty/wordpress/"> <img src="http://localhost/planty/wordpress/wp-content/uploads/2023/09/logoplanty.png" alt="" id="logo"> </a>
		  </div>
<ul class="menu-21">
  <li><a href="http://localhost/planty/wordpress/?page_id=537">Nous rencontrer</a></li>
  <?php if ( is_user_logged_in() ) { ?>
  <li><a href="<?php echo esc_url( admin_url() ); ?>">Admin</a></li>
  <?php } ?>
  <li class="button-commander"><a class="Nav-commander" href="http://localhost/planty/wordpress/?page_id=135">Commander</a></li>
</ul>
</nav>

    <?php 
