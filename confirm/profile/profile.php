<!DOCTYPE html>
<html>
<head>
    <title>Neptune - Profile</title>
    <link rel="stylesheet" href="../style/sign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
include '../navbar.html';
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
if(empty($_SESSION['zip'])){$zip = '';}else{$zip = $_SESSION['zip'];}
if(empty($_SESSION['address'])){$address = '';}else{$address = $_SESSION['address'];}
if(empty($_SESSION['city'])){$city = '';}else{$city = $_SESSION['city'];}
if(empty($_SESSION['region'])){$region = '';}else{$region = $_SESSION['region'];}
if(empty($_SESSION['country'])){$country = '';}else{$country = $_SESSION['country'];}
if(empty($_SESSION['phone'])){$phone = '';}else{$phone = $_SESSION['phone'];}

?>
<body>
<div class="sign">
    <h2>
        Edit your Profile
    </h2>
    <img id="user" src="../images/user.png">
    <h3> <?php echo "$firstname "."$lastname"; ?></h3>
    <h4> <?php echo "Address :"." $address"; ?></h4>
    <h4> <?php echo "City :"." $city"; ?></h4>
    <h4> <?php echo "Zip Code :"." $zip"; ?></h4>
    <h4> <?php echo "Region :"." $region"; ?></h4>
    <h4> <?php echo "Country :"." $country"; ?></h4>
    <h4> <?php echo "Phone number :"." $phone"; ?></h4>

    <div class = "connexion">
        <form method="post" action="edit.php">
            <table>
                <tr>
                    <td>Address :</td>
                    <td><input type="address" name="address" value="<?php echo $address;?>" placeholder="239 Rue de l'étang de l'or"></td>
                </tr>
                <tr>
                    <td>City :</td>
                    <td><input type="city" name="city" value="<?php echo $city;?>" placeholder="Carnon"></td>
                </tr>
                <tr>
                    <td>Zip Code :</td>
                    <td><input type="zip" name="zip" value="<?php echo $zip;?>" placeholder="34280"></td>
                </tr>
                <tr>
                    <td>Region :</td>
                    <td><input type="region" name="region" value="<?php echo $region;?>" placeholder="Occitanie"></td>
                </tr>
                <tr>
                    <td>Country :</td>
                    <td><input type="country" name="country" value="<?php echo $country;?>" placeholder="France"></td>
                </tr>
                <tr>
                    <td>Phone number :</td>
                    <td><input type="phone" name="phone" value="<?php echo $phone;?>" placeholder="06 48 75 62 45"></td>
                </tr>
            </table>
            <div id="submit">
                <input type="submit" name="submit" value="Submit Changes">
            </div>
        </form>
        <form method="post" action="delete.php">
            <input type="submit" name="delete" value="Delete your Account">
        </form>
    </div>
</div>
</body>
<footer>
    <h6>
        Website created by Gauthier GALON
    </h6>
</footer>
</html>