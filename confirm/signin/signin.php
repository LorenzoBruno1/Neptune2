<?php
include ("signin.html");

#On créé une session
session_start();
# Formulaire d'inscription
if (isset($_POST["email"], $_POST["password"]) AND !empty($_POST["email"]) AND !empty($_POST["password"] )) {
    # Le formulaire est complet
    # On récupère les données de formulaires en désactivant les balises
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    # On se connecte à la base de données
    require_once "../connect.php";
    
    # On prépare la requête
    $recup = $db->prepare("SELECT * FROM users WHERE email = ? and password = ?");

    # On injecte les données dans la requête
    $recup->execute(array($email, $password));

    if($recup->RowCount() > 0) {
        while ($session = $recup->fetch()){
        $_SESSION['id'] = $session['id'];
        $_SESSION['email'] = $email;
        $_SESSION['lastname'] = $session['lastname'];
        $_SESSION['firstname'] = $session['firstname'];
        $_SESSION['admin'] = $session['isAdmin'];
        }
        $recup2 = $db->prepare("SELECT * FROM customers WHERE id = ?");
        $recup2->execute(array($_SESSION['id']));

        while($session = $recup2->fetch()) {
            $_SESSION['address'] = $session['address'];
            $_SESSION['city'] = $session['city'];
            $_SESSION['zip'] = $session['zip'];
            $_SESSION['region'] = $session['region'];
            $_SESSION['country'] = $session['country'];
            $_SESSION['phone'] = $session['phone'];
        }
        header('Location: ..\ ');
    }
    else {
        die ("Wrong email or password, Try again");
    }
}
else {
    # Des champs n'ont pas été rempli
    die("Error : Missing Field(s)");
}

?>