<?php
/* Template Name: Testimonials
 */
get_header(); ?>

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

<div class="tabbing row">
<!-- Nav tabs -->
<ul class="nav nav-tabs categories" role="tablist">
<li class="active"><a href="javascript:void(0);" data-category="*">all</a></li>
<li><a href="javascript:void(0);" data-category="services-tab">SERVICES</a></li>
<li><a href="javascript:void(0);" data-category="engine-tab">Engines</a></li>
<li><a href="javascript:void(0);" data-category="gearbox-tab">GEARBOXES</a></li>
<li><a href="javascript:void(0);" data-category="parts-tab">Parts</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane active"> 
    
<div class="row filter-tab services-tab"> 
<?php 
$args = array(
'post_type'   => 'testimonial',
'tax_query' => array(
array(
'taxonomy' => 'testimonial_categories',
'field'    => 'slug',
'terms'    => 'services'
)
)
);
$the_query = new WP_Query( $args );
$i=0;
// The Loop
if ( $the_query->have_posts() ) {

while ( $the_query->have_posts() ) {
$the_query->the_post();
$id=get_the_ID();

?>
<div class='indv-testimonials'> <!-- Individual Testimonial Start Here -->  
<div class="slider col-md-7">
<div id="slider-<?php echo $i;?>" class="flexslider slide-img">
<ul class="slides">
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed0.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed1.jpg" />
</li>	
</ul>
</div>
    
<div id="carousel-<?php echo $i;?>" class="flexslider slide-thumnail">
<ul class="slides">
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed0.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed1.jpg" />
</li>		
</ul>
</div>
</div> <!--col-dm-7-->

<div class="col-md-5">
<div class="tittle-date">
<h3><?php echo get_the_title(); ?></h3> 
<div class="date-calender">
<?php echo get_the_date('m/d/Y'); ?>
</div>
</div> <!--tittle-date-->
<h4><?php echo get_post_meta($id,"client_role",true); ?></h4>
<?php echo get_excerpt(); ?>....<a class="link" href="<?php echo get_the_permalink($id); ?>">[+]</a>
<div class="tags-section">
<?php echo get_the_term_list( $id, 'tags_testimonial', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
</div> 
</div>  <!--col-md-5-->

</div>  <!-- Indv End -->   
<?php
$i++;
}
}
else {echo 'No Testimonials Found.';}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div> <!--row Close-->  

<div class="row filter-tab engine-tab"> <!-- Engine Tab Start Here -->
<?php 
$args = array(
'post_type'   => 'testimonial',
'tax_query' => array(
array(
'taxonomy' => 'testimonial_categories',
'field'    => 'slug',
'terms'    => 'engines'
)
)
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
$j=0;
while ( $the_query->have_posts() ) {
$the_query->the_post();
$id=get_the_ID();

?>
<div class='indv-testimonials'> <!-- Individual Testimonial Start Here -->  
<div class="slider col-md-7">
<div id="slider-<?php echo $j; ?>" class="flexslider slide-img">
<ul class="slides">
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed0.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed1.jpg" />
</li>	
</ul>
</div>
    
<div id="carousel-<?php echo $j; ?>" class="flexslider slide-thumnail">
<ul class="slides">
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed0.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed1.jpg" />
</li>		
</ul>
</div>
</div> <!--col-dm-7-->

<div class="col-md-5">
<div class="tittle-date">
<h3><?php echo get_the_title(); ?></h3> 
<div class="date-calender">
<?php echo get_the_date('m/d/Y'); ?>
</div>
</div> <!--tittle-date-->
<h4><?php echo get_post_meta($id,"client_role",true); ?></h4>
<?php echo get_excerpt(); ?>....<a class="link" href="<?php echo get_the_permalink($id); ?>">[+]</a>
<div class="tags-section">
<?php echo get_the_term_list( $id, 'tags_testimonial', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
</div> 
</div>  <!--col-md-5-->

</div>  <!-- Indv End -->   
<?php
$j++;
}
}
else {echo 'No Testimonials Found.';}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div> <!--row Close-->  

<div class="row filter-tab gearbox-tab"> 
<?php 
$args = array(
'post_type'   => 'testimonial',
'tax_query' => array(
array(
'taxonomy' => 'testimonial_categories',
'field'    => 'slug',
'terms'    => 'gearboxes'
)
)
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
$k=0;
while ( $the_query->have_posts() ) {
$the_query->the_post();
$id=get_the_ID();

?>
<div class='indv-testimonials'> <!-- Individual Testimonial Start Here -->  
<div class="slider col-md-7">
<div id="slider-<?php echo $k; ?>" class="flexslider slide-img">
<ul class="slides">
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed0.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed1.jpg" />
</li>	
</ul>
</div>
    
<div id="carousel-<?php echo $k; ?>" class="flexslider slide-thumnail">
<ul class="slides">
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed0.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed1.jpg" />
</li>		
</ul>
</div>
</div> <!--col-dm-7-->

<div class="col-md-5">
<div class="tittle-date">
<h3><?php echo get_the_title(); ?></h3> 
<div class="date-calender">
<?php echo get_the_date('m/d/Y'); ?>
</div>
</div> <!--tittle-date-->
<h4><?php echo get_post_meta($id,"client_role",true); ?></h4>
<?php echo get_excerpt(); ?>....<a class="link" href="<?php echo get_the_permalink($id); ?>">[+]</a>
<div class="tags-section">
<?php echo get_the_term_list( $id, 'tags_testimonial', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
</div> 
</div>  <!--col-md-5-->

</div>  <!-- Indv End -->   
<?php
$k++;
}
}
else {echo 'No Testimonials Found.';}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div> <!--row Close-->  

<div class="row filter-tab parts-tab"> 
<?php 
$args = array(
'post_type'   => 'testimonial',
'tax_query' => array(
array(
'taxonomy' => 'testimonial_categories',
'field'    => 'slug',
'terms'    => 'parts'
)
)
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
$l=0;
while ( $the_query->have_posts() ) {
$the_query->the_post();
$id=get_the_ID();
?>
<div class='indv-testimonials'> <!-- Individual Testimonial Start Here -->  
<div class="slider col-md-7">
<div id="slider-<?php echo $l; ?>" class="flexslider slide-img">
<ul class="slides">
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed0.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed1.jpg" />
</li>	
</ul>
</div>
    
<div id="carousel-<?php echo $l; ?>" class="flexslider slide-thumnail">
<ul class="slides">
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed0.jpg" />
</li>
<li>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed1.jpg" />
</li>		
</ul>
</div>
</div> <!--col-dm-7-->

<div class="col-md-5">
<div class="tittle-date">
<h3><?php echo get_the_title(); ?></h3> 
<div class="date-calender">
<?php echo get_the_date('m/d/Y'); ?>
</div>
</div> <!--tittle-date-->
<h4><?php echo get_post_meta($id,"client_role",true); ?></h4>
<?php echo get_excerpt(); ?>....<a class="link" href="<?php echo get_the_permalink($id); ?>">[+]</a>
<div class="tags-section">
<?php echo get_the_term_list( $id, 'tags_testimonial', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
</div> 
</div>  <!--col-md-5-->

</div>  <!-- Indv End -->   
<?php
$l++;
}
}
else {echo 'No Testimonials Found.';}
/* Restore original Post Data */
wp_reset_postdata();
?>

</div>   

</div> <!--tab-pane Close-->

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
