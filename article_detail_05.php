<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article_detail_05</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product_detail.css">
</head>
<style>
    nav {
        z-index: 99;
    }

    .item_32 figure {
        position: relative;
    }

    .item_32 {
        background: #fff;
    }

    .index_main section {
        padding: 0;
    }

    /* 麵包屑 */

    #article_detail .bread_crumbs {
        position: absolute;
        top: 50px;
        left: 70px;
        z-index: 11;
    }

    #article_detail .bread_crumbs ul li a {
        color: #fff;
    }

    /* 版頭 */

    .artd_box1 {
        width: 100%;
        height: 100vh;
        background: lightblue;
        position: relative;
    }

    .artd_box2 {
        width: 65%;
        height: 175px;
        background: #fff;
        position: absolute;
        bottom: 0;
    }

    .artd_post {
        width: 35%;
        background: #000;
        height: 120px;
        position: absolute;
        bottom: 0;
        margin-left: 65%;
        justify-content: center;
    }

    .artd_prev,
    .artd_next {
        width: 40%;
        height: 100%;
        justify-content: center;
        align-items: center;
    }
    .artd_prev img,
    .artd_next img{
        width: 50px;
    }
    .artd_prev a,
    .artd_next a {
        color: #fff;
        
    }
    .artd_prev a {
        margin: 0 0 4% 5%;
        text-align: right;
    }
    .artd_next a {
        margin: 0 5% 4% 0;
    }

    .artd_box1 figure {
        background: url("images/article/Skærmbillede-2018-07-04-kl.-14.08.04-1024x763.png") no-repeat center bottom;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    /* 文章標題 */

    .artd_title {
        position: relative;
        top: -110px;
    }

    .artd_title h2 {
        font-family: 'SourceHanSerifTC-Bold';
        font-size: 33px;
        letter-spacing: 2px;
        line-height: 50px;
        width: 60%;
    }

    /* 文章內容 */

    .artd_box3 {
        width: 100%;
        height: auto;
        background: #fff;
        padding: 0 0 6% 0;
    }

    .artd_box3 h4 {
        font-size: 20px;
        line-height: 30px;
    }

    .article_date_deco {
        width: 18px;
        height: 3px;
        background-color: #333;
        margin: 3px 0;
    }

    .artd_box3 p {
        margin-top: 3%;
        font-size: 16px;
        line-height: 28px;
    }

    .artd_box3 h3 {
        font-family: 'SourceHanSerifTC-Bold';
        margin: 5% 0 0 0;
        font-size: 30px;
        line-height: 28px;
    }

    .artd_img1 {
        margin: 5% 0;
        width: 100%;
        height: 550px;
        overflow: hidden;

    }

    .artd_img1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 70%;
    }

    .artd_box4 {
        justify-content: space-between;
    }

    .artd_img2,
    .artd_img3 {
        margin: 5% 0;
        width: 48%;
        height: 400px;
        overflow: hidden;
        display: inline-block;
    }

    .artd_img2 img,
    .artd_img3 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    .artd_box5 {
        justify-content: flex-end;
        text-align: end;
    }

    .artd_box5 p {
        margin-top: 1%;
    }

    .product_detail_04 {
        width: 100%;
        flex-direction: column;
        margin: 80px auto;
    }

    /* footer */
    #footer{
            background-color: #000;
        }
        .footer{
            height: 380px;
            flex-direction: column;
            justify-content: space-between; 
        }
       .footer_top, .footer_bottom{
           width: 100%;
       } 
       .footer_top{
           height: 20%;
           margin: 60px 0 20px 0;
       }
       .footer_top h2{
           font-size: 40px;
           letter-spacing: 0.05em;
           font-family: 'Playfair Display';
           font-weight: 700;
           color: #ad776c;
       }
       .footer_bottom{
           height: 80%;
           width: 100%;
           justify-content: space-between;
       }
       .footer_bottom h3{
            font-size: 18px;
           letter-spacing: 0.1em;
           font-family: 'SourceHanSerifTC-SemiBold';
           font-weight: 700;
           color: #fff; 
           margin-bottom: 20px;
       }
       .footer_bottom ul{
           margin: 0 40px 20px 0;
       }
       .footer_bottom_left{
           width: 60%;
           justify-content: flex-start;
       }
       .footer_about li, .footer_contact li, .footer_notice li, .footer_service li{
            font-size: 13px;
           letter-spacing: 0.1em;
           line-height: 25px;
           font-family: 'Noto Sans TC';
           font-weight: 300;
           color: #fff; 
           display: block;
           transition: all .5s;
       }
       .footer_service li:hover, .footer_about li:hover, .footer_notice li:hover{
           color: #ad776c;
        }
        .footer_bottom_right > ul{
            flex-direction: column;
            justify-content: space-between;
            margin: 0;
        }
       .footer_bottom_right figure{
           width: 40px;
           height: 40px;
           margin-right: 10px;
           display: inline-block;
       }
       .footer_bottom_right_icon1{
           background: url(images/icon/facebook.svg) no-repeat center center;
           background-size: cover;
       }
       .footer_bottom_right_icon2{
           background: url(images/icon/instagram.svg) no-repeat center center;
           background-size: cover;
       }
       .footer_bottom_right h4{
           font-size: 12px;
           font-family: 'Roboto';
           color: #fff;
           letter-spacing: 0.01em;
           line-height: 30px;
       }
       .footer_bottom_right_mail{
           width: 100%;
           justify-content: space-between;
           align-items: flex-end;
           margin-top: 40px;
       }
       input[type="text"].footer_bottom_right_txtmail{
           width: 75%;
           height: 40px;
           border: 1px solid #fff;
           background: rgba(255, 255, 255, 0);
           border-radius: 40px;
           padding: 0;
           margin: 0 10px 0 0 ;
           text-align: center;
       }
       .footer_bottom_right_send{
           width: 20%;
           height: 40px;
           background-color: #666;
           border-radius: 40px;
           color: #fff;
           font-size: 14px;
           letter-spacing: 0.1em;
           font-family: 'Noto Sans TC';
           margin-left: 10px;
           border: 1px solid #666;
           padding: 0;
           margin: 0;
           font-weight: 300;
       }
