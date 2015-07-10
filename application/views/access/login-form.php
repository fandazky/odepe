<html>
<head>
    <title>
        Form Login
    </title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-theme.css">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-danger" >
            <div style="background: #DD4B39;" class="panel-heading">
                <div style="color: white;" class="panel-title">Please login first</div>
                <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                <form id="loginform" class="form-horizontal" role="form" action="<?php echo base_url()?>login/login_form" method="POST">
                                    
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-at"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" >                                        
                    </div>
                                
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" >
                    </div>
                    
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <select name="level" class="form-control">
                            <option selected="selected" class="hide-select">-- Pilih Hak Akses --</option>
                            <option value="1">Admin</option>
                            <option value="2">Operator</option>
                        </select>
                    </div>
     
                    <div class="input-group">
                        <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                        </label>
                        </div>
                    </div>

                    <!-- Button -->
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input id="btn-login" class="btn btn-success" type="submit" value="Login">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account! 
                                <a href="<?php echo base_url()?>register">
                                Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>    
                </form>     

            </div>                     
        </div>  
    </div>
</div>
    
</body>
</html>