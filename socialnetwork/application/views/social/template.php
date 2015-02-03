<!DOCTYPE html>
<html lang="en">
<?php echo $this->load->view('social/inc/header'); ?>
<body>

    <!-- Fixed navbar -->
   
   
   <!-- Master navbar -->
    
	<?php echo $this->load->view('social/inc/master_nav'); ?>
  
  <!-- Master navbar -->
    <!-- left sidebar-->
    <?php echo $this->load->view('social/inc/left_side_bar'); ?>
    <!--left sidebar close-->
    
    <!--right sidebar-->
    
    <?php echo $this->load->view('social/inc/right_side_bar'); ?>
    <!--right sidebar-->

        <!-- Footer -->
        <?php echo $this->load->view('social/inc/footer'); ?>

        <!-- // Footer -->
<?php echo $this->load->view('social/inc/footer_script'); ?>

</body>
</html>