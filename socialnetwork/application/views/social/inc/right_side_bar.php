<?php echo $this->load->view('social/inc/left_chat'); ?>
  
    <div class="chat-window-container"></div>
    <div id="content">
        <nav class="navbar navbar-subnav navbar-static-top" role="navigation">
            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-ellipsis-h"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php echo $this->load->view('social/inc/sub_nav_inner'); ?>

                <!-- /.navbar-collapse -->
                </div>
        </nav>
        <div class="container-fluid">
           
           <!-- Profile top banner images -->
           <?php echo $this->load->view('social/inc/profile_top_banner'); ?>
           <!-- Profile top Banner images -->
           
             
             <!-- Time line -->
             <?php echo $this->load->view('social/inc/timeline'); ?>
             <!-- Time line -->
             
             
        </div>

        
        </div>