</style>

<body id="article_detail" class="">
    <div class="index_top">
        <header>
            <h1>palette</h1>
        </header>
    <nav>
        <div class="palette_menu">
            <!-- menu icon -->
            <div class="menu_icon">
                <div class="bar transition"></div>
                <div class="bar transition"></div>
                <div class="bar transition"></div>
            </div>
            <!-- search icon -->
            <div class="search_icon transition"></div>
            <!-- menu -->
            <div class="palette_menu_open transition">
                <div class="palette_menubox">
                    <div class="menubox_l">
                        <ul>
                            <li class="selected" data-id="all">
                                <a href="#">
                                    <span>Home</span>首頁</a>
                            </li>
                            <li data-id="all">
                                <a href="#">
                                    <span>About Us</span>關於我們</a>
                            </li>
                            <li data-id="collections">
                                <a href="#">
                                    <span>Collections</span>精選商品</a>
                            </li>
                            <li data-id="articles">
                                <a href="#">
                                    <span>Articles</span>風格專欄</a>
                            </li>
                            <li data-id="all">
                                <a href="#">
                                    <span>Get In Touch</span>聯絡我們</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menubox_r">
                        <!-- all -->
                        <div id="all" class="ranking_box selected">ALLLLLLLLLL</div>
                        <!-- product -->
                        <div class="ranking_box" id="collections">3</div>
                        <!-- articles -->
                        <div class="ranking_box" id="articles">4</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu_list">
            <a href="#">login</a>
            <a href="#">signup</a>
            <a href="#">cart</a>
        </div>
    </nav>

