
<?php include "includes/header.php"; ?>
    <!-- end of menu tab -->
<?php include "includes/left.php"; ?>
    <!-- end of left content -->
    <div class="center_content">
      <?php
		session_destroy();
		header("Location:index.php");
	  ?>
    </div>
    <!-- end of center content -->
<?php include "includes/right.php"; ?>	
    <!-- end of right content -->
<?php include "includes/footer.php"; ?>
