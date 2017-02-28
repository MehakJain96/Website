<?php include "includes/left.php"; ?>

	<div class="content">
		<h1>Category Add</h1>
 				
				  <?php


if(isset($_POST['submit'])){
  	$name=$_POST['name'];
	
	$mysqli->query("INSERT INTO category (name) VALUES('$name')");
	
	if($mysqli->error){
		echo $mysqli->error;
	}else{
		echo "Successfully Added";
	}
	
	
			
}	
	?>			
				
				
				 <form action="" method="post">
				 
				 Name : <input type="text" name="name" />
				 <input type="submit" name="submit" value="Submit" />
				
				 </form>
			 
			 
			 
			 
			
			 
	</div>


</div>


			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 