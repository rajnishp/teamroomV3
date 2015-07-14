  <?php require_once 'views/source/actionDropdown.php'; ?>
  <?php require_once 'views/source/postForms.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Homepage &middot; Welcome to Collap</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php require_once 'views/header/header.php'; ?>

</head>

  <body>

    <div id="container" class="effect mainnav-lg">
        
      <?php require_once 'views/navbar/main_navbar.php'; ?>


      <div class="boxed">


        <div id="content-container">

          <!--   <hr class="spacer-sm"> -->
            
            <div class="row" style="margin-top: 20px;">

              <div class="col-sm-12 col-md-8 col-md-offset-1">

                <h3 class="title">Post to Collap</h3>
              <!-- Post to collap starts -->

                <div class="share-widget clearfix">
                  
                  <form id="post_to_project" class="form-horizontal" action="#" method="post" onsubmit="return selectType()">

                    <div class="share-widget">
                      <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <br />

                    <textarea class="form-control share-widget-textarea" name = "description" rows="3" placeholder="Share what you've been up to..." tabindex="1">
                      
                    </textarea>

                    <div class="share-widget-actions">
                      <div class="share-widget-types pull-left">
                        
                        <div class="col-md-6" style="margin-top: 9px;">
                          <label class="form-radio form-normal active form-inline">
                            <input type="radio" checked="" name="activity" value="Challenge"> Challenge 
                          </label>

                          <label class="form-radio form-normal">
                            <input type="radio" name="activity" value="Article"> Article 
                          </label>
                        
                          <label class="form-radio form-normal">
                            <input type="radio" name="activity" value="Idea"> Idea
                          </label>
                        </div>
                        
                        <div class="col-md-6">
                          <input type="file" name="file" class="btn btn-default btn-file pull-right">
                        </div>
                     
                      </div>

                      <div class="pull-right">
                        <a class="btn btn-primary btn-labeled fa fa-send fa-lg" tabindex="2">Post</a>
                      </div>
                    </div> <!-- /.share-widget-actions -->
                  
                  </form>
                
                </div> <!-- /.share-widget -->


              <!-- /.Activities-block -->
                <div class="activities-start">
                
                  <div class="post-title">
                      <h3>
                        Activities
                      </h3>
                  </div> <!-- /.heading-block -->
                  <hr>            
                  <hr class="spacer-sm">


                  <div class="activity-1">

                    <?php foreach ($top10Activities as $activity) { ?>

                    <div class="post">
                      <div class="post-aside" style="padding-top: 28px;">
                        <div class="post-date">
                          <?php $data = date_parse($activity->getCreationTime()); ?>
                          <span class="post-date-day"><?= $data["day"] ?></span>
                          <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                          <span class="post-date-year"><?= $data["year"] ?></span>
                        </div>
                      </div> <!-- /.post-aside -->
                    
                      <div class="post-main">
                        <h4 class="post-title"><?= $activity->getRefinedTitle() ?></h4>
                        <?php dropDown_comment(8, 7, 9); ?>
                        <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                          
                      
                        <div class="post-content">
                          <p> 
                            <?= $activity->getRefinedStmt() ?>
                          </p>
                        </div>
                      </div>
                      <hr>
                      <hr class="spacer-sm">
                    </div>

                    <ol class="comment-list">
                      <li></li>
                      <li>
                        <div class="comment">

                          <div class="comment-avatar">
                            <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" style="width: 44px; height: 44px;" class="avatar">
                          </div> <!-- /.comment-avatar -->

                          <div class="comment-meta">
                          <p> <?= "The Sample Comment" ?> </p>
                          </div>
                        </div>
                      </li>
                      
                      <li>

                        <?php 
                          $img_url = "$baseUrl"."/static/imgs/rajnish.jpg";
                          postComment( $img_url , 'dashboard/article/comment', 'comment_to_article' , 'comment_article');
                        ?>
                      </li>
                    
                    </ol>

                    
                    <?php } ?>
                    
                    
                  </div>
                </div>
              </div>
            </div>
        
        <?php require_once 'views/sidebar/sidebar_button.php'; ?>
        <?php require_once 'views/footer/footer.php'; ?>
        
  </body>
</html>