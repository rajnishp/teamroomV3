<?php

	function postComment($img_url, $action, $form_id, $input_id_name) {
		echo "
			    <div class='comment'>
		            <div class='comment-avatar'>
		            	<img alt='' src=$img_url style='width: 44px; height: 44px;' class='avatar'>
		            </div>
		            <div class='comment-meta' style='margin-left: -20px;'>
		            	<!-- comment to activity post form -->
		                <form action='".$action."' id='".$form_id."' class='form-horizontal' method='post' style='margin-top: 3px;'>
		                  	<input type='text' class='form-control input-lg' id='".$input_id_name."' name='".$input_id_name."' placeholder='Share your views...'>
		                </form>
		              	<!-- comment to activity post form ends -->
		            </div>
	            </div>";
	}
?>