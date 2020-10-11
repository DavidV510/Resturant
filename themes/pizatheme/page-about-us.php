<?php get_header(); ?>

<?php while(have_posts()):the_post(); ?>
   

    <div class="page">
        <div class="upper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            
            <h3> <?php the_title(); ?> </h3>
        </div>

        <div class="page-content">
        <p><?php the_content(); ?></p>
        </div>
    </div>
    
    <div class="boxes">
        <?php 
            $img1=get_field('img_1');
            $text1=get_field('text_1');

            $img2=get_field('img_2');
            $text2=get_field('text_2');

            $img3=get_field('img_3');
            $text3=get_field('text_3');
        ?>
        <div class="box">
            <div class="box-img">
            <img src="<?php echo $img1 ?>">
            </div>

            <div class="box-content">
            <?php echo $text1; ?>
            </div>
        </div>

        <div class="box">
            
            <div class="box-img">
            <img src="<?php echo $img2 ?>">
            </div>

            <div class="box-content">
            <?php echo $text2; ?>
            </div>

            

        </div>

        <div class="box">
            
            <div class="box-img">
            <img src="<?php echo $img3 ?>">
            </div>

            <div class="box-content">
            <?php echo $text3; ?>
            </div>

        </div>
    </div>
    
    
<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>