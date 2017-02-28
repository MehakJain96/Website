<?php include "includes/header.php"; ?>
    <!-- end of menu tab -->
     <?php include "includes/left.php"; ?>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Login</div>
	  <div style="clear:both"></div>
	  
	  <?php
	  if(isset($_POST['submit'])){
	  	  $email=$_POST['email'];
		  $password=$_POST['password'];
		  
		  $r=$mysqli->query("SELECT mid  FROM members WHERE email='$email' AND password='$password' ");
		  
		  $count=$r->num_rows;
		  
		  if($count>0){
		  	//login
			
			$row=$r->fetch_assoc();
			
			/*echo "<pre>";
			print_r($row);
			echo "</pre>";*/
			
			$mid=$row['mid'];
			
			$_SESSION['mid']=$mid;
			
			header("Location:profile.php");
			
			
		  }else{
		  	//invalid
			echo "Invalid Login Details";
		  }
		
	  }
	  ?>
	  
	  
	  <form action="" method="post">
	 <table width="100%" border="0">
  <tr>
    <td>Email</td>
    <td><input type="email" name="email"  /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Login" /></td>
  </tr>
</table>

</form>
	  
	  
	  
	  
	  
	  
	  
 
    </div>
    <!-- end of center content -->
    <?php include "includes/right.php"; ?>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
 
 <?php include "includes/footer.php"; ?>