<?php get_header(); ?>
<?php get_sidebar(); ?>

    <section class="p-privacy-policy">
        <?php if (have_posts()) : ?>
            <h1 class="c-title__privacy-policy">
                <span>
                    <?php
                        $title = esc_html( get_the_title() );
                        if ( empty( $title ) ) {
                            $title = 'タイトルなし';
                        }
                        echo $title;
                    ?>
                </span>
            </h1>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>
