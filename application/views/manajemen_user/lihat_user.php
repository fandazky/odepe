
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat User</h3>
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
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Last Login</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($active_user->result() as $req) {
                        echo "
                        <tr>
                        <td>".$req->username."</td>
                        <td>".$req->first_name." ".$req->last_name."</td>
                        <td>".$req->address."</td>
                        <td>03-03-2003 12.00</td>
                        
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

