<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=neptune;charset=utf8','root','password');
} 
catch (Exception $e) {
    die('Error : '. $e -> getMessage());
}

?>