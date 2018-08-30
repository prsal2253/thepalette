<?php

require __DIR__. '/__db_connect.php';


?>
<?php include 'page_item/head.php';?>
</head>
<body id="signup" class="">
    <div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>
<div class="index_main">
    <!-- 麵包屑 -->
    <section  class="bread_crumbs">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">member</a></li>
            <li>signup</member></li>
        </ul></section>
    <section class="item_12">
        <div class="index_conten_flex">
            <div class="step_box step_box_in"><span>01</span><span>會員條款</span></div>
            <div class="step_box step_box_in"><span>02</span><span>填寫會員資料</span></div>
            <div class="step_box step_box_in"><span>03</span><span>認證會員<br/>註冊條款</span></div>
        </div>
    </section>
    <section class="item_12 item_13 item_14">
        <div class="index_conten ">
            <div class="item_02">
                <?php if(isset($_SESSION['sighup_email'])): ?>
                <div class="item_14box">
                    <p>會員 <span class="description_mark"><?= $_SESSION['sighup_name'] ?></span> 先生/小姐 您好</p>
                    <p>&nbsp;</p>
                    <p>感謝您註冊成為 the palette 購物網的會員，</p>
                    <p>我們已發送一封認證信至您所填寫的 <span class="description_mark"><?= $_SESSION['sighup_email'] ?></span> 信箱中，</p>
                    <p>請查看信箱完成認證，開始享受購物的樂趣！</p>
                </div>
                <div class="item_02_conten">
                    <input type="submit" value="註冊會員">
                    <a href="header.php">跑回首頁</a>
                </div>
                <?php endif; ?>
                <?php unset($_SESSION['sighup_email'],$_SESSION['sighup_name']);?>
            </div>
        </div>
    </section>
</div>
<div class="index_footer">
<?php include 'page_item/footer.php';?>
</div>
</body>
</html>