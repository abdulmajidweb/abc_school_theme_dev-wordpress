<?php

// css & js file calling
function our_calling_resources(){
	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', '', '1.0.0');
	wp_enqueue_style('main-style', get_stylesheet_uri(), '', '1.0.1');
	wp_enqueue_script('jquery-js', get_template_directory_uri().'/js/jquery-3.3.1.min.js', '', '1.0.0');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', '', '1.0.0');
}
add_action('wp_enqueue_scripts', 'our_calling_resources');

//register menu
function our_theme_setup(){
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
	register_post_type('customslider', array(
		'labels' => array(
			'name' => 'Slider',
			'add_new_item' => 'Add New Slider'
		),
		'public' => true,
		'supports' => array(
			'title', 'thumbnail'
		)
	));
	register_post_type('custompost1', array(
		'labels' => array(
			'name' => 'MessageOfPrincipal',
			'add_new_item' => 'Add New Message'
		),
		'public' => true,
	));
	register_post_type('custompost2', array(
		'labels' => array(
			'name' => 'MessageOfWelcome',
			'add_new_item' => 'Add New Message'
		),
		'public' => true,
	));

	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'our_theme_setup');

//sidebar register
function ourWidgetInit(){
	register_sidebar(array(
		'name' => 'Recent Notice',
		'id' => 'recent_notice',
		'before_title' => '<h5 class="d-none">',
		'after_title' => '</h5>'
	));

	register_sidebar(array(
		'name' => 'Primary Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="shadow rounded-bottom sidebar" style="background-color:#728950;">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="p-2 text-white">',
		'after_title' => '</h6>'
	));
}
add_action('widgets_init', 'ourWidgetInit');

/* Custom Pagination */ function pagination($pages = '', $range = 4){      $showitems = ($range * 2)+1;          global $paged;       if(empty($paged)) $paged = 1;        if($pages == ''){            global $wp_query;            $pages = $wp_query->max_num_pages;            if(!$pages){$pages = 1;}  }  if(1 != $pages){   echo "<div class=\"pagination\"><span>Page No- ".$paged." of ".$pages."</span>";      if($paged > 2 && $paged > $range+1 && $showitems < $pages)     echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";      if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";      for ($i=1; $i <= $pages; $i++){    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){     echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";                  }   }    if ($paged < $pages && $showitems < $pages)  
   echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next Page &rsaquo;</a>";           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last Page &raquo;</a>";   echo "</div>\n";  }}