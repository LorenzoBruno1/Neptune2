<!DOCTYPE html>
<html>
<head>
    <title>Neptune - User Dashboard</title>
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
    echo "<h2><i class='fa fa-user'></i> Users</h2>";
    echo "<table>
            <tr>
                <th colspan='1'>ID</th>
                <th colspan='1'>Firstname</th>
                <th colspan='1'>Lastname</th>
                <th colspan='1'>Email</th>
                <th colspan='1'>Password</th>
                <th colspan='2'>Manage</th>
                <th><a href='../confirm/useradd.php'><button class='create' name='usercreate'><i class='fa fa-plus'></i></button></a></th>
            <tr>";

            $recup = $db->prepare("SELECT * FROM users");
            $recup->setFetchMode(PDO::FETCH_ASSOC);
            $recup->execute(array());
            while ($tab = $recup->fetch()) {
            echo "<tr>
                    <td>$tab[id]</td>
                    <td>$tab[firstname]</td>
                    <td>$tab[lastname]</td>
                    <td>$tab[email]</td>
                    <td>$tab[password]</td>
                    <td><a href='useredit.php?id=$tab[id]'><button class='edit' name='edit'><i class='fa fa-pencil'></i></button></a></td>
                    <td><a href='userdelete.php?id=$tab[id]'><button class='delete' name='delete'><i class='fa fa-trash-o'></i></button></a></td>
                </tr>";
                }
            echo "</table>";
            echo "<h2><i class='fa fa-info-circle'></i> Informations</h2>";
            echo "<table>
            <tr>
                <th colspan='1'>ID</th>
                <th colspan='1'>Address</th>
                <th colspan='1'>City</th>
                <th colspan='1'>ZIP</th>
                <th colspan='1'>Region</th>
                <th colspan='1'>Country</th>
                <th colspan='1'>Phone</th>
                <th colspan='2'>Manage</th>
                <th><a href='../confirm/customeradd.php'><button class='create' name='customeradd'><i class='fa fa-plus'></i></button></a></th>
            <tr>";
            $recup2 = $db->prepare("SELECT * FROM customers");
            $recup2->setFetchMode(PDO::FETCH_ASSOC);
            $recup2->execute(array());
            while ($tab2 = $recup2->fetch()) {
            echo "<tr>
                    <td>$tab2[id]</td>
                    <td>$tab2[address]</td>
                    <td>$tab2[city]</td>
                    <td>$tab2[zip]</td>
                    <td>$tab2[region]</td>
                    <td>$tab2[country]</td>
                    <td>$tab2[phone]</td>
                    <td><a href='customeredit.php?id=$tab2[id]'><button class='edit' name='edit'><i class='fa fa-pencil'></i></button></a></td>
                    <td><a href='customerdelete.php?id=$tab2[id]'><button class='delete' name='delete'><i class='fa fa-trash-o'></i></button></a></td>
                </tr>";
            }
            echo "</table>";
?>
</body>
<footer>
    <h6>
        Website created by Gauthier GALON
    </h6>
</footer>