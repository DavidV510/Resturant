<?php get_header(); ?>

<?php while(have_posts()):the_post(); ?>
   

    <div class="page">
        <div class="upper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            
            <h3> <?php the_title(); ?> </h3>
        </div>

        <div class="page-content">
        <p><?php the_content(); ?></p>
      
        <div class="reservation">
          <div class="resImg" style="background-image: url(<?php echo get_field('contact_img')['url']; ?>);">

          </div>
         <?php get_template_part('/templates/res','form'); ?>
        </div>

        </div>
    </div>
    
   
    
    
<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>