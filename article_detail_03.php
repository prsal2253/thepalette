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
        background: url("images/article/40745810090_4db06e9213_k.jpg") no-repeat center bottom;
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
                            <a href="article_detail_02.php">PREV<br>ARTICLE</a>
                        </div>
                        <div class="artd_next flex">
                            <a href="article_detail_04.php">NEXT<br>ARTICLE</a>
                            <img src="images/icon/arrow2_w.svg" alt="">
                        </div>
                    </div>

                </figure>
            </div>
    </div>

    <div class="index_conten">
        <!-- 文章標題 -->
        <div class="artd_title">
            <h2>打開門就能感受溫暖氣息，讓「家」更具質感</h2>
        </div>

        <!-- 文章內容 -->
        <div class="artd_box3">
            <h4>
                <div class="article_date_deco"></div>2018 JUL 23
            </h4>
            <p>有人形容愛情的顏色，就像是甜美的紅色調，流露著淡淡溫暖的氣息，比起熱情的鮮紅來的溫潤，散發著柔和卻堅強的含義，更是代表的愛自己和接受自己；所以，這也是為什麼女人總是喜歡穿上紅色調，傳遞出明亮愉悅的氣息，許多男人也都開始穿上紅色系的服裝，展現出剛柔並濟得氛圍。
                <br>而居家空間如果想要添加一些浪漫元素，不一定需要充滿蕾絲或夢幻公主裝飾，也能利用紅色調，打造浪漫、柔和、具有質感的樣貌。
            </p>
            <h3>01 不同色階的紅</h3>
            <p>多功能家具趨勢流行已久，其美觀與實用兼具的特性，成為狹窄空間的救星。無論是能拆解與重組的辦公桌、可摺疊的沙發床、藏在巨型抽屜裡的輪床，都會是值得投資的商品。</p>

            <div class="artd_img1">
                <img src="images/article/36416203116_b5ffe0b139_k.jpg" alt="">
            </div>
            <h3>02 點綴上灰色和古銅金</h3>
            <p>在裝飾住屋的視覺法則中，「壁紙」絕對名列前茅。當地板已被圖樣壁磚、圖騰地毯給佔據，你可以考慮往牆壁上繼續作裝飾。深沉的壁紙顏色能夠帶給人靜謐幽然的現代感，而亮色的壁紙顏色則能提點出空間的明亮感，當陽光透過窗戶灑進來，那幅自然光景更是美不勝收。</p>

            <div class="artd_box4 flex">
                <div class="artd_img2">
                    <img src="images/article/36416168486_ccf43ba02a_k.jpg" alt="">
                </div>
                <div class="artd_img3">
                    <img src="images/article/41831742764_29cab9c5a9_k.jpg" alt="">
                </div>
            </div>

            <div class="artd_box5 flex">
                <p> Photo: Daniel Home<br>
                    Cover via : Daniel Decor,Cover Art Home<br>
                    Cover Art Design : Vicky
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
                        <img src="images/H-pink-chair-06.png" alt="商品名稱">
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
                        <img src="images/H-light-08.png" alt="商品名稱">
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
                        <img src="images/H-red-chair-08.png" alt="商品名稱">
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
                        <img src="images/H-other-table-05.png" alt="商品名稱">
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