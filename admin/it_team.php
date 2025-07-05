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

<div>
 <?php

   if(isset($_POST["create"])){
	//echo "Submitted";

	
	$it_name = $_POST["it_name"];
	
	$it_phone= $_POST["it_phone"];
	$it_email= $_POST["it_email"];
	$it_password= $_POST["it_pass"];

	$it_querry = "INSERT INTO it_team (name,number,email,password) VALUES ('$it_name','$it_phone','$it_email','$it_password')";
	$it_querry_run = mysqli_query($con,$it_querry);
	if($it_querry_run){
		$_SESSION['it_team']="user added";
		header("Location: it_team.php");
		

	}
	else {
		$_SESSION['it_team']="user failed";
		header("Location: it_team.php");
		

	}
	


	
    
}

?>
</div> 

<section id="main" class="column">
		
		<h4 class="alert_info">Welcome to the free MediaLoot admin panel template, this could be an informative message.</h4>
<section style="display:inline-block" >
	<div class="user_details_form" style="margin:50px 0 30px 50px">
		<form action="it_team.php" method="post" >
			
		    <div  style=" margin-bottom: 30px">
				<label for="">Employee Name</label>
				<input type="text" name="it_name" >
			</div>
			
			
			<div style="margin-bottom: 30px">
				<label for="">Mobile No</label>
				<input type="tel" name="it_phone" id="">
			</div>

			<div style="margin-bottom: 30px">
				<label for="">Email id</label>
				<input type="email" name="it_email" id="">
			</div>

            <div style="margin-bottom: 30px">
				<label for="">Password</label>
				<input type="password" name="it_pass" id="">
			</div>

            
			
			<input type="submit" value="SAVE" name="create"style="margin-top: 30px">
		</form>
		
	</div>
 </section>
</section>

<section>
	<div>
	<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
					<th>IT MEMBER ID</th> 
    				<th>IT Member Name</th> 
    				<th>Mobile Number</th> 
    				<th>Email ID</th> 
    				<!-- <th>Actions</th>  -->
				</tr> 
			</thead> 
			<tbody> 
				<?php 
				
				$query = "SELECT * FROM it_team";
				$query_run= mysqli_query($con , $query);

				if (mysqli_num_rows($query_run) > 0){

					foreach($query_run as $row) {
						?>
				 <tr> 
   					<td><input type="checkbox"></td> 
    				<td> <?php echo $row['id'] ?></td> 
    				<td><?php echo $row['name'] ?></td> 
    				<td><?php echo $row['number'] ?></td> 
    				<td><?php echo $row['email'] ?></td> 
    				

    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
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
			</div><!-- end of #tab1 -->
			
			
	</div>
</section>
 



<?php

include("phpfiles/footer.php");

?>