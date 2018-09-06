<?php include 'page_item/head.php';?>

    <style>
    /* 為了覆蓋原本樣式需放在這裡 */
    .flatpickr-calendar.inline{max-width:55%;width: 90%;padding: 20px 0;background: rgba(247, 247, 247, .95);border: transparent;margin: 20px 0;}
    .flatpickr-calendar.arrowTop:before,.flatpickr-calendar.arrowTop:after{border-bottom-color: transparent;border:none;}
    .flatpickr-rContainer{max-width: 90%;}
    .flatpickr-day{width:calc(100% / 7);height: 40px;    margin: 10px 0px;line-height: 40px;}
    .flatpickr-day.today{}
    .flatpickr-month{width: 90%;margin: 0 auto 20px;}
    .flatpickr-weekdays{display: inline-flex;    width: 100%;}
    span.flatpickr-weekday{width:calc(100% / 7);height: 40px;    margin: 0 0px;line-height: 40px;}
    </style>
</head>

<!-- 頁面ID -->
<body id="reservation" class="reservation_02">

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
                <li>reservation</member></li>
            </ul></section>
    
    <!-- 頁面內容 -->
    <section class="item_12">
            <div class="index_conten_flex">
                <div class="step_box"><span>01</span><span>預約注意事項</span></div>
                <div class="step_box step_box_in"><span>02</span><span>選擇預約時間</span></div>
                <div class="step_box"><span>03</span><span>預約完成</span></div>
            </div>
    </section>
    <section class="item_12 item_13 item_16">
        <div class="index_conten ">
            <div class="item_02 item_16box">
                        <input class=flatpickr type=text data-inline=true placeholder="請選擇配送日期">
                        <div class="palette_select description_40">
                                <select class="palette_select">
                                <option>請選擇配送時間</option>
                                <option>上午09：00-12：00</option>
                                <option>下午13：30-17：30</option>
                                <option>晚上19：30-21：30</option>
                                </select>
                        </div>
            </div>
            <div class="item_02_conten">
                    <input type="submit" onclick="location.href='reservation_03.php'" value="預約配送時間">
                </div>
        </div>
    </section>
</div>
<div class="index_footer">
    <?php include 'page_item/footer.php';?>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="js/flatpickr.js"></script>
<script>
    // 月曆
    $(".flatpickr").flatpickr();   
</script>
</body>
</html>