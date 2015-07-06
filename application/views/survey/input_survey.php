          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Survey ODP</a></li>
            <li class="active">Input Hasil Survey</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <div class="row">

            <div class="col-md-12">

              <div class="box box-danger">
                <div class="box-header with-border">
                  <h1 class="box-title">
                    Form Hasil Survey
                  </h1>
                  <br><br>
                  <form action="<?php echo site_url('Survey/inputSurvey'); ?>" method="post" role="form">
                  <div class="form-group">
                      
                    <div class="form-group">
                      <label>Tanggal Survey</label>
                      <div class="input-group col-lg-2">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input name="tgl_survey" type="date" class="form-control" placeholder="yyyy-mm-dd"/>
                      </div><!-- /.input group --> 
                    </div><!-- /.form group -->

                    <label>Kluster</label>
                    <div id="namaKluster" class="input-group">
                      <select name="id_kluster" class="form-control">
                        <?php
                        foreach ($nama_kluster as $row) {
                          echo '<option value="'.$row->id_kluster.'">'.$row->nama_kluster.'</option>';
                        }
                        ?>
                      </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  
                </div>

                  <div class="box-body">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th rowspan="2" style="vertical-align: middle;">Optical_Distribution_Point</th>
                          <th rowspan="2" style="vertical-align: middle;">Valid Taging</th>
                          <th rowspan="2" style="vertical-align: middle;">Latitude</th>
                          <th rowspan="2" style="vertical-align: middle;">Longitude</th>
                          <th rowspan="2" style="vertical-align: middle;">Label</th>
                          <th rowspan="2" style="vertical-align: middle;">Kesalahan</th>
                          <th rowspan="2" style="vertical-align: middle;">Availability</th>
                          <th rowspan="2" style="vertical-align: middle;">Bangunan Berpenghuni</th>
                          <th colspan="8" style="text-align: center;">Segmen</th>
                          <th rowspan="2" style="vertical-align: middle;">Kompetitor</th>
                          <th rowspan="2" style="vertical-align: middle;">Keterangan_Tambahan</th>
                        </tr>
                        <tr>
                          <th>Perum_<_500JT</th>
                          <th>Perum_500JT_sd_1M</th>
                          <th>Perum_>_1M</th>
                          <th>Perkampungan</th>
                          <th>Ruko</th>
                          <th>Kantor_Kecil</th>
                          <th>Kantor_Besar</th>
                          <th>PT</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <div class="input-group">
                            <select name="id_odp" class="form-control">
                              <?php
                              foreach ($nama_odp as $row) {
                                echo '<option value="'.$row->id_odp.'">'.$row->nama_odp.'</option>';
                              }
                              ?>
                            </select>
                          </div>
                          </td>
                          <td>
                            <div class="input-group">
                                                 
                              <input type="radio" name="valid_tag" class="flat-red" value="Ya"/>
                              <input type="hidden" name="valid_tag" value="Tidak">
                            
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              
                              <input name="latitude" type="text" class="form-control" placeholder="">
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              
                              <input name="longitude" type="text" class="form-control" placeholder="">
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <label>
                                <input type="radio" name="label" class="flat-red" value="Ada"/>
                                <input type="hidden" name="label" value="Tidak Ada">
                                
                              </label>
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <select name="id_error" class="form-control">
                                <?php
                                foreach ($nama_error as $row) {
                                  echo '<option value="'.$row->id_error.'">'.$row->nama_error.'</option>';
                                }
                                ?>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              
                              <input name="availability" type="text" class="form-control">
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              
                              <input name="bangunan" type="text" class="form-control">
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <label>
                                <input name="kurang_dari_500jt" type="checkbox" class="flat-red" value="1" />
                                <input type="hidden" name="kurang_dari_500jt" value="0">
                              </label>
                          </td>
                          <td>
                            <label>
                                <input name="500jt_sd_1m" type="checkbox" class="flat-red" value="1"/>
                                <input type="hidden" name="500jt_sd_1m" value="0">
                                
                            </label>
                          </td>
                          <td>
                            <label>
                                <input name="lebih_dari_1m" type="checkbox" class="flat-red" value="1"/>
                                <input type="hidden" name="lebih_dari_1m" value="0">
                                
                            </label>
                          </td>
                          <td>
                            <label>
                                <input name="perkampungan" type="checkbox" class="flat-red" value="1"/>
                                <input type="hidden" name="perkampungan" value="0">
                                
                            </label>
                          </td>
                          <td>
                            <label>
                                <input name="ruko" type="checkbox" class="flat-red" value="1"/>
                                <input type="hidden" name="ruko" value="0">
                                
                            </label>
                          </td>
                          <td>
                            <label>
                                <input name="kantor_kecil" type="checkbox" class="flat-red" value="1"/>
                                <input type="hidden" name="kantor_kecil" value="0">
                                
                            </label>
                          </td>
                          <td>
                            <label>
                                <input name="kantor_besar" type="checkbox" class="flat-red" value="1"/>
                                <input type="hidden" name="kantor_besar" value="0">
                                
                            </label>
                          </td>
                          <td>
                             <label>
                                <input name="perguruan_tinggi" type="checkbox" class="flat-red" value="1"/>
                                <input type="hidden" name="perguruan_tinggi" value="0">
                                
                              </label>
                          </td>
                          <td>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-flag-checkered"></i>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan Tambahan"></textarea>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div><!-- /.box -->

                      <div class="box-footer">
                        <div class="pull-right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                
                <?php
                  if(isset($_GET['type'])) {


                  }
                ?>
                  
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

                    

                    <!-- <div class="form-group">
                      <label>ODP</label>
                      <div class="input-group">
                        <select name="id_odp" class="form-control">
                          <?php
                          //foreach ($nama_odp as $row) {
                            //echo '<option value="'.$row->id_odp.'">'.$row->nama_odp.'</option>';
                          //}
                          ?>
                        </select>
                      </div>
                    </div>-->

                    

                    <!-- <div class="form-group">
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
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input name="longitude" type="text" class="form-control" placeholder="Longitude">
                      </div>
                    </div>

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
                          //foreach ($nama_error as $row) {
                            //echo '<option value="'.$row->id_error.'">'.$row->nama_error.'</option>';
                          //}
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Availability</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-check"></i>
                        </div>
                        <input name="availability" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Jumlah Bangunan Berpenghuni</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-building-o"></i>
                        </div>
                        <input name="bangunan" type="text" class="form-control">
                      </div>
                    </div>

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
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan Tambahan"></textarea>
                    </div> -->

                    