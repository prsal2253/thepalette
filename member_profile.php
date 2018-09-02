<?php

require __DIR__. '/__db_connect.php';

$pageName = 'member_profile';
//命名頁面

if (empty($_SESSION['user'])) {

    header('Location: ./login.php');
};
?>
<?php include 'page_item/head.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>member_profile</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/member.css">
    <script src="jquery.twzipcode.js"></script>
</head>
<body id="member" class="member_profile">
    <div class="index_top">
        <header><h1>palette</h1></header>
    </div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>member profile</member></li>
            </ul></section>
    <section>
    <div class="index_conten_flex">
        <div class="index_conten_l">
            <div class="item_01">
                <div class="item_01menu"><a href="#"><h6 class="transition">訂單列表</h6><span class="transition">Order List</span></a></div>
                <div class="item_01menu item_01menu_in"><h6 class="transition">會員資料</h6><span class="transition">member profile</span></div>
                <div class="item_01menu"><a href="#"><h6 class="transition">追蹤清單</h6><span class="transition">my favourite</span></a></div>
            </div>
        </div>
        <div class="index_conten_r">
            <div class="member_title"><h2>member profile</h2><span>會員資料</span></div>
            <div class="member_conten">
                <div class="item_02">
                <form action="">
                    <!-- 會員帳號 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_l">會員帳號</div>
                        <div class="item_02_conten_r"><p class="conten_data"><?= $_SESSION['user']['email'] ?></p></div>
                    </div>

                    <!-- 會員密碼 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">會員密碼</div>
                            <div class="item_02_conten_r"><p class="conten_data"><a href="#">修改密碼</a></p></div>
                    </div>

                    <!-- 會員名稱 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">會員名稱</div>
                            <div class="item_02_conten_r">
                                <input class="member_name" type="text" placeholder="<?= $_SESSION['user']['name'] ?>">
                                <!-- 需判斷兩者只能選填一個預設為Ｍ -->
                                <div class="radio_box">
                                    <input type="radio" name="six" value="" checked><span class="radio_content">先生</span></div>
                                <div class="radio_box">
                                    <input type="radio" name="six" value=""><span class="radio_content">小姐</span></div>
                            </div>
                    </div>

                    <!-- 聯絡電話 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">聯絡電話</div>
                            <div class="item_02_conten_r">
                            <input type="text" placeholder="請輸入聯絡電話">
                             </div>
                    </div>

                    <!-- 聯絡地址 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">聯絡地址</div>
                            <div class="item_02_conten_r">
                                <div class="palette_select member_input40">
                                    <!--------------    地址選項S ------------->
                                    <div id="twzipcode">
                                        <div data-role="county"
                                             data-name="表單名稱"
                                             data-value="預設值"
                                             data-style="樣式名稱">
                                        </div>
                                        <div data-role="district"
                                             data-name="district[]"
                                             data-value="大安區"
                                             data-style="district-style">
                                        </div>
                                        <div data-role="zipcode"
                                             data-name="zipcode"
                                             data-value="160"
                                             data-style="zipcode-style">
                                        </div>
                                    </div>

<!--                                    <select class=" ">-->
<!--                                    <option>請選擇城市</option>-->
<!--                                    <option>台北市</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                                <div class="palette_select member_input40">-->
<!--                                        <select class=" ">-->
<!--                                        <option>請選擇地區</option>-->
<!--                                        <option>大同區</option>-->
<!--                                        </select>-->
<!--                                </div>-->
                                <!-- 需判斷地區顯示相對應的郵遞區號 -->
<!--                                <p class="address_num">103</p>-->

                                    <!--------------    地址選項E -------------->
                                <input type="text" class="margin_top" placeholder="請輸入地址">
                            </div>
                    </div>
                    <!-- 生日 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">會員生日</div>
                            <div class="item_02_conten_r">
                                <div class="palette_select member_input40">
                                    <select class="sel_year" rel="years" name="year" ></select>
                                </div>
                                <div class="palette_select member_input40 member_input25">
                                    <select class="sel_month" rel="month" name="month"></select>
                                </div>

                                <div class="palette_select member_input25">
                                    <select class="sel_day" rel="day" name="day"></select>
                                </div>
                            </div>
                    </div>
                     <!-- 電子報 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">訂閱電子報</div>
                            <div class="item_02_conten_r">
                                    <div class="radio_box">
                                        <input type="checkbox" name="" value="" checked>
                                        <span class="radio_content">我願意收到the palette的最新優惠消息</span></div>
                            </div>
                    </div>
                    <div class="item_02_conten">
                        <input type="submit" value="確認修改">
                        <p class="submit_point">會員資料修改完成後請點選確認修改</p>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
