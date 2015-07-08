
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Permintaan Pembuatan User</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
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
                        <td>".anchor('register/accept_request/'.$req->username,'<span><i class="fa fa-check fa-2x"></i></span> ').anchor('register/decline_request/'.$req->username,' <span><i class="fa fa-times fa-2x"></i></span>')."</td>
                        </tr>
                        ";
                      }
                    ?>
                    
                    
                  </tbody>
                </table>
              </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->

          </div><!-- /.box -->
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

