<?php 
include '../admin/customeredit.php';
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$delete = $db->prepare("DELETE FROM customers WHERE id = ?");
$delete->setFetchMode(PDO::FETCH_ASSOC);
$delete->execute(array($_GET['id']));
header('Location : ../admin/userdashboard.php');