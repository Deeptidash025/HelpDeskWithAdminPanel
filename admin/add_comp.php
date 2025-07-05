<?php

session_start();
if(!isset($_SESSION['AdminID'])){
    header("Location: index.php");
}


?>
<?php 

require("config/user_config.php");

?>

<?php

include("phpfiles/header.php");
include("phpfiles/navbar.php");


?>

<?php

if(isset($_POST["save_dep"])){

		

    $type =$_POST["type"];


    
    $dep_querry = "INSERT INTO addcomp (complain) VALUES('$type')";
    $dep_querry_run = mysqli_query($con , $dep_querry);
    if($dep_querry_run){
        $_SESSION['status']="User added";
        header("Location: add_comp.php");
    }
    else {
        $_SESSION['status']="User denied";
        header("Location: add_comp.php");
        
    }



}

?>
<section id="main" class="column">
		
	<h4 class="alert_info">Welcome to the free MediaLoot admin panel template, this could be an informative message.</h4>


<section>
    <div style="margin:50px 0 50px 100px">
        <form action="add_comp.php" method="post">
            <label for="">Add Complain Type</label>
            <input type="text" name="type" id=""> <br>
            <input type="submit" value="Add" name="save_dep">
        </form>
    </div>
</section>

<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
				   <th></t> 
    				<th>Sl No</th> 
    				<th>Complain type</th> 
    				<th>Status</th> 

    				<th>Actions</th> 
				</tr> 
			</thead> 
            <?php 
				
				$query = "SELECT * FROM addcomp";
				$query_run= mysqli_query($con , $query);

				if (mysqli_num_rows($query_run) > 0){

					foreach($query_run as $row) {
						?>
				<tr> 
				<td><input type="checkbox"></td> 
				<td> <?php echo $row['id'] ?></td>
				<td><?php echo $row['complain'] ?></td>
				<td>Active</td>
				<td></td>
				</tr> 

				<?php
					}

				}
				else {
					?>
					<tr>
						<td>
							No record
						</td>
					</tr>
					<?php
				}

				?>
				
			</tbody> 
</table>
</div>

  </section>