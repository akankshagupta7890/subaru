<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
<?php wp_head(); ?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main-style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/oka_slider_model.css">
<script>
var ajaxurl = '<?php echo admin_url('admin-ajax.php');?>'; 
var cdate='<?php echo date('m/d/Y'); ?>';
</script>
</head>

<body <?php body_class(); ?>>
<header>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand" >
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-logo.png"></a>
</div>
<div class="collapse navbar-collapse " id="myNavbar">
<?php wp_nav_menu( array( 'menu_class' => 'nav navbar-nav', 'theme_location' => 'primary' ) ); ?> 
<?php dynamic_sidebar('header'); ?>  

</div>
</div>
</nav>
</header>

