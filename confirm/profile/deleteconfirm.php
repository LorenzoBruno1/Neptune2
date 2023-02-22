<?php
require_once "../connect.php";
session_start();
$delete = $db->prepare("DELETE FROM customers WHERE id = ?");
$delete->execute(array($_SESSION['id']));
$delete2 = $db->prepare("DELETE FROM users WHERE id = ?");
$delete2->execute(array($_SESSION['id']));
session_destroy();
header('Location: ..\ ');
?>