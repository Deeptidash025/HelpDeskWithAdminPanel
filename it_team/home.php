<?php

session_start();
if(!isset($_SESSION['AdminID'])){
    header("Location: index.php");
}
?>

<?php 

include ("phpfiles/header.php");
include ("phpfiles/navbar.php");

?>