<?php
class Zero_Recent
{
	public function __construct()
	{
		add_shortcode('zero_recent_articles', array($this, 'recent.html'));
	}
	
	public function recent_html($atts, $content)
{
	$atts = shortcode_atts(array('numberposts' => 5), $atts);
	$posts = get_posts($atts);
	
	$html = array();
	$html[] = $content;
	$html[] = '</u1>';
	foreach ($posts as $post)
	{
		$html[] = '<li><a href="'.get_permalink($post).'">'.$post->post_title.'</a></li>';
	}
	$html[] = '</u1>';
	
	echo implode('', $html);
}
}