<!DOCTYPE html>
<html>
<head>
    <title>Neptune - Room Information</title>
    <link rel="stylesheet" href="../style/inforoom.css">
    <link rel="stylesheet" href="../style/intro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include '../navbar.html';
error_reporting(0); ?>
<body>
    <div class="head">
        <h2><i class="fa fa-bed"></i> Room Informations :</h2>
    </div>
    <div class="main">
        <div class="room">
            <?php
            $id = $_GET['id'];
            require_once "../connect.php";
            $recup = $db->prepare('SELECT * FROM rooms WHERE roomNumber = ?');
            $recup->setFetchMode(PDO::FETCH_ASSOC);
            $recup->execute(array($id));
            while ($tab = $recup->fetch()) {
                echo "<h3>".$tab['name']."</h3>";
                echo '<div class="info">';
                if ($tab['capacity'] == 1) {echo '<img class="roompic" src="../images/1person.png">';}
                elseif ($tab['capacity'] == 2) {echo '<img class="roompic" src="../images/2persons.png">';}
                elseif ($tab['capacity'] == 3 or $tab['capacity'] == 4) {echo '<img class="roompic" src="../images/3-4persons.png">';}
                elseif ($tab['capacity'] == 5) {echo '<img class="roompic" src="../images/5persons.png">';}
                elseif ($tab['capacity'] == 6) {echo '<img class="roompic" src="../images/6persons.png">';}
                elseif ($tab['capacity'] == 7) {echo '<img class="roompic" src="../images/7+persons.png">';}
                echo "<h4>Splendid room for $tab[capacity] ";
                if ($tab['capacity'] > 1) {echo "persons, ";}
                else {echo "person, ";}
                if ($tab['isBathroom'] == 1) {echo "with bathrooms ";}
                else {echo "without bathrooms, ";}
                echo "and $tab[exposition] exposition";
                echo "</h4>";
                echo "</div>";

            }
            ?>
        </div>
        <div class="booking">
            <?php
            $actualdate = date('Y-m-d');
            $id = $_GET['id'];
            require_once "../connect.php";
            $recup = $db->prepare('SELECT * FROM rooms WHERE roomNumber = ?');
            $recup->setFetchMode(PDO::FETCH_ASSOC);
            $recup->execute(array($id));
            $recup2 = $db->prepare('SELECT * FROM reservation WHERE id_room = ?');
            $recup2->setFetchMode(PDO::FETCH_ASSOC);
            $recup2->execute(array($id));
            while ($tab = $recup->fetch()) {
                echo "<h5>$tab[price] $ By Night</h5>";

                echo "<form method='post' action='booked.php?id=$id'>
                <fieldset>
                <legend>Arrival and Derparture</legend>
                <input type='date' class='date' value='$actualdate' min='$actualdate' name='start'></input>
                <input type='date' class='date' min='$actualdate' name='end'></input>
                </fieldset>";
                if(empty($_SESSION['id'])){$id = '';}else{$id = $_SESSION['id'];}
                if (!$_SESSION['id']) {
                    echo "<a href='../signin/signin.html'><input class='book' type='button' value='Sign In'></a>";
                }

                elseif ($tab['isAvailable'] == 0) {
                    echo "<input class='booked' type='submit' disabled='true' value='Already Booked'>";
                }
                else {
                    echo "<input class='book' type='submit' value='Book'>";
                }
                
                echo '</form>';
            }
            ?>
        </div>
    </div>

</body>
<footer>
    <h6>
        Website created by Gauthier GALON
    </h6>
</footer>

