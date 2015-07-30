
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Core JS -->
<!--Committed due to navbar drpdown not working (rajnish)	
		<script src="<?= $baseUrl ?>static/bower_components/jquery/dist/jquery.js"></script>
		<script src="<?= $baseUrl ?>static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<script src="<?= $baseUrl ?>static/bower_components/slimscroll/jquery.slimscroll.min.js"></script>
-->

	
		<!--JAVASCRIPT-->
		<!--=================================================-->

		

	<!--JAVASCRIPT-->
	<!--=================================================-->

	<!--jQuery [ REQUIRED ]-->
	<script src="<?= $baseUrl ?>static/sidebar/js/jquery-2.1.1.min.js"></script>

		<!-- App JS -->
		<!--<script src="<?= $baseUrl ?>static/js/mvpready-admin.js"></script>-->

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

  <!--Chosen [ OPTIONAL ]-->
  <script src="<?= $baseUrl ?>static/sidebar/plugins/chosen/chosen.jquery.min.js"></script>


	<!--Bootstrap Timepicker [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>


	<!--Bootstrap Datepicker [ OPTIONAL ]-->
	<script src="<?= $baseUrl ?>static/sidebar/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>


	<!--Demo script [ DEMONSTRATION ]-->
	<script src="<?= $baseUrl ?>static/sidebar/js/demo/nifty-demo.min.js"></script>
	<script src="<?= $baseUrl ?>static/sidebar/js/demo/layouts.js"></script>
	

  <!--Form Wizard [ SAMPLE ]-->
  <script src="<?= $baseUrl ?>static/sidebar/js/demo/form-wizard.js"></script>
  <script src="<?= $baseUrl ?>static/js/genericEmptyFieldValidator.js"></script>

  
    <!--Form Component [ SAMPLE ]-->
    <script src="<?= $baseUrl ?>static/sidebar/js/demo/form-component.js"></script>


<script type="text/javascript">
  function appendCloneToDiv(fields,result,appendToId, formId){
         clone = $(formId).clone();
         
         $.each(fields, function( index, value ) {
                      $('#'+value).attr("id", value +  "_" + result);
                    });
         $(formId).attr("id", formId + "_" + result );

                    clone.appendTo(appendToId);

                    $.each(fields, function( index, value ) {
                      $('#'+value).val("");
        });
      }
</script>


<script type="text/javascript">
	function success(title,message){
		$.niftyNoty({ 
        type:"success",
        icon:"fa fa-check fa-lg",
        title:title,
        message:message,
        focus: true,
        container:"floating",
        timer:4000
      });
	}

  function error(title,message){
    $.niftyNoty({ 
        type:"danger",
        icon:"fa fa-times fa-lg",
        title:title,
        message:message,
        focus: true,
        container:"floating",
        timer:4000
      });
  }
</script>
<script>
$('#demo-dp-range .input-daterange').datepicker({
		format: "MM dd, yyyy",
		todayBtn: "linked",
		autoclose: true,
		todayHighlight: true
	});

function addMorePost(url, dataString, addAt){

  $.ajax({
          type: "POST",
          url: "<?= $this->pageUrl ?>" + url,
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
     
        function postDBActivity(fields, responceTx){
          var imgTx = "";
          if(responceTx != undefined ){
            var res = responceTx.split(".");
            if ((res['1'] == "jpg") || (res['1'] == "jpeg") || (res['1'] == "png") || (res['1'] == "gif")){
                imgTx = "<img src=\""+responceTx+"\" style=\"max-width: 100%;\" onError=\"this.src=\"img/default.gif\"\" /><br/>";
              }
              else {
                imgTx = responceTx ;
              }
          }
          var dataString = "";
          
          if(imgTx == "" )
            dataString = "title=" + $('#'+fields[0]).val() + "&description=" + $('#'+fields[1]).val() + "&activity_type=" + $('input[name="activity"]:checked').val();
          else
            dataString = "title=" + $('#'+fields[0]).val() + "&description=" + imgTx +$('#'+fields[1]).val() + "&activity_type=" + $('input[name="activity"]:checked').val();
     		
     		if($('#project_id').val() != ""){
     			dataString += '&project_id=' + $('#project_id').val();	

     		}     
         $.ajax({
                type: "POST",
                url: "<?= $baseUrl ?>" + "dashboard/postActivity",
                data: dataString,
                cache: false,
                success: function(result){
                  $.niftyNoty({ 
                    type:"success",
                    icon:"fa fa-check fa-lg",
                    title:"Post Activity",
                    message:result,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                },
                 error: function(result){
                  console.log(result);
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-check fa-lg",
                    title:"Post Activity",
                    message:result.responseText,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                }
        
              });
        
        }

        function uploadFile(page,fields){
            //var _progress = document.getElementById('_progress'); 
            if(_file.files.length === 0){
              
              return false ;
            }
            else if (_file.files['0'].size > 2015000) {
             
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-check fa-lg",
                    title:"File Upload Error",
                    message:"File size is too large",
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
              
              return false ;
            } 
            else {
              var data = new FormData();
              data.append('file', _file.files[0]);
              var request = new XMLHttpRequest();
              var responceTx = "";
              request.onreadystatechange = function(){
                if(request.readyState == 4){
                  responceTx = request.response;
                  postDBActivity(fields, responceTx);
                }
              };
            }
            request.upload.addEventListener('progress', function(e){
              //_progress.style.width = Math.ceil(e.loaded/e.total) * 100 + '%';
            }, false);  
            request.open('POST', '<?= $baseUrl ?>fileUpload/'+page);
            request.send(data);
          }

          function validatePostActivity(from){
            fields = ["title","description"];
            if (genericEmptyFieldValidator(fields)) {
             if(_file.files.length != 0){
                uploadFile(from,fields);
              }
              else
              postDBActivity(fields);
            }
            return false;
          }
     </script>


      <script type="text/javascript">

      	function appendComment(key, commentDiv){
      		comment = $('#' + commentDiv +key).val();
      		$('#'+ commentDiv +key).val("");
      		appendHtml = '<div class="comment-avatar">';
          appendHtml += '<img alt="" src="<?= $baseUrl ?>uploads/profilePictures/<?= $this->username ?>.jpg" style="width: 44px; height: 44px;" class="avatar">';
          appendHtml += '</div>';
          
          appendHtml += '<div class="comment-meta">';
          appendHtml += '<p> '+ comment +' </p>';
          appendHtml += '</div>';

          $('#comment_box_'+key).append(appendHtml);
      	}

        function postComment(fields, key){
          var dataString = "";
          
          dataString = "comment=" + $('#'+fields[0]).val() + "&id=" + key ;
  
          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>" + "activity/postComment",
            data: dataString,
            cache: false,
            success: function(result){
              var message = "";
              if (key != undefined) {
                //appendCloneToDiv(fields,result, "#post_comment_div", "#post_comment_form");
                appendComment(key, 'comment_');
                message = "Added Successfully";
              }
              success("Activity Response",message);
            },
             error: function(result){
              error("Activity Response",result.responseText);
            }

          });

        }

        function validatePostComment(key){
         	console.log("Inside Validate comment",key);
          
          fields = ["comment_" + key];
          
          if(genericEmptyFieldValidator(fields)){

              postComment(fields, key  );

          }
          return false;
        }

      </script>

      <script type="text/javascript">

        function postProjectComment(fields, key){
          var dataString = "";
          
          dataString = "comment=" + $('#'+fields[0]).val() + "&id=" + key ;
          
          
          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>" + "project/postProjectComment",
            data: dataString,
            cache: false,
            success: function(result){
              var message = "";
              if (key != undefined) {
                //appendCloneToDiv(fields,result, "#post_comment_div", "#post_comment_form");
                appendComment(key, 'project_comment_');
                message = "Added Successfully";
              }
              success("Project Response",message);
            },
             error: function(result){
              error("Project Response",result.responseText);
            }

          });

        }

        function validatePostProjectComment(key){
          console.log("Inside Validate project comment",key);
          
          fields = ["project_comment_" + key];
          
          if(genericEmptyFieldValidator(fields)){

              postProjectComment(fields, key  );

          }
          return false;
        }

      </script>


<script type="text/javascript">
  $( document ).ready(function() {
    $('img').each(function(){
    	if($(this).attr('src').substring(0,4) != "http")
      		$(this).attr('src','<?= $baseUrl ?>'+$(this).attr('src'));
    });

    $("img").error(function () {
	  $(this).unbind("error").attr("src", "<?= $this->baseUrl ?>static/img/collap.jpg");
	});

    
 });
  function lazyExecute(){
  	$('#nav-controller').click()
  }

  setTimeout(lazyExecute,5000);
</script>



	</body>
</html>