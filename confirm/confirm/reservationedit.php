<?php
include '../admin/reservationedit.php';
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
require_once '../connect.php';
$insert = $db->prepare("UPDATE reservation SET id_user = ?, id_room = ?, start = ?, end = ?, isConfirm = ?, isPayment = ? WHERE id = ?");
$insert->setFetchMode(PDO::FETCH_ASSOC);
$insert->execute(array($_POST['id_user'],$_POST['id_room'],$_POST['start'],$_POST['end'],$_POST['isconfirm'], $_POST['payment'], $_GET['id']));
header ('Location: ../admin/roomdashboard.php');