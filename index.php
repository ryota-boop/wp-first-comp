<?php
/*
Template Name: theme-demo
*/
?>
<?php get_header(); ?>
    <main>
        <div class="mainvisual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual .jpg" alt="">
        </div>
        <div class="news">
            <h2 class="section_title">
                <span class="section_topic">NEWS</span>
                <span class="section_topic2">ニュース</span>
            </h2>
            <div class="news_topic">
                <div class="news_topic2">
                    <div class="news_topic2-1">
                        <time datetime="2021.01.01">2021.01.01</time>
                        <span>NEWS</span>
                    </div>
                    <p>タイトルタイトルタイトルタイトル</p>
                </div>
                <div class="news_topic2">
                    <div class="news_topic2-1">
                        <time datetime="2021.01.01">2021.01.01</time>
                        <span>PRESS</span>
                    </div>
                    <p>タイトルタイトルタイトルタイトル</p>
                </div >
                <div class="news_topic2">
                    <div class="news_topic2-1">
                        <time datetime="2021.01.01">2021.01.01</time>
                        <span>NEWS</span>
                    </div>
                    <p>タイトルタイトルタイトルタイトル</p>
                </div>
            </div>
            <?php if(have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="news_topic2">
                        <div class="news_topic2-1">
                            <time datetime="2021.01.01"><?php the_date(); ?></time>
                            <span><?php the_title(); ?></span>
                        </div>
                        <p><?php the_title(); ?></p>
                    </div>
            <?php endwhile; else : ?>
                <p>投稿がありません。</p>
            <?php endif; ?>
        </div>
        
        <div class="about" id="about">
            <div><img src="img/about.jpeg" alt=""></div>
            <div class="about_text">
                <h2 class="section_title">
                    <span class="section_topic">ABOUT</span>
                    <span class="section_topic2">私たちについて</span>
                </h2>
                <p>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
            </div>
        </div>
        <div class="business" id="business">
            <h2 class="section_title">
                <span class="section_topic">BUSINESS</span>
                <span class="section_topic2">事業内容</span>
            </h2>
            <div class="business_content">
                <div class="business_content-1">
                    <div class="business_content-1_left" >
                    <div class="business_list">
                        <p>-&nbsp;&nbsp;Web制作・マーケティング</p>
                        <div><img src="img/business1.jpg" alt=""></div>
                    </div>
                    </div>
                    <div class="business_list">
                        <p>-&nbsp;&nbsp;プロモーション企画・制作</p>
                        <div><img src="img/business2.jpg" alt=""></div>
                    </div>
                </div>
                <div class="business_content-1">
                    <div class="business_content-1_left" >
                    <div class="business_list">
                        <p>-&nbsp;&nbsp;インターネットメディア事業</p>
                        <div><img src="img/business3.jpg" alt=""></div>
                    </div>
                    </div>
                    <div class="business_list">
                        <p>-&nbsp;&nbsp;ソーシャル企画・運営</p>
                        <div><img src="img/business4.jpg" alt=""></div>
                </div>
                </div>

            </div>
        </div>
        <div class="company" id="company">
            <div class="company_info">
                <h2 class="section_title">
                    <span class="section_topic">COMPANY</span>
                    <span class="section_topic2">会社情報</span>
                </h2>
                <div class="company_info-2">
                    <dl>
                        <dt>会社名</dt>
                        <dd>11111111111111111111</dd>
                        <dt>所在地</dt>
                        <dd>11111111111111111111</dd>
                        <dt>代表</dt>
                        <dd>111111</dd>
                        <dt>設立</dt>
                        <dd>111111</dd>
                        <dt>資本金</dt>
                        <dd>1000002111</dd>
                        <dt>事業内容</dt>
                        <dd>11211</dd>
                        <dd>11210</dd>
                        <dd>12121</dd>
                    </dl>
                </div>
                
            </div>
            <div><img src="img/company.jpg" alt=""></div>
        </div>
    </main>
<?php get_footer(); ?>
    



