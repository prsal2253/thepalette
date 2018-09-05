<?php


if(!empty($_SESSION['cart'])) {
    $keys = array_keys($_SESSION['cart']);
//字面上意思是拿到$_SESSION['cart']所有的key
    $sql = sprintf("SELECT * FROM `products_list` WHERE `product_sid` IN (%s)", implode(',', $keys));
    //IN (這邊要塞sid逗號隔開)
//黏著符號js叫做join()
//php叫做implode
//SELECT * FROM `products_list` WHERE `product_sid` IN (1,2)
    $rs = $mysqli->query($sql);

    $data = [];

    while ($r = $rs->fetch_assoc()) {
        $r['qty'] = $_SESSION['cart'][$r['product_sid']];

        $data[$r['product_sid']] = $r;
    }

}
?>
        <header><h1>palette</h1></header>
 
            <!-- menu icon -->
            <div class="menu_icon">
                <div class="bar transition"></div>
                <div class="bar transition"></div>
                <div class="bar transition"></div>
            </div>
            <!-- menu -->
            <div class="palette_menu_open transition">
                <div class="palette_menubox">
                    <div class="menubox_l">
                        <ul>
                            <li class="selected" data-id="all"><a href="#"><span>Home</span>首頁</a></li>
                            <li data-id="all"><a href="#"><span>About Us</span>關於我們</a></li>
                            <li data-id="collections"><a href="#" ><span>Collections</span>精選商品</a></li>
                            <li data-id="articles"><a href="#"><span>Articles</span>風格專欄</a></li>
                            <li data-id="all"><a href="#"><span>Get In Touch</span>聯絡我們</a></li>
                        </ul>
                    </div>
                    <div class="menubox_r">
                        <!-- all -->
                        <div id="all" class="ranking_box selected">
                            <div class="all_box">
                                <h2>最新活動</h2>
                                <img src="../images/banner/blaise_desktop_1.jpg" alt=""></div>
                        </div>
                        <!-- product -->
                        <div class="ranking_box" id="collections">
                            <div class="collectionsbox">
                                <h2>商品分類</h2>
                                <div class="collectionsbox_l">
                                        <ul>
                                            <li class="selected" data-id="sort01"><a href="/thepalette/thepalette/sort_red05_0905.php">紅橘粉 系列</a></li>
                                            <li data-id="sort02"><a href="/thepalette/thepalette/sort_yellow05_0905.php">藍綠黃 系列</a></li>
                                            <li data-id="sort03"><a href="/thepalette/thepalette/sort_white05_0905.php">黑白灰 系列</a></li>
                                            <li data-id="sort04"><a href="/thepalette/thepalette/sort_side05_0905.php">大地色 系列</a></li>
                                            <li data-id="sort05"><a href="/thepalette/thepalette/sort_s05_0905.php">材質 系列</a></li>

                                        </ul>
                                </div>
                                <div class="collectionsbox_r">
                                    <!-- 01 -->
                                    <div id="sort01" class="ranking_box selected"><img src="../images/banner/39195293794_6055c635a0_k.jpg" alt=""></div>
                                    <!-- 02 -->
                                    <div id="sort02" class="ranking_box"><img src="../images/banner/40745884310_4b1e901143_b.jpg" alt=""></div>
                                    <!-- 03 -->
                                    <div id="sort03" class="ranking_box"><img src="../images/banner/40745889000_96ba023acb_k.jpg" alt=""></div>
                                    <!-- 04 -->
                                    <div id="sort04" class="ranking_box"><img src="../images/banner/38924676214_1e6d29ce12_b.jpg" alt=""></div>
                                    <!-- 05 -->
                                    <div id="sort05" class="ranking_box"><img src="../images/banner/28680134718_346947a0b7_b.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <!-- articles -->
                        <div class="ranking_box" id="articles">
                            
                            <div class="menu_articlesbox">
                                <h2>最新專欄</h2>
                                <a class="menu_articles" href="#">
                                    <figure><img src="../images/banner/BM_2002_TP_1230_WL_4300_mood_rgb_high.jpg" alt=""></figure>
                                    <h3 class="menuarticles_titlebox">
                                        <span class="menuarticles_time">2017 JUN 31</span>
                                        <span class="menuarticles_title">不再盲目追逐流行：藏於細節裡的時尚感。</span>
                                    </h3>
                                </a>
                                <a class="menu_articles" href="#">
                                        <figure><img src="../images/banner/BM_2002_TP_1230_WL_4300_mood_rgb_high.jpg" alt=""></figure>
                                        <h3 class="menuarticles_titlebox">
                                            <span class="menuarticles_time">2017 JUN 31</span>
                                            <span class="menuarticles_title">不再盲目追逐流行：藏於細節裡的時尚感。</span>
                                        </h3>
                                    </a>
                            </div>
                        </div>
                        <!-- icon list -->
                        <div class="menu_iconbar">
                            <a href="#">
                                <span class="transition">站內搜尋</span>
                                <div class="search_icon"></div>
                            </a>
                            <?php if(isset($_SESSION['user'])): ?>
                                <!-- 登出 -->
                                <a href="/thepalette/thepalette/logout.php">
                                        <span class="transition">會員登出</span>
                                        <div class="padunlock_icon"></div>
                                </a>
                                <a href="/thepalette/thepalette/order_list.php">
                                    <span class="transition">會員中心</span>
                                    <div class="member_icon"></div>
                                </a>
                            <?php else: ?>
                            <a href="/thepalette/thepalette/login.php" >
                                <span class="transition">會員登入</span>
                                <div class="padlock_icon"></div>
                            </a>

                            <?php endif; ?>
                             <a href="/thepalette/thepalette/shoppingcar_01.php">
                                    <span class="transition">購物車</span><span class="qty-badge"></span>
                                    <div class="car_icon"></div>
                             </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cart icon -->
            <div class="car_icon car_icon_fixed transition"></div>
            <span class="cart_number2 qty-badge"></span>
            <div class="car_iconhover">
                <?php if(!empty($_SESSION['cart'])): ?>
                    <?php
                    $total = 0;
                    foreach($keys as $k):
                        $r = $data[$k]; // 整筆資料(包含 qty)
                        $total += $r['price'] * $r['qty'];
                        ?>
                <div class="order_listbox" data-sid="<?= $k ?>">
                    <figure class="description_20"><a href="#"><img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>"></a></figure>
                    <div class="description_70">
                        <a href="#" class="product_name"><?= $r['product_name'] ?></a>
                        <p>Ｘ<?= $r['qty'] ?></p>
                        <p>$<?= $r['price'] ?></p>
                    </div>
                    <div class="description_10"><div class="icon_garbage"></div></div>
                </div>
                <?php endforeach; ?>

                <div class="check_outbox"><a class="check_out" href="/thepalette/thepalette/shoppingcar_01.php">CHECK OUT</a></div>

                <?php else: ?><!-- 購物車沒有商品時的狀態 -->
                 <div class="order_listbox carts_none">
                        <h3>購物車目前沒有任何商品</h3>
                </div>
                <?php endif ?>
            </div>

            

            <!-- member icon -->
            <a href="../order_list.html" class="member_icon member_icon2"></a>

            
            <!-- <div class="menu_list">
                <a href="#"><span class="list_en">longin</span><span class="list_cn">會員登入</span></a>
                <a href="#"><span class="list_en">longout</span><span class="list_cn">會員登出</span></a>
                <a href="#"><span class="list_en">signup</span><span class="list_cn">會員註冊</span></a>
            </div> -->
        <div class="go_top"></div>
