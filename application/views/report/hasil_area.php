
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Report</a></li>
            <li class="active">Report Area <?php echo $namaarea->nama_area;?> </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
              <div class="col-sm-6">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h1 class="box-title">
                  Chart Area
                  <?php echo $namaarea->nama_area;?>
                  </h1>
                  <br>
                  <font size="2">*berdasarkan <?php echo $jumlah_tersurvey;?> ODP yang sudah tersurvey</font> 
                  <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <div style="width: 100% ">
                    <center><canvas id="canvas" height="424%" width="424%"></canvas></center>
                  </div>
                  <script>
                    
                    //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
                    var pieData = [
                      {
                      value: <?php echo $noerror1;?>,
                      //value: 300,
                      color: "#46BFBD",
                      highlight: "#5AD3D1",
                      label: "No Error:<?php echo $persen1?>%"
                      },
                      {
                      value: <?php echo $nolocation2;?>,
                      //value: 50,
                      color:"#F7464A",
                      highlight: "#FF5A5E",
                      label: "Tidak di Lokasi:<?php echo $persen2?>%"
                      },
                      {
                      value: <?php echo $nostarclick3;?>,
                      //value: 60,
                      color: "#FDB45C",
                      highlight: "#FFC870",
                      label: "Tidak Ada di Starclick:<?php echo $persen3?>%"
                      },
                      {
                      //value: 89,
                      value: <?php echo $wronglabel4;?>,
                      color: "#949FB1",
                      highlight: "#A8B3C5",
                      label: "Wrong Label:<?php echo $persen4?>%"
                      },
                      {
                      value: <?php echo $irisan5;?>,
                      //value: 56,
                      color: "#4D5360",
                      highlight: "#616774",
                      label: "ID & Kluster Beda, Tapi Koordinat Sama:<?php echo $persen5?>%"
                      },
                      {
                      value: <?php echo $wrongpos6;?>,
                      //value: 49,
                      color:"#CC0066",
                      highlight: "#D63385",
                      label: "Salah Posisi:<?php echo $persen6?>%"
                      }
                    ];

                    window.onload = function canvas(){
                      var ctx = document.getElementById("canvas").getContext("2d");
                      window.myPie = new Chart(ctx).Pie(pieData);
                    };

                  </script>
                </div>
              </div>
            </div>

            <div class="col-sm-6">              
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-close"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">ODP ERROR</span>
                  <span class="info-box-number"><?php echo $jumlah_error?></span>
                  <div class="progress">
                    <div class="progress-bar" style="width: <?php echo $persen_error;echo "%";?>"></div>
                  </div>
                  <span class="progress-description">
                    <?php echo $ps=number_format($persen_error,2);$ps;echo "%";?> dari <?php echo $jumlah_odp?> ODP pada area <?php echo $namaarea->nama_area;?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div>

            <div class="col-sm-6">              
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-check"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">ODP TERSURVEY</span>
                  <span class="info-box-number"><?php echo $jumlah_tersurvey?></span>
                  <div class="progress">
                    <div class="progress-bar" style="width: <?php echo $persen_survey;echo "%";?>"></div>
                  </div>
                  <span class="progress-description">
                    <?php echo $ps=number_format($persen_survey,2);$ps;echo "%";?> dari <?php echo $jumlah_odp?> ODP pada area <?php echo $namaarea->nama_area;?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div>

            <div class="col-sm-6">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h1 class="box-title">
                  Legend <font size="2">*berdasarkan <?php echo $jumlah_odp?> ODP keseluruhan</font>
                  </h1>
                  <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                  <table class="table table-hover">
                  <tr>
                    <td bgcolor="#46BFBD" ></td>
                    <td><a data-toggle="modal" href="#modal1">Valid No Errror</a></td> 
                    <td><?php echo $noerror1;?></td>
                    <td><?php echo $persen_1;?>%</td>
                  </tr>
                  <tr>
                    <td bgcolor="#F7464A"></td>
                    <td><a data-toggle="modal" href="#modal2">Tidak Ditemukan di Lokasi</a></td>
                    <td><?php echo $nolocation2;?></td>
                    <td><?php echo $persen_2;?>%</td>
                  </tr>
                  <tr>
                    <td bgcolor="#FDB45C"></td>
                    <td><a data-toggle="modal" href="#modal3">Tidak Tercatat di StarClick</a></td>
                    <td><?php echo $nostarclick3;?></td>
                    <td><?php echo $persen_3;?>%</td>
                  </tr>
                  <tr>
                    <td bgcolor="949FB1"></td>
                    <td><a data-toggle="modal" href="#modal4">Salah Pelabelan</a></td>
                    <td><?php echo $wronglabel4;?></td>
                    <td><?php echo $persen_4;?>%</td>
                  </tr>
                  <tr>
                    <td bgcolor="#4D5360"></td>
                    <td><a data-toggle="modal" href="#modal5">ID dan Kluster beda, tetapi koordinat sama</a></td>
                    <td><?php echo $irisan5;?></td>
                    <td><?php echo $persen_5;?>%</td>
                  </tr>
                  <tr>
                    <td bgcolor="#CC0066"></td>
                    <td><a data-toggle="modal" href="#modal6">Salah Posisi > 5m</a></td>
                    <td><?php echo $wrongpos6;?></td>
                    <td><?php echo $persen_6;?>%</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Belum tersurvey</td>
                    <td><?php echo $belum_survey;?></td>
                    <td><?php echo $persen_belum;?>%</td>
                  </tr>
                  </table>
                </div>
              </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <div class="modal fade" id="modal1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Valid No Errror</h4>
            </div>
            <div class="modal-body">
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
                    if($list1 != NULL)
                    {
                      foreach($list1 as $row)
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal2" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tidak Ditemukan di Lokasi</h4>
            </div>
            <div class="modal-body">
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
                    if($list2 != NULL)
                    {
                      foreach($list2 as $row)
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal3" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tidak Tercatat di StarClick</h4>
            </div>
            <div class="modal-body">
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
                    if($list3 != NULL)
                    {
                      foreach($list3 as $row)
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal4" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Salah Pelabelan</h4>
            </div>
            <div class="modal-body">
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
                    if($list4 != NULL)
                    {
                      foreach($list4 as $row)
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal5" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">ID dan Kluster beda, tetapi koordinat sama</h4>
            </div>
            <div class="modal-body">
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
                    if($list5 != NULL)
                    {
                      foreach($list5 as $row)
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal6" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Salah Posisi > 5m</h4>
            </div>
            <div class="modal-body">
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
                    if($list6 != NULL)
                    {
                      foreach($list6 as $row)
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
