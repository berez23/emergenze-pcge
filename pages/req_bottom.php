<?php 

?>

</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    
    
    <!-- Bootstrap Plugins -->
    <script src="../vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="../vendor/bootstrap-table/dist/bootstrap-table.min.js"></script>
	 <script src="../vendor/bootstrap-table/dist/extensions/export/bootstrap-table-export.js" ></script>
	 <script src="../vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>
	 
	 
    <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>

	<!-- Leaflet JavaScript -->
	<script src="../vendor/leaflet/leaflet.js"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>


    <!-- Morris Charts JavaScript -->
    <!--script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script-->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    <!-- Library for FORM persistency http://sisyphus-js.herokuapp.com/-->
	<!--script src="../vendor/sisyphus/sisyphus.min.js"></script-->

	<!--script type="text/javascript">
	// Here we'll persist the form's data into localStorage on
	// every keystroke
	$( function() {
	//$( "#basic_form" ).sisyphus();
	// or you can persist all forms data at one command
	 $( "form" ).sisyphus();
	} );

</script-->


<script type="text/javascript">

//**************************************************************
//Automatic refresh page in case of inactivity 

  /*var time = new Date().getTime();
  //$(document.body).bind("mousemove keypress", function(e) {
  $(document.body).bind("click keypress wheel", function(e) {
  		alert('Timer aggiornato');
      time = new Date().getTime();
  });

  function refresh() {
      if(new Date().getTime() - time >= 60000) 
          window.location.reload(true);
      else 
          setTimeout(refresh, 10000);
  }

  setTimeout(refresh, 10000);*/
  
 
//funge, ma sembra mandare in crisi il server... 
 
/*  var time = new Date().getTime();
	$(document.body).bind("click keypress wheel", function () {
		  //alert('Timer aggiornato');
    		time = new Date().getTime();
	});

setInterval(function() {
    if (new Date().getTime() - time >= 300000) {
        window.location.reload(true);
    }
}, 1000);*/
  
  
</script>





<?php
?>