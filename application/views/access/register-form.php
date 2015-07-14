<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SIMODI | Sistem Monitoring ODP</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/style/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/style/css/style.css">

        <!-- Favicon and touch icons -->
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

    </head>

    <body>

		<!-- Top menu -->
        <!--
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Bootstrap Registration Form Template</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Put some text or
							</span> 
							<a href="#"><strong>links</strong></a> 
							<span class="li-text">
								here, or some icons: 
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>
        -->

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                <div class="col-sm-6 form-box col-sm-offset-3">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3 align="center"><B>SIMODI</B></h3>
                            <p align="center">Form Pendaftaran User</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-user-plus"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <!-- <form role="form" action="<?php echo base_url()?>register/register_form" method="post" class="registration-form"> -->
                        <?php echo form_open('register/register_form'); ?>
                            <?php
                                if(form_error('username'))
                                {
                                    echo '<div class="alert alert-danger" role="alert">'.form_error('username') .'</div> ';
                                }
                            ?>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                <input id="username" type="text" class="form-control" name="username" value="<?php echo set_value('username');?>" placeholder="username">
                            </div>
                            
                            <?php
                                if(form_error('nik'))
                                {
                                    echo '<div class="alert alert-danger" role="alert">'.form_error('nik') .'</div> ';
                                }
                            ?>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                                <input id="nik" type="text" class="form-control" name="nik" value="<?php echo set_value('nik');?>" placeholder="NIK">                                        
                                
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select name="level" class="form-control">
                                    <option selected="selected" class="hide-select">-- Pilih Hak Akses --</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Operator</option>
                                </select>
                            </div>
                            
                            <?php
                                if(form_error('passwd'))
                                {
                                    echo '<div class="alert alert-danger" role="alert">'.form_error('passwd') .'</div> ';
                                }
                            ?> 
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="passwd" type="password" class="form-control" name="passwd" value="<?php echo set_value('passwd');?>" placeholder="password">
                            </div>

                            <?php
                                if(form_error('namadepan'))
                                {
                                    echo '<div class="alert alert-danger" role="alert">'.form_error('namadepan') .'</div> ';
                                }
                            ?>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="fa fa-font"></i></span>
                                <input id="namadepan" type="text" class="form-control" name="namadepan" value="<?php echo set_value('namadepan');?>" placeholder="Nama Depan">
                            </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bold"></i></span>
                                <input id="namabelakang" type="text" class="form-control" name="namabelakang" value="<?php echo set_value('namabelakang');?>" placeholder="Nama Belakang">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <textarea class="form-control" rows="2" name ="address" value="<?php echo set_value('address');?>" placeholder="Alamat"></textarea>
                            </div> 

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <select name="area" class="form-control">
                                    <option selected="selected" class="hide-select">-- Pilih Area Kerja --</option>
                                    <?php 
                                        foreach ($areakerja as $area) {
                                            echo "<option value=\"".$area->id_area."\">".$area->nama_area."</option>";
                                        }
                                    ?>
                                    
                                </select>                                          
                            </div>
                    
                            

                            <input type="submit" class="btn btn-primary" value="Register">
                            <p></p>
                            <?php
                                echo $success 
                            ?>
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" ></div>
                            <p> Sudah Punya Akun ? Silahkan Login <a href="<?php echo base_url()?>login"> Disini</a></p>

                        </form>
                    </div>
                </div>

            </div>
            </div>
            
        </div>

        <script src="<?php echo base_url()?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/style/js/jquery.backstretch.js"></script>
        <script src="<?php echo base_url()?>assets/style/js/retina-1.1.0.js"></script>
        <!-- <script src="<?php echo base_url()?>assets/style/js/scripts.js"></script> -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
    
                /*
                    Fullscreen background
                */
                $.backstretch("<?php echo base_url(); ?>assets/img/background/loginback.jpg");
                
                $('#top-navbar-1').on('shown.bs.collapse', function(){
                    $.backstretch("resize");
                });
                $('#top-navbar-1').on('hidden.bs.collapse', function(){
                    $.backstretch("resize");
                });
                
                /*
                    Form validation
                */
                $('.registration-form input[type="text"], .registration-form textarea').on('focus', function() {
                    $(this).removeClass('input-error');
                });
                
                $('.registration-form').on('submit', function(e) {
                    
                    $(this).find('input[type="text"], textarea').each(function(){
                        if( $(this).val() == "" ) {
                            e.preventDefault();
                            $(this).addClass('input-error');
                        }
                        else {
                            $(this).removeClass('input-error');
                        }
                    });
                    
                });
                
                
            });
        </script>
    </body>

</html>