<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!--- Banner Section start here ---->
<div class="news-section">
<div class="author-post-headding news">
<h3><?php the_title(); ?></h3>
<ul class="post-cmts">
<li class="time"><?php echo get_the_date(); ?></li>
<li class="author-name"><?php the_author(); ?></li>
<li class="folder-name">WORDS FROM THE DIRECTOR</li>
<li class="commetns"><?php echo get_comments_number(); ?> Comments</li>
</ul>
</div> 
<?php echo get_the_post_thumbnail(); ?>

<p><?php echo get_excerpt(400).'...'; ?></p>

<a href="<?php echo get_permalink(); ?>"><button type="button" class="btn btn-default btn-read">Read More</button></a>
</div>