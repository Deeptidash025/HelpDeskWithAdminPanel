<?php

session_start();
if(!isset($_SESSION['AdminID'])){
    header("Location: index.php");
}


?>



<?php

include("phpfiles/header.php");
include("phpfiles/navbar.php");


?>
 <h1>Welcome to admin panel</h1>


<?php

include("phpfiles/footer.php");

?>

