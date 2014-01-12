<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package clinix_s
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header class="masthead" class="site-header" role="banner">
	  <?php if (is_dynamic_sidebar('header-right')) { ?>
  
     <aside class="header-right">
       <nav class="main-navigation" role="navigation">
      <h3 class="widget-title" class="menu-toggle"><?php _e( 'Menu', 'clinix_s' ); ?></h1>
      <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'clinix_s' ); ?></a>

      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- #site-navigation -->
      </aside> 
      
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		

		</div>
		
<?php if ( get_header_image() ) : ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
  </a>
  <?php endif; // End header image check. ?>
  

      
     <?php }?>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">


