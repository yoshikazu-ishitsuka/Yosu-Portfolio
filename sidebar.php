<!-- <article class="side-wrapper"> -->
    <aside class="l-sidebar">
        <div class="l-sidebar__main">
            <ul class="p-navigation__sidebar">
                <?php
                    wp_nav_menu( array (
                        'menu'            => 'header-menu',
                        'theme_location'  => 'header-menu',
                        'container'       => false,
                        'container_class' => '', // container class (nav, div)
                        'menu_class'      => '', // ul class
                        'menu_id'         => '',
                        'items_wrap'      => '%3$s',
                        'add_li_class'    => 'p-navigation__menu__item--sidebar'
                    ));
                ?>
            </ul>
        </div>
    </aside>
<!-- </article> -->
