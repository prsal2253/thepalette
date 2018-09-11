<?php
require __DIR__ . '/__db_connect.php';

$sqact = 'SELECT * FROM `products_list` WHERE `act`=1';

$product_act = $mysqli->query($sqact);

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
            height: 200px;
            background: #739eb6;
        }
        .mark_box2 {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 171px;
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
            padding: 16% 5% 10% 20%;
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
            font-size: 30px;
            line-height: 20px;
            border-bottom: 10px solid #97b189;
            margin-top: 33px;
            width: 365px;
        }
        .mark_title p {
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 23px;
            line-height: 25px;
            margin-top: 15px;
            color: #444;
        }
        .mark_img1 {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 700px;
            object-fit: cover;
        }
        .mark_sale,
        .mark_sale1 {
            position: absolute;
            z-index: 11;
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 30px;
            line-height: 35px;
            color: #739eb6;
        }
        .mark_sale {
            margin: 420px 0 0 110px;
        }
        .mark_sale1 {
            transform: rotate(-90deg);
            margin: 340px 0 0 697px;
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
            font-size: 10px;
            font-weight: 100;
            color:#fff;
        }
        .mark_help_box {
            position: absolute;
            bottom: 0;
            padding: 0 0 5px 15px;
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
            margin-top: 10px;
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
        .bored_act{
            border: 1px white solid;
        }
        .bored_act_bl{
            border: 1px gray solid;

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
                            <p style="color:#fff">SALE</p>
                            <p>SALE</p>
                        </div>
                        <img class="mark_img1" src="./images/banner/Fogia_2016_212_FIX01.jpg" alt="商品促銷">

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
                <?php while ($r = $product_act->fetch_assoc()): ?>

                <div class="mark_product bored_act


                 <?= isset($_SESSION['act'][$r['product_sid']]) ? 'bored_act_bl':'' ?>


                 transition" data-sid="<?= $r['product_sid'] ?>">


                    <a href="product_quicklook.php?id=<?= $r['product_sid'] ?>" target="_blank">
                        <img class="mark_img2" src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                    <h3 style="font-size: 16px;"><?= $r['product_name'] ?></h3>
                    </a>
                    <h3 class="product-item-price" data-price="<?= $r['price'] ?>">$<?= $r['price'] ?></h3>
                    <div class="palette_select member_input40 flex">
                        <select class="qty" data-qty="<?= $_SESSION['act'][$sid]==0 ? 0 : $_SESSION['act'][$sid] ?> ">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button class="add_to_act"><?= isset($_SESSION['act'][$r['product_sid']]) ? '取消':'選購' ?></button>
                    </div>
                </div>
                <?php endwhile; ?>
        </section>

        <!-- 結算 -->
        <div class="mark_box3">
            <div class="index_conten">
                <div class="mark_total ">
                    <p>已選購<span class="qty-act"></span>件，原價<span id="total-price"></span>，折扣價$1,000元</p>
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

<script>


    var dallorCommas = function (n) {    // 這是加$跟三三為單位中間加逗號
        return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };



    var actTotal = function () {
        var total = 0;// 一開始設定0
        var total_qty = 0;
        var items = $('.mark_product');


        items.each(function () {    // 抓到所有項目，所以用each迴圈下去跑，每跑到一個就抓它價格跟數量乘起來
            if($(this).hasClass('bored_act_bl')) {
                total += $(this).find('.product-item-price').attr('data-price') * $(this).find('.qty').val();
                //這裡應該做型別轉換parseInt轉成數字，但是乘法會轉換
                total_qty += parseInt($(this).find('.qty').val());
            }
            // total_qty += $(this).find('.product-item-qty').attr('data-qty')*1;
        });

        $('#total-price').text(dallorCommas(total));
        $('.qty-act').text(total_qty);
    };



    actTotal();







    var changeQty = function (obj) {
        //這個函式丟一個物件進來
        var total = 0;
        for (var s in obj) {

            total += obj[s];
        }
        $('.qty-act').text(total);
    };





    var add_to_act=$('.add_to_act');

    add_to_act.click(function(){
        var mark_product = $(this).closest('.mark_product');
        mark_product.toggleClass('bored_act_bl');
        var sid = mark_product.attr('data-sid');
        var qty = mark_product.find('.qty').val();
        console.log(`sid: ${sid}, qty: ${qty}`);

    if(mark_product.hasClass('bored_act_bl')){
        $.get('activity_api.php', {sid:sid,qty:qty}, function(data){
            alert('已加入');
            mark_product.find(add_to_act).text('取消');
            console.log(data);
            window.changeQty(data);

        }, 'json');
        }else{
        mark_product.removeClass('bored_act_bl');
        $.get('activity_api.php', {sid: sid}, function (data) {
            alert('已取消');
            mark_product.find(add_to_act).text('選購');
            window.changeQty(data);

        }, 'json');
        actTotal();
    }




        // $.get('add_to_cart.php', {sid:sid,qty:qty}, function(data){
        //     //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)
        //     console.log(data);
        //     alert('商品已加入購物車！');
        //     //點上面購物車數量會變
        //     window.parent.changeQty(data);
        //
        //     window.parent.changeSmallCart();
        //     //changeQty(data);
        // }, 'json');
    });
</script>
</html>