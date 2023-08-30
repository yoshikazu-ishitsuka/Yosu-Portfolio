<?php
    $args = array(
        'post_type' => 'works', //設定したカスタム投稿名※ここではwork
        'posts_per_page' => '-1' //表示させたい件数を指定
    );
?>
    <?php $my_query = new WP_Query($args); ?>

    <!-- //ループ処理開始 -->
    <div class="p-works__inner">
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <!-- //表示する中身（ここから） -->
        <div class="p-works__inner__item">
            <span class="c-image__mask">
                <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()): ?>
                        <!--投稿にアイキャッチがある場合-->
                        <?php the_post_thumbnail( array( 300, 300 ), ['class' => 'p-card__works__image']); ?>
                    <?php else: ?>
                        <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
                        <img class="p-card__works__image no-image" src="<?php echo get_theme_file_uri(); ?>/images/top/noimage.png" alt="no image">
                    <?php endif; ?>
                </a>
            </span>
            <h4 class="p-works__inner__title c-title__works">
                <?php the_title(); ?> <!-- 記事タイトルを出力 -->
            </h4>
        </div>
            <!-- //表示する中身（ここまで） -->
            
            <?php endwhile; ?>
        </div>

    <?php wp_reset_postdata(); ?>
    <!-- //ループ処理終了 -->
