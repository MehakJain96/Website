
<?php include "includes/header.php"; ?>
    <!-- end of menu tab -->
<?php include "includes/left.php"; ?>
    <!-- end of left content -->
    <div class="center_content">
	
		<?php
			$pid = $_GET['pid'];
		
			$r = $mysqli->query("SELECT * from products where pid = $pid");
			
			while ($row = $r->fetch_assoc()){
		?>
		<div class="center_title_bar"><?php echo $row['title']; ?></div>
		<img src = "uploads/<?php echo $row['image'] ?>" width = "150px"/><br/><br/>
		<?php echo $row['body'] ?><br/><br/>
		Model : <?php echo $row['model'] ?><br/><br/>
		Cost : Rs.<?php echo $row['cost'] ?><br/><br/>
		
		
		<?php
			}
		?>
      
    </div>
    <!-- end of center content -->
<?php include "includes/right.php"; ?>	
    <!-- end of right content -->
<?php include "includes/footer.php"; ?>
