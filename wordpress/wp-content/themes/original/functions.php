<?php
add_action('widgets_init','original_add_sidebar');
function original_add_sidebar()
{
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'Zone supérieure',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}
?>

<?php 
add_action('init', 'original_add_menu');
function original_add_menu()
{
    register_nav_menu('main_menu', 'Menu principal');
}

wp_nav_menu(array('theme_location' => 'main_menu'));
?>

<?php
function truncate_long_title($title)
{
    if (strlen($title) > 50) {
        $title = substr($title, 0, 50).'...';
    }
    return $title;
}
?>