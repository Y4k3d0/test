<?php

include_once plugin_dir_path(__FILE__).'/contactwidget.php';

class Yakedo_Contact
{
    public function __construct()
    {
        add_action('widgets_init', function(){register_widget('Yakedo_Contact_Widget');});
    }
}