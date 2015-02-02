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

    <!-- HTML5 and Respond.js IE8 support of HTML5 elements and media queries -->
    
</head>
<body class="login">
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <h1>Account Access</h1>
                <div class="panel panel-default text-center">
                    <img src="<?php echo base_url();?>site/images/people/110/guy-5.jpg" class="img-circle">
                    <form method="POST" name="login" action="<?php echo base_url(); ?>user/login" id="login">
                    <label style="color:#F00;"><?php echo $this->session->flashdata('error'); ?></label>
                    	<div class="panel-body">
                        <input class="form-control" type="text" placeholder="Email ID" name="user">
                        <input class="form-control" type="password" placeholder="Enter Password" name="password">
                        <a href="javascript:void(0);" class="btn btn-primary" onClick="document.getElementById('login').submit();">Login <i class="fa fa-fw fa-unlock-alt"></i></a>
                        <a href="#" class="forgot-password">Forgot password?</a>
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
</html>