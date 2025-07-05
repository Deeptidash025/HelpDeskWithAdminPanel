<?php

session_start();
if(!isset($_SESSION['AdminID'])){
    header("Location: index.php");
}
?>
<?php 

require("config\it_config.php");

?>

<?php 

include ("phpfiles/header.php");
include ("phpfiles/navbar.php");

?>

<?php

if (isset($_POST["currpass"])){
    $cur = $_POST["currpass"];    
    $new = $_POST["newpass"];    
    $conf = $_POST["confpass"];  
    
    if($new <> $conf){
        echo "New password and confirm password doesn't match";

    }
    elseif ($new == $cur){
        echo "New password cannot be same as old password";
    }
    else {
        $sql = "SELECT * FROM it_team WHERE password='$cur'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result) > 0){
            $sql = "UPDATE it_team SET password='$new'";
            $sql_run = mysqli_query($con,$sql);
            if($sql_run){
                echo "password has been changed";
            }
            else {
                echo "Invalid current password";
            }
           
            }
        }
    }

?>

<section id="main" class="column">
    <form action="" method="post">
    <div style="margin: 20px 0px 20px 100px">
    Current Password <input type="password" name="currpass" id="">
    </div>
    <br>
    <div style="margin: 20px 0px 20px 100px">
    New Password <input type="password" name="newpass" id="">
    </div>
    <br>

    <div style="margin: 20px 0px 20px 100px">
    Confirm Password <input type="password" name="confpass" id="">
    </div>
    
    <br>
     
    <div style="margin: 20px 0px 20px 100px">
    <button type="submit" name="change">Change Password</button>
    </div>
    
    </form>
   

</section>