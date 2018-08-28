<?php

require __DIR__ . '/__db_connect.php';

$pageName = 'product_list_red';

$build_query = [];

# 商品資料 begin>
$per_page = 14; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁
$page1 = $page+1;
$page2 = $page-1;
//$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; //用戶要看的分類

//$where = " WHERE 1 ";
//if (!empty($cate)) {
//    $where .= " AND product_color_sid=$cate ";
//    $params['cate'] = $cate;
//}

//$price_sql = "SELECT * FROM `products_list`WHERE `product_color_sid` BETWEEN 1 AND 3 ORDER BY `price` ASC ";
//$price_rs = $mysqli->query($price_sql);

$where = " WHERE `product_color_sid` BETWEEN 1 AND 3 ";


$total_sql = "SELECT COUNT(1) FROM `products_list` $where ";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0]; //這邊拿到的是總筆數
$total_pages = ceil($total_rows / $per_page);


$product_sql = sprintf("SELECT * FROM  `products_list` $where LIMIT %s, %s ", ($page - 1) * $per_page, $per_page);
//這裡會拿到ＳＱＬ的字串
$product_rs = $mysqli->query($product_sql);

//$p_big = [];
//$p_small = [];
//
//while($r = $product_rs->fetch_assoc()){
//
//    if($r['BIG']==1){
//        $p_big[] = $r;
//    } else {
//        $p_small[] = $r;
//    }
//
//}

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
<!--                    --><?php //if((isset($p_big))):?>
                    <?php while($r = $product_rs->fetch_assoc()): ?>
                    <div name="product" class="sort_red05_box_s" data-sid="<?= $r['product_sid'] ?>">
                        <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                        <div class="product_mask transition">
                            <div class="product_favorate transition"></div>
                            <div class="product_name_nd_btn">
                                <div class="product_name">
                                    <h3 class="product_name_h3"><a href="#"><?= $r['product_name'] ?></a></h3>
                                </div>
                                <div class="product_btn"></div>
                                <a href="product_quicklook.php"  class="palette_btn quick_look_palette_btn"
                                   data-fancybox
                                   data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
<!--                    --><?php //endif ?>
<!--                    <div class="sort_red05_box_l">-->
<!--                        <img src="images/S-red-chair-06.png" alt="商品名稱">-->
<!--                        <div class="product_mask transition">-->
<!--                            <div class="product_favorate transition"></div>-->
<!--                            <div class="product_name_nd_btn">-->
<!--                                <div class="product_name">-->
<!--                                    <h3 class="product_name_h3"><a href="#">Arch Zen Chair</a></h3>-->
<!--                                </div>-->
<!--                                <div class="product_btn"></div>-->
<!--                                <a href="product_quicklook.html" class="palette_btn quick_look_palette_btn" data-fancybox data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" : "70vh"}}}'>快速查看</a>                                </div>-->
<!--                        </div>-->
                </div>
                <!-- 頁碼 -->
                <div class="sort_red05_page">
                    <ul>
                        <a <?= $page==1 ? '' : "href='?page=$page2'" ?><?= http_build_query($build_query) ?>">
                            <li class="page_prev">
                                <figure></figure>
                                PREV
                            </li>
                        </a>
                        <?php for($i=1; $i<=$total_pages; $i++): ?>
                            <li class="page p<?= $i==$page ? 'active' : '' ?>">
                                <a <?= $page == $i ? '' : "href='?page=$i'"?>><?= $i ?></a>
                            </li>
                        <?php endfor ?>
                        <a <?= $page==$total_pages ? '' : "href='?page=$page1'" ?><?= http_build_query($build_query) ?>">
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
<script>
    // console.log($(document.product).serialize());
    // $('.palette_btn').click(function () {
    //     $.post('product_quicklook.php',$(document.product).serialize())
    // };

</script>
<!-- footer -->
<div class="index_footer">
    <?php include 'page_item/footer.php'; ?>
</div>
</body>
</html>