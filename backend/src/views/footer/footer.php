		
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Core JS -->
<!--Committed due to navbar drpdown not working (rajnish)	
		<script src="<?= $baseUrl ?>static/bower_components/jquery/dist/jquery.js"></script>
		<script src="<?= $baseUrl ?>static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<script src="<?= $baseUrl ?>static/bower_components/slimscroll/jquery.slimscroll.min.js"></script>
-->

		<!-- App JS -->
		<script src="<?= $baseUrl ?>static/js/mvpready-admin.js"></script>
	
		<!--JAVASCRIPT-->
		<!--=================================================-->

		

	<!--JAVASCRIPT-->
	<!--=================================================-->

	<!--jQuery [ REQUIRED ]-->
	<script src="<?= $baseUrl ?>static/sidebar/js/jquery-2.1.1.min.js"></script>


	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?= $baseUrl ?>static/sidebar/js/bootstrap.min.js"></script>


	
	
	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="<?= $baseUrl ?>static/sidebar/js/nifty.min.js"></script>


	<!--Switchery [ Required ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/switchery/switchery.min.js"></script>


	<!--Bootstrap Select [ Required ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-select/bootstrap-select.min.js"></script>


	<!--Bootstrap Select [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-select/bootstrap-select.min.js"></script>


	<!--Bootstrap Validator [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>


	<!--Bootstrap Tags Input [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>


	<!--Bootstrap Timepicker [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>


	<!--Bootstrap Datepicker [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>


	<!--Demo script [ DEMONSTRATION ]-->
	<script src="<?= $baseUrl ?>static/sidebar/js/demo/nifty-demo.min.js"></script>
	<script src="<?= $baseUrl ?>static/sidebar/js/demo/layouts.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    $('img').each(function(){
    	if($(this).attr('src').substring(0,4) != "http")
      		$(this).attr('src','http://collap.com/'+$(this).attr('src'));
    });
 });
</script>


	</body>
</html>