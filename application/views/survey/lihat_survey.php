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
                  <form action="<?php echo base_url() ?>survey">
                    <input type="submit" class="btn btn-primary" value="Input Hasil Survey">
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
                        <th>NAMA_KLUSTER</th>
                        <th>NAMA_ODP</th>
                        <th>VALID_TAGING</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>LABEL</th>
                        <th>ERROR</th>
                        <th>AVAILABLITY</th>
                        <th>BANGUNAN</th>
                        <th><i class="fa fa-angle-left">500JT</th>
                        <th>500JT-1M</th>
                        <th><i class="fa fa-angle-right">1M </th>
                        <th>PERKAMPUNGAN</th>
                        <th>RUKO</th>
                        <th>KANTOR_KECIL</th>
                        <th>KANTOR_BESAR</th>
                        <th>PERGURUAN_TINGGI</th>
                        <th>KOMPETITOR</th>
                        <th>KETERANGAN</th>
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
                        <td><?php
                          // $nama = $this->db->query
                          // ('SELECT nama_kluster FROM daftar, kluster, odp
                          //   WHERE daftar.id_odp = odp.id_odp and odp.id_kluster = kluster.id_kluster')->row_array();                         
                          // echo $nama['nama_kluster'];
                          $nama = $this->db->query
                          ("SELECT nama_kluster FROM daftar, kluster, odp
                            WHERE daftar.id_odp = odp.id_odp and odp.id_kluster = kluster.id_kluster and odp.id_odp = ".$row->ID_ODP.";")->row_array();                         
                          echo $nama['nama_kluster'];
                        ?>
                        </td>
                        <td><?php echo $row->ID_ODP; ?></td>
                        <td><?php echo $row->VALID_TAG; ?></td>
                        <td><?php echo $row->LATITUDE; ?></td>
                        <td><?php echo $row->LONGITUDE; ?></td>
                        <td><?php echo $row->LABEL; ?></td>
                        <td><?php echo $row->ID_ERROR; ?></td>
                        <td><?php echo $row->AVAILABILITY; ?></td>
                        <td><?php echo $row->BANGUNAN; ?></td>
                        <td><?php echo $row->KURANG_DARI_500JT; ?></td>
                        <td><?php echo $row->ANTARA_500JT_SD_1M; ?></td>
                        <td><?php echo $row->LEBIH_DARI_1M; ?></td>
                        <td><?php echo $row->PERKAMPUNGAN; ?></td>
                        <td><?php echo $row->RUKO; ?></td>
                        <td><?php echo $row->KANTOR_KECIL; ?></td>
                        <td><?php echo $row->KANTOR_BESAR; ?></td>
                        <td><?php echo $row->PERGURUAN_TINGGI; ?></td>
                        <td></td>
                        <td><?php echo $row->KETERANGAN; ?></td>
                      </tr>
                      <?php $count = $count + 1; } }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NO</th>
                        <th>NAMA_KLUSTER</th>
                        <th>NAMA_ODP</th>
                        <th>VALID_TAGING</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>LABEL</th>
                        <th>ERROR</th>
                        <th>AVAILABLITY</th>
                        <th>BANGUNAN</th>
                        <th><i class="fa fa-angle-left">500JT</th>
                        <th>500JT-1M</th>
                        <th><i class="fa fa-angle-right">1M </th>
                        <th>PERKAMPUNGAN</th>
                        <th>RUKO</th>
                        <th>KANTOR_KECIL</th>
                        <th>KANTOR_BESAR</th>
                        <th>PERGURUAN_TINGGI</th>
                        <th>KOMPETITOR</th>
                        <th>KETERANGAN</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->