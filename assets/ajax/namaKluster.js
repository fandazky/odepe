var db = '<?php echo base_url() ?>application/views/survey/input_survey.php';

$(document).ready(function() {
      $("#namaKluster").change(function() {
      $.getJSON( db, {
          type: "tampilKluster",
          kluster:$("#namaKluster").val(), 
          
           } ).done( function( result ) {
          // if(result.status){
          //   $('#btnImunisasi').button('disable'); 
          // }
          // else
          // {
          //   $('#btnImunisasi').button('enable'); 
          // }       
      });
    });
});