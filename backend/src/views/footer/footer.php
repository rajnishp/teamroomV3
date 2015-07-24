		
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

  <!--Fast Click [ OPTIONAL ]-->
  <script src="<?= $baseUrl ?>static/sidebar/plugins/fast-click/fastclick.min.js"></script>
	
	
	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="<?= $baseUrl ?>static/sidebar/js/nifty.min.js"></script>


	<!--Switchery [ Required ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/switchery/switchery.min.js"></script>


	<!--Bootstrap Select [ Required ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-select/bootstrap-select.min.js"></script>


	<!--Bootstrap Validator [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>


  <!--Bootstrap Wizard [ OPTIONAL ]-->
  <script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

	<!--Bootstrap Tags Input [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>


	<!--Bootstrap Timepicker [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>


	<!--Bootstrap Datepicker [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>


	<!--Demo script [ DEMONSTRATION ]-->
	<script src="<?= $baseUrl ?>static/sidebar/js/demo/nifty-demo.min.js"></script>
	<script src="<?= $baseUrl ?>static/sidebar/js/demo/layouts.js"></script>

    <!--Form Wizard [ SAMPLE ]-->
  <script src="<?= $baseUrl ?>static/sidebar/js/demo/form-wizard.js"></script>


<script>
function addMorePost(url, dataString,addAt){

  $.ajax({
          type: "POST",
          url: window.location.href + url,
          data: dataString,
          cache: false,
          success: function(result){
            var notice = result.split("<") ;
            if (notice['0'] == 'no data') {
              $('.loading').remove();
              var data = document.getElementById("appendloading") ;
              if(data == null) {
                $(addAt).append("<div id='appendloading'><br/><br/><center style='font-size:24px;'> Whooo... You have read all Posts </center></div>");
              }
            }
            else {
              $(addAt).append(result);
              $('.loading').remove();
              console.log(last);
              
            }
          }
        });

}
  var lastPoject = 0;
  var lastIdea = 0;
  var last = 10;
  $(window).scroll(function(event) {
    
    
    if ($(window).scrollTop() == ($(document).height() - $(window).height())) {
      if($('#projectTab').attr('class') == "active"){
        event.preventDefault();
        var addAt = "#tabs-project";//tabs-idea
        var url = "/projects/get_next";

        $(addAt).append("<div class='loading'><center><img src='http://collap.com/img/loading.gif' /></center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>");
        var dataString = 'last=' + lastPoject ;
        lastPoject  = lastPoject + 5;
        addMorePost(url, dataString,addAt);        
        
      }
      else if($('#ideaTab').attr('class') == "active"){
        event.preventDefault();
        var addAt = "#tabs-idea";//tabs-idea
        var url = "/ideas/get_next";

        $(addAt).append("<div class='loading'><center><img src='http://collap.com/img/loading.gif' /></center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>");
        var dataString = 'last=' + lastIdea ;
        lastIdea  = lastIdea + 5;

        addMorePost(url, dataString,addAt);        
        
      } else{

      	event.preventDefault();
        var addAt = '#panel-cont';//tabs-idea
        var url = "/activities/get_next";

        $(addAt).append("<div class='loading'><center><img src='http://collap.com/img/loading.gif' /></center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>");
        var dataString = 'last=' + last ;
        last  = last + 5;

        addMorePost(url, dataString,addAt);

      }



    }
  });
   
   
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