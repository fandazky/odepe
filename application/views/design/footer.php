      <footer class="main-footer no-print">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title" id="myModalLabel">Anggota Kerja Praktik<br>Teknik Informatika ITS<br>2015</h4></center>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-6">
                    <p style="text-align:center;">
                      <img src="<?php echo base_url() ?>assets/dist/img/iqbal.jpg" alt="User Image" style="border-radius:50%;max-width:50%;height:auto;"/>
                      <a class="users-list-name" href="#">Muhammad Iqbal Tanjung</a>
                      <span class="users-list-date">5112100069</span>
                      <span class="users-list-date"><a href="mailto:m.iqbaltanjung@gmail.com" target="_blank">m.iqbaltanjung@gmail.com</a></span>
                    </p>

                    <p style="text-align:center;">
                      <img src="<?php echo base_url() ?>assets/dist/img/fandy.jpg" alt="User Image" style="border-radius:50%;max-width:50%;height:auto;"/>
                      <a class="users-list-name" href="#">Fandy Ahmad</a>
                      <span class="users-list-date">5112100047</span>
                      <span class="users-list-date"><a href="mailto:fandazky@gmail.com" target="_blank">fandazky@gmail.com</a></span>            
                    </p>
                  </div>

                  <div class="col-xs-6">

                    <p style="text-align:center;">
                      <img src="<?php echo base_url() ?>assets/dist/img/rina.jpg" alt="User Image" style="border-radius:50%;max-width:50%;height:auto;"/>
                      <a class="users-list-name" href="#">Bima Nisrina Madjid</a>
                      <span class="users-list-date">5112100019</span>
                      <span class="users-list-date"><a href="mailto:nisrinabia@gmail.com" target="_blank">nisrinabia@gmail.com</a></span>
                    </p>

                    <p style="text-align:center;">
                      <img src="<?php echo base_url() ?>assets/dist/img/shoffi.jpg" alt="User Image" style="border-radius:50%;max-width:50%;height:auto;"/>
                      <a class="users-list-name" href="#">Shoffi Izza Sabilla</a>
                      <span class="users-list-date">5112100132</span>
                      <span class="users-list-date"><a href="mailto:shoffi.izza@gmail.com" target="_blank">shoffi.izza@gmail.com</a></span>
                    </p>
                  </div>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              </div> -->
              </div>
            </div>
          </div>
        </div><!-- .Modal -->

        <strong>Copyright &copy; 2015 <a href="#" data-toggle="modal" data-target="#myModal">Kerja Praktik Teknik Informatika ITS</a>.</strong> All rights reserved.
      </footer>
    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url() ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url() ?>assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?php echo base_url() ?>assets/dist/js/demo.js" type="text/javascript"></script> -->

    <!-- InputMask -->
    <script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url() ?>assets/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url() ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
