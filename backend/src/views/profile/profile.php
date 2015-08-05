  <?php require_once 'views/source/actionDropdown.php'; ?>
  <?php require_once 'views/source/postForms.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title><?= ucfirst($userProfile->getFirstName() )?> <?= ucfirst($userProfile->getLastName() )?> 
                  (<?= ucfirst($userProfile->getRank() )?>), Enjoing New opportunities in Jobs, Ideas, Project and Collaborations.</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <!-- for Google -->
  <meta name="description" content="<?= strip_tags($userProfile->getAboutUser()) ?>" />
  <meta name="keywords" content="<?= ucfirst($userProfile->getFirstName() )?> <?= ucfirst($userProfile->getLastName() )?>, <?= ucfirst($userProfile->getRank() )?>, <?= str_replace(" ", ",", $userProfile->getAboutUser()) ?>" />
  <meta name="author" content="<?= ucfirst($userProfile->getFirstName()) ?> <?= ucfirst($userProfile->getLastName()) ?>" />
  <meta name="copyright" content="true" />
  <meta name="application-name" content="Article" />

  <!-- for Facebook -->          
  <meta property="og:title" content="<?= ucfirst($userProfile->getFirstName() )?> <?= ucfirst($userProfile->getLastName() )?> 
                  (<?= ucfirst($userProfile->getRank() )?>), Enjoing New opportunities in Jobs, Ideas, Project and Collaborations." />
  <meta name="og:author" content="<?= ucfirst($userProfile->getFirstName()) ?> <?= ucfirst($userProfile->getLastName()) ?>" />
  <meta property="og:type" content="article"/>
  
  <meta name="p:domain_verify" content="c336f4706953c5ce54aa851d2d3da4b5"/>
  <meta property="og:image" content='<?= $baseUrl ?>uploads/profilePictures/<?= $userProfile->getUsername() ?>.jpg' />
  <meta property="og:url" content="<?= $baseUrl ?>profile/<?= $userProfile->getId() ?>" />
  <meta property="og:image:type" content="image/jpeg" />

  <meta property="og:description" content="<?= strip_tags($userProfile->getAboutUser()) ?>" />

  <!-- for Twitter -->          
  <meta name="twitter:card" content="photo" />
  <meta name="twitter:site" content="@collap">
  <meta name="twitter:creator" content="@<?= $userProfile->getFirstName() ?><?= $userProfile->getLastName() ?>">
  <meta name="twitter:url" content="<?= $baseUrl ?>profile/<?= $userProfile->getId() ?>" />
  <meta name="twitter:title" content="<?= ucfirst($userProfile->getFirstName() )?> <?= ucfirst($userProfile->getLastName() )?> 
                  (<?= ucfirst($userProfile->getRank() )?>), Enjoing New opportunities in Jobs, Ideas, Project and Collaborations." />
  <meta name="twitter:description" content="<?= strip_tags($userProfile->getAboutUser()) ?>" />
  <meta name="twitter:image" content="<?= $baseUrl ?>uploads/profilePictures/<?= $userProfile->getUsername() ?>.jpg" />

  <?php include_once 'views/header/header.php'; ?>
  
</head>

