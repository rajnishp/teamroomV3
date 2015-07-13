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
            
            <div class="row">

              <div class="col-sm-12 col-md-8 col-md-offset-1">


              <!-- Post to collap starts -->

                <div class="panel">
          
                  <!-- Panel heading -->
                  <div class="panel-heading">
                    <div class="panel-control">
                      <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#demo-tabs-box-1"><i class="fa fa question"></i> Activity</a></li>
                        <li><a data-toggle="tab" href="#demo-tabs-box-2"><i class="fa fa video"></i> Videos</a></li>
                        <li><a data-toggle="tab" href="#demo-tabs-box-3"><i class="fa fa link"></i> Share Link</a></li>
                      </ul>
                    </div>
                    <h3 class="panel-title">Post to Collap</h3>
                  </div>
            
                  <!-- Panel body -->
                  
                  <div class="panel-body">
                    <div class="tab-content">
                      <div id="demo-tabs-box-1" class="tab-pane fade in">

                        <form id="demo-bv-errorcnt" class="form-horizontal" action="#" method="post">

                        
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Title</label>
                            <div class="col-lg-7">
                              <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                          </div>
                          <div class="form-group pad-btm">
                            <label class="col-lg-3 control-label">Description</label>
                            <div class="col-lg-7">
                              <textarea class="form-control" name="description" rows="7" placeholder="Tell us your story..."></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">File input</label>
                            <div class="col-md-9">
                              <span class="pull-left btn btn-default btn-file">
                              Browse... <input type="file">
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Post Type</label>
                            <div class="col-md-9">
                      
                              <select class="selectpicker">
                                <option>Challenge</option>
                                <option>Article</option>
                                <option>Photo</option>
                                <option>Idea</option>
                              </select>
                              <!--===================================================-->
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-7 col-sm-offset-3">
                              <button class="btn btn-primary btn-labeled fa fa-send fa-lg" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    
                
          
                      <!--SHOWING ERRORS IN POPOVER-->
                      <!--===================================================-->
                      <div id="demo-tabs-box-2" class="tab-pane fade">
                        <form id="demo-bv-errorcnt" class="form-horizontal" action="#" method="post">
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Title</label>
                            <div class="col-lg-7">
                              <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Youtube URL</label>
                            <div class="col-lg-7">
                              <input type="text" class="form-control" name="website" placeholder="http://" />
                            </div>
                          </div>
                          <div class="form-group pad-btm">
                            <label class="col-lg-3 control-label">Description</label>
                            <div class="col-lg-7">
                              <textarea class="form-control" name="description" rows="7" placeholder="Tell us your story..."></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-7 col-sm-offset-3">
                              <button class="btn btn-primary btn-labeled fa fa-send fa-lg" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
          
                      <div id="demo-tabs-box-3" class="tab-pane fade">
                        <form id="demo-bv-errorcnt" class="form-horizontal" action="#" method="post">
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Share URL</label>
                            <div class="col-lg-7">
                              <input type="text" class="form-control" name="website" placeholder="http://" />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-7 col-sm-offset-3">
                              <button class="btn btn-primary btn-labeled fa fa-send fa-lg" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                     
                    </div>
                  </div>
                </div>

              <!-- Post to collap ends -->


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

                    <?php foreach ($top10Activities as $activities) { ?>

                    <div class="post">
                      <div class="post-aside" style="padding-top: 28px;">
                        <div class="post-date">
                          <?php $data = date_parse($activities->getCreationTime()); ?>
                          <span class="post-date-day"><?= $data["day"] ?></span>
                          <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                          <span class="post-date-year"><?= $data["year"] ?></span>
                        </div>
                      </div> <!-- /.post-aside -->
                    
                      <div class="post-main">
                        <h4 class="post-title"><?= $activities->getRefinedTitle() ?></h4>
                        <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($activities->getFirstName()) ?> <?= ucfirst($activities->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                          
                      
                        <div class="post-content">
                          <p> 
                            <?= $activities->getRefinedStmt() ?>
                          </p>
                        </div>
                      </div>
                      <hr>
                      <hr class="spacer-sm">
                    </div>
                    
                    <?php } ?>
                    
                    
                    <ol class="comment-list">
                      <li></li>
                      <li>
                        <div class="comment">

                          <div class="comment-avatar">
                            <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar">
                          </div> <!-- /.comment-avatar -->

                          <div class="comment-meta">

                          </div>
                        </div>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
        
        <?php require_once 'views/sidebar/sidebar_button.php'; ?>
        <?php require_once 'views/footer/footer.php'; ?>
        
  </body>
</html>