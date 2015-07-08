
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Manajemen User</a></li>
            <li class="active">Lihat Semua User</li>
          </ol>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><B>Semua User</B></h3>
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
                      foreach ($active_user->result() as $active) {
                      echo "
                        <tr>
                        <td>".++$i."</td>
                        <td>".$active->username."</td> ";

                        if($active->level==1)
                          { echo "<td> Administrator </td>";} 
                        else
                          { echo "<td> Operator </td>";}

                        echo "
                        <td>".$active->first_name." ".$active->last_name."</td>
                        <td>".$active->address."</td>
                        <td>".anchor('manajemen_user/edit_user/'.$active->username,'<span title="Edit User"><i class="fa fa-pencil-square-o"></i></span>')." | ".anchor('register/delete_user/'.$active->username,'<span title="Hapus User"><i class="fa fa-trash-o"></i></span>')."</td>
                        
                        
                        </tr>
                        ";
                      }
                      
                    ?>
                    
                    
                  </tbody>
                </table>
                <script src="<?php echo base_url('assets/bootstrap/js/jquery-1.11.2.min.js') ?>"></script>
                <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
                <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#mytable").dataTable();
                    });
                </script>
              </div><!-- /.table-responsive -->
              </div>
              <!--
                <table class="table no-margin">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Username</th>
                      <th>Hak Akses</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    /*
                      $i = 0;
                      foreach ($active_user->result() as $active) {
                      echo "
                        <tr>
                        <td>".++$i."</td>
                        <td>".$active->username."</td> ";

                        if($active->level==1)
                          { echo "<td> Administrator </td>";} 
                        else
                          { echo "<td> Operator </td>";}

                        echo "
                        <td>".$active->first_name." ".$active->last_name."</td>
                        <td>".$active->address."</td>
                        <td>".anchor('manajemen_user/edit_user/'.$active->username,'<span title="Edit User"><i class="fa fa-pencil-square-o"></i></span>')." | ".anchor('register/delete_user/'.$active->username,'<span title="Hapus User"><i class="fa fa-trash-o"></i></span>')."</td>
                        
                        
                        </tr>
                        ";
                      }
                      */
                    ?>
                    
                    
                  </tbody>
                </table> -->
              </div><!-- /.table-responsive --> 
            </div><!-- /.box-body -->

          </div><!-- /.box -->
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

