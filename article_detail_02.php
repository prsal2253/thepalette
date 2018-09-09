<?php
require __DIR__ . '/__db_connect.php';
?>
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
        background: url("images/article/40745880920_bcdae5ec02_k.jpg") no-repeat center bottom;
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
                            <img src="images/article/40745885020_c7d0b89b25_k.jpg" alt="" class="transition">
                            <a href="article_detail_01.php" class="transition">PREV
                                <br>ARTICLE</a>
                        </div>
                        <div class="artd_next flex transition">
                            <img src="images/article/41831742764_29cab9c5a9_k.jpg" alt="" class="transition">
                            <a href="article_detail_03.php" class="transition">NEXT
                                <br>ARTICLE</a>
                        </div>
                    </div>
                </figure>
            </div>

    <div class="index_conten">
        <!-- 文章標題 -->
        <div class="artd_title">
            <h2>用大人味的深層色調，假裝我家在倫敦</h2>
        </div>

        <!-- 文章內容 -->
        <div class="artd_box3">
            <h4>
                <div class="article_date_deco"></div>2018 AUG 08
            </h4>
            <p>大多數亞州人的住宅色調，都偏向以白色結合木質調為主，或是以淺色系來增添空間純淨和開闊的氛圍。但對於許多西方國家來說，深色反而更能打造出空間的寧靜感，只要運用得宜，更能展現出雅緻和沉穩的品味。
                <br>尤其以倫敦人更是如此，或許是跟民族性和天候有關，他們喜歡在空間中加入一點暗沉的色系，再透過材質與色調交錯運用，呈現出現代摩登感。
            </p>
            <h3>01 大面積運用</h3>
            <p>如果是可以改裝的空間，可以利用深灰色調結合繪製動物圖案的壁紙，展現出活潑朝氣；亦或是利用深灰色與黑色和古銅金做結合，點綴上中式傳統茶器，打造出高貴典雅的氣息。只需要在搭配上做些改變，就能呈現出截然不同的風格。</p>

            <div class="artd_img1">
                <img src="images/article/42554120281_2532aefa20_b.jpg" alt="">
            </div>
            <h3>02 利用傢具點綴</h3>
            <p>如果不能動用到裝修部分，也能夠利用深色的桌椅傢俱讓空間有畫龍點睛的效果，尤其是搭配上淺灰或米白，都能夠營造出舒適不壓迫的空間感；即便是一張簡單的深色椅，都能夠立即讓整個氛圍改變。</p>

            <div class="artd_box4 flex">
                <div class="artd_img2">
                    <img src="images/article/27683707137_148f90a8f0_k.jpg" alt="">
                </div>
                <div class="artd_img3">
                    <img src="images/article/27683687837_a79ca6f457_k.jpg" alt="">
                </div>
            </div>

            <div class="artd_box5 flex">
                <p> Photo: Sandra Home
                    <br> Cover via : Artistic Designs for Living
                    <br> Cover Art Design : Sandra
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
                        <img src="images/H-blue-chair-08.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=45" class="palette_btn quick_look_palette_btn quick"
                                       data-fancybox
                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-light-09.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=53" class="palette_btn quick_look_palette_btn quick"
                                       data-fancybox
                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-white-chair-04.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=103" class="palette_btn quick_look_palette_btn quick"
                                       data-fancybox
                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-blue-chair-03.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=40" class="palette_btn quick_look_palette_btn quick"
                                       data-fancybox
                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
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
