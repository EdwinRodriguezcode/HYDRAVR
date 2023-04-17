<?php  
/**  
* Template Name: Home  
*  
* @package HYDRAVR
*  
*/  
?>  
<?php get_header(); ?>

<div class="hydra_home">

    <?php

        while ( have_posts() ) :
            the_post();
           
            get_template_part( 'template-parts/content', 'page' );
           
                       
        endwhile; // End of the loop.
    ?>
   
</div>
<?php get_footer();?>