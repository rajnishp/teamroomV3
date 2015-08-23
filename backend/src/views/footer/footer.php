
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
<script type="text/javascript">
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
  function prependPostedActivity(divID, titleDiv, descriptionDiv) {
    var title = $('#'+titleDiv).val();
    var description = $('#'+descriptionDiv).val();
    appendHtml = '<div class="post">';
    appendHtml +=  '<div class="post-aside" style="padding-top: 28px;">';
    appendHtml +=    '<div class="post-date">';
    appendHtml +=      '<?php $data = date_parse(date("Y-m-d H:i:s")); ?>';
    appendHtml +=      '<span class="post-date-day"><?= $data["day"] ?></span>';
    appendHtml +=      '<span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>';
    appendHtml +=      '<span class="post-date-year"><?= $data["year"] ?></span>';
    appendHtml +=    '</div>';
    appendHtml +=  '</div>';
    appendHtml +=  '<div class="post-main">';
    appendHtml +=    '<h4 class="post-title"><a href="" target="_blank">'+ title + '</a></h4>';
    appendHtml +=      '<h5 class="post-meta">Published by <a href="<?= $this-> baseUrl ?>profile/<?= $this-> username ?>" target="_blank"><?= ucfirst($this -> firstName) ?> <?= ucfirst($this -> lastName) ?></a> in <a href="">India</a></h5>';
    appendHtml +=      '<div class="post-content">';
    appendHtml +=        '<p>'+description+'</p>';
    appendHtml +=      '</div>';
    appendHtml +=   '</div>';
    appendHtml += '</div><hr>';

    $('#'+divID).prepend(appendHtml);
  }


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
                  success("Post Activity", result);
                  prependPostedActivity('panel-cont', 'title', 'description');

                  $('#title').val('');
                  $('#description').val('');
                },
                 error: function(result){
                  console.log(result);
                  error("Post Activity", result);
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

          appendHtml = '<hr>';
          appendHtml +=   '<div class="comment-avatar">';
          appendHtml +=     '<img alt="" src="<?= $this->baseUrl ?>uploads/profilePictures/<?= $this->username ?>.jpg" style="width: 44px; height: 44px;" class="avatar">';
          appendHtml +=   '</div>';
          appendHtml +=   '<div class="comment-meta">';
          appendHtml +=     '<span class="comment-author">';
          appendHtml +=       '<a href="<?= $this -> baseUrl ?>profile/<?= $this->username ?>" target="_blank" class="url">';
          appendHtml +=          '<?= ucfirst( $this -> firstName ) ?> <?= ucfirst($this -> lastName) ?>';
          appendHtml +=       '</a>';
          appendHtml +=     '</span>';
          appendHtml +=     '<a href="" class="comment-timestamp">';
          appendHtml +=       '<?= date("F jS, Y",strtotime(date("Y-m-d H:i:s"))) ?>';
          appendHtml +=     '</a>';
          appendHtml +=   '</div>';
          appendHtml +=   '<div class="comment-body">';
          appendHtml +=     '<p> '+ comment +' </p>';
          appendHtml +=   '</div>';

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

      function postJoinProject(key){
        var dataString = "";
        dataString = "project_id=" + key;
        
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>project/"+key+"/joinProject",
          data: dataString,
          cache: false,
          success: function(result){
            $('#join_project_' + key).remove();
            $('#join_project_button_' + key).remove();
            success("Join Project",result);
          },
           error: function(result){
            error("Join Project",result);
          }
        });
        return false;
      }

      function validateJoinProject(key){
        if (key != undefined)
          postJoinProject(key);
        
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
    	console.log("error in src");
      $(this).attr('src', "<?= $this->baseUrl ?>static/img/collap.jpg");
	  $(this).unbind("error").attr("src", "<?= $this->baseUrl ?>static/img/collap.jpg");
	});

    
 });
  function lazyExecute(){
  	$('#nav-controller').click()
  }

  setTimeout(lazyExecute,5000);
</script>

<script type="text/javascript">
  function uploadProfilePic(){
            //var _progress = document.getElementById('_progress'); 
            if(src.files.length === 0){
              
              return false ;
            }
            else if (src.files['0'].size > 2015000) {
             
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
              data.append('file', src.files[0]);
              var request = new XMLHttpRequest();
              var responceTx = "";
              request.onreadystatechange = function(){
                if(request.readyState == 4){
                  responceTx = request.response;
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-check fa-lg",
                    title:"Profile Pic Change Successfully",
                    message:responceTx,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                }
              };
            }
            request.upload.addEventListener('progress', function(e){
              //_progress.style.width = Math.ceil(e.loaded/e.total) * 100 + '%';
            }, false);  
            request.open('POST', '<?= $baseUrl ?>fileUpload/profilePic');
            request.send(data);
          }

  function showImage() {
    var src = document.getElementById("src");
    var target = document.getElementById("target");
  var fr=new FileReader();
  // when image is loaded, set the src of the image where you want to display it
  fr.onload = function(e) { target.src = this.result; };
  src.addEventListener("change",function() {
    // fill fr with image data    
    fr.readAsDataURL(src.files[0]);
    uploadProfilePic();
  });
}
showImage();

</script>  


<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//loc.dpower4.com/piwik/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//loc.dpower4.com/piwik/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
