<?php get_header(); ?>


  <?php
 
    $blog_post=get_option('page_for_posts');
    $image=get_post_thumbnail_id($blog_post);
    $image=wp_get_attachment_image_src($image,'full');
 
 
  ?>

   

    <div class="page">
        <div class="upper" style="background-image: url(<?php echo $image[0]; ?>);">
            
            <h3> <?php echo get_the_title($blog_post); ?> </h3>
        </div>

        <div class="page-content blog-Big">

            <div class="blogPosts">
                <?php get_blog(); ?>
            </div>

            <div class="sideBlog">
           <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
    
    

<?php get_footer(); ?>