<?php 

    function pizza_options(){
                   // page title, // page menu  //                                            // icon // position
        add_menu_page('Lapiza', 'Pizza Options', 'administrator', 'pizza_options','pizza_adjustments' ,'',20); 

        add_submenu_page( 'pizza_options', 'Reservations', 'Reservations', 'administrator', 'pizza_reservations','pizza_reservations');
    }

    add_action('admin_menu','pizza_options');

    function pizza_settings(){
        register_setting('pizza_options_maps','pizza_map_latitude');
        register_setting('pizza_options_maps','pizza_map_longitude');
        register_setting('pizza_options_maps','pizza_map_zoom');
        register_setting('pizza_options_maps','pizza_map_api');

        register_setting('pizza_options_restaurant','pizza_phone');
        register_setting('pizza_options_restaurant','pizza_location');
    }

    add_action('init','pizza_settings');

    function pizza_adjustments(){ ?>
       <div class="wrap">
         <h1>La Pizza Adjustments</h1>
          <form action="options.php" method="post">
                <?php 
                    settings_fields('pizza_options_maps');
                    do_settings_sections('pizza_options_maps');
                ?>
                <h2>Google Maps</h2>
                <table class="form-table">
                   <tr valgin="top">
                    <th scope="row">Latitude:</th>
                    <td>
                        <input type="text" name="pizza_map_latitude" value="<?php echo esc_attr( get_option('pizza_map_latitude')); ?>">
                    </td>
                   </tr>
                   <tr>
                    <th scope="row">Longitude:</th>
                    <td>
                        <input type="text" name="pizza_map_longitude" value="<?php echo esc_attr( get_option('pizza_map_longitude')); ?>">
                    </td>
                   </tr>
                   <tr>
                    <th scope="row">Zoom:</th>
                    <td>
                        <input type="number" max="21" min="12" name="pizza_map_zoom" value="<?php echo esc_attr( get_option('pizza_map_zoom')); ?>">
                    </td>
                   </tr>
                   <tr>
                    <th scope="row">API:</th>
                    <td>
                        <input type="text" name="pizza_map_api" value="<?php echo esc_attr( get_option('pizza_map_api')); ?>">
                    </td>
                   </tr>

                     <?php 
                         settings_fields('pizza_options_restaurant');
                         do_settings_sections('pizza_options_restaurant');
                        ?>

                   <tr>
                    <th scope="row">Phone Number:</th>
                    <td>
                        <input type="tel" name="pizza_phone" value="<?php echo esc_attr( get_option('pizza_phone')); ?>">
                    </td>
                   </tr>
                   <tr>
                    <th scope="row">Pizza Location:</th>
                    <td>
                        <input type="text" name="pizza_location" value="<?php echo esc_attr( get_option('pizza_location')); ?>">
                    </td>
                   </tr>
                </table>
                <?php submit_button(); ?>
           </form>
       </div>
    <?php }

    function pizza_reservations(){ ?>

        <div class="wrap">
        <h1>Reservations</h1>
            <table class="wp-list-table widefat stripped">
                <thead>
                    <tr>
                        <th class="manage-column">ID</th>
                        <th class="manage-column">Name</th>
                        <th class="manage-column">Date Of Reservation</th>
                        <th class="manage-column">Email</th>
                        <th class="manage-column">Phone</th>
                        <th class="manage-column">Message</th>
                        <th class="manage-column">Remove</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                
                    global $wpdb;
                    $table=$wpdb->prefix.'reservations';

                    $reservations=$wpdb->get_results("SELECT * FROM $table",ARRAY_A);// assostive array

                    foreach($reservations as $res) { ?>

                        <tr>
                            <td>
                            <?php echo $res['id']; ?>
                            </td>
                        
                            <td>
                            <?php echo $res['name']; ?>
                            </td>
                        
                            <td>
                            <?php echo $res['date']; ?>
                            </td>
                        
                            <td>
                            <?php echo $res['email']; ?>
                            </td>
                       
                            <td>
                            <?php echo $res['phone']; ?>
                            </td>

                            <td>
                            <?php echo $res['message']; ?>
                            </td>

                            <td>
                            <a href="#" class="remove_res" data-reservation="<?php echo $res['id']; ?>">
                              Remove
                            </a>
                            </td>
                        </tr>

                  <?php  } ?>
                
                </tbody>
            </table>
        </div>
        
   <?php } ?>