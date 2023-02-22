<?php
include ("inforoom.php");
$id = $_GET['id'];

$actualdate = date('Y-m-d');
# Formulaire d'inscription
if (isset($_POST["start"], $_POST["end"])
AND !empty($_POST["start"]) AND !empty($_POST["end"])) {
    # Le formulaire est complet
    # On récupère les données de formulaires en désactivant les balises
    $start = date($_POST['start']);
    $end = date($_POST['end']);
    $_SESSION['start'] = $start;
    $_SESSION['end'] = $end;    
    # On se connecte à la base de données
    require_once "../connect.php";
    $recup = $db->prepare("SELECT * FROM reservation WHERE id_user = ?");
    $recup->execute(array($_SESSION['id']));
    if($recup->RowCount() == 0) {
        # On prépare la requête pour récupérer les infos dans la base de données
        $insert = $db->prepare("INSERT INTO reservation(id_user, id_room, start, end) VALUES (?, ?, ?, ?)");
        # On exécute la requête pour récupérer les infos dans la base de données
        $insert->execute(array($_SESSION['id'],$id,$start,$end));
        echo 'Your reservation is awaiting confirmation !';
    }
    else {
        # On prépare la requête pour récupérer les infos dans la base de données
        $insert2 = $db->prepare("UPDATE reservation SET start = ?, end = ?, id_room = ?, isConfirm = 0 WHERE id_user = ?");
        # On exécute la requête pour récupérer les infos dans la base de données
        $insert2->execute(array($start,$end,$id,$_SESSION['id']));
        echo '<p>Your reservation is awaiting confirmation !</p>';
        echo "<a href='../payment/payment.php?id=$_GET[id]'><input class='book' type='submit' value='Payment'></a>";

    }
    
    }

else {
    # Des champs n'ont pas été rempli
    die("Error : Missing Field(s)");
}

?>