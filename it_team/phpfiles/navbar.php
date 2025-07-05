


<header id="header">
		<div>
			<h1 class="site_title"><a href="index.html">IT TEAM</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site">
        </div>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>IT TEAM <!--(<a href="#">3 Messages</a>) --></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">IT TEAM</a> <div class="breadcrumb_divider"></div> <a class="current"></a></article>
</div>
		
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<!-- <form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form> -->
		<hr/>
		<h3>MANAGE</h3>
		<ul class="toggle">
			<li class="icn_dep_det"><a href="comp_det.php">complain Details</a></li>
			
			<li class="icn_IT_team"><a href="change_password.php">Change Password</a></li>
            <form action="" method="post">
			    <li class="icn_IT_team"><button type="submit" name="logout">Log out</button></li>
			</form>
			
					

		</ul>
	

			</form>

			<?php 
			
			  if(isset($_POST['logout'])){
				session_destroy();
				header("Location: index.php");
			  }
			
			?>
			
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2025 Website Admin</strong></p>
			<p>All Right Preserved</p>
		</footer>
	</aside><!-- end of sidebar -->

   