<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="p-page__error">
    <h2 class="p-page__error__h2">404 Not Found（ページが見つかりませんでした）</h2>
    <div class="p-page__error__inner">
        <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
        <p class="p-page__error__url">URL ：<span><?php echo get_pagenum_link(); ?></span></p>
        <p>現在表示するページがありません。</p>
        <button class="p-page__error__top"><a href="<?php echo esc_url(home_url()); ?>">トップページへ戻る</a></button>
    </div>
</div>

<?php get_footer(); ?>
