<?php

/* 
Template Name: Test
 * 
 */
get_header();
?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/oka_slider_model.js"></script>
<script type="text/javascript">

$(function(i){

$('.slider').oka_slider_model({ 
'type': 4
});

});
</script>
<div class="container" style="margin-top:150px;">
<div style="width:1000px;margin:80px auto;">


<h2>slider 1</h2>
<div class="slider_model slider">
<div class="slider_model_box">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
</div>
<div class="model_ctrl_tools"><a class="ctrl_left" href="#">‹</a><a class="ctrl_right" href="#">›</a></div>
</div>

<h2>slider 2</h2>
<div class="slider_model slider">
<div class="slider_model_box">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/bruce-feed.jpg" />

</div>
</div>

</div>
</div>
<?php 
get_footer();
?>
