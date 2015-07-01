<script>
function deldata() {
    return confirm('Apakah Anda yakin akan menghapus data ini?');
  }
</script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manajemen ODP
            <small>Daftar ODP</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Manajemen ODP</a></li>
            <li class="active">Lihat ODP</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <!-- <form action="<?php echo base_url() ?>manajemen">
                    <input type="submit" class="btn btn-primary" value="Tambah user">
                  </form> -->
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="30px">NO</th>
                       <!-- <th>NAMA KLUSTER</th> -->
                        <th>NAMA ODP</th>
                        <th>LATITUDE</th>
                        <th>LONGTITUDE</th>
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
                      { ?>
                      <tr>
                        <th><?php echo $count; ?></th>
                       <!-- <th><?php echo $row->NAMA_KLUSTER ?></th> -->
                        <th><?php echo $row->NAMA_ODP; ?></th>
                        <th><?php echo $row->LATITUDE; ?></th>
                        <th><?php echo $row->LONGTITUDE; ?></th>
                        <?php if ($row->USERNAME != $this->session->userdata('username')) { ?>
                          <th><a href="<?php echo base_url() . 'manajemen_odp/edit/' . $row->ID_ODP ?>"><i class="fa fa-pencil text-aqua"></i></a></th>
                          <th><a href="<?php echo base_url() . 'manajemen_odp/delete/' . $row->ID_ODP ?>" onclick="return deldata()"><i class="fa fa-trash text-red"></i></a></th>
                        <?php } 
                        else { ?>
                          <th></th>
                          <th></th>
                        <?php } ?>
                      </tr>
                      <?php $count = $count + 1; } }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NO</th>
                      <!--  <th>NAMA KLUSTER</th> -->
                        <th>NAMAODP</th>
                        <th>LATITUDE</th>
                        <th>LONGTITUDE</th>
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