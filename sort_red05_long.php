<?php

require __DIR__ . '/__db_connect.php';

$pageName = 'product_list_red';

$build_query = [];

# 商品資料 begin>
$per_page = 16; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁
//intval取整數
$page1 = $page+1;
$page2 = $page-1;

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; //用戶要看的分類



$where = " WHERE `product_color_sid` BETWEEN 1 AND 3  ";
if($cate==1) {
    $where .= " AND `product_color_sid`BETWEEN 1 AND 3 ORDER BY `price` ASC ";
    $build_query['cate'] = $cate;
}elseif ($cate==2){
    $where .= " AND `product_color_sid`BETWEEN 1 AND 3 ORDER BY `price` DESC ";
    $build_query['cate'] = $cate;
}
elseif ($cate==3){
    $where .= " AND `product_color_sid`BETWEEN 1 AND 3 ORDER BY `publish_date` ASC ";
    $build_query['cate'] = $cate;
}
elseif ($cate==4){
    $where .= " AND `product_color_sid`BETWEEN 1 AND 3 ORDER BY `publish_date` DESC  ";
    $build_query['cate'] = $cate;
}

$total_sql = "SELECT COUNT(1) FROM `products_list` $where";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0]; //這邊拿到的是總筆數
$total_pages = ceil($total_rows / $per_page);


$product_sql = sprintf("SELECT * FROM  `products_list` $where LIMIT %s, %s ", ($page - 1) * $per_page, $per_page);
//這裡會拿到sql的字串
$product_rs = $mysqli->query($product_sql);

$p_big = [];
$p_small = [];

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

//print_r($p_big);
//print_r($p_small);
//
//exit;

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
                                    <a href="product_quicklook.php?id=<?= $r['product_sid'] ?>"  class="palette_btn quick_look_palette_btn"
                                       data-fancybox
                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
