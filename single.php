<?php get_header(); ?>
<?php get_sidebar(); ?>
    <article class="p-introduction__wrapper">
        <section class="p-introduction__visual">
            <div class="p-introduction__main">
                <?php if ( has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail('', 'medium_large', array( 'class' => 'p-introduction__image') ); ?>
                <?php else : ?>
                    <img class="p-introduction__image" src="<?php echo esc_url( get_theme_file_uri('/images/top/main_visual.webp') ); ?>" alt="アイキャッチ画像">
                <?php endif; ?>
            </div>

            <div class="p-introduction__title">
                <?php
                    $title = esc_html( get_the_title() );
                    if ( empty( $title ) ) {
                        $title = 'タイトルなし';
                    }
                    echo $title;
                ?>
            </div>
        </section>

        <section class="p-introduction__detail">
            <div class="p-introduction__sub">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php wp_link_pages(); ?>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>表示するものがありません</p>
                <?php endif; ?>
            </div>

        </section>

    </article>
                    
<?php get_footer(); ?>
