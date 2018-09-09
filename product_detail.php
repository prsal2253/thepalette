<?php
require __DIR__ . '/__db_connect.php';
?>
    <style>
    .product_detail_02_group{position: relative;overflow: hidden;}
    .product_detail_02_group_pic{position: absolute;left: 0;top: 0;}
    .group_more{position: absolute;background-color: #000;height: 60px;width: 300px;margin-top: -0px;float: none;text-align: center;bottom: 0;right: 0;}
    .product_detail_02_h5 {color: #fff;font-size: 12px;line-height: 60px;letter-spacing: 0.15em;font-family: 'Roboto';font-weight: 300;}
    .group_more_box{background-color: rgba(15,15,15,.8);width: 100%;height: 100%;position: absolute;z-index: 3;right: -100%;transition: all .5s;
    display: inline-flex;justify-content: center;padding: 0 5% 60px;}
    .group_more_box.open{right: 0%;}
    .group_goods{width: calc(100%/3);padding:10px 30px;}
    .group_goods img{width: 100%;}
    .group_goods .sort_red05_pname{color: #fff;text-align: center;}
    .group_goods .sort_red05_pname h2{font-family: 'Playfair Display';font-size: 18px;line-height: 30px}
    .group_goods .sort_red05_pname h3{font-family: Georgia, 'Times New Roman', Times, serif;font-size: 18px;line-height: 20px}
    .group_goods .sort_red05_pname h4{font-family: Georgia, 'Times New Roman', Times, serif;font-size: 12px;color: #ddd;text-decoration: line-through;line-height: 30px}
    </style>
<?php include 'page_item/head.php'; ?>
</head>
<body>
<!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php'; ?>
</div>
    <?php include 'product_detail_01.php';?>
    <?php include 'product_detail_02.php';?>
    <?php include 'product_detail_03.php';?>
    <?php include 'product_detail_04.php';?>
    <?php include 'product_detail_05.php';?>
    <?php include 'product_detail_06.php';?>
    <?php include 'page_item/footer.php';?>
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <script src="js/swiper/js/swiper.min.js"></script>

    <script>
        // 選擇購買顏色
        $(".choose_color").click(function(){
            $(this).css({
                "border": "3px solid #333",
                "border-radius": "50%"
            }).siblings().css("border","");
        });

        // 快顯愛心click
        $('.product_favorate').click(function(){  
            $(this).css("background","url(../images/icon/heart_w_hover.svg)");
        })

        // swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 5,
            slidesPerGroup: 2,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });

        jQuery.fn.extend({
        toggleText: function(stateOne, stateTwo) {
        return this.each(function() {
            stateTwo = stateTwo || '';
            $(this).text() !== stateTwo && stateOne ? $(this).text(stateTwo)
                                                    : $(this).text(stateOne);
        });  
        }
        });
        $('.group_more').on('click', function() {
        $('.product_detail_02_h5').toggleText('see all products', 'close'); 
        $(this).parents().find(".group_more_box").toggleClass("open");
        });

        //加入最愛
        $(".product_favorate").click(function(){
            $(this).toggleClass("icon_love_click");
        })
    </script>
</body>
</html>
