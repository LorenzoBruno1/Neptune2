<?php
include ("profile.php");

# On lance une session
session_start();

# Formulaire d'inscription
if (isset($_POST["address"], $_POST["city"], $_POST["zip"], $_POST["region"], $_POST["country"], $_POST["phone"])
    AND !empty($_POST["address"]) AND !empty($_POST["city"]) AND !empty($_POST["zip"]) AND !empty($_POST["region"])AND !empty($_POST["country"]) AND !empty($_POST["phone"])) {
    # Le formulaire est complet
    # On récupère les données de formulaires en désactivant les balises
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $zip = htmlspecialchars($_POST['zip']);
    $region = htmlspecialchars($_POST['region']);
    $country = htmlspecialchars($_POST['country']);
    $phone = htmlspecialchars($_POST['phone']);
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

    # On se connecte à la base de données
    require_once "../connect.php";

    # On exécute la requête pour récupérer les infos dans la base de données
    $recup = $db->prepare("SELECT * FROM customers WHERE id = ?");
    $recup->execute(array($id));
    if ($recup->RowCount() > 0) {
        $insert = $db->prepare("UPDATE customers SET address = ?, city = ?, zip = ?, region = ?, country = ?, phone = ? WHERE id = ?");

        $insert->execute(array($address, $city, $zip, $region, $country, $phone, $id));
    }
    else {
        # On prepare la requête pour insérer les infos dans la base de données
        $insert2 = $db->prepare("INSERT INTO customers(id, address, city, zip, region, country, phone) VALUES (?, ?, ?, ?, ?, ?, ?)");

        # On exécute la requête pour insérer les infos dans la base de données
        $insert2->execute(array($id, $address, $city, $zip, $region, $country, $phone));

    }
    $_SESSION['address'] = $address;
    $_SESSION['city'] = $city;
    $_SESSION['zip']= $zip;
    $_SESSION['region'] = $region;
    $_SESSION['country'] = $country;
    $_SESSION['phone'] = $phone;
    header("Location: profile.php");
}
else {
        # Des champs n'ont pas été rempli
        die("Error : Missing Field(s)");
    }
?>