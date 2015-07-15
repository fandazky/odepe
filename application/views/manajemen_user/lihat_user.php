
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Manajemen User</a></li>
            <li class="active">Lihat Semua User</li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">
        <div class="row">
        <div class="col-md-12"> 
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><B>User Aktif</B></h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <div class="col-md-11"> 

                <!-- Modal -->
                <div class="modal fade" id="konfirmasi-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel">Konfirmasi hapus</h4>
                      </div>
                      <div class="modal-body"> Apakah anda yakin menghapus data user ini? 
                      </div>
                      <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-danger" id="hapus-true">Ya</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                      </div>
                    </div>
                  </div>
                </div>

                <table class="table table-bordered table-striped" id="mytable">
                  <thead>
                    <tr>
                      <th class="col-md-1">No.</th>
                      <th>Username</th>
                      <th>NIK</th>
                      <th>Hak Akses</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Area Kerja</th>
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
                        <td>".$active->username."</td>
                        <td>".$active->nik."</td>";

                        if($active->level==1)
                          { echo "<td> Administrator </td>";} 
                        else
                          { echo "<td> Operator </td>";}

                        echo "
                        <td>".$active->first_name." ".$active->last_name."</td>
                        <td>" .$active->address. "</td>";
                        
                    ?>
                    <?php
                      if($active->level==1)
                      {
                        echo "<td>Semua</td>";
                      }
                      else
                      {
                        echo '<td>' .$active->nama_area. '</td>';
                      }
                    ?>

                      <?php
                        if($active->level==1)
                        {
                          // echo '<td align="center"><span title="Edit User"><a href="#"><i class="fa fa-pencil-square-o"></i></a></span> | <span title="Hapus User"><a href="#" ><i class="fa fa-trash-o"></i></span></td>
                          //       </tr>';
                          echo '<td align="center"> - </td>';
                        }
                        else
                        {
                          echo '<td align="center"><span title="Edit User"><a href="'. base_url() .'manajemen_user/edit_user/'. $active->username .'"><i class="fa fa-pencil-square-o"></i></a></span> | <span title="Hapus User"><a href="javascript:;" data-id="'. $active->username .'" data-toggle="modal" data-target="#konfirmasi-hapus"><i class="fa fa-trash-o"></i></span></td>
                                </tr>';
                        }
                        
                      ?>

                      <?php 
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

                        $('#konfirmasi-hapus').on('show.bs.modal', function (event) {
                          var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                          
                          // Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
                          var id = div.data('id')
                           
                          var modal = $(this)
                           
                          // Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal .
                          modal.find('#hapus-true').attr("href","<?php echo base_url()?>manajemen_user/delete_user/"+id);
                         
                        });
                    });
                </script>
              </div><!-- /.table-responsive -->
              </div>
              
              </div><!-- /.table-responsive --> 
            </div><!-- /.box-body -->

            </div>
          </div><!-- /.box -->
          </div>
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->


