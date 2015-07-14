
<script type="text/javascript">
  function checkNull()
  {
    var latitude = document.getElementById("latitude").value;
    var longtitude = document.getElementById("longtitude").value;
    var nama_odp = document.getElementById("nama_odp").value;
    if(latitude == "")
    {
      alert("Isian LATITUDE tidak boleh kosong. Silahkan isi kembali");
      document.getElementById("latitude").focus();
      return false;
    }
    else if (longtitude == "") 
    {
      alert("Isian LONGTITUDE tidak boleh kosong. Silahkan isi kembali");
      document.getElementById("longtitude").focus();
      return false;
    }
    else if (nama_odp == "") 
    {
      alert("Isian NAMA ODP tidak boleh kosong. Silahkan isi kembali");
      document.getElementById("nama_odp").focus();
      return false;
    }
    else 
    {
      return true;
    }
  }

</script>

          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Manajemen ODP</a></li>
            <li class="active">Tambah ODP</li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">
          
          <div class="row">

            <div class="col-md-12">

              <div class="box box-danger">

                <div class="box-header">
                  <h3 class="box-title">Tambah ODP</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div> 

                <div class="box-body">
                  <!--<?php echo validation_errors()?> -->
                  <form action="<?php echo base_url('manajemen_odp/inputOdp'); ?>" method="post" role="form">
                    <div class="form-group">
                      <label>Kluster</label>
                      <div class="input-group">
                        <select class="form-control" name='ID_KLUSTER'>
                          <?php
                          foreach ($nama_kluster as $row) {
                            echo '<option value="'.$row->id_kluster.'">'.$row->nama_kluster. '</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                   
                    <div class="form-group">
                      <label>Latitude</label> <span class="error"></span>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input name="LATITUDE" id="latitude" type="text" class="form-control" placeholder="-7.9999"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                       <label>Longtitude</label> <span class="error"></span>
                      <div class="input-group">
                        <div class="input-group-addon"> 
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input name="LONGTITUDE" id="longtitude" type="text" class="form-control" placeholder="112.9999" >
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->



                    <div class="form-group">
                      <label>Nama ODP <span class="error"></span> </label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-flag-checkered"></i>
                        </div> 
                        <!--<input type="text" class="form-control" name='NAMA_ODP' placeholder="ODP-XXX-XXX/99" data-inputmask='"mask": "ODP-aaa-aaa/##"' data-mask <?php echo set_value();?>> -->
                        <input id="nama_odp" type="text" class="form-control" name='NAMA_ODP' placeholder="ODP-XXX-XXX/99">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="box-footer">
                      <div class="pull-right">
                        <button type="submit" class="btn btn-primary" onclick="return checkNull()">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

