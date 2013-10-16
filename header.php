<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
<body>
	<div class="site">
		<header role="banner">
	<a href="<?php echo(site_url()) ?>"><div id="logo"><h1><?php bloginfo( 'name' ); ?></h1><span><?php bloginfo( 'description' ); ?></span></div></a>

	<nav>
		<?php 
			wp_nav_menu(array('theme_location' => 'primary'));
		?>
	</nav>
</header>