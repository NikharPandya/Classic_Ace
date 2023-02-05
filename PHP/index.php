<?php 
wp_head();
?>

<?php 
 if( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Display post content
    endwhile;
endif;
 ?>
<?php 
wp_footer();
?>