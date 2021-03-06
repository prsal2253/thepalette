<?php include 'page_item/head.php';?>
</head>

<!-- 頁面ID -->
<body id="member" class="order_cancel">

<!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>

    <!-- main -->
    <div class="index_main">
        
        <!-- 麵包屑 -->
        <section  class="bread_crumbs">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="#">member</a></li>
                <li><a href="#">order</a></li>
                <li>cancel the order</li>
            </ul></section>
    <section>
    <div class="index_conten_flex">
        <div class="index_conten_l">
            <div class="item_01">
                <div class="item_01menu item_01menu_in"><h6 class="transition">訂單列表</h6><span class="transition">Order List</span></div>
                <div class="item_01menu "><a href="#"></a><h6 class="transition">會員資料</h6><span class="transition">member profile</span></a></div>
                <div class="item_01menu"><a href="#"><h6 class="transition">追蹤清單</h6><span class="transition">my favourite</span></a></div>
            </div>
        </div>
        <div class="index_conten_r">
            <div class="member_title"><h2>cancel the order</h2><span>訂單取消</span></div>
            <div class="member_conten">
                <div class="item_02 item_05">
                <form action="">
                    <!-- 訂單編號 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_l">訂單編號</div>
                        <div class="item_02_conten_r"><p class="conten_data">1234567890</p></div>
                    </div>
                    
                    <!-- 原因 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">取消原因</div>
                            <div class="item_02_conten_r">
                                <div class="palette_select">
                                    <select class=" ">
                                    <option>請選擇取消原因</option>
                                    <option>下單錯誤</option>
                                    </select>
                                </div>
                            </div>
                    </div>

                    <!-- 備註 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">備註</div>
                            <div class="item_02_conten_r">
                                <textarea name="" id="" cols="30" rows="5" placeholder=""></textarea>
                            </div>
                    </div>

                     <!-- 確認 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l"></div>
                            <div class="item_02_conten_r">
                                <div class="radio_box">
                                    <input type="checkbox" name="" value="" >
                                    <span class="radio_content">我已詳閱 <a href="#">訂單取消說明</a></span>
                                </div>
                            </div>
                    </div>
                    
                    <div class="item_02_conten item_conten_button">
                        <input type="button" class="palette_btn_back" onclick="history.back()" value="回上一頁">
                        <input type="submit" value="送出申請">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>

<div class="index_footer">
        <?php include 'page_item/footer.php';?>
    </div>

</body>
</html>