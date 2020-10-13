<?php 
    /* 
    Template Name: Front
    */
get_header(); ?>


    <section class="open" >
        <div class="open-content" style="background-image: url(<?php echo get_field('img_open')['url']; ?>);">
         <div class="semi-content">
         <h1><?php echo get_field('title_1') ?></h1>
         <p><?php echo get_field('text_1') ?></p>
            <a href="<?php echo get_permalink(get_page_by_title('Blog')); ?>">
            <button>more info</button>
            </a>
         </div>
        </div>
    </section>


    <section class="special">
        <div class="special-content">
            <h1><?php echo get_field('title_2') ?></h1>

            <div class="special-menu">
              <?php 
                $args=array(
                    'post_type'=>'Pizza-Menu',
                    'posts_per_page'=>3,
                    'orderby'=>'rand'
                );
                $pizzas=new WP_Query($args);
                while($pizzas->have_posts()): $pizzas->the_post();
                ?>  
                <div class="special-one">
                    <a href="<?php the_permalink(); ?>">
                  <div class="special-one-img">
                  <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                  </div>

                  <div class="special-one-content">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <?php 
                        $price=get_field('price');
                    ?>
                    <h3>$<?php echo $price; ?></h3>
                    
                  </div>
                  </a>
                </div>


                <?php endwhile;wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <section class="product" style="background-image: url(<?php echo get_field('back_product')['url']; ?>);" >

        <div class="product-content">
          <h1><?php echo get_field('product_title'); ?></h1>
          <p><?php echo get_field('product_text'); ?></p>
          <a href="<?php echo get_permalink(get_page_by_title('Blog')); ?>">
          <button>read more</button>
          </a>
        </div>

        <div class="product-img">
       <img src="<?php echo get_field('product_img')['url']; ?>" alt="">
        </div>
    </section>


    <section class="gallery">
        <?php 

            $url=get_page_by_title('Gallery');
            echo get_post_gallery($url->ID);
        
        ?>
    </section>

    <section class="contact" style="background-image: url(<?php echo get_field('back_product')['url']; ?>);">
        <div class="map">
        <div id="map"></div>
         </div>
         <div class="contact-form">
         <?php get_template_part('/templates/res','form'); ?>
         </div>
    </section>

<?php get_footer(); ?>