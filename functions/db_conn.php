<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=netpune2;charset=utf8','root','');
} 
catch (Exception $e) {
    die('Error : '. $e -> getMessage());
}

?>

