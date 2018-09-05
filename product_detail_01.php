<?php

require __DIR__ . '/__db_connect.php';


if(isset($_GET['id'])) {
    $sql = sprintf('SELECT * FROM `products_list` WHERE 1 AND `product_sid`='.$_GET['id']);
    $rs = $mysqli->query($sql);
    $r = $rs->fetch_assoc();
}
?>

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
            <div class="index_conten_flex product_detail_01" data-sid="<?= $r['product_sid'] ?>">
                <!-- 左邊 -->
                <div class="product_detail_01_left flex">
                    <div class="product_detail_01_topic">
                        <h2 class="product_detail_01_h2"><?= $r['product_name'] ?></h2>
                        <div class="s_rate flex">
                            <h3 class="product_detail_01_h3">by <?= $r['designer'] ?>&nbsp;&nbsp;</h3>
                            <div class="s_star"></div>
                            <h4 class="product_detail_01_h4">&nbsp;&nbsp;5.0 (32筆評論)</h4>
                        </div>
                    </div>
                    <div class="product_detail_image">
                        <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
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
                        <h7 class="product_detail_01_h7">W: 200CM x H: 70CM X D: 100cm<br>混紡羊毛 60%<br>電鍍銅椅腳<br>奈米布料椅背</h7>
                    </div>
                    <div class="product_detail_01_price">
                        <h8 class="product_detail_01_h8"><span style="font-family: Georgia">$</span><?= $r['price']*0.85 ?><span style="font-size: 12px; color:#666; text-decoration: line-through"> <?= $r['price'] ?></span></h8>
                    </div>
                    <div class="product_detail_01_color">
                        <div class="choose_color color01 transition"></div>
                        <div class="choose_color color02 transition"></div>
                        <div class="choose_color color03 transition"></div>
                    </div>
                    <div class="product_detail_01_btns flex">
                        <div class="s_product_detail_01_num palette_select">
                                <select>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                            </div>
                        <button class="add_to_cart"><h5 class="product_detail_01_h5"><span style="font-family:'Noto Sans TC';line-height: 40px">加入購物車</span></h5></button>
                    </div>
                </div>
            </div>
        </section>
    </div>  
</div>