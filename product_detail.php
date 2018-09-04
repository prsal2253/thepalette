<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Palette</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product_detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="js/swiper/css/swiper.min.css">

    <style>

    </style> 
</head>
<body>
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
    </script>
</body>
</html>
