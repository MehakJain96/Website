<?php include "includes/left.php"; ?>

	<div class="content">
		<h1>color Add</h1>
 				
				  <?php


if(isset($_POST['submit'])){
  	$name=$_POST['name'];
	$color_code=$_POST['color_code'];
	
	$mysqli->query("INSERT INTO color (name,color_code) VALUES('$name','$color_code')");
	
	if($mysqli->error){
		echo $mysqli->error;
	}else{
		echo "Successfully Added";
	}
	
	
			
}	
	?>			
				
				
				 <form action="" method="post">
				 
				 Name : <input type="text" name="name" />
				 
				 <input type="color" name="color_code" />
				 
				 <input type="submit" name="submit" value="Submit" />
				
				 </form>
			 
			
			 
			 
	</div>


</div>


			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 