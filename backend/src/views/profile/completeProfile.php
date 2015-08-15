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
                      <li class="col-xs-4">
                        <a data-toggle="tab" href="#tab_profile">
                          <span class="icon-wrap icon-wrap-xs bg-danger"><i class="fa fa-info"></i></span>
                          <p class="text-thin">Profile</p>
                        </a>
                      </li>

                      <li class="col-xs-4">
                        <a data-toggle="tab" href="#tab_projects">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-book"></i></span>
                          <p class="text-thin">Projects</p>
                        </a>
                      </li>
                      <li class="col-xs-4">
                        <a data-toggle="tab" href="#tab_join_projects">
                          <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-plus"></i></span>
                          <p class="text-thin">Join Projects</p>
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
                            <small class="help-block">Three Steps to Go: Collaborate</small>
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
                        
                          <!--Sixth tab-->
                          <div id="tab_projects" class="tab-pane">
                            <small class="help-block">Two Steps to Go: Create your own Project to Collaborate </small>
                            <div id="project_div">

                              <?php require_once 'views/forms/createProject.php'; ?>

                            </div>

                            <div class="pull-right pad-all" id = "switch_tab_project">

                              <button type="button" class="previous btn btn-info">Previous</button>
                              <button type="button" class="next btn btn-primary">Next</button>

                            </div> <!-- /.col -->
                            
                      
                          </div> <!--End Sixth tab-->
                          
                          <!--Seventh tab-->
                          <div id="tab_join_projects" class="tab-pane">
                          <small class="help-block">Last Step to Go: Start Collaboration by Join Existing Projects </small>
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

                              <form class="form-horizontal"  action="<?= $this-> baseUrl ?>completeProfile/finish" method="POST">

                                <button type="button" class="previous btn btn-info">Previous</button>
      
                                <button type="submit" class="finish btn btn-success">Finish</button>
                              </form>

                            </div> <!-- /.col -->
                           
                          </div><!--End Seventh tab-->

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

