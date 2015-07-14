		  
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#">Survey ODP</a></li>
              <li class="active">Edit Hasil Survey</li>
            </ol>
          
        </section>

        <section class="content">
        <div class="row">
            <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h1 class="box-title">Edit Hasil Survey</h1>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                <div class="table-responsive">
                     <div class="col-md-12"> 
                        <form class="form-horizontal" action="<?php echo site_url('survey/editSurvey') . '/' .  $ID_DAFTAR?>" method="POST">

                        <div class="form-group">
	                      <label>Tanggal Survey</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="tgl_survey" id="tgl_survey" type="text" class="form-control" value="<?php echo $tanggal ?>" readonly>
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->
                        
                        <div class="form-group">
	                      <label>Kluster</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="id_kluster" id="id_kluster" type="text" class="form-control" value="<?php echo $kluster ?>" readonly>
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

                        <div class="form-group">
	                      <label>Optical Distribution Point</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="id_odp" id="id_odp" type="text" class="form-control" value="<?php echo $odp ?>" readonly>
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->
                        
                        
                        <div class="form-group">
	                      <label>Valid Tag</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="valid_tag" id="valid_tag" type="text" class="form-control" value="<?php echo $valid ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

                        <div class="form-group">
	                      <label>Latitude</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="latitude" id="latitude" type="text" class="form-control" value="<?php echo $latitude ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->
                        
                        <div class="form-group">
	                      <label>Longitude</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="longitude" id="longitude" type="text" class="form-control" value="<?php echo $longitude ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Label</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="label" id="label" type="text" class="form-control" value="<?php echo $label ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Error </label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
							<select name="error" class="form-control">
								<?php
								foreach ($error as $row)
								{
								  echo '<option value="'.$row->id_error.'">'.$row->nama_error.'</option>';
								}
								?>
							</select>
						  </div>
	                    </div>



	                    <div class="form-group">
	                      <label>Availability</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="availability" id="availability" type="text" class="form-control" value="<?php echo $availability ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Bangunan</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="bangunan" id="bangunan" type="text" class="form-control" value="<?php echo $bangunan ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Perumahan < 500 JT</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="kurang" id="kurang" type="text" class="form-control" value="<?php echo $kurang ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Perumahan Antara 500JT - 1M</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="antara_500jt_sd_1m" id="antara_500jt_sd_1m" type="text" class="form-control" value="<?php echo $antara ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Perumahan Lebih dari 1M</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="lebih_dari_1m" id="lebih_dari_" type="text" class="form-control" value="<?php echo $lebih ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Perkampungan</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="perkampungan" id="perkampungan" type="text" class="form-control" value="<?php echo $kampung ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Ruko</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="ruko" id="ruko" type="text" class="form-control" value="<?php echo $ruko ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Kantor Kecil</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="kantor_kecil" id="kantor_kecil" type="text" class="form-control" value="<?php echo $kecil ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Kantor Besar</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="kantor_besar" id="kantor_besar" type="text" class="form-control" value="<?php echo $besar ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Perguruan Tinggi</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="perguruan_tinggi" id="perguruan_tinggi" type="text" class="form-control" value="<?php echo $pt ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
	                      <label>Kompetitor</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
							<select name="kompetitor" class="form-control">
								<?php
								foreach ($kompetitor as $row)
								{
								  echo '<option value="'.$row->id_kompetitor.'">'.$row->nama_kompetitor.'</option>';
								}
								?>
							</select>
						  </div>
	                    </div>

	                    <div class="form-group">
	                      <label>Keterangan</label>
	                      <div class="input-group">
	                        <div class="input-group-addon">
	                          <i class="fa fa-"></i>
	                        </div>
	                        <input name="keterangan" id="keterangan" type="text" class="form-control" value="<?php echo $keterangan ?>">
	                      </div><!-- /.input group -->
	                    </div><!-- /.form group -->

	                    <div class="form-group">
                            <div class="pull-right">
                                <a href="<?php echo base_url()?>access" class="btn btn-danger confirm" role="button" title="Apakah Anda yakin ingin membatalkan?">Batal</a>
                                <!-- <input type="reset" class="btn btn-default confirm" value="Batal" title="Apakah Anda yakin ingin membatalkan?"> -->
                                <input type="submit" class="btn btn-success confirm" value="Simpan" title="Apakah Anda yakin ingin menyimpan data ini?">
                            </div>
                        </div>

                        <!-- <input type="submit" value="Simpan" class="btn btn-info btn-block"> -->
                        
                        </form> 
                    </div>
                </div> <!-- /.table-responsive -->
                </div><!-- /.box-body -->

            </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

