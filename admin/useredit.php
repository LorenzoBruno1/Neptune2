<!DOCTYPE html>
<html>
<head>
    <title>Neptune - User Edit</title>
    <link rel="stylesheet" href="../style/index.css">
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
$recup = $db->prepare("SELECT * FROM users WHERE id = ?");
$recup->setFetchMode(PDO::FETCH_ASSOC);
$recup->execute(array($_GET['id']));
while ($tab = $recup->fetch()) {
    $firstname = $tab['firstname'];
    $lastname = $tab['lastname'];
    $email = $tab['email'];
    $password = $tab['password'];

echo "<form action='../confirm/useredit.php?id=$_GET[id]' method='post'>
    <input type='firstname' name='firstname' placeholder='Firstname' value='$firstname' required>
    <input type='lastname' name='lastname' placeholder='Lastname' value='$lastname' required>
    <input type='email' name='email' placeholder='Email address' value='$email' required>
    <input type='password' name='password' placeholder='Password' value='$password' required>
<input type='submit' value='Submit'>
</form>";
}
?>
</body>
<footer>
    <h6>
        Website created by Gauthier GALON
    </h6>
</footer>