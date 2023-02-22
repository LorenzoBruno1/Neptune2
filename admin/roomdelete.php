<!DOCTYPE html>
<html>
<head>
    <title>Neptune - Room Delete</title>
    <link rel="stylesheet" href="../style/delete.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include '../navbar.html' ;
if ($_SESSION['admin'] == 0) {
    header('Location: ../');
}
?>
<body>
<div class = "connexion">
        <?php echo "<form method='post' action='../confirm/roomdelete.php?id=$_GET[id]'>";?>
            <h4>Are you sure you want to delete this account ? </h4>
            <div id="submit">
                <input type="submit" value="DELETE"></button>
            </div>
        </form>
</body>
<footer>

</footer>