<?php
include '../admin/roomedit.php';
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$insert = $db->prepare("UPDATE rooms SET name = ?, price = ?, capacity = ?, isBathroom = ?, exposition = ?, isAvailable = ? WHERE roomNumber = ?");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array($_POST['name'],$_POST['price'],$_POST['capacity'],$_POST['bathroom'],$_POST['exposition'],$_POST['available'], $_GET['id']));
header ('Location: ../admin/roomdashboard.php');