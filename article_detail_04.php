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

    #article_detail .index_main section {
        padding: 0;
    }
    /* 麵包屑 */

    #article_detail .bread_crumbs {
        position: absolute;
        top: 50px;
        left: 70px;
        z-index: 11;
    }

    #article_detail .bread_crumbs ul li a,#article_detail .bread_crumbs ul li,#article_detail .bread_crumbs ul li::after {
        color: #fff;
    }

    .artd_box1 {
        width: 100%;
        height: 100vh;
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
        width: 50%;
        height: 100%;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        position: relative;
    }

    .artd_prev img,
    .artd_next img {
        position: absolute;
        width: 100%;
        height: auto;
        opacity: 0;
    }
    .artd_prev img{
        left:-100%;
    }
    .artd_next img {
        right:-100%;
    }

    .artd_prev:hover img,
    .artd_next:hover img{
        opacity: 1;
    }

    .artd_prev:hover img{
        left:0%;
    }
    .artd_next:hover img {
        right:0%;
    }

    .artd_prev a,
    .artd_next a {
        color: #fff;
    }

    .artd_prev a, .artd_next a  {
        display: inline-flex;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        align-items: center;
        justify-content: center;
        background-size: 50px auto;
        background-repeat: no-repeat;
        text-decoration: none;
    }
    .artd_prev a {
        background-image: url(images/icon/arrow_w.svg);
        background-position: 25% 54%;
        padding: 0 0 0 15%;
    }
    .artd_next a {
        background-image: url(images/icon/arrow2_w.svg);
        background-position: 75% 54%;
        padding: 0 15% 0 0;
    }
    .artd_prev:hover a, .artd_next:hover a{
        background-color: rgba(0,0,0,0.3);
    }

    .artd_box1 figure {
        background: url("images/article/27310906941_89aae40e9e_k.jpg") no-repeat center bottom;
        background-size: cover;
        width: 100%;
        height: 100%;
    }
    /* 文章標題 */

    .artd_title {
        position: relative;
        top: -110px;
        width: 60%;
    }

    .artd_title h2 {
        font-family: 'SourceHanSerifTC-Bold';
        font-size: 33px;
        letter-spacing: 2px;
        line-height: 50px;
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
        padding: 80px 0;
        background-color: #fff;
        margin: 0 auto;
    }
    #product_detail_04{ background-color: #fff;}

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
                        <div class="artd_prev flex ">
                            <img src="images/article/41831742764_29cab9c5a9_k.jpg" alt="" class="transition">
                            <a href="article_detail_03.php" class="transition">PREV
                                <br>ARTICLE</a>
                        </div>
                        <div class="artd_next flex transition">
                            <img src="images/article/Skærmbillede-2018-07-04-kl.-14.08.04-1024x763.png" alt="" class="transition">
                            <a href="article_detail_05.php" class="transition">NEXT
                                <br>ARTICLE</a>
                        </div>
                    </div>
                </figure>
            </div>

    <div class="index_conten">
        <!-- 文章標題 -->
        <div class="artd_title">
            <h2>兩種英式宅風格，獻給嚮往英倫風格的你</h2>
        </div>

        <!-- 文章內容 -->
        <div class="artd_box3">
            <h4>
                <div class="article_date_deco"></div>2018 JUN 11
            </h4>
            <p>家的姿態與風格，往往從內心深處萌發，逐漸變成想要的模樣，你喜歡的最終會變成你看見的。而迷戀著英倫風情的你，會選擇什麽樣的住家風格呢？
                <br>以下就有三例來自倫敦設計事務所Laura Lakin Design 的作品，以豐富色彩與材質交織出不同的小宅風格，但每一個都洋溢著濃郁英式況味。
            </p>
            <h3>01 潔淨而個性的工業風</h3>
            <p>講求淩厲線條的工業風往往給人以濃濃設計感而非生活氣息，但Laura Lakin Design 卻著眼於發揮工業風的生活味道，將小家打造得溫馨而潔淨，並加入不少軟裝以淡化工業風的嚴肅感。同時，爲了讓空間顯得不無聊，又適當加入個性家具與家飾，用點綴的佈置法讓工業風的裝潢呈現更有個性的一面。</p>

            <div class="artd_img1">
                <img src="images/article/19685713975_2af3c54b73_k.jpg" alt="">
            </div>
            <h3>02 浪漫氛圍鋪陳下的現代鄉村格調</h3>
            <p>與復古鄉村風比較，較現代的鄉村特質並不容易突顯，因此Laura Lakin Design 從色彩下手，憑借澄澈典雅又高貴的藍調取代沈穩的咖啡色，以呈現現代鄉村的風格特色，再加上水晶、玻璃、鋼質製品的裝飾與點綴，愈發有了「藍色多瑙河」一般的浪漫情懷。</p>

            <div class="artd_box4 flex">
                <div class="artd_img2">
                    <img src="images/article/Tonella_Majestics_021.jpg" alt="">
                </div>
                <div class="artd_img3">
                    <img src="images/article/24764763687_c6553c744f_k.jpg" alt="">
                </div>
            </div>

            <div class="artd_box5 flex">
                <p> Photo: lauralakindesign<br>
                    Cover via : lauralakindesign<br>
                    Cover Art Design : Laura Lakin Design
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
                        <img src="images/H-other-table-03.png" alt="商品名稱">
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
                        <img src="images/H-orange-chair-07.png" alt="商品名稱">
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
                        <img src="images/H-light-01.png" alt="商品名稱">
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
                        <img src="images/H-blue-chair-10.png" alt="商品名稱">
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
    </div>

        <div class="index_footer">
        <?php include 'page_item/footer.php';?>
    </div>

</body>
</html>
