
<?php include "includes/header.php"; ?>
    <!-- end of menu tab -->
<?php include "includes/left.php"; ?>
    <!-- end of left content -->
    <div class="center_content">
	<div class="center_title_bar">Cart</div>
      <?php
			if(isset($_GET['action']) && $_GET['action']=='remove_cart'){
				$cart_id=$_GET['cart_id'];
 				
				
				$mysqli->query("DELETE FROM cart WHERE cart_id='$cart_id'");
				
				header("Location:cart.php");
				
			}
			?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<form action="" method="post">
			<table width="100%" border="0">
  <tr>
    <td>Image</td>
    <td>Title</td>
    <td>Qty</td>
    <td>Sub Total</td>
    <td>Delete</td>
  </tr>
  
  <?php
  $mid=$_SESSION['mid'];
  
  $r=$mysqli->query("SELECT * FROM cart c INNER JOIN products p ON c.pid=p.pid WHERE c.mid='$mid'");
  
  $nt=0;
  
  while($row=$r->fetch_assoc()){
  	$sub_total=$row['qty']*$row['cost'];
  
  	$nt+=$sub_total;
   ?>
  
  <tr>
    <td><img src="uploads/<?php echo $row['image']; ?>" height="40" /></td>
    <td><?php echo $row['title']; ?></td>
    <td><input type="number" name="qty" value="<?php echo $row['qty']; ?>" style="width:30px" /></td>
    <td><?php echo $sub_total; ?></td>
    <td><a href="cart.php?action=remove_cart&cart_id=<?php echo $row['cart_id']; ?>">X</a></td>
  </tr>
  
  <?php
  }
  ?>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="update" value="Update" /></td>
    <td>net Total <?php echo $nt; ?></td>
    <td>&nbsp;</td>
  </tr>
</table>

	</form>		
    </div>
    <!-- end of center content -->
<?php include "includes/right.php"; ?>	
    <!-- end of right content -->
<?php include "includes/footer.php"; ?>
