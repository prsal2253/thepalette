<?php

require __DIR__ . '/__db_connect.php';


if(isset($_GET['id'])) {
    $sql = sprintf('SELECT * FROM `products_list` WHERE 1 AND `product_sid`='.$_GET['id']);
    $rs = $mysqli->query($sql);
    $r = $rs->fetch_assoc();

    if($r['same']!==0) {
        $sql2 = "SELECT * FROM `products_list` WHERE `same`=". $r['same'];

        $rs2 = $mysqli->query($sql2);

        $s_same = [];

        while ($c = $rs2->fetch_assoc()) {
            $s_same[$c['product_sid']] = $c;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    #product_quicklook_01{
        overflow: hidden;
}
.product_quicklook_01{
    padding-top: 60px;
    justify-content: space-around;
    max-width: 900px;
    width:95%;
    margin:0 auto;
    display: flex;
}
.product_quicklook_h1{
    border-color: black;
    color:black;
}
/* 左邊 */
.product_quicklook_01_left{
    width: 55%;
    height: 100%;
    flex-direction: column;
}
.product_quicklook_01_h2{
    font-size: 30px;
    letter-spacing: 0.01em;
    font-weight: 700;
    font-family: 'Playfair Display', serif;
    margin:0;
}
.product_quicklook_01_h3{
    font-size: 15px;
    line-height: 20px;
    letter-spacing: 0.01em;
    font-family: 'Playfair Display', serif;
}
.product_quicklook_01_h4{
    font-size: 12px;
    letter-spacing: 0.05em;
    font-weight: 300;
    color: #666;
    font-family: 'Noto Sans TC', serif;
}
.s_rate{
    justify-content: flex-start;
    align-items: center;
}
.s_star{
    width: 75px;
    height: 15px;
    background: url(images/icon/star.svg) no-repeat left center;
    background-size: contain;
}
.product_quicklook_image{
    width: 500px;
    height: 500px;
    overflow: hidden;
}
.product_quicklook_image img{
    width: 100%;
    margin-left: 0;
    object-fit: cover;
}
/* 右邊 */
.product_quicklook_01_right{
    width: 30%;
    height: 100%;
    flex-direction: column;
    justify-content: flex-start;
    margin-left: -20px;
}
.s_sale_01{
    width: 100%;
    height: 30px;
    border-radius: 40px;
    background: #bf301d;
    text-align: center;
    margin-bottom: 10px;
}
.s_sale_02{
    width: 220px;
    height: 30px;
    border-radius: 40px;
    background: #bc5446;
    text-align: center;
    margin-bottom: 20px;
}
.product_quicklook_01_h5{
    font-size: 13px;
    letter-spacing: 0.2em;
    line-height: 30px;
    font-weight: 300;
    color: #fff;
    font-family: 'Noto Sans TC', serif;
    margin: 0;
}
.product_quicklook_01_h6{
    font-size: 17px;
    letter-spacing: 0.15em;
    line-height: 30px;
    font-weight: 400;
    color: #000;
    font-family: 'Noto Sans TC', serif;
    text-decoration:underline;
    margin: 0;
}
.product_quicklook_01_h7{
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0.1em;
    font-weight: 300;
    color: #000;
    font-family: 'Noto Sans TC', serif;
}
.product_quicklook_01_price{
    padding: 80px 0 40px 0;
}
.product_quicklook_01_h8{
    font-size: 40px;
    letter-spacing: 0.01em;
    font-weight: 400;
    color: #000;
    font-family: 'Playfair Display';
}
.product_quicklook_01_color{
    padding: 0;
    margin:3% 0;
}
.color1,.color2,.color3,.color4,.color5,.color6,.color7,.color8,.color9,.color10,.color11,.color12,.color13{
    width: 25px;
    height: 25px;
    border-radius: 50%;
    display: inline-block;
    margin-left: 2px;
}
.choose_color{
    border: 3px solid #fff;
}
.choose_color:hover{
    border-color: #333;
    cursor: pointer;
}
.color1{
        background-color: #802929;
    }
    .color2{
        background-color: #da9480;
    }
    .color3{
        background-color: #c55638;
    }
    .color4{
        background-color: #2e4553;
    }
    .color5{
        background-color: #407060;
    }
    .color6{
        background-color: #d89d54;
    }
    .color7{
        background-color: black;
    }
    .color8{
        background-color: white;
        border: 2px solid #f0f0f0;
    }
    .color9{
        background-color: #999;
    }
    .color10{
        background-color: #736558;
    }
    .color11{
        background-color: #D59A54;
    }
    .color12{
        background-color: #70929E;
    }
    .color13{
        background-color: #80346D;
    }

.s_product_quicklook_01_num{
    width: 48%;
    height: 40px;
    background-color: #e7e6e6;
    border-radius: 40px;
    margin-top:10px;
    justify-content: space-around;
    align-items: center;
}
.add_to_cart{
    width: 48%;
    height: 40px;
    background-color: #000;
    border-radius: 40px;
    padding: 0 0 0 5px;
}
.ql_more{
    width: 100%;
    height: 40px;
    background-color: #666;
    margin-top: 10px;
}
.product_quicklook_01_h7_box{
    height: 150px;
    overflow: hidden;
}
    </style>
</head>
<body>
<div id="product_quicklook">
    <div class="">
            <section class="">
                <div class="product_quicklook_01 card" data-sid="<?= $r['product_sid'] ?>">
                    <!-- 左邊 -->
                    <div class="product_quicklook_01_left flex">
                        <div class="product_quicklook_01_topic">
                            <h2 class="product_quicklook_01_h2"><?= $r['product_name'] ?></h2>
                            <div class="s_rate flex">
                                <h3 class="product_quicklook_01_h3">by <?= $r['designer'] ?>&nbsp;&nbsp;</h3>
                                <div class="s_star"></div>
                                <h4 class="product_quicklook_01_h4">&nbsp;<?= $r['star'] ?>&nbsp;&nbsp;(<?= $r['howmuch_star'] ?>筆評論)</h4>
                            </div>
                        </div>
                        <div class="product_quicklook_image">
                            <img class="img-good" src="images/<?= $r['img'] ?>.png" alt="">
                        </div>
                    </div>
                    <!-- 右邊 -->
                    <div class="flex product_quicklook_01_right">
                        <div class="s_sale_01"><h5 class="product_quicklook_01_h5">週年慶期間滿兩件免費到府安裝</h5></div>
                        <div class="s_sale_02"><h5 class="product_quicklook_01_h5">國泰銀行刷卡分期免利息</h5></div>
                        <div class="product_quicklook_01_description">
                            <h6 class="product_quicklook_01_h6">商品描述</h6>
                            <div class="product_quicklook_01_h7_box">
                                <h7 class="product_quicklook_01_h7"><?= $r['introduction'] ?><br><br></h7>
                            </div>
                        </div>
                        <div class="product_quicklook_01_price">
                            <h8 class="product_quicklook_01_h8">
                                <span style="font-family: Georgia"class="sub-total2"></span>
                                <span style="font-size: 12px; color:#666; text-decoration: line-through"
                                      data-totalprice="<?= $r['price'] ?>" class="sub-total"></span></h8>
                        </div>
                        <?php if(($r['same']!=0)):?>
                        <div class="product_quicklook_01_color">
                            <?php foreach($s_same as $k=>$v): ?>
                                <div class="choose_color color<?= $v['product_color_sid'] ?> transition"
                                     data-sid="<?= $v['product_sid'] ?>" data-img="<?= $v['img'] ?>"></div>
                            <?php endforeach; ?>
                        </div>
                        <?php else:?>
                        <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                        <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                        <?php endif;?>
                        <div class="product_quicklook_01_btns flex">
                            <div class="s_product_detail_01_num palette_select" style="width:48%;">
                                <select class="qty">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                </select>
                            </div>
                            <button class="add_to_cart"><h5 class="product_quicklook_01_h5"><span style="font-family:'Noto Sans TC';line-height: 40px">加入購物車</span></h5></button>
                        </div>
                        <button class="ql_more"><a href="product_detail.php?id=<?= $r['product_sid'] ?>" target="_top" class="product_quicklook_01_h5" style="color:#fff;text-decoration:none;">了解商品詳情</a></button>
                                                                        <!-- target屬性規定在何處打開連接文檔                       -->

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script>
    // 選擇購買顏色
    $(".choose_color").click(function(){
        $(this).css({
            "border": "3px solid #333",
            "border-radius": "50%"
        }).siblings().css("border","");

        var pid = $(this).attr('data-sid');
        var img = $(this).attr('data-img');
        $('.card').attr('data-sid', pid);
        $('.img-good').attr('src', 'images/'+img+'.png');
        console.log(pid);

    });


    var dallorCommas = function (n) {    // 這是加$跟三三為單位中間加逗號
        return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    var items = $('.sub-total');

    items.each(function () {
        var p = parseInt($(this).attr('data-totalprice'));
        $(this).text(dallorCommas(p));
        $('.sub-total2').text(dallorCommas(p*0.85));


    });

    //購物車功能
    $('.add_to_cart').click(function(){
        var card = $(this).closest('.card');
        var sid = card.attr('data-sid');
        var qty = card.find('.qty').val();
        console.log(`sid: ${sid}, qty: ${qty}`);

        $.get('add_to_cart.php', {sid:sid,qty:qty}, function(data){
            //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)
            console.log(data);
            alert('商品已加入購物車！');
            //點上面購物車數量會變
            window.parent.changeQty(data);

            window.parent.changeSmallCart();
            //changeQty(data);
        }, 'json');
    });



    (function () {
        window.alert = function (text) {
            //解析alert内容中的换行符
            text = text.toString().replace(/\\/g, '\\').replace(/\n/g, '<br />').replace(/\r/g, '<br />');

            // 自定义DIV弹窗
            var alertdiv = '<div id="alertdiv">' + text + '<br /><input type="submit" name="button" id="button" value="確認" onclick="$(this).parent().remove();" /></div>';
            $(document.body).append(alertdiv);
            // 显示
            $("#alertdiv").show();
        };
    })();
</script>
</body>
</html>