<div class="index_footer"></div>
    <!--    地址選項S -->
    <script>$('#twzipcode').twzipcode();</script>
    <!--    地址選項E -->


    <!--    年月日選項S -->
    <script>
        $(function () {
            $.ms_DatePicker({
                YearSelector: ".sel_year",
                MonthSelector: ".sel_month",
                DaySelector: ".sel_day"
            });
            $.ms_DatePicker();
        });
        (function($){
            $.extend({
                ms_DatePicker: function (options) {
                    var defaults = {
                        YearSelector: "#sel_year",
                        MonthSelector: "#sel_month",
                        DaySelector: "#sel_day",
                        YearText: "<?= $_SESSION['user']['year'] ?>",
                        MonthText: "<?= $_SESSION['user']['month'] ?>",
                        DayText: "<?= $_SESSION['user']['day'] ?>",
                        FirstValue: 0
                    };
                    var opts = $.extend({}, defaults, options);
                    var $YearSelector = $(opts.YearSelector);
                    var $MonthSelector = $(opts.MonthSelector);
                    var $DaySelector = $(opts.DaySelector);
                    var YearText = opts.YearText;
                    var MonthText = opts.MonthText;
                    var DayText = opts.DayText;
                    var FirstValue = opts.FirstValue;

                    // 初始化
                    var stry = "<option value=\"" + FirstValue + "\">" + YearText + "</option>";
                    var strm = "<option value=\"" + FirstValue + "\">" + MonthText + "</option>";
                    var strd = "<option value=\"" + FirstValue + "\">" + DayText + "</option>";
                    $YearSelector.html(stry);
                    $MonthSelector.html(strm);
                    $DaySelector.html(strd);

                    // 年份列表
                    var yearNow = new Date().getFullYear();
                    var yearSel = $YearSelector.attr("rel");
                    for (var i = yearNow; i >= 1900; i--) {
                        var sed = yearSel==i?"selected":"";
                        var yearStr = "<option value=\"" + i + "\" " + sed+">" + i + "</option>";
                        $YearSelector.append(yearStr);
                    }

                    // 月份列表
                    var monthSel = $MonthSelector.attr("rel");
                    for (var i = 1; i <= 12; i++) {
                        var sed = monthSel==i?"selected":"";
                        var monthStr = "<option value=\"" + i + "\" "+sed+">" + i + "</option>";
                        $MonthSelector.append(monthStr);
                    }

                    // 日列表(只選擇了年月時候)
                    function BuildDay() {
                        if ($YearSelector.val() == 0 || $MonthSelector.val() == 0) {
                            // 未選擇年份或者月份
                            $DaySelector.html(strd);
                        } else {
                            $DaySelector.html(strd);
                            var year = parseInt($YearSelector.val());
                            var month = parseInt($MonthSelector.val());
                            var dayCount = 0;
                            switch (month) {
                                case 1:
                                case 3:
                                case 5:
                                case 7:
                                case 8:
                                case 10:
                                case 12:
                                    dayCount = 31;
                                    break;
                                case 4:
                                case 6:
                                case 9:
                                case 11:
                                    dayCount = 30;
                                    break;
                                case 2:
                                    dayCount = 28;
                                    if ((year % 4 == 0) && (year % 100 != 0) || (year % 400 == 0)) {
                                        dayCount = 29;
                                    }
                                    break;
                                default:
                                    break;
                            }

                            var daySel = $DaySelector.attr("rel");
                            for (var i = 1; i <= dayCount; i++) {
                                var sed = daySel==i?"selected":"";
                                var dayStr = "<option value=\"" + i + "\" "+sed+">" + i + "</option>";
                                $DaySelector.append(dayStr);
                            }
                        }
                    }
                    $MonthSelector.change(function () {
                        BuildDay();
                    });
                    $YearSelector.change(function () {
                        BuildDay();
                    });
                    if($DaySelector.attr("rel")!=""){
                        BuildDay();
                    }
                } // End ms_DatePicker
            });
        })(jQuery);
    </script>
    <!--    年月日選項E -->
</body>
</html>