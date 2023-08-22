<?php get_header(); ?>
    <main class="l-main">
        <section class="p-visual__main">
            <div class="p-visual__main__inner">
                <img class="p-visual__main__img" src="<?php echo esc_url( get_theme_file_uri( '/images/main_visual.png' )); ?>" alt="風景写真">
                <h2 class="p-visual__main__title">
                    <?php bloginfo( 'description' ); ?>
                </h2>
            </div>
        </section>

        <article class="p-content">

            <section class="p-news">

            </section>
            <section class="p-profile">
                <dl class="p-profile__inner">
                    <dt class="c-title__profile c-text__underline c-text__undertext">
                        プロフィール
                    </dt>
                    <dd class="c-text__profile">
                        <dl>
                            <dt class="personal">
                                石塚 良和&nbsp;&nbsp;
                                <span>
                                    1985年 茨城県生まれ
                                </span>
                            </dt>
                            <dd class="introduction">
                            IT業界への転職を志し、毎日学習に励んでいます。 WordPressが得意です。
                            案件実績あり。 WordPressプラグイン開発実績あり。  
                            <br>エンジニアリングスクールRaiseTech受講生 (WordPressコース)
                            </dd>
                        </dl>
                    </dd>
                </dl>
                <div class="p-profile__img">
                    <img src="<?php echo esc_url( get_theme_file_uri( '/images/profile.png' )); ?>" alt="">
                </div>
            </section>
        </article>

        
    </main>
<?php get_footer(); ?>
