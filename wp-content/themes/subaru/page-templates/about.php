<?php
/**
* Template Name: About us
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?> 
<?php  
global $post;
while (have_posts()) : the_post(); 

$post_id= $post->ID;
$image3 = get_post_meta($post->ID,"banner_image",true);
$aggregate_image = wp_get_attachment_image_src($image3,'banner_image');
$url = $aggregate_image[0];

if($url!="") 
{
?>
<div class="banner" style="background-image:url(<?php echo $url;?>">
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
<?php endwhile; ?>
<div class="clearfix"></div>

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

<div class="container">
<div class="opportunities">


<div class="breadcrumb-container">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">ABOUT US</li>
</ol>
</div>

<div class="about-section">
<?php the_content();?>

</div>


</div> <!--opportunities Close-->
</div>


<div class="promise-section">
<div class="container">
<div class="row"> 
<div class="col-xs-12 col-sm-8">
<?php echo get_field('about_us_content',65); ?>

</div> <!--col-xs-12-->

<div class="col-xs-12 col-sm-4">
<?php
$post_id= $post->ID;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'about_inner_image' );
$urs = $thumb['0'];
if(!empty($urs)) 
{
?>
<img alt="<?php the_title();?>" src="<?php echo $urs;?>" class="img-responsive">
<?php
}
else
{
?>
<img alt="<?php the_title();?>" src="https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=562&h=681" class="img-responsive">
<?php
}
?>

</div>
</div> <!--row-->  
</div> <!--container--> 
</div> <!--promise-section Close-->

 

<div class="teams-section">
<div class="container">
<h3>Meet the team</h3>
<p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") <br>
is a filler text commonly used to demonstrate the</p>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$args = array(
'type'                     => 'team',
'orderby'                  => 'term_id',
'taxonomy'                 => 'team_categories',
);
$categories = get_categories( $args );
$i=1;
foreach ( $categories as $category )
{

?>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingOne<?php echo $i;?>">
<h4 class="panel-title"> 

<!--   <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
<a href="javascript:void(0)" class="custom-toggle" >
<?php echo $name = $category->name; ?>
</a>
</h4>
</div>
<div id="collapseOne<?php echo $i;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne<?php echo $i;?>">
<div class="panel-body">
<?php 
$posts=get_posts(array(
'showposts' => -1,
'post_type' => 'team',
'tax_query' => array(
array(
'taxonomy' => 'team_categories',
'field' => 'name',
'terms' => array($name))
),
//'orderby' => 'title',
'order' => 'ASC')
);
foreach($posts as $post)
{ ?> 	
<div class="img-box">
<div class="image-section">

<?php
$post_id= $post->ID;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'team_image' );
$urlv = $thumb['0'];
if(!empty($urlv)) 
{
?>

<img src="<?php echo $urlv;?>" alt="<?php the_title();?>" />
<?php
}
else
{
?>
<img src="https://placeholdit.imgix.net/~text?txtsize=74&txt=No Image&w=270&h=270" alt="<?php the_title();?>">		
<?php
}
?>
<div class="plus-sign">+</div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

</div> 
<h4><?php the_title();?></h4>
<p><?php the_field('designation');?></p>
</div>
<?php
}
?>		 <!--img-box Close-->

</div>
</div>
</div>
<?php
$i++;
}
?>
</div> 	  

</div>
</div>

<?php get_sidebar('departments'); ?> 

<div class="engine-testi-cvr home-testi-cvr">
<div class="container">
<h1>what our clientS say about us</h1>

<div class="engine-testi-tab-btn">
<ul class="nav nav-pills">
<li class="active"><a data-toggle="pill" href="#home">SERVICES</a></li>
<li><a data-toggle="pill" href="#menu1">Engines</a></li>
<li><a data-toggle="pill" href="#menu2">GEARBOXES</a></li>
<li><a data-toggle="pill" href="#menu3">Parts</a></li>
</ul>
</div>

<div class="tab-content">
<div id="home" class="tab-pane fade in active">

<div id="engine-testi">

<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>


<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>


<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>



</div>

<div class="text-center">
<a href="#" class="testi-btn">View More TESTIMONIALS</a>
</div>

</div>
<div id="menu1" class="tab-pane fade">

</div>
<div id="menu2" class="tab-pane fade">

</div>
<div id="menu3" class="tab-pane fade">

</div>
</div>

</div>

</div>
<!-- Client logo's Section -->
<?php get_sidebar('brands'); ?>
<!-- Client logo's Section End -->

<?php get_footer();?>
<script>
//jQuery(document).ready(function(){
//jQuery("a.custom-toggle").click(function(){
//jQuery(this).toggleClass('collapsed').parent().parent().next().slideToggle('slow');
//})
//})
</script>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Modal Header</h4>
</div>
<div class="modal-body">
<p>Some text in the modal.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
