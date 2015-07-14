          
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url() ?>access"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#">Survey ODP</a></li>
              <li class="active">Input Hasil Survey</li>
            </ol>
          
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
                          <th rowspan="2" style="vertical-align: middle;">Optical_Distribution_Point</th>
                          <th rowspan="2" style="vertical-align: middle;">Valid_Taging</th>
                          <th rowspan="2" style="vertical-align: middle;">Latitude</th>
                          <th rowspan="2" style="vertical-align: middle;">Longitude</th>
                          <th rowspan="2" style="vertical-align: middle;">Label_ODP</th>
                          <th rowspan="2" style="vertical-align: middle;">Kesalahan</th>
                          <th rowspan="2" style="vertical-align: middle;">Availability</th>
                          <th rowspan="2" style="vertical-align: middle;">Bangunan Berpenghuni</th>
                          <th colspan="8" style="text-align: center;">Segmen</th>
                          <th rowspan="2" style="vertical-align: middle;">Kompetitor</th>
                          <th rowspan="2" style="vertical-align: middle;">Keterangan_Tambahan</th>
                        </tr>
                        <tr>
                          <th><_500JT</th>
                          <th>500JT_sd_1M</th>
                          <th>>_1M</th>
                          <th>Perkampungan</th>
                          <th>Ruko</th>
                          <th>Kantor_Kecil</th>
                          <th>Kantor_Besar</th>
                          <th>PT</th>
                        </tr>
                      </thead>
                      <tbody id="detail_kluster">

                      </tbody>
                      <tfoot>
                        <tr>
                          <th rowspan="2" style="vertical-align: middle;">Optical_Distribution_Point</th>
                          <th rowspan="2" style="vertical-align: middle;">Valid_Taging</th>
                          <th rowspan="2" style="vertical-align: middle;">Latitude</th>
                          <th rowspan="2" style="vertical-align: middle;">Longitude</th>
                          <th rowspan="2" style="vertical-align: middle;">Label_ODP</th>
                          <th rowspan="2" style="vertical-align: middle;">Kesalahan</th>
                          <th rowspan="2" style="vertical-align: middle;">Availability</th>
                          <th rowspan="2" style="vertical-align: middle;">Bangunan Berpenghuni</th>
                          <th><_500JT</th>
                          <th>500JT_sd_1M</th>
                          <th>>_1M</th>
                          <th>Perkampungan</th>
                          <th>Ruko</th>
                          <th>Kantor_Kecil</th>
                          <th>Kantor_Besar</th>
                          <th>PT</th>
                          <th rowspan="2" style="vertical-align: middle;">Kompetitor</th>
                          <th rowspan="2" style="vertical-align: middle;">Keterangan_Tambahan</th>
                        </tr>
                        <tr>
                          <th colspan="8" style="text-align: center;">Segmen</th>
                          
                        </tr>
                      </tfoot>
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

                     $('#label').each(function(){
                      $.uniform.update();
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
                              append += "<input type='hidden' name='id_odp[]-"+i+"' value='"+data.odp[i].id_odp+"'/>";
                              append += "<td>"+data.odp[i].nama_odp+"</td>";
                              append += "<td>";
                              append += "<input type='radio' id='valid_tag-"+i+"' name='valid_tag[]-"+i+"' class='flat-red' value='Ya' checked='cheked'/>Ya &nbsp;";
                              append += "<input type='radio' id='valid_tag-"+i+"' name='valid_tag[]-"+i+"' value='Tidak'>Tidak";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='text' id='latitude-"+i+"' name='latitude[]-"+i+"' class='form-control'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='text' id='longitude-"+i+"'  name='longitude[]-"+i+"' class='form-control'>";
                              append += "</td>"
                              append += "<td>";
                              append += "<input type='radio' id='label-"+i+"' name='label[]-"+i+"' class='flat-red' value='Ada' checked/>Ada <br>";
                              append += "<input type='radio' id='label-"+i+"' name='label[]-"+i+"' value='Tidak  &nbsp;Ada'>Tidak";
                              append += "</td>";
                              append += "<td>";
                              append += "<select class='form-control' name='id_error[]-"+i+"'>";
                              for(var j=0; j<data.error.length; j++)
                              {
                              append += "<option id='id_error' value='"+data.error[j].id_error+"'>"+data.error[j].nama_error+"</option>";
                              
                              }
                              append += "</select>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='text' id='availability-"+i+"'  name='availability[]-"+i+"' class='form-control'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='text' id='bangunan-"+i+"'  name='bangunan[]-"+i+"' class='form-control'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='kurang_dari_500jt-"+i+"' name='kurang_dari_500jt[]-"+i+"' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='kurang_dari_500jt-"+i+"' name='kurang_dari_500jt[]-"+i+"' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='antara_500jt_sd_1m-"+i+"' name='antara_500jt_sd_1m[]-"+i+"' class='flat-red' value='1'/>"
                              append += "<input type='hidden' id='antara_500jt_sd_1m-"+i+"' name='antara_500jt_sd_1m[]-"+i+"' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='lebih_dari_1m-"+i+"' name='lebih_dari_1m[]-"+i+"' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='lebih_dari_1m-"+i+"' name='lebih_dari_1m[]-"+i+"' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='perkampungan-"+i+"' name='perkampungan[]-"+i+"' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='perkampungan-"+i+"' name='perkampungan[]-"+i+"' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='ruko-"+i+"' name='ruko[]-"+i+"' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='ruko-"+i+"' name='ruko[]-"+i+"' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='kantor_besar-"+i+"' name='kantor_besar[]-"+i+"' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='kantor_besar-"+i+"' name='kantor_besar[]-"+i+"' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='kantor_kecil-"+i+"' name='kantor_kecil[]-"+i+"' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='kantor_kecil-"+i+"' name='kantor_kecil[]-"+i+"' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<input type='checkbox' id='perguruan_tinggi-"+i+"' name='perguruan_tinggi[]-"+i+"' class='flat-red' value='1'/>";
                              append += "<input type='hidden' id='perguruan_tinggi-"+i+"' name='perguruan_tinggi[]-"+i+"' value='0'>";
                              append += "</td>";
                              append += "<td>";
                              append += "<select class='form-control' name='id_kompetitor[]-"+i+"'>";
                              for(var k=0; k<data.kompetitor.length; k++)
                              {
                              append += "<option id='id_kompetitor'  value='"+data.kompetitor[k].id_kompetitor+"'>"+data.kompetitor[k].nama_kompetitor+"</option>";
                              
                              }
                              append += "</select>";
                              append += "</td>";
                              append += "<td>";
                              append += "<textarea id='keterangan-"+i+"' name='keterangan[]-"+i+"' rows='2'/>";
                              append += "</td>";
                              append += "</tr>";
                              $("#detail_kluster").append(append);  
                            }
                            $('#label').each(function(){
                              console.log('sad');
                            });
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
