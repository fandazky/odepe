<html>
<head>
    <title>
        Form Register
    </title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-theme.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">     
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="<?php echo base_url()?>login">Sign In</a></div>
            </div>  
            <div class="panel-body" >
                <form id="signupform" class="form-horizontal" role="form" method="POST" action="<?php base_url()?>register/register_form">
                                
                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                                             
                     <div class="form-group">
                        <label for="username" class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="passwd" placeholder="Password">
                        </div>
                    </div>
                                    
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                        </div>
                    </div>
               
                    <div class="form-group">
                        <label for="address" class="col-md-3 control-label">Address</label>
                        <div class="col-md-9">
                            <!-- <input type="text" class="form-control" name="icode" placeholder=""> -->
                            
                            <textarea class="form-control" rows="3" name ="address"></textarea>
                        </div>
                    </div>

                    <!--
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input id="btn-login" class="btn btn-success" type="submit" value="Login">
                        </div>
                    </div>
                    -->

                    <div class="form-group">
                                    <!-- Button -->                                        
                        <div class="col-md-offset-3 col-md-9">
                            <input id="btn-signup" class="btn btn-info" type="submit" value="Register">
                            <!-- <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button> -->
                        </div>
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