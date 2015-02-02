<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('user/inc/header'); ?>
<body style="padding-top:0px !important; ">

    <!-- Fixed navbar -->
    <?php //$this->load->view('user/inc/topnav'); ?>
	<!-- Fixed navbar  End -->   
    
    <!-- Left Side Bar -->
    <?php $this->load->view('user/inc/leftsidebar'); ?>
    <!-- Left side bar End--> 
    
    <!-- Right Side Bar  Chat-->
	 <?php $this->load->view('user/inc/rightsidebar'); ?>
    <!-- Right Side Bar End Chat-->
    
    <!--Chat window-->
    <?php /*?> <?php $this->load->view('user/inc/chatwindow');?> <?php */ ?> 
    <!--Chat Window-->
    
    
    <div id="content">
    <!--User Nav  Start-->
    <?php $this->load->view('user/inc/usersubnav'); ?>
    <!--User Nav End-->    
    
      <!--Content Start-->
      
      <?php $this->load->view('user/pages/dashboard'); ?>
      <!--Content End-->
      
        <!-- Footer -->
       <?php $this->load->view('user/inc/footer');?>

        <!-- // Footer -->
        </div>

    <!-- Vendor Scripts Bundle -->
    <script src="<?php echo base_url()?>site/js/vendor.min.js"></script>

    <!-- App Scripts Bundle -->
    <script src="<?php echo base_url() ?>site/js/scripts.min.js"></script>
</body>
</html>