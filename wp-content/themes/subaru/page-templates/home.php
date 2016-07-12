<?php
/**
 * Template Name: Home Page
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
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'Home_page_banner' );
			$urla = $thumb['0'];
					if(!empty($urla)) 
					{
					?>
					<div class="banner" style="background-image:url(<?php echo $urla;?>">
					<?php
					}
					else
					{
					?>
					<div class="banner" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/home-banner.jpg)">
					<?php 
					}
                    ?>
			  
    
        <div class="container">
            <div class="banner-inner">
               <?php the_field('banner_title'); ?> 
                <div class="banner-text wow slideInLeft" data-wow-duration="1.5s">
                    <?php echo substr(($post->post_content), 0, 610);?>
                </div>
            </div>
        </div>
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

  <?php get_sidebar('departments'); ?>  
  <div class="why-choose-subaru">
        <div class="container">
            <h2><?php the_field('why_choose_all_drive',4); ?></h2> 
 
            <div class="row">
			<?php 
			global $post;
			query_posts('post_type=whychoosesubaroo&showposts=9&order=ASC&orderby=post_date');
			$i=1;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="why-choose-subaru-list wow slideInUp" data-wow-duration="1.2s">
                        <div class="why-choose-subaru-list-left"> 
						<?php
						$post_id= $post->ID;
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'whychoosesubaroo_image' );
						$urlas = $thumb['0'];
						if(!empty($urlas)) 
						{
						?>
						<img src="<?php echo $urlas;?>" class="img-responsive">
						<?php
						}
						else
						{
						?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-choose-subaru-icon-1.png" class="img-responsive">
						<?php
						}
						?></div>
                        <div class="why-choose-subaru-list-right">
                            <h4><?php the_title();?></h4>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
                </div>
				<?php endwhile; ?> 
        </div>

        </div>
    </div>

    <div class="news-art-sec">
        <div class="container">
            <div class="news-art-heading">
                <div class="news-art-left-hd">
                    <h2>News & Subapedia articles</h2>
                </div>
                <div class="news-art-right-hd">
                    <a href="#">More News & Articles <i class="fa fa-angle-right" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="row">
			<?php 
			global $post;
			query_posts('post_type=news&showposts=6&order=desc');
			$i=1;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			?>
			
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="news-art-list">
                        <div class="news-art-list-left">
						<?php
						$post_id= $post->ID;
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'news_image' );
						$urs = $thumb['0'];
						if(!empty($urs)) 
						{
						?>
						<img src="<?php echo $urs;?>" class="img-responsive">
						<?php
						}
						else
						{
						?>
						 
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-artical-img-1.jpg" class="img-responsive">
						<?php
						}
						?>
                        </div>
                        <div class="news-art-list-right">
                            <h5><?php the_title();?></h5>
                            <?php the_field('news_content'); ?>
                            <a href="<?php the_permalink(); ?>" class="news-art-btn">Read More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>  
                        </div>
                    </div>

                </div>
				<?php endwhile; ?>

          
            </div>

        </div>

    </div>

 
    <div class="engine-testi-cvr home-testi-cvr">
        <div class="container">
            <h1>what our clientS say about us</h1>

            <div class="engine-testi-tab-btn">
			
                <ul class="nav nav-pills">
            <?php

					$args=array(

						'taxonomy' => 'testimonial_categories',

						'orderby' => 'name',

						'order' => 'desc'						

						);

					$categories=get_categories($args);

				foreach($categories as $cat) {  
			?><li><a href="javascript:void(0);" class="link" onclick="get_record('<?php echo $cat->cat_ID; ?>');"><?php echo $cat->cat_name;?></a></li> 
			<?php } ?>
        </ul> 
            </div>

            <div class="tab-content">
				
                    <div id="engine-testi">
					<?php
					echo $thecatid = get_query_var('cat'); echo $thecatid;
					global $post;
					query_posts('post_type=testimonial&showposts=15&cat='.$thecatid.'order=desc');
					$i=1;
					

			?> 
			<?php while (have_posts()) : the_post(); ?>

                        <div class="item">
                            <div class="engine-testi-text">
                                <?php echo get_the_content() ?>

                                <div class="engine-testi-name">
                                    <h4><?php the_title();?> </h4>
                                    <p><?php the_field('client_role');?></p>
                                </div>

                            </div>
                        </div>
						<?php endwhile;?>

                     
                    </div>

				 
                    <div class="text-center">
                        <a href="#" class="testi-btn">View More TESTIMONIALS</a>
                    </div>

                </div>
                
                
               
            </div>

        </div>

    </div>

<!-- Client logo's Section -->
<?php get_sidebar('brands'); ?>
<!-- Client logo's Section End -->
  
<?php get_footer();?>
<script type="text/javascript">
function get_record(id)
{
	jQuery.ajax({
		type: "POST", 
		url:"<?php echo get_stylesheet_directory_uri(); ?>/ajax/tesmonails.php",
		data:{id:id,format:'raw'},
		success:function(resp){
			if( resp !="") 
			{
				// alert(resp);
				jQuery('#engine-testi').empty().append(resp);
			}
			
		}
   });
}
</script>