<?php

# On lance une session
session_start();

# Formulaire d'inscription
if (
    isset($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"])
    and !empty($_POST["firstname"]) and !empty($_POST["lastname"]) and !empty($_POST["email"]) and !empty($_POST["password"])
) {
    # Le formulaire est complet
    # On récupère les données de formulaires en désactivant les balises
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_ARGON2ID);

    # On se connecte à la base de données
    require_once "../functions/db_conn.php";

    # On prépare la requête pour récupérer les infos dans la base de données
    $recup = $db->prepare("SELECT * FROM users WHERE email = ?");

    # On exécute la requête pour récupérer les infos dans la base de données
    $recup->execute(array($email));

    # On prepare la requête pour insérer les infos dans la base de données
    $insert = $db->prepare("INSERT INTO users(firstname, lastname, email, password) VALUES (?, ?, ?, ?)");

    if ($recup->RowCount() == 0) {

        # On exécute la requête pour insérer les infos dans la base de données
        $insert->execute(array($firstname, $lastname, $email, $password));

        # On exécute la requête pour récupérer les infos dans la base de données
        $recup->execute(array($email));
        while ($session = $recup->fetch()) {
            # On lui créé sa session avec le nom de son ID
            $_SESSION['email'] = $email;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['id'] = $session['id'];
            $_SESSION['admin'] = $session['isAdmin'];
        }
        header('Location: ./ ');
    } else {
        # L'adresse email existe deja
        die("You have already an account with this email address");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Neptune</title>
</head>

<body>
    <?php
    include('../components/navbar.php');
    ?>
    <div class="main-c">
        <div class="main--title">
            <h1>Créer un compte</h1>
        </div>
        <div class="main--hero">
            <hr class="main--break">
            <h4 class="main--hero--title">Entrez vos informations</h4>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="firstname" class="form-control-2" placeholder="Nom" required="required" autocomplete="off">
                    <input type="text" name="lastname" class="form-control-2" placeholder="Prenom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                </div>
                <div class="form-group">
                    <button class="main--button-connect" type="submit" name="submit">Créer un compte</button>
                </div>
            </form>
            <hr class="api-spacer">
            <p class="connecter-create">Vous avez déja un compte ?</p>
            <button class="main--button-create"><a href="./login">Se connecter</a></button>
        </div>
    </div>
</body>

</html>