<?php
$pageName = 'register';
//命名頁面
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup_02</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/member.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <style>
        small{
            display: none;
        }
    </style>
</head>
<body id="signup" class="signup_02">
<div class="index_top">
    <header><h1>palette</h1></header>
</div>
<div class="index_main">
    <!-- 麵包屑 -->
    <section  class="bread_crumbs">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">member</a></li>
            <li>signup</member></li>
        </ul>
    </section>
    <section class="item_12">
        <div class="index_conten_flex">
            <div class="step_box"><span>01</span><span>會員條款</span></div>
            <div class="step_box step_box_in"><span>02</span><span>填寫會員資料</span></div>
            <div class="step_box"><span>03</span><span>認證會員<br/>註冊條款</span></div>
        </div>
    </section>
    <section class="item_12 item_13 item_15">
        <div class="index_conten">
            <div class="item_02">
<!--     註冊成功與否訊息           -->
                <div id="info" class="alert" role="alert" style="display: none">
                </div>
<!--                -->
                <form name="form1" method="post" action="" onsubmit="return checkForm()">
                    <!-- 會員名稱 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <input type="text" id="name" name="name" placeholder="會員名稱">
                            <small id="nameHelp" class="">長度請大於兩個字元</small>
                        </div>
                    </div>

                    <!-- email -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <input type="text" id="email" name="email" placeholder="請填寫正確e-mail，將會成為您的登入帳號">
                            <small id="emailHelp" class="">請符合email格式</small>
                        </div>
                    </div>

                    <!-- 會員密碼 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <input type="password" id="password" name="password" placeholder="填寫密碼">
                            <small id="passwordHelp" class="">密碼長度請大於六個字元</small>
                        </div>
                    </div>

                    <!-- 密碼確認 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <input type="password" id="passwordcheck" name="passwordcheck" placeholder="確認密碼">
                            <small id="passwordcheckHelp" class="">請再次確認密碼是否相同</small>
                        </div>
                    </div>
                    <!-- 生日 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <div class="palette_select member_input40">
                                <select>
                                    <option>出生年</option>
                                    <option>2000</option>
                                </select>
                            </div>
                            <div class="palette_select member_input40 member_input25">
                                <select>
                                    <option>月</option>
                                    <option>01</option>
                                </select>
                            </div>

                            <div class="palette_select member_input25">
                                <select>
                                    <option>日</option>
                                    <option>01</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <!-- 電子報 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <div class="radio_box">
                                <input type="checkbox" name="" value="" checked>
                                <span class="radio_content">我願意收到the palette的最新優惠消息</span></div>
                        </div>
                    </div>


                    <div class="item_02_conten">
                        <button type="submit" id="submit_btn" >註冊會員</button>
                    </div>
                </form>
            </div>
    </section>
</div>
<script>

    function checkForm() {

        var nameHelp = $('#nameHelp'),
            emailHelp = $('#emailHelp'),
            passwordHelp = $('#passwordHelp'),
            passwordcheckHelp = $('#passwordcheckHelp'),
            passwordcheck = $('#passwordcheck').val(),
            password = $('#password').val(),
            //這裡是JQ請用val()而不要用JS的value() OK?
            submit_btn = $('#submit_btn'),
            emailPattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        var isPass = true;

        submit_btn.hide();
        nameHelp.hide();
        emailHelp.hide();
        passwordHelp.hide();
        passwordcheckHelp.hide();
        $('#info').hide();


        if(form1.name.value.length < 2){
            nameHelp.show();
            isPass = false;
        }
        // 長度請大於兩個字元
        if(! emailPattern.test(form1.email.value)){
            emailHelp.show();
            isPass = false;
        }
        //請符合email格式
        if(form1.password.value.length < 6){
            passwordHelp.show();
            isPass = false;
        }
        //密碼長度請大於六個字元
        if(passwordcheck !== password){
            passwordcheckHelp.show();
            isPass = false;
        }
        //請再次確認密碼是否相同

        console.log( $(document.form1).serialize() );

        if(isPass) {

            $.post('signup_api.php', $(document.form1).serialize(), function(data){
                //這裏不是用表單方式發送出去而是用ajax方式發送出去，所以資料JQ物件包起來
                // $(document.form1).serialize()表單序列化

                if(data.success){
                //    是ture代表註冊成功  else就是註冊失敗秀按鈕出來

                } else {

                    submit_btn.show();
                }

                if(data.info){
                    var info = $('#info');
                    info.text(data.info.msg);
                    //api裡面的info文字訊息
                    info.show();

                    // info.attr('class', 'alert alert-'+data.info.type);
                    // 上面是更改bs4外觀樣式樣式
                }
            }, 'json');
        //如果你告訴他是json，他會自動把json的字串轉換原生的陣列或是物件

        }else{
            submit_btn.show();
        }
        return false;
    }
</script>
<div class="index_footer"></div>
</body>
</html>
