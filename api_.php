<?php
require __DIR__. '/__db_connect.php';

print_r($_POST);
print_r($_SESSION['user']['member_sid']);
echo '<br>';
    $sql = "UPDATE `members` SET 
        `name`=?, 
        `gender`=?, 
        `mobile`=?,
        `address_city`=?,
        `address_side`=?, 
        `address_post`=?, 
        `address`=?, 
        `year`=?, 
        `month`=?,
        `day`=? 
        WHERE `member_sid`=?";
//最後一格後面不能有逗號！
    $stmt = $mysqli->prepare($sql);
//            $stmt去接mysqli那個值
    $stmt->bind_param('ssssssssssi',
        $_POST['name'],
        $_POST['gender'],
        $_POST['mobile'],
        $_POST['address_city'],

        $_POST['address_side'],
        $_POST['address_post'],
        $_POST['address'],
        $_POST['year'],

        $_POST['month'],
        $_POST['day'],
        $_SESSION['user']['member_sid']
//最後一格後面不能有逗號！
    );

    $stmt->execute();
    $af = $stmt->affected_rows;
    print_r($af);
    print_r($stmt);
$stmt->close();

?>
<!--UPDATE `members` SET `name`="213123123", `gender`="1", `mobile`="123123123",`address_city`="澎湖縣", `address_side`="馬公市", `address_post`="880", `address`="走陸路" , `year`="2011", `month`="2",`day`="14" WHERE `member_sid`="46"-->
