<?php
include '../admin/useredit.php';
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$insert = $db->prepare("UPDATE users SET firstname = ?, lastname = ?, email = ?, password = ? WHERE id = ?");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password'], $_GET['id']));
header ('Location: ../admin/userdashboard.php');