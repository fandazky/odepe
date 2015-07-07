          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Survey ODP</a></li>
            <li class="active">Input Hasil Survey</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <div class="row">

            <div class="col-md-8">

              <div class="box box-danger">
                <div class="box-header with-border">
                  <h1 class="box-title">
                    Form Hasil Survey
                  </h1>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form action="<?php echo site_url('Survey/inputSurvey'); ?>" method="post" role="form">
                    <div class="form-group">
                      
                      <label>Kluster</label>
                      <div class="input-group">
                        <select name="id_kluster" class="form-control">
                          <?php
                          foreach ($nama_kluster as $row) {
                            echo '<option value="'.$row->id_kluster.'">'.$row->nama_kluster.'</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>ODP</label>
                      <div class="input-group">
                        <select name="id_odp" class="form-control">
                          <?php
                          foreach ($nama_odp as $row) {
                            echo '<option value="'.$row->id_odp.'">'.$row->nama_odp.'</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Tanggal Survey</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input name="tgl_survey" type="date" class="form-control" placeholder="yyyy-mm-dd"/>
                      </div><!-- /.input group --> 
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Valid (SSI Taging)</label>
                      <div class="input-group">
                        <label>                     
                          <input type="radio" name="valid_tag" class="flat-red" value="Ya"/>
                          Ya
                        </label>&nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="radio" name="valid_tag" class="flat-red" value="Tidak"/>
                          Tidak
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input name="latitude" type="text" class="form-control" placeholder="Latitude">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input name="longitude" type="text" class="form-control" placeholder="Longitude">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Label</label>
                      <div class="input-group">
                        <label>
                          <input type="radio" name="label" class="flat-red" value="Ada"/>
                          Ada
                        </label>&nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="radio" name="label" class="flat-red" value="Tidak Ada"/>
                          Tidak Ada
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Error</label>
                      <div class="input-group">
                        <select name="id_error" class="form-control">
                          <?php
                          foreach ($nama_error as $row) {
                            echo '<option value="'.$row->id_error.'">'.$row->nama_error.'</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Availability</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-check"></i>
                        </div>
                        <input name="availability" type="text" class="form-control">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Jumlah Bangunan Berpenghuni</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-building-o"></i>
                        </div>
                        <input name="bangunan" type="text" class="form-control">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Segmen</label>
                      <div class="input-group">
                        <label>
                          <input name="kurang_dari_500jt" type="checkbox" class="flat-red" value="1" />
                          <input type="hidden" name="kurang_dari_500jt" value="0">
                          Perumahan < 500 JT
                        </label><br>
                        <label>
                          <input name="500jt_sd_1m" type="checkbox" class="flat-red" value="1"/>
                          <input type="hidden" name="500jt_sd_1m" value="0">
                          Perumahan 500 JT < H < 1 M
                        </label><br>
                        <label>
                          <input name="lebih_dari_1m" type="checkbox" class="flat-red" value="1"/>
                          <input type="hidden" name="lebih_dari_1m" value="0">
                          Perumahan > 1 M
                        </label><br>
                        <label>
                          <input name="perkampungan" type="checkbox" class="flat-red" value="1"/>
                          <input type="hidden" name="perkampungan" value="0">
                          Perkampungan
                        </label><br>
                        <label>
                          <input name="ruko" type="checkbox" class="flat-red" value="1"/>
                          <input type="hidden" name="ruko" value="0">
                          Ruko
                        </label><br>
                        <label>
                          <input name="kantor_kecil" type="checkbox" class="flat-red" value="1"/>
                          <input type="hidden" name="kantor_kecil" value="0">
                          Kantor Kecil
                        </label><br>
                        <label>
                          <input name="kantor_besar" type="checkbox" class="flat-red" value="1"/>
                          <input type="hidden" name="kantor_besar" value="0">
                          Kantor Besar
                        </label><br>
                        <label>
                          <input name="perguruan_tinggi" type="checkbox" class="flat-red" value="1"/>
                          <input type="hidden" name="perguruan_tinggi" value="0">
                          Perguruan Tinggi
                        </label><br>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Kompetitor</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-flag-checkered"></i>
                        </div>
                        <input type="text" class="form-control">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan Tambahan"></textarea>
                    </div><!-- /.form group -->

                    <div class="box-footer">
                      <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->