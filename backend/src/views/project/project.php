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
            
            <div class="row">

              <div class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                <div class="post-main">
                  
                    <div class="pull-left">
                    <h4 class="post-title"><?= $project->getRefinedTitle() ?></h4>
                    <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($project->getFirstName()) ?> <?= ucfirst($project->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                  </div>

                  <div class="pull-right">
                      <button class="btn btn-success btn-labeled fa fa-plus " style="margin-right: 5px;"> JOIN </button>
                      <button class="btn btn-default btn-labeled fa fa-envelope"> MESSAGE </button>
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
                        
                        <div class="tab-pane fade" id="tabs-create-project">
                          <!-- Create Project Form -->
                          <div class="share-widget clearfix">

                            <form id="" class="form-horizontal" action="<?= $baseUrl ?>project/createProject" method="post">

                              <div class="share-widget">
                                <input type="text" class="form-control" name="title" placeholder="Title">
                              </div>
                              <br />

                              <textarea class="form-control share-widget-textarea" name = "description" rows="3" placeholder="Share what you've been up to..." tabindex="1">
                                
                              </textarea>

                              <div class="share-widget-actions">
                                <div class=" pull-left">
                                  <div class="col-md-6">
                                   
                                    <select class="selectpicker" name="type" data-live-search="true" data-width="100%" id= "type" >    
                                        <option value='Default' >Default</option>
                                        <option value='Public' >Public</option>
                                        <option value='Classified' >Classified</option>
                                        <option value='Private' >Private</option>
                                    </select>
                                   
                                  </div>
                                  <div class="col-md-6">
                                    <input type="file" name="file" class="btn btn-default btn-file" value="Browse">
                                  </div>    
                                </div>  

                                <div class="pull-right">
                                  <button type="submit" class="btn btn-primary btn-labeled fa fa-send fa-lg" tabindex="2">Post</button>
                                </div>
                              </div>
                            </form>
                            
                            <hr>
                            <!-- Create Project Form Ends-->
                          </div>

                        </div>
                          
                        <div class="tab-pane fade" id="tabs-post">
                          
                          <!-- Post for project starts -->

                            <div class="share-widget clearfix">
                              
                              <form id="post_to_project" class="form-horizontal" action="#" method="post" onsubmit="return selectType()">

                                <div class="share-widget">
                                  <input type="text" class="form-control" name="title" placeholder="Title">
                                  <input type="hidden" name="project_id" value="">
                                  </div>
                                <br />

                                <textarea class="form-control share-widget-textarea" name = "description" rows="3" placeholder="Share what you've been up to..." tabindex="1">
                                  
                                </textarea>

                                <div class="share-widget-actions">
                                  <div class="share-widget-types pull-left">
                                    
                                    <div class="col-md-6" style="margin-top: 9px;">
                                      <label class="form-radio form-normal active form-inline">
                                        <input type="radio" checked="" name="project_activity" id ="challenge" value="Challenge"> Challenge 
                                      </label>

                                      <label class="form-radio form-normal">
                                        <input type="radio" name="project_activity" id = "notes" value="Notes"> Notes 
                                      </label>
                                    
                                      <label class="form-radio form-normal">
                                        <input type="radio" name="project_activity" id = "task_select" value="Task" > Task
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

                              <div id='assign_task'>
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
                              </div> <!-- /.assign task -->

                            </div> <!-- /.share-widget -->
                          
                        <!-- Post to collap ends -->

                        </div>

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
                                    <div class="comment">
                                      
                                      <?php foreach ($project -> getResponses() as $response) { ?>
                                        
                                        <div class="comment-avatar">
                                          <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" style="width: 44px; height: 44px;" class="avatar">
                                        </div> <!-- /.comment-avatar -->

                                        <div class="comment-meta">
                                          <p> <?= $response -> getStmt() ?> </p>
                                        </div>
                                      
                                      <?php } ?>
                                    
                                    </div>
                                  </li>
                                  
                                  <li>

                                    <?php 
                                      $img_url = "$baseUrl"."/static/imgs/rajnish.jpg";
                                      postComment( $img_url , 'project/comment', 'comment_to_project' , 'comment_project');
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
                            <?php foreach ($teamMembers as $teamMember) { ?>
                              <div class="col-md-6 col-lg-4 col-sm-6">                                                    
                                <div class="panel media middle" style="background-color: #E4EDF0;">
                                  <div class="media-left bg-primary pad-all">
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

                        <div class="tab-pane fade" id="tabs-activities">
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
                                <?php dropDown_comment(8, 7, 9); ?>
                                <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                                  
                              
                                <div class="post-content">
                                  <p> 
                                    <?= $activity->getRefinedStmt() ?>
                                  </p>
                                </div>

                                <ol class="comment-list">
                                  
                                  <li>
                                    <div class="comment">
                                      
                                      <?php foreach ($activity -> getResponses() as $response) { ?>
                                        
                                        <div class="comment-avatar">
                                          <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" style="width: 44px; height: 44px;" class="avatar">
                                        </div> <!-- /.comment-avatar -->

                                        <div class="comment-meta">
                                          <p> <?= $response -> getStmt() ?> </p>
                                        </div>
                                      
                                      <?php } ?>
                                    
                                    </div>
                                  </li>
                                  
                                  <li>
                                    <?php 
                                      $img_url = "$baseUrl"."/static/imgs/rajnish.jpg";
                                      postComment( $img_url , 'dashboard/article/comment', 'comment_to_article' , 'comment_article');
                                    ?>
                                  </li>
                                
                                </ol>
                              </div>
                              <hr>
                              <hr class="spacer-sm">
                            </div>

                          <?php } ?>
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

    <?php require_once 'views/footer/footer.php'; ?>


  </body>
</html>