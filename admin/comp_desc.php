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

<section id="main" class="column">
		
	<h4 class="alert_info">Welcome to the free MediaLoot admin panel template, this could be an informative message.</h4>

<?php 
 if(isset($_POST["submit"])) {
    $department = $_POST["dep"];
    $employee = $_POST["emp"];
    $complain = $_POST["comp"];
    $description = $_POST["desc"];
    $it_team = $_POST["team"];
    $date = $_POST["dates"];

    $comp_query = "INSERT INTO desc_comp (dep_name,emp_name,comp_type,description,it_emp,date)  VALUES ('$department','$employee','$complain','$description','$it_team','$date')";
    $comp_query_run = mysqli_query($con,$comp_query);

    if($comp_query_run){
		$_SESSION['status']="user added";
		header("Location: comp_desc.php");
		

	}
	else {
		$_SESSION['status']="user failed";
		header("Location: comp_desc.php");
		

	}
 }
?>



<section>

    <div>
        <form action="comp_desc.php" method="post">


            <div style="margin: 20px 0px 20px 100px">
            <label for="">Department Name</label>
               <?php
                 $querry_2 = mysqli_query($con,"SELECT * FROM department");
                 $rowcount_2 = mysqli_num_rows($querry_2);
               ?> 
                <select name="dep" id="">
                 <option value="">Select</option>

                 <?php 
                  for ($i=1;$i<=$rowcount_2;$i++){
                   $row_2= mysqli_fetch_array($querry_2);
                ?>
                <option value="<?php echo $row_2["dep_name"] ?>"><?php echo $row_2["dep_name"] ?></option>
                <?php
                  }
                ?>
                 
               </select>

            </div>
               
                <br>
              <div style="margin: 0px 0px 20px 100px">
                <label for="">Employee Name</label>
               <?php
                 $querry = mysqli_query($con,"SELECT * FROM users");
                 $rowcount_1 = mysqli_num_rows($querry);
               ?> 
                <select name="emp" id="">
                 <option value="">Select</option>

                 <?php 
                  for ($i=1;$i<=$rowcount_1;$i++){
                   $row_1= mysqli_fetch_array($querry);
                ?>
                <option value="<?php echo $row_1["name"] ?>"><?php echo $row_1["name"] ?></option>
                <?php
                  }
                ?>
                 
               </select></div>

               
               <br>

               <div style="margin: 0px 0px 20px 100px">
               <label for="">Complain Type</label>
               <?php
                 $query = mysqli_query($con,"SELECT * FROM addcomp");
                 $rowcount = mysqli_num_rows($query);
               ?>  
               <select name="comp" id="">
               <option value="">Select</option>
                <?php 
                  for ($i=1;$i<=$rowcount;$i++){
                   $row= mysqli_fetch_array($query);
                ?>
                <option value="<?php echo $row["complain"] ?>"><?php echo $row["complain"] ?></option>
                <?php
                  }
                ?>
               </select>

               </div>
               

               
               <br>

            <div style="margin: 0px 0px 20px 100px">
               <label for="">Complain Description</label>
            <input type="text" name="desc" id="">

                </div>
            <br>
          <div style="margin: 0px 0px 20px 100px">
            <label for="">Forward Complain To</label>
            <?php
                 $query_3 = mysqli_query($con,"SELECT * FROM it_team");
                 $rowcount_3 = mysqli_num_rows($query_3);
            ?> 

            <select name="team" id="">
                <option value="">Select</option>
            
                <?php 
                  for ($i=1;$i<=$rowcount_3;$i++){
                   $row_3= mysqli_fetch_array($query_3);
                ?>
                <option value="<?php echo $row_3["name"] ?>"><?php echo $row_3["name"] ?></option>
                <?php
                  }
                ?>

            </select>
           </div>

           
            <br>

            <div style="margin: 0px 0px 20px 100px">
            <label for="">Date of Complain Submission</label>
            <input type="date" name="dates" id="">

            </div>

           
            <br>

            <div style="margin: 0px 0px 20px 100px">
            <input type="submit" value="submit" name="submit">
          </div>
            
            </form>
            
        </form>

    </div>
</section>
</section>

