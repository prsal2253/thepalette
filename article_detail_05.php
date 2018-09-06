<?php include 'page_item/head.php';?>

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

</style>
</head>

<!-- 頁面ID -->
<body id="article_detail" class="">

<!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>

     <!-- main -->
    <div class="index_main">
        <!-- 麵包屑 -->
        <section class="bread_crumbs bread_crumbs_b">
            <ul>
                <li>
                    <a href="index.php">home</a>
                </li>
                <li>
                    <a href="article.php">article</a>
                </li>
                <li>
                    <a href="#">article detail</a>
                </li>
            </ul>
        </section>

        <!-- 頁面內容 -->
        <section class="item_32">
            <div class="artd_box1">
                <figure>
                    <div class="artd_box2"></div>

                    <div class="artd_post flex">
                        <div class="artd_prev flex">
                            <img src="images/icon/arrow_w.svg" alt="">
                            <a href="article_detail_04.php">PREV<br>ARTICLE</a>
                        </div>
                        <div class="artd_next flex">
                            <a href="article_detail_01.php">NEXT<br>ARTICLE</a>
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

           <div class="index_footer">
        <?php include 'page_item/footer.php';?>
    </div>

</body>
</html>