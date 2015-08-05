<?php
    if (isset($this-> userId)) { ?>

        <div class='comment' id="project_comment_div">
            <div class='comment-avatar'>
            	<img alt='' src="uploads/profilePictures/<?= $_SESSION['username'] ?>.jpg" style='width: 44px; height: 44px;' class='avatar'>
            </div>
            <div class='comment-meta' style='margin-left: -20px;'>
            	<!-- comment to activity post form -->
                <form class='form-horizontal' style='margin-top: 3px;' id="project_comment_form" onsubmit="return (validatePostProjectComment(<?= $project->getId() ?>));">
                  	<input type='text' class='form-control input-lg' id='project_comment_<?= $project->getId() ?>' placeholder='Share your views...'>
                </form>
              	<!-- comment to activity post form ends -->
            </div>
        </div>
<?php } else { ?>
        <div class='comment' id="project_comment_div">
            <div class='comment-avatar'>
                <img alt='' src="<?= $this->baseUrl ?>static/img/collap.jpg" style='width: 44px; height: 44px;' class='avatar'>
            </div>
            <div class='comment-meta' style='margin-left: -20px;'>
                <!-- comment to activity post form -->
                <form action="<?= $this -> baseUrl ?>" class='form-horizontal' style='margin-top: 3px;'>
                    <input type='text' class='form-control input-lg' placeholder='Share your views...'>
                </form>
                <!-- comment to activity post form ends -->
            </div>
        </div>
<?php } ?>