<body>
  <div id="container" class="effect mainnav-lg">
        
    <?php require_once 'views/navbar/main_navbar.php'; ?>

    <div class="boxed">

      <?php if (isset($this->userId)) { ?>
        <div id="content-container">
      <?php } else  { ?>
        <div  style="margin-top: 84px;" >
      <?php } ?>

        <div class="row">
          
          <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">

            
            <!--Profile Heading-->
            <!--===================================================-->
            <div class="panel">
              <div class="panel-bg-cover">
                <img class="img-responsive" src="<?= $baseUrl ?>static/imgs/kapitalia.jpg" class="post-img img-responsive" alt="Image">
              </div>
              <div class="panel-media" >
               
                <img src="uploads/profilePictures/<?= $userProfile->getUsername() ?>.jpg" style="left: 43%;width: 120px;height: 120px;" class="panel-media-img img-circle img-border-light" alt="Profile Picture">
                
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
                <p class="semibold"><?= count($userMProjects) ?></p>
              </div>  

              <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">

                <h4><small>Activity</small></h4>          
                <p class="semibold"><?= count($userActivities) ?></p>   
              </div>
              
              <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                <h4><small>Ideas</small></h4>
                <p class="semibold"> - </p>
              </div>
              
              <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                <h4><small>Contact</small></h4>
                <?php if ($userSocialLinks) { ?>
                  <a href="<?= $userSocialLinks->getFbLink()?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                  <a href="<?= $userSocialLinks->getTwitterLink()?>" target="_blank"><i class="fa fa-twitter-square"></i></a>
                  <a href="<?= $userSocialLinks->getLinkedinLink()?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                <?php } else { ?>
                  Not Avalable
                <?php } ?>
              </div>

            </div> <!-- /.row text center -->
            <hr class="spacer-sm">

            <div class="text-center">
              <p>
                <?php if(isset($this->userId)) {
                  if(!$this->isKnown()) { ?>
                    <button class="btn btn-info" onclick="postLinkRequest()">Link</button>
                <?php } } else { ?>
                    <a href= "<?=$this->baseUrl ?>" class='btn btn-info'>Link</a>
                <?php } ?>
                <!-- &nbsp;
                <a href="javascript:;" class="btn btn-tertiary">Message</a> -->
              </p>
            </div>
          
          </div> <!-- /.row md 10-->
        
        </div>

        <div class="row">  

          <div class="col-md-10 col-lg-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">
            <hr>

            <!-- Profile page tabs starts here -->

                <div class="panel">
          
                  <!-- Panel heading -->
                  <div class="panel-heading">
                    <div class="panel-control">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tabs-profile"><i class="fa fa link"></i> Profile</a></li>
                        <li id="projectTab"><a data-toggle="tab" href="#tabs-project"  ><i class="fa fa question"></i> Project</a></li>
                        <li id="activityTab" ><a data-toggle="tab" href="#tabs-activity" ><i class="fa fa video"></i> Activities</a></li>
                        <li id="ideaTab" ><a data-toggle="tab" href="#tabs-idea" ><i class="fa fa link"></i> Idea</a></li>
                      </ul>
                    </div>
                    <h3 class="panel-title">User Profile</h3>
                  </div>
            
                  <!-- Panel body -->
                  
                  <div class="panel-body">
                    <div class="tab-content">
          
                    <!--USer Profile Starts-->
                      <!--===================================================-->
          
                      <div id="tabs-profile" class="tab-pane fade active in">

                        <div class = "row heading-block">
                          <div class="col-md-3 col-lg-3 col-sm-3">
                            <div class="post-title">
                                <h4>
                                  Skill Sets
                                </h4>
                            </div> <!-- /.heading-block -->

                          </div>
                          
                          <div class="col-md-9 col-lg-9 col-sm-9">
                          
                            <div class="">
                              <?php foreach($userSkills as $skill ) { ?>
                                <span class="btn btn-secondary btn-sm"> <?= $skill -> getName() ?> </span>
                              <?php } ?>
                            </div> <!-- /.list-group -->

                          </div>
                        </div>

                        <div class = "row heading-block">
                          <div class="col-md-3 col-lg-3 col-sm-3">
                            
                            <div class="post-title">
                              <h4>
                                Extra Activities and Achievements
                              </h4>
                            </div> <!-- /.heading-block -->
                          </div>
                          <div class="col-md-9 col-lg-9 col-sm-9">

                            <div class="post-content">
                              <p> 
                                <?php 
                                  foreach ($userTechStrength as $techStrength) {
                                    echo "<p>" .$techStrength -> getStrength() . "</p>"; 
                                  }
                                ?>
                              </p>
                            </div>
                          </div>
                        
                        </div>

                        <div class = "row heading-block">
                          <div class="col-md-3 col-lg-3 col-sm-3">
                            
                            <div class="post-title">
                              <h4>
                                Work Experience
                              </h4>
                            </div> <!-- /.heading-block -->
                          </div>
   
                          <div class="col-md-9 col-lg-9 col-sm-9">                         
                            <div>
                              <?php foreach ($userWorkExperience as $workExperience) { ?>
                                <h5 class=""> <?= $workExperience -> getCompanyName() ?> </h5>
                                <p class="semibold"> <?= $workExperience -> getDesignation() ?></p>          
                                <p class="text-muted"> <?= $workExperience ->getFrom() ?> - <?= $workExperience ->getTo() ?></p>
                                <hr>
                              <?php } ?>
                              
                            </div> <!-- /.list-group -->
                          </div>
                        </div>

                        <div class = "row heading-block">
                          <div class="col-md-3 col-lg-3 col-sm-3">
                            
                            <div class="post-title">
                              <h4>
                                Job Preference
                              </h4>
                            </div> <!-- /.heading-block -->
                          </div>
   
                          <div class="col-md-9 col-lg-9 col-sm-9">                         
                            <div>
                              <div id="job_locations_display">
                                <?php foreach($userPreferredJobLocations as $jobLocation ) { ?>
                                  <span class="btn btn-secondary btn-sm"> <?= $jobLocation -> getLocationName() ?> </span>
                                <?php } ?>
                              </div> <!-- /.list-group -->

                              <?php foreach ($userJobPreference as $preference) { ?>
                                <h5 class="">Current Ctc: <?= $preference -> getCurrentCtc() ?> Lacs/Annum</h5>
                                <h5 class="">Expected Ctc: <?= $preference -> getExpectedCtc() ?>  Lacs/Annum</h5>
                                <h5 class="">Notice Period: <?= $preference ->getNoticePeriod() ?> Months</h5>
                                <hr>
                              <?php } ?>
                              
                            </div> <!-- /.list-group -->
                          </div>
                        </div>

                        <div class = "row">
                          <div class="col-md-3 col-lg-3 col-sm-3">
                            <div class="post-title">
                              <h4>
                                Education
                              </h4>
                            </div> <!-- /.heading-block -->
                          </div>

                          <div class="col-md-9 col-lg-9 col-sm-9">
                            <div>
                              <?php foreach ($userEducation as $education) { ?>
                                <h5 class="bold"> <?= $education -> getInstitute() ?> </h5>
                                <p class="semibold"> <?= $education -> getDegree() ?> ( <?= $education -> getBranch() ?> ) </p>          
                                <p class="text-muted"> <?= $education ->getFrom() ?> - <?= $education ->getTo() ?></p>
                                <hr>
                              <?php } ?>
                            </div> <!-- /.list-group -->
                          </div>
                        </div>
                      </div>
        
                    <!--USer Profile Starts-->
                    <!--===================================================-->

                    <!--USer Projects tab starts-->
                      <!--===================================================-->
                      
                      <div id="tabs-project" class="tab-pane fade in">
                        
                        <?php foreach ($userMProjects as $project) { ?>
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
                              <h4 class="post-title"><a href="<?= $baseUrl ?>project/<?= $project->getId() ?>" <?= $project->getRefinedTitle() ?></a></h4>
                              <h5 class="post-meta">Published by <a href="<?= $baseUrl ?>profile/<?= $project->getUsername() ?>"><?= ucfirst($project->getFirstName()) ?> <?= ucfirst($project->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                            
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

                        <?php } ?>

                      </div>

                    <!--USer Projects tab ends-->
                      <!--===================================================-->
                 
                    <!--USer Activities Starts-->
                      <!--===================================================-->
                      <div id="tabs-activity" class="tab-pane fade">
                        <!-- /.Activities-block -->
                        <div class="activities-start">
                        
                          <div class="activity-1" id="panel-cont">

                            <?php foreach ($userActivities as $activity) { ?>

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
                                  <h4 class="post-title"> <a href="<?= $baseUrl ?>activity/<?= $activity->getId() ?>" ><?= $activity->getRefinedTitle() ?> </a></h4>
                                  <?php //dropDown_comment(8, 7, 9); ?>
                                  <h5 class="post-meta">Published by <a href="<?= $baseUrl ?>profile/<?= $activity->getUsername() ?>"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                                    
                                
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

                        </div>              
                      </div>

                    <!--USer Activities ends-->
                      <!--===================================================-->


                    <!--USer Ideas Starts-->
                      <!--===================================================-->
          
                      <div id="tabs-idea" class="tab-pane fade">
                        

                         
                         
                        
                      </div>

                    <!--USer Ideas Starts-->
                      <!--===================================================-->

                    </div>
                  </div>
                </div>

              <!-- Profile page tabs ends here -->

          </div> <!-- /.row md 7-->

        </div> <!-- /.row -->

      
        <br><br>

      </div> <!-- /.content container -->

      <?php require_once 'views/sidebar/sidebar_button.php'; ?>

    </div> <!-- .boxed -->
  
  </div> <!-- .container -->

  <?php include_once 'views/footer/footer.php'; ?>
  
  <script type="text/javascript">

        function  postLinkRequest(){
          var dataString = "";
          $.ajax({
                type: "POST",
                url: "<?= $baseUrl ?>" + "profile/<?= $userProfile->getUsername() ?>/sendLinkRequest",
                data: dataString,
                cache: false,
                success: function(result){
                  $.niftyNoty({ 
                    type:"success",
                    icon:"fa fa-check fa-lg",
                    title:"Link Request",
                    message:result,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                },
                 error: function(result){
                  console.log(result);
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-times fa-lg",
                    title:"Link Request",
                    message:result.responseText,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                }
            });
    }

  </script>
<script type="text/javascript">

function requestAccept(key){
          var dataString = "";
          dataString = "id=" + key ;

          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>" + "profile/<?= $userProfile->getUsername() ?>/confirmLinkRequest",
            data: dataString,
            cache: false,
            success: function(result){
              $.niftyNoty({ 
                type:"success",
                icon:"fa fa-check fa-lg",
                title:"Link Request",
                message:result,
                focus: true,
                container:"floating",
                timer:4000
              });
            },
             error: function(result){
              console.log(result);
              $.niftyNoty({ 
                type:"danger",
                icon:"fa fa-times fa-lg",
                title:"Link Request",
                message:result.responseText,
                focus: true,
                container:"floating",
                timer:4000
              });
            }
          });
        }

function requestDelete(key){
          var dataString = "";
          dataString = "id=" + key ;

          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>" + "profile/<?= $userProfile->getUsername() ?>/deleteLinkRequest",
            data: dataString,
            cache: false,
            success: function(result){
              $.niftyNoty({ 
                type:"success",
                icon:"fa fa-check fa-lg",
                title:"Link Request",
                message:result,
                focus: true,
                container:"floating",
                timer:4000
              });
            },
             error: function(result){
              console.log(result);
              $.niftyNoty({ 
                type:"danger",
                icon:"fa fa-times fa-lg",
                title:"Link Request",
                message:result.responseText,
                focus: true,
                container:"floating",
                timer:4000
              });
            }
          });
        }
</script>
<script type="text/javascript">
  function showImage() {
    var src = document.getElementById("src");
    var target = document.getElementById("target");
  var fr=new FileReader();
  // when image is loaded, set the src of the image where you want to display it
  fr.onload = function(e) { target.src = this.result; };
  src.addEventListener("change",function() {
    // fill fr with image data    
    fr.readAsDataURL(src.files[0]);
  });
}


</script>
  </body>
</html>