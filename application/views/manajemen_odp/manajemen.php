         <section>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Manajemen ODP</a></li>
            <li class="active">Lihat Daftar ODP</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
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
                        <th>NAMA KLUSTER</th>
                        <th>NAMA_ODP</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th width="30px">EDIT</th>
                        <th width="30px">HAPUS</th>
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
                        <th><?php echo $count; ?></th>
                        <th><?php
                          $nama = $this->db->query('select nama_kluster from odp,kluster where odp.id_kluster = kluster.id_kluster and odp.id_kluster = '.$row->ID_KLUSTER)->row_array();                         
                          echo $nama['nama_kluster'];
                        ?> </th>
                        <th><?php echo $row->NAMA_ODP; ?></th>
                        <th><?php echo $row->LT; ?></th>
                        <th><?php echo $row->LG; ?></th>
                          <th><a href="<?php echo base_url() . 'manajemen_odp/edit/' . $row->ID_ODP ?>"><i class="fa fa-pencil text-aqua"></i></a></th>
                          <th><a href="<?php echo base_url() . 'manajemen_odp/delete/' . $row->ID_ODP ?>" onclick="return deldata()"><i class="fa fa-trash text-red"></i></a></th>
                      </tr>
                      <?php $count = $count + 1; } }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NO</th>
                        <th>NAMA KLUSTER</th>
                        <th>NAMA ODP</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>EDIT</th>
                        <th>HAPUS</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->