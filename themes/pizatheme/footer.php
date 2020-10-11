<footer class="footer">
    <div class="footer-content">
    
    <?php  
                
                $menus=array(
                    'theme_location' => 'main-menu',
                    'container'=> 'nav',
                    'container_class' => 'menuFoot'
                );
                wp_nav_menu( $menus )
        ?>
        <p class="foot-par"><?php echo get_bloginfo('name'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js" integrity="sha512-0kQqdmb3fpKtRwrbCZDlmiwuZgDyPAOLDOu/HyAt4py7lAVDXKknqtqS6dFNV8U8JrHZymQxlO9SFPZ2u8dhMw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>

</body>
</html>