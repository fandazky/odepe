          
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#">Survey ODP</a></li>
              <li class="active">Lihat Hasil Survey</li>
            </ol>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <form action="<?php echo site_url('Report/show_cluster'); ?>" method="post" role="form">
                    <input type="submit" class="btn btn-primary" value="Input Hasil Survey">
                  </form>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead style="background-color: rgb(222, 227, 221)">
                      <tr>
                        <th>NO</th>
                        <th>OPTICAL_DISTRIBUTION_POINT</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>AVAILABLITY</th>
                        <th>BANGUNAN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count=1;
                        if($list != NULL)
                        {
                          foreach($list as $row)
                        {
                      ?>
                      <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row->NAMA_ODP; ?></td>
                        <td><?php echo $row->LATITUDE; ?></td>
                        <td><?php echo $row->LONGITUDE; ?></td>
                        <td><?php echo $row->AVAILABILITY; ?></td>
                        <td><?php echo $row->BANGUNAN; ?></td>
                        
                      <?php $count = $count + 1; } }?>
                    </tbody>
                    <tfoot style="background-color: rgb(222, 227, 221)">
                      <tr>
                        <th>NO</th>
                        <th>OPTICAL_DISTRIBUTION_POINT</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>AVAILABLITY</th>
                        <th>BANGUNAN</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->