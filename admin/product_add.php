<?php include "includes/left.php"; ?>

	<div class="content">
		<h1>Product Add</h1>		
		<?php
		
		if(isset($_POST['submit']))
		{
			$success = 'N';
			$title=$_POST['title'];
			$body=$_POST['body'];
			
			$image_name=$_FILES['image']['name'];
			$image_size=$_FILES['image']['size']/1024;
			$image_type=$_FILES['image']['type'];
			$image_tmp=$_FILES['image']['tmp_name'];
			
			$err = array();
			if($image_name == ''){
				$err[] = "Filename cannot be empty";
			}
			
			if ($image_size > 100)
				$err[] = "Size must be less than 100KB";
			$count = count($err);
			if($count > 0)
			{
				foreach ($err as $a)
					echo $a;
			}
			else{
			$image_upload=time()."_".$image_name;
			
			
			$cat_id=$_POST['cat_id'];
			$col_id=$_POST['col_id'];
			$model=$_POST['model'];
			$cost=$_POST['cost'];
			
			$mysqli->query("INSERT INTO products (title,body,image,cat_id,col_id,model,cost) VALUES('$title','$body','$image_upload','$cat_id','$col_id','$model','$cost')");
			
			if($mysqli->error){
				echo $mysqli->error;
			}else{
				echo "Successfully Added : ".$image_tmp;
								  //temp location , final destination	
				move_uploaded_file($image_tmp,"../uploads/".$image_upload);
				$success = 'Y';
				
			}
			}
		}	
		?>				
		<form action="" method="post" enctype="multipart/form-data" >
		<table width="100%" border="0">
		<tr>
		<td>Title</td>
		<td><input type="text" name="title" value="<?php if(isset($_POST['submit']) && ($success == 'N')){ echo $_POST['title']; } ?>"/></td>
		</tr>
		<tr>
		<td>Body</td>
		<td>
		<textarea  name="body"><?php if(isset($_POST['submit']) && ($success == 'N')) { echo $_POST['body']; }?></textarea>
		</td>
		</tr>
		<tr>
		<td>Image</td>
		<td><input type="file" accept=".jpg,.png,.gif" name="image"  value="<?php if(isset($_POST['submit']) && ($success == 'N')){ echo $_POST['image']; } ?>"/></td>
		</tr>
		<tr>
		<td>Category</td>
		<td>
		
		<select name="cat_id">
		<?php 	
			$r=$mysqli->query("SELECT * FROM category");	
				 
			while( $row=$r->fetch_assoc()){
				echo "<option value='".$row['cat_id']."'";
				if(isset($_POST['submit']) && ($success == 'N'))
				{
					if ($_POST['cat_id'] == $row['cat_id'])
						echo ' selected="selected" ';
				}
				echo ">".$row['name']."</option>";
			}
		?>
	
		</select>
		
		</td>
		</tr>
		<tr>
		<td>Color</td>
		<td>
		<select name="col_id">
			<?php 	
				$r=$mysqli->query("SELECT * FROM color");	
				while( $row=$r->fetch_assoc()){
				echo "<option value='".$row['col_id']."'";
				if(isset($_POST['submit']) && ($success == 'N'))
					if ($_POST['col_id'] == $row['col_id'])
						echo ' selected="selected" ';
				echo ">".$row['name']."</option>";

					  echo "<option value='".$row['col_id']."'>".$row['name']."</option>";
				}
			?>
		
		</select>
		</td>
		</tr>
		<tr>
		<td>Model</td>
		<td><input type="text" name="model"  value="<?php if(isset($_POST['submit']) && ($success == 'N')){ echo $_POST['model']; } ?>"/></td>
		</tr>
		<tr>
		<td>Cost</td>
		<td><input type="text" name="cost"  value="<?php if(isset($_POST['submit']) && ($success == 'N')){ echo $_POST['cost']; } ?>"/></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td> <input type="submit" name="submit" value="Submit" /></td>
		</tr>
		</table>

		</form>
		<br/>
	</div>

			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 