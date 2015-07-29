<div class='comment' id="post_comment_div">
    <div class='comment-avatar'>
    	<img alt='' src="uploads/profilePictures/<?= $_SESSION['username'] ?>.jpg" style='width: 44px; height: 44px;' class='avatar'>
    </div>
    <div class='comment-meta' style='margin-left: -20px;'>
    	<!-- comment to activity post form -->
        <form class='form-horizontal' style='margin-top: 3px;' id="post_comment_form" onsubmit="return (validatePostComment(<?= $activity->getId() ?>));">
          	<input type='text' class='form-control input-lg' id='comment_<?= $activity->getId() ?>' placeholder='Share your views...'>
        </form>
      	<!-- comment to activity post form ends -->
    </div>
</div>