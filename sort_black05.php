<?php

//require __DIR__ . '/__db_connect.php';
$mysqli = new mysqli('localhost', 'orange', '0987', 'the palette');
//$mysqli = new mysqli('localhost', 'sandra', 'ssan+1222', 'the palette');
$mysqli->query("SET NAMES utf8");
$pageName = 'product_list_red';

$build_query = [];

# 商品資料 begin>
$per_page = 16; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁
//intval取整數
$page1 = $page + 1;
$page2 = $page - 1;

$build_query = $_GET;

$color = isset($_GET['color']) ? $_GET['color'] : 0; //顏色
$items = isset($_GET['items']) ? $_GET['items'] : 0;//種類
$long = isset($_GET['long']) ? intval($_GET['long']) : 0;//寬度
$high = isset($_GET['high']) ? intval($_GET['high']) : 0;//高度
$price = isset($_GET['price']) ? intval($_GET['price']) : 0; //時間價格

$where = " WHERE `product_color_sid` BETWEEN 7 AND 9 ";

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

} elseif ($price == 2) {
    $where .= "  ORDER BY `price` DESC  ";

}elseif ($price == 3) {
    $where .= "  ORDER BY `publish_date` ASC  ";

}elseif ($price == 4) {
    $where .= "  ORDER BY `publish_date` DESC  ";

}


$total_sql = "SELECT COUNT(1) FROM `products_list` $where";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0]; //這邊拿到的是總筆數
$total_pages = ceil($total_rows / $per_page);


$product_sql = sprintf("SELECT * FROM  `products_list` $where LIMIT %s, %s ", ($page - 1) * $per_page, $per_page);

