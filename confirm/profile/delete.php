<!DOCTYPE html>
<html>
<head>
    <title>Neptune - Delete</title>
    <link rel="stylesheet" href="../style/delete.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include '../navbar.html'; ?>
<body>
<div class="sign">
    <h2>
        Sign In
    </h2>
    <img id="user" src="../images/user.png">
    <div class = "connexion">
        <form method="post" action="deleteconfirm.php">
            <h4>Are you sure you want to delete your account?
                All information such as your email address or password will be deleted!</h4>
            <div id="submit">
                <input type="submit" value="DELETE"></button>
            </div>
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