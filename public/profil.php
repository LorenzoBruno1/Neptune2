<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/profil.css">
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
    require("../components/navbar.php")
    ?>
    <div class="profil-main-c">
        <div class="profil-middle">
            <div class="profil-middle-introduction">
                <h1>Bonjour Lorenzo !</h1>
                <span>voici vos informations personnels , n'hésiter pas a les modifier si elles sont incorrects</span>
                <span>ou consulter vos <a href="#reservations" class="profil-introduction-link">réservations</a></span>
            </div>
            <div class="profil-general">
                <h2 class="profil-general-title">Géneral</h2>
                <hr>
                <div class="profil-name-c">
                    <span class="profil-general-name">Nom du profil</span>
                    <input type="text" value="Lorenzo" class="profil-name-input">
                </div>
                <div class="profil-name-c">
                    <span class="profil-general-name">Prenom du profil</span>
                    <input type="text" value="Bruno" class="profil-name-input">
                </div>
            </div>
            <div class="profil-general">
                <h2 class="profil-general-title">Localisation</h2>
                <hr>
                <div class="profil-localisation">
                    <div class="profil-name-c">
                        <span class="profil-general-country">Pays</span>
                        <input type="text" value="France" class="profil-name-country">
                    </div>
                    <div class="profil-name-c">
                        <span class="profil-general-city">Ville</span>
                        <input type="text" value="Montpellier" class="profil-name-city">
                    </div>
                </div>
                <div class="profil-name-c">
                    <span class="profil-general-name">Adresse</span>
                    <input type="text" value="6 Rue maguelone, 34000" class="profil-name-input">
                </div>
            </div>
            <div class="profil-general">
                <h2 class="profil-general-title">Contact</h2>
                <hr>
                <div class="profil-name-c">
                    <span class="profil-general-name">Email</span>
                    <input type="text" value="lorenzobrunopro@gmail.com" class="profil-name-input">
                </div>
                <div class="profil-number-c">
                    <span class="profil-general-name">Numéro de télephone</span>
                    <input type="text" value="0603******" class="profil-name-input">
                </div>
            </div>
            <div class="profil-general">
                <h2 class="profil-general-title" id="reservations">Vos Réservation</h2>
                <hr>
                <div class="reservation-list">
                    <div class="profil-name-c">
                        <span class="profil-general-name">Date</span>
                        <input type="text" value="23/02-25/02" class="profil-reservation-date">
                    </div>
                    <div class="profil-number-c">
                        <span class="profil-general-name">Numéro de chambre</span>
                        <input type="text" value="N°356" class="profil-reservation-roomnbr">
                    </div>
                    <div class="profil-number-c">
                            <span class="profil-general-name">Specificité</span>
                            <input type="text" value="1 lit King size" class="profil-reservation-roomnbr">
                    </div>
                    <div class="profil-number-c">
                            <span class="profil-general-name">Personnes</span>
                            <input type="text" value="2personnes" class="profil-reservation-roomnbr">
                        </div>
                </div>
                <div class="profil-number-btn">
                            <button class="reservation-cancel-btn">Annuler cette réservation</button>
                        </div>
            </div>
        </div>
    </div>
    <?php
    require("../components/footer.php")
    ?>
</body>

</html>