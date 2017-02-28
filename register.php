<?php include "includes/header.php"; ?>
    <!-- end of menu tab -->
<?php include "includes/left.php"; ?>
    <!-- end of left content -->
<div class="center_content">
<?php

	if(isset($_POST['submit'])){
	$error=array();
	

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	
	if($name==''){
		$error[]="Name field is required";
	}
	
	
	if($email==''){
		$error[]="Email field is required";
	}
	
	if($password==''){
		$error[]="Password field is required";
	}
	
	
	$count=count($error);
	
	if($count>0){
		foreach($error as $value){
			echo $value."<br>";
		}
		
	}else{
		$mysqli->query("INSERT INTO members (name,email,password,contact,address,gender ) 
	VALUES('$name','$email','$password','$contact','$address','$gender') ");

	if($mysqli->error){
		echo $mysqli->error;
	}else{
		echo "<h2>Successfully Registered</h2>";
		header("Location:thank.php");
	}
	
	}
}
?>
<h1>Register Here</h1>
 <form action="" method="post">
  
  <table width="100%" height="323" border="0">
  <tr>
    <td width="27%">Name</td>
    <td width="73%"><input type="text" name="name" 
	value="<?php if(isset($_POST['submit'])){ echo $_POST['name']; } ?>" 
	
	/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" 
	
	value="<?php if(isset($_POST['submit'])){ echo $_POST['email']; } ?>"
	/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input type="text" name="contact" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="address" 
value="<?php if(isset($_POST['submit'])){ echo $_POST['address']; } ?>"	
	 /></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><input checked="checked" type="radio" name="gender" value="male" /> Male <br />
	<input type="radio" name="gender" value="female" /> Female <br />
	
	</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="submit" value="Register" /></td>
  </tr>
</table>

  
  

</form>

</div>
<?php include "includes/right.php"; ?>	
    <!-- end of right content -->
<?php include "includes/footer.php"; ?>
