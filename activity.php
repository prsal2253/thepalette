<?php
require __DIR__ . '/__db_connect.php';
?>
<?php include 'page_item/head.php';?>

    <style>
        #activity .index_main .index_top section {
            padding: 0;
        }
        .mark_container {
            width: 100%;
            height: 900px;
            background-color: #fff;
        }
        .mark_left,
        .mark_right {
            position: relative;
            background: #fff;
            height: 900px;
        }
        .mark_left {
            width: 35%;
            float: left;
        }
        .mark_right {
            width: 65%;
            float: right;
        }
        .mark_box1 {
            right: 0;
            position: absolute;
            width: 200px;
            height: 180px;
            background: #739eb6;
        }
        .mark_box2 {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 180px;
            background: #22394b;
        }
        .mark_title {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        .mark_title_box {
            width: 100%;
            margin-top: 280px;
            padding: 10% 5% 10% 20%;
        }
        .mark_title h2 {
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 40px;
            font-weight: bold;
            margin-left: -24px;
        }
        .mark_title h3 {
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 35px;
            line-height: 20px;
            border-bottom: 15px solid #97b189;
            margin-top: 40px;
            width: 420px
        }
        .mark_title p {
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 25px;
            line-height: 25px;
            margin-top: 15px;
            color: #444;
        }
        .mark_img1 {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 720px;
            object-fit: cover;
        }
        .mark_sale,
        .mark_sale1 {
            position: absolute;
            z-index: 11;
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 40px;
            line-height: 50px;
            color: #739eb6;
        }
        .mark_sale {
            margin: 480px 0 0 70px;
        }
        .mark_sale1 {
            transform: rotate(-90deg);
            margin: 235px 0 0 730px;
        }
        .mark_img_light,
        .mark_img_light_sm {
            position: absolute;
            z-index: 11;
        }
        .mark_img_light {
            right: -110px;
            width: 300px;
        }
        .mark_img_light_sm {
            top: -90px;
            right: -150px;
            width: 180px;
        }
        .mark_help {
            font-size: 12px;
            font-weight: 400;
        }
        .mark_help_box {
            position: absolute;
            bottom: 0;
            padding: 5px;
            z-index: 11;
        }
        /* 篩選器 */
        .mark_filter section {
            padding: 50px 0;
        }
        .mark_btn_filter {
            display: inline-block;
            background: #fff;
            line-height: 50px;
            padding: 0 auto;
            border-radius: 31px;
            color: #000;
        }
        .mark_btn_filter:hover,
        .mark_btn_filter.active {
            background: #e6e6e6;
        }
        .mark_product h3 {
            font-size: 20px;
            color: #000;
            text-align: center;
            padding: 5px;
            line-height: 30px;
        }
        /* 商品列表 */
        .mark_all {
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .mark_product {
            width: 23%;
            background: #fafafa;
            display: inline-block;
            padding: 20px;
            margin-bottom: 30px;
        }
        .mark_img2 {
            width: 100%;
        }
        .mark_product div {
            width: 100%;
            justify-content: center;
            align-content: space-around;
            margin-top: 20px;
        }
        .mark_product div select {
            width: 45%;
            border-radius: 31px;
        }
        .mark_product div button {
            padding: 0 15px;
            width: 45%;
            letter-spacing: .2em;
        }
        /* 結算 */
        .mark_box3 {
            margin-top: 50px;
            background-color: #739eb6;
            padding: 50px 0;
        }
        .mark_total p {
            color: #fff;
            font-size: 20px;
            line-height: 40px;
            text-align: end;
        }
        .mark_total .product_price {
            color: #fff;
            font-size: 30px;
        }
        .mark_box3 button {
            margin-right: 0;
            margin-top: 20px;
            background: #000;
        }
        .mark_box3 button:hover {
            background: #444;
        }
        /* banner */
        .mark_gift {
            overflow: hidden;
        }
        .mark_left1,
        .mark_right1 {
            width: 50%;
        }
        .mark_left1 {
            display: inline-flex;
            justify-content: center;
        }
        .mark_right1 {
            position: relative;
        }
        .mark_title1 {
            font-family: 'SourceHanSerifTC-Bold';
            font-size: 25px;
            margin-top: 22px;
            font-weight: 600;
            color: #000;
        }
        .mark_title1 h2 {
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 40px;
            font-weight: bold;
            margin-left: -25px;
        }
        .mark_title1 h3 {
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 25px;
            line-height: 30px;
            margin-top: 25px;
        }
        .mark_title1 h4 {
            font-size: 20px;
            margin-top: 21px;
            color: #444;
        }
        .mark_title1 h5 {
            width: 238px;
            font-size: 20px;
            margin-top: 15px;
            line-height: 8px;
            color: #444;
            border-bottom: 11px solid #97b189;
        }
        .mark_title1 p {
            font-family: 'SourceHanSerifTC-Bold';
            font-size: 13px;
            margin-top: 15px;
            line-height: 20px;
            letter-spacing: 3px;
            color: #444;
        }
        .mark_img_light1 {
            top: -110px;
            right: 220px;
            width: 365px;
            z-index: 11;
            position: absolute;
        }
        .mark_img_light_sm1 {
            top: -245px;
            right: 150px;
            width: 250px;
            position: absolute;
        }

    </style>
</head>

<!-- 頁面ID -->
<body id="activity">

 <!-- top -->
 <div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>

    <!-- main -->
    <div class="index_main">
        <div class="index_top">
            <section>
                <div class="mark_container">

                    <!-- banner左邊 -->
                    <div class="mark_left">
                        <img class="mark_img_light" src="./images/H-light-05.png" alt="滿額贈燈飾">
                        <img class="mark_img_light_sm" src="./images/H-light-05-S.png" alt="滿額贈燈飾">
                        <div class="mark_box1"></div>

                        <div class="mark_title_box">
                            <div class="mark_title">
                                <h2>「家具滿額贈」</h2>
                                <h3>活動開跑即日起至9/16</h3>
                                <p>購買家具滿兩萬元送1000</p>
                                <p>滿三萬贈設計感燈飾</p>
                            </div>
                        </div>
                        <div class="mark_box2"></div>
                    </div>

                    <!-- banner右邊 -->
                    <div class="mark_right">
                        <div class="mark_sale">
                            <p>SALE</p>
                            <p style="color:#fff">SALE</p>
                        </div>
                        <div class="mark_sale1">
                            <p>SALE</p>
                            <p style="color:#fff">SALE</p>
                        </div>
                        <img class="mark_img1" src="./images/banner/Fogia_2016_212_FIX.jpg" alt="商品促銷">

                        <div class="mark_help_box">
                            <p class="mark_help">下單前請務必先參考商品尺寸表及顏色，挑選適合您的品項，避免因尺寸不合退貨造成您無法符合優惠資格。</p>
                            <p class="mark_help">促銷期間，THE PALETTE保留變更商品及終止活動的權利。</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- 商品列表 -->
        <section class="item_34">
            <div class="index_conten_flex mark_all">
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-blue-chair-14.png" alt="">
                    <h3>Zig Zag Chair</h3>
                    <h3>$61500</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-grey-chair-05.png" alt="">
                    <h3>SIRO+ CHAIR</h3>
                    <h3>$21200</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-pink-chair-08.png" alt="">
                    <h3>SOFT EDGE 12 CHAIR</h3>
                    <h3>$75300</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-other-table-08.png" alt="">
                    <h3>HALLWAY TABLE</h3>
                    <h3>$25600</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-blue-chair-09.png" alt="">
                    <h3>Outline Sofa</h3>
                    <h3>$62900</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-white-chair-03.png" alt="">
                    <h3>Edition Chair</h3>
                    <h3>$23000</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-green-chair-07.png" alt="">
                    <h3>ARMCHAIR HALLWAY</h3>
                    <h3>$24200</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-blue-chair-03.png" alt="">
                    <h3>Edition Chair</h3>
                    <h3>$47000</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-grey-chair-06.png" alt="">
                    <h3>Hal Stackable Chair</h3>
                    <h3>$15500</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-pink-chair-06.png" alt="">
                    <h3>SOFT EDGE 12 CHAIR</h3>
                    <h3>$35400</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-green-table-01.png" alt="">
                    <h3>Lau Square Table</h3>
                    <h3>$30300</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-white-table-03.png" alt="">
                    <h3>Kazimir Table</h3>
                    <h3>$21500</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-other-table-09.png" alt="">
                    <h3>HALLWAY TABLE</h3>
                    <h3>$25600</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-grey-chair-04.png" alt="">
                    <h3>商品名稱</h3>
                    <h3>$26000</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-bottle-01.png" alt="">
                    <h3>VASE</h3>
                    <h3>$5500</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
                <div class="mark_product">
                    <img class="mark_img2" src="images/H-pink-chair-02.png" alt="">
                    <h3>Edition Chair</h3>
                    <h3>$40400</h3>
                    <div class="palette_select member_input40 flex">
                        <select>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button>選購</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- 結算 -->
        <div class="mark_box3">
            <div class="index_conten">
                <div class="mark_total ">
                    <p>已選購2件，原價$32,940元，折扣價$1,000元</p>
                    <p>總金額
                        <span class="product_price">
                            <span>$</span>31940</span>
                    </p>
                </div>
                <button>加入購物車</button>
            </div>
        </div>

        <!-- banner -->
        <section class="mark_gift">
            <div class="index_conten_flex">

                <div class="mark_left1">
                    <div class="mark_title_box1">
                        <div class="mark_title1">
                            <h2>「家具滿額贈」</h2>
                                <h3>滿三萬贈設計感燈飾</h3>
                                <h4>ERIN PENDANT LAMP</h4>
                                <h5>BRASS, LIGHT GREY</h5>
                                <p>
                                    W: 30 cm D: 30 cm H: 60 cm
                                    <br>Wt: 0.5 kg
                                    <br> Cbm: 0.93 cbm
                                    <br> Sh: 40 cm
                                </p>
                        </div>
                    </div>
                </div>
                <div class="mark_right1">
                    <img class="mark_img_light1" src="./images/H-light-05.png" alt="滿額贈燈飾">
                    <img class="mark_img_light_sm1" src="./images/H-light-05-S.png" alt="滿額贈燈飾">
                </div>
            </div>
        </section>
    </div>

<!-- footer -->
<div class="index_footer">
    <?php include 'page_item/footer.php';?>
</div>

</body>

<script src="js/jquery-3.3.1.js"></script>
<script>
    $("item_34 button").click(function(){
        $(this).toggleClass();
    });
</script>
</html>