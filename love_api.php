<?php

require __DIR__ . '/__db_connect.php';

if(! isset($_SESSION['love'])){
//    如果沒有設定session就把它設定空的陣列
    $_SESSION['love'] = [];

}


$result = [];

$sid = isset($_GET['sid']) ? $_GET['sid'] : 0;

$sql2 = "INSERT INTO `members_favourite`(`member_sid`, `product_sid`, `date` ) VALUES ( ?, ?,  NOW() ) ";

        $stmt2 = $mysqli->prepare($sql2);

        $stmt2->bind_param('ss',
            $_SESSION['user']['member_sid'],
            $_GET['sid']
        );

        $stmt2->execute();
        $af = $stmt2->affected_rows;

        $stmt2->close();

        if($af===1){
            $result['success'] = true;

            $_SESSION['love']=$sid;
        }




echo json_encode($result, JSON_UNESCAPED_UNICODE);







?>

