<?php 
    include("Class/classprincipale.php");
    $obj_classprincipale = new classprincipale();
    if(isset($_POST['admin_btn'])){
        $obj_classprincipale->connecter($_POST);
    }
    session_start();
    if(isset($_SESSION['id'])){
        header('location:home.php');
    }


?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PAGE DE CONNEXION</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>

    <div class="login-box">
        <h1>Se Connecter</h1>

        <form method="POST" action="">

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="email" name="admin_email" id="username" required>

            </div>

            <div class="textbox" >
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="password" name="admin_pass" required>

            </div>
            

            <input class="btn" type="submit" value="Login" name="admin_btn">

        </form>


    </div>

</body>
<script type="text/javascript">
    window.onload = function(){  // window.onload= une fois la page est ouvert

        var myInput = document.getElementById("username");

        myInput.focus();   // focus : mets le monce dans l'input

    }
</script>


</html>