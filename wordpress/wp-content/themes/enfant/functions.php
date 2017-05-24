<?php
//add_action('widgets_init','zero_add_sidebar');
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function theme_enqueue_styles()
{
    wp_enqueue_style('parent_style', get_template_directory_uri(). '/style.css');
}

function prefix_send_email_to_admin() 
{
    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */ 

    // Sanitize the POST field
    $name = sanitize_text_field($_POST['yakedo_contact_nom_prenom']);

    echo $name;
    //die(); 

    // Send to appropriate email
    if(isset($_POST['yakedo_contact_message']))
    {
        send_mail();
    }
}

add_filter( 'wp_mail_from', 'my_mail_from' );
function my_mail_from( $email ) {
    return "laura.narbone@gmail.com";
}

add_filter( 'wp_mail_from_name', 'my_mail_from_name' );
function my_mail_from_name( $name ) {
    return "Mail_de_Laura";
}

function send_mail()
{
    echo " préparation à l'envoi du mail... ";
    $recipient = "bastien.narbone@gmail.com";
    $subject = "wp_mail function test";
    $message = 'This is a test of the wp_mail function: wp_mail is working';
    //$headers = $_POST['yakedo_contact_nom_prenom'].$_POST['yakedo_contact_telephone'];
    //$result = wp_mail($recipient, $subject, $_POST['yakedo_contact_message']);
    define('Wp_USE_THEMES', false);
    //require 'wp-load.php';

    $result = wp_mail($recipient, $subject, $message);

    if($result)
    {
        echo 'The test message was sent. Check your email inbox.';
    }
    else
    {
        echo 'The message was not sent!';
    }
}

add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );