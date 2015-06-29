      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Selamat Datang Admin
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registration Request</h3>
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
                      <th>Name</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($registration_request->result() as $req) {
                        echo "
                        <tr>
                        <td>".$req->username."</td>
                        <td>".$req->first_name." ".$req->last_name."</td>
                        <td>".$req->address."</td>
                        <td>".anchor('register/accept_request/'.$req->username,'accept').anchor('register/decline_request/',' decline')."</td>
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

