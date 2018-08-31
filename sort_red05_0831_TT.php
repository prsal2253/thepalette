<?php

require __DIR__ . '/__db_connect.php';

$pageName = 'product_list_red';

$build_query = [];

# 商品資料 begin>
$per_page = 16; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁
//intval取整數
$page1 = $page + 1;
$page2 = $page - 1;

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; //用戶要看的分類


$where = " WHERE `product_color_sid` BETWEEN 1 AND 3  ";
if ($cate == 1) {
    $where .= " AND `product_color_sid`BETWEEN 1 AND 3 ORDER BY `price` ASC ";
    $build_query['cate'] = $cate;
} elseif ($cate == 2) {
    $where .= " AND `product_color_sid`BETWEEN 1 AND 3 ORDER BY `price` DESC ";
    $build_query['cate'] = $cate;
} elseif ($cate == 3) {
    $where .= " AND `product_color_sid`BETWEEN 1 AND 3 ORDER BY `publish_date` ASC ";
    $build_query['cate'] = $cate;
} elseif ($cate == 4) {
    $where .= " AND `product_color_sid`BETWEEN 1 AND 3 ORDER BY `publish_date` DESC  ";
    $build_query['cate'] = $cate;
};

$total_sql = "SELECT COUNT(1) FROM `products_list` $where";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0]; //這邊拿到的是總筆數
$total_pages = ceil($total_rows / $per_page);


$product_sql = sprintf("SELECT * FROM  `products_list` $where LIMIT %s, %s ", ($page - 1) * $per_page, $per_page);
//這裡會拿到sql的字串
$product_rs = $mysqli->query($product_sql);

if (isset($_GET['sid'])) {
    $sql = sprintf('SELECT * FROM `products_list` WHERE 1 AND `product_sid`=' . $_GET['sid']);
    $rs = $mysqli->query($sql);
    $r = $rs->fetch_assoc();
    echo $_GET['sid'];
};



?>


