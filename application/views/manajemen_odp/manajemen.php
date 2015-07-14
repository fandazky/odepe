<ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Manajemen ODP</a></li>
            <li class="active">Daftar ODP</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <form action="<?php echo base_url() ?>manajemen_odp">
                    <input type="submit" class="btn btn-primary" value="Tambah ODP">
                  </form>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>SO</th>
                        <th>NAMA KLUSTER</th>
                        <th>NAMA ODP</th>
                        <th width="30px">AKSI</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      <?php
                      $count=1;
                        if($list != NULL)
                        {
                          // foreach ($site_operation as $row)
                          // {
                          //   $id = $row->id_so;
                          //   # code...
                          // }
                          foreach($list as $row)
                        {
                      ?>
                      <tr>
                        <th><?php echo $count; ?></th>
                        <th> <?php echo $row->NAMA_SO;?></th>
                        <th><?php echo $row->NAMA_KLUSTER;?> </th>
                        <th><?php echo $row->NAMA_ODP; ?></th>
                          <th><a href="<?php echo base_url() . 'manajemen_odp/edit/' . $row->ID_ODP ?>"><i class="fa fa-pencil text-aqua"></i></a>
                          <a href="<?php echo base_url() . 'manajemen_odp/delete/' . $row->ID_ODP ?>" onclick="return deldata()"><i class="fa fa-trash text-red"></i></a></th>
                      </tr>
                      <?php $count = $count + 1; } }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NO</th>
                        <th>SO</th>
                        <th>NAMA KLUSTER</th>
                        <th>NAMA ODP</th>
                        <th>AKSI</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->