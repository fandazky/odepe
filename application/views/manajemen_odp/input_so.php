
<script type="text/javascript">
  function checkNull()
  {
    var nama_so = document.getElementById("nama_so").value;
    if(nama_so == "")
    {
      alert("Isian Site Operation tidak boleh kosong. Silahkan isi kembali");
      document.getElementById("nama_so").focus();
      return false;
    }
    else 
    {
      return true;
    }
  }

  </script> <section>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Manajemen ODP</a></li>
            <li class="active">Tambah Site Operation</li>
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
                  <form action="<?php echo base_url('manajemen_odp/inputDataSo'); ?>" method="post" role="form">
      
                    <div class="form-group">
                       <label>Site Operation</label><span class="error"></span>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Site Operation" name='NAMA_SO'>
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

