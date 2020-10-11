<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Pizza Vintero</title>
    <?php wp_head(); ?>
    <style>
        html{
            margin-top: 0px !important;
        }
    </style>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css" integrity="sha512-1gVXQF5Q9gL1HvHBLK0y3IAWCorLY9EU+JMTsLBlXgWfgf6EIS/8B27R/nUq1joeKz2N7ZHCNnLCjc+PuqDqDA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js" integrity="sha512-0kQqdmb3fpKtRwrbCZDlmiwuZgDyPAOLDOu/HyAt4py7lAVDXKknqtqS6dFNV8U8JrHZymQxlO9SFPZ2u8dhMw==" crossorigin="anonymous"></script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo get_option('pizza_map_api'); ?>&callback=initMap"
  type="text/javascript"></script>
  <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body >
    <header class="head">
      <div class="container gridHead">
        
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img class="logo-img" src="<?php echo get_template_directory_uri()."/img/logo.svg" ?>">
            </a>
        </div>

        <div class="social-menu">
            <?php 
            $social=array(
                'theme_location'=>'social-menu',
                'container'=>'nav',
                'container_class'=>'socialMenu',
                'container_id'=>'social',
                'link_before'=>'<span class="sr-text">',
                'link_after'=>'</span>'
            );
            wp_nav_menu($social);
            ?>
            <p class="par">
               <?php echo get_option('pizza_phone'); ?> <?php echo get_option('pizza_location'); ?>, FT1
            </p>
        </div>
      </div>  
    </header>  

    <div class="mobile-menu">
            <a href="#" class="mobileBar"><i class="fa fa-bars">  <span class="mobileText">Menu</span></i></a>
    </div>


       <div class="menu">
        <div class="navigation">
            <?php  
                
                $menus=array(
                    'theme_location' => 'main-menu',
                    'container'=> 'nav',
                    'container_class' => 'menuHead'
                );
                wp_nav_menu( $menus )
                ?>
        </div>

    </div>
        
   