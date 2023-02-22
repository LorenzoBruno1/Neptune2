<!DOCTYPE html>
<html>
<head>
    <title>Neptune - User Edit</title>
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
$recup = $db->prepare("SELECT * FROM customers WHERE id = ?");
$recup->setFetchMode(PDO::FETCH_ASSOC);
$recup->execute(array($_GET['id']));
while ($tab = $recup->fetch()) {
    $address = $tab['address'];
    $city = $tab['city'];
    $zip = $tab['zip'];
    $region = $tab['region'];
    $country = $tab['country'];
    $phone = $tab['phone'];
echo "<form action='../confirm/customeredit.php?id=$_GET[id]' method='post' required>
    <input type='address' name='address' placeholder='Address' value='$address' required>
    <input type='city' name='city' placeholder='City' value='$city' required>
    <input type='zip' name='zip' placeholder='Zip code' value='$zip' required>
    <input type='region' name='region' placeholder='Region' value='$region' required>
    <input type='country' name='country' placeholder='Country' value='$country' required>
    <input type='phone' name='phone' placeholder='Phone' value='$phone' required>
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