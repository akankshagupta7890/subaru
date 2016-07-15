<div class="col-xs-12 col-md-4 col-md-offset-1">
<div class="side-bar-section">


<div class="recenta-post"> 
<h3>Recent Posts</h3> 

<ul>
<?php 
$args = array(
'post_type' => 'post',
'orderby' => 'date',
'order'   => 'ASC',
'posts_per_page' => 5     
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
echo '<ul>';
while ( $the_query->have_posts() ) {
$the_query->the_post();
echo '<li><a href="'.get_permalink().'">' . get_the_title() . '</a></li>';
}
echo '</ul>';

wp_reset_postdata();
} 
?>
</ul>

</div>

<div class="category-post"> 
<h3>Categories</h3>
<ul>
<?php    
$terms = get_terms( array(
    'taxonomy' => 'subapedia_categories',
    'hide_empty' => false,
) );
 foreach ( $terms as $term ) { 
echo '<li><a href="' . esc_url( get_term_link( $term ) ) .'">' . $term->name . '</a></li>';
 }
?>
</ul>
</div>

<div class="category-post"> 
<h3>Recent Comments</h3>
<ul>
<?php $all_comments=get_comments( array('status' => 'approve', 'number'=>5, 'post_type'=>'subapedia') ); 
// array to hold comment ids that are dupes
$comment_ids_to_delete=array();
foreach($all_comments as $comment)
{   
echo '<li><a href="#">'.substr($comment->comment_content, 0, 50).'</a></li>';
}

?>    
</ul>
</div>

</div> <!--side-bar-section Close-->
</div> <!--col-xs-12 col-md-4 col-md-offset-1-->