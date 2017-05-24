<?php get_header() ?>

<!-- ici s'insère le contenu principal de la page -->

<?php get_footer() ?>

<?php
while (have_posts()) :
    the_post();
    the_content(); 
	
	comments_template();
    comment_form();
	get_template_part('content');
endwhile; 
?>

<ol>
  <?php wp_list_comments(); ?>
</ol>

<?php get_sidebar() ?>

<div class="widgets">
<?php dynamic_sidebar('my_custom_zone'); ?>
</div>