</div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <section class="bread_crumbs bread_crumbs_b">
            <ul>
                <li>
                    <a href="#">home</a>
                </li>
                <li>
                    <a href="article.html">article</a>
                </li>
                <li>
                    <a href="#">article detail</a>
                </li>
            </ul>
        </section>

        <!-- item32 文章詳細-->
        <section class="item_32">
            <div class="artd_box1">
                <figure>
                    <div class="artd_box2"></div>

                    <div class="artd_post flex">
                        <div class="artd_prev flex">
                            <img src="images/icon/arrow_w.svg" alt="">
                            <a href="article_detail_04.html">PREV<br>ARTICLE</a>
                        </div>
                        <div class="artd_next flex">
                            <a href="article_detail_01.html">NEXT<br>ARTICLE</a>
                            <img src="images/icon/arrow2_w.svg" alt="">
                        </div>
                    </div>

                </figure>
            </div>
    </div>

    <div class="index_conten">
        <!-- 文章標題 -->
        <div class="artd_title">
            <h2>7個裝潢提案，改造成宜人居住的美妙空間</h2>
        </div>

        <!-- 文章內容 -->
        <div class="artd_box3">
            <h4>
                <div class="article_date_deco"></div>2018 MAY 18
            </h4>
            <p>隨著房價上漲，越來越多人負擔不起大坪數的房子，這時溫馨小公寓漸漸成為租/買屋主流。然而，面對如此狹小的空間，「居住」這件事彷彿成為某種心理上的負擔，尤其當看見凌亂的屋內景象，又遍尋不著能夠收納雜物的空間，很容易替已經充滿夠多壓力的生活再火上加油。
                <br> 其實，只要了解清楚住屋格局、適當地投資一些多功能家具、好好地打理從地板與天花板等較會被忽略的地方，你也能賦予單調的空間令人身心嚮往的美好氛圍。現在，就讓我們一起來看看有什麼改造小公寓的創意妙招吧！
            </p>
            <h3>01 添入多功能家具</h3>
            <p>多功能家具趨勢流行已久，其美觀與實用兼具的特性，成為狹窄空間的救星。無論是能拆解與重組的辦公桌、可摺疊的沙發床、藏在巨型抽屜裡的輪床，都會是值得投資的商品。</p>

            <div class="artd_img1">
                <img src="images/article/6028_era_lounge_chair_home_2_1.jpg" alt="">
            </div>
            <h3>02 用壁紙裝飾牆面</h3>
            <p>在裝飾住屋的視覺法則中，「壁紙」絕對名列前茅。當地板已被圖樣壁磚、圖騰地毯給佔據，你可以考慮往牆壁上繼續作裝飾。深沉的壁紙顏色能夠帶給人靜謐幽然的現代感，而亮色的壁紙顏色則能提點出空間的明亮感，當陽光透過窗戶灑進來，那幅自然光景更是美不勝收。</p>

            <div class="artd_box4 flex">
                <div class="artd_img2">
                    <img src="images/article/getimage(8).jpg" alt="">
                </div>
                <div class="artd_img3">
                    <img src="images/article/getimage(9).jpg" alt="">
                </div>
            </div>

            <div class="artd_box5 flex">
                <p> Photo: Atelier AM, Ideal Home
                    <br> Cover via : Elle Decor,Ideal Home
                    <br> Cover Art Design : Chara
                </p>
            </div>
        </div>
    </div>
    </section>

    <!-- 推薦商品 -->
    <div id="product_detail_04">
        <section>
            <div class="index_conten_flex product_detail_04">
                <div class="product_detail_04_topic">
                    <h2 class="product_detail_04_h2">Recommendations</h2>
                    <h3 class="product_detail_04_h3">推薦商品</h3>
                </div>
                <div class="product_detail_04_products flex">
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-grey-chair-05.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                <a href="#" class="palette_btn quick_look_palette_btn">快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-light-03.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                <a href="#" class="palette_btn quick_look_palette_btn">快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-candle-03.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                <a href="#" class="palette_btn quick_look_palette_btn">快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-red-chair-03.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                <a href="#" class="palette_btn quick_look_palette_btn">快速查看</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer -->
    <!-- <div class="index_footer"></div> -->
    <div id="footer"> 
            <section>
                <div class="index_conten_flex footer">
                    <div class="footer_top"><h2>Better Living Through Color</h2></div>
                    <div class="footer_bottom flex">
                        <div class="footer_bottom_left flex">
                            <ul class="footer_about"><h3>關於我們</h3>
                            <a href=""><li>品牌理念</li></a> 
                            <a href=""><li>實體店面</li></a> 
                                <a href=""><li>最新消息</li></a> 
                                <a href=""><li>聯絡我們</li></a> 
                                <a href=""><li>隱私權條款</li></a> 
                            </ul>
                            <ul class="footer_notice"><h3>購物須知</h3>
                                <a href=""><li>購物流程</li></a> 
                                <a href=""><li>安裝說明</li></a> 
                                <a href=""><li>運送說明</li></a> 
                            </ul>
                            <ul class="footer_service"><h3>客戶服務</h3>
                                <a href=""><li>線上客服</li></a> 
                                <a href=""><li>常見問題</li></a> 
                                <a href=""><li>運送說明</li></a> 
                            </ul>
                            <ul class="footer_contact"><h3>聯絡我們</h3>
                                <li>客服電話 &nbsp;2658-4833</li> 
                                <li>客服信箱 &nbsp;@thepalette@gmail.com</li> 
                                <li>營業時間 &nbsp;MON-SAT 11:00-21:00</li>
                            </ul>
                        </div>
                        <div class="footer_bottom_right" style="width:35%">
                            <ul class="flex">
                                <li class="footer_bottom_right">
                                    <figure class="footer_bottom_right_icon1"></figure>
                                    <figure class="footer_bottom_right_icon2"></figure>
                                </li>
                                <li class="footer_bottom_right"><h4>Copyright © 2018 THE PALETTE All rights reserved.</h4></li>
                                <li class="footer_bottom_right_input">
                                <div class="footer_bottom_right_mail flex">
                                    <input class="footer_bottom_right_txtmail" type="text" placeholder="請輸入Email訂閱電子報">
                                    <button class="footer_bottom_right_send">送出</button>
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</body>
</html>