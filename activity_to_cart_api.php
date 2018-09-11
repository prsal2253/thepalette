<?php
session_start();
//session要用到所以要開

if(! isset($_SESSION['act'])){
//    如果沒有設定session就把它設定空的陣列
    exit;

}

foreach($_SESSION['act'] as $k=>$v){
    $_SESSION['cart'][$k] = $v;

};

unset($_SESSION['act']);

echo json_encode($_SESSION['cart']);