<?php

require __DIR__ . '/__db_connect.php';


if(isset($_GET['id'])) {
    $sql = sprintf('SELECT * FROM `products_list` WHERE 1 AND `product_sid`='.$_GET['id']);
    $rs = $mysqli->query($sql);
    $r = $rs->fetch_assoc();

    if($r['same']!==0) {
        $sql2 = "SELECT * FROM `products_list` WHERE `same`=". $r['same'];

        $rs2 = $mysqli->query($sql2);

        $s_same = [];

        while ($c = $rs2->fetch_assoc()) {
            $s_same[$c['product_sid']] = $c;
        }
    }
}
?>
<style>
    .color1,.color2,.color3,.color4,.color5,.color6,.color7,.color8,.color9,.color10,.color11,.color12,.color13{
        width: 25px;
        height: 25px;
        border-radius: 50%;
        display: inline-block;
        margin-left: 2px;
    }
    .color1{
        background-color: red;
    }
    .color2{
        background-color: hotpink;
    }
    .color3{
        background-color: darkorange;
    }
    .color4{
        background-color: deepskyblue;
    }
    .color5{
        background-color: green;
    }
    .color6{
        background-color: yellow;
    }
    .color7{
        background-color: black;
    }
    .color8{
        background-color: white;
    }
    .color9{
        background-color: darkgray;
    }
    .color10{
        background-color: saddlebrown;
    }
    .color11{
        background-color: lightyellow;
    }
    .color12{
        background-color: cornflowerblue;
    }
    .color13{
        background-color: purple;
    }
</style>

<div id="product_detail_01"> 
    <div class="index_top">
        <header><h1 class="product_detail_h1">palette</h1></header>
    </div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <section  class="bread_crumbs bread_crumbs_b">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">product red</a></li>
                <li><a href="#">Swoon Chair Space Copenhagen</a></li>
            </ul>
        </section>
        <section class="">
            <div class="index_conten_flex product_detail_01 card" data-sid="<?= $r['product_sid'] ?>">
                <!-- 左邊 -->
                <div class="product_detail_01_left flex">
                    <div class="product_detail_01_topic">
                        <h2 class="product_detail_01_h2"><?= $r['product_name'] ?></h2>
                        <div class="s_rate flex">
                            <h3 class="product_detail_01_h3">by <?= $r['designer'] ?>&nbsp;&nbsp;</h3>
                            <div class="s_star"></div>
                            <h4 class="product_detail_01_h4">&nbsp;<?= $r['star'] ?>&nbsp;&nbsp;(<?= $r['howmuch_star'] ?>筆評論)</h4>
                        </div>
                    </div>
                    <div class="product_detail_image">
                        <img class="img-good" src="images/<?= $r['img'] ?>.png" alt="">
                    </div>
                </div>          
                <!-- 右邊 -->
                <div class="flex product_detail_01_right">
                    <div class="s_sale_01"><h5 class="product_detail_01_h5">活動期間Swoon滿兩件免費到府安裝</h5></div>
                    <div class="s_sale_02"><h5 class="product_detail_01_h5">國泰銀行刷卡分期免利息</h5></div>
                    <div class="product_detail_01_description">
                        <h6 class="product_detail_01_h6">商品描述</h6>
                        <h7 class="product_detail_01_h7"><?= $r['introduction'] ?><br><br></h7>
                        <h6 class="product_detail_01_h6">商品規格</h6>
                        <h7 class="product_detail_01_h7"><?= $r['product_size'] ?></h7>
                    </div>
                    <div class="product_detail_01_price">
                        <h8 class="product_detail_01_h8"><span style="font-family: Georgia">$</span><?= $r['price']*0.85 ?><span style="font-size: 12px; color:#666; text-decoration: line-through"> <?= $r['price'] ?></span></h8>
                    </div>
                    <div class="product_detail_01_color">
                        <?php foreach($s_same as $k=>$v): ?>
                            <div class="choose_color color<?= $v['product_color_sid'] ?> transition"
                                 data-sid="<?= $v['product_sid'] ?>" data-img="<?= $v['img'] ?>"></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="product_detail_01_btns flex">
                        <div class="s_product_detail_01_num palette_select">
                            <select class="qty">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                </select>
                            </div>
                        <button class="add_to_cart"><h5 class="product_detail_01_h5"><span style="font-family:'Noto Sans TC';line-height: 40px">加入購物車</span></h5></button>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script>

    $(".choose_color").click(function(){
        $(this).css({
            "border": "3px solid #333",
            "border-radius": "50%"
        }).siblings().css("border","");

        var pid = $(this).attr('data-sid');
        var img = $(this).attr('data-img');
        $('.card').attr('data-sid', pid);
        $('.img-good').attr('src', 'images/'+img+'.png');
        console.log(pid);

    });
    //購物車功能
    $('.add_to_cart').click(function(){
        var card = $(this).closest('.card');
        var sid = card.attr('data-sid');
        var qty = card.find('.qty').val();
        console.log(`sid: ${sid}, qty: ${qty}`);

        $.get('add_to_cart.php', {sid:sid,qty:qty}, function(data){
            //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)
            console.log(data);
            alert('商品已加入購物車囉！啾咪～');
            //點上面購物車數量會變
            window.parent.changeQty(data);
            changeQty(data);
        }, 'json');
    });
</script>