<?php 

require("config\it_config.php");

?>
<html>
<head>
<title>HTML_NEW</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<?php

if(isset($_POST['sign'])){

    $querry = "SELECT * FROM `it_team` WHERE `name`='$_POST[user]' AND  `password`='$_POST[password]'";
    $result = mysqli_query($con,$querry);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['AdminID']=$_POST['user'];
        header("Location: home.php");
    }
    else {
        echo "<script>alert('incorrect username or password');</script>";
    }
}

?>



<div class="login-form">
    <h2>IT TEAM LOGIN</h2>
    <form action="index.php" method="post">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Username" name="user">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="password">
        </div>
        
        <button type="submit" name="sign">Sign In</button>

        <!-- <div class="extra">
            <a href="#">Forgot Password ?</a>
            <a href="#">Create an Account</a>
        </div> -->

    </form>
</div>

</body>
</html>