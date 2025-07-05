<?php

session_start();
if(!isset($_SESSION['AdminID'])){
    header("Location: index.php");
}


?>

<?php

require("config\user_config.php");


?>
<?php

include("phpfiles/header.php");
include("phpfiles/navbar.php");


?>

 <?php
    if(isset($_POST["save"])){

		

		$depart =$_POST["dep"];


		
		$dep_querry = "INSERT INTO department (dep_name) VALUES('$depart')";
		$dep_querry_run = mysqli_query($con , $dep_querry);
		if($dep_querry_run){
			$_SESSION['status']="User added";
			header("Location: dep_det.php");
		}
		else {
			$_SESSION['status']="User denied";
			header("Location: dep_det.php");
			
		}
	


	}
   ?>




<section id="main" class="column">
		
		<h4 class="alert_info">Welcome to the free MediaLoot admin panel template, this could be an informative message.</h4>
		<div style="margin:50px 0 50px 50px">
			
				<label for=""><b>CREATE DEPARTMENT</b></label>
				<div style="margin:50px 0 50px 50px">

				<form action="dep_det.php" method="post">
					<label for="">DEPARTMENT NAME</label>
					<input type="text" name="dep" id="dname" style="">
					<input type="submit" value="save" name="save" >
					
				</form>
                </div> 
				
			
		</div>

        <section id="main" class="column">
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Content Manager</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Posts</a></li>
    		<li><a href="#tab2">Comments</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
				   <th></t> 
    				<th>Sl No</th> 
    				<th>Department Name</th> 
    				<th>Status</th> 

    				<th>Actions</th> 
				</tr> 
			</thead> 
			

			<tbody> 

			<?php 
				
				$query = "SELECT * FROM department";
				$query_run= mysqli_query($con , $query);

				if (mysqli_num_rows($query_run) > 0){

					foreach($query_run as $row) {
						?>
				<tr> 
				<td><input type="checkbox"></td> 
				<td> <?php echo $row['id'] ?></td>
				<td><?php echo $row['dep_name'] ?></td>
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
			</div><!-- end of #tab1 -->
</section>

</section>


<?php

include("phpfiles/footer.php");

?>

