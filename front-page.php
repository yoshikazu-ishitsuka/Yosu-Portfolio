<?php get_header(); ?>
<?php get_sidebar(); ?>
    <main class="l-main">
        <section class="p-visual__main">
            <div class="p-visual__main__inner">
                <img class="p-visual__main__img" src="<?php echo esc_url( get_theme_file_uri( '/images/top/main_visual.webp' )); ?>" alt="風景写真">
                <h2 class="p-visual__main__title">
                    <?php bloginfo( 'description' ); ?>
                </h2>
            </div>
        </section>

        <article class="p-content">

            <!-- お知らせ -->
            <section class="p-news fade" id="news">
                <div class="p-news__title">
                    <h3 class="c-title__headline c-text__underline c-text__undertext">
                        NEWS
                    </h3>
                </div>

                <?php get_template_part( "components/news_content" ); ?>

            </section>
            <!-- お知らせここまで -->

            <!-- プロフィール -->
            <section class="p-profile fade" id="profile">
                <div class="p-profile__outer">
                    <dl class="p-profile__inner">
                        <dt class="c-title__headline c-text__underline c-text__undertext">
                            PROFILE
                        </dt>
                        <dd class="c-text__profile">
                            <dl>
                                <dt class="personal">
                                    <span class="name">
                                        石塚 良和&nbsp;&nbsp;
                                    </span>
                                    <span>
                                        1985年 茨城県生まれ
                                    </span>
                                </dt>
                                <dd class="introduction">
                                IT業界への転職を志し、毎日学習に励んでいます。 
                                <br>WordPressが得意です。
                                案件実績あり。
                                <br> WordPressプラグイン開発実績あり。  
                                <br>エンジニアリングスクールRaiseTech受講生 
                                <br>(WordPressコース 2022.04月生)
                                </dd>
                            </dl>

                            <!-- SNSへのリンク -->
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
                                        <img class="c-icon__sns" src="<?php echo esc_url( get_theme_file_uri( '/images/sns/b_logo.webp' )); ?>" alt="アイコン">
                                    </a>
                                </li>
                            </ul>
                        </dd>
                    </dl>
                </div>

                <div class="p-profile__img">
                    <img src="<?php echo esc_url( get_theme_file_uri( '/images/top/profile.webp' )); ?>" alt="">
                </div>
            </section>
            <!-- プロフィールここまで -->

            <!-- スキル -->
            <section class="p-skill fade" id="skill">
                <div class="p-skill__title">
                    <h3 class="c-title__headline c-text__underline c-text__undertext">
                        SKILL
                    </h3>
                </div>
                <div class="p-skill__outer">
                    <ul class="p-skill__inner">
                        <li class="p-skill__list">
                            <i class="fa-brands fa-html5 html5"></i>
                            <p class="c-text__skill">
                                HTMLの基本的なタグや構文を習得し、シンプルなWebページを作成することができます。
                            <br>
                                エディタはVSCodeを使用しています。
                            </p>
                        </li>
                        <li class="p-skill__list">
                            <i class="fa-brands fa-css3-alt fa-6x css3"></i>
                            <p class="c-text__skill">
                                セレクター、プロパティ、値などの基本的なコンセプトを理解し、それを活用してシンプルなWebページのデザインやスタイリングを行うことができます。
                            </p>
                        </li>
                        <li class="p-skill__list">
                            <i class="fa-brands fa-sass fa-6x sass"></i>
                            <p class="c-text__skill">
                                Sassの学習に取り組み、変数の利用やネスト、mixinといったSass固有の機能を理解し、これによってスタイルシートの記述をより効率的かつ読みやすくしています。
                            <br>
                                また、CSS設計も学習し、FLOCSSの記述も出来ます。
                            <br>
                                このサイトもFLOCSSで構成しています。
                            </p>
                        </li>
                        <li class="p-skill__list">
                            <i class="fa-brands fa-square-js fa-6x js"></i>
                            <p class="c-text__skill">
                                jQueryのセレクター、イベントハンドリング、アニメーション効果などを理解し、Webページに動的な要素やエフェクトを追加することができます。
                            <br>
                                また、JavaScriptの基本的なイベント発火、DOM操作などが出来ます。
                            </p>
                        </li>
                        <li class="p-skill__list">
                            <i class="fa-brands fa-wordpress fa-6x wp"></i>
                            <p class="c-text__skill">
                                デザインカンプからの静的コーディングをした後にWordPress化をしてレンタルサーバーにデプロイまで出来ます。
                            <br>
                                また、カスタムフィールド、カスタム投稿、カスタムタクソノミー、OGP設定(実装)、ブラウザチェック、テーマチェック、関連記事表示機能（プラグイン有り、無し両方の経験有り）
                            <br>
                                Contact Form 7を使用したお問い合わせページの作成。
                            <br>
                                上記が実装した経験があります。
                            </p>
                        </li>
                        <li class="p-skill__list">
                            <i class="fa-brands fa-figma fa-6x figma"></i>
                            <p class="c-text__skill">
                                figma自体は使えませんが、デザインカンプの見方、各プロパティの確認や画像の書き出しが出来ます。
                            </p>
                        </li>

                    </ul>
                </div>

            </section>
            <!-- スキルここまで -->

            <!-- 制作実績 -->
            <section class="p-works fade" id="works">
                <div class="p-works__title">
                    <h3 class="c-title__headline c-text__underline c-text__undertext">
                        WORKS
                    </h3>
                </div>

            <?php get_template_part( "components/card_works" ); ?>

            </section>
            <!-- 制作実績ここまで -->
            
            <!-- お問い合わせ -->
            <section class="p-contact fade" id="contact">
                <div class="p-contact__title">
                    <h3 class="c-title__headline c-text__underline c-text__undertext">
                        CONTACT
                    </h3>
                </div>
                <div class="p-contact__inner">
                    <p class="c-text__contact">
                        ここまでポートフォリオWebサイトをご覧頂きありがとうございます。
                        <br>
                        ご連絡は下記のリンクよりお問い合わせページにてお願いいたします。
                    </p>
                    <button class="p-contact__link">
                        <a href="//yosu-site.com/contact">
                            <img class="c-icon__contact" src="<?php echo esc_url( get_theme_file_uri( '/images/top/mail2.png' )); ?>" alt="お問い合わせリンクボタン">
                            <!-- <span>お問い合わせリンクボタン</span> -->
                        </a>
                    </button>
                </div>
            </section>
            <!-- お問い合わせここまで -->
        
        </article>
    </main>
<?php get_footer(); ?>
