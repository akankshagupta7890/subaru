<?php
/* Template Name: Testimonials
 */
get_header(); ?>
<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.min.css">
<!-- Banner Section Start -->
<?php 
global $post;
while (have_posts()) : the_post(); 
$post_id= $post->ID;
$banner = get_post_meta($post->ID,"banner_image",true);
$image = wp_get_attachment_image_src($banner,'banner_image');
echo $url = $image[0];

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
<!-- Banner Section End -->
<div class="clearfix"></div>

<!-- Search Section Start -->
<div class="main-search-sec">
<div class="container">
<div class="main-search wow bounceInUp" data-wow-duration="2s">
<form>
<div class="form-group select-in">
<select class="form-control">
<option>Search by category</option>
<option>Engine</option>
<option>Gearbox</option>
<option>Parts</option>
</select>
</div>
<div class="form-group search-in">
<input type="text" class="form-control" placeholder="Search website">
</div>
<button type="submit" class="main-search-btn">search</button>

</form>
</div>
</div>
</div>
<!-- Search Section End -->

<!-- Testimonials Section Start -->
<div class="container">
<div class="opportunities">
<div class="testimonial-breadcrumb breadcrumb-container">
<?php /*<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
<?php  if(function_exists('bcn_display'))
{
bcn_display();
} ?>
</div> */ ?>
<ol class="breadcrumb">
<li><a href="<?php echo site_url(); ?>">Home</a></li>
<li class="active">Testimonials</li>
</ol>
</div>

<div class="testimonial-main">
<?php 
$terms = get_terms( array(
    'taxonomy' => 'testimonial_categories',
    'hide_empty' => true,
     'orderby' => 'term_order'
) );
$noterms= sizeof($terms);
foreach ( $terms as $term ) {
$term_name[]= $term->name;
$term_slug[]= $term->slug;
}
?>
<ul class="nav nav-pills">
<li class="active"><a data-toggle="pill" href="#menu0">all</a></li>
<?php for($t=0; $t<$noterms; $t++) { ?>
<li><a data-toggle="pill" href="#menu<?php echo $t+1; ?>"><?php echo $term_name[$t]; ?></a></li>
<?php } ?>
</ul>

<div class="tab-content">
<?php 
for($k=0;$k<$noterms+1;$k++)    
{  
if($k==0){ $class="in active"; } 
else{ $class=""; }
    ?>
<div id="menu<?php echo $k; ?>" class="tab-pane fade <?php echo $class; ?>">
<?php 
if($k==0)
{
$args = array(
'post_type'   => 'testimonial',
);
}
else{
$args = array(
'post_type'   => 'testimonial',
'tax_query' => array(
array(
'taxonomy' => 'testimonial_categories',
'field'    => 'slug',
'terms'    => $term_slug[$k-1]
)
)    
);
}

$the_query = new WP_Query( $args );
$i=0;
// The Loop
if ( $the_query->have_posts() ) {

while ( $the_query->have_posts() ) {
$the_query->the_post();
$id=get_the_ID();

?>
<article>
<div class="testimonial-inner">
<div class="testimonial-slider">
<div id="myCarouseltestimonial<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarouseltestimonial<?php echo $i; ?>" role="button" data-slide="prev">
<i class="fa fa-chevron-left" aria-hidden="true"></i>
</a>
<a class="right carousel-control" href="#myCarouseltestimonial<?php echo $i; ?>" role="button" data-slide="next">
<i class="fa fa-chevron-right" aria-hidden="true"></i>
</a>
<div class="item active" style="background-image:url('http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/testimonial/Testimonials_img.jpg');">
</div>
<div class="item" style="background-image:url('http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/testimonial/Testimonials_img.jpg');">
</div>
<div class="item" style="background-image:url('http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/testimonial/Testimonials_img.jpg');">
</div>
</div>

<div class="content">
<ol class="carousel-indicators ">
<li data-target="#myCarouseltestimonial<?php echo $i; ?>" data-slide-to="0" class="active" style="background-image:url('http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/testimonial/Testimonials_img.jpg');"></li>
<li data-target="#myCarouseltestimonial<?php echo $i; ?>" data-slide-to="1" style="background-image:url('http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/testimonial/Testimonials_img0.jpg');"></li>
<li data-target="#myCarouseltestimonial<?php echo $i; ?>" data-slide-to="2" style="background-image:url('http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/testimonial/Testimonials_img1.jpg');"></li>
</ol>
</div>
</div>
</div>
<div class="testimonial-descp">
<div class="tittle-date"><h3><?php echo get_the_title(); ?></h3> 
<div class="date-calender"><?php echo get_the_date('m/d/Y'); ?></div>
</div> <!--tittle-date-->

<h4><?php echo get_post_meta($id,"client_role",true); ?></h4>
<p><?php echo get_excerpt(400); ?>....<a class="link" href="<?php echo get_the_permalink($id); ?>">[+]</a></p>

<div class="tags-section">
<h5>Tags :</h5>
<?php echo get_the_term_list( $id, 'tags_testimonial', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
</div> 
</div>
</div>
</article>

<?php
$i++;
}
}
else {echo 'No Testimonials Found.';}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>
<?php } ?>

</div>

</div>

</div> <!--opportunities Close-->
</div>
<!-- Testimonials Section End -->


<?php endwhile; ?>

<div class="clearfix"></div>

<!-- Client logo's Section -->
<?php get_sidebar('brands'); ?>
<!-- Client logo's Section End -->

<?php get_footer(); ?>
<script src="http://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
(function ($) {
jQuery(window).on("load", function () {
jQuery(".content").mCustomScrollbar();
axis: "y"
});
})(jQuery);
</script>
