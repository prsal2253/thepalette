<?php

require __DIR__ . '/__db_connect.php';

$data_fa = [];
$data_ar = [];
if (isset($_SESSION['user'])){

    $sql_fa = 'SELECT * FROM `members_favourite` WHERE `member_sid`=' . $_SESSION['user']['member_sid'];
    $rs_fa = $mysqli->query($sql_fa);

    while ($r_fa = $rs_fa->fetch_assoc()) {
        $data_fa[] = $r_fa['product_sid'];

    }
if(!empty($data_fa)){
    $sql2 = sprintf("SELECT * FROM `products_list` WHERE `product_sid` IN (%s)", implode(',', $data_fa));
    $rs2 = $mysqli->query($sql2);
    while ($r2 = $rs2->fetch_assoc()) {
        $data_ar[] = $r2;
    }
}


    $sql3 = sprintf("SELECT `product_color_sid`, `color` FROM `products_color_sid` WHERE 1");
    $rs3 = $mysqli->query($sql3);

    $c_ar = [];

    while ($c = $rs3->fetch_assoc()) {

        $c_ar[$c['product_color_sid']] = $c['color'];
    }


}

?>
<?php include 'page_item/head.php'; ?>
</head>
<body id="member" class="favorite_list">
<div class="index_top">
    <?php include 'page_item/header.php'; ?>
</div>
<div class="index_main">
    <!-- 麵包屑 -->
    <section class="bread_crumbs">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">member</a></li>
            <li>order</li>
        </ul>
    </section>
    <section>
        <div class="index_conten_flex">
            <div class="index_conten_l">
                <div class="item_01">
                    <div class="item_01menu"><a href="order_list.php"><h6 class="transition">訂單列表</h6><span
                                    class="transition">Order List</span></a></div>
                    <div class="item_01menu "><a href="member_profile.php"><h6 class="transition">會員資料</h6><span
                                    class="transition">member profile</span></a></div>
                    <div class="item_01menu item_01menu_in"><h6 class="transition">追蹤清單</h6><span class="transition">my favourite</span>
                    </div>
                </div>
            </div>
            <div class="index_conten_r">
                <div class="member_title"><h2>my favourite</h2><span>追蹤清單</span></div>
                <div class="member_conten">
                    <div class="item_02 item_03 item_04">
                        <!-- top -->
                        <div class="item_02_conten">
                            <p class="description">總共<span class="description_mark" id="total_howmuch">32</span>筆商品</p>
                        </div>


                        <!-- 商品 -->

                        <div class="item_02_conten">
                            <div class="order_listbox">
                                <div class="description_70">商品名稱</div>
                                <div class="description_10">規格</div>
                                <div class="description_10">金額</div>
                                <div class="description_10">刪除</div>
                            </div>

                            <!-- 一件商品 -->
                            <?php if(empty($data_fa)):?>
                            <!-- 追蹤清單沒有商品時的狀態 -->
                            <div class="order_listbox carts_none">
                                <h3>追蹤清單目前沒有任何商品</h3>
                            </div>
                            <?php else:?>
                            <?php foreach ($data_ar as $dt): ?>

                                    <div class="order_listbox howmuch" data-sid="<?= $dt['product_sid'] ?>">
                                        <figure class="description_10"><a href="#"><img
                                                        src="images/<?= $dt['img'] ?>.png" alt="商品名稱"></a></figure>
                                        <div class="description_50">
                                            <a href="product_detail.php?id=<?= $dt['product_sid'] ?>"
                                               class="product_name"><?= $dt['product_name'] ?></a>
                                        </div>
                                        <div class="description_10"></div>
                                        <div class="description_10"><?= $c_ar[$dt['product_color_sid']] ?></div>
                                        <div class="description_10"><?= $dt['price'] ?></div>
                                        <div class="description_10">
                                            <div class="icon_garbage"></div>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                            <!-- 一件商品 -->


                        </div>
<!--                        --><?php //else: ?>
<!--                        --><?php //endif ?>

                        <?php endif ?>
                        <!-- 頁碼 -->
                        <!--            <div class="page_num">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"></a></li>-->
                        <!--                    <li>1</li>-->
                        <!--                    <li><a href="#">2</a></li>-->
                        <!--                    <li><a href="#">3</a></li>-->
                        <!--                    <li><a href="#"></a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->

                    </div>
                </div>
            </div>
    </section>
</div>
<script>

    $('#total_howmuch').text($(".howmuch").length);

    $('.icon_garbage').click(function () {
        var tr = $(this).closest('.order_listbox');
        var sid = tr.attr('data-sid');

        $.get('unlove_api.php', {sid: sid}, function (data) {
            //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)
            tr.remove();
            if (data.success) {
                alert('商品已加入刪除囉！啾咪～');
                console.log(data);
                $('#total_howmuch').text($(".howmuch").length);
            } else {
                alert('你登入了媽？');

            }
        }, 'json');
    });


</script>
<div class="index_footer">
    <?php include 'page_item/footer.php'; ?>
</div>
</body>
</html>