<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_action( 'init', 'poluostrov_register_post_types' );

function poluostrov_register_post_types(){
	register_post_type('cutaway', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Карточки-визитки - компании',
			'singular_name'      => 'Карточка-визитка',
			'add_new'            => 'Добавить визитку',
			'add_new_item'       => 'Добавление визитки',
			'edit_item'          => 'Редактирование визитки',
			'new_item'           => 'Новая визитка',
			'view_item'          => 'Смотреть визитку',
			'search_items'       => 'Искать визитку',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Компании',
		),
		'description'         => '',
		'public'              => true,
		'show_in_rest'        => true,
		'rest_base'           => 'cutaway',
		'menu_position'       => 2,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	));

	register_post_type('articles', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Статьи',
			'singular_name'      => 'Статья',
			'add_new'            => 'Добавить статью',
			'add_new_item'       => 'Добавление статьи',
			'edit_item'          => 'Редактирование статьи',
			'new_item'           => 'Новый статья',
			'view_item'          => 'Смотреть статью',
			'search_items'       => 'Искать статью',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Статьи',
		),
		'description'         => '',
		'public'              => true,
		'show_in_rest'        => true,
		'rest_base'           => 'articles',
		'menu_position'       => 2,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	));

	register_post_type('location', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Локации',
			'singular_name'      => 'Локация',
			'add_new'            => 'Добавить локацию',
			'add_new_item'       => 'Добавление локации',
			'edit_item'          => 'Редактирование локации',
			'new_item'           => 'Новая локация',
			'view_item'          => 'Смотреть локацию',
			'search_items'       => 'Искать локацию',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Локации',
		),
		'description'         => '',
		'public'              => true,
		'show_in_rest'        => true,
		'rest_base'           => 'location',
		'menu_position'       => 2,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	));

	register_post_type('authors', array(
    	'label'  => null,
    	'labels' => array(
    		'name'               => 'Авторы',
    		'singular_name'      => 'Автор',
    		'add_new'            => 'Добавить автора',
    		'add_new_item'       => 'Добавление автора',
    		'edit_item'          => 'Редактирование автора',
    		'new_item'           => 'Новый автор',
    		'view_item'          => 'Смотреть автора',
    		'search_items'       => 'Искать авторв',
    		'not_found'          => 'Не найдено',
    		'not_found_in_trash' => 'Не найдено в корзине',
    		'parent_item_colon'  => '',
    		'menu_name'          => 'Авторы',
    	),
    	'description'         => '',
    	'public'              => true,
    	'show_in_rest'        => true,
    	'rest_base'           => 'location',
    	'menu_position'       => 2,
    	'hierarchical'        => false,
    	'supports'            => [ 'title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    	'has_archive'         => false,
    	'rewrite'             => true,
    	'query_var'           => true,
    ));

	register_post_type('hashtags', array(
    	'label'  => null,
    	'labels' => array(
    		'name'               => 'Хэштеги',
    		'singular_name'      => 'Хэштег',
    		'add_new'            => 'Добавить хэштег',
    		'add_new_item'       => 'Добавление хэштега',
    		'edit_item'          => 'Редактирование хэштега',
    		'new_item'           => 'Новый хэштег',
    		'view_item'          => 'Смотреть хэштег',
    		'search_items'       => 'Искать хэштег',
    		'not_found'          => 'Не найдено',
    		'not_found_in_trash' => 'Не найдено в корзине',
    		'parent_item_colon'  => '',
    		'menu_name'          => 'Хэштеги',
    	),
    	'description'         => '',
    	'public'              => true,
    	'show_in_rest'        => true,
    	'menu_position'       => 4,
    	'hierarchical'        => false,
    	'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    	'has_archive'         => false,
    	'rewrite'             => true,
    	'query_var'           => true,
	));

	register_taxonomy( 'type', [ 'hashtags' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Тип',
			'singular_name'     => 'Тип',
			'search_items'      => 'Искать тип',
			'all_items'         => 'Все типы',
			'view_item '        => 'Смотреть типы',
			'parent_item'       => 'Родительский тип',
			'parent_item_colon' => 'Parent тип',
			'edit_item'         => 'Редактировать тип',
			'update_item'       => 'Обновить тип',
			'add_new_item'      => 'Добавить новый тип',
			'new_item_name'     => 'Новое имя типа',
			'menu_name'         => 'Тип',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );

	register_post_type('special_articles', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Особые статьи',
			'singular_name'      => 'Особая статья',
			'add_new'            => 'Добавить статью',
			'add_new_item'       => 'Добавление статьи',
			'edit_item'          => 'Редактирование статьи',
			'new_item'           => 'Новая статья',
			'view_item'          => 'Смотреть статью',
			'search_items'       => 'Искать статью',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Особые статьи',
		),
		'description'         => '',
		'public'              => true,
		'show_in_rest'        => true,
		'rest_base'           => 'location',
		'menu_position'       => 2,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
		'rewrite' => array('slug' => 'articles')
	));

	register_post_type('collections', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Подборки',
			'singular_name'      => 'Подборки',
			'add_new'            => 'Добавить подборку',
			'add_new_item'       => 'Добавление подборки',
			'edit_item'          => 'Редактирование подборки',
			'new_item'           => 'Новая подборка',
			'view_item'          => 'Смотреть подборку',
			'search_items'       => 'Искать подборку',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Подборки',
		),
		'description'         => '',
		'public'              => true,
		'show_in_rest'        => true,
		'rest_base'           => 'location',
		'menu_position'       => 2,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	));
}

flush_rewrite_rules( false );

add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
	remove_menu_page( 'edit.php' );                   // Записи
	remove_menu_page( 'edit-comments.php' );          // Комментарии
	remove_menu_page( 'users.php' );                  // Пользователи
}

add_action( 'wp_ajax_nopriv_filter', 'wp_ajax_filter_handler' );
add_action( 'wp_ajax_filter', 'wp_ajax_filter_handler' );

function wp_ajax_filter_handler() {
	require('api/filter.php');
	wp_die();
}

require('functions/shortcodes.php');

?>
