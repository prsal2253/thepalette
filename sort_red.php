<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Palette</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sort_red.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
</head>
<body>
    <?php include 'sort_red01.php';?>
    <?php include 'sort_red02.php';?>
    <?php include 'sort_red03.php';?>
    <?php include 'sort_red04.php';?>
    <?php include 'sort_red05.php';?>
    <?php include 'page_item/footer.php';?>  
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

<script>
$(window).scroll(function() {
    var scrolltop = $(this).scrollTop();
    if (scrolltop>300 && scrolltop<2000){
        $(".changebg").css('background-color','#662424');
    }else if(scrolltop>2000 && scrolltop<3400){
        $('.changebg').css('background-color','#c2704f');
    }else if(scrolltop>3400){
        $('.changebg').css('background-color','#df9282');
    }
});

$(window).scroll(function() {
    var scrolltop = $(this).scrollTop();
    if (scrolltop>300 && scrolltop<2000){
        $(".changebox").css('background-color','#662424');
    }else if(scrolltop>2000 && scrolltop<3400){
        $('.changebox').css('background-color','#c2704f');
    }else if(scrolltop>3400){
        $('.changebox').css('background-color','#df9282');
    }
});

// filter
        // 選擇顏色
        $(".filter_color_box").click(function () {
            $(this).toggleClass("toggle_color");
        });

        $(".filter_filter").click(function () {
            $(".filter_inner").toggleClass("filter_open")
        })
        //選品項
        $(".filter_items").click(function(){
            $(this).toggleClass("item_choose");
        })

        //顯示range的值
			function change() {
  				var value = document.getElementById('range').value ;
  				document.getElementById('value').innerHTML = value;
                console.log("#value");
            }
            function change2() {
  				var value = document.getElementById('range2').value ;
  				document.getElementById('value2').innerHTML = value;
                console.log("#value");
            }
</script>
</body>
</html>