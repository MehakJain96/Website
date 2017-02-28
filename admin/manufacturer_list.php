<?php include "includes/left.php"; ?>

<div class="content">
	<h1>Manufacturer List</h1>
 			
	<?php 	
		$r=$mysqli->query("SELECT * FROM manufacturer");	
				 
		$n=1;
		echo '<table height="150px" width="400px" border=3><tr><th>S.No</th><th>Name of Manufacturer</th></tr>';
		while( $row=$r->fetch_assoc()){
			echo "<tr><td>".$n."</td>";
			echo "<td>".$row['name']."</td>";
			echo"</tr>";
			$n++;
		}
		echo "</table>";
	?>
			 
	</div>
