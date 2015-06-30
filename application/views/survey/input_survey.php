<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Survey ODP
            <small>Input Hasil Survey</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Survey ODP</a></li>
            <li class="active">Input Hasil Survey</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <div class="row">

            <div class="col-md-8">

              <div class="box box-danger">
                <!-- <div class="box-header">
                  <h3 class="box-title">Data Survey</h3>
                </div> -->
                <div class="box-body">
                  <form action="<?php echo site_url('Komplain/addKomplain'); ?>" method="post" role="form">
                    <div class="form-group">
                      <label>Kluster</label>
                      <div class="input-group">
                        <select class="form-control">
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
                        <select class="form-control">
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
                        <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Valid (SSI Taging)</label>
                      <div class="input-group">
                        <label>                     
                          <input type="radio" name="r3" class="flat-red">
                          Ya
                        </label>&nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="radio" name="r3" class="flat-red"/>
                          Tidak
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Latitude">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Longitude">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Label</label>
                      <div class="input-group">
                        <label>
                          <input type="radio" name="r3" class="flat-red"/>
                          Ada
                        </label>&nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="radio" name="r3" class="flat-red"/>
                          Tidak Ada
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Error</label>
                      <div class="input-group">
                        <select class="form-control">
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
                        <input type="text" class="form-control">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Jumlah Bangunan Berpenghuni</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-building-o"></i>
                        </div>
                        <input type="text" class="form-control">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Segmen</label>
                      <div class="input-group">
                        <label>
                          <input type="checkbox" class="flat-red"/>
                          Perumahan < 500 JT
                        </label><br>
                        <label>
                          <input type="checkbox" class="flat-red"/>
                          Perumahan 500 JT < H < 1 M
                        </label><br>
                        <label>
                          <input type="checkbox" class="flat-red"/>
                          Perumahan > 1 M
                        </label><br>
                        <label>
                          <input type="checkbox" class="flat-red"/>
                          Perkampungan
                        </label><br>
                        <label>
                          <input type="checkbox" class="flat-red"/>
                          Ruko
                        </label><br>
                        <label>
                          <input type="checkbox" class="flat-red"/>
                          Kantor Kecil
                        </label><br>
                        <label>
                          <input type="checkbox" class="flat-red"/>
                          Kantor Besar
                        </label><br>
                        <label>
                          <input type="checkbox" class="flat-red"/>
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
                      <textarea name="ket" class="form-control" rows="3" placeholder="Keterangan Tambahan"></textarea>
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