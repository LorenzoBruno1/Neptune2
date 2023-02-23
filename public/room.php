<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/room.css">
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
    <div class="main-c">
        <div class="welcometext-c">
            <h1>Réserver la chambre qui vous plait !</h1>
            <span>Notre priorité est de s'assurer que tout le monde soit bien acceuillis et mis a l'aise</span>
        </div>
        <div class="rooms-c">
            <div class="room">
                <div class="room--img"><img src="../img/1kingbed.webp" alt="kingbed" class="kingbedimg"></div>
                <div class="room--text-c">
                    <h3 class="room--text-title">1 Lit king size</h3>
                    <p class="room--text-text">Détendez-vous dans une chambre<br /> d'une superficie de 500 à 625 mètres carrés,<br /> dotée d'équipements luxueux tels qu'une<br /> douche à effet pluie, une baignoire<br /> en marbre et des fenêtres allant du sol au plafond.</p>
                </div>
                <div class="room--pricing">
                    <span class="room--pricing-price">€850</span>
                    <span class="room--pricing-avg">par/Nuit (EUR)</span>
                    <span class="room--pricing-btn"><a href="./reservation.php">Select</a></span>
                </div>
            </div>
            <div class="room">
                <div class="room--img"><img src="../img/1kingbedcityview.webp" alt="kingbed" class="kingbedimg"></div>
                <div class="room--text-c">
                    <h3 class="room--text-title">1 Lit king size vue sur la ville</h3>
                    <p class="room--text-text">Admirez les sols en pierre, le tapis <br />et les œuvres d'art remarquables de cette chambre,<br /> d'une superficie comprise entre 500 <br />et 625 pieds carrés, dotée d'une douche<br /> à effet pluie et d'une baignoire en marbre.</p>
                </div>
                <div class="room--pricing">
                    <span class="room--pricing-price">€925</span>
                    <span class="room--pricing-avg">par/Nuit (EUR)</span>
                    <span class="room--pricing-btn"><a href="./reservation.php">Select</a></span>
                </div>
            </div>
            <div class="room">
                <div class="room--img"><img src="../img/1kingbed.webp" alt="kingbed" class="kingbedimg"></div>
                <div class="room--text-c">
                    <h3 class="room--text-title">Studio 2 lits avec balcon</h3>
                    <p class="room--text-text">Ces chambres offrent un espace de <br />700 à 800 pieds carrés, avec deux lits doubles,<br /> un sol en pierre naturelle, des œuvres d'art raffinées<br /> et des coins salon séparés avec vue sur la 57e rue.</p>
                </div>
                <div class="room--pricing">
                    <span class="room--pricing-price">€1000</span>
                    <span class="room--pricing-avg">par/Nuit (EUR)</span>
                    <span class="room--pricing-btn"><a href="./reservation.php">Select</a></span>
                </div>
            </div>
            <span>voir plus</span>
        </div>
    </div>
    <?php
    require("../components/footer.php")
    ?>
</body>

</html>