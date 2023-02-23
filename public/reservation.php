<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/reservation.css">
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
    <div class="reservation--main-c">
        <div class="reservation--mid-c">
            <div class="reservation-left-side">
                <div class="reservation--room">
                    <div class="reservation--room-img-c"><img src="../img/1kingbed.webp" alt="kingbed" class="reservation--room-img"></div>
                    <div class="reservation--room-desc">
                        <h3>Suite vue sur Carnon</h3>
                        <span class="reservation--room-nbrchamre">1 lit kingsize</span>
                        <span>jeudi,23fev 2023 - samedi,25fev 2023</span>
                        <span>Prix standard</span>
                    </div>
                </div>
                <div class="reservation--contactinfo">
                    <h1>Information de contact</h1>
                    <form action="../functions/insert.php" method="POST">
                        <div class="form-group">
                            <input type="name" name="name" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="surname" name="surname" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="phonenumber" name="number" class="form-control" placeholder="Phone number" required="required" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <button class="main--button-connect" type="submit" name="connect">enregistrer</button>
                        </div>
                    </form>
                </div>
                <div class="reservation--payement">
                    <h2>Information de payement</h2>
                    <input type="cardnumber" name="cardnumber" class="form-control-card" placeholder="Numero de carte" autocomplete="off">
                    <div class="form-group-payement-infos">
                        <input type="cardowner" name="cardowner" class="form-control-card-infos" placeholder="Propriétaire de la carte" autocomplete="off">
                        <input type="cardcvv" name="cardcvv" class="form-control-card-infos" placeholder="CVV" autocomplete="off">
                    </div>
                    <span class="reservation--payement-text">Nous acceptons toutes les cartes de crédit majeur</span>
                </div>
            </div>
            <div class="reservation-right-side">
                <div class="reservation-terms">
                    <h2 class="reservation-terms-title">Terms & Conditions</h2>
                    <span><strong>politique d'annulation</strong></span>
                    <span class="reservation-terms-txt">24 heures avant 11 h 59 (heure locale) le jour de l'arrivée ou 1 nuit de frais : carte de crédit requise.</span>
                </div>
                <div class="reservation-right-side-summary">
                    <h2>Sommaire du prix</h2>
                    <div class="reservation-right-side-summary-price">
                        <span>Séjour 1 nuit</span>
                        <span>€850.00</span>
                    </div>
                    <div class="reservation-right-side-summary-taxes">
                        <span>TVA</span>
                        <span>€128.88</span>
                    </div>
                    <div class="reservation-right-side-summary-total">
                        <span>Coût totale par chambre*</span>
                        <span>€978.88</span>
                    </div>
                    <span class="reservation-right-side-summary-text">*Les changements de taxes ou de frais affecteront le prix total.</span>
                </div>
            </div>
        </div>
    </div>
    <?php
    require("../components/footer.php")
    ?>
</body>

</html>