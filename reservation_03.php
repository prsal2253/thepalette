<?php include 'page_item/head.php';?>
</head>

<!-- 頁面ID -->
<body id="reservation" class="reservation_03">

    <!-- top -->
    <div class="index_top">
        <?php include 'page_item/header.php';?> 
    </div>

    <!-- main -->
    <div class="index_main">
        <!-- 麵包屑 -->
        <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li> reservation</member></li>
            </ul></section>

    <!-- 頁面內容 -->
    <section class="item_12">
            <div class="index_conten_flex">
                    <div class="step_box step_box_in"><span>01</span><span>預約注意事項</span></div>
                    <div class="step_box step_box_in"><span>02</span><span>選擇預約時間</span></div>
                    <div class="step_box step_box_in"><span>03</span><span>預約完成</span></div>
            </div>
    </section>
    <section class="item_12 item_13 item_17 item_19">
        <div class="index_conten ">
            <div class="item_02">
                <div class="item_02_conten">
                        <div class="order_listbox item_19_title">
                            <h3 class="member_title"><span>預約完成</span></h3>
                            <p>
                                確認預約詳細請至會員中心的訂單列表查詢您的預約狀態<br/>
                                如有相關疑問，請查看常見問題或使用訂單詢問進行留言</p>
                        </div>
                        <div class="order_listbox order_listbox_tatle item_conten_button">
                                <div>
                                    <input type="button"onclick="location.href='order_list.php'" class="palette_btn_back" value="訂單詳細">
                                    <input type="submit"onclick="location.href='reservation_02.php'" value="繼續購物">
                                </div>
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