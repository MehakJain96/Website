<?php include "../includes/config.php"; ?> 
 <h1>Admin Panel Login</h1>
	  <?php
	  if(isset($_POST['submit'])){
	  	  $username=$_POST['username'];
		  $password=$_POST['password'];
		  
		  $r=$mysqli->query("SELECT aid  FROM admin WHERE username='$username' AND password='$password' ");
		  
		  $count=$r->num_rows;
		  
		  if($count>0){
		 	
			$row=$r->fetch_assoc();
			$mid=$row['aid'];
			$_SESSION['aid']=$aid;
			header("Location:home.php");

			}
		  else{
			echo "Invalid Login Details";
		  }
		
	  }
	  ?>
	  
	  
	  <form action="" method="post">
	 <table width="100%" border="0">
  <tr>
    <td>Username</td>
    <td><input type="username" name="username"  /></td>
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
	   