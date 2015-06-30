<html>
<head>
    <title>
        Form Register
    </title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-theme.css">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">     
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-danger">
            <div style="background: #DD4B39;" class="panel-heading">
                <div style="color: white;" class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-20px"><a id="signinlink" href="<?php echo base_url()?>login">Sign In</a></div>
            </div>


            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="signupform" class="form-horizontal" role="form" method="POST" action="<?php base_url()?>register/register_form">
                                
                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                                             
                     <!-- <div class="form-group"> -->
                        <!-- <label for="username" class="col-md-3 control-label">Username</label> -->
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username">                                        
                        </div>
                    <!-- </div> -->

                        
                    
                    <!-- <div class="form-group"> -->
                        <!-- <label for="password" class="col-md-3 control-label">Password</label> -->
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="passwd" placeholder="Password">
                        </div>
                    <!-- </div> -->
                                    
                    <!-- <div class="form-group"> -->
                        <!-- <label for="firstname" class="col-md-3 control-label">First Name</label> -->
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        </div>
                    <!-- </div> -->
                    
                    <!-- <div class="form-group"> -->
                        <!-- <label for="lastname" class="col-md-3 control-label">Last Name</label> -->
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bold"></i></span>
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                        </div>
                    <!-- </div> -->
               
                    <!-- <div class="form-group"> -->
                        <!-- <label for="address" class="col-md-3 control-label">Address</label> -->
                        <div style="margin-bottom: 25px" class="input-group">
                            <!-- <input type="text" class="form-control" name="icode" placeholder=""> -->
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                            <textarea class="form-control" rows="3" name ="address" placeholder="Address"></textarea>
                        </div> 
                    <!-- </div> -->

                    <!--
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input id="btn-login" class="btn btn-success" type="submit" value="Login">
                        </div>
                    </div>
                    -->

                    <!-- Button -->                                        
                        <div style="margin-bottom: 25px">
                            <input id="btn-signup" class="btn btn-info" type="submit" value="Register">
                            <!-- <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button> -->
                        </div>
                                                    
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Already have an account!
                                <a href="<?php echo base_url()?>login">
                                Sign In Here
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