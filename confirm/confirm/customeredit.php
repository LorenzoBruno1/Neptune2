<?php
include '../admin/customeredit.php';
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$insert = $db->prepare("UPDATE customers SET address = ?, city = ?, zip = ?, region = ?, country = ?, phone = ? WHERE id = ?");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array($_POST['address'],$_POST['city'],$_POST['zip'],$_POST['region'],$_POST['country'],$_POST['phone'], $_GET['id']));
header ('Location: ../admin/userdashboard.php');