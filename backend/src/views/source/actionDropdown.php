<?php
	function dropDown_comment($commentId, $userId, $ownerId) {
	    echo  "<div class='btn-group pull-right'>
                <button class='btn btn-default dropdown-toggle dropdown-toggle-icon' data-toggle='dropdown' type='button'>
					<i class='dropdown-caret fa fa-caret-down'></i>
				</button>
                <ul class='dropdown-menu'>";
            if($ownerId == $userId) {
                echo "<li><a class='btn-link' href='#' onclick='delcomment(\"".$commentId."\", 1);'><strong>Delete</strong></a></li>";
            } 
            else {
               echo "<li><a class='btn-link' href='#' onclick='spem(\"".$commentId."\", 6);'>Report Spam</a></li>";
            }
        echo "</ul>
        </div>";
	}
?>