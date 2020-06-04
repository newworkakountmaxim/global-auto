<?php
add_action('init', 'globalauto_custom_post_type');
function globalauto_custom_post_type(){
    $args_autoschools = array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Автошколы ', // основное название для типа записи
            'singular_name'      => 'Автошкола', // название для одной записи этого типа
            'add_new'            => 'Добавить Автошколу ', // для добавления новой записи
            'add_new_item'       => 'Новая Автошкола', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => '', // для редактирования типа записи
            'new_item'           => '', // текст новой записи
            'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
            'search_items'       => '', // для поиска по этим типам записи
            'not_found'          => '', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => '', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
            'menu_name'          => 'Автошколы', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => null,
        'show_in_menu'        => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail','editor'),
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => true,
    );
    register_post_type('autoschools', $args_autoschools );

    $args_instructors = array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Инструкторы', // основное название для типа записи
            'singular_name'      => 'Инструктор ', // название для одной записи этого типа
            'add_new'            => 'Добавить Инструктора ', // для добавления новой записи
            'add_new_item'       => 'Новый Инструктор', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => '', // для редактирования типа записи
            'new_item'           => '', // текст новой записи
            'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
            'search_items'       => '', // для поиска по этим типам записи
            'not_found'          => '', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => '', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
            'menu_name'          => 'Инструкторы', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => null,
        'show_in_menu'        => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','thumbnail','editor'),
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => true,
    );
    register_post_type('instructors', $args_instructors );

    $args_callbacks = array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Отзывы', // основное название для типа записи
            'singular_name'      => 'Отзыв ', // название для одной записи этого типа
            'add_new'            => 'Добавить Отзыв ', // для добавления новой записи
            'add_new_item'       => 'Новый Отзыв', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => '', // для редактирования типа записи
            'new_item'           => '', // текст новой записи
            'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
            'search_items'       => '', // для поиска по этим типам записи
            'not_found'          => '', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => '', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
            'menu_name'          => 'Отзывы', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => null,
        'show_in_menu'        => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','thumbnail','editor'),
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => true,
    );
    register_post_type('callbacks', $args_callbacks );
}