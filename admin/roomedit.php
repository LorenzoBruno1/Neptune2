<!DOCTYPE html>
<html>
<head>
    <title>Neptune - Room Edit</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include '../navbar.html'; ?>
<?php include '../navbar.html' ;
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
?>
<body>
<?php
require_once '../connect.php';
$recup = $db->prepare("SELECT * FROM rooms WHERE roomNumber = ?");
$recup->setFetchMode(PDO::FETCH_ASSOC);
$recup->execute(array($_GET['id']));
while ($tab = $recup->fetch()) {
    $name = $tab['name'];
    $price =$tab['price'];
    $capacity = $tab['capacity'];
    $bathroom = $tab['isBathroom'];
    $exposition = $tab['exposition'];
    $available = $tab['isAvailable'];

echo "<form action='../confirm/roomedit.php?id=$_GET[id]' method='post'>
    <input type='name' name='name' placeholder='Name' value='$name'>
    <input type='price' name='price' placeholder='Price' value='$price'>
    <input type='capacity' name='capacity' placeholder='Capacity' value='$capacity' required>
    <input type='bathroom' name='bathroom' placeholder='Bathroom' value='$bathroom' required>
    <input type='exposition' name='exposition' placeholder='Exposition' value='$exposition' required>
    <input type='isAvailable' name='available' placeholder='Available' value='$available' required>
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