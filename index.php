<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <title>Acceuil</title>
</head>

<body>
    <?php
    include "./components/navbar.php";
    ?>
    <div class="main--main">
        <button class="main--button"><a href="./public/room.php">Réserver</a></button>
    </div>
    <div class="hero-c">
        <form action="" method="post">
            <div class="form-group">
                <span>Arrivé : </span><input type="date" name="start-date" class="hero--start">
                <span>Départ : </span><input type="date" name="end-date" class="hero--end">
                <button class="hero--button">Réserver</button>
            </div>
        </form>
    </div>
    <div class="introduction-c">
        <h1 class="introduction--title">THE ORIGINALS BOUTIQUE, HÔTEL NEPTUNE, MONTPELLIER SUD</h1>
        <p class="introduction--text">Face au port de plaisance de Carnon et à 700 mètres des plages, Mr et Mme
            Martin, <br />les parents de Mme Solignac font construire en 1978 un grand établissement avec un
            restaurant, une terrasse, une piscine.</p>
    </div>
    <div class="services-c">
        <div class="services--img-c">
            <img src="./img/bed.png" alt="bed" class="service--img" height="200px">
            <img src="./img/breakfast.png" alt="bed" class="service--img" height="200px">
            <img src="./img/buisnesscenter.png" alt="bed" class="service--img" height="200px">
            <img src="./img/garden.png" alt="bed" class="service--img" height="200px">
            <img src="./img/gym.png" alt="bed" class="service--img" height="200px">
            <img src="./img/hottub.png" alt="bed" class="service--img" height="200px">
            <img src="./img/housekeeping.png" alt="bed" class="service--img" height="200px">
            <img src="./img/kitchenette.png" alt="bed" class="service--img" height="200px">
            <img src="./img/pool.png" alt="bed" class="service--img" height="200px">
            <img src="./img/wifi.png" alt="bed" class="service--img" height="200px">
        </div>
    </div>
    <?php
    include('./components/footer.php')
    ?>
    </div>
</body>

</html>