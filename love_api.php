<?php

require __DIR__ . '/__db_connect.php';

$result = [];
//if(isset($_GET['sid'])){
//$sql2 = 'SELECT * FROM `members_favourite` WHERE `member_sid`='.$_SESSION['user']['member_sid']." AND `product_sid`=".$_GET['sid'];
//
//$rs2 = $mysqli->query($sql2);
//
//while ($r = $rs2->fetch_assoc()) {
//
//
//    print_r($r['product_sid']);
//}
//
//}

$sql = "INSERT INTO `members_favourite`(`member_sid`, `product_sid`, `date` ) VALUES ( ?, ?,  NOW() ) ";

        $stmt = $mysqli->prepare($sql);

        $stmt->bind_param('ss',
            $_SESSION['user']['member_sid'],
            $_GET['sid']
        );

        $stmt->execute();
        $af = $stmt->affected_rows;

        $stmt->close();

        if($af===1){
            $result['success'] = true;
        }
echo json_encode($result, JSON_UNESCAPED_UNICODE);







?>