<script>
    // menu
    $(".menu_icon").click(function(){
            $(this).toggleClass("menu_active");
            $(this).parents().find(".palette_menu_open").toggleClass("menu_active");
        });
    // menu
    $(".car_icon").click(function(){
            $(this).parents().find(".car_iconhover").toggleClass("menu_active");
            //即時更新
            $.get('header_api.php', function(data){
                $('.car_iconhover').html(data);
        },      'text');
        });

    // menu
    // $("nav>.palette_menu,nav>.car_icon").click(function(){
    //     $(this).toggleClass("menu_active");
        //即時更新
    //     $.get('header_api.php', function(data){
    //         $('.car_iconhover').html(data);
    //     }, 'text');
    // });
    // tab
    $(function(){
    $(".palette_menubox .menubox_l ul li").mouseover(function () {
        $(".palette_menubox .menubox_l ul li").removeClass("selected");
        $(".palette_menubox .menubox_r .ranking_box").removeClass("selected");
        $(this).addClass("selected");
       $("#"+$(this).attr("data-id")).addClass("selected");
    });
    });
     // tab2
     $(function(){
    $(".collectionsbox_l ul li").mouseover(function () {
        $(".collectionsbox_l ul li").removeClass("selected");
        $(".collectionsbox_r .ranking_box").removeClass("selected");
        $(this).addClass("selected");
       $("#"+$(this).attr("data-id")).addClass("selected");
    });
    });
    //go top
    $(function(){
        $(window).scroll(function(){
		if( $(window).scrollTop() > 1620 ){
			$(".go_top").fadeIn(800);
		}else{
			$(".go_top").fadeOut(600);
		};
	})	
        $('.go_top').click(function(){
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ?
        $('html') : $('body')) : $('html,body');
        $body.animate({scrollTop: 0}, 600);
        return false;
        });
    });




//    購物車功能區塊
    var changeQty = function(obj){
        //這個函式丟一個物件進來
        var total = 0;
        for(var s in obj){

            total += obj[s];
        }
        $('.qty-badge').text(total);
    };

    var changeSmallCart = function(){
        $.get('./page_item/header_api.php', function(data){
            $('.car_iconhover').html(data);
        }, 'text');
    };
    $.get('add_to_cart.php', function(data){
        changeQty(data);
        // $.get('header_api.php', function(data){
        //     $('.car_iconhover').html(data);
        // }, 'text');
    }, 'json');


    $('.icon_garbage').click(function(e){
        var tr = $(this).closest('.order_listbox');
        var sid = tr.attr('data-sid');
        e.stopPropagation();
        //    氣泡事件
        $.get('add_to_cart.php', {sid:sid}, function(data){
            tr.remove();//要等ajax回來才可以做刪除動作
            window.changeQty(data);
        }, 'json');

    });

</script>