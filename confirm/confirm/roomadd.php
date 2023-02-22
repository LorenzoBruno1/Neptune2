<?php
session_start();
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$insert = $db->prepare("INSERT INTO rooms (name, price, capacity, exposition) VALUES (?, ?, ?, ?)");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array(' ','0','0',' '));
header ('Location: ../admin/roomdashboard.php');