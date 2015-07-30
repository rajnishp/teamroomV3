  <?php require_once 'views/source/actionDropdown.php'; ?>
  <?php require_once 'views/source/postForms.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title><?= $project->getRefinedTitle() ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <!-- for Google -->
  <meta name="description" content="<?= strip_tags($project->getRefinedStmt()) ?>" />
  <meta name="keywords" content="<?= strip_tags($project->getKeywords()) ?>" />
  <meta name="author" content="<?= ucfirst($project->getFirstName()) ?> <?= ucfirst($project->getLastName()) ?>" />
  <meta name="copyright" content="true" />
  <meta name="application-name" content="Article" />

  <!-- for Facebook -->          
  <meta property="og:title" content="<?= $project->getRefinedTitle() ?>" />
  <meta name="og:author" content="<?= ucfirst($project->getFirstName()) ?> <?= ucfirst($project->getLastName()) ?>" />
  <meta property="og:type" content="article"/>
  
  <meta name="p:domain_verify" content="c336f4706953c5ce54aa851d2d3da4b5"/>
  <meta property="og:image" content='<?= $baseUrl ?><?= $project->getImage() ?>' />
  <meta property="og:url" content="<?= $baseUrl ?>project/<?= $project->getId() ?>" />
  <meta property="og:image:type" content="image/jpeg" />

  <meta property="og:description" content="<?= strip_tags($project->getRefinedStmt()) ?>" />

  <!-- for Twitter -->          
  <meta name="twitter:card" content="photo" />
  <meta name="twitter:site" content="@collap">
  <meta name="twitter:creator" content="@<?= $project->getFirstName() ?><?= $project->getLastName() ?>">
  <meta name="twitter:url" content="<?= $baseUrl ?>project/<?= $project->getId() ?>" />
  <meta name="twitter:title" content="<?= $project->getRefinedTitle() ?>" />
  <meta name="twitter:description" content="<?= strip_tags($project->getRefinedStmt()) ?>" />
  <meta name="twitter:image" content="<?= $baseUrl ?><?= $project->getImage() ?>" />

  <?php require_once 'views/header/header.php'; ?>

