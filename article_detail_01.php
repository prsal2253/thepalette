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
        background: url("images/article/40745885020_c7d0b89b25_k.jpg") no-repeat center bottom;
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
                    article detail
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
                            <img src="images/article/Skærmbillede-2018-07-04-kl.-14.08.04-1024x763.png" alt="" class="transition">
                            <a href="article_detail_05.php" class="transition">PREV
                                <br>ARTICLE</a>
                        </div>
                        <div class="artd_next flex transition">
                            <img src="images/article/42554120281_2532aefa20_b.jpg" alt="" class="transition">
                            <a href="article_detail_02.php" class="transition">NEXT
                                <br>ARTICLE</a>
                        </div>
                    </div>
                </figure>
            </div>
    <div class="index_conten">
        <!-- 文章標題 -->
        <div class="artd_title">
            <h2>利用色調，為「家」妝點上現代獨特風格</h2>
        </div>

        <!-- 文章內容 -->
        <div class="artd_box3">
            <h4>
                <div class="article_date_deco"></div>2018 AUG 29
            </h4>
            <p>每個季節都有著屬於當季的熱門色調，在配色上，我們也大多習慣運用既有的概念，利用相近色系或對比色系，讓整個畫面或是空間氛圍達到和諧平衡的感受。而在最近的居家設計上，常常將兩組看似毫無關聯的色調相互搭配，卻達成了完美精緻的協調感，如粉紅和灰，粉紅和古銅金等等。
                <br> 充滿清新卻帶點個性的現代風格，卻也意外的發現原來「木質與金屬」，原來是搭配的那麼恰到好處，運用在居家風格上，一定也能呈現出絕佳的效果。
            </p>
            <h3>01 一大片自然</h3>
            <p>將大面積的牆面或地板，運用木頭質地，讓整個空間有著平和舒適的氛圍，再利用傢具飾品或甚至半面牆，成為搶眼的點綴，呈現出具現代摩登感的居家空間設計。</p>

            <div class="artd_img1">
                <img src="images/article/41652209745_50370cdee4_b.jpg" alt="">
            </div>
            <h3>02 適度的點綴</h3>
            <p>若想要在小地方加入一點舒適怡人的感受，也不需要大費周章更動牆面或地板規劃，就可以利用一些傢俱上的搭配，或是在原本深色調的空間內，加入對比色的軟件，就能讓原本冷峻的空間，多了一點溫暖的氣息，也相當適合四季。</p>

            <div class="artd_box4 flex">
                <div class="artd_img2">
                    <img src="images/article/41652248255_1e09655cc9_k.jpg" alt="">
                </div>
                <div class="artd_img3">
                    <img src="images/article/41652310415_624690995e_k.jpg" alt="">
                </div>
            </div>

            <div class="artd_box5 flex">
                <p> Photo: Trendsparna <br>
                    Cover via : Dekorella <br>
                    Cover Art Design : Decordemon
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
                        <img src="images/H-other-chair-03.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=121" class="palette_btn quick_look_palette_btn quick"
                                       data-fancybox
                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-cup-01.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=153" class="palette_btn quick_look_palette_btn quick"
                                       data-fancybox
                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-other-chair-01.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=119" class="palette_btn quick_look_palette_btn quick"
                                       data-fancybox
                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                            </div>
                        </div>
                    </div>
                    <!-- 一組商品 -->
                    <div class="product_box" style="width: 25%;">
                        <img src="images/H-bottle-03.png" alt="商品名稱">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3">
                                        <a href="#">Arch Zen Chair</a>
                                    </h3>
                                </div>
                                <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=108" class="palette_btn quick_look_palette_btn quick"
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