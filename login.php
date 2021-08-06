<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
}else{
    ?>
   <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
     
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">CAMPSafe</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarNavDropdowm">
              <ul class="navbar-nav">
                <li class=" nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="residence.html">Residencial</a>
                </li>
              </ul>
            </div>
        </nav>
        <form action="/action_page.php">
            <div class="login" align="center">
            <div class="form-group" align="center">
              <label for="user">username:</label></br>
               <input name="username" type="text"  required/>
            </div>
            <div class="form-group" align="center">
             <label for="psw">password:</label></br>
              <input name="psw" type="password" required/>
            </div>
             <div class="form-group form-check" align="center">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">remember me</label></br>
              <a class="btn btn-primary " href="#" role="button">LOGIN</a>  
            </div>
            <div>
                <h4><a href="passwordreset.html">Forgot password?</a></h4>
            </div>
    </body>
    <div>
        <footer>powered by CrudE llc.|| 2021</footer>
            </div>
        
</html>
    <h2>welcome<?=$_SESSION['sess_user'];?>!<a href="logout.php">logout</a></h2>
    <p>we did it succesfully</p>
    </body>
    </html>
    <?php
}
?>