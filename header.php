<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
<!-- Begin Favicons -->
<link rel="shortcut icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url"); ?>/img/apple-touch-icon-152x152.png" />
<!-- End Favicons -->

<!-- Begin JavaScript --> 
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/holder.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!-- End JavaScript -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" >
<?php wp_head(); ?>
</head>
<body>
<header id="header">
    <div class="container">
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>
        
        <?php 
            wp_nav_menu(array(
                    'menu' => 'header-menu',
                    'theme_location' => 'header-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                    )); 
        ?>
    </nav>
    </div>
</header>