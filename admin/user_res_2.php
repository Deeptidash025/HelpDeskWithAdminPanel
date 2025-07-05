
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

	$dep_name = $_POST["dep"];
	$name = $_POST["name"];
	$ip_ad = $_POST["ip"];
	$sys  = $_POST["system"];
	$phone= $_POST["phone"];
	$email= $_POST["email"];

	$user_querry = "INSERT INTO users (department,name,ip,system,mobile,email) VALUES ('$dep_name','$name','$ip_ad','$sys','$phone','$email')";
	$user_querry_run = mysqli_query($con,$user_querry);
	if($user_querry_run){
		$_SESSION['status']="user added";
		header("Location: user_res_2.php");
		

	}
	else {
		$_SESSION['status']="user failed";
		header("Location: user_res_2.php");
		

	}
	


	
    
	// $sql = "INSERT INTO users { Department Name, Employee Name, IP address, System Name, Mobile No,Email id} VALUES{?,?,?,?,?,?}";
	// $startinsert = $db -> prepare($sql);
	// $result = $startinsert->execute([$dep_name,$name,$ip_ad,$sys,$phone,$email]);
	// if ($result){
	// 	echo ("Succesed");

	// }
	// else {
	//     echo ("No");
	// }


    //echo $dep_name , $name , $ip_ad,$sys, $phone, $email;

   }

?>
</div> 

<section id="main" class="column">
		
		<h4 class="alert_info">Welcome to the free MediaLoot admin panel template, this could be an informative message.</h4>
<section style="display:inline-block" >
	<div class="user_details_form" style="margin:50px 0 30px 50px">
		<form action="user_res_2.php" method="post" >
			<div class="user_details" style="margin-bottom: 30px">
			<label for="">Department Name</label>
			<select name="dep" id="dep">
			   <option value="select"></option>
               <option value="Cable">Cable</option>
               <option value="Hr">Hr</option>
               <option value="Marketing">Marketing</option>
               <option value="IT">IT</option>
            </select>
			</div>
		    <div class="user_details" style=" margin-bottom: 30px">
				<label for="">Employee Name</label>
				<input type="text" name="name" >
			</div>
			<div class="user_details"style="margin-bottom: 30px">
				<label for="">Employee System IP Address</label>
				<input type="number" name="ip" id="">
			</div>
			<div class="user_details"style="margin-bottom: 30px">
                <label for="">System name</label>
				<input type="text" name="system">
			</div>
			<div class="user_details"style="margin-bottom: 30px">
				<label for="">Mobile No</label>
				<input type="tel" name="phone" id="">
			</div>
			<div class="user_details"style="margin-bottom: 30px">
				<label for="">Email id</label>
				<input type="email" name="email" id="">
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
					<th>Employee ID</th> 
    				<th>Department Name</th> 
    				<th>Employee Name</th> 
    				<th>Employee System IP address</th> 
    				<th>System Name</th> 
    				<th>Mobile Number</th> 
    				<th>Email ID</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<?php 
				
				$query = "SELECT * FROM users";
				$query_run= mysqli_query($con , $query);

				if (mysqli_num_rows($query_run) > 0){

					foreach($query_run as $row) {
						?>
				 <tr> 
   					<td><input type="checkbox"></td> 
    				<td> <?php echo $row['id'] ?></td> 
    				<td><?php echo $row['department'] ?></td> 
    				<td><?php echo $row['name'] ?></td> 
    				<td><?php echo $row['ip'] ?></td> 
    				<td><?php echo $row['system'] ?></td> 
    				<td><?php echo $row['mobile'] ?></td> 
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
