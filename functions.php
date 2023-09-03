<?php

function read_script()
{
    wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap' );
    wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap' );
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4' );
    wp_enqueue_style( 'reset', '//unpkg.com/destyle.css@3.0.2/destyle.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ), array(), '1.0.0' );
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true );
    wp_enqueue_script( 'progressbar', '//rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js', array(), '3.6.0', true );
    wp_enqueue_script( 'script', get_theme_file_uri( '/js/script.js' ), array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'hamburger', get_theme_file_uri( '/js/hamburger.js' ), array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'read_script' );

function custom_theme_support()
{
        // テーマサポート
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 960, 640 ); //デフォルトサイズの設定
        add_theme_support( 'title-tag' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'menus' );

        register_nav_menus( array (
            'header_menu' => esc_html( 'header-menu', 'yosu-portfolio' ),
            'hamburger_menu' => esc_html( 'hamburger-menu', 'yosu-portfolio' ),
            'footer_menu' => esc_html( 'footer-menu', 'yosu-portfolio' ),
        ));

}
add_action( 'after_setup_theme', 'custom_theme_support' );

// wp_nav_menuのliにclass追加
function add_additional_class_on_li( $classes, $item, $args )
{
    if ( isset ( $args->add_li_class ) ) {
    $classes['class'] = $args->add_li_class;
}
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// カスタム投稿設定
add_action('init', 'create_post_type');
function create_post_type()
{
    //投稿時に使用できる投稿用のパーツを指定
    $supports = array(
        'title', //タイトルフォーム
        'editor', //エディター(内容の編集)
        'thumbnail', //アイキャッチ画像
        'author', //投稿者
        'excerpt', //抜粋
        'revisions', //リビジョンを保存
    );
    register_post_type(
        'works', // 投稿タイプ名
        [
        'labels' => [
            'name'          => '制作実績', // 管理画面上で表示する投稿タイプ名
            'add_new'       => '新規追加', // 新規追加のラベル
            // 'add_new_item' => 'サンプル投稿新規登録', // 編集画面ラベル(新規登録時)
            // 'edit_item' => 'サンプル投稿編集', //編集画面ラベル(既存投稿編集時)
            // 'menu_name' => 'サンプル投稿', //管理画面メニュー(親ラベル)
            'all_items'     => '制作実績一覧', //管理画面メニュー(一覧ラベル)
            // 'search_items' => 'サンプル投稿を検索' , //検索フォームボタンラベル
            'singular_name' => 'works',    // カスタム投稿の識別名
        ],
        'public'        => true,  // カスタム投稿タイプの表示(trueにする)
        'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
        'menu_position' => 5,     // 管理画面上での表示位置
        'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
        'supports' => $supports
        ]
    );

    // register_taxonomy(
    //     'news-cat',
    //     'news',
    //     array(
    //         'label' => 'ニュースカテゴリー',
    //         'hierarchical' => true, // “true”だと「カテゴリー」のように。”false”だと「タグ」のような振る舞いになります
    //         'public' => true,
    //         'show_in_rest' => true,
    //     )
    // );

    // register_taxonomy(
    //     'news-tag',
    //     'news',
    //     array(
    //         'label' => 'ニュースタグ',
    //         'hierarchical' => false,
    //         'public' => true,
    //         'show_in_rest' => true,
    //         'update_count_callback' => '_update_post_term_count', // カスタムタクソノミーをタグのように使いたい場合は、オプションの'update_count_callback' => '_update_post_term_count'を必ず追加します
    //     )
    // );

    register_post_type(
        'news', // 投稿タイプ名
        [
        'labels' => [
            'name'          => 'お知らせ', // 管理画面上で表示する投稿タイプ名
            'add_new'       => '新規追加', // 新規追加のラベル
            // 'add_new_item' => 'サンプル投稿新規登録', // 編集画面ラベル(新規登録時)
            // 'edit_item' => 'サンプル投稿編集', //編集画面ラベル(既存投稿編集時)
            // 'menu_name' => 'サンプル投稿', //管理画面メニュー(親ラベル)
            'all_items'     => 'お知らせ一覧', //管理画面メニュー(一覧ラベル)
            // 'search_items' => 'サンプル投稿を検索' , //検索フォームボタンラベル
            'singular_name' => 'news',    // カスタム投稿の識別名
        ],
        'public'        => true,  // カスタム投稿タイプの表示(trueにする)
        'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
        'menu_position' => 5,     // 管理画面上での表示位置
        'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
        'supports' => $supports
        ]
    );

}

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}
