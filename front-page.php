<?php get_header(); ?>
    <main class="l-main">
        <article class="p-visual__main">
            <div class="p-visual__main__inner">
                <img class="p-visual__main__img" src="<?php echo esc_url( get_theme_file_uri( '/images/main_visual.png' )); ?>" alt="風景写真">
                <h2 class="p-visual__main__title">
                    <?php bloginfo( 'description' ); ?>
                </h2>
            </div>
            <section class="p-content">

            </section>

        </article>
        
    </main>
<?php get_footer(); ?>
