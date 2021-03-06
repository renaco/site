<?php
/**
 * @package WordPress
 * @subpackage WPMedium
 * @since WPMedium 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">

		<title><?php is_home() ? printf( '%s | %s', get_bloginfo( 'name' ), get_bloginfo( 'description' ) ) : printf( '%s | %s', wp_title(''), get_bloginfo( 'name' ) ); ?></title>


		<meta name="title" content="<?php is_home() ? printf( '%s | %s', get_bloginfo( 'name' ), get_bloginfo( 'description' ) ) : printf( '%s | %s', wp_title(''), get_bloginfo( 'name' ) ); ?>"/>

		<?php if(is_home()) { ?>
		
		<meta property="og:description" content="En FrontEnd Labs aprenderás sobre Desarrollo Web - HTML5, CSS3, JavaScript, PHP, mobile app development, Responsive Web Design"/>
		<meta property="og:image" content="http://frontendlabs.io/images/frontend-labs-logo.png"/>
		<meta property="og:image:height" content="90" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image:width" content="90" />
		<meta property="og:site_name" content="frontend labs"/>
		<meta property="og:title" content="<?php is_home() ? printf( '%s | %s', get_bloginfo( 'name' ), get_bloginfo( 'description' ) ) : printf( '%s | %s', wp_title(''), get_bloginfo( 'name' ) ); ?>"/>
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://frontendlabs.io/" />
		<meta name="DC.Description" content="En FrontEnd Labs aprenderás sobre Desarrollo Web - HTML5, CSS3, JavaScript, PHP, mobile app development, Responsive Web Design"/>
		<?php } ?>

		<meta name="author" content="FrontEnd Labs"/>

		<meta name="language" content="es"/>
		<meta name="robots" content="index,follow"/>
		<meta name="geo.region" content="PE-LIM"/>
		<meta name="geo.placename" content="Cercado de Lima"/>
		<meta name="geo.position" content="-12.0478;-77.0622"/>
		<meta name="ICBM" content="-12.0478, -77.0622"/>

		<meta name="DC.Title" content="<?php is_home() ? printf( '%s | %s', get_bloginfo( 'name' ), get_bloginfo( 'description' ) ) : printf( '%s | %s', wp_title(''), get_bloginfo( 'name' ) ); ?>"/>
		<meta name="DC.Creator" content="FrontEnd Labs"/>

		<meta name="DC.Publisher" content="FrontEnd Labs"/>
		<meta name="DC.Contributor" content="FrontEnd Labs"/>
		<meta name="DC.Language" content="es"/>


		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/basic.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="publisher" href="https://plus.google.com/115909218719662540839/about">
<script>
  (function() {
    var cx = '013650104342495113637:uiu5jzv44qu';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
	</head>	
	<body <?php body_class(); ?>>
		<a id="WP" href="<?php echo home_url(); ?>"<?php if( is_admin_bar_showing() ) echo ' style="top:38px;"'; ?>><?php wpmedium_the_W(); ?></a>