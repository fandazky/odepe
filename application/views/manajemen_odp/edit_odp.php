<ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Manajemen ODP</a></li>
            <li class="active">Edit ODP</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12" >
              <div class="box box-danger">
                <div class="box-header">

                  <h3 class="box-title">Edit ODP</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <?php

                      if($result != NULL)
                      {
                        foreach($result as $row)
                      { ?>
                <form action="<?php echo site_url('manajemen_odp/update') . '/' . $row['ID_ODP'] ?>" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama ODP :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input class="form-control" name="NAMA_ODP" placeholder="Nama ODP" value="<?php echo $row['NAMA_ODP'] ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                   <div class="form-group">
                      <label>Kluster</label>
                      <div class="input-group">
                        <select class="form-control" name='ID_KLUSTER'>
                          <?php
                          foreach ($nama_kluster as $row) {
                            echo '<option value="'.$row->id_kluster.'" selected>'.$row->nama_kluster. '</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->


                   <div class="form-group">
                      <label>Site Operation</label>
                      <div class="input-group">
                        <select class="form-control" name='ID_SO'>
                          <?php
                          foreach ($nama_so as $row) {
                            echo '<option value="'.$row->id_so.'" selected>'.$row->nama_so. '</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group --> 
                    </div><!-- /.form group -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="float:right" onclick="return checkNull()">Update</button>
                  </div>
                </form>
                <?php } } ?> 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      