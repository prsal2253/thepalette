<?php
if(! isset($_SESSION)){
    session_start();
}
//require __DIR__ . '/__db_connect.php';
$mysqli = new mysqli('localhost', 'orange', '0987', 'the palette');

$mysqli->query("SET NAMES utf8");


$pageName = 'product_list_red';

$build_query = $_GET;

# 商品資料 begin>
$per_page = 16; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁
//intval取整數
$page1 = $page + 1;
$page2 = $page - 1;


$color = isset($_GET['color']) ? $_GET['color'] : 0; //顏色
$items = isset($_GET['items']) ? $_GET['items'] : 0;//種類
$long = isset($_GET['long']) ? intval($_GET['long']) : 0;//寬度
$high = isset($_GET['high']) ? intval($_GET['high']) : 0;//高度
$price = isset($_GET['price']) ? intval($_GET['price']) : 0; //時間價格

$where = " WHERE `product_color_sid` IN(3,6,10) ";

if(!empty($color)){
    $c = explode(',', $color);
    $color_condition = ' AND (product_color_sid='. implode(' OR product_color_sid=', $c) . ')';
    // 2 OR product_color_sid=3
    $where .= $color_condition;
}

if(!empty($items)){
    $i = explode(',', $items);
    $items_condition = ' AND (category_sid='. implode(' OR category_sid=', $i) . ')';
    $where .= $items_condition;
}

if ($long == 50) {
    $where .= " AND `size_sid_w`=1";

} elseif ($long == 100) {
    $where .= " AND `size_sid_w`=2";

} elseif ($long == 150) {
    $where .= " AND `size_sid_w`=3";

}

if ($high == 50) {
    $where .= " AND `size_sid_h`=1";

} elseif ($high == 100) {
    $where .= " AND `size_sid_h`=2";

} elseif ($high == 150) {
    $where .= " AND `size_sid_h`=3";

}


if ($price == 1) {
    $where .= " ORDER BY `price` ASC ";
    $build_query['price'] = $price;
} elseif ($price == 2) {
    $where .= "  ORDER BY `price` DESC  ";
    $build_query['price'] = $price;
}elseif ($price == 3) {
    $where .= "  ORDER BY `publish_date` ASC  ";
    $build_query['price'] = $price;
}elseif ($price == 4) {
    $where .= "  ORDER BY `publish_date` DESC  ";
    $build_query['price'] = $price;
}


$total_sql = "SELECT COUNT(1) FROM `products_list` $where";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0]; //這邊拿到的是總筆數
$total_pages = ceil($total_rows / $per_page);


$product_sql = sprintf("SELECT * FROM  `products_list` $where LIMIT %s, %s ", ($page - 1) * $per_page, $per_page);
//這裡會拿到sql的字串
//echo $product_sql; exit;

$product_rs = $mysqli->query($product_sql);

if (isset ($_SESSION['user'])) {
    $data_fa = [];
    $sql_love = 'SELECT * FROM `members_favourite` WHERE `member_sid`=' . $_SESSION['user']['member_sid'];
    $rs_love = $mysqli->query($sql_love);

    while ($r_love = $rs_love->fetch_assoc()) {
        //    這裡迴圈先一一取出$rs_love陣列
        $data_fa[$r_love['product_sid']] = $r_love['product_sid'];
//以'product_sid'自己當作key對應'product_sid'的val
    }
}
?>
<?php if (!empty($total_rows)): ?>
    <div class="sort_red05_row flex">
        <?php while ($r = $product_rs->fetch_assoc()): ?>
            <div name="product" class="sort_red05_box_s product_sid_data product-item"
                 data-sid="<?= $r['product_sid'] ?>">
                <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                <div class="product_mask transition">
                    <div class="product_favorate <?= $data_fa[$r['product_sid']] == $r['product_sid'] ? 'icon_love_click' : '' ?> transition"></div>
                    <div class="product_name_nd_btn">
                        <div class="product_name">
                            <h3 class="product_name_h3"><a href="#"
                                                           id="product_name"><?= $r['product_name'] ?></a></h3>
                        </div>
                        <div class="product_btn"></div>
                        <a href="product_quicklook.php?id=<?= $r['product_sid'] ?>"
                           class="palette_btn quick_look_palette_btn quick"
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
            <?php for ($i = 1; $i <= $total_pages; $i++):
                $build_query['page'] = $i;

                ?>
                <li class="page p<?= $i == $page ? 'active' : '' ?>">
                    <a <?= $page == $i ? '' : ' href="javascript:changePage(' . $i . ')" ' ?>>
                        <p><?= $i ?></p></a>
                </li>
            <?php endfor ?>
        </ul>
    </div>
<?php else: ?>
    <div style="height: 500px; background-color: #ffffff;">
        <p style="     text-align: center;
padding: 200px 0 ;
         color: #000;
         font-size: 25px;
         font-family: 'SourceHanSerifTC-SemiBold';
    line-height: 30px;
    margin: 0 auto;">沒有任何商品，請重新篩選</p>
    </div>
<?php endif; ?>

<script>
    var changePage = function (page) {
        window.parent.get_select_data(page);


    };
    $(".product_favorate").click(function (data) {
        <?php if (isset ($_SESSION['user'])):?>
        if ($(this).hasClass('icon_love_click')) {
            $(this).removeClass("icon_love_click");
            var product = $(this).closest('.product-item');
            var sid = product.attr('data-sid');
            $.get('unlove_api.php', {sid: sid}, function (data) {
                //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)
                if (data.success) {
                    console.log(data);
                    alert('商品已從追蹤清單刪除！');


                } else {
                    alert('你登入了嗎？');
                    $(this).removeClass("icon_love_click");

                }
                ;

            }, 'json');
        } else {
            $(this).addClass("icon_love_click");
            var product = $(this).closest('.product-item');
            var sid = product.attr('data-sid');
            $.get('love_api.php', {sid: sid}, function (data) {
                //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)

                if (data.success) {
                    console.log(data);
                    alert('商品已加入追蹤清單！');

                } else {

                    alert('你登入了嗎？');
                    $(this).addClass("icon_love_click");

                }
                ;

            }, 'json');
        }
        <?php else:?>
        alert('你登入了嗎？');
        <?php endif;?>
    });
</script>