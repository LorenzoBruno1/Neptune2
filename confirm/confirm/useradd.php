<?php
session_start();
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$insert = $db->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array(' ',' ',' ',' '));
header ('Location: ../admin/userdashboard.php');