
          <div class="col-md-11">
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Manajemen User</a></li>
            <li class="active">Lihat User Request</li>
          </ol>
          </div>
        </section>

        <!-- Main content -->
        
        <section class="content">
        
        <div class="row">
          <div class="col-md-11"> 
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><B>Permintaan Pembuatan User</B></h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <div class="col-md-11"> 
                <table class="table table-bordered table-striped" id="mytable">
                  <thead>
                    <tr>
                      <th class="col-md-1">No.</th>
                      <th>Username</th>
                      <th>Hak Akses</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 0;
                      foreach ($registration_request->result() as $req) {
                        echo "
                        <tr>
                        <td>".++$i."</td>
                        <td>".$req->username."</td> ";

                        if($req->level==1)
                          { echo "<td> Administrator </td>";} 
                        else
                          { echo "<td> Operator </td>";}

                        echo "
                        <td>".$req->first_name." ".$req->last_name."</td>
                        <td>".$req->address."</td>
                        <td align=\"center\">".anchor('register/accept_request/'.$req->username,'<span title="Terima Request" align="center"><i class="fa fa-check"></i></span>')." | ".anchor('register/decline_request/'.$req->username,'  <span title="Tolak Request"><i class="fa fa-times"></i></span>')."</td>
                        </tr>  
                        ";
                      }
                    ?>
                  </tbody>
                </table>
                <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
                <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
                <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.js') ?>"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#mytable").dataTable();
                    });
                </script>
              </div><!-- /.table-responsive -->
              </div>
            </div><!-- /.box-body -->

          </div><!-- /.box -->
          </div>
        </div>
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

