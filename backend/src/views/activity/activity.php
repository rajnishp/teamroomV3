<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Collap &middot; Activity page</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include_once 'views/header/header.php'; ?>

</head>

<body>

  <div id="container" class="effect mainnav-lg">
        
    <?php require_once 'views/navbar/main_navbar.php'; ?>


    <div class="boxed">

      <div id="content-container">


        <div class="row col-md-offset-1 col-sm-offset-1 col-lg-offset-1 col-xs-offset-1">

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-10 ">

            <div class="posts">

              <div class="post">

                <div class="post-aside" style="padding-top: 28px;">
                  <div class="post-date">
                    <?php $data = date_parse($activity->getCreationTime()); ?>
                    <span class="post-date-day"><?= $data["day"] ?></span>
                    <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                    <span class="post-date-year"><?= $data["year"] ?></span>
                  </div>

                  <a href="#comments" class="post-comment">
                    4
                  </a>
                </div> <!-- /.post-aside -->

                <div class="post-main">
                  <h3 class="post-title"><a href="#"><?= $activity->getRefinedTitle() ?></a></h3>
                  <h4 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h4>
                  <?= $activity->getRefinedStmt() ?>
                  
                  <!-- <div class="post-content"> -->

                  <!-- </div> --> <!-- /.post-content -->

                </div> <!-- /.post-main -->

              </div> <!-- /.post --> 

            </div> <!-- /.posts -->

            <hr class="spacer-sm">

            <a id="comments"></a>
            <?php if($comments) {?>
            <div class="heading-block">
              <h3>Comments</h3>
            </div>
            <?php } ?>

            <ol class="comment-list">
            <?php foreach ($comments as $comment) { ?>
              
              <li>
                <div class="comment">

                  <div class="comment-avatar">
                    <img alt="" src="uploads/profilePictures/<?= $comment->getUsername() ?>.jpg" class="avatar">
                  </div> <!-- /.comment-avatar -->

                  <div class="comment-meta">

                    <span class="comment-author">
                      <a href="javascript:;" class="url"><?= ucfirst($comment->getFirstName()) ?> <?= ucfirst($comment->getLastName()) ?></a>
                    </span>

                    <a href="javascript:;" class="comment-timestamp">
                      <?= $comment->getCreationTime() ?>
                    </a>

                  </div> <!-- /.comment-meta -->

                  <div class="comment-body">
                    <p><?= $comment->getStmt() ?></p>
                  </div> <!-- /.comment-body -->

                </div> <!-- /.comment -->
              </li>

            <?php } ?>
            </ol>

            <hr class="spacer-md">

            <div class="heading-block">
              <h3>Post a Comment</h3>
            </div>

            <form class="form form-horizontal">
              <div class="form-group">
                <div class="col-md-5 col-sm-12">
                  <label>Name: <span>*</span></label>
                  <input class="form-control" id="name" name="name" type="text" value="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-5 col-sm-12">
                  <label>Email: <span>*</span></label>
                  <input class="form-control" type="email" id="email" name="email" value="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8 col-sm-12">
                  <label>Message: <span>*</span></label>
                  <textarea class="form-control" id="text" name="text" rows="6" cols="40"></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8 col-sm-12">
                  <button class="btn btn-primary" type="submit">Submit Comment</button>
                </div>
              </div>

             
            </form>

          </div> <!-- /.col -->



          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">

            <hr class="visible-xs">

            <hr class="spacer-sm">
            <hr class="spacer-xs">

            <h4>Most Popular Posts</h4>

            <ul class="blog-popular-posts">
              <?php foreach ($popPosts as $popPost) { ?>
              <li>
                <div class="recent-post-thumbnail">
                  <a href="<?= $baseUrl ?>activity/<?= $popPost->getId() ?>">
                    <img width="60" height="60" src="<?= $popPost->getImage() ?>" alt="">
                  </a>
                </div> <!-- /.recent-post-thumbnail -->

                <div class="recent-post-title">
                  <h4>
                    <a href="<?= $baseUrl ?>activity/<?= $popPost->getId() ?>"> 
                      <?= $popPost->getRefinedTitle() ?>
                    </a>
                  </h4>

                  <span class="recent-post-meta">
                    
                  </span> <!-- /.recent-post-meta -->
                </div> <!-- /.recent-post-title -->

              </li>

              <?php } ?>
            </ul>



            <hr class="spacer-sm">
            <hr class="spacer-xs">

            <h4>Recent Posts</h4>

            <ul class="fa-ul blog-ul">
              <?php foreach ($recPosts as $recPost) { ?>
              <li>
                <i class="fa-li fa fa-chevron-right"></i> 
                <a href="<?= $baseUrl ?>activity/<?= $recPost->getId() ?>">
                  <?= $recPost->getRefinedTitle() ?>
                </a>
              </li>
              <?php } ?>
            </ul>



            <hr class="spacer-sm">
            <hr class="spacer-xs">
            
            <h4>Most Popular Projects</h4>

            <ul class="fa-ul blog-ul">
              <?php foreach ($popProjects as $project) { ?>

              <li>
                  <i class="fa-li fa fa-chevron-right"></i> 
                  <a href="<?= $baseUrl ?>project/<?= $project->getId() ?>">
                    <?= $project->getProjectTitle() ?>
                  </a>
              </li>
              
              <?php } ?>
            </ul>

          </div> <!-- /.col -->

        </div> <!-- /.row -->
   
      </div> <!-- id Content-container div end -->
  
      <?php require_once 'views/sidebar/sidebar_button.php'; ?>

    
  
  <?php include_once 'views/footer/footer.php'; ?>


  </body>
</html>