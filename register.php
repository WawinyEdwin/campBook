<!DOCTYPE html>
<html>
    <head>
        <title>register</title>
    </head>
    <body>
        <h1>create registration and login form</h1>
        <p><a href="register.php">register</a>|<a href="register.php">register</a></p>
        <h2>registrationform</h2>
        <form action="" method="POST">
            <legend>
                <fieldset>
                    username:<input type="text" name="user"></br>
                    password:<input type="password" name="psw"></br>
                    <input type="submit" value="register" name="submit"/>
                </fieldset>
            </legend>
</form>
<?php
if(!isset($_POST["submit"])){
    if(!empty($_POST['user'])&&!empty($_POST['psw'])){
        $user=$_POST['user'];
        $psw=$_POST['psw'];
        $con=mysql_connect('localhost','root') or die(mysql_error());
        mysql_select_db('user_registration') or die("cannot select DB");
        $query=mysql_query
        ("SELECT*FROM login WHERE username="".$_user."" ");
        $numrows=mysql_num_rows($query);
        if($numrows=0){
            $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";
            $result=mysql_query($sql);
            if($result){
                echo "account created succesfully";
            }else{
                echo "failure";
            }
        }else{
            echo "the username already exists!";
        }
    }else{
        echo "all fields are required!";
    }
}
?>
    </body>
</html>