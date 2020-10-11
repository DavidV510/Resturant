<?php 
    //  Php Queries
    require get_template_directory().'/inc/queries.php';

    // Pizza Database MySQL
    require get_template_directory().'/inc/database.php';

    // Reservation Table
    require get_template_directory().'/inc/reservations.php';

    //Options Page
    require get_template_directory().'/inc/options.php';


    function pizza_scripts(){

        wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
        wp_enqueue_style('head', get_template_directory_uri().'/css/header.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('foot', get_template_directory_uri().'/css/footer.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('blog', get_template_directory_uri().'/css/blog.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('pageAbout', get_template_directory_uri().'/css/page-aboutUs.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('pageMenu', get_template_directory_uri().'/css/menu.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('sidebar', get_template_directory_uri().'/css/sidebar.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('contact', get_template_directory_uri().'/css/contact.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('home', get_template_directory_uri().'/css/home.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('polyfill', get_template_directory_uri().'/css/polyfill.css' ,NULL, '1.0.3.3');
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','head','foot','pageAbout','pageMenu','sidebar','contact','home','polyfill'), '1.0.3.3');

        wp_enqueue_script('jquery');

        wp_enqueue_script('script', get_template_directory_uri().'/js/script.js',array('jquery'), '1.0.1.3',true);
        wp_enqueue_script('poly', get_template_directory_uri().'/js/polyfill.js',array('jquery'), '1.0.1.3',true);
        wp_enqueue_script('ajax', get_template_directory_uri().'/js/ajax-admin.js',array('jquery'), '1.0.1.3',true);
        wp_localize_script(
            'script',
            'options',
            array(
                'latitude'=>get_option('pizza_map_latitude'),
                'longitude'=>get_option('pizza_map_longitude'),
                'zoom'=>get_option('pizza_map_zoom')
            )
        );
    }


    function pizza_admin_scripts(){
    
        wp_enqueue_script('ajax-admin', get_template_directory_uri().'/js/ajax-admin.js',array('jquery'), '1.0.1.3',true);
        wp_enqueue_script('sweetAlert','https://cdn.jsdelivr.net/npm/sweetalert2@10',array('jquery'),'1.0',true);
        wp_localize_script(
            'ajax-admin',
            'admin_ajax',
            array(
                'ajaxurl'=>admin_url('admin-ajax.php'),
            )
        );
    }
   
    function pizza_menus(){
        register_nav_menus(array(
            'main-menu'=>'Main Menu',
            'social-menu'=>'Social Menu'
        ));
    };

    function pizza_thumbnails(){
        add_image_size( 'small',100,100,true );
        add_image_size('medium',250,300,true);

        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
    }


    function pizza_widgets(){
        register_sidebar(array(
            'name'=>'Blog Sidebar',
            'id'=> 'blog_sidebar',
            'before_widget'=> '<div class="widget">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        ));
    }
    // Hooks 
    add_action('init','pizza_menus');
    add_action('widgets_init','pizza_widgets');
    add_action('wp_enqueue_scripts', 'pizza_scripts');
    add_action('after_setup_theme','pizza_thumbnails');
    add_action('admin_enqueue_scripts','pizza_admin_scripts');
    
?>