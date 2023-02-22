<!DOCTYPE html>
<html>
<head>
    <title>Neptune - Reservation Edit</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include '../navbar.html' ;
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
?>
<body>
<?php
require_once '../connect.php';
$recup = $db->prepare("SELECT * FROM reservation WHERE id = ?");
$recup->setFetchMode(PDO::FETCH_ASSOC);
$recup->execute(array($_GET['id']));
while ($tab = $recup->fetch()) {
    $id_user = $tab['id_user'];
    $id_room = $tab['id_room'];
    $start = $tab['start'];
    $end = $tab['end'];
    $isconfirm = $tab['isConfirm'];
    $payment = $tab['isConfirm'];


echo "<form action='../confirm/reservationedit.php?id=$_GET[id]' method='post'>
    <input type='id_user' name='id_user' placeholder='id_user' value='$id_user' required>
    <input type='id_room' name='id_room' placeholder='id_room' value='$id_room' required>
    <input type='start' name='start' placeholder='Arrival' value='$start' required>
    <input type='end' name='end' placeholder='Departure' value='$end' required>
    <input type='isconfirm' name='isconfirm' placeholder='Confirmation' value='$isconfirm' required>
    <input type='payment' name='payment' placeholder='Payment' value='$payment' required>
<input type='submit' value='Submit'>
</form>";
}
?>
</body>
<footer>
    <h6>
        Website created by Gauthier GALON
    </h6>
</footer>