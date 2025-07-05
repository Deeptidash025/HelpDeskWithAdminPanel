


<header id="header">
		<div>
			<h1 class="site_title"><a href="index.html">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site">
        </div>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>ADMIN <!--(<a href="#">3 Messages</a>) --></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current"></a></article>
</div>
		
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<!-- <form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form> -->
		<hr/>
		<h3>MANAGE USERS</h3>
		<ul class="toggle">
			<li class="icn_dep_det"><a href="dep_det.php">Department Details</a></li>
			<li class="icn_us_det"><a href="user_res_2.php">User Details</a></li>
			<li class="icn_IT_team"><a href="it_team.php">IT Team</a></li>
			<li class="icn_c_det"><a href="add_comp.php">Complain Type Details</a></li>			
			<li class="icn_c_desp"><a href="comp_desc.php">Complain Description</a></li>			

		</ul>
		<h3>MANAGE COMPLAIN</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="comp_table.php">User Complain</a></li>
			
		</ul>
		<h3>MY SETTINGS</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="admin_pasword.php">Change Password</a></li>
			<form action="" method="post">

			     <li class="icn_photo" name="logout"> <button type="submit"  name="logout">Logout</button></li>

			</form>

			<?php 
			
			  if(isset($_POST['logout'])){
				session_destroy();
				header("Location: index.php");
			  }
			
			?>
			
		</ul>
		
		
	</aside><!-- end of sidebar -->

   