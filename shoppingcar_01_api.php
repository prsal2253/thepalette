<?php

require __DIR__ . '/__db_connect.php';

$pageName = 'cart';

$_SESSION['sighup_transport'] = $_POST['transport'];
$_SESSION['sighup_pay'] = $_POST['pay'];


?>
