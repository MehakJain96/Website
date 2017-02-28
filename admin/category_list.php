<?php include "includes/left.php"; ?>

	<div class="content">
		<h1>Category List</h1>
 				
				<?php 	
				$r=$mysqli->query("SELECT * FROM category");	
				 
				 $n=1;
				 echo '<table height="150px" width="400px" border=3><tr><th>S.No</th><th>Name of Category</th></tr>';
				 while( $row=$r->fetch_assoc()){
					echo "<tr><td>".$n."</td>";
					echo "<td>".$row['name']."</td>";
					echo"</tr>";
					$n++;
				}
				 echo "</table>";
				 ?>
			 
			 
			 
	</div>


</div>


			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 