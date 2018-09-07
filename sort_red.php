<?php include 'page_item/head.php'; ?>
</head>
<body>
<!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php'; ?>
</div>
<?php include 'sort_red01.php'; ?>
<?php include 'sort_red02.php'; ?>
<?php include 'sort_red03.php'; ?>
<?php include 'sort_red04.php'; ?>
<?php include 'sort_red05.php'; ?>
<?php include 'page_item/footer.php'; ?>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

<script>
    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop > 300 && scrolltop < 2000) {
            $(".changebg").css('background-color', '#662424');
        } else if (scrolltop > 2000 && scrolltop < 3400) {
            $('.changebg').css('background-color', '#c2704f');
        } else if (scrolltop > 3400) {
            $('.changebg').css('background-color', '#df9282');
        }
    });

    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop > 300 && scrolltop < 2000) {
            $(".changebox").css('background-color', '#662424');
        } else if (scrolltop > 2000 && scrolltop < 3400) {
            $('.changebox').css('background-color', '#c2704f');
        } else if (scrolltop > 3400) {
            $('.changebox').css('background-color', '#df9282');
        }
    });




</script>
</body>
</html>