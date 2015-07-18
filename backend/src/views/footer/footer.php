		
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
<script>
	$(window).scroll(function(event) {
		if ($(window).scrollTop() == ($(document).height() - $(window).height())) {
			event.preventDefault();
			$('#panel-cont').append("<div class='loading'><center><img src='http://collap.com/img/loading.gif' /></center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>");
			var dataString = 'chal=6' ;
			var value = parseInt($("#viewchid").val()) ;
			$.ajax({
				type: "GET",
				url: "dashboard/activities/get_next",
				data: dataString,
				cache: false,
				success: function(result){
					var notice = result.split("<") ;
					if (notice['0'] == 'no data') {
						$('.loading').remove();
						var data = document.getElementById("appendloading") ;
						if(data == null) {
							$('#panel-cont').append("<div id='appendloading'><br/><br/><center style='font-size:24px;'> Whooo... You have read all Posts </center></div>");
						}
					}
					else {
						$('#panel-cont').append(result);
						$('.loading').remove();
						
					}
				}
			});
		}
	});
	 
	getallreminders() ; 
</script>

<script type="text/javascript">
  $( document ).ready(function() {
    $('img').each(function(){
    	if($(this).attr('src').substring(0,4) != "http")
      		$(this).attr('src','http://collap.com/'+$(this).attr('src'));
    });

    
 });
  function lazyExecute(){
  	$('#nav-controller').click()
  }

  setTimeout(lazyExecute,5000);
</script>


	</body>
</html>