<?php get_header(); ?>
<?php get_sidebar(); ?>

<section class="p-news__archive">
    <div class="p-news__archive__inner">
        <h2 class="c-title__archive">
            <span>お知らせ一覧</span>
        </h2>

        <ul class="p-news__archive__list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="p-news__archive__item" <?php post_class(); ?>>
                        <?php wp_link_pages(); ?>
                        <time datetime="<?php the_time('Y-m-d'); ?>">
                            <?php the_time('Y.n.j'); ?>
                            &nbsp;&nbsp;<?php the_time('G:i'); ?>
                        </time>
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
