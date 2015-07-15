  <?php require_once 'views/source/actionDropdown.php'; ?>
  <?php require_once 'views/source/postForms.php'; ?>

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

          <div class="col-md-10 col-lg-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">
            <hr>

            <!-- Profile page tabs starts here -->

                <div class="panel">
          
                  <!-- Panel heading -->
                  <div class="panel-heading">
                    <div class="panel-control">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tabs-profile"><i class="fa fa link"></i> Profile</a></li>
                        <li><a data-toggle="tab" href="#tabs-project"><i class="fa fa question"></i> Project</a></li>
                        <li><a data-toggle="tab" href="#tabs-activity"><i class="fa fa video"></i> Activitie</a></li>
                        <li><a data-toggle="tab" href="#tabs-idea"><i class="fa fa link"></i> Idea</a></li>
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

                          </div>
                        </div>

                        <div class = "row heading-block">
                          <div class="col-md-3 col-lg-3 col-sm-3">
                            
                            <div class="post-title">
                              <h4>
                                Technical Strength
                              </h4>
                            </div> <!-- /.heading-block -->
                          </div>
                          <div class="col-md-9 col-lg-9 col-sm-9">                         
                            <div class="post-content">
                              <p> 
                                Have undergone training for Ethical hacking.
                                Red hat certified Engineer (RHCE Certified).
                                Familier with Linux, Software Design Models
                              </p>
                            </div>
                          </div>
                        </div>


                        <div class = "row heading-block">
                          <div class="col-md-3 col-lg-3 col-sm-3">
                            
                            <div class="post-title">
                              <h4>
                                About Me
                              </h4>
                            </div> <!-- /.heading-block -->
                          </div>
                          <div class="col-md-9 col-lg-9 col-sm-9">                         
                            <div class="post-content">
                              <p> 
                                Have undergone training for Ethical hacking.
                                Red hat certified Engineer (RHCE Certified).
                                Familier with Linux, Software Design Models
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
                              <h5 class="">Dpower4 Pvt. Ltd.</h5>
                              <p class="semibold">Software Engineer</p>          
                              <p class="text-muted"> 2014 - Present </p>
                              
                              <hr>
                              
                              <h5 class="">IBM LAbs</h5>
                              <p class="semibold">Software Developer</p>          
                              <p class="text-muted"> 2011 - 2014 </p>
                              
                              <hr>
                              
                              <h5 class="">Ericssion </h5>
                              <p class="semibold">System Engineer</p>          
                              <p class="text-muted"> 2010 - 2011 </p>

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
                              <h5 class="">PEC University of Technology</h5>
                              <p class="semibold">M.Tech, CSE</p>          
                              <p class="text-muted"> 2012 - 2014 </p>
                            </div> <!-- /.list-group -->

                            <div>
                              <h5 class="">UIET MDU Rohtak</h5>
                              <p class="semibold">B.Tech, CSE</p>          
                              <p class="text-muted"> 2007 - 2011 </p>
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
                                postComment( $img_url , 'project/comment', 'comment_to_project' , 'comment_project');
                              ?>
                            </li>
                          
                          </ol>

                        <?php } ?>

                      </div>

                    <!--USer Projects tab ends-->
                      <!--===================================================-->
                 
                    <!--USer Activities Starts-->
                      <!--===================================================-->
                      <div id="tabs-activity" class="tab-pane fade">
                        <!-- /.Activities-block -->
                        <div class="activities-start">
                        
                          <div class="activity-1">

                            <div class="post-aside" style="padding-top: 28px;">
                              <div class="post-date">
                                <span class="post-date-day">12</span>
                                <span class="post-date-month"> January</span>
                                <span class="post-date-year"> 2015</span>
                              </div>

                              <a href="#comments" class="post-comment">
                                4
                              </a>
                            </div> <!-- /.post-aside -->

                            <div class="post-main">

                              <a href= '#' target="_blank">
                                <h4 class="post-title"> Google teams with Disney to make intergalactic cartoon to inspire kids to code</h4>
                              </a>
                              <h4 class="post-meta">Published by <a href="javascript:;">Rajnish Panwar</a> in <a href="javascript:;">India</a></h4>
                              <img src="<?= $baseUrl ?>static/imgs/googleactivity.jpg" class="post-img img-responsive" alt="Project Image" >
                              
                              <hr class="spacer-sm">
                                
                              <div class="post-content">
                                <p> This one might be a show for kids that’s just as fun for adults to watch. Google has partnered with Disney to make a new cartoon series, Miles from Tomorrowland, to inspire kids to code.
                                    In this outer space adventure, Miles explores the galaxy with his family and best friend in tow. Miles’ family joins him for the ride, including his mom and ship captain, Phoebe, his mechanical engineer dad, Leo, his tech-savvy big sister, Loretta, and his best friend and pet robo-ostrich Merc. The show is designed to not only fuel kids’ interest in space but also coding, teamwork, critical thinking and exploration. The show’s makers tapped consultants from NASA, Space Tourism Society and Google to keep it real. 
                                    Characters are voiced by a stellar cast, too, including Olivia Munn, Adrian Grenier, Mark Hamill, George Takei, Bill Nye, Wil Wheaton, Alton Brown and Brenda Song.
                                    The series’ premiere is tomorrow, Feb. 6, on the Disney Channel, starting at 9 a.m. PT. You can watch four back-to-back episodes, each featuring space facts integrated into the storylines of Miles’ missions as he strives to “connect the galaxy on behalf of Tomorrowland Transit Authority.
                                </p>
                              </div>
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
                                  postComment( $img_url , 'dashboard/activity/comment', 'comment_to_activity' , 'comment_avtivity');
                                ?>
                              </li>
                            
                            </ol>
                          
                          </div>

                        </div>              
                      </div>

                    <!--USer Activities ends-->
                      <!--===================================================-->


                    <!--USer Ideas Starts-->
                      <!--===================================================-->
          
                      <div id="tabs-idea" class="tab-pane fade">
                        <div class="activity-1">

                          <div class="post-aside" style="padding-top: 28px;">
                            <div class="post-date">
                              <span class="post-date-day">12</span>
                              <span class="post-date-month"> January</span>
                              <span class="post-date-year"> 2015</span>
                            </div>

                            <a href="#comments" class="post-comment">
                              4
                            </a>
                          </div> <!-- /.post-aside -->

                          <div class="post-main">

                            <a href= '#' target="_blank">
                              <h4 class="post-title"> Google teams with Disney to make intergalactic cartoon to inspire kids to code</h4>
                            </a>
                            <h4 class="post-meta">Published by <a href="javascript:;">Rajnish Panwar</a> in <a href="javascript:;">India</a></h4>
                            <img src="<?= $baseUrl ?>static/imgs/googleactivity.jpg" class="post-img img-responsive" alt="Project Image" >
                            
                            <hr class="spacer-sm">
                              
                            <div class="post-content">
                              <p> This one might be a show for kids that’s just as fun for adults to watch. Google has partnered with Disney to make a new cartoon series, Miles from Tomorrowland, to inspire kids to code.
                                  In this outer space adventure, Miles explores the galaxy with his family and best friend in tow. Miles’ family joins him for the ride, including his mom and ship captain, Phoebe, his mechanical engineer dad, Leo, his tech-savvy big sister, Loretta, and his best friend and pet robo-ostrich Merc. The show is designed to not only fuel kids’ interest in space but also coding, teamwork, critical thinking and exploration. The show’s makers tapped consultants from NASA, Space Tourism Society and Google to keep it real. 
                                  Characters are voiced by a stellar cast, too, including Olivia Munn, Adrian Grenier, Mark Hamill, George Takei, Bill Nye, Wil Wheaton, Alton Brown and Brenda Song.
                                  The series’ premiere is tomorrow, Feb. 6, on the Disney Channel, starting at 9 a.m. PT. You can watch four back-to-back episodes, each featuring space facts integrated into the storylines of Miles’ missions as he strives to “connect the galaxy on behalf of Tomorrowland Transit Authority.
                              </p>
                            </div>
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
                                postComment( $img_url , 'dashboard/activity/comment', 'comment_to_idea' , 'comment_idea');
                              ?>
                            </li>
                          
                          </ol>

                        </div>
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

    </div> <!-- .container -->
  </div>

  <?php include_once 'views/footer/footer.php'; ?>


  </body>
</html>