<?php get_header(); ?>
    <main class="l-main">
        <section class="p-visual__main">
            <div class="p-visual__main__inner">
                <img class="p-visual__main__img" src="<?php echo esc_url( get_theme_file_uri( '/images/top/main_visual.png' )); ?>" alt="風景写真">
                <h2 class="p-visual__main__title">
                    <?php bloginfo( 'description' ); ?>
                </h2>
            </div>
        </section>

        <article class="p-content">

            <section class="p-news">

            </section>
            <section class="p-profile">
                <div class="p-profile__outer">
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
                                案件実績あり。
                                <br> WordPressプラグイン開発実績あり。  
                                <br>エンジニアリングスクールRaiseTech受講生 
                                <br>(WordPressコース 2022.04月生)
                                </dd>
                            </dl>
                        </dd>
                    </dl>

                    <p class="c-title__sns">
                        「各種リンク」
                    </p>
                    <ul class="p-profile__sns">
                        <li class="p-profile__sns__list">
                            <a href="//twitter.com/it_begi_yos815" target="_blank">
                                <img class="c-icon__sns" src="<?php echo esc_url( get_theme_file_uri( '/images/sns/t_logo.png' )); ?>" alt="Twitterアイコン">
                            </a>
                        </li>
                        <li class="p-profile__sns__list">
                            <a href="//github.com/yoshikazu-ishitsuka" target="_blank">
                                <img class="c-icon__sns" src="<?php echo esc_url( get_theme_file_uri( '/images/sns/g_logo.png' )); ?>" alt="アイコン">
                            </a>
                        </li>
                        <li class="p-profile__sns__list">
                            <a href="//qiita.com/yosyosyoyoyo" target="_blank">
                                <img class="c-icon__sns" src="<?php echo esc_url( get_theme_file_uri( '/images/sns/q_logo.png' )); ?>" alt="アイコン">
                            </a>
                        </li>
                        <li class="p-profile__sns__list">
                            <a href="//app.build-up.info/enterprises/bEDI6AXZ/portfolio/bQM1ITMgoTd" target="_blank">
                                <img class="c-icon__sns" src="<?php echo esc_url( get_theme_file_uri( '/images/sns/b_logo.png' )); ?>" alt="アイコン">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="p-profile__img">
                    <img src="<?php echo esc_url( get_theme_file_uri( '/images/top/profile.png' )); ?>" alt="">
                </div>
            </section>
        </article>

        
    </main>
<?php get_footer(); ?>
