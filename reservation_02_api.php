<?php
require __DIR__ . '/__db_connect.php';

if (isset($_SESSION['user'])and isset($_SESSION['orders_sid'])) {

    $od_sql = "INSERT INTO `reservation_sid`(
                     `member_sid`, `order_sid`, `reservation_date`, `reservation_time`
                    ) VALUES (?,?,?,?)";
    $od_stmt = $mysqli->prepare($od_sql);


    $o_stmt->bind_param('iiss',
        $_SESSION['user']['member_sid'],
        $_SESSION['orders_sid'],
        $_POST['reservation_date'],
        $_POST['reservation_time']
    );

    $o_stmt->execute();
    unset($_SESSION['orders_sid']);

}


?>
