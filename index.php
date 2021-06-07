<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Sachi_web" />
    <meta property="og:url" content="https://sachiweb.com/" />
    <meta property="og:title" content="Sachi Nishiie's Portfolio" />
    <meta property="og:description" content="フリーでWebサイトを制作している西家さちのポートフォリオサイトです。お仕事のご依頼・ご連絡もお待ちしています！" />
    <meta property="og:image" content="https://sachiweb.com/img/main_visual.png" />

  
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" href="<?= get_theme_file_uri() ?>/img/usagi_icon.png">
    <title>Sachi Nishiie's Portfolio|フリーでWebサイトを制作している西家さちのポートフォリオサイト</title>
    <!-- original -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- 最初に出る画像 -->
    <!-- <div id="first-view">
      <div id="first-view-comment">Sachi's portfolio site</s></div>
    </div> -->

    <header>
        <div class="navbar">
            <div class="navbar__contents">
                <ul class="navbar__list">
                    <li class="navbar__item">
                        <a class="navbar__link" href="#Home">Home</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#About">About</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#Service">Service</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#Work">Work</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#Skill">Skill</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="drawer_icon">
            <div class="drawer_icon_bars">
                <div class="drawer_icon_bar1"></div>
                <div class="drawer_icon_bar2"></div>
                <div class="drawer_icon_bar3"></div>
            </div>
        </div>

        <div class="drawer_content">
            <div class="drawer_content_items ">
                <div class="drawer_content_item"><a href="#Home">Home</a></div>
                <div class="drawer_content_item"><a href="#About">About</a></div>
                <div class="drawer_content_item"><a href="#Service">Service</a></div>
                <div class="drawer_content_item"><a href="#Work">Work</a></div>
                <div class="drawer_content_item"><a href="#Skill">Skill</a></div>
                <div class="drawer_content_item"><a href="#Contact">Contact</a></div>
            </div>
        </div>


        <div class="drawer_background"></div>





    </header>

    <section class="top " id="Home">
        <!-- トップイメージ  -->
        <div class="top-image">

            <div id="top-word1" class="top-image__message-1 gray-shadow d-none">
                <p>つながりが、つくる。</p>
            </div>

            <div id="top-word2" class="top-image__message-2 gray-shadow d-none">
                <p>つながりを、つくる。</p>
            </div>

            <div id="top-word3" class="top-image__message-3 gray-shadow d-none">
                <p>つながりが、人の幸せをつくる。<br>明日がもっと楽しみになる。<br>
                    つながるWebサイトを、お作りします。</p>
            </div>
        </div>
        <!-- /.トップイメージ -->
        <!-- <img src="<?= get_theme_file_uri() ?>/img/main_visual.png" alt="つながりが、つくる。つながりを、つくる。"> -->
    </section>

    <div class="scallop-down"></div>

    <section class="about section" id="About">
        <div class="about__contents ">
            <h2 class="about__contents__title section_title wow fadeInUp">About</h2>
            <h5 class="about__contents__subTitle section_subTitle wow fadeInUp">- ご挨拶 -</h5>
            <div class="about__contents__me row container-fluid">
                <div class="about__contents__me__left fadeInLeft wow col-md-6 col-12">
                    <div class="about__contents__me__left__bg"></div>
                    <div class="about__contents__img">
                        <img src="<?= get_theme_file_uri() ?>/img/about2.jpg" alt="作者の画像">
                    </div>
                    <div class="about__contents__name">
                        <p>西家 さち / Nishiie Sachi</p>
                    </div>

                 
                        <!-- <div　class="about__contents__name--more"> -->
                        <!-- <p>もっと見る</p>
                            <div class="about__contents__name--more--hide">
                        <p><span>●</span>1993年千葉県生まれ。
                            <br>好きなものは読書、チョコレート、ワイン。実はピアノ、声楽が得意です。
                        </p>
                        <p><span>●</span>国立大学卒業後、小学校教員として5年間働く。
                            <br>"子どもたちの可能性、生き方の選択肢が広げられる先生"を目標に、試行錯誤を重ねながら奮闘の５年。
                            "自己肯定感・心の安全基地があるからこそ、人は挑戦できる"という考え方をベースに、子どもたちの姿やその奥にある思いに寄り添う教育を目指した。
                        </p>
                        <p><span>●</span>2018年夏：憧れだったフィンランドへ初上陸。
                            <br>世界の広さや価値観・生き方の多様性を目の当たりにする。自分の生き方や考え方と向き合い、問い直す決意をする。
                        </p>
                        <p><span>●</span>2021年4月：Web・ITから広がる"無限の可能性"に衝撃を受け、フリーランスのWeb制作に転身。
                            <br>教員時代に培った、"思いに寄り添う力"、"0から生み出す力"を生かして活動しています。

                            <br>人と人がつながる”ひと押し”になるようなWebサイトを作るため、日夜精進の毎日です。
                        </p> -->
                        <!-- </div> -->
                        <!-- </div> -->
                   
                </div>
                <div class="about__contents__me__right wow fadeInRight col-md-6 col-12">
                    <div class="about__contents__me__right__text">
                        <span>”つながりが、人の幸せをつくる”を信条に、</span>
                        <span>お客様の伝えたい思いやサービスの魅力が余すところ無く届くよう、</span>
                        <span>心を込めてWebサイトをお作りします。</span>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
    </section>



    <div class="scallop-up"></div>
    <section class="Service section inner" id="Service">
        <h2 class="service_title section_title wow fadeInUp">Service</h2>
        <h5 class="service_sub_title section_subTitle wow fadeInUp">- 内容 -</h5>
        <div class="container inner">
            <div class="service_contents  wow fadeInLeft row">
                <div class="service_contents_img col-md-2">
                    <img src="<?= get_theme_file_uri() ?>/img/service_web4.png" alt="PCとスマートフォンのイラスト">
                </div>
                <div class="service_contents_items col-md-4">
                    <p><span>●</span>コーディング代行</p>
                    <p><span>●</span>ランディングページ制作</p>
                    <p><span>●</span>ホームページ制作</p>
                </div>

                <div class="service_contents_text col-md-6">
                    <p>ランディングページやコーポレーションサイト、ブログ等のデザイン・イメージをお持ちのお客様、目的に合わせてデザイン通りにコーディングを行います。レスポンシブ対応もおまかせください。また、コードの修正などにも対応しています。
                    </p>
                </div>

            </div>
            <div class="service_contents  wow fadeInRight row">
                <div class="service_contents_img col-md-2">
                    <img src="<?= get_theme_file_uri() ?>/img/service_design4.png" alt="筆とペンのイラスト">
                </div>
                <div class="service_contents_items col-md-4">
                    <p><span>●</span>イメージ図の構想・設計</p>
                    <p><span>●</span>デザイン</p>
                    <p><span>●</span>ライティング</p>
                </div>
                <div class="service_contents_text col-md-6">
                    <p>デザインがお決まりでないお客様、ご安心ください。丁寧なヒアリングで、目的やイメージをなどを形にしていくステップから、一緒に行います。大まかなレイアウトなどを決め、デザインの提案をいたします。掲載したい文章がお決まりでないお客様、熱い想いを文字に起こすお手伝いもいたします。</p>
                </div>
            </div>
            <a href="#Contact">
                <div class="service_attention wow flipInX">
                    正式なお見積もりは、ヒアリング後にご相談させていただきます。
                    <br>一般的な制作会社様よりも圧倒的に低価格で提供いたしますので、まずはお気軽にお問い合わせください！
                </div>
            </a>
        </div>
    </section>
    <div class="scallop-down"></div>

    <section class="work section inner" id="Work">
        <h2 class="work__title section_title wow fadeInUp">Work</h2>
        <h5 class="work__subTitle section_subTitle wow fadeInUp">- 制作物 -</h5>
        <div class="work__contents container">
            <ul class="work__contents__itemList row wow fadeInUp">

                <li class="work__contents__itemList__item col-md-6 col-10">
                    <img class="work__contents__itemList__img" src="<?= get_theme_file_uri() ?>/img/portfolio-work1.png" alt="制作物の写真">
                    <div class="work__contents__itemList__item__mask">
                        <dl class="work__contents__itemList__text">
                            <dt>
                                < 概要>
                            </dt>
                            <dd>西家さちのポートフォリオサイトです。お仕事のお問い合わせは、ぜひこちらからどうぞ！</dd>
                            <dt>
                                < 使用言語など>
                            </dt>
                            <dd>HTML/CSS・jQuery・canva<br>
                                メインバナーアニメーション・お問い合わせフォーム等</dd>
                        </dl>
                        <div class="work__contents__itemList__item__btn">
                            <a href="https://sachiweb.com/" target="_blank">to HOMEPAGE</a>
                        </div>
                    </div>
                </li>

                <li class="work__contents__itemList__item col-md-6 col-10 align-self-center">
                    <img src="<?= get_theme_file_uri() ?>/img/portfolio-work2.png" alt="制作物の写真">
                    <div class="work__contents__itemList__item__mask">
                        <dl class="work__contents__itemList__item__text">
                            <dt>
                                < 概要>
                            </dt>
                            <dd>大阪府のブライダル専門の演出・装飾を行う会社「エルランド」様のLPコーディングを行いました。</dd>
                            <dt>
                                < 使用言語など>
                            </dt>
                            <dd>HTML/CSS・jQuery・Wordpressオリジナルテーマ<br>
                                スワイパー・色遷移アニメーション等</dd>
                        </dl>
                        <div class="work__contents__itemList__item__btn">
                            <a href="https://www.elleland.co.jp/photowedding" target="_blank">to HOMEPAGE</a>
                        </div>
                    </div>

                </li>

                <li class="work__contents__itemList__item col-md-6 col-10 align-self-center">
                    <img src="<?= get_theme_file_uri() ?>/img/portfolio-work3.png" alt="制作物の写真">
                    <div class="work__contents__itemList__item__mask">
                        <dl class="work__contents__itemList__item__text">
                            <dt>
                                < 概要>
                            </dt>
                            <dd>大阪府のデザイン会社「HS DESIGN & CO.」様のコーポレートサイトのコーディングを行いました。</dd>
                            <dt>
                                < 使用言語など>
                            </dt>
                            <dd>HTML/CSS・jQuery・Wordpressオリジナルテーマ<br>
                                お問い合わせフォーム・ファーストビューアニメーション・メインバナーアニメーション・Youtube,SoundCloud埋め込み等</dd>
                        </dl>
                        <div class="work__contents__itemList__item__btn">
                            <a href="https://hs-design-and-co.com/" target="_blank">to HOMEPAGE</a>
                        </div>
                    </div>

                </li>

                <li class="work__contents__itemList__item work__contents__itemList__item--noItem col-md-6 col-10 align-self-center">
                    <img class="img-1" src="<?= get_theme_file_uri() ?>/img/portfolio-work-noItem.png" alt="制作物の写真">
                </li>



            </ul>

        </div>
    </section>

    <div class="scallop-up"></div>
    <section class="skill section inner" id="Skill">
        <div class="container">
            <h2 class="skill_title section_title wow fadeInUp">Skill</h2>
            <h5 class="about_sub_title section_subTitle wow fadeInUp">- ご提供できるスキル -</h5>
            <div class="row">
                <div class="skill-list col-md-3 col-9  wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="skill_list_title">言語</h3>
                    <ul>
                        <li class="skill_list_item">HTML<i class="fab fa-html5 fa-lg"></i>：★★★★★</li>
                        <li class="skill_list_item">CSS<i class="fab fa-css3-alt fa-lg"></i>：★★★★☆</li>
                        <li class="skill_list_item">JavaScript：★★★☆☆</li>
                    </ul>
                </div>
                <div class="skill-list col-md-3 col-9  wow fadeInUp" data-wow-delay=".5s">
                    <h3 class="skill_list_title">フレームワーク</h3>
                    <ul>
                        <li class="skill_list_item"><i class="fab fa-bootstrap"></i>Bootstrap：★★★★☆</li>
                        <li class="skill_list_item">jQuery：★★★☆☆</li>
                    </ul>
                </div>
                <div class="skill-list col-md-3 col-9  wow fadeInUp" data-wow-delay=".8s">
                    <h3 class="skill_list_title">Webデザイン</h3>
                    <ul>
                        <li class="skill_list_item">XD：★★★☆☆</li>

                    </ul>
                </div>
            </div>
    </section>
    <div class="scallop-down"></div>

    <section class="contact  section inner" id="Contact">
        <div class="container">
            <h2 class="Skill_title section_title wow fadeInUp">Contact</h2>
            <h5 class="about_sub_title section_subTitle wow fadeInUp">- お問い合わせはこちら -</h5>
            <div class="row wow fadeInUp">
                <div class="col-md-6 col-12 contact-message">
                    <p class="text-center mb-5">
                        ご質問、ご意見、お仕事のご依頼等<br>
                        お気軽にお寄せください♪
                    </p>
                    <img src="<?= get_theme_file_uri() ?>/img/valentine_usagi.jpg" alt="うさぎのイラスト" class="contact-img wow bounce" data-wow-iteration="3">
                </div>
                <div class="col-md-6 col-12">
                    <div class="form">
                        <?= do_shortcode('[contact-form-7 id="6" title="コンタクトフォーム 1"]') ?>
                   
                        <!-- <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfFnJe6NsqlHFmZZB9Dawz3KeL2l_FKXGxWcCRrdNke-Mkr9A/formResponse" method="post">
                            <div class="form-list">
                                <input type="text" name="entry.2005620554" class="form-item" placeholder="お名前">
                                <input type="email" name="entry.1045781291" class="form-item" placeholder="メールアドレス">
                                <input type="text" name="entry.206256281" class="form-item" placeholder="タイトル">
                                <textarea name="entry.839337160" rows="5" cols="30" class="form-item" placeholder="メッセージ"></textarea>
                                <button type="submit" name="submit" class="btn btn-submit">送 信</button>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="scallop-up"></div>
    <footer>
        <div class="conteiner">
            <p>2021 Sachi All Right Reserved</p>
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/script.js"></script>
     <script>new WOW().init();</script> -->

    <?php wp_footer(); ?>
</body>

</html>