<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
<html lang="en" class="no-js">
  <!--<![endif]-->
  <head>
     <title>Homepage | Welcome to Collap</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="collap com">
     <meta name="description" content="Collap is a powerful online platform which enables you to take a dig at problems, big or small, and collaborate with like minded people to make the world a better place. Identify any problem you want solved and let the world know about it. Assemble your team and have a go at it. Interested Collapers can join your quest and contribute which ever way they can. Collap provides you a wide range of helpful tools which enable hassle-free collaboration. Create and manage projects and be in control with our Project Dashboard all through the process. Share ideas freely and come up with innovative solutions. Make your realm private and work on that secret project you’ve long been planning. Participate in projects and upgrade your Level. Earn a special place in Collap for each incremental step. Sharpen your skills while lending them to do good. Challenges to solve your technical problems and help change the world! . Meet people,  allows everybody to share their ideas, views, challenges and achievements with the like minded for mutual benefits. In this collap v1 release, we are going to limit to some functionality due to technically liabilities and available resources.">
     <meta name="keywords" content="Challenge, Project, Problem solving, problem, article, collaborate, collaboration, digitalCollaboration">
     <?php require_once 'views/header/header.php'; ?>
  </head>
  <body>
     <div id="container" class="effect mainnav-lg">
      <?php require_once 'views/navbar/main_navbar.php'; ?>
        <div class="boxed">
          <div id="content-container">
            <!--   <hr class="spacer-sm"> -->
            <div class="row" style="margin-top: 20px;">
              <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">

              <!-- push forms div starts here for dynamic loading for forms -->  
                <div id ="push_form_div"> </div>
              <!-- push forms div starts here for dynamic loading for forms ends -->

                <!-- Post to collap starts -->
                <div class="share-widget clearfix">
                  <form id="postActivity" class="form-horizontal" onSubmit="return (validatePostActivity('dashboard'));">
                    <div class="share-widget">
                      <input type="text" class="form-control" id="title" placeholder="Title">
                    </div>
                    <br />
                    <textarea class="form-control share-widget-textarea" id = "description" rows="3" placeholder="Share what you've been up to..." tabindex="1"></textarea>
                    <div class="share-widget-actions">
                      
                      <div class="share-widget-types">
                        
                        <div class="col-md-6 col-sm-6 col-xs-7" style="margin-top: 9px;">
                          <label class="form-radio form-normal active form-inline">
                          <input type="radio" checked="" name="activity" id="activity_type" value="1"> Challenge 
                          </label>
                          <label class="form-radio form-normal">
                          <input type="radio" name="activity" id="activity_type" value="7"> Article 
                          </label>
                          <label class="form-radio form-normal">
                          <input type="radio" name="activity" id="activity_type" value="4"> Idea
                          </label>
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-3">
                          
                          <!-- <input type="file" name="_file" id="_file" class="btn btn-default btn-file pull-right"> -->
                        
                          <span class="btn btn-default btn-file">
                            Browse... <input type="file" name="_file" id="_file" class="btn btn-default btn-file">
                          </span>
                        
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-2">
                          <div class="pull-right">
                            <button type="submit" class="btn btn-primary btn-labeled fa fa-send fa-lg" tabindex="2">Post</button>
                          </div>
                        </div>

                      </div>
                    </div>
                   <!-- /.share-widget-actions -->
                  </form>
                </div>
                <!-- /.share-widget -->
                <!-- /.Activities-block -->
                <div class="activities-start">
                <div class="post-title">
                   <h3>
                      Activities
                   </h3>
                </div>
                <!-- /.heading-block -->
                <hr>
                <hr class="spacer-sm">
                
                <div class="activity-1" id="panel-cont">
                  <?php foreach ($top10Activities as $activity) { ?>
                    <div class="post">
                      <div class="post-aside" style="padding-top: 28px;">
                         <div class="post-date">
                            <?php $data = date_parse($activity->getCreationTime()); ?>
                            <span class="post-date-day"><?= $data["day"] ?></span>
                            <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                            <span class="post-date-year"><?= $data["year"] ?></span>
                         </div>
                      </div>
                      <!-- /.post-aside -->
                      <div class="post-main">
                        <?php if( get_class($activity) == "Project" ) {
                          if(!$this->isProjectMember($activity -> getId())) { ?>
                            <button class="btn btn-lg btn-success btn-labeled fa fa-plus text-semibold pull-right" id="join_project_button_<?= $activity-> getId()?>" onclick="return (validateJoinProject(<?= $activity-> getId()?>));" style="margin-right: 5px; margin-top: 14px;"> JOIN </button>
                          <?php } ?>
                          <h4 class="post-title"><a href="<?= $this-> baseUrl ?>project/<?= $activity -> getId() ?>" target="_blank"><?= $activity->getRefinedTitle() ?></a></h4>
                        <?php } else { ?>
                          <h4 class="post-title"><a href="<?= $this-> baseUrl ?>activity/<?= $activity -> getId() ?>" target="_blank"><?= $activity->getRefinedTitle() ?></a></h4>
                        <?php } ?>
                         
                         <h5 class="post-meta">Published by <a href="<?= $this-> baseUrl ?>profile/<?= $activity -> getUsername() ?>" target="_blank"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
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
                                    <span class="comment-author">
                                      <a href="<?= $this -> baseUrl ?>profile/<?= $activity -> getUsername()?>" target="_blank" class="url">
                                        <?= ucfirst($response->getFirstName()) ?> <?= ucfirst($response->getLastName()) ?>
                                      </a>
                                    </span>

                                    <a href="javascript:;" class="comment-timestamp">
                                      <?= date("F jS, Y",strtotime($response->getCreationTime())) ?>
                                    </a>

                                  </div> <!-- /.comment-meta -->

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
                
                </div>
              </div>
            </div>
          </div>
          
          <?php require_once 'views/sidebar/sidebar_button.php'; ?>
        </div>
      </div>
      
      <?php require_once 'views/footer/footer.php'; ?>
      <?php include_once "static/js/updateUserProfileSettingFunctions.php"; ?>

      <script type="text/javascript">

/*        setTimeout(function(){
          console.log("inside setTimeout fnction");
          $.ajax({
            type: "POST",
            url: "<?= $this-> baseUrl ?>" + "dashboard/pushForm",
            //data: dataString,
            cache: false,
            success: function(result){
              //result = "<span> i am there </span>";
              $('#push_form_div').html(result);
            },
            error: function(result){
            
            }
          });
        },10000);*/

      </script>
     
  </body>
</html>
