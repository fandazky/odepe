<script type="text/javascript">
function checkNull()
{
  if(document.getElementById("nama").value == "" || document.getElementById("username").value == "" || document.getElementById("pass").value == "")
  {
    alert("Isian tidak boleh kosong. Silahkan isi kembali");
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
            Manajemen ODP
            <small>Edit ODP</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Manajemen ODP</a></li>
            <li class="active">Edit ODP</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12" >

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Edit Data ODP</h3>
                </div>
                <?php

                      if($result != NULL)
                      {
                        foreach($result as $row)
                      { ?>
                <form action="<?php echo site_url('manajemen_odp/update') . '/' . $row['ID_ODP'] ?>" method="post">
                    <!-- <div class="form-group">
                      <label>Kluster</label>
                      <div class="input-group">
                        <select class="form-control" name='ID_KLUSTER'>
                          <?php
                          //foreach ($nama_kluster as $row) {
                          //  echo '<option value="'.$row->id_kluster.'">'.$row->nama_kluster. ' ' . $row->id_kluster .  '</option>';
                          }
                          ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
 -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama ODP :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input id="NAMA_ODP" class="form-control" name="NAMA_ODP" placeholder="Nama ODP" value="<?php echo $row['NAMA_ODP'] ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Latitude :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-at"></i>
                      </div>
                      <input id="LT" class="form-control" name="LATITUDE" placeholder="Latitude" value="<?php echo $row['LT'] ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Longtitude :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-at"></i>
                      </div>
                      <input id="LG" class="form-control" name="LONGTITUDE" placeholder="Longtitude" value="<?php echo $row['LG'] ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                </form>
                <?php } } ?> 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      