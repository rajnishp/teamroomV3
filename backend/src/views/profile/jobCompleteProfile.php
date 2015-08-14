<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collap | Complete Profile</title>


  <?php require_once 'views/header/header.php'; ?>

</head>
  <body>
    <div id="container" class="">
        
      <?php require_once 'views/navbar/main_navbar.php'; ?>

      <div class="boxed">

        <div id="" style="margin-top: 50px;">
          <!--id ="content-container" for removing sidebar --> 
          <!--Page Title-->
          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div id="page-title">
            <h1 class="page-header text-overflow text-center">Let's be ready to collaborate.</h1>

          </div>
          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <!--End page title-->

          <!--Page content-->
          <!--===================================================-->
          <div id="page-content">
            
            <div class="panel">
            <div class="row col-md-offset-2">
                 <div class="col-lg-10 col-md-10 eq-box-md text-center box-vmiddle-wrap bg-primary">
            
                   <div class="box-vmiddle pad-all">
                    <h3 class="text-thin">Provide as much as infomation you can, because it will help others to collaborate with you better. </h3>
                   
                  </div>
              </div>
              <div class="eq-height clearfix">

                  
                </div> 
                <!-- <div class="col-md-7 eq-box-md eq-no-panel"> -->
                <div class="col-md-10 eq-box-md eq-no-panel ">
                  <!-- Main Form Wizard -->
                  <!--===================================================-->
                  <div id="demo-main-wz">
            
                    <!--nav-->
                    <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#tab_profile">
                          <span class="icon-wrap icon-wrap-xs bg-danger"><i class="fa fa-info"></i></span>
                          <p class="text-thin">Profile</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#tab_tech_strength">
                          <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-code"></i></span>
                          <p class="text-thin">Skills, Activities</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#tab_work_exp">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-briefcase"></i></span>
                          <p class="text-thin">Work Experience</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#tab_job_preference">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-briefcase"></i></span>
                          <p class="text-thin">Job Preference</p>
                        </a>
                      </li>
                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#tab_education">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-book"></i></span>
                          <p class="text-thin">Education</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#tab_projects">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-book"></i></span>
                          <p class="text-thin">Projects</p>
                        </a>
                      </li>
                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#tab_join_projects">
                          <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-plus"></i></span>
                          <p class="text-thin">Join Projects</p>
                        </a>
                      </li>
                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#tab_finish">
                          <span class="icon-wrap icon-wrap-xs bg-success"><i class="fa fa-heart"></i></span>
                          <p class="text-thin">Finish</p>
                        </a>
                      </li>
                    </ul>
            
                    <!--progress bar-->
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-primary"></div>
                    </div>
            
            
                    <!--form-->
                    
                      <div class="panel-body">
                        <div class="tab-content">
                          <!--First tab-->
                          <div id="tab_profile" class="tab-pane">

                            <?php require_once 'views/forms/profilePicture.php'; ?>

                            <div class="form-horizontal">
                              
                              <?php require_once 'views/forms/basicInformation.php'; ?>
                            
                              <div class="form-group">

                                <div class="pull-right pad-all">

                                   <button type="button" class="next btn btn-primary">Save and Next</button>
                            
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                            </div> <!--End Form user basic profile-->
                          
                          </div> <!-- End First tab-->
            
                          <!--Second tab-->
                          <div id="tab_tech_strength" class="tab-pane">
                            <div id="tech_strength_div">

                              <?php require_once 'views/forms/addSkills.php'; ?>
                            
                              <?php require_once 'views/forms/techStrength.php'; ?>

                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>
                              <button type="button" class="next btn btn-primary" id="skip_tab_tech_strength" >Skip</button>
                              <button type="button" class="next btn btn-primary" id='validateUpdateTechStrength'>Next</button>
                            </div>

                          </div> <!--End Second tab-->
                          
                        
                          <!--Third tab-->
                          <div id="tab_work_exp" class="tab-pane">
                            
                            <div id="work_exp_div">
                              
                              <?php require_once 'views/forms/workExperience.php'; ?>

                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>
                              <button type="button" class="next btn btn-primary" id="skip_tab_work_exp" >Skip</button>
                              <button type="button" class="next btn btn-primary">Next</button>
                            </div>

                          </div> <!--End Third tab-->
                          
                          <!--Fourth tab-->
                          <div id="tab_job_preference" class="tab-pane">
                              
                            <?php require_once 'views/forms/jobPreferenceInfo.php'; ?>

                            <div class="form-horizontal">
                              
                              <div class="form-group">
                                <div class="pull-right pad-all">

                                  <!--                                   
                                  <button type="submit" class="btn btn-success" onclick="return (validateUpdateJobPreference());">Save Changes</button>
                                 -->
                                  <button type="button" class="previous btn btn-info">Previous</button>
                                  <button type="button" class="next btn btn-primary" id="skip_tab_job_pref" >Skip</button>
                                  <button type="button" class="next btn btn-primary">Next</button>
    
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->
                            </div>
                          
                          </div> <!--End Fourth tab-->
            
                          
                          <!--Fifth tab-->
                          <div id="tab_education" class="tab-pane">
                            <div id="education_div">
                              
                              <?php require_once 'views/forms/education.php'; ?>

                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>
                              <button type="button" class="next btn btn-primary" id="skip_tab_education" >Skip</button>
                              <button type="button" class="next btn btn-primary">Next</button>
                            </div>

                          </div> <!--End Fifth tab-->


                          <!--Sixth tab-->
                          <div id="tab_projects" class="tab-pane">
                            
                            <div id="project_div">

                              <?php require_once 'views/forms/createProject.php'; ?>
                              
                            </div>  

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>
                              <button type="button" class="next btn btn-primary">Next</button>

                            </div> <!-- /.col -->
                            
                      
                          </div> <!--End Sixth tab-->
                          
                          <!--Seventh tab-->
                          <div id="tab_join_projects" class="tab-pane">
                            <!--Recommended Join Projects-->
                            <?php  foreach ($this -> recommendedJoinProjects as $project) { ?>
                              <div class="post" id="join_project_<?= $project-> getId()?>">
                                <div class="post-aside" style="padding-top: 28px;">
                                  <div class="post-date">
                                    <?php $data = date_parse($project->getCreationTime()); ?>
                                    <span class="post-date-day"><?= $data["day"] ?></span>
                                    <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                                    <span class="post-date-year"><?= $data["year"] ?></span>
                                  </div>
                    
                                </div> <!-- /.post-aside -->
                                
                                <div class="post-main">
                                  <button class="btn btn-lg btn-success btn-labeled fa fa-plus text-semibold pull-right" onclick="return (validateJoinProject(<?= $project-> getId()?>));" style="margin-right: 5px; margin-top: 14px;"> JOIN </button>
                                  <h4 class="post-title"><a href="<?= $this -> baseUrl ?>project/<?= $project -> getId() ?>"><?= $project->getRefinedTitle() ?></a></h4>
                                  <h5 class="post-meta">Published by <a href="<?= $this -> baseUrl ?>profile/<?= $project -> getUsername() ?>"><?= ucfirst($project->getFirstName()) ?> <?= ucfirst($project->getLastName()) ?></a> </h5>
                                
                                  <div class="post-content">
                                    <p> 
                                      <?= $project->getRefinedStmt() ?> ........<a href="<?= $this -> baseUrl ?>project/<?= $project -> getId() ?>">Read More </a>
                                    </p>
                                  </div>

                                </div>
                                <hr>
                                <hr class="spacer-sm">
                              </div>

                            <?php } ?>
                            
                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>
                              <button type="button" class="next btn btn-primary" >Next</button>

                            </div> <!-- /.col -->
                           
                          </div><!--End Seventh tab-->

                          <!--Eight tab-->
                          <div id="tab_finish" class="tab-pane">
                            <div class="form-horizontal">
                              You have completed Your Profile. <br />

                              You can also edit/modify your profile on your profile setting page. <br />
                              Keep updating your profile for more chances to get call, Recruiters always preferred updated profile. <br />

                            </div>
                            <div class="pull-right pad-all">
                              <form class="form-horizontal"  action="<?= $this-> baseUrl ?>completeProfile/finish" method="POST">

                                <button type="button" class="previous btn btn-info">Previous</button>
      
                                <button type="submit" class="finish btn btn-success">Finish</button>
                              </form>
  
                            </div> <!-- /.col -->

                          </div>
                        </div><!--End Eight tab-->
                      </div>
            
                    
                  </div>
                  <!--===================================================-->
                  <!-- End of Main Form Wizard -->
            
                </div>

              </div>
            </div>
            
          </div>
          <!--===================================================-->
          <!--End page content-->

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->
        
      </div> <!-- /.boxed -->
    
    </div> <!-- /.container -->

    <?php require_once 'views/footer/footer.php'; ?>

    <?php include_once "static/js/updateUserProfileSettingFunctions.php"; ?>

</body>
</html>

