<?php
session_start();
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$insert = $db->prepare("INSERT INTO customers (address, city, zip, region, country, phone) VALUES (?, ?, ?, ?, ?, ?)");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array(' ',' ','99999',' ',' ','0000000000'));
header ('Location: ../admin/userdashboard.php');