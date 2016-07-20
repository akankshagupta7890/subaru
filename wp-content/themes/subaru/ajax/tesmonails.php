<script>
jQuery(document).ready(function () {

jQuery("#engine-testi-inner").owlCarousel({

autoPlay: 3000, //Set AutoPlay to 3 seconds

items: 2,
itemsDesktop: [1199, 2],
itemsDesktopSmall: [979, 1]

});
});
</script> 
<?php
$id=$_POST['id'];	 
include('../../../../wp-config.php');
$term = get_term( $id, 'testimonial_categories' );	 
$args = array('post_type' => 'testimonial',
'tax_query' => array(
array(
'taxonomy' => 'testimonial_categories',
'field' => 'slug',
'terms' => $term->slug,
),
),
);

$loop = new WP_Query($args); 
?>
<div id="engine-testi-inner">
<?php  while($loop->have_posts()) : $loop->the_post(); ?>

<div class="item">
<div class="engine-testi-text">
<?php echo get_excerpt(220).'...'; ?>
<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>
</div>
</div>
<?php  endwhile; ?>
</div>

