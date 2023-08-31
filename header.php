<!DOCTYPE html>
<html class="admin" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yosu-Portfolio yoshikazu_ishitsukaのポートフォリオサイトです">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="home" <?php body_class(); ?>>
<article class="wrapper u-background__overlay">

<?php wp_body_open(); ?>
    <header class="l-header">
        <div class="l-header__inner">
            <h1 class="c-title">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <nav class="p-navigation">
                <button class="p-hamburger js-hamburger">
					<span>メニュー展開ボタン</span>
				</button>
                <ul class="p-navigation__menu">
                    <?php
                        wp_nav_menu( array (
                            'menu'            => 'header-menu',
                            'theme_location'  => 'header-menu',
                            'container'       => false,
                            'container_class' => '', // container class (nav, div)
                            'menu_class'      => '', // ul class
                            'menu_id'         => '',
                            'items_wrap'      => '%3$s',
                            'add_li_class'    => 'p-navigation__menu__item'
                        ));
                    ?>
                    <!-- <li class="p-navigation__menu__item"><a href="">制作実績</a></li>
                    <li class="p-navigation__menu__item"><a href="">スキル</a></li>
                    <li class="p-navigation__menu__item"><a href="">私について</a></li>
                    <li class="p-navigation__menu__item"><a href="">お問い合わせ</a></li> -->
                </ul>
            </nav>

        </div>

    </header>
    
<!-- 管理バーがあるかどうかで上の余白を調整 -->
<?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
    .l-header__inner,
    .l-sidebar.is-open {
        margin-top: 46px;
    }
    @media ( min-width: 783px ) {
        .l-header__inner,
        .l-sidebar.is-open {
            margin-top: 32px;
        }
    }

    @media (max-width: 600px) {
        #wpadminbar {
            position: fixed !important;
        }
    }
    </style>
<?php endif; ?>
