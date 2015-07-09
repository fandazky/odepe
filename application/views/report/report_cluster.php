
      
          <script src="<?php  echo base_url() ?>/assets/plugins/chartjs/Chart.js"></script>
          <script src="<?php  echo base_url() ?>/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
          <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>/assets/plugins/bootstrap-select-master/dist/css/bootstrap-select.css">
          <script src="<?php  echo base_url() ?>/assets/plugins/bootstrap-select-master/dist/js/bootstrap-select.js"></script>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="col-md-8">

              <div class="box box-danger">
                <div class="box-header with-border">
                  <h1 class="box-title">
                    Chart Witel
                  </h1>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" style="height:300px;">
                  <form action="<?php echo site_url('Report/show_cluster'); ?>" method="post" role="form">
                    <div class="form-group">
                      
                      <label>Kluster</label>
                      <div class="input-group">
                        <select name="id_kluster" class="selectpicker  form-control scrollable-menu" role="menu" data-live-search="true" data-size="3">
                          <?php
                          foreach ($nama_kluster as $row) 
                          {
                            echo '<option value="'.$row->id_kluster.'"> '.$row->nama_kluster.'</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="box-footer">
                      <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                    
                    

                  </form>
                </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->