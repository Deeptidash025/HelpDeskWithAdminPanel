<?php

session_start();
if(!isset($_SESSION['AdminID'])){
    header("Location: index.php");
}
?>

<?php
require("config\it_config.php")

?>

<?php 

include ("phpfiles/header.php");
include ("phpfiles/navbar.php");

?>
<section  id="main" class="column">
	<div>
	<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th> Complain id</th> 
					
    				<th>Department Name</th>
    				<th>Employee Name</th> 
    				<th>Complain Type</th> 
    				<th>Complain Description</th> 
    				<th>Forward to</th> 
    				<th>Date</th> 
    				 
				</tr> 
			</thead> 
			<tbody> 
				<?php 
				
				$query = "SELECT * FROM desc_comp";
				$query_run= mysqli_query($con , $query);

				if (mysqli_num_rows($query_run) > 0){

					foreach($query_run as $row) {
						?>
				 <tr> 
   					<!-- <td><input type="checkbox"></td>  -->
    				<td> <?php echo $row['id'] ?></td> 
    				<td><?php echo $row['dep_name'] ?></td> 
    				<td><?php echo $row['emp_name'] ?></td> 
    				<td><?php echo $row['comp_type'] ?></td> 
    				<td><?php echo $row['description'] ?></td> 
    				<td><?php echo $row['it_emp'] ?></td> 
    				<td><?php echo $row['date'] ?></td> 
    				
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