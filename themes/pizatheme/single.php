<?php get_header(); ?>

<?php while(have_posts()):the_post(); ?>
   

    <div class="page">
        <div class="upper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            
            <h3> <?php the_title(); ?> </h3>
        </div>



        <div class="page-content">
            
            <div class="blog-head">
                <div class="blogTime2">
                    <p>
                        <?php echo the_time('d'); ?>
                        <span><?php echo the_time('M'); ?></span>
                    </p>
                </div>
                <div class="blogAuthor2">
                    <h3 class="nameblog"></h3>
                    <p class="authorBlog"><i class="fas fa-user-alt"></i> <?php echo get_the_author_meta('display_name');?></p>
                </div>
            </div>
            
            <p><?php the_content(); ?></p>



            <div class="comments">
            <?php comment_form(); ?>
            </div>

            <div class="comment-list">
                <h3>Comments</h3>
            <ol>
                <?php 
                
                 $comments=get_comments(array(
                    'post_id'=>$post->ID,
                    'status'=>'approve'
                 ));

                 wp_list_comments(array(
                     'per_page'=>10,
                     'reverse_top_level'=>false
                 ),$comments)
                
                ?>
            </ol>
            </div>

        </div>
    </div>
    
    
<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>