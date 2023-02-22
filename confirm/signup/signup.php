<?php
include ("signup.html");

# On lance une session
session_start();

# Formulaire d'inscription
if (isset($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"])
AND !empty($_POST["firstname"]) AND !empty($_POST["lastname"]) AND !empty($_POST["email"]) AND !empty($_POST["password"])) {
    # Le formulaire est complet
    # On récupère les données de formulaires en désactivant les balises
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    # On se connecte à la base de données
    require_once "../connect.php";

    # On prépare la requête pour récupérer les infos dans la base de données
    $recup = $db->prepare("SELECT * FROM users WHERE email = ?");

    # On exécute la requête pour récupérer les infos dans la base de données
    $recup->execute(array($email));
    
    # On prepare la requête pour insérer les infos dans la base de données
    $insert = $db->prepare("INSERT INTO users(firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
    
    if($recup->RowCount() == 0) {

        # On exécute la requête pour insérer les infos dans la base de données
        $insert->execute(array($firstname, $lastname, $email, $password));

        # On exécute la requête pour récupérer les infos dans la base de données
        $recup->execute(array($email));
        while ($session = $recup->fetch()){
            # On lui créé sa session avec le nom de son ID
            $_SESSION['email'] = $email;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['id'] = $session['id'];
            $_SESSION['admin'] = $session['isAdmin'];
        }
        header('Location: ..\ ');
    }
    else {
        # L'adresse email existe deja
        die("You have already an account with this email address");
    }
}
else {
    # Des champs n'ont pas été rempli
    die("Error : Missing Field(s)");
}

?>