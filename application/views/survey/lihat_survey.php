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
                                          
                        
                      <!-- <tr>
                        <th rowspan="3">NO</th>
                        <th rowspan="3">NAMA KLUSTER</th>
                        <th rowspan="3">NAMA ODP</th>
                        <th rowspan="3">VALID (SSI TAGING)</th>
                        <th colspan="2">POSISI</th>
                        <th rowspan="3">LABEL</th>
                        <th rowspan="3">ERROR</th>
                        <th rowspan="3">AVAILABLITY</th>
                        <th rowspan="3">BANGUNAN BERPENGHUNI</th>
                        <th colspan="8">SEGMEN</th>
                        <th rowspan="3">KOMPETITOR</th>
                        <th rowspan="3">KETERANGAN</th>
                      </tr>
                      <tr>
                        <th rowspan="2">LATITUDE</th>
                        <th rowspan="2">LONGITUDE</th>>
                        <th colspan="3">PERUMAHAN</th>
                        <th rowspan="2">PERKAMPUNGAN</th>
                        <th rowspan="2">RUKO</th>
                        <th colspan="2">KANTOR</th>
                        <th rowspan="2">PERGURUN TINGGI</th>
                      </tr>
                      <tr>
                        <th> < 500 JT</th>
                        <th>500 JT < H < 1 M</th>
                        <th> > 1 M </th>
                        <th>KECIL</th>
                        <th>BESAR</th>
                      </tr> -->
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
                          $nama = $this->db->query('select nama_kluster from daftar, odp, kluster where daftar.id_odp = odp.id_odp and odp.id_kluster = kluster.id_kluster')->row_array();                         
                          echo $nama['nama_kluster'];
                        ?>
                        </th>
                        <th><?php echo $row->ID_ODP; ?></th>
                        <th><?php echo $row->VALID_TAG; ?></th>
                        <th><?php echo $row->LATITUDE; ?></th>
                        <th><?php echo $row->LONGITUDE; ?></th>
                        <th><?php echo $row->LABEL; ?></th>
                        <th><?php echo $row->ID_ERROR; ?></th>
                        <th><?php echo $row->AVAILABILITY; ?></th>
                        <th><?php echo $row->BANGUNAN; ?></th>
                        <th><?php echo $row->KURANG_DARI_500JT; ?></th>
                        <th><?php echo $row->ANTARA_500JT_SD_1M; ?></th>
                        <th><?php echo $row->LEBIH_DARI_1M; ?></th>
                        <th><?php echo $row->PERKAMPUNGAN; ?></th>
                        <th><?php echo $row->RUKO; ?></th>
                        <th><?php echo $row->KANTOR_KECIL; ?></th>
                        <th><?php echo $row->KANTOR_BESAR; ?></th>
                        <th><?php echo $row->PERGURUAN_TINGGI; ?></th>
                        <th></th>
                        <th><?php echo $row->KETERANGAN; ?></th>
                      </tr>
                      <?php $count = $count + 1; } }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NO</th>
                        <th>NAMA KLUSTER</th>
                        <th>NAMA ODP</th>
                        <th>VALID TAGING</th>
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
                        <th>KANTOR KECIL</th>
                        <th>KANTOR BESAR</th>
                        <th>PERGURUAN TINGGI</th>
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