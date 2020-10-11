<?php 

    function pizza_save_reservation(){
        global $wpdb;
        if(isset($_POST['respiza']) && $_POST['hidden']==1){
            $name=sanitize_text_field($_POST['name']);
            $date=sanitize_text_field($_POST['date']);
            $email=sanitize_text_field($_POST['email']);
            $phone=sanitize_text_field($_POST['tel']);
            $text=sanitize_text_field($_POST['text']);

            $table = $wpdb->prefix . 'reservations';

            $data=array(
                'name'=>$name,
                'date'=>$date,
                'email'=>$email,
                'phone'=>$phone,
                'message'=>$text
            );
            //Define the format
            $format=array(
                '%s',
                '%s',
                '%s',
                '%s',
                '%s'
            );

            $wpdb->insert($table,$data,$format);

            $url=get_page_by_title('Thanks for Submission!');
            wp_redirect(get_permalink($url));
            exit();
        }
    }

    function pizza_delete_reservation(){
        if($_POST['type']=='delete'){
            global $wpdb;
            $table=$wpdb->prefix.'reservations';
            $id_reservation=$_POST['id'];

            $result= $wpdb->delete($table, array('id'=>$id_reservation),array('%d'));

            if($result==1){
                $response=array(
                    'response'=>'success',
                    'id'=>$id_reservation
                );
            }else{
                $response=array(
                    'response'=>'error'
                );
            }
        }
        
        
        die(json_encode($response));
    }
    
    add_action('init','pizza_save_reservation');
    add_action('wp_ajax_pizza_delete_reservation','pizza_delete_reservation')
?>