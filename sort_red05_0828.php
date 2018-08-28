<?php

require __DIR__ . '/__db_connect.php';

$pageName = 'product_list_red';

$m_rs = $mysqli->query("SELECT * FROM `products_list`");
$m_raw = [];
$m_ar = [];


# 商品資料 begin>
$per_page = 14; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; //用戶要看的分類

$where = " WHERE 1 ";
if (!empty($cate)) {
    $where .= " AND category_sid=$cate ";
    $params['cate'] = $cate;
}


$total_sql = "SELECT COUNT(1) FROM `products_list` WHERE `product_color_sid`BETWEEN 1 AND 3";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0]; //這邊拿到的是總筆數
$total_pages = ceil($total_rows / $per_page);


$product_sql = sprintf("SELECT * FROM  `products_list` $where LIMIT %s, %s ", ($page - 1) * $per_page, $per_page);
//這裡會拿到ＳＱＬ的字串
$product_rs = $mysqli->query($product_sql);
//


# 商品資料 end>

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
        <section>
            <div class="index_conten_flex sort_red05">
                <ul class="sort_red05_sec1">
                    <a href="/">
                        <li class="sort_red05_filter transition">
                            <figure></figure>
                            商品篩選
                        </li>
                    </a>
                    <a href="/">
                        <li class="sort_red05_byprice transition">依價錢
                            <figure></figure>
                        </li>
                    </a>
                    <a href="/">
                        <li class="sort_red05_bytime transition">依上架順序
                            <figure></figure>
                        </li>
                    </a>
                </ul>

                <div class="sort_red05_row flex">
<!--                    --><?php //while($r = $product_rs->fetch_assoc()): ?>
<!--                                        <div class="sort_red05_box_l" data-sid="--><?//= $r['product_sid'] ?><!--">-->
<!--                                            <img src="images/--><?//= $r['img'] ?><!--.png" alt="--><?//= $r['product_name'] ?><!--">-->
<!--                                            <div class="product_mask transition">-->
<!--                                                <div class="product_favorate transition"></div>-->
<!--                                                <div class="product_name_nd_btn">-->
<!--                                                    <div class="product_name">-->
<!--                                                        <h3 class="product_name_h3"><a href="#">--><?//= $r['product_name'] ?><!--</a></h3>-->
<!--                                                    </div>-->
<!--                                                    <div class="product_btn"></div>-->
<!--                                                    <a href="product_quicklook.html" class="palette_btn quick_look_palette_btn"-->
<!--                                                       data-fancybox  data-options='{"type" : "iframe", "iframe" : {"preload" :-->
<!--                                                       false, "css" : {"width" : "1000px","height" : "70vh"}}}'>快速查看</a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                    --><?php //endwhile; ?>
                    <?php while($r = $product_rs->fetch_assoc()): ?>
                    <div class="sort_red05_box_s" data-sid="<?= $r['product_sid'] ?>">
                        <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3"><a href="#"><?= $r['product_name'] ?></a></h3>
                                </div>
                                <div class="product_btn"></div>
                                <a href="product_quicklook.html" class="palette_btn quick_look_palette_btn"
                                   data-fancybox
                                   data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <!-- 頁碼 -->
                <div class="sort_red05_page">
                    <ul>
                        <a href="/">
                            <li class="page_prev">
                                <figure></figure>
                                PREV
                            </li>
                        </a>
                        <a href="/">
                            <li class="page p1"> 1</li>
                        </a>
                        <a href="/">
                            <li class="page p2"> 2</li>
                        </a>
                        <a href="/">
                            <li class="page p3"> 3</li>
                        </a>
                        <a href="/">
                            <li class="page_next">
                                <figure></figure>
                                NEXT
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- footer -->
<div class="index_footer">
    <?php include 'page_item/footer.php'; ?>
</div>
</body>
</html>