<?php include 'page_item/head.php'; ?>
</head>
<!-- 依照頁面改ＩＤ -->
<body id="" class="">
<!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php'; ?>
</div>
<!-- main -->
<div class="index_main">

    <div id="sort_red05">
        <section style="background-color: #22394b;">
            <div class="index_conten_flex sort_red05">
                <ul class="sort_red05_sec1">
                    <a href="/">
                        <li class="sort_red05_filter transition">
                            <figure></figure>
                            商品篩選
                        </li>
                    </a>
                    <a href="?cate=1">
                        <li class="sort_red05_byprice transition">依價錢由少至多
                            <figure></figure>
                        </li>
                    </a>
                    <a href="?cate=2">
                        <li class="sort_red05_byprice transition">依價錢由多至少
                            <figure></figure>
                        </li>
                    </a>
                    <a href="?cate=3">
                        <li class="sort_red05_bytime transition">依上架順序由早到晚
                            <figure></figure>
                        </li>
                    </a>
                    <a href="?cate=4">
                        <li class="sort_red05_bytime transition">依上架順序由晚到早
                            <figure></figure>
                        </li>
                    </a>
                </ul>
                <div class="sort_red05_row flex">
                    <!-- 商品 -->
                    <!--                    --><?php //while ($r = $product_rs->fetch_assoc()): ?>
                    <!--                        <div name="product" class="sort_red05_box_s product_sid_data"-->
                    <!--                             data-sid="--><? //= $r['product_sid'] ?><!--">-->
                    <!--                            <img src="images/--><? //= $r['img'] ?><!--.png" alt="-->
                    <? //= $r['product_name'] ?><!--">-->
                    <!--                            <div class="product_mask transition">-->
                    <!--                                <div class="product_favorate transition"></div>-->
                    <!--                                <div class="product_name_nd_btn">-->
                    <!--                                    <div class="product_name">-->
                    <!--                                        <h3 class="product_name_h3"><a href="#"-->
                    <!--                                                                       id="product_name">-->
                    <? //= $r['product_name'] ?><!--</a>-->
                    <!--                                        </h3>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product_btn"></div>-->
                    <!--                                    <a href="product_quicklook.php?id=-->
                    <? //= $r['product_sid'] ?><!--"-->
                    <!--                                       class="palette_btn quick_look_palette_btn quick"-->
                    <!--                                       data-fancybox-->
                    <!--                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :-->
                    <!--                                   "70vh"}}}'>快速查看</a>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    --><?php //endwhile; ?>
                    <!-- 商品 end-->


                    <!--                -->
                    <?php while ($r = $product_rs->fetch_assoc()): ?>
                        <div name="product" class="sort_red05_box_s product_sid_data"
                             data-sid="<?= $r['product_sid'] ?>">
                            <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                            <div class="product_mask transition">
                                <div class="product_favorate transition"></div>
                                <div class="product_name_nd_btn">
                                    <div class="product_name">
                                        <h3 class="product_name_h3"><a href="#"
                                                                       id="product_name"><?= $r['product_name'] ?></a>
                                        </h3>
                                    </div>
                                    <div class="product_btn"></div>
                                    <a class="palette_btn quick_look_palette_btn box_open" data-fancybox data-src="#modal"
                                       data-box="<?= $r['product_sid'] ?>" class=" btn btn-primary">快速查看</a></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <!-- 頁碼 -->
                <div class="sort_red05_page">
                    <ul>
                        <a <?= $page == 1 ? "style='display: none'" : "href='?page=" . $page2 . "&" . http_build_query($build_query) . "'" ?>>
                            <!--                           接字串的方式 $page2是變數 前後加上. -->
                            <li class="page_prev">
                                <figure></figure>
                                PREV
                            </li>
                        </a>
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page p<?= $i == $page ? 'active' : '' ?>">
                                <a <?= $page == $i ? '' : "href='?page=" . $i . "&" . http_build_query($build_query) . "'" ?>>
                                    <p><?= $i ?></p></a>
                            </li>
                        <?php endfor ?>
                        <a <?= $page == $total_pages ? "style='display: none'" : "href='?page=" . $page1 . "&" . http_build_query($build_query) . "'" ?>>
                            <li class="page_next">
                                <figure></figure>
                                NEXT
                            </li>
                        </a>
                    </ul>
                </div>
                <!-- 頁碼end -->
                <!--                -->
                <div style="display: none;" id="modal">
                    <div id="product_quicklook">
                        <div class="">
                            <section class="">
                                <div class="product_quicklook_01 card" data-sid="<?= $r['product_sid'] ?>">
                                    <!-- 左邊 -->
                                    <div class="product_quicklook_01_left flex">
                                        <div class="product_quicklook_01_topic">
                                            <h2 class="product_quicklook_01_h2"><?= $r['product_name'] ?></h2>
                                            <div class="s_rate flex">
                                                <h3 class="product_quicklook_01_h3">by <?= $r['designer'] ?>
                                                    &nbsp;&nbsp;</h3>
                                                <div class="s_star"></div>
                                                <h4 class="product_quicklook_01_h4">&nbsp;&nbsp;5.0 (32筆評論)</h4>
                                            </div>
                                        </div>
                                        <div class="product_quicklook_image">
                                            <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                                        </div>
                                    </div>
                                    <!-- 右邊 -->
                                    <div class="flex product_quicklook_01_right">
                                        <div class="s_sale_01"><h5 class="product_quicklook_01_h5">週年慶期間滿兩件免費到府安裝</h5>
                                        </div>
                                        <div class="s_sale_02"><h5 class="product_quicklook_01_h5">國泰銀行刷卡分期免利息</h5>
                                        </div>
                                        <div class="product_quicklook_01_description">
                                            <h6 class="product_quicklook_01_h6">商品描述</h6>
                                            <h7 class="product_quicklook_01_h7">
                                                <?= $r['introduction'] ?><br><br>
                                            </h7>
                                        </div>
                                        <div class="product_quicklook_01_price">
                                            <h8 class="product_quicklook_01_h8"><span
                                                        style="font-family: Georgia">$<?= $r['price'] * 0.85 ?><span
                                                            style="font-size: 12px; color:#666; text-decoration: line-through"><?= $r['price'] ?></span>
                                            </h8>
                                        </div>
                                        <div class="product_quicklook_01_color">
                                            <div class="choose_color color01 transition"></div>
                                            <div class="choose_color color02 transition"></div>
                                            <div class="choose_color color03 transition"></div>
                                        </div>
                                        <div class="product_quicklook_01_btns flex">
                                            <select class="qty">
                                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php endfor ?>
                                            </select>
                                            <button class="add_to_cart"><h5 class="product_quicklook_01_h5"><span
                                                            style="font-family:'Noto Sans TC';line-height: 40px">加入購物車</span>
                                                </h5>
                                            </button>
                                        </div>
                                        <button class="ql_more"><a href="product_detail.php" target="_top"
                                                                   class="product_quicklook_01_h5">了解商品詳情</a></button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!--                -->
                <!--      php          -->
                <!--                <section class="">-->
                <!--                    <div class="product_quicklook_01 card" data-sid="-->
                <? //= $r['product_sid'] ?><!--">-->
                <!--                        <!-- 左邊 -->
                <!--                        <div class="product_quicklook_01_left flex">-->
                <!--                            <div class="product_quicklook_01_topic">-->
                <!--                                <h2 class="product_quicklook_01_h2">-->
                <? //= $r['product_name'] ?><!--</h2>-->
                <!--                                <div class="s_rate flex">-->
                <!--                                    <h3 class="product_quicklook_01_h3">by -->
                <? //= $r['designer'] ?><!--&nbsp;&nbsp;</h3>-->
                <!--                                    <div class="s_star"></div>-->
                <!--                                    <h4 class="product_quicklook_01_h4">&nbsp;&nbsp;5.0 (32筆評論)</h4>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                            <div class="product_quicklook_image">-->
                <!--                                <img src="images/--><? //= $r['img'] ?><!--.png" alt="-->
                <? //= $r['product_name'] ?><!--">-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <!-- 右邊 -->
                <!--                        <div class="flex product_quicklook_01_right">-->
                <!--                            <div class="s_sale_01"><h5 class="product_quicklook_01_h5">週年慶期間滿兩件免費到府安裝</h5></div>-->
                <!--                            <div class="s_sale_02"><h5 class="product_quicklook_01_h5">國泰銀行刷卡分期免利息</h5></div>-->
                <!--                            <div class="product_quicklook_01_description">-->
                <!--                                <h6 class="product_quicklook_01_h6">商品描述</h6>-->
                <!--                                <h7 class="product_quicklook_01_h7">-->
                <? //= $r['introduction'] ?><!--<br><br></h7>-->
                <!--                            </div>-->
                <!--                            <div class="product_quicklook_01_price">-->
                <!--                                <h8 class="product_quicklook_01_h8"><span style="font-family: Georgia">$</span>-->
                <? //= $r['price']*0.85 ?><!--<span style="font-size: 12px; color:#666; text-decoration: line-through">-->
                <? //= $r['price'] ?><!--</span></h8>-->
                <!--                            </div>-->
                <!--                            <div class="product_quicklook_01_color">-->
                <!--                                <div class="choose_color color01 transition"></div>-->
                <!--                                <div class="choose_color color02 transition"></div>-->
                <!--                                <div class="choose_color color03 transition"></div>-->
                <!--                            </div>-->
                <!--                            <div class="product_quicklook_01_btns flex">-->
                <!--                                <select class="qty">-->
                <!--                                    --><?php //for($i=1; $i<=5;$i++): ?>
                <!--                                        <option value="--><? //= $i ?><!--">-->
                <? //= $i ?><!--</option>-->
                <!--                                    --><?php //endfor ?>
                <!--                                </select>-->
                <!--                                <button class="add_to_cart"><h5 class="product_quicklook_01_h5"><span style="font-family:'Noto Sans TC';line-height: 40px">加入購物車</span></h5></button>-->
                <!--                            </div>-->
                <!--                            <button class="ql_more"><a href="product_detail.php" target="_top" class="product_quicklook_01_h5">了解商品詳情</a></button>-->
                <!--                            <!-- target屬性規定在何處打開連接文檔                       -->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </section>-->
                <!--                -->
            </div>
        </section>
    </div>
</div>
<script>
    $('.box_open').click(function () {
        var card = $(this).closest('.palette_btn');
        var sid = card.attr('data-box');
        console.log(`sid: ${sid}`);
        $.get('sort_red05_0829.php',{sid: sid},function () {
        },'json');
    });

    // 選擇購買顏色
    $(".choose_color").click(function () {
        $(this).css({
            "border": "3px solid #333",
            "border-radius": "50%"
        }).siblings().css("border", "");
    });
    //購物車功能
    $('.add_to_cart').click(function () {
        var card = $(this).closest('.card');
        var sid = card.attr('data-sid');
        var qty = card.find('.qty').val();
        console.log(`sid: ${sid}, qty: ${qty}`);

        $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
            //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)
            console.log(data);
            alert('商品已加入購物車囉！啾咪～');
            changeQty(data);
        }, 'json');
    });
</script>
<div class="index_footer">

    <?php include 'page_item/footer.php'; ?>
</div>
</body>
</html>