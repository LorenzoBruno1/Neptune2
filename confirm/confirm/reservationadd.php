<?php
session_start();
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$actualdate = date('Y-m-d');
$insert = $db->prepare("INSERT INTO reservation (id_user, id_room, start, end, isConfirm) VALUES (?, ?, ?, ?, ?)");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array(0,0,$actualdate,$actualdate,0));
header ('Location: ../admin/roomdashboard.php');