<?php
function ck_custom_nav() {
	register_nav_menus(array(
		'menu_head' => 'Header Menu',
		'menu_foot' => 'Footer Menu'
	));
	wp_enqueue_script('jquery');
}
add_action('init', 'ck_custom_nav');

function ck_widgets_init() {

	register_sidebar( array(
		'name'          => 'Primary sidebar',
		'id'            => 'primary',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action('widgets_init', 'ck_widgets_init');
?>
