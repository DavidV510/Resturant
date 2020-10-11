<?php 

    function get_pizzas(){?>
    <div class="pizza-List">
        <?php 
        $args=array(
            'post_type'=>'Pizza-Menu',
        );
        $pizzas=new WP_Query($args);
        while($pizzas->have_posts()): $pizzas->the_post();
         ?>
         <div class="pizza">
        
          <img src="<?php echo get_the_post_thumbnail_url() ?>" class="pizzaImg">
          
          <div class="pizza-head">
            <h3 class="namePizza"><?php the_title() ?></h3>
            <?php 
                $price=get_field('price');
            ?>
            <h3 class="pricePizza">$<?php echo $price; ?></h3>
          </div>

          <div class="pizza-content">
              <?php the_content(); ?>
          </div>

         </div>
      <?php endwhile;wp_reset_postdata(); ?>
    </div>
        

 <?php }?>

 <?php 

    function get_others(){?>
    <div class="pizza-List">
        <?php 
        $args=array(
            'post_type'=>'Other_menu'
        );
        $pizzas=new WP_Query($args);
        while($pizzas->have_posts()): $pizzas->the_post();
         ?>
         <div class="pizza">
        
          <img src="<?php echo get_the_post_thumbnail_url() ?>" class="pizzaImg">
          

          <div class="pizza-head">
            <h3 class="namePizza"><?php the_title() ?></h3>
            <?php 
                $price=get_field('price');
            ?>
            <h3 class="pricePizza">$<?php echo $price; ?></h3>
          </div>

          <div class="pizza-content">
              <?php the_content(); ?>
          </div>

         </div>
      <?php endwhile;wp_reset_postdata(); ?>
    </div>
        

 <?php }?>

 <?php 

function get_blog(){?>

    <?php 
   
    while(have_posts()): the_post();
     ?>
    <div class="blog">
    
      <img src="<?php echo get_the_post_thumbnail_url() ?>" class="blogImg">
      

      <div class="blog-head">
          <div class="blogTime">
            <p>
                <?php echo the_time('d'); ?>
                <span><?php echo the_time('M'); ?></span>
            </p>
          </div>
          <div class="blogAuthor">
            <h3 class="nameblog"><?php the_title() ?></h3>
            <p class="authorBlog"><i class="fas fa-user-alt"></i> <?php echo get_the_author_meta('display_name');?></p>
          </div>
      </div>

      <div class="blog-content">
          <?php the_excerpt(); ?>
      </div>

      <div class="blog-read">
          <a href="<?php the_permalink(); ?>">
          <button>
              Read More
          </button>
          </a>
      </div>

     </div>
  <?php endwhile;wp_reset_postdata(); ?>


<?php }?>