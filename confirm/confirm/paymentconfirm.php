<?php
session_start();
require_once '../connect.php';
$insert = $db->prepare("UPDATE reservation SET isPayment = ? WHERE id_user = ?");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array(1, $_SESSION['id']));
header ('Location: ../booking/booking.php');