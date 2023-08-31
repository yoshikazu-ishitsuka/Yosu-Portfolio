<footer class="l-footer">
    <div class="l-footer__inner">
    <ul class="p-navigation__footer">
                <?php
                    wp_nav_menu( array (
                        'menu'            => 'footer-menu',
                        'theme_location'  => 'footer-menu',
                        'container'       => false,
                        'container_class' => '', // container class (nav, div)
                        'menu_class'      => '', // ul class
                        'menu_id'         => '',
                        'items_wrap'      => '%3$s',
                        // 'add_li_class'    => 'p-navigation__menu__item--sidebar'
                    ));
                ?>
            </ul>
        <address class="c-text__copyright">
            <small>
                &copy;2023&nbsp;&nbsp; 
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </small>
        </address>
    </div>
</footer>

<!-- ページのトップに戻る -->
<a class="p-page__top" href="#">
    <div class="p-page-up">
        <i class="fa-solid fa-arrow-up arrow-up"></i>
    </div>
</a>

<?php wp_footer(); ?>
</article>

</body>

</html>
