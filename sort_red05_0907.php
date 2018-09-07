<?php

//require __DIR__ . '/__db_connect.php';
$mysqli = new mysqli('localhost','orange','0987','the palette');
// $mysqli = new mysqli('localhost', 'sandra', 'ssan+1222', 'the palette');
$mysqli->query("SET NAMES utf8");


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


?>
    <div id="sort_red05">
        <section>
            <div class="index_conten_flex sort_red05">
                <div class="index_conten_flex filter">
                    <ul class="filter_sec1">
                        <li class="filter_filter transition">
                            <figure></figure>商品篩選</li>
                        <select class="filter_byprice transition">依價錢
                            <div class="s_product_detail_01_num palette_select">
                                <a href="?cate=1"><option>由高到低</option></a>
                                <a href="?cate=2"><option>由低到高</option></a>
                            </div>
                        </select>
                        <select class="filter_byprice transition">依上架順序
                            <div class="s_product_detail_01_num palette_select">
                                <a href="?cate=3"><option>由新到舊</option></a>
                                <a href="?cate=4"><option>由舊到新</option></a>
                            </div>
                        </select>
                    </ul>
                </div>
                <div class="index_conten_flex filter_inner transition">
                    <div class="filter_color flex">
                        <div class="filter_color_in" style="margin-left: 0">
                            <div class="filter_color1 filter_color_box"></div>
                            <p>紅色</p>
                        </div>
                        <div class="filter_color_in">
                            <div class="filter_color2 filter_color_box"></div>
                            <p>粉色</p>
                        </div>
                        <div class="filter_color_in">
                            <div class="filter_color3 filter_color_box"></div>
                            <p>橘色</p>
                        </div>
                    </div>
                    <ul class="filter_item flex">
                        <li class="filter_item01 filter_items transition"><figure></figure><p>椅子</p></li>
                        <li class="filter_item02 filter_items transition"><figure></figure><p>桌子</p></li>
                        <li class="filter_item03 filter_items transition"><figure></figure><p>沙發</p></li>
                        <li class="filter_item04 filter_items transition"><figure></figure><p>櫃子</p></li>
                        <li class="filter_item05 filter_items transition"><figure></figure><p>燈飾</p></li>
                        <li class="filter_item06 filter_items transition" style="margin: 50px 0 0 0"><figure></figure><p>織品</p></li>
                    </ul>
                    <div class="filter_sbar flex">
                        <div class="filter_sbar1">
                            <!--寬度-->
                            <input id="range" type="range" min="0" max="150" value="0" step="50" oninput="change()" onchange="change()" class="slider">
                            <div class="sbar1_txt">
                                家具長度 :
                                <span id="value">0</span> cm
                            </div>
                        </div>
                        <div class="filter_sbar2">
                            <!--高度-->
                            <input id="range2" type="range" min="0" max="150" value="0" step="50" oninput="change2()" onchange="change2()" class="slider">
                            <div class="sbar1_txt">
                                家具寬度 :
                                <span id="value2">0</span> cm
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sort_red05_row flex">
                    <?php while($r = $product_rs->fetch_assoc()): ?>
                        <div name="product" class="sort_red05_box_s product_sid_data" data-sid="<?= $r['product_sid'] ?>">
                            <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                            <div class="product_mask transition">
                                <div class="product_favorate transition"></div>
                                <div class="product_name_nd_btn">
                                    <div class="product_name">
                                        <h3 class="product_name_h3"><a href="#" id="product_name"><?= $r['product_name'] ?></a></h3>
                                    </div>
                                    <div class="product_btn"></div>
                                    <a href="product_quicklook.php?id=<?= $r['product_sid'] ?>" class="palette_btn quick_look_palette_btn quick"
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

<div class="index_footer">

</div>
</body>
</html>