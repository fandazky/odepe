
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">
        <div class="row">
            <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h1 class="box-title"><b>Update Profile</b></h1>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                <div class="table-responsive">
                     <div class="col-md-10"> 
                        <form class="form-horizontal" action="<?php echo base_url();?>manajemen_user/simpan_update" method="POST">
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username :</label>
                            <div class="col-sm-9">
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $username?>" readonly>
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            <label for="namadepan" class="col-sm-3 control-label">Nama Depan :</label>
                            <div class="col-sm-9">
                            <input type="text" name="namadepan" id="namadepan" class="form-control" value="<?php echo $namadepan?>">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="namabelakang" class="col-sm-3 control-label">Nama Belakang :</label>
                            <div class="col-sm-9">
                            <input type="text" name="namabelakang" id="namabelakang" class="form-control" value="<?php echo $namabelakang?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat :</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" rows="3" name ="alamat"><?php echo $alamat; ?></textarea>
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <a href="<?php echo base_url()?>access" class="btn btn-default confirm" role="button" title="Apakah Anda yakin ingin membatalkan?">Batal</a>
                                <!-- <input type="reset" class="btn btn-default confirm" value="Batal" title="Apakah Anda yakin ingin membatalkan?"> -->
                                <input type="submit" class="btn btn-default confirm" value="Simpan" title="Apakah Anda yakin ingin menyimpan data ini?">
                            </div>
                        </div>

                        <!-- <input type="submit" value="Simpan" class="btn btn-info btn-block"> -->
                        <?php echo $this->session->flashdata('msg'); ?>
                        </form> 
                    </div>
                </div> <!-- /.table-responsive -->
                </div><!-- /.box-body -->

            </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

