<?php
/*
Plugin Name: Zero plugin
Plugin URI: http://zero-plugin.com
Description: Fournit un widget de newsletter qui permet d'enregistrer les adresses mail dans la base de données afin de leur envoyer des informations journalières relatives au site
Version: 0.1
Author: Yakedo
Author URI: http://votre-site.com
License: GPL2
*/

class Zero_Plugin
{
	public function __construct()
	{
		include_once plugin_dir_path(__FILE__).'newsletter.php';
		new Zero_Newsletter();
		register_activation_hook(__FILE__, array('Zero_Newsletter', 'install'));
		register_uninstall_hook(__FILE__, array('Zero_Newsletter', 'uninstall'));
		add_action('admin_menu', array($this, 'add_admin_menu'));
		
		include_once plugin_dir_path(__FILE__).'recent.php';
		new Zero_Recent();
	}
	
	public function add_admin_menu()
	{
		add_menu_page('Notre premier plugin', 'Zero plugin', 'manage options', 'zero', array($this, 'menu_html'));
		add_submenu_page('zero', 'Apercu' ,'Apercu', 'manage_options', 'zero', array($this, 'menu.html'));
	}
	
	public function menu_html()
	{
		echo '<h1>'.get_admin_page_title().'</h1>';
		echo '<p>Bienvenue sur la page d\'accueil du plugin</p>';
	}
}
new Zero_Plugin();