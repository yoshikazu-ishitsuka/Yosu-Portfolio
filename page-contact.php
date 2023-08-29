<?php get_header(); ?>
<?php get_sidebar(); ?>

    <section class="p-contact-form__outer">
        <h1 class="c-title__contact">お問い合わせ</h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>
