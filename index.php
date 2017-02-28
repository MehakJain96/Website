
<?php include "includes/header.php"; ?>
    <!-- end of menu tab -->
<?php include "includes/left.php"; ?>
    <!-- end of left content -->
<div class="center_content">

    <div class="center_title_bar">Products</div>
	
	<?php
		//add to cart //////////////////
		if(isset($_GET['action']) && $_GET['action']=='add_to_cart'){
			$pid=$_GET['pid'];
			$mid=$_SESSION['mid'];
			
			
			$mysqli->query("INSERT INTO cart (pid,qty,mid) VALUES('$pid','1','$mid')");
			
			header("Location:cart.php");
			
		}
		//End add to cart //////////////////
	?>
		
	<?php 	
		$cat_id = 1;
		if (isset($_GET['cat_id']))
			$cat_id = $_GET['cat_id'];
		$r=$mysqli->query("SELECT * FROM products where cat_id = $cat_id");
		while( $row=$r->fetch_assoc()){
	?>
	<div class="prod_box">
		<div class="top_prod_box"></div>
		<div class="center_prod_box">
		<div class="product_title"><a href="product_details.php?pid=<?php echo $row['pid']?>"><?php echo $row['title'] ?></a></div>
		<div class="product_img"><a href="product_details.php?pid=<?php echo $row['pid']?>"><img src="uploads/<?php echo $row['image'] ?>" alt="" height="100"  border="0" ></a></div>
		<div class="prod_price"><span class="price">Rs.<?php echo $row['cost'] ?></span></div>
		</div>
		<div class="bottom_prod_box"></div>
		<div class="prod_details_tab"> <a href="index.php?action=add_to_cart&pid=<?php echo $row['pid'];?>"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
	</div>
	<?php
		}
	
	?>
</div>
    <!-- end of center content -->
<?php include "includes/right.php"; ?>	
    <!-- end of right content -->
<?php include "includes/footer.php"; ?>
