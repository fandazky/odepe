          <div>
	          <ol class="breadcrumb pull-right">
	            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
	          </ol>
          </div>
        </section>

        	
        <!-- Main content -->
        <section class="content">
        	<div>
		            <div class="running">
		                <marquee align="center" direction="left" scrollamount="5" title="TARGET">
		                    <font color="#666666" size="+2">
		                        <b>
		                        No Error:
			                        <?php
					                  foreach ($noerror as $row) 
					                  {
					                    echo $row['JML_ERROR'];
					                  }
					                ?>
		                        |
		                        Error Keseluruhan:
			                        <?php
					                  foreach ($keseluruhan as $row) 
					                  {
					                    echo $row['JML_ERROR'];
					                  }
					                ?>
					            |
		                        Tidak Ada di Lokasi:
			                        <?php
					                  foreach ($errorlokasi as $row) 
					                  {
					                    echo $row['JML_ERROR'];
					                  }
					                ?>
		                        |
		                        Tidak Ada di Starclick:
			                        <?php
					                  foreach ($errorstarclick as $row) 
					                  {
					                    echo $row['JML_ERROR'];
					                  }
					                ?>
		                        |
		                        Wrong Label:
			                        <?php
					                  foreach ($wronglabel as $row) 
					                  {
					                    echo $row['JML_ERROR'];
					                  }
					                ?>
		                        |
		                        Salah Posisi:
			                        <?php
					                  foreach ($salahposisi as $row) 
					                  {
					                    echo $row['JML_ERROR'];
					                  }
					                ?>
		                        |
		                        Beririsan:
			                        <?php
					                  foreach ($beririsan as $row) 
					                  {
					                    echo $row['JML_ERROR'];
					                  }
					                ?>
		                        

		                        </b>
		                    </font>
		                </marquee>
		            </div>
			</div>

			<div>
				
				<br> 
				<h4>
		            Statistik
		        </h4>
		          <hr style="border-color:#55E0DE;">

		          <div class="row">
		            <div class="col-lg-3 col-xs-6">
		              <!-- small box -->
		              <div class="small-box bg-red">
		                <div class="inner">
		                <?php
		                foreach ($odp as $row) 
		                {
		                  echo '<h3>'.$row['JML_ODP'].'</h3>';
		                }
		                ?>
		                  <p>Optical Distribution Point</p>
		                </div>
		                <div class="icon">
		                  <i class="fa fa-square"></i>
		                </div>
		                <a href="<?php echo base_url() ?>Manajemen_odp/manajemenOdp" class="small-box-footer">
		                  Selengkapnya <i class="fa fa-arrow-circle-right"></i>
		                </a>
		              </div>
		            </div><!-- ./col -->
		            <div class="col-lg-3 col-xs-6">
		              <!-- small box -->
		              <div class="small-box bg-orange">
		                <div class="inner">
		                  <?php
		                  foreach ($kluster as $row) 
		                  {
		                    echo '<h3>'.$row['JML_KLUSTER'].'</h3>';
		                  }
		                  ?>
		                  <p>Kluster</p>
		                </div>
		                <div class="icon">
		                  <i class="fa fa-bookmark"></i>
		                </div>
		                <a href="<?php echo base_url() ?>Manajemen_odp/manajemenOdp" class="small-box-footer">
		                  Selengkapnya <i class="fa fa-arrow-circle-right"></i>
		                </a>
		              </div>
		            </div><!-- ./col -->
		            <div class="col-lg-3 col-xs-6">
		              <!-- small box -->
		              <div class="small-box bg-purple">
		                <div class="inner">
		                  <?php
		                  foreach ($site_operation as $row) 
		                  {
		                    echo '<h3>'.$row['JML_SO'].'</h3>';
		                  }
		                  ?>
		                  <p>Site Operation</p>
		                </div>
		                <div class="icon">
		                  <i class="fa fa-archive"></i>
		                </div>
		                <a href="<?php echo base_url() ?>jenis_komplain" class="small-box-footer">
		                  Selengkapnya <i class="fa fa-arrow-circle-right"></i>
		                </a>
		              </div>
		            </div><!-- ./col -->
		            <div class="col-lg-3 col-xs-6">
		              <!-- small box -->
		              <div class="small-box bg-olive">
		                <div class="inner">
		                  <?php
		                  foreach ($daftar as $row) 
		                  {
		                    echo '<h3>'.$row['JML_DAFTAR'].'</h3>';
		                  }
		                  ?>
		                  <p>ODP Tersurvey</p>
		                </div>
		                <div class="icon">
		                  <i class="fa fa-road"></i>
		                </div>
		                <a href="<?php echo base_url() ?>survey/showSurvey" class="small-box-footer">
		                  Selengkapnya <i class="fa fa-arrow-circle-right"></i>
		                </a>
		              </div>
		            </div><!-- ./col -->
		            
		          </div><!-- /.row -->

		          

		          <h4>
		            Jalan Pintas
		          </h4>
		          <hr style="border-color:#55E0DE;">

		        <div class="row">

		        	<div class="clearfix visible-sm-block"></div>

		            <?php
		            if ($level == 1)
		            echo '
		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="'. base_url() .'manajemen_user/lihat_request">
		                <span class="info-box-icon" style="background-color:#47DAB5; color:#FFFFFF"><i class="fa fa-user-plus"></i></span></a>
		                <div class="info-box-content">
		                  <span class="info-box-text">User Request</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->
		            

		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="'. base_url() .'manajemen_odp">
		                <span class="info-box-icon bg-aqua"><i class="fa fa-square"></i></span></a>
		                <div class="info-box-content">
		                  <span class="info-box-text">Tambah ODP</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->
		            
		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="'. base_url() .'manajemen_odp/inputKluster">
		                <span class="info-box-icon bg-green"><i class="fa fa-bookmark"></i></span></a>
		                <div class="info-box-content">

		                  <span class="info-box-text">Tambah Kluster</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->

		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="'. base_url() .'manajemen_odp/inputSO">
		                <span class="info-box-icon bg-purple"><i class="fa fa-archive"></i></span></a>
		                <div class="info-box-content">

		                  <span class="info-box-text">Tambah Site Operation</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->';
		            ?>

		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="<?php echo base_url() ?>survey">
		                <span class="info-box-icon bg-red"><i class="fa fa-road"></i></span></a>
		                <div class="info-box-content">
		                  <span class="info-box-text">Input Hasil Survey</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->
		            
		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="<?php echo base_url() ?>report/report_cluster">
		                <span class="info-box-icon bg-orange"><i class="fa fa-pie-chart"></i></span></a>
		                <div class="info-box-content">
		                  <span class="info-box-text">Report Kluster</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->

		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="<?php echo base_url() ?>report/report_wilayah">
		                <span class="info-box-icon" style="background-color:#996633; color: #FFFFFF;"><i class="fa fa-pie-chart"></i></span></a>
		                <div class="info-box-content">
		                  <span class="info-box-text">Report SO</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->

		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="<?php echo base_url() ?>report/report_area">
		                <span class="info-box-icon bg-blue"><i class="fa fa-pie-chart"></i></span></a>
		                <div class="info-box-content">
		                  <span class="info-box-text">Report Area</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->

		            <div class="col-md-4 col-sm-6 col-xs-12">
		              <div class="info-box">
		              <a href="<?php echo base_url() ?>report/report_witel">
		                <span class="info-box-icon bg-maroon"><i class="fa fa-pie-chart"></i></span></a>
		                <div class="info-box-content">
		                  <span class="info-box-text">Report Witel</span>
		                </div><!-- /.info-box-content -->
		              </div><!-- /.info-box -->
		            </div><!-- /.col -->
		    
		          </div><!-- /.row -->
		    </div>

        </section><!-- /.content -->
    </div>
