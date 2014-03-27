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


// 
// 
// getPostByCategoryName
// 	Busca los post según el 'slug' de la categoría
function getPostsByCategoryName($categoryName) {
	$daOne = '';
	$cats = get_categories();
	foreach($cats as $cat) {
		if($cat->slug == $categoryName)
			$daOne = $cat->cat_ID;
	}
	if($daOne != '')
		query_posts("cat=$daOne");

	// echo '<pre>';
	// print_r($cats);
	// echo '</pre>';
}

?>