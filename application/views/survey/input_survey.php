          <div>
            <ol class="breadcrumb pull-right">
              <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#">Survey ODP</a></li>
              <li class="active">Input Hasil Survey</li>
            </ol>
          </div>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <div class="row">

            <div class="col-md-12">

              <div class="box box-danger">
                <div class="box-header with-border">
                  <h1 class="box-title">
                    Form Hasil Survey
                  </h1>
                  <br><br>
                  <form action="<?php echo site_url('Survey/insertSurvey'); ?>" method="post" role="form">
                    <div class="form-group">
                        
                      <div class="form-group">
                        <label>Tanggal Survey</label>
                        <div class="input-group col-lg-2">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input name="tgl_survey" type="date" class="form-control" placeholder="yyyy-mm-dd"/>
                        </div><!-- /.input group --> 
                      </div><!-- /.form group -->

                      <label>Kluster</label>
                      <div class="input-group">
                        <select name="id_kluster" id="namaKluster" class="form-control selectpicker scrollable-menu" role="menu" data-live-search="true" data-size="3">
                          <option style="display: none;">Pilih Kluster</option>
                          <?php
                          foreach ($nama_kluster as $row) {
                            // print_r($row->id_kluster);
                            echo '<option value="'.$row->id_kluster.'">'.$row->nama_kluster.'</option>';
                          }
                          ?>                     
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                  

                  <div class="box-body">
                    <table class="table table-bordered table-striped" id="tabel" hidden>
                      <thead>
                        <tr>
                          <th rowspan="2" style="vertical-align: middle;">ODP</th>
                          <th rowspan="2" style="vertical-align: middle;">Valid Taging</th>
                          <th rowspan="2" style="vertical-align: middle;">Latitude</th>
                          <th rowspan="2" style="vertical-align: middle;">Longitude</th>
                          <th rowspan="2" style="vertical-align: middle;">Label</th>
                          <th rowspan="2" style="vertical-align: middle;">Kesalahan</th>
                          <th rowspan="2" style="vertical-align: middle;">Availability</th>
                          <th rowspan="2" style="vertical-align: middle;">Bangunan Berpenghuni</th>
                          <th colspan="8" style="text-align: center;">Segmen</th>
                          <th rowspan="2" style="vertical-align: middle;">Kompetitor</th>
                          <th rowspan="2" style="vertical-align: middle;">Keterangan_Tambahan</th>
                        </tr>
                        <tr>
                          <th>Perum_<_500JT</th>
                          <th>Perum_500JT_sd_1M</th>
                          <th>Perum_>_1M</th>
                          <th>Perkampungan</th>
                          <th>Ruko</th>
                          <th>Kantor_Kecil</th>
                          <th>Kantor_Besar</th>
                          <th>PT</th>
                        </tr>
                      </thead>
                      <tbody id="detail_kluster">

                      </tbody>
                    </table>
                    
                  </div><!-- /.box -->

                      <div class="box-footer" id="tombol" hidden>
                        <div class="pull-right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                
                <script type="text/javascript">  
                  $(document).ready(function()
                  {  
                     $("#namaKluster").change(function(){
                        $("#tabel").show();
                     });

                     $("#namaKluster").change(function(){
                        $("#tombol").show();
                     });

                     $("#namaKluster").change(function()
                     {  
                     /*dropdown post *///  
                       $.ajax(
                       {  
                          url:"<?php echo base_url();?>Survey/showData",  
                          data:
                          {
                            id:  
                            $(this).val(),

                          },  
                          type: "POST",  
                          dataType  : 'json',
                          success:function(data)
                          {  
                            //data = hasil dari ajax
                            $("#detail_kluster").html("");  
                            console.log(data); //liat struktur data nya pake ini
                            for(var i=0;i<data.odp.length;i++)
                            {
                              console.log('masuk for');
                              append = "";
                              append += "<tr>";
                              append += "<input type='hidden' name='id_odp[]' value='"+data.odp[i].id_odp+"'/>";
                              append += "<td>"+data.odp[i].nama_odp+"</td>";
                              append += "<td>";
                              append += "<input type='radio' id='valid_tag' name='valid_tag' class='flat-red' value='Ya'/>";
                              append += "<input type='hidden' id='valid_tag' name='valid_tag' value='Tidak'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='text' id='latitude' name='latitude' class='form-control'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='text' id='longitude'  name='longitude' class='form-control'>";
                              append += "</td>"
                              append += "<td>";
                              append += "<input type='radio' id='label' name='label' class='flat-red' value='Ada'/>";
                              append += "<input type='hidden' id='label' name='label' value='Tidak Ada'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<select class='form-control'>";
                              for(var j=0; j<data.error.length; j++)
                              {
                              append += "<option id='id_error' name='id_error' value='"+data.error[j].id_error+"'>"+data.error[j].nama_error+"</option>";
                              
                              }
                              append += "</select>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='text' id='availability'  name='availability' class='form-control'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='text' id='bangunan'  name='bangunan' class='form-control'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='kurang_dari_500jt' name='kurang_dari_500jt' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='kurang_dari_500jt' name='kurang_dari_500jt' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='kurang_dari_500jt' name='kurang_dari_500jt' class='flat-red' value='1'/>"
                              append += "<input type='hidden' id='kurang_dari_500jt' name='kurang_dari_500jt' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='kurang_dari_500jt' name='kurang_dari_500jt' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='kurang_dari_500jt' name='kurang_dari_500jt' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='perkampungan' name='perkampungan' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='perkampungan' name='perkampungan' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='ruko' name='ruko' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='ruko' name='ruko' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='kantor_besar' name='kantor_besar' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='kantor_besar' name='kantor_besar' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='kantor_kecil' name='kantor_kecil' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='kantor_kecil' name='kantor_kecil' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='perguruan_tinggi' name='perguruan_tinggi' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='perguruan_tinggi' name='perguruan_tinggi' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<select class='form-control'>";
                              for(var k=0; k<data.kompetitor.length; k++)
                              {
                              append += "<option id='id_kompetitor' name='id_kompetitor' value='"+data.kompetitor[k].id_kompetitor+"'>"+data.kompetitor[k].nama_kompetitor+"</option>";
                              
                              }
                              append += "</select>";
                              append += "</td>";
                              append += "<td>";
                              append += "<textarea id='keterangan' name='keterangan' rows='2'/>";
                              append += "</td>";
                              append += "</tr>";
                              $("#detail_kluster").append(append);  
                            }

                          }  
                        });  
                      });  
                  });  
         </script>
         
         <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js"></script>
                  
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
