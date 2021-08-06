<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
}else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>welcome</title>
    </head>
    <body>
        <h1>create a registration and log in form</h1>
        <h2>welcome,<?=$_SESSION['sess_user'];?><a href="logout.php">logout</a></h2>
 <p>we did it successfully created </p>
    </body>
    </html>
    <?php
}
?>