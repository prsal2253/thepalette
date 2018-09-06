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
        background: url("images/article/27310906941_89aae40e9e_k.jpg") no-repeat center bottom;
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
                            <a href="article_detail_03.php">PREV<br>ARTICLE</a>
                        </div>
                        <div class="artd_next flex">
                            <a href="article_detail_05.php">NEXT<br>ARTICLE</a>
                            <img src="images/icon/arrow2_w.svg" alt="">
                        </div>
                    </div>

                </figure>
            </div>
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

        <div class="index_footer">
        <?php include 'page_item/footer.php';?>
    </div>

</body>
</html>
