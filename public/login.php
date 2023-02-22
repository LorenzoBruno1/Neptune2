<?php
include "../functions/db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/login.css">
    <title>Acceuil</title>
</head>
<body>
    <?php
        include '../components/navbar.php';
    ?>
    <div class="main-c">
        <div class="main--title">
            <h1>Connectez-vous</h1>
        </div>
        <div class="main--hero">
            <hr class="main--break">
            <h4 class="main--hero--title">Avec votre adresse mail</h4>
            <div class="login-form">
                <form action="../functions/insert.php" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <button class="main--button-connect" type="submit" name="connect">Se connecter</button>
                    </div>
                </form>
                <hr class="api-spacer">
                <p class="connecter-create">Vous n'avez pas de compte ?</p>
                <button class="main--button-create"><a href="./register">Créer un compte</a></button>
            </div>
            <a href="../admin/loginadmin.php">Admin</a>
        </div>
    </div>
</body>
</html>