//echo $product_sql; exit;
//這裡會拿到sql的字串
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
<div id="sort_red05 ">
    <section id="my_red">
        <div class="index_conten_flex sort_red05">
            <div class="index_conten_flex filter" style="z-index:2">
                <ul class="filter_sec1">
                    <li class="filter_filter transition">
                        <figure></figure>
                        商品篩選
                    </li>
                    <select class="filter_byprice transition price_select" data-price="">
                        <div class="s_product_detail_01_num palette_select">
                            <option value="1">依價錢由低到高</option>
                            <option value="2">依價錢由高到低</option>
                            <option value="3">依上架順序由舊到新</option>
                            <option value="4">依上架順序由新到舊</option>
                        </div>
                    </select>
                </ul>
            </div>
            <div class="index_conten_flex filter_inner transition total_change">
                <div class="filter_color flex">
                    <div class="filter_color_in" style="margin-left: 0">
                        <div class="filter_color7 filter_color_box" data-color="black"></div>
                        <p>黑色</p>
                    </div>
                    <div class="filter_color_in">
                        <div class="filter_color8 filter_color_box" data-color="white"></div>
                        <p>白色</p>
                    </div>
                    <div class="filter_color_in">
                        <div class="filter_color9 filter_color_box" data-color="gray"></div>
                        <p>灰色</p>
                    </div>
                </div>
                <ul class="filter_item flex">
                    <li class="filter_item01 filter_items transition" data-category="chair">
                        <figure></figure>
                        <p>椅子</p></li>
                    <li class="filter_item02 filter_items transition" data-category="table">
                        <figure></figure>
                        <p>桌子</p></li>
                    <li class="filter_item03 filter_items transition" data-category="sofa">
                        <figure></figure>
                        <p>沙發</p></li>
                    <li class="filter_item04 filter_items transition" data-category="box">
                        <figure></figure>
                        <p>櫃子</p></li>
                    <li class="filter_item05 filter_items transition" data-category="light">
                        <figure></figure>
                        <p>燈飾</p></li>
                    <li class="filter_item06 filter_items transition" data-category="other" style="margin: 50px 0 0 0">
                        <figure></figure>
                        <p>其他</p></li>
                </ul>
                <div class="filter_sbar flex">
                    <div class="filter_sbar1">
                        <!--寬度-->
                        <input id="range" type="range" min="50" max="150" value="150" step="50" oninput="change()"
                               onchange="change()" class="slider slider_hight">
                        <div class="sbar1_txt">
                            家具高度 :
                            <span id="value">150</span> cm
                        </div>
                    </div>
                    <div class="filter_sbar2">
                        <!--高度-->
                        <input id="range2" type="range" min="50" max="150" value="150" step="50" oninput="change2()"
                               onchange="change2()" class="slider slider_long">
                        <div class="sbar1_txt">
                            家具寬度 :
                            <span id="value2">150</span> cm
                        </div>
                    </div>
                </div>
            </div>



        <div class="addall">
            <div class="sort_red05_row flex">
                <?php while ($r = $product_rs->fetch_assoc()): ?>
                    <div name="product" class="sort_red05_box_s product_sid_data product-item" data-sid="<?= $r['product_sid'] ?>">
                        <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                        <div class="product_mask transition">
                            <div class="product_favorate
                             <?= $data_fa[$r['product_sid']] == $r['product_sid']  ? 'icon_love_click' : '' ?>

                             transition"></div>
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
                    <a <?= $page == 1 ? "style='display: none'" : ' href="javascript:changePage('. $page1. ')" '?>>
                        <!--                           接字串的方式 $page2是變數 前後加上. -->
                        <li class="page_prev">
                            <figure></figure>
                            PREV
                        </li>
                    </a>
                    <?php for ($i = 1; $i <= $total_pages; $i++):
                        $build_query['page'] = $i;

                        ?>
                        <li class="page p<?= $i == $page ? 'active' : '' ?>">
                            <a <?= $page == $i ? '' : ' href="javascript:changePage('. $i. ')" ' ?>>
                                <p><?= $i ?></p></a>
                        </li>
                    <?php endfor ?>
                    <a <?= $page == $total_pages ? "style='display: none'" : ' href="javascript:changePage('. $page2. ')" ' ?>>
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
<!-- ＪＱ -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script>

    // filter
    // 選擇顏色
    $(".filter_color_box").click(function () {
        $(this).toggleClass("toggle_color");
    });

    $(".filter_filter").click(function () {
        $(".filter_inner").toggleClass("filter_open")
    })
    //選品項
    $(".filter_items").click(function () {
        $(this).toggleClass("item_choose");
    })

    //顯示range的值
    function change() {
        var value = document.getElementById('range').value;
        document.getElementById('value').innerHTML = value;
        console.log("#value");
    }

    function change2() {
        var value = document.getElementById('range2').value;
        document.getElementById('value2').innerHTML = value;
        console.log("#value");
    }


    //--------------------------




    // var total_change = $('.total_change');

    var color_change = $('.total_change .filter_color_box');
    var items_change = $('.total_change .filter_items');
    var setHigh_change = $('.slider_hight');
    var setLong_change = $('.slider_long')

    var D_color = {black: 0, white: 0, gray: 0},
        D_items  = {},
        D_setHigh = 0,
        D_setLong = 0,
        D_price = 0;

    color_change.click(function () {
        color_change.each(function () {
            if ($(this).hasClass('toggle_color')) {
                D_color[ $(this).attr('data-color') ] = 1;
            } else {
                D_color[ $(this).attr('data-color') ] = 0;
            }
        });
        console.log(D_color);
        get_select_data();

    });
    items_change.click(function () {
        items_change.each(function () {
            if ($(this).hasClass('item_choose')) {
                D_items[ $(this).attr('data-category') ] = 1;
            } else {
                D_items[ $(this).attr('data-category') ] = 0;
            }
        });
        console.log(D_items);
        get_select_data();
    });

    var high_select = 0;
    setHigh_change.change(function () {
        high_select = setHigh_change.val();
        D_setHigh = high_select;
        console.log(high_select);
        get_select_data();
    });
    var long_select = 0;
    setLong_change.change(function () {
        long_select = setLong_change.val();
        D_setLong = long_select;
        console.log(long_select);
        get_select_data();
    });


    var price_select = 0;
    $('.price_select').change(function () {
        price_select = $('.price_select').val();
        D_price = price_select;
        console.log(price_select);
        get_select_data();

    });



    var color_map = {
        black: 7,
        white: 8,
        gray: 9
    };

    var item_map = {
        chair: 1,
        table: 2,
        sofa: 3,
        box: 4,
        light: 5,
        other: 6
    };



    function get_select_data(p){
        var page = p || 1;
        var color = [],
            items = [],
            s, i;
        for(s in D_color){
            if(D_color[s]==1) {
                color.push(color_map[s]);
            }
        }
        for(s in D_items){
            if(D_items[s]==1) {
                items.push(item_map[s]);
            }
        }
        $.get('sort_black_api.php', {
            page: page,
            color: color.join(','),
            items: items.join(','),
            high:D_setHigh,
            long:D_setLong,
            price:D_price
        }, function (data) {
            $('.addall').html(data);
        });
    }

    get_select_data()

    // 最愛

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

    var changePage = function(page){
        window.parent.get_select_data(page);


    };






</script>

</div>
</body>
</html>