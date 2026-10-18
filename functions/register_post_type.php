<?php

//add_action('init', function () {
//	register_post_type('cars', array(
//		'labels' => array(
//			'name' => 'Техника',
//			'singular_name' => 'Техника',
//			'menu_name' => 'Техника',
//			'name_admin_bar' => 'Техника',
//			'add_new' => 'Добавить технику',
//			'add_new_item' => 'Добавить новую технику',
//			'new_item' => 'Новая технику',
//			'edit_item' => 'Редактировать технику',
//			'view_item' => 'Посмотреть технику',
//			'all_items' => 'Вся техника',
//			'search_items' => 'Поиск техники',
//			'not_found' => 'Техника не найдены',
//			'not_found_in_trash' => 'Техника не найдены в корзине',
//		),
//		'public' => true,
//		'public_queryable' => true,
//		'show_ui' => true,
//		'show_in_menu' => true,
//		'query_var' => true,
//		'rewrite' => [
//			'slug' => 'cars',
//			'with_front' => false,
//			'pages' => true, // важно для /page/2/
//			'feeds' => true
//		],
//		'capability_type' => 'post',
//		'has_archive' => true,
//		'hierarchical' => true,
//		'menu_position' => 5,
//		'menu_icon' => 'dashicons-car',
//		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
//		'show_in_rest' => false, //! редактор гутенберг
//	));
//});

//// таксономия
//register_taxonomy('cars_type', ['cars'], [
//	'label' => 'Типы техники',
//	'labels' => [
//		'name' => 'Типы техники',
//		'singular_name' => 'Тип техники',
//		'search_items' => 'Поиск типов техники',
//		'all_items' => 'Все типы техники',
//		'parent_item' => 'Родительский тип техники',
//		'parent_item_colon' => 'Родительский тип техники:',
//		'edit_item' => 'Редактировать тип техники',
//		'update_item' => 'Обновить тип техники',
//		'add_new_item' => 'Добавить новый тип техники',
//		'new_item_name' => 'Название нового типа техники',
//		'menu_name' => 'Типы техники',
//		'back_to_items' => '← Назад к типам техники',
//	],
//	'description' => 'Классификация по типу техники',
//	'public' => true,
//	'hierarchical' => true,

//	'rewrite' => ['slug' => 'cars_type'],

//	'show_admin_column' => false,
//	'show_in_rest' => true,

//	'default_term' => [
//		'name' => 'Все',
//		'slug' => 'all',
//		'description' => 'Все типы техники',
//	],
//]);

////! all - для всех проектов
//add_action('save_post_cars', function ($post_id, $post, $update) {

//	// автосейв / ревизии — пропускаем
//	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
//		return;
//	}

//	if ($post->post_type !== 'cars') {
//		return;
//	}

//	$taxonomy = 'cars_type';
//	$required_slug = 'all';

//	// получаем термин "all"
//	$term = get_term_by('slug', $required_slug, $taxonomy);

//	if (!$term) {
//		return;
//	}

//	// текущие термины записи
//	$terms = wp_get_object_terms($post_id, $taxonomy, ['fields' => 'ids']);

//	// если "all" ещё не назначен — добавляем
//	if (!in_array($term->term_id, $terms, true)) {
//		wp_set_object_terms($post_id, array_merge($terms, [$term->term_id]), $taxonomy);
//	}

//}, 10, 3);
