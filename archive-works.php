<?php get_header(); ?>
<?php get_sidebar(); ?>

<section class="p-works__archive">
    <div class="p-works__archive__inner">
        <h2 class="c-title__archive">
            <span>制作実績一覧</span>
        </h2>
        <ul class="p-works__archive__list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="p-works__archive__item" <?php post_class(); ?>>
                        <?php wp_link_pages(); ?>
                        <div class="p-introduction__main">
                            <a href="<?php the_permalink(); ?>">
                                <span class="c-image__mask">
                                    <?php if ( has_post_thumbnail()) : ?>
                                        <?php echo get_the_post_thumbnail('', 'medium_large', array( 'class' => 'p-introduction__image--works') ); ?>
                                    <?php else : ?>
                                        <img class="p-introduction__image" src="<?php echo esc_url( get_theme_file_uri('/images/top/main_visual.webp') ); ?>" alt="アイキャッチ画像">
                                    <?php endif; ?>
                                </span>

                                <div class="p-introduction__title--works">
                                    <?php
                                        $title = esc_html( get_the_title() );
                                        if ( empty( $title ) ) {
                                            $title = 'タイトルなし';
                                        }
                                        echo $title;
                                    ?>
                                </div>
                            </a>
                        </div>
                        <?php the_content(); ?>
                    </li>
                <?php endwhile; ?>
            <?php else : ?>
                <p>表示するものがありません</p>
            <?php endif; ?>
        </ul>
    </div>
</section>

<?php get_footer(); ?>
