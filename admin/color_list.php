<?php include "includes/left.php"; ?>

	<div class="content">
		<h1>color List</h1>
 				
				<?php 	
				$r=$mysqli->query("SELECT * FROM color");	
				 
				 
				 $n=1;
				 echo '<table height="150px" width="400px" border=3 ><tr align="left"><th>S.No</th><th>Name of Color</th><th>Color</th></tr>';
				 while( $row=$r->fetch_assoc()){
					echo "<tr><td>".$n."</td>";
					echo "<td>".$row['name']."</td>";
					echo '<td><input type="color" disabled="disabled" value="'.$row['color_code'].'"></td>';
					echo"</tr>";
					$n++;
				}
				 echo "</table>";
				 
				 ?>
			 
			 
			 
	</div>


</div>


			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 