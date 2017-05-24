<?php
/*
Plugin Name: Yakedo plugin
Plugin URI: http://zero-plugin.com
Description: plugin de formulaire contact simple
Version: 0.1
Author: Bastien Narbone
Author URI: http://votre-site.com
License: GPL2
*/

class Yakedo_Plugin
{
    public function __construct()
    {
        include_once plugin_dir_path(__FILE__).'contact.php';
        new Yakedo_Contact();
    }
}
new Yakedo_Plugin();