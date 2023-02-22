<?php
include '../admin/roomdelete.php';
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$delete = $db->prepare("DELETE FROM rooms WHERE roomNumber = ?");
$delete->setFetchMode(PDO::FETCH_ASSOC);
$delete->execute(array($_GET['id']));
header('Location : ../admin/roomdelete.php');