<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adornacoracoes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adorna Corações</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,500" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/styles.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <div class="row" id="sidebar-row">
    <div class="columns large-3">
        <div class="sidebar">
           <div class="off-canvas in-canvas-for-medium position-left" data-off-canvas id="inCanvasExample">
            <?php
            wp_nav_menu(array( 
                'theme_location' => 'my-custom-menu', 
                'container_class' => 'custom-menu-class')); 
            ?>            
                <div class="lang-menu">
                <?php
                    wp_nav_menu( array( 
                            'theme_location' => 'extra-menu', 
                            'container_class' => 'site-language' ) ); 
                    ?>
                </div>
            </div>   
        </div>
                     <div class="hide-for-medium mb24" id="responsive-menu">
                    <a data-off-canvas="ia8uj9-off-canvas" data-toggle="inCanvasExample">ADORNA CORAÇÕES</a>
               </div>
        </div>     
</div>    