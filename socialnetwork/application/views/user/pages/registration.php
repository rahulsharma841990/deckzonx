<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nd Social</title>

    <!-- App Styling Bundle -->
    <link href="<?php echo base_url();?>site/css/default.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>site/js/custome.js"></script>

    <!-- HTML5 and Respond.js IE8 support of HTML5 elements and media queries -->
    
</head>
<body class="login">
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <h1>Account Access</h1>
                <div class="panel panel-default text-center">
                    <img src="<?php echo base_url();?>site/images/people/110/guy-5.jpg" class="img-circle">
                    <form action="<?php echo base_url(); ?>user/register" method="POST" name="register" id="register_form" >
                    <div class="panel-body">
                    	<label style="color:#F00;"><?php echo $this->session->flashdata('error'); ?></label>
                        <input class="form-control" type="text" name="fname" placeholder="Enter your First Name" value="<?php echo set_value('fname'); ?>">
                        <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name" value="<?php echo set_value('lname'); ?>">
                        <input class="form-control" type="email" name="email" placeholder="Enter your Email" value="<?php echo set_value('email'); ?>">
                        <input class="form-control" type="password" name="password" placeholder="Enter Password">
                        <input class="form-control" type="conf-password" name="cpassword" placeholder="Conferm Enter Password">
                        
                        <select name="reg_as" style="width:100%;" class="form-control">
                        	<option value="null">Register As</option>
                        	<option value="1">As Doctor</option>
                            <option value="2">As User</option>
                        </select>
                            
                      <div style="width:100%; margin-top:4%;"> 
                      <div style="width:49%; float:left;"> <label>Female</label>
                        <input class="form-control" type="radio" name="gender" value="female">
                        </div>
                        <div style="width:49%; float:left;">
                         <label>Male</label>
                        <input class="form-control" type="radio" name="gender" value="male">
                        </div>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-primary" id="register">Register <i class="fa fa-fw fa-unlock-alt"></i></a>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Vendor Scripts Bundle -->
<script src="<?php echo base_url(); ?>site/js/vendor.min.js"></script>

<!-- App Scripts Bundle -->
<script src="<?php  echo base_url();?>site/js/scripts.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
});
</script>
</script>
</html>