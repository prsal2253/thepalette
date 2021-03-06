<?php

$mysqli = new mysqli('localhost','orange','0987','the palette');
//$mysqli = new mysqli('localhost', 'sandra', 'ssan+1222', 'the palette');
// $mysqli = new mysqli('localhost', 'weiwei', '123', 'the palette');

$mysqli->query("SET NAMES utf8");


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
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: inline-block;
        margin-left: 2px;
    }
    .color1{
        background-color: #802929;
    }
    .color2{
        background-color: #da9480;
    }
    .color3{
        background-color: #c55638;
    }
    .color4{
        background-color: #2e4553;
    }
    .color5{
        background-color: #407060;
    }
    .color6{
        background-color: #d89d54;
    }
    .color7{
        background-color: black;
    }
    .color8{
        background-color: white;
        border: 2px solid #f0f0f0;
    }
    .color9{
        background-color: #999;
    }
    .color10{
        background-color: #736558;
    }
    .color11{
        background-color: #D59A54;
    }
    .color12{
        background-color: #70929E;
    }
    .color13{
        background-color: #80346D;
    }
</style>

<div id="product_detail_01"> 
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
                        <img class="img-good" src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                    </div>
                </div>          
                <!-- 右邊 -->
                <div class="flex product_detail_01_right">
                <div class="s_sale">
                    <div class="s_sale_01"><h5 class="product_detail_01_h5">活動期間Swoon滿兩件免費到府安裝</h5></div>
                    <div class="s_sale_02"><h5 class="product_detail_01_h5">國泰銀行刷卡分期免利息</h5></div>
                    <div class="product_detail_01_description">
                        <h6 class="product_detail_01_h6">商品描述</h6>
                        <h7 class="product_detail_01_h7"><?= $r['introduction'] ?><br><br></h7>
                        <h6 class="product_detail_01_h6">商品規格</h6>
                        <h7 class="product_detail_01_h7"><?= $r['product_size'] ?></h7>
                    </div>
                </div>
                    <div class="product_detail_01_price">
                        <h8 class="product_detail_01_h8"><span style="font-family: Georgia"  class="sub-total2"></span>
                            <span style="font-size: 12px; color:#666; text-decoration: line-through"
                                  data-totalprice="<?= $r['price'] ?>" class="sub-total"> </span></h8>
                    <div class="product_detail_01_color">
                        <?php if(($r['same']!=0)):?>
                            <div class="product_quicklook_01_color">
                                <?php foreach($s_same as $k=>$v): ?>
                                    <div class="choose_color color<?= $v['product_color_sid'] ?> transition"
                                         data-sid="<?= $v['product_sid'] ?>" data-img="<?= $v['img'] ?>"></div>
                                <?php endforeach; ?>
                            </div>
                        <?php else:?>
                            <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                            <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                        <?php endif;?>
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
                        <button class="add_to_cart">
                            <h5 class="product_detail_01_h5">
                                <span style="font-family:'Noto Sans TC';line-height: 40px">加入購物車</span></h5></button>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script>

    var dallorCommas = function (n) {    // 這是加$跟三三為單位中間加逗號
        return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    var items = $('.sub-total');

    items.each(function () {
        var p = parseInt($(this).attr('data-totalprice'));
        $(this).text(dallorCommas(p));
        $('.sub-total2').text(dallorCommas(p*0.85));


    });




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
            alert('商品已加入購物車！');
            //點上面購物車數量會變
            window.parent.changeQty(data);
            changeQty(data);
        }, 'json');
    });
</script>