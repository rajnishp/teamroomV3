<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Collap &middot; Profile Page</title>

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

        <div class="row">
          
          <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">

            
            <!--Profile Heading-->
            <!--===================================================-->
            <div class="panel">
              <div class="panel-bg-cover">
                <img class="img-responsive" src="<?= $baseUrl ?>static/imgs/kapitalia.jpg" class="post-img img-responsive" alt="Image">
              </div>
              <div class="panel-media" >
               
                <img src="<?= $baseUrl ?>static/imgs/rajnish.jpg" style="left: 43%;width: 120px;height: 120px;" class="panel-media-img img-circle img-border-light" alt="Profile Picture">
                
              </div>
              
            </div>
         
            
            <hr class="spacer-sm">            
            <div class="text-center">
              <h3><?= ucfirst($userProfile->getFirstName() )?> <?= ucfirst($userProfile->getLastName() )?> <br/>
                  (<?= ucfirst($userProfile->getRank() )?>)</h3>

              <h5 class="text-muted"><?= $userProfile->getWorkingOrgName() ?>, <?= $userProfile->getLivingTown() ?></h5>
              <h5 class="text-muted"><?= $userProfile->getAboutUser() ?></h5>
            </div>
            <hr>
            <hr class="spacer-sm">
            
            <div class="row text-center">
                
              <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3 col-lg-offset-4 col-md-offset-4">
                <h4><small>Projects</small></h4>
                <p class="semibold">4</p>
              </div>  

              <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">

                <h4><small>Followers</small></h4>          
                <p class="semibold">23</p>   
              </div>
              
              <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                <h4><small>Following</small></h4>               
                <p class="semibold">123</p>   
              </div>
              
              <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                <h4><small>Contact</small></h4>               
                <a href="../icon/facebook-square"><i class="fa fa-facebook-square"></i></a>
                <a href="../icon/twitter-square"><i class="fa fa-twitter-square"></i></a>
              </div>

            </div> <!-- /.row text center -->
            <hr class="spacer-sm">

            <div class="text-center">
              <p>
                <a href="javascript:;" class="btn btn-info">Follow</a> 
                &nbsp;
                <a href="javascript:;" class="btn btn-tertiary">Message</a>
              </p>
            </div>
          
          </div> <!-- /.row md 10-->
        
        </div>

        <div class="row">  

          <div class="col-md-7 col-sm-10 col-md-offset-1 col-sm-offset-1">
            <hr>
            <div class="post-title">
                <h4>
                  PROJECTS
                </h4>
            </div> <!-- /.heading-block -->
            
            <? foreach ($userMProjects as $project) { ?>
            <div class="post">
                <div class="post-aside" style="padding-top: 28px;">
                  <div class="post-date">
                    <?php $data = date_parse($project->getCreationTime()); ?>
                    <span class="post-date-day"><?= $data["day"] ?></span>
                    <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                    <span class="post-date-year"><?= $data["year"] ?></span>
                  </div>


              
                </div> <!-- /.post-aside -->
              <div class="post-main">
              <h4 class="post-title"><?= $project->getRefinedTitle() ?></h4>
              <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($project->getFirstName()) ?> <?= ucfirst($project->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                  
              
              <div class="post-content">
                <p> 
                  <?= $project->getRefinedStmt() ?>
                </p>
              </div>
              </div>
              <hr>
              <hr class="spacer-sm">
            </div>
            
            <? } ?>


          </div> <!-- /.row md 7-->



          <div class="col-md-3 col-sm-10 col-sm-offset-1">
            <hr>
            <div class="post-title">
                <h4>
                  Skill Sets
                </h4>
            </div> <!-- /.heading-block -->

            
            <div class="">
              <span class="btn btn-secondary btn-sm"> C </span>
              <span class="btn btn-secondary btn-sm"> Core Java </span>
              <span class="btn btn-secondary btn-sm"> PHP </span>
              <span class="btn btn-secondary btn-sm"> MySql </span>

            </div> <!-- /.list-group -->

            <!-- FORM VALIDATION ON ACCORDION -->
              <!--===================================================-->
               <div id="demo-accordion" class="panel-group accordion">
                  <div class="panel" style="box-shadow: 0px 0px 0px;">
          
                    <!-- Accordion title -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <button class="btn btn-primary" data-parent="#demo-accordion" data-toggle="collapse" href="#demo-acc-panel-1">
                          <i class="fa fa-plus"></i> Add More
                        </button>
                      </h4>
                    </div>
          
                    <!-- Accordion content -->
                    <div id="demo-acc-panel-1" class="panel-collapse collapse">
                      <div class="panel-body" style="padding-left: 1px;">
                        <form id="demo-bv-accordion" class="form-horizontal" action="#" method="post">
                          <input type="text" class="form-control" placeholder="Add a tag" value="Sport, Movie, Documents, Video" data-role="tagsinput">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--===================================================-->
              <!-- END FORM VALIDATION ON ACCORDION -->




            
            <div class="heading-block"></div>
            <div class="post-title">
              <h4>
                Work Experience
              </h4>
            </div> <!-- /.heading-block -->

            <div>
              <h5 class="">Dpower4 Pvt. Ltd.</h5>
              <p class="semibold">Software Engineer</p>          
              <p class="text-muted"> 2014 - Present </p>
            </div> <!-- /.list-group -->

           <div class="heading-block"></div>
            <div class="post-title">
              <h4>
                Education
              </h4>
            </div> <!-- /.heading-block -->

            <div>
              <h5 class="">PEC University of Technology</h5>
              <p class="semibold">M.Tech, CSE</p>          
              <p class="text-muted"> 2012 - 2014 </p>
            </div> <!-- /.list-group -->

            <div>
              <h5 class="">UIET MDU Rohtak</h5>
              <p class="semibold">B.Tech, CSE</p>          
              <p class="text-muted"> 2007 - 2011 </p>
            </div> <!-- /.list-group -->


          </div> <!-- /.row md 3-->
        </div> <!-- /.row -->

        <div class="row">

          <hr class="spacer-sm">
          <div class="col-md-7 col-sm-10 col-md-offset-1 col-sm-offset-1">

            <br class="visible-xs">

            <div class="heading-block">
              <h4>
                Activity Feed
              </h4>
            </div> <!-- /.heading-block -->

            <div class="share-widget clearfix">

              <textarea class="form-control share-widget-textarea" rows="3" placeholder="Share what you've been up to..." tabindex="1"></textarea>

              <div class="share-widget-actions">
                <div class="share-widget-types pull-left">
                  <a href="javascript:;" class="fa fa-picture-o ui-tooltip" title="Post an Image"><i></i></a>
                  <a href="javascript:;" class="fa fa-video-camera ui-tooltip" title="Upload a Video"><i></i></a>
                  <a href="javascript:;" class="fa fa-lightbulb-o ui-tooltip" title="Post an Idea"><i></i></a>
                  <a href="javascript:;" class="fa fa-question-circle ui-tooltip" title="Ask a Question"><i></i></a>
                </div>  

              <div class="pull-right">
                <a class="btn btn-primary btn-sm" tabindex="2">Post</a>
              </div>

              </div> <!-- /.share-widget-actions -->

            </div> <!-- /.share-widget -->

            <br><br>

            <div class="feed-item feed-item-idea">

              <div class="feed-icon bg-primary">
                <i class="fa fa-lightbulb-o"></i>
              </div> <!-- /.feed-icon -->

              <div class="feed-subject">
                <p><a href="javascript:;">Nikita Williams</a> shared an idea: <a href="javascript:;">Create an Awesome Idea</a></p>
              </div> <!-- /.feed-subject -->

              <div class="feed-content">
                <ul class="icons-list">
                  <li>
                    <i class="icon-li fa fa-quote-left"></i>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                  </li>
                </ul>
              </div> <!-- /.feed-content -->

              <div class="feed-actions">
                <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 123</a> 
                <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 29</a>

                <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 2 days ago</a>
              </div> <!-- /.feed-actions -->

            </div> <!-- /.feed-item -->


            <div class="feed-item feed-item-image">

              <div class="feed-icon bg-secondary">
                <i class="fa fa-picture-o"></i>
              </div> <!-- /.feed-icon -->

              <div class="feed-subject">
                <p><a href="javascript:;">Nikita Williams</a> posted the <strong>4 files</strong>: <a href="javascript:;">Annual Reports</a></p>
              </div> <!-- /.feed-subject -->

              <div class="feed-content">
                <div class="thumbnail" style="width: 375px">
                  <img src="./img/mockup.png" style="width: 100%;" alt="Gallery Image">
                </div> <!-- /.thumbnail -->
              </div> <!-- /.feed-content -->

              <div class="feed-actions">
                <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 123</a> 
                <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 29</a>

                <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 2 days ago</a>
              </div> <!-- /.feed-actions -->

            </div> <!-- /.feed-item -->


            <div class="feed-item feed-item-file">

              <div class="feed-icon bg-success">
                <i class="fa fa-cloud-upload"></i>
              </div> <!-- /.feed-icon -->

              <div class="feed-subject">
                <p><a href="javascript:;">Nikita Williams</a> posted the <strong>4 files</strong>: <a href="javascript:;">Annual Reports</a></p>
              </div> <!-- /.feed-subject -->

              <div class="feed-content">
                <ul class="icons-list">
                  <li>
                    <i class="icon-li fa fa-file-text-o"></i>
                    <a href="javascript:;">Annual Report 2007</a> - annual_report_2007.pdf
                  </li>

                  <li>
                    <i class="icon-li fa fa-file-text-o"></i>
                    <a href="javascript:;">Annual Report 2008</a> - annual_report_2007.pdf
                  </li>

                  <li>
                    <i class="icon-li fa fa-file-text-o"></i>
                    <a href="javascript:;">Annual Report 2009</a> - annual_report_2007.pdf
                  </li>

                  <li>
                    <i class="icon-li fa fa-file-text-o"></i>
                    <a href="javascript:;">Annual Report 2010</a> - annual_report_2007.pdf
                  </li>
                </ul>
              </div> <!-- /.feed-content -->

              <div class="feed-actions">
                <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 123</a> 
                <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 29</a>

                <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 2 days ago</a>
              </div> <!-- /.feed-actions -->

            </div> <!-- /.feed-item -->



            <div class="feed-item feed-item-bookmark">

              <div class="feed-icon bg-tertiary">
                <i class="fa fa-bookmark"></i>
              </div> <!-- /.feed-icon -->

              <div class="feed-subject">
                <p><a href="javascript:;">Nikita Williams</a> bookmarked a page on Delicious: <a href="javascript:;">Jumpstart Themes</a></p>
              </div> <!-- /.feed-subject -->

              <div class="feed-content">
              </div> <!-- /.feed-content -->

              <div class="feed-actions">
                <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 123</a> 
                <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 29</a>

                <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 2 days ago</a>
              </div> <!-- /.feed-actions -->

            </div> <!-- /.feed-item -->



            <div class="feed-item feed-item-question">

              <div class="feed-icon bg-secondary">
                <i class="fa fa-question"></i>
              </div> <!-- /.feed-icon -->

              <div class="feed-subject">
                <p><a href="javascript:;">Nikita Williams</a> posted the question: <a href="javascript:;">Who can I call to get a new parking pass for the Rowan Building?</a></p>
              </div> <!-- /.feed-subject -->

              <div class="feed-content">
                <ul class="icons-list">
                  <li>
                    <i class="icon-li fa fa-quote-left"></i>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                  </li>
                </ul>
              </div> <!-- /.feed-content -->

              <div class="feed-actions">
                <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 123</a> 
                <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 29</a>

                <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 2 days ago</a>
              </div> <!-- /.feed-actions -->

            </div> <!-- /.feed-item -->

            <br class="visible-xs">            
            <br class="visible-xs">
              
          </div> <!-- /.col md 7-->


          <div class="col-md-3 col-sm-10 col-sm-offset-1">

            <div class="heading-block">
              <h5>
                Social Stats
              </h5>
            </div> <!-- /.heading-block -->

            <div class="list-group">  

              <a href="javascript:;" class="list-group-item">
                  <h3 class="pull-right"><i class="fa fa-eye text-primary"></i></h3>
                  <h4 class="list-group-item-heading">38,847</h4>
                  <p class="list-group-item-text">Profile Views</p>                  
                </a>

              <a href="javascript:;" class="list-group-item">
                <h3 class="pull-right"><i class="fa fa-facebook-square  text-primary"></i></h3>
                <h4 class="list-group-item-heading">3,482</h4>
                <p class="list-group-item-text">Facebook Likes</p>
              </a>

              <a href="javascript:;" class="list-group-item">
                <h3 class="pull-right"><i class="fa fa-twitter-square  text-primary"></i></h3>
                <h4 class="list-group-item-heading">5,845</h4>
                <p class="list-group-item-text">Twitter Followers</p>
              </a>
            </div> <!-- /.list-group -->

            <br>

            <div class="heading-block">
              <h5>
                Project Activity
              </h5>
            </div> <!-- /.heading-block -->

            <div class="well">


              <ul class="icons-list text-md">

                <li>
                  <i class="icon-li fa fa-location-arrow"></i>

                  <strong>Rod</strong> uploaded 6 files. 
                  <br>
                  <small>about 4 hours ago</small>
                </li>

                <li>
                  <i class="icon-li fa fa-location-arrow"></i>

                  <strong>Rod</strong> followed the research interest: <a href="javascript:;">Open Access Books in Linguistics</a>. 
                  <br>
                  <small>about 23 hours ago</small>
                </li>

                <li>
                  <i class="icon-li fa fa-location-arrow"></i>

                  <strong>Rod</strong> added 51 papers. 
                  <br>
                  <small>2 days ago</small>
                </li>
              </ul>

            </div> <!-- /.well -->

          </div> <!-- /.col md 3-->

        </div> <!-- /.row -->

        <br><br>

      </div> <!-- /.content container -->

      <?php require_once 'views/sidebar/sidebar_button.php'; ?>

    </div> <!-- .container -->
  </div>

  <?php include_once 'views/footer/footer.php'; ?>


  </body>
</html>