<?php

require __DIR__ . '/__db_connect.php';

$pageName = 'cart';


if (!empty($_SESSION['cart'])) {
    $keys = array_keys($_SESSION['cart']);
//字面上意思是拿到$_SESSION['cart']所有的key
    $sql = sprintf("SELECT * FROM `products_list` WHERE `product_sid` IN (%s)", implode(',', $keys));
    //IN (這邊要塞sid逗號隔開)
//黏著符號js叫做join()
//php叫做implode
//SELECT * FROM `products_list` WHERE `product_sid` IN (1,2)
    $rs = $mysqli->query($sql);

    $data = [];

    while ($r = $rs->fetch_assoc()) {
//        因為這筆資料有在購物車才拿得到$r
        $r['qty'] = $_SESSION['cart'][$r['product_sid']];
//         設定數量qty當作key,拿到的是數量
        $data[$r['product_sid']] = $r;
//        以這筆資料product_sid當作key,$r2當作val
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shoppingcar_01</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
</head>
<body id="shoppingcar" class="shoppingcar_01">
<div class="index_top">
    <header><h1>palette</h1></header>
</div>
<div class="index_main">
    <!-- 麵包屑 -->
    <section class="bread_crumbs">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">member</a></li>
            <li>shopping car</member></li>
        </ul>
    </section>
    <section class="item_12">
        <div class="index_conten_flex">
            <div class="step_box step_box_in"><span>01</span><span>確認訂單<br/>選擇付款方式</span></div>
            <div class="step_box"><span>02</span><span>填寫訂購資料</span></div>
            <div class="step_box"><span>03</span><span>訂購完成</span></div>
        </div>
    </section>
    <section class="item_12 item_13 item_17">
        <div class="index_conten ">
            <div class="item_02">
                <div class="item_02_conten">
                    <div class="order_listbox">
                        <div class="description_50">商品名稱</div>
                        <div class="description_5"></div>
                        <div class="description_10">規格</div>
                        <div class="description_10">數量</div>
                        <div class="description_10">金額</div>
                        <div class="description_10">收藏</div>
                        <div class="description_5">刪除</div>
                    </div>
                    <!-- 一件商品 -->
                    <?php if (!empty($_SESSION['cart'])): ?>
                    <?php
                    $total_qty = 0;// 一定要先設定一個0不然會找不到值
                    $total = 0;// 一定要先設定一個0不然會找不到值
                    foreach ($keys as $k):// $k是拿到$keys的val
                        $r = $data[$k]; // 整筆資料(包含 qty)
                        $total += $r['price'] * $r['qty'];// 這裡是總價格
                        $total_qty += $r['qty'];// 這裡是總數量
                        ?>
                        <div class="order_listbox product-item" data-sid="<?= $k ?>">
                            <figure class="description_10"><a href="#"><img src="images/<?= $r['img'] ?>.png"
                                                                            alt="<?= $r['product_name'] ?>"></a>
                            </figure>
                            <div class="description_40">
                                <div class="sale_icon"><span>活動商品</span></div>
                                <a href="#" class="product_name"><?= $r['product_name'] ?></a>
                            </div>
                            <div class="description_5"></div>
                            <div class="description_10">黃色</div>
                            <div class="description_10 product-item-qty"  data-qty="<?= $r['qty'] ?>">
                                <select class="qty-sel">
                                    <?php for($i=1; $i<=5; $i++): ?>
                                        <option value="<?=$i?>"><?=$i?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="description_10 product-item-price" data-price="<?= $r['price'] ?>">
                                <?= $r['price'] ?>
                            </div>
                            <div class="description_10">
                                <div class="icon_love"></div>
                            </div>
                            <div class="description_5">
                                <div class="icon_garbage"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- 一件群組商品 -->
                    <!--                        <div class="order_listbox shopping_group">-->
                    <!--                                <figure class="description_10"><a href="#"><img src="images/banner/connect_sofa_leaf_around_ambiente.jpg" alt="商品名稱"></a></figure>-->
                    <!--                                <div class="description_40">-->
                    <!--                                    <div class="sale_icon"><span>群組商品</span></div>-->
                    <!--                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>-->
                    <!--                                </div>-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                                <div class="description_10"></div>-->
                    <!--                                <div class="description_10">1</div>-->
                    <!--                                <div class="description_10">$120000</div>-->
                    <!--                                <div class="description_10"><div class="icon_love"></div></div>-->
                    <!--                                <div class="description_5"><div class="icon_garbage"></div></div>-->
                    <!--                        </div>-->
                    <!--                        <div>-->
                    <!--                            <div class="order_listbox shopping_group_d">-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                                <figure class="description_5"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>-->
                    <!--                                <div class="description_40">-->
                    <!--                                    <a href="#" class="product_name">Anastasia Tufted Chair</a>-->
                    <!--                                </div>-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                                <div class="description_10">黃色</div>-->
                    <!--                                <div class="description_10">1</div>-->
                    <!--                                <div class="description_10"></div>-->
                    <!--                                <div class="description_10"></div>-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div class="order_listbox shopping_group_d">-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                                <figure class="description_5"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>-->
                    <!--                                <div class="description_40">-->
                    <!--                                    <a href="#" class="product_name">Anastasia Tufted Chair -e</a>-->
                    <!--                                </div>-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                                <div class="description_10">黃色</div>-->
                    <!--                                <div class="description_10">1</div>-->
                    <!--                                <div class="description_10"></div>-->
                    <!--                                <div class="description_10"></div>-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div class="order_listbox shopping_group_d">-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                                <figure class="description_5"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>-->
                    <!--                                <div class="description_40">-->
                    <!--                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christe</a>-->
                    <!--                                </div>-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                                <div class="description_10">黃色</div>-->
                    <!--                                <div class="description_10">1</div>-->
                    <!--                                <div class="description_10"></div>-->
                    <!--                                <div class="description_10"></div>-->
                    <!--                                <div class="description_5"></div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <div class="order_listbox order_listbox_tatle">
                        <div>
                            <p>總共 <span class="description_mark" id="total-qty"><?= $total_qty ?></span> 件商品，訂單金額</p>
                            <h3 class="product_price" id="total-price"></h3>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                    <!-- 購物車沒有商品時的狀態 -->
                    <div class="order_listbox carts_none">
                        <h3>購物車目前沒有任何商品</h3>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>
    <section class="item_12 item_13 item_17">
        <div class="index_conten ">
            <!-- 會員名稱 -->
            <div class="item_02_conten">
                <div class="order_listbox">
                    <h3>請選擇付款方式</h3>
                    <a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html"
                       href="javascript:;" class="description_q transition" class="description_q transition" href="#"
                       title="付款說明">?</a></div>
                <div class="order_listbox">
                    <div class="radio_box">
                        <input type="radio" name="pay" value=""><span class="radio_content">信用卡一次付清</span></div>
                    <div class="radio_box">
                        <input type="radio" name="pay" value=""><span class="radio_content">信用卡分期付款</span><span
                                data-fancybox data-src="#modal" class="description_mark">分期銀行</span>
                        <div style="display: none;" id="modal">
                            <p>You are awesome!</p>
                            <p>You are awesome!</p>
                            <p>You are awesome!</p>
                            <p>You are awesome!</p>
                        </div>
                    </div>
                    <div class="radio_box">
                        <input type="radio" name="pay" value=""><span class="radio_content">線上匯款</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="item_12 item_13 item_17">
        <div class="index_conten ">
            <!-- 會員名稱 -->
            <div class="item_02_conten">
                <div class="order_listbox">
                    <h3>請選擇運送方式</h3>
                    <a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html"
                       href="javascript:;" class="description_q transition" class="description_q transition" href="#"
                       title="付款說明">?</a></div>
                <div class="order_listbox">
                    <div class="radio_box">
                        <input type="radio" name="gender" value=""><span class="radio_content">到店取貨<span
                                    class="description_mark">＄0</span></span></div>
                    <div class="radio_box">
                        <input type="radio" name="gender" value=""><span class="radio_content">宅配到府<span
                                    class="description_mark">＄800</span></span></div>
                </div>
            </div>

            <div class="order_listbox order_listbox_tatle item_conten_button">
                <div>
                    <a href="javascript:history.go(-1)" class="palette_btn palette_btn_back" title="繼續購物">繼續購物</a>
                    <?php if(isset($_SESSION['user'])): ?>
                    <input type="button" onclick="location.href='shoppingcar_02.php'" id="submit_btn" value="前往結帳">
                    <?php else: ?>
                    <input type="button" onclick="location.href='login.php'" id="submit_btn" value="前往登入">
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="index_footer"></div>
<script>
    //      即時計算總價
    var dallorCommas = function (n) {    // 這是加$跟三三為單位中間加逗號
        return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    var calTotal = function () {
        var total = 0;// 一開始設定0
        var total_qty = 0;
        var items = $('.product-item');

        if (items.length == 0) {
            location.href = location.href;  //如果沒抓到頁面就會重新讀取
            return;
        }

        items.each(function () {    // 抓到所有項目，所以用each迴圈下去跑，每跑到一個就抓它價格跟數量乘起來
            total += $(this).find('.product-item-price').attr('data-price') * $(this).find('.product-item-qty').attr('data-qty');
            //這裡應該做型別轉換parseInt轉成數字，但是乘法會轉換
            total_qty += parseInt($(this).find('.product-item-qty').attr('data-qty'));
            // total_qty += $(this).find('.product-item-qty').attr('data-qty')*1;
        });

        $('#total-price').text(dallorCommas(total));
        $('#total-qty').text(total_qty);
    };

    //---------------------------------------------------------------------


    var p_items = $('.product-item');

    if (p_items.length) {
        calTotal();// 一進來就呼叫calTotal
        }

    //    一開始設定正確的數量
    p_items.each(function () {
        var sel = $(this).find('.qty-sel');
        sel.val($(this).find('.product-item-qty').attr('data-qty'));
    });
    //    這裏開始選項變更數量
    p_items.find('.qty-sel').change(function () {
        var sid = $(this).closest('.product-item').attr('data-sid');
        //這裡拿到的數量是用戶調整完product-item的數量
        var qty = $(this).val();
        //當qty改變時要拿到裡面的值 這邊的this指的是.qty-sel
        $(this).closest('.product-item').find('.product-item-qty').attr('data-qty',qty);

        // console.log($(this).closest('.product-item').find('.product-item-qty').attr('data-qty',qty));


        $.get('add_to_cart.php', {sid: sid,qty:qty}, function (data) {
            // changeQty(data);
            calTotal();//改變選單數量再去呼叫它calTotal，讓他重算
        }, 'json');
    });





    //        購物車垃圾桶
    $('.icon_garbage').click(function () {
        var tr = $(this).closest('.order_listbox');
        var sid = tr.attr('data-sid');

        $.get('add_to_cart.php', {sid: sid}, function (data) {
            // location.href=location.href;//此行是重新讀取頁面
            tr.remove();//要等ajax回來才可以做刪除動作
            // changeQty(data);
            calTotal();//改變選單數量再去呼叫它calTotal，讓他重算
        }, 'json');
    });

</script>
</body>
</html>