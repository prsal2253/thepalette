<?php
require __DIR__ . '/__db_connect.php';
?>
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

        //加入最愛
        $(".product_favorate").click(function(){
            $(this).toggleClass("icon_love_click");
        })
    </script>
</body>
</html>
