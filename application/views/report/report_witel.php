
      
          <script src="<?php  echo base_url() ?>/assets/plugins/chartjs/Chart.js"></script>
          <script src="<?php  echo base_url() ?>/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>

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
                    Chart Witel <?php echo $noerror1;?>
                  </h1>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                    <div style="width: 50%">
                      <canvas id="canvas" height="100%" width="100"></canvas>
                    </div>
                    <script>
                        
                        //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
                        var pieData = [
                          {
                            //value: <?php echo $noerror1;?>,
                            value: 300,
                            color: "#46BFBD",
                            highlight: "#5AD3D1",
                            label: "No Error"
                          },
                          {
                            //value: <?php echo $nolocation2;?>,
                            value: 50,
                            color:"#F7464A",
                            highlight: "#FF5A5E",
                            label: "Tidak di Lokasi"
                          },
                          {
                            //value: <?php echo $nostarclick3;?>,
                            value: 60,
                            color: "#FDB45C",
                            highlight: "#FFC870",
                            label: "Tidak Ada di Starclick"
                          },
                          {
                            value: 89,
                            //value: <?php echo $wronglabel4;?>,
                            color: "#949FB1",
                            highlight: "#A8B3C5",
                            label: "Wrong Label"
                          },
                          {
                            //value: <?php echo $irisan5;?>,
                            value: 56,
                            color: "#4D5360",
                            highlight: "#616774",
                            label: "ID & Kluster Beda, Tapi Koordinat Sama"
                          },
                          {
                            //value: <?php echo $wrongpos6;?>,
                            value: 49,
                            color:"#F7464A",
                            highlight: "#FF5A5E",
                            label: "Salah Posisi"
                          }
                        ];

                        window.onload = function(){
                          var ctx = document.getElementById("canvas").getContext("2d");
                          window.myPie = new Chart(ctx).Pie(pieData)
                        };

                    </script>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->