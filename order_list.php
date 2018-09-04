<?php
require __DIR__ . '/__db_connect.php';


if(!isset($_SESSION['user'])){
    header("Location: index_.php");
    exit;
}

// 先取得會員的訂單資料 (半年內)
$t = date("Y-m-d H:i:s", time()-180*24*60*60);
$sql = sprintf("SELECT * FROM `orders` WHERE member_sid=%s AND order_date>'%s' ORDER BY orders_sid DESC",
    $_SESSION['user']['member_sid'], $t);

$rs = $mysqli->query($sql);
$my_orders = $rs->fetch_all(MYSQLI_ASSOC);

$order_sids = [];
foreach($my_orders as $v){
    $order_sids[] = $v['orders_sid'];
}


$sql2 = sprintf("SELECT d.*, p.product_name FROM order_details d JOIN products_list p ON d.product_sid=p.product_sid WHERE d.order_sid IN (%s)",
    implode(',', $order_sids)
);


//$sql2 = sprintf("SELECT d.*, p.bookname FROM order_details d JOIN products p ON d.product_sid=p.sid WHERE d.orders_sid IN (%s)",
//    implode(',', $order_sids)
//);



$rs2 = $mysqli->query($sql2);

$my_details = $rs2->fetch_all(MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order_list</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
</head>
<body id="member" class="order_list">
    <div class="index_top">
        <header><h1>palette</h1></header>
    </div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>order</li>
            </ul></section>
    <section>
    <div class="index_conten_flex">
        <div class="index_conten_l">
            <div class="item_01">
                <div class="item_01menu item_01menu_in"><h6 class="transition">訂單列表</h6><span class="transition">Order List</span></div>
                <div class="item_01menu "><a href="#"><h6 class="transition">會員資料</h6><span class="transition">member profile</span></a></div>
                <div class="item_01menu"><a href="#"><h6 class="transition">追蹤清單</h6><span class="transition">my favourite</span></a></div>
            </div>
        </div>
        <div class="index_conten_r">
            <div class="member_title"><h2>Order list</h2><span>訂單列表</span></div>
            <div class="member_conten">
                <div class="item_02 item_03">
                    <!-- top -->
                    <div class="item_02_conten">
                        <div class="palette_select">
                                <select class=" ">
                                <option>請選擇問題類型</option>
                                <option>預約相過</option>
                                </select>
                        </div>
                        <div class="palette_select">
                                <select class=" ">
                                <option>請選擇問題類型</option>
                                <option>預約相過</option>
                                </select>
                        </div>
                        <p class="description">總共<span class="description_mark">32</span>筆訂單</p>
                    </div>

                    <!-- 一張訂單 -->
                    <div class="item_02_conten">
                        <div class="order_listbox">
                            <p class="description_25">訂購日期：2108/07/31</p>
                            <p class="description_25">訂單編號：1234567890</p>
                            <p class="description"><span class="description_mark">訂單狀態：款項確認</span></p>
                        </div>
                        <div class="order_listbox">
                                <figure class="description_10"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>
                                <div class="description_40">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>
                                </div>
                                <div class="description">黃色 x 1  $8900</div>
                        </div>
                        <div class="order_listbox">
                            <p class="more_product">還有1件商品</p>
                        </div>
                        <div class="order_listbox order_listbox_tatle">
                            <div>
                                <p>總共 <span class="description_mark">2</span> 件商品，訂單金額</p>
                                <h3 class="product_price"><span>＄</span>39,280</h3>
                                <a href="#" class="palette_btn palette_btncolor2">訂單明細</a>
                            </div> 
                        </div>
                    </div>

                    <!-- 一張訂單 -->
                     <div class="item_02_conten">
                        <div class="order_listbox">
                            <p class="description_25">訂購日期：2108/07/31</p>
                            <p class="description_25">訂單編號：1234567890</p>
                            <p class="description"><span class="description_mark">訂單狀態：訂單完成</span></p>
                        </div>
                        <div class="order_listbox">
                                <figure class="description_10"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>
                                <div class="description_40">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>
                                </div>
                                <div class="description">黃色 x 1  $8900</div>
                        </div>
                        <div class="order_listbox">
                            <p class="more_product">還有1件商品</p>
                        </div>
                        <div class="order_listbox order_listbox_tatle">
                            <div>
                                <p>總共 <span class="description_mark">2</span> 件商品，訂單金額</p>
                                <h3 class="product_price"><span>＄</span>39,280</h3>
                                <a href="#" class="palette_btn palette_btncolor2">訂單明細</a>
                            </div> 
                        </div>
                    </div>

                     <!-- 一張訂單 -->
                     <div class="item_02_conten">
                        <div class="order_listbox">
                            <p class="description_25">訂購日期：2108/07/31</p>
                            <p class="description_25">訂單編號：1234567890</p>
                            <p class="description"><span class="description_mark">訂單狀態：訂單完成</span></p>
                        </div>
                        <div class="order_listbox">
                                <figure class="description_10"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>
                                <div class="description_40">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>
                                </div>
                                <div class="description">黃色 x 1  $8900</div>
                        </div>
                        <div class="order_listbox">
                            <p class="more_product">還有1件商品</p>
                        </div>
                        <div class="order_listbox order_listbox_tatle">
                            <div>
                                <p>總共 <span class="description_mark">2</span> 件商品，訂單金額</p>
                                <h3 class="product_price"><span>＄</span>39,280</h3>
                                <a href="#" class="palette_btn palette_btncolor2">訂單明細</a>
                            </div> 
                        </div>
                    </div>

                     <!-- 一張訂單 -->
                     <div class="item_02_conten">
                        <div class="order_listbox">
                            <p class="description_25">訂購日期：2108/07/31</p>
                            <p class="description_25">訂單編號：1234567890</p>
                            <p class="description"><span class="description_mark">訂單狀態：訂單完成</span></p>
                        </div>
                        <div class="order_listbox">
                                <figure class="description_10"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>
                                <div class="description_40">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>
                                </div>
                                <div class="description">黃色 x 1  $8900</div>
                        </div>
                        <div class="order_listbox">
                            <p class="more_product">還有1件商品</p>
                        </div>
                        <div class="order_listbox order_listbox_tatle">
                            <div>
                                <p>總共 <span class="description_mark">2</span> 件商品，訂單金額</p>
                                <h3 class="product_price"><span>＄</span>39,280</h3>
                                <a href="#" class="palette_btn palette_btncolor2">訂單明細</a>
                            </div> 
                        </div>
                    </div>

                     <!-- 一張訂單 -->
                     <div class="item_02_conten">
                        <div class="order_listbox">
                            <p class="description_25">訂購日期：2108/07/31</p>
                            <p class="description_25">訂單編號：1234567890</p>
                            <p class="description"><span class="description_mark">訂單狀態：訂單完成</span></p>
                        </div>
                        <div class="order_listbox">
                                <figure class="description_10"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>
                                <div class="description_40">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>
                                </div>
                                <div class="description">黃色 x 1  $8900</div>
                        </div>
                        <div class="order_listbox">
                            <p class="more_product">還有1件商品</p>
                        </div>
                        <div class="order_listbox order_listbox_tatle">
                            <div>
                                <p>總共 <span class="description_mark">2</span> 件商品，訂單金額</p>
                                <h3 class="product_price"><span>＄</span>39,280</h3>
                                <a href="#" class="palette_btn palette_btncolor2">訂單明細</a>
                            </div> 
                        </div>
                    </div>

                    <!-- 頁碼 -->
                    <div class="page_num">
                        <ul>
                            <li><a href="#"></a></li>
                            <li>1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
<div class="index_footer"></div>
</body>
</html>