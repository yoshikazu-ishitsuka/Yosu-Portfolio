<?php
    $args = array(
        'post_type' => 'news', //設定したカスタム投稿名※ここではwork
        'posts_per_page' => '3' //表示させたい件数を指定
    );
?>
    <?php $my_query = new WP_Query($args); ?>

    <div class="p-news__inner">
        <?php if ($my_query->have_posts()): // お知らせがある場合 ?>
            <ul class="p-news__content">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <!-- ▽ ループ処理開始 ▽ -->
                    <li class="p-news__list">
                        <time><?php the_time('Y/n/j'); ?></time>
                        <?php the_content(); ?>
                    </li>
                    <!-- △ ループ処理終了 △ -->
                <?php endwhile; ?>
            </ul>
        <div class="p-news__link">
            <a href="<?php echo get_post_type_archive_link( 'news' ); ?>">
                <p>
                    お知らせの一覧を見る
                </p>
            </a>
        </div>

        <?php else: // お知らせがない場合?>
            <p>まだお知らせがありません。</p>
        <?php endif; ?>
    </div>

    <?php wp_reset_postdata(); ?>
