<?php

$id=$_POST['id'];	 
	 
include('../../../../wp-config.php');
$term = get_term( $id, 'testimonial_categories' );	 
// echo "<pre>";
// print_r($term); 
// echo "</pre>";

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

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
	<div id="engine-testi-inner">
	<?php  while($loop->have_posts()) : $loop->the_post(); ?>
	
					<div class="item">
                            <div class="engine-testi-text">
                                 <?php echo get_the_content() ?>

                                <div class="engine-testi-name">
                                    <h4>Michael Zagami </h4>
                                    <p>Client Role (If any)</p>
                                </div>

                            </div>
                        </div>
						<?php  endwhile; ?>

               </div>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/liberary.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> 				
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
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