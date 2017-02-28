<?php include "includes/header.php"; ?>
    <!-- end of menu tab -->
     <?php include "includes/left.php"; ?>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Profile</div>
	  
	  
	  <?php
$mid=$_SESSION['mid'];

if(isset($_POST['submit'])){
 	

	$name=$_POST['name'];
  	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	 $q="UPDATE members SET
	name='$name',
	contact='$contact',
	address='$address',
	gender='$gender'
	WHERE mid='$mid'
	";
	
	//echo $q;
	//die();
	
	$mysqli->query($q); 
	 
	 echo "Successfully Updated";
}



$r=$mysqli->query("SELECT * FROM members WHERE mid='$mid'");
$row=$r->fetch_assoc();

?> 
 
 
  <form action="" method="post">
  
  <table width="100%" height="323" border="0">
  <tr>
    <td width="27%">Name</td>
    <td width="73%"><input type="text" name="name" 
	value="<?php   echo $row['name'];   ?>" 
	
	/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" disabled="disabled" 
	
	value="<?php  echo $row['email'];   ?>"
	/></td>
  </tr>
   
  <tr>
    <td>Contact</td>
    <td><input type="text" name="contact" value="<?php  echo $row['contact'];   ?>" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="address" 
value="<?php  echo $row['address'];   ?>"	
	 /></td>
  </tr>
   <tr>
    <td>Gender</td>
    <td><input 
	<?php 
	if($row['gender']=='male'){
		echo "checked=checked";
		}
	?> type="radio" name="gender" value="male" /> Male <br />
	<input type="radio" 
	<?php 
	if($row['gender']=='female'){
		echo "checked=checked";
		}
?> name="gender" value="female" /> Female <br />
	</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="submit" value="Update" /></td>
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