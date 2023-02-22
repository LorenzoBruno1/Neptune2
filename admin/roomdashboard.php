<!DOCTYPE html>
<html>
<head>
    <title>Neptune - Room Dashboard</title>
    <link rel="stylesheet" href="../style/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include '../navbar.html' ;
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
?>
<body>
<?php
    require_once '../connect.php';
    echo "<h2><i class='fa fa-bed'></i> Room</h2>";
    echo "<table>
            <tr>
                <th colspan='1'>ID</th>
                <th colspan='1'>Name</th>
                <th colspan='1'>Price</th>
                <th colspan='1'>Capacity</th>
                <th colspan='1'>Bathroom</th>
                <th colspan='1'>Exposition</th>
                <th colspan='1'>Available</th>
                <th colspan='2'>Manage</th>
                <th><a href='../confirm/roomadd.php'><button class='create' name='roomadd'><i class='fa fa-plus'></i></button></a></th>
            <tr>";

            $recup = $db->prepare("SELECT * FROM rooms");
            $recup->setFetchMode(PDO::FETCH_ASSOC);
            $recup->execute(array());
            while ($tab = $recup->fetch()) {
            echo "<tr>
                    <td>$tab[roomNumber]</td>
                    <td>$tab[name]</td>
                    <td>$tab[price]</td>
                    <td>$tab[capacity]</td>";
                    if ($tab['isBathroom'] == 0) {
                        echo "<td>Without bathroom</td>";
                    }
                    else {
                        echo "<td>With bathroom</td>";
                    }
                    echo"<td>$tab[exposition]</td>";
                    if ($tab['isAvailable'] == 0) {
                        echo "<td>Not available</td>";
                    }
                    else {
                        echo "<td>Available now</td>";
                    }
                    echo "
                    <td><a href='roomedit.php?id=$tab[roomNumber]'><button class='edit' name='edit'><i class='fa fa-pencil'></i></button></a></td>
                    <td><a href='roomdelete.php?id=$tab[roomNumber]'><button class='delete' name='delete'><i class='fa fa-trash-o'></i></button></a></td>
                </tr>";
                }
            echo "</table>";

            echo "<h2><i class='fa fa-calendar-check-o'></i> Reservation</h2>";
            echo "<table>
            <tr>
                <th colspan='1'>ID</th>
                <th colspan='1'>ID Client</th>
                <th colspan='1'>ID Room</th>
                <th colspan='1'>Arrivée</th>
                <th colspan='1'>Départ</th>
                <th colspan='1'>Confirm</th>
                <th colspan='1'>Payment</th>
                <th colspan='3'>Manage</th>
                <th><a href='../confirm/reservationadd.php'><button class='create' name='reservationadd'><i class='fa fa-plus'></i></button></a></th>
            <tr>";
            $recup2 = $db->prepare("SELECT * FROM reservation");
            $recup2->setFetchMode(PDO::FETCH_ASSOC);
            $recup2->execute(array());
            while ($tab2 = $recup2->fetch()) {
            echo "<tr>
                    <td>$tab2[id]</td>
                    <td>$tab2[id_user]</td>
                    <td>$tab2[id_room]</td>
                    <td>$tab2[start]</td>
                    <td>$tab2[end]</td>";
                    if ($tab2['isConfirm'] == 0) {
                        echo "<td>Not confirmed</td>";
                    }
                    else {
                        echo "<td>Confirmed</td>";
                    }
                    if ($tab2['isPayment'] == 0) {
                        echo "<td>Not payed</td>";
                    }
                    else {
                        echo "<td>Payed</td>";
                    }
            echo "<td><a href='reservationedit.php?id=$tab2[id]'><button class='edit' name='edit'><i class='fa fa-pencil'></i></button></a></td>
                  <td><a href='reservationdelete.php?id=$tab2[id]'><button class='delete' name='delete'><i class='fa fa-trash-o'></i></button></a></td>";
                  if ($tab2['isConfirm'] == 0){
                  echo "<td><a href='../confirm/reservationconfirm.php?id=$tab2[id]'><button class='confirm' name='confirm'><i class='fa fa-check'></i></button></a></td>
                  </tr>";
                  }
                  else {
                    echo "<td><a href='../confirm/reservationunconfirm.php?id=$tab2[id]'><button class='delete' name='unconfirm'><i class='fa fa-times'></i></button></a></td>
                    </tr>";
                  }
                  
            }
            echo "</table>";
?>
</body>
<footer>
    <h6>
        Website created by Gauthier GALON
    </h6>
</footer>