</head>

  <body>

    <div id="container" class="effect mainnav-lg">
        
      <?php require_once 'views/navbar/main_navbar.php'; ?>


      <div class="boxed">


        <div id="content-container">
            
            <div class="row">

              <div class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                
                <div class="row" style="margin-left: 15px; margin-right: 15px;">
                  
                  <div class="pull-left">
                    <h4 class="post-title"><?= $project->getRefinedTitle() ?></h4>
                    <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($project->getFirstName()) ?> <?= ucfirst($project->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                  </div>

                  <div class="pull-right" style="margin-top: 25px;">
                    
                    <div class="col-md-6 col-lg-6 col-sm-6" style="margin-bottom: 6px;">
                      <?php if(!$this->isProjectMember()) { ?>
                        <form action="<?= $baseUrl ?>project/<?= $project->getId() ?>/joinProject" name="join_project" method="POST">
                          <button class="btn btn-lg btn-success btn-labeled fa fa-plus text-semibold" name="join_project" style="margin-right: 5px;"> JOIN </button>
                        </form>
                      <?php } ?>
                    </div>
                     
                  <!--                     
                    <div class="col-md-6 col-lg-6 col-sm-6">
                      <form action="" name="message" >
                        <button class="btn btn-lg btn-default btn-labeled fa fa-envelope text-semibold"> MESSAGE </button>
                      </form>
                    </div> 
                  -->
                  
                  </div>      
                </div>            

                <!--Profile Heading-->
              <!--===================================================-->
              
              
                 <!--Panel with Tabs-->
                  <!--===================================================-->
                  <div class="panel">
              
                    <!--Panel heading-->
                    <div class="panel-heading">
                      <div class="panel-control">
                        <ul class="nav nav-tabs">
                          <!-- <li><a href="#tabs-create-project" data-toggle="tab">Create Project</a></li> -->
                          <!-- <li><a href="#tabs-post" data-toggle="tab">Post Otgoings</a></li> -->
                          <li class="active"><a href="#tabs-overview" data-toggle="tab">Overview</a></li>
                          <!-- <li><a href="#tabs-dashboard" data-toggle="tab">Dashboard</a></li> -->
                          <li><a href="#tabs-activities" data-toggle="tab">Activities</a></li>
                          <li><a href="#tabs-teams" data-toggle="tab">Collaborators</a></li>
                          
                        </ul>
                      </div>
                      <h3 class="panel-title">Project Detail</h3>
                    </div>
              
                    <!--Panel body-->
                    <div class="panel-body">
                      <div class="tab-content">
                      
                        <div class="tab-pane fade active in" id="tabs-overview">
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
                                  
                              
                                <div class="post-content">
                                  <p> 
                                    <?= $project->getRefinedStmt() ?>
                                  </p>
                                </div>

                                <ol class="comment-list">
                                  
                                  <li>
                                   <div class="comment" id="comment_box_<?= $project->getId() ?>" >
                                      <?php foreach ($project -> getResponses() as $projectResponse) { ?>
                                        <div class="comment-avatar">
                                           <img alt="" src="<?= $baseUrl ?>uploads/profilePictures/<?= $projectResponse->getUsername() ?>.jpg" style="width: 44px; height: 44px;" class="avatar">
                                        </div>
                                        <!-- /.comment-avatar -->
                                        <div class="comment-meta">
                                           <p> <?= $projectResponse -> getStmt() ?> </p>
                                        </div>
                                      <?php } ?>
                                   </div>
                                  </li>
                                  <li>
                                    <?php 
                                      include 'views/project/projectComment.php';
                                    ?>
                                  </li>

                                </ol>
                              </div>
                              <hr>
                              <hr class="spacer-sm">
                            </div>

                        </div>

                        <div class="tab-pane fade" id="tabs-dashboard">
                          <h4 class="text-thin">Dashboard</h4>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>

                        <div class="tab-pane fade" id="tabs-teams">
                          
                          
                         
                          <!--===================================================-->
                          <!--Team Names Ends-->

                          <!--Team Members starts-->
                          <!--===================================================-->

                          <div class="row">

                            <h4> Team Members </h4>
                            <?php foreach ($this-> teamMembers as $teamMember) { ?>
                              <div class="col-md-6 col-lg-4 col-sm-6">                                                    
                                <div class="panel media middle" style="background-color: #E4EDF0;">
                                  <div class="media-left bg-primary pad-no">
                                    <img alt="" src="uploads/profilePictures/<?= $teamMember->getUsername() ?>.jpg" onerror = "this.src = '<?= $baseUrl ?>static/img/collap.jpg';" class="avatar" width="40" height="40">
                                  </div>
                                  <div class="media-body pad-lft">
                                    <a href="#" class="text-capitalize"><?= $teamMember -> getFirstName() ?> <?= $teamMember -> getLastName() ?></a>
                                    <p class="text-muted"><?= $teamMember -> getRank() ?></p>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                          <!--===================================================-->
                          <!--Team Members Ends-->

                          <!--Team Dashboard starts-->
                          <!--===================================================-->

                         

                         
                          <!--Team Dashboard Ends-->
                          <!--===================================================-->

                        </div>

                        <div class="tab-pane fade" id="tabs-activities" >

                          <!-- Post project activities starts -->

                            <div class="share-widget clearfix">
                              
                              <form id="postActivityProject"  class="form-horizontal" onSubmit="return (validatePostActivity('project'));">

                                <div class="share-widget">
                                  <input type="text" class="form-control" id="title"  placeholder="Title">
                                  <input type="hidden" id="project_id" value="<?= $this->projectId ?>">
                                  </div>
                                <br />

                                <textarea class="form-control share-widget-textarea" id = "description" rows="3" placeholder="Share what you've been up to..." tabindex="1"></textarea>

                                <div class="share-widget-actions">
                                  <div class="share-widget-types pull-left">
                                    
                                    <div class="col-md-8" style="margin-top: 9px;">
                                      <label class="form-radio form-normal active form-inline">
                                        <input type="radio" checked="" name="activity" id="activity_type"value="1"> Challenge 
                                      </label>

                                      <label class="form-radio form-normal">
                                        <input type="radio" name="activity" id="activity_type" value="6"> Notes 
                                      </label>
                                    
                                      <!-- <label class="form-radio form-normal">
                                        <input type="radio" name="activity" id="activity_type" value="5" > Task
                                      </label> -->
                                      <label class="form-radio form-normal">
                                        <input type="radio" name="activity" id="activity_type" value="4"> Idea
                                      </label>
                                    </div>
                                    
                                    <div class="col-md-4">
                                      <input type="file" id="_file" class="btn btn-default btn-file pull-right">
                                    </div>
                                    
                                  </div>

                                  <div class="pull-right">
                                    <button type="submit" class="btn btn-primary btn-labeled fa fa-send fa-lg" tabindex="2">Post</button>
                                  </div>
                                </div> <!-- /.share-widget-actions -->
                              
                              </form>

<!--                               <div id='assign_task'>
                                <div class="form-group pad-btm">
                                  <label class="col-lg-3 control-label">To Whom: </label>
                                  <div class="col-lg-7">

                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                      <option>Self</option>
                                      <option>Rahul</option>
                                      <option>Rajnsih</option>
                                    </select>
                                  
                                  </div>
                                </div>
                              </div> --> <!-- /.assign task -->

                            </div> <!-- /.share-widget -->
                          
                          <!-- Post project activities ends -->
                          <hr class="spacer-sm">
                          
                        <div class="activity-1" id="panel-cont">
                          <!-- /.Activities-block -->
                          <?php foreach ($projectActivities as $activity) { ?>

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
                                <?php //dropDown_comment(8, 7, 9); ?>
                                <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                                  
                              
                                <div class="post-content">
                                  <p> 
                                    <?= $activity->getRefinedStmt() ?>
                                  </p>
                                </div>

                                <ol class="comment-list">
                                  
                                  <li>
                                   <div class="comment" id="comment_box_<?= $activity->getId() ?>" >
                                      <?php foreach ($activity -> getResponses() as $response) { ?>
                                      <div class="comment-avatar">
                                         <img alt="" src="<?= $baseUrl ?>uploads/profilePictures/<?= $response->getUsername() ?>.jpg" style="width: 44px; height: 44px;" class="avatar">
                                      </div>
                                      <!-- /.comment-avatar -->
                                      <div class="comment-meta">
                                         <p> <?= $response -> getStmt() ?> </p>
                                      </div>
                                      <?php } ?>
                                   </div>
                                  </li>
                                  <li>
                                    <?php 
                                      include 'views/activity/activityComment.php';
                                    ?>
                                  </li>
                                
                                </ol>
                              </div>
                              <hr>
                              <hr class="spacer-sm">
                            </div>

                          <?php } ?>
                          </div>
                          <!-- /.Activities-block ends-->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--===================================================-->
                  <!--End Panel with Tabs-->
          
              </div>
<?php
  /*
              <div class="col-sm-12 col-md-3">
                  <div class="heading-block">
                    Popular Projects           
                  </div> <!-- /.heading-block -->

                  <div class="row">
                    <div class="col-sm-4 col-md-4">
                      <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
                    </div>

                    <div class="col-sm-6 col-md-8">
                      <a href="#"> Project Name</a>
                      <br/>
                      <a href="javascript:;" class="btn btn-success btn-sm btn-sm">Join</a> 
                      &nbsp;
                      <a href="javascript:;" class="btn btn-tertiary btn-sm btn-sm">Message</a>
                    </div>
                  </div>
          

                  <div class="row">
                    <div class="col-sm-4 col-md-4">
                      <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
                    </div>

                    <div class="col-sm-6 col-md-8">

                      <a href="#"> Project Name</a>
                      <br/>
                      <a href="javascript:;" class="btn btn-success btn-sm btn-sm">Join</a> 
                        &nbsp;
                      <a href="javascript:;" class="btn btn-tertiary btn-sm btn-sm">Message</a>
                    </div>
                  </div>

                      
                  <div class="heading-block">
                    Online Collaborators   
                  </div> <!-- /.heading-block -->

                  <div class="row">

                    <div class="col-sm-4 col-md-4">
                      <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
                    </div>

                    <div class="col-sm-6 col-md-8">

                      <a href="#"><h3> Project Name </h3></a>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-sm-4 col-md-4">
                      <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
                    </div>

                    <div class="col-sm-6 col-md-8">

                      <a href="#"><h3> Project Name </h3></a>
                    </div>
                  </div>

              </div>
  */
?>
            </div>
        </div>

        <?php require_once 'views/sidebar/sidebar_button.php'; ?>

      </div>
    </div>



    <?php require_once 'views/footer/footer.php'; ?>
<script type="text/javascript">
  $(document).ready(function() {
     $('input[type="radio"]').click(function() {
         if($(this).attr('id') == 'task_select') {
              $('#assign_task').show();           
         }

         else {
              $('#assign_task').hide();   
         }
     });
  });
</script>

  </body>
</html>