<script type="text/javascript">
function checkNull()
{
  var asek = document.getElementById("namalayanan").value;
  if(asek == "")
  {
    alert("Nama layanan tidak boleh kosong. Silahkan isi kembali");
    document.getElementById("namalayanan").focus();
    return false;
  }
  else
  {
    return true;
  }
}
</script>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Layanan
            <small>Tambah Layanan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Layanan</li>
            <li class="active">Tambah Layanan</li>
          </ol>
        </section>

<!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                <form action="<?php echo site_url('layanan/add'); ?>" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="namalayanan">Nama Layanan</label>
                      <input class="form-control" id="namalayanan" name="namalayanan">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" onclick="return checkNull()">Tambahkan</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
  </div> <!-- /.content-wrapper-->