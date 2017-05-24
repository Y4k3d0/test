<?php

class Yakedo_Contact_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('yakedo_contact', 'Contact', array('descrption' => 'Formulaire de contact par mail'));
    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php 
    }

    public function widget($args, $instance) //les données du formulaire doivent être récupérées, certainement dans un fichier result.php
    {
        echo $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title', $instance['title']);
        echo $args['after_title'];
        ?>
        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
            <p>
                <input id="yakedo_contact_nom_prenom" name="yakedo_contact_nom_prenom" type="text" placeholder="Nom/Prénom" required/> <!-- contenu dans $header -->
                <input id="yakedo_contact_telephone" name="yakedo_contact_telephone" type="text" placeholder="Téléphone" maxlenght="10" required/> <!-- contenu dans $header -->
                <input id="yakedo_contact_mail" name="yakedo_contact_mail" type="email" placeholder="Email" required/> <!-- contenu dans $header --> 
                <textarea id="yakedo_contact_message" name="yakedo_contact_message" palceholder="Message" rows="5"required></textarea> <!-- indispensable, contenu dans $result -->
                <input type="hidden" name="action" value="contact_form">
            </p>
            <input type="submit" name="Envoyer"/> <!-- envoie le mail à l'adresse 'bastien.narbone@gmail.com' avec les données enregistrées dans les champs précédents -->
        </form>
        <?php
        echo $args['after_widget'];
    }
}