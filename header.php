<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Charset First! -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
    
<!-- Begin Favicons -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-152x152.png" />
<!-- End Favicons -->

<!-- Bootstrap & Free Cosmo Themplate, FontAwesome CDN... -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" >

<?php wp_head(); ?>

<!-- Analytics. Si esta vacío, actualizalo en opciones de personalización -->
<?php echo get_theme_mod('meta_analytics', '<script></script>'); ?>

</head>
<body <?php body_class(); ?>>
<header id="header">

<?php //Logo y descripción ?>
<div class="container-fluid background-color-black"><div class="container">
        <div class="row">  
            <div class="col-md-12 hidden-xs">
                    <h1 class="main-title"><?php bloginfo("name"); ?></h1>
                    <h2 class="sub-title"><?php echo get_theme_mod('header_eslogan', 'Eslogan por defecto de la plantilla'); ?></h2>
                    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
            </div>
        
        </div>
</div></div>

    <div class="container-fluid">
    <nav class="navbar navbar-inverse" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
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
    </div><!-- End First Container--></nav>
    </div><!-- End Second Container-->
</header>