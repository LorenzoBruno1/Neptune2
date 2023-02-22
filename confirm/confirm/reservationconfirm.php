<?php
session_start();
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$actualdate = date('Y-m-d');
$insert = $db->prepare("UPDATE reservation SET isConfirm = ? WHERE id= ?");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array(1, $_GET['id']));
header ('Location: ../admin/roomdashboard.php');