
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">
          
          <div class="row">

            <div class="col-md-8">

              <div class="box box-danger">
                <!-- <div class="box-header">
                  <h3 class="box-title">Data Survey</h3>
                </div> -->
                <div class="box-body">
                  <form action="<?php echo base_url('manajemen_odp/inputOdp'); ?>" method="post" role="form">
                    <div class="form-group">
                      <label>Kluster</label>
                      <div class="input-group">
                        <select class="form-control" name='ID_KLUSTER'>
                          <?php
                          foreach ($nama_kluster as $row) {
                            echo '<option value="'.$row->id_kluster.'">'.$row->nama_kluster. ' ' . $row->id_kluster .  '</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Latitude" name='LATITUDE'>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Longitude" name='LONGTITUDE'>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Nama ODP</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-flag-checkered"></i>
                        </div>
                        <input type="text" class="form-control" name='NAMA_ODP'>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="box-footer">
                      <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

