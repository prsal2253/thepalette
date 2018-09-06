<?php include 'page_item/head.php';?>
    <style>
        .index02 {
            width: 100%;
        }

        /* video */

        .index02_video {
            margin-top: 100px;
            width: 100%;
            height: 500px;
            overflow: hidden;
            background-color: #999;
        }

        .index02_video_txt {
            padding: 410px 0 0 50px; 
        }

        .index02_video figure {
            width: 50px;
            height: 50px;
            background: url(images/icon/play.svg) no-repeat center center;
            background-size: cover;
            margin-right: 20px;
            display: inline-block;
        }

        .index02_video h2 {
            font-family: 'Playfair Display';
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 0.04em;
            color: #fff;
            display: inline-block;
        }

        /* about */

        .index02_about {
            width: 100%;
        }

        .index02_about_topic {
            margin: 120px 0 50px 0;
        }

        .index02_about_topic h2 {
            font-family: 'SourceHanSerifTC-Bold';
            font-size: 30px;
            color: #000;
            letter-spacing: 0.08em;
        }

        .index02_about_content {
            width: 100%;
            justify-content: space-between;
            align-items: flex-start;
        }

        .about_con01,
        .about_con02,
        .about_con03 {
            width: 30%;
        }

        .index02_about_content p {
            font-family: 'Noto Sans TC';
            font-size: 15px;
            letter-spacing: 0.1em;
            color: #000;
            font-weight: 300;
            line-height: 22px;
        }

         /* swipe */

        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container,
        .swiper-container2 {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            height: 100%;
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-pagination {
            position: relative;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            margin-right: 5px;
        }

        /* index03 */
        #index03 {
            margin: 50px 0 150px 0;
        }
        .index03_left,
        .index03_right {
            flex-direction: column;
            width: 50%;
        }
        .index03_400 {
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .index03_800 {
            width: 100%;
            height: 800px;
            overflow: hidden;
        }

        .index03_deco {
            width: 30px;
            height: 4px;
            background-color: #fff;
            margin-bottom: 15px;
        }

        /* left */
        .left01_swipe img,
        .left04_swipe img,
        .right05_swipe img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .index03_left01 {
            background: url(images/banner/27683687327_6181c92a30_b.jpg) no-repeat center center;
            background-size: cover;
        }

        .index03_left02 {
            background-color: #32465a;
        }

        .index03_left04 {
            background: url(images/banner/27683687327_6181c92a30_b.jpg) no-repeat center center;
            background-size: cover;
        }

        .index03_left05 {
            background-color: #59493f;
        }

        .index03_txt01 {
            width: 70%;
            height: 20%;
            margin: 100px auto 0 auto;
        }

        .index03_txt01_left {
            width: 80%;
            float: left
        }

        .index03_txt01_right {
            width: 11%;
            float: right;
            margin-top: -15px;
        }

        .index03_h2 {
            font-size: 35px;
            font-family: 'Playfair Display';
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.05em;
            line-height: 40px;
        }

        .index03_left02_box {
            height: 80%;
            overflow: hidden;
            transition: all .5s .1s;
        }

        .index03_left02_box img {
            height: 130%;
            object-fit: cover;
            margin: -180px 0 0 -30px;
        }

        .index03_left05_box {
            height: 80%;
            overflow: hidden;
            transition: all .5s .1s;

        }

        .index03_left05_box img {
            height: 120%;
            object-fit: cover;
            margin: -80px 0 0 -110px;
        }

        /* right */

        .index03_right01 {
            transition: all .2s;
            background-color: #d2d2d2;
        }

        .index03_right03 {
            background: url(images/banner/marble_bg.jpg) no-repeat center bottom;
            background-size: cover;
        }

        .index03_right04 {
            background-color: #ad776c;
        }

        .index03_right05 {
            background: url(images/banner/Casa-La-Quinta-Weekend-House-For-Retired-Couple-Mexico-Yellowtrace-05.jpg) no-repeat bottom center;
            background-size: cover;
        }

        .index03_right03_box {
            height: 70%;
            overflow: hidden;
            margin-left: -55px;
            transition: all .5s .1s;

        }

        .index03_right03_box2 {
            height: 70%;
            overflow: hidden;
            margin: -560px 0 0 110px;
        }

        .index03_right03_box_img1 {
            height: 90%;
            object-fit: cover;
            margin: 0;
        }

        .index03_right03_box_img2 {
            height: 110%;
            object-fit: cover;
            margin: 0;
        }

        .index03_right04_box {
            height: 70%;
            overflow: hidden;
            transition: all .5s .1s;

        }

        .index03_right04_box img {
            height: 135%;
            object-fit: cover;
            margin: -50px 0 0 40px;
        }

        .index03_txt02 {
            width: 50%;
            height: 100%;
            margin: -53% 0 0 90px;
        }

        .index03_txt02_top {
            height: 55%;
        }

        .index03_txt02_bottom {
            height: 11%;
            margin-top: -15px;
        }

        .index03_right01_box {
            height: 100%;
            overflow: hidden;
            transition: all .5s .1s;
        }

        .index03_right01_box img {
            height: 125%;
            object-fit: cover;
            margin: 0 0 0 150px;
            transform: rotateY(180deg);
        }

        /* hidden parts */

        .index03_right01:hover, .index03_right03:hover,.index03_right04:hover, .index03_left02:hover, .index03_left05:hover {
            cursor: pointer;
        }

        .right01_hide_bg {
            background-color: #333;
            width: 100%;
            height: 100%;
            margin: -80% 0 0 100%;
        }

        .index03_right01:hover .right01_hide_bg {
            margin-left: 0;
        }

        .index03_txt02_show, .index03_txt01_show, .index03_txt01_right04_show, .index03_txt01_right03_show, .index03_txt01_left05_show{
            transition: all .3s .2s;
        }

        .index03_right01:hover .index03_txt02_show, .index03_left02:hover .index03_txt01_show, .index03_right04:hover .index03_txt01_right04_show, .index03_right03:hover .index03_txt01_right03_show, .index03_left05:hover .index03_txt01_left05_show{
            opacity: 0;
        }

        .txt02_hide {
            float: left;
            margin: -67% 0 0 -50%;
            transition: all .8s;
            opacity: 0;
        }

        .index03_right01:hover .txt02_hide {
            margin-left: 15%;
            opacity: 1;
        }

        .right01_box_hide {
            margin: -67% 0 0 100px;
            transition: all .8s;
            opacity: 0;
        }

        .right01_box_hide img {
            width: 100%;
            margin: -30px 0 0 170px;
        }

        .index03_right01:hover .right01_box_hide {
            margin: -67% 0 0 0;
            opacity: 1;
        }
        .index03_right01:hover .right01_box_show {
            margin-left: 500px;
            opacity: 0;
        }
        /* left02 hidden */
        .left02_hide_bg{
            width: 100%;
            height: 110%;
            background-color: #e29a09;
            margin: -150% 0 0 -100%;
        }
        .index03_left02:hover .left02_hide_bg{
            margin: -150% 0 0 0;
        } 
        .txt01_hide {
            float: left;
            margin: -133% 0 0 -20%;
            transition: all .8s;
            opacity: 0;
        }

        .index03_left02:hover .txt01_hide {
            margin-left: 15%;
            opacity: 1;
            margin: -133% 0 0 15%;
        }
        .left02_box_hide {
            transform: translate(600px,-700px);
            transition: all .8s;
            opacity: 0;
        }

        .left02_box_hide img {
            object-fit: contain;
        }

        .index03_left02:hover .left02_box_hide {
            transform: translate(0px,-680px);
            opacity: 1;
        }
        .index03_left02:hover .left02_box_show {
            margin-left: 500px;
            opacity: 0;
        }
        /* right04 */
        .right04_hide_bg{
            width: 100%;
            height: 110%;
            background-color: #661b1b;
            margin: -270% 0 0 100%;
        }
        .index03_right04:hover .right04_hide_bg{
            margin: -270% 0 0 0;
        }
        .index03_right04:hover .index03_txt01_right04_hide{
            transform: translate(15px,-230px);
            opacity: 1;
        }
        .index03_txt01_right04_hide{
            transition: all .8s;
            transform: translate(550px,-230px);
            opacity: 0;
        }
        .index03_right04:hover .right04_box_hide{
            transform: translate(0px,-1050px);
            opacity: 1;
        }
        .right04_box_hide{
            transform: translate(100px,-1020px);
            transition: all .5s .1s;
            opacity: 0;
        }
        .index03_right04:hover .right04_box_hide img{
            width: 150%;
            height: 150%;
            object-fit: cover;
        }
        .right04_box_hide img{
            width: 140%;
            height: 140%;
        }
        .index03_right04:hover .right04_box_show{
            transform: translateX(600px);
            opacity: 0;
        }

        /* right03 hidden */
        .right03_hide_bg{
            background: url(images/banner/wood_bg.jpg) no-repeat center center;
            background-size: cover;
            width: 100%;
            height: 110%;
            margin: -270% 0 0 100%;
        }
        .index03_right03:hover .right03_hide_bg{
            margin: -270% 0 0 0;
        }
        .index03_right03:hover .right03_box1_show, .index03_right03:hover .right03_box2_show{
            opacity: 0;
            transform: translateY(-300px);
        }
        .right03_box_hide{
            width:130%;
            transform: translate(-450px,-550px);
            opacity: 0;
        }
        .right03_box_hide img{
            width: 90%;
            object-fit: cover;
            margin-top: -50px;
        }
        .index03_right03:hover .right03_box_hide{
            transform: translate(-90px,-550px);
            opacity: 1;
        }
        .index03_txt01_right03_hide{
            transform: translate(0px,-900%);
            opacity: 0;
            transition: all .5s .2s;
        }
        .index03_right03:hover .index03_txt01_right03_hide{
            transform: translate(0px,-820%);
            opacity: 1;
        }

        /* left05 */ 
        .left05_hide_bg{
            background-color: #c2704f; 
            width: 100%;
            height: 110%;
            margin: -300% 0 0 -100%;
        }
        .index03_left05:hover .left05_hide_bg{
            margin: -300% 0 0 0;
        }
        .index03_left05:hover .left05_box_show{
            transform: translateX(-600px);
            opacity: 0;
        }
        .left05_box_hide{
            transform: translate(20px,-270%);
            opacity: 0;
        }
        .left05_box_hide img{
            width:100%;
            object-fit: contain;
            margin-left: 1px;
        }
        .index03_left05:hover .left05_box_hide{
            transform: translate(0px,-182%);
            opacity: 1;
        }
        .index03_txt01_left05_hide{
            transition: all .8s ;
            opacity: 0
        }
        .index03_left05:hover .index03_txt01_left05_hide{
            transform: translateY(-230%);
            opacity: 1;
        }

        @media screen and (max-width:800px){
            .index03{
                flex-direction: column;
            }
            .index03_left, .index03_right{
                width: 100%;
            }
            .index03_400{
                height: 250px;
            }
            .index03_800{
                height: 400px;
            }
            .index03_left03, .index03_right02 {
                display: none;
            }
            .index03_txt01{
                margin-top: 50px;
            }
            .index03_txt01_right{
                width: 15%;
            }
            .index03_h2{
                font-size: 30px;
                line-height: 35px;
            }
            .index03_left02_box, .index03_left05_box{
                height: auto;
                width: 100%;
            }
            .index03_left02_box img{
                width: 130%;
                margin: -25% 0 0 -5%;
            }
            .index03_left05_box img{
                width: 110%;
                margin: -12% 0 0 0;
            }
            .index03_txt02{
                margin-left: 14%
            }
            .index03_right03_box2{
                height: 80%;
                margin: -320px 0 0 70px;
            }
            .index03_right03_box{
                height: 80%;
                margin: 0 0 0 -4%;
            }
            
        }
        /* 文章 */

        #product_detail_05 {
            background-color: #000;
            height: 65vh;
            padding-top: 1px;
        }

        .product_detail_05 {
            margin: 80px auto;
            height: 60vh;
            flex-direction: column;
        }

        .product_detail_05_topic {
            margin-bottom: 30px;
        }

        .product_detail_05_h2 {
            font-size: 25px;
            letter-spacing: 0.01em;
            font-weight: 700;
            line-height: 35px;
            color: #fff;
            font-family: 'Playfair Display';
        }

        .product_detail_05_h3 {
            font-size: 20px;
            letter-spacing: 0.1em;
            line-height: 20px;
            color: #fff;
            font-family: 'SourceHanSerifTC-SemiBold';
        }

        .product_detail_05_article {
            justify-content: space-between;
            width: 100%;
            height: 80%;
        }

        .product_detail_05_article_01 {
            width: 48%;
            height: 80%;
            background: url(images/banner/122089_6.jpg) no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .product_detail_05_article_02 {
            width: 48%;
            height: 80%;
            background: url(images/banner/gf_1642_bm_2226_sc_1740_mood_rgb_high.jpg) no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .product_detail_05_article_box {
            width: 90%;
            height: 35%;
            background-color: #fff;
            position: absolute;
            bottom: 20px;
            left: 5%;
        }

        .product_detail_05_article_box:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .article_txt {
            width: 90%;
            height: 100%;
            margin: auto;
            flex-direction: column;
            justify-content: space-around;
            align-items: flex-start;
        }

        .article_date {
            color: #000;
            font-family: 'Roboto';
            font-size: 12px;
            font-weight: 300;
            letter-spacing: 0.05em;
        }

        .article_topic {
            font-size: 16px;
            letter-spacing: 0.1em;
            line-height: 23px;
            color: #000;
            font-family: 'SourceHanSerifTC-Bold';
        }

        .product_detail_05_article a {
            text-decoration: none;
        }

        .article_date_deco {
            width: 18px;
            height: 3px;
            background-color: #333;
            margin: 3px 0;
        }
    </style>
</head>

<body>
    <!-- banner 輪播 -->
    <section id="ps-container" class="ps-container">
                <div class="sale_box">
                    <div><a href="#">
                        <h3>「家具滿額贈」</h3>
                        <h6>活動開跑即日起至9/16</h6>
                        <p>活動開跑即日即是起至9/16, 全館商品消費滿萬即贈設計師吊燈一組。</p>
                    </a></div>
                </div>
				<div class="ps-slidewrapper">
			
                        <div class="ps-slides">
                                <div style="background-image:url(../images/article/27683649797_babbcb85cc_b.jpg);"></div>
                                <div style="background-image:url(../images/about/28680117748_367563dcee_h.jpg)"></div>
                                <div style="background-image:url(../images/article/40745881410_ab590a502f_k.jpg);"></div>
                                <div style="background-image:url(../images/banner/banner01.jpg);"></div>
                                <div style="background-image:url(../images/banner/banner02.jpg);"></div>
                                <div style="background-image:url(../images/banner/banner03.jpg);"></div>
                                <div style="background-image:url(../images/banner/40745889000_96ba023acb_k.jpg);"></div>
                                <div style="background-image:url(../images/article/40745881410_ab590a502f_k.jpg);"></div>
                                <div style="background-image:url(../images/banner/27683687327_6181c92a30_b.jpg);"></div>
                        </div>
                    </div>
            
            <div class="ps-numberwrapper">	
                    <div class="ps-number"><span class="">01</span><span>/ 04</span></div>
                    <div class="ps-number"><span class="">02</span><span>/ 04</span></div>
                    <div class="ps-number"><span class="">03</span><span>/ 04</span></div> 
                    <div class="ps-number"><span class="">01</span><span>/ 04</span></div>
                    <div class="ps-number"><span class="">02</span><span>/ 04</span></div>
                    <div class="ps-number"><span class="">03</span><span>/ 04</span></div> 
                    <div class="ps-number" style="background-color: #d89d54"><span class="">04</span><span>/ 04</span></div>
                    <div class="ps-number" style="background-color: #568080"><span class="">03</span><span>/ 04</span></div>
                    <div class="ps-number" style="background-color: #507982"><span class="">02</span><span>/ 04</span></div>    
            </div>
			<div class="ps-contentwrapper">
			
				<div class="ps-content">
                    <h2>Red<br/>Orange<br/>Pink</h2>
                    <p>Better Living Through Color</p>
                    <span style="font-family: 'Noto Sans TC';font-size: 15px;line-height: 30px;font-weight: 300;color: #ddbcb3;letter-spacing: .05em;">靈感無處不在。重要的是接受。我們試圖受到各種刺激的影響......總是在工作時間或空閒時間尋找靈感，始終睜大眼睛。這是我們的心態。</span>
                </div>
				<div class="ps-content" style="background-color: #568080">
                    
                </div>
                <div class="ps-content"><h2>bule</h2></div>
                <div class="ps-content"><h2>red</h2></div>
				<div class="ps-content"><h2>pink</h2></div>
                <div class="ps-content"><h2>bule</h2></div>
                <div class="ps-content" style="background-color: #d89d54">
                    <h2>Sunshine<br/>Yellow</h2>
                    <p style="color: rgb(235, 227, 192)">Better Living Through Color</p>
                    <span style="font-family: 'Noto Sans TC';font-size: 15px;line-height: 30px;font-weight: 300;color: rgb(235, 227, 192);letter-spacing: .05em;">我們所有項目的開發旨在實現簡單的技術和正式解決方案，使對象具有可用性和易讀性。通過這個過程，我們定義了我們的想法，重新詮釋傳統或創新材料，使溫柔的生活夥伴。</span>
                </div>
				<div class="ps-content" style="background-color: #407060">
                    <h2>Peaceful<br/>Green</h2>
                    <p style="color: #cfc587">Better Living Through Color</p>
                    <span style="font-family: 'Noto Sans TC';font-size: 15px;line-height: 30px;font-weight: 300;color: #d3ceb0;letter-spacing: .05em;">偉大的設計是，當看到一個物體時，第一個想法是：它只能是這樣......並且在觀察他更久之後：是的，沒有辦法改進它，它是完美的！</span>
                </div>
				<div class="ps-content" style="background-color: #2e4553">
                    <h2>Calming<br/>Blue</h2>
                    <p style="color: #7095a1">Better Living Through Color</p>
                    <span style="font-family: 'Noto Sans TC';font-size: 15px;line-height: 30px;font-weight: 300;color: rgb(136, 163, 163);letter-spacing: .05em;">偉大的設計是，當看到一個物體時，第一個想法是：它只能是這樣......並且在觀察他更久之後：是的，沒有辦法改進它，它是完美的！</span>
                </div>
				
			</div><!-- /ps-contentwrapper -->
			
			
			<div class="ps-slidewrapper2">	
					<a href="#" class="ps-prev" ></a>
					<a href="#" class="ps-next" ></a>
			</div><!-- /ps-slidewrapper -->
			
		</section><!-- /ps-container -->
    <!-- 頁面ID -->
    <section id="index02">

         <!-- top -->
        <div class="index_top">
            <?php include 'page_item/header.php';?> 
        </div>

        <!-- main -->
        <div class="index_conten index02">
            <div class="index02_video">
                <div class="index02_video_txt">
                    <figure></figure>
                    <h2>Better Living Through Color</h2>
                </div>
                <video src="" loop></video>
            </div>
            <div class="index02_about">
                <div class="index02_about_topic">
                    <h2>色彩的選擇題
                        <span style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 0.05em;">&nbsp;&nbsp;Choose Your Colors Wisely</span>
                    </h2>
                </div>
                <div class="index02_about_content flex">
                    <div class="about_con01">
                        <p>The Palette創辦於2005年，從事家具選物店近10年。因為對家具的熱愛，在此建立了The Palette品牌。希望透過高色彩的交錯設計、卓越的工藝與獨特的風格，打造新生活美學。</p>
                    </div>
                    <div class="about_con02">
                        <p>我們力求家具設計精美，注重設計以及家俱的實用性。生活是一種藝術，品味、 美感是其中的色彩、線條。您的幸福感受，是我們的堅持。</p>
                    </div>
                    <div class="about_con03">
                        <p>如果你喜歡線條明快、有色彩性的居家佈置。我們提供的不只是一件家具，而是您家中最善解人意的伴侶。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="index03">
        <div class="index_conten_flex index03">
            <div class="index03_left flex">
                <div class="index03_left01 index03_400">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="left01_swipe swiper-slide">
                                    <img src="images/banner/27683687327_6181c92a30_b.jpg" alt="商品名稱">
                                </div>
                                <div class="left01_swipe swiper-slide">
                                    <img src="images/banner/27855179879_0f2427679a_b.jpg" alt="商品名稱">
                                </div>
                                <div class="left01_swipe swiper-slide">
                                    <img src="images/banner/28680114308_27d5d126d9_b.jpg" alt="商品名稱">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="index03_left02 index03_800">
                    <div class="index03_txt01 index03_txt01_show">
                        <div class="index03_txt01_left">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Royal
                                <br>Blue</h2>
                        </div>
                        <div class="index03_txt01_right">
                            <h2 class="index03_h2">03</h2>
                        </div>
                    </div>
                    <div class="index03_left02_box left02_box_show">
                        <img src="images/H-blue-chair-14.png" alt="">
                    </div>
                    <!-- hidden parts -->
                    <div class="index03_txt01 txt01_hide">
                        <div class="index03_txt01_left">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Sunshine
                                <br>Yellow</h2>
                        </div>
                        <div class="index03_txt01_right">
                            <h2 class="index03_h2">04</h2>
                        </div>
                    </div>
                    <div class="left02_hide_bg transition"></div>
                    <div class="index03_left02_box left02_box_hide">
                        <img src="images/H-yellow-chair-07.png" alt="">
                    </div>
                </div>
                <div class="index03_left03 index03_400"></div>
                <div class="index03_left04 index03_400">
                    <!-- Swiper -->
                    <div class="swiper-container2">
                            <div class="swiper-wrapper">
                                <div class="left04_swipe swiper-slide">
                                    <img src="images/banner/40745889000_96ba023acb_k.jpg" alt="商品名稱">
                                </div>
                                <div class="left04_swipe swiper-slide">
                                    <img src="images/banner/fogia_02.jpg" alt="商品名稱">
                                </div>
                                <div class="left04_swipe swiper-slide">
                                    <img src="images/banner/GRANITI-FIANDRE-Project-by-studio-TERZOPIANO-image-3d-rendering.jpg" alt="商品名稱">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="index03_left05 index03_800">
                    <div class="index03_txt01 index03_txt01_left05_show">
                        <div class="index03_txt01_left">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Earth
                                <br>Tone</h2>
                        </div>
                        <div class="index03_txt01_right">
                            <h2 class="index03_h2">09</h2>
                        </div>
                    </div>
                    <div class="index03_left05_box left05_box_show transition">
                        <img src="images/H-blue-chair-11-side.png" alt="">
                    </div>
                    <!-- hidden parts -->
                    <div class="index03_txt01 index03_txt01_left05_hide">
                        <div class="index03_txt01_left">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Energetic
                                <br>Orange</h2>
                        </div>
                        <div class="index03_txt01_right">
                            <h2 class="index03_h2">10</h2>
                        </div>
                    </div>
                    <div class="index03_left05_box left05_box_hide">
                        <img src="images/H-light-09.png" alt="">
                    </div>
                    <div class="left05_hide_bg transition"></div>

                </div>
            </div>
            <div class="index03_right flex">
                <div class="index03_right01 index03_400">

                    <div class="index03_right01_box right01_box_show">
                        <img src="images/H-white-chair-03.png" alt="">
                    </div>
                    <div class="index03_txt02 index03_txt02_show">
                        <div class="index03_txt02_top">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Pure
                                <br>White</h2>
                        </div>
                        <div class="index03_txt02_bottom">
                            <h2 class="index03_h2">01</h2>
                        </div>
                    </div>
                    <!-- right01 hidden parts -->
                    <div class="index03_txt02 txt02_hide">
                        <div class="index03_txt02_top">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Shaded
                                <br>Gray</h2>
                        </div>
                        <div class="index03_txt02_bottom">
                            <h2 class="index03_h2">02</h2>
                        </div>
                    </div>
                    <div class="right01_hide_bg transition"></div>
                    <div class="index03_right01_box right01_box_hide">
                        <img src="images/H-grey-chair-07.png" alt="">
                    </div>
                </div>
                <div class="index03_right02 index03_400"></div>
                <div class="index03_right03 index03_800">
                    <div class="index03_right03_box right03_box1_show">
                        <img src="images/H-light-06.png" alt="" class="index03_right03_box_img1">
                    </div>
                    <div class="index03_right03_box2 right03_box2_show transition">
                        <img src="images/H-light-07.png" alt="" class="index03_right03_box_img2">
                    </div>
                    <div class="index03_txt01 index03_txt01_right03_show" style="margin-top: 70px">
                        <div class="index03_txt01_left">
                            <div class="index03_deco" style="background-color: #000"></div>
                            <h2 class="index03_h2" style="color: #000">Noble
                                <br>Marble</h2>
                        </div>
                        <div class="index03_txt01_right">
                            <h2 class="index03_h2" style="color: #000">05</h2>
                        </div>
                    </div>
                    <!-- right03 hidden -->
                     <div class="index03_right03_box right03_box_hide transition">
                        <img src="images/H-black-table-01.png" alt="" class="index03_right03_box_img1">
                    </div>
                    <div class="index03_txt01 index03_txt01_right03_hide" style="margin-top: 70px">
                        <div class="index03_txt01_left">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Bald
                                <br>Texture</h2>
                        </div>
                        <div class="index03_txt01_right">
                            <h2 class="index03_h2">06</h2>
                        </div>
                    </div>
                    <div class="right03_hide_bg transition"></div>
                </div>
                <div class="index03_right04 index03_800">
                    <div class="index03_right04_box right04_box_show">
                        <img src="images/H-pink-chair-08.png" alt="" class="index03_right04_box">
                    </div>
                    <div class="index03_txt01 index03_txt01_right04_show" style="margin-top: 70px">
                        <div class="index03_txt01_left">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Soft
                                <br>Pink</h2>
                        </div>
                        <div class="index03_txt01_right">
                            <h2 class="index03_h2">07</h2>
                        </div>
                    </div>
                    <!-- hidden parts -->
                    <div class="index03_txt01 index03_txt01_right04_hide" style="margin-top: 70px">
                        <div class="index03_txt01_left">
                            <div class="index03_deco"></div>
                            <h2 class="index03_h2">Burgundy
                                <br>Red</h2>
                        </div>
                        <div class="index03_txt01_right">
                            <h2 class="index03_h2">08</h2>
                        </div>
                    </div>
                    <div class="index03_right04_box right04_box_hide">
                        <img src="images/H-red-chair-06.png" alt="" class="index03_right04_box">
                    </div>
                    <div class="right04_hide_bg transition"></div>
                </div>

                <div class="index03_right05 index03_400">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="right05_swipe swiper-slide">
                                    <img src="images/banner/38924674714_98b7dee86b_k.jpg" alt="商品名稱">
                                </div>
                                <div class="right05_swipe swiper-slide">
                                    <img src="images/banner/banner02.jpg" alt="商品名稱">
                                </div>
                                <div class="right05_swipe swiper-slide">
                                    <img src="images/banner/Sancal-Producto-Sofa-Sumo-01.jpg" alt="商品名稱">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 文章 -->
    <div id="product_detail_05">
        <section>
            <div class="index_conten_flex product_detail_05">
                <div class="product_detail_05_topic">
                    <h2 class="product_detail_05_h2">Style Insights</h2>
                    <h3 class="product_detail_05_h3">風格專欄</h3>
                </div>
                <div class="product_detail_05_article flex">
                    <div class="product_detail_05_article_01">
                        <a href="/" class="product_detail_05_article_box transition">
                            <div class="article_txt flex">
                                <div class="article_date">
                                    <div class="article_date_deco"></div>2018 JUN 23</div>
                                <div class="article_topic">七個裝潢提案,將你的公寓改造成宜人的居住空間。</div>
                            </div>
                        </a>
                    </div>
                    <div class="product_detail_05_article_02">
                        <a href="/" class="product_detail_05_article_box transition">
                            <div class="article_txt flex">
                                <div class="article_date">
                                    <div class="article_date_deco"></div>2018 AUG 08</div>
                                <div class="article_topic">七個裝潢提案,將你的公寓改造成宜人的居住空間。</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
     <!-- footer -->
    <div class="index_footer">
        <?php include 'page_item/footer.php';?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
    <script src="js/swiper/js/swiper.min.js"></script> 
    <script>
        $('.slide-nav').on('hover', function (e) {
            e.preventDefault();
            // get current slide
            var current = $('.flex--active').data('slide'),
                // get button data-slide
                next = $(this).data('slide');

            $('.slide-nav').removeClass('active');
            $(this).addClass('active');

            if (current === next) {
                return false;
            } else {
                $('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
                $('.flex--active').addClass('animate--end');
                setTimeout(function () {
                    $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
                    $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
                }, 800);
            }
        });

        // swipe輪播
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
        });

        // menu
        $("nav>.palette_menu,nav>.car_icon").click(function(){
            $(this).toggleClass("menu_active");
        });
    // tab
    $(function(){
    $(".palette_menubox .menubox_l ul li").mouseover(function () {
        $(".palette_menubox .menubox_l ul li").removeClass("selected");
        $(".palette_menubox .menubox_r .ranking_box").removeClass("selected");
        $(this).addClass("selected");
       $("#"+$(this).attr("data-id")).addClass("selected");
    });
    });
     // tab2
     $(function(){
    $(".collectionsbox_l ul li").mouseover(function () {
        $(".collectionsbox_l ul li").removeClass("selected");
        $(".collectionsbox_r .ranking_box").removeClass("selected");
        $(this).addClass("selected");
       $("#"+$(this).attr("data-id")).addClass("selected");
    });
    });
    //go top
    $(function(){
        $(window).scroll(function(){
		if( $(window).scrollTop() > 1620 ){
			$(".go_top").fadeIn(800);
		}else{
			$(".go_top").fadeOut(600);
		};
	})	
        $('.go_top').click(function(){
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ?
        $('html') : $('body')) : $('html,body');
        $body.animate({scrollTop: 0}, 600);
        return false;
        });
    });
    </script>

</body>

</html>