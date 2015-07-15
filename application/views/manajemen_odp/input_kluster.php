
<script type="text/javascript">
  function checkNull()
  {
    var nama_kluster = document.getElementById("nama_kluster").value;
    if(nama_kluster == "")
    {
      alert("Isian NAMA KLUSTER tidak boleh kosong. Silahkan isi kembali");
      document.getElementById("nama_kluster").focus();
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
            <li class="active">Tambah Kluster</li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">
          
          <div class="row">

            <div class="col-md-12">

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Tambah Kluster</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div> 
                <div class="box-body">
                  <form action="<?php echo base_url('manajemen_odp/inputDataKluster'); ?>" method="post" role="form">
      
                    <div class="form-group">
                       <label>Kluster</label><span class="error"></span>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Nama Kluster" name='NAMA_KLUSTER'>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Site Operation</label>
                      <div class="input-group">
                         <select class="form-control" name='ID_SO'>
                          <?php
                          foreach ($nama_so as $row) {
                            echo '<option value="'.$row->id_so.'">'.$row->nama_so. '</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="box-footer">
                      <div class="pull-right">
                        <button type="submit" class="btn btn-primary" onclick="checkNull()">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