<!--                    --><?php
//                    $b_num = count($p_big);
//                    ?>
<!--                    --><?php //if($b_num==2): ?>
<!--                        --><?php //foreach($p_small as $r): ?>
<!--                            <div name="product" class="sort_red05_box_s" data-sid="--><?//= $r['product_sid'] ?><!--">-->
<!--                                <img src="images/--><?//= $r['img'] ?><!--.png" alt="--><?//= $r['product_name'] ?><!--">-->
<!--                                <div class="product_mask transition">-->
<!--                                    <div class="product_favorate transition"></div>-->
<!--                                    <div class="product_name_nd_btn">-->
<!--                                        <div class="product_name">-->
<!--                                            <h3 class="product_name_h3"><a href="#">--><?//= $r['product_name'] ?><!--</a></h3>-->
<!--                                        </div>-->
<!--                                        <div class="product_btn"></div>-->
<!--                                        <a href="product_quicklook.php?id=--><?//= $r['product_sid'] ?><!--"  class="palette_btn quick_look_palette_btn"-->
<!--                                           data-fancybox-->
<!--                                           data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :-->
<!--                                   "70vh"}}}'>快速查看</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //endforeach; ?>
<!---->
<!--                    --><?php //endif ?>
<!--                    --><?php //if($b_num==1):
//                        $r = $p_big[0];
//                        ?>
<!--                        <div name="product" class="sort_red05_box_l" data-sid="--><?//= $r['product_sid'] ?><!--">-->
<!--                            <img src="images/--><?//= $r['img'] ?><!--.png" alt="--><?//= $r['product_name'] ?><!--">-->
<!--                            <div class="product_mask transition">-->
<!--                                <div class="product_favorate transition"></div>-->
<!--                                <div class="product_name_nd_btn">-->
<!--                                    <div class="product_name">-->
<!--                                        <h3 class="product_name_h3"><a href="#">--><?//= $r['product_name'] ?><!--</a></h3>-->
<!--                                    </div>-->
<!--                                    <div class="product_btn"></div>-->
<!--                                    <a href="product_quicklook.php?id=--><?//= $r['product_sid'] ?><!--"  class="palette_btn quick_look_palette_btn"-->
<!--                                       data-fancybox-->
<!--                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :-->
<!--                                   "70vh"}}}'>快速查看</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        --><?php //foreach($p_small as $r): ?>
<!--                        <div name="product" class="sort_red05_box_s" data-sid="--><?//= $r['product_sid'] ?><!--">-->
<!--                            <img src="images/--><?//= $r['img'] ?><!--.png" alt="--><?//= $r['product_name'] ?><!--">-->
<!--                            <div class="product_mask transition">-->
<!--                                <div class="product_favorate transition"></div>-->
<!--                                <div class="product_name_nd_btn">-->
<!--                                    <div class="product_name">-->
<!--                                        <h3 class="product_name_h3"><a href="#">--><?//= $r['product_name'] ?><!--</a></h3>-->
<!--                                    </div>-->
<!--                                    <div class="product_btn"></div>-->
<!--                                    <a href="product_quicklook.php?id=--><?//= $r['product_sid'] ?><!--"  class="palette_btn quick_look_palette_btn"-->
<!--                                       data-fancybox-->
<!--                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :-->
<!--                                   "70vh"}}}'>快速查看</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        --><?php //endforeach; ?>
<!--                    --><?php //endif ?>
<!--                    --><?php //if($b_num==1):
//                        $r = $p_big[0];
//                        ?>
<!--                        <div name="product" class="sort_red05_box_l" data-sid="--><?//= $r['product_sid'] ?><!--">-->
<!--                            <img src="images/--><?//= $r['img'] ?><!--.png" alt="--><?//= $r['product_name'] ?><!--">-->
<!--                            <div class="product_mask transition">-->
<!--                                <div class="product_favorate transition"></div>-->
<!--                                <div class="product_name_nd_btn">-->
<!--                                    <div class="product_name">-->
<!--                                        <h3 class="product_name_h3"><a href="#">--><?//= $r['product_name'] ?><!--</a></h3>-->
<!--                                    </div>-->
<!--                                    <div class="product_btn"></div>-->
<!--                                    <a href="product_quicklook.php?id=--><?//= $r['product_sid'] ?><!--"  class="palette_btn quick_look_palette_btn"-->
<!--                                       data-fancybox-->
<!--                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :-->
<!--                                   "70vh"}}}'>快速查看</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--<!--                    -->--><?php ////$r = $p_small[0];?>
<!--                    --><?php //for ($r=1;$r<=8;$r++):?>
<!--                        <div name="product" class="sort_red05_box_s" data-sid="--><?//= $r['product_sid'] ?><!--">-->
<!--                            <img src="images/--><?//= $r['img'] ?><!--.png" alt="--><?//= $r['product_name'] ?><!--">-->
<!--                            <div class="product_mask transition">-->
<!--                                <div class="product_favorate transition"></div>-->
<!--                                <div class="product_name_nd_btn">-->
<!--                                    <div class="product_name">-->
<!--                                        <h3 class="product_name_h3"><a href="#">--><?//= $r['product_name'] ?><!--</a></h3>-->
<!--                                    </div>-->
<!--                                    <div class="product_btn"></div>-->
<!--                                    <a href="product_quicklook.php?id=--><?//= $r['product_sid'] ?><!--"  class="palette_btn quick_look_palette_btn"-->
<!--                                       data-fancybox-->
<!--                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :-->
<!--                                   "70vh"}}}'>快速查看</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //print_r($p_small) ?>
<!--                    --><?php //endfor; ?>
<!--                --><?php
//                    $r = $p_big[1];
//                    ?>
<!--                    <div name="product" class="sort_red05_box_l" data-sid="--><?//= $r['product_sid'] ?><!--">-->
<!--                        <img src="images/--><?//= $r['img'] ?><!--.png" alt="--><?//= $r['product_name'] ?><!--">-->
<!--                        <div class="product_mask transition">-->
<!--                            <div class="product_favorate transition"></div>-->
<!--                            <div class="product_name_nd_btn">-->
<!--                                <div class="product_name">-->
<!--                                    <h3 class="product_name_h3"><a href="#">--><?//= $r['product_name'] ?><!--</a></h3>-->
<!--                                </div>-->
<!--                                <div class="product_btn"></div>-->
<!--                                <a href="product_quicklook.php?id=--><?//= $r['product_sid'] ?><!--"  class="palette_btn quick_look_palette_btn"-->
<!--                                   data-fancybox-->
<!--                                   data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :-->
<!--                                   "70vh"}}}'>快速查看</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                        --><?php //for ($r=1;$r<=4;$r++):?>
<!--                        <div name="product" class="sort_red05_box_s" data-sid="--><?//= $r['product_sid'] ?><!--">-->
<!--                            <img src="images/--><?//= $r['img'] ?><!--.png" alt="--><?//= $r['product_name'] ?><!--">-->
<!--                            <div class="product_mask transition">-->
<!--                                <div class="product_favorate transition"></div>-->
<!--                                <div class="product_name_nd_btn">-->
<!--                                    <div class="product_name">-->
<!--                                        <h3 class="product_name_h3"><a href="#">--><?//= $r['product_name'] ?><!--</a></h3>-->
<!--                                    </div>-->
<!--                                    <div class="product_btn"></div>-->
<!--                                    <a href="product_quicklook.php?id=--><?//= $r['product_sid'] ?><!--"  class="palette_btn quick_look_palette_btn"-->
<!--                                       data-fancybox-->
<!--                                       data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :-->
<!--                                   "70vh"}}}'>快速查看</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //endfor; ?>
<!--                    --><?php //endif ?>
                </div>
                <!-- 頁碼 -->
                <div class="sort_red05_page">
                    <ul>
                        <a <?= $page==1 ? "style='display: none'" : "href='?page=".$page2."&".http_build_query($build_query)."'"?>>
<!--                           接字串的方式 $page2是變數 前後加上. -->
                            <li class="page_prev">
                                <figure></figure>
                                PREV
                            </li>
                        </a>
                        <?php for($i=1; $i<=$total_pages; $i++): ?>
                            <li class="page p<?= $i==$page ? 'active' : '' ?>">
                                <a <?= $page == $i ? '' : "href='?page=".$i."&".http_build_query($build_query)."'" ?>><p><?= $i ?></p></a>
                            </li>
                        <?php endfor ?>
                        <a <?= $page==$total_pages ? "style='display: none'" : "href='?page=".$page1."&".http_build_query($build_query)."'" ?>>
                            <li class="page_next" >
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