<!DOCTYPE html>
<html>
<head>
    <title>Neptune - Payment</title>
    <link rel="stylesheet" href="../style/sign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include '../navbar.html'?>
<body>
    <div class="sign">
            <h2>
                Payment
            </h2>
        <img id="user" src="../images/cc.png">
        <div class = "connexion">
                <table>
                    <tr>
                        <td>Card Number :</td>
                        <td><input type="phone" placeholder="5355 9012 1234 5678" required></td>
                    </tr>
                    <tr>
                        <td>Name on card :</td>
                        <td><input type="firstname" placeholder="Charles Brown" required></td>
                    </tr>
                    <tr>
                        <td>Exipiration date :</td>
                        <td><input type="firstname" placeholder="10/2025" required></td>
                    </tr>
                    <tr>
                        <td>CVV :</td>
                        <td><input type="password" placeholder="123" required></td>
                    </tr>
                </table>
                <div id="submit">
                    <a href="../confirm/paymentconfirm.php";><button type="submit" class='confirm' ><i class="fa fa-lock"></i> Pay</button></a>
                </div>
        </div>
    </div>
</body>
<footer>
    <h6>
        Website created by Gauthier GALON
    </h6>
</footer>
</html>