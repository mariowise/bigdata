<?php

add_theme_support('post-thumbnails');

function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">[Leer mas...]</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function page_noticias() {
	die('Esto es noticias');
}


?>