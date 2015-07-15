
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Report Area</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
          <div class="col-md-12">

              <div class="box box-danger">
                <div class="box-header with-border">
                  <h1 class="box-title">
                    Chart Area
                  </h1>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" style="height:300px;">
                  <form action="<?php echo site_url('Report/show_area'); ?>" method="post" role="form">
                    <div class="form-group">
                      
                      <label>Site Operation</label>
                      <div class="input-group">
                        <select name="idnyaarea" class="selectpicker  form-control scrollable-menu" role="menu" data-live-search="true" data-size="3" required>
                        <option style="display:none" value="">Pilih Area</option>
                          <?php
                          foreach ($areaname as $row) 
                          {
                            echo '<option value="'.$row->id_area.'"> '.$row->nama_area.'</option>';
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
              </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->