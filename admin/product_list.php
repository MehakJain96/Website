<?php include "includes/left.php"; ?>

	<div class="content">
		<h1>Product List</h1>
		
		<table height="150px" width="400px" border=3>
		
		<tr>
		<th>Title</th>
		<th>Model</th>
		<th>Cost</th>
		<th>Image</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>
		
 				
		<?php 	
		$r=$mysqli->query("SELECT * FROM products");	
		 
		while( $row=$r->fetch_assoc()){
		?>
		<tr>
		<td><?php echo $row['title'] ?></td>
		<td><?php echo $row['model'] ?></td>
		<td><?php echo $row['cost'] ?></td>
		<td><img src='../uploads/<?php echo $row['image'] ?>'  height='50' /></td>
		<td><a href = ' '>Edit</a></td>
		<td><a href = ' '>Delete</a></td>
		</tr>
		<?php
			}
		?>
		</table>
				
	</div>
</div>


			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 