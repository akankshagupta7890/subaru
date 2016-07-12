<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

get_header(); ?>

<?php 
$post_id= get_the_ID();
$banner = get_post_meta($post->ID,"banner_image",true);
$image = wp_get_attachment_image_src($banner,'banner_image');
$url = $image[0];
if($url!="") 
{
?>
<div class="banner" style="background-image:url(<?php echo $url;?>);background-position:72% 50%;">
<?php
}
else
{
?>
<div class="banner" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php 
}
?>
</div>
</div>
<!--- Banner Section End here ---->
<div class="clearfix"></div>
<div class="container">
<div class="row conditioning-repairs">
<div class="col-xs-12 col-md-12 ">   

<?php if ( have_posts() ) : ?>

<?php if ( is_home() && ! is_front_page() ) : ?>
<header>
<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
</header>
<?php endif; ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

/*
* Include the Post-Format-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Format name) and that will be used instead.
*/
get_template_part( 'template-parts/content', get_post_format() );

// End the loop.
endwhile;

// Previous/next page navigation.
the_posts_pagination( array(
'prev_text'          => __( 'Previous page', 'twentysixteen' ),
'next_text'          => __( 'Next page', 'twentysixteen' ),
'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
) );

// If no content, include the "No posts found" template.
else :
get_template_part( 'template-parts/content', 'none' );

endif;
?>

</div>
</div>
</div>
<?php get_footer(); ?>