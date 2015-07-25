<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collap | Complete Profile</title>


  <?php require_once 'views/header/header.php'; ?>

</head>
  <body>
    <div id="container" class="effect mainnav-lg">
        
      <?php require_once 'views/navbar/main_navbar.php'; ?>

      <div class="boxed">

        <div id="content-container">
          
          <!--Page Title-->
          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div id="page-title">
            <h1 class="page-header text-overflow">Complete Your Profile</h1>

          </div>
          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <!--End page title-->

          <!--Page content-->
          <!--===================================================-->
          <div id="page-content">
            
            <div class="panel">
              <div class="eq-height clearfix">
                <!-- <div class="col-md-5 eq-box-md text-center box-vmiddle-wrap bg-primary">
            
                   <div class="box-vmiddle pad-all">
                    <h3 class="text-thin">Register Today</h3>
                    <span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
                      <i class="fa fa-gift fa-5x text-primary"></i>
                    </span>
                    <p>Members get <span class="text-lg text-bold">50%</span> more points, so register today and start earning points for savings on great rewards!</p>
                    <a class="btn btn-lg btn-primary btn-labeled fa fa-arrow-right" href="#">Learn More...</a>
                  </div>
                  
                </div> -->
                <!-- <div class="col-md-7 eq-box-md eq-no-panel"> -->
                <div class="col-md-8 eq-box-md eq-no-panel col-md-offset-2">
                  <!-- Main Form Wizard -->
                  <!--===================================================-->
                  <div id="demo-main-wz">
            
                    <!--nav-->
                    <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#profile">
                          <span class="icon-wrap icon-wrap-xs bg-danger"><i class="fa fa-info"></i></span>
                          <p class="text-thin">Profile</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#tech_strength">
                          <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-code"></i></span>
                          <p class="text-thin">Technical Strength</p>
                        </a>
                      </li>
                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#skills">
                          <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-code"></i></span>
                          <p class="text-thin">Skills</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#work_exp">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-briefcase"></i></span>
                          <p class="text-thin">Work Experience</p>
                        </a>
                      </li>
                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#education">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-book"></i></span>
                          <p class="text-thin">Education</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#projects">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-book"></i></span>
                          <p class="text-thin">Projects</p>
                        </a>
                      </li>

                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#finish">
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
                    <form class="form-horizontal">
                      <div class="panel-body">
                        <div class="tab-content">
            
                          <!--First tab-->
                          <div id="profile" class="tab-pane">
                            <form action="<?= $baseUrl ?>setting/updateUserInfo" class="form-horizontal" method="POST" onSubmit="return (validateUpdateProfile());">

                              <div class="form-group">

                                <label class="col-md-3 control-label">First Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="first_name" id= "first_name" class="form-control" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Last Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="last_name"  id= "last_name" class="form-control" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Contact Number</label>

                                <div class="col-md-7">
                                  <input type="text" name="phone" id="phone" class="form-control" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Current Living Place</label>

                                <div class="col-md-7">
                                  <input type="text" name="living_place" id="living_place" class="form-control" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">About You</label>

                                <div class="col-md-7">
                                  <textarea name="about_user" id="about_user" rows="6" class="form-control"></textarea>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">
                                <div class="col-md-7 col-md-push-3">
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                  &nbsp;
                                  <button type="reset" class="btn btn-default">Cancel</button>
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->

                            </form> <!--End Form user basic profile-->
                          </div> <!-- End First tab-->
            
                          <!--Second tab-->
                          <div id="tech_strength" class="tab-pane fade">
                            
                            <form action="<?= $baseUrl ?>setting/updateTechStrength" class="form-horizontal" method="POST" onSubmit="return (validateUpdateTechStrength());">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Technical Strength</label>
                              
                                <div class="col-md-7">
                                  <input type="text" name="tech_strength" id="tech_strength" value="" class="form-control"/>
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->

                              <div class="form-group">
                                <div class="col-md-7 col-md-push-3">
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                  &nbsp;
                                  <button type="reset" class="btn btn-default">Cancel</button>
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->
                            
                            </form>

                          </div> <!--End Second tab-->
                          
                          <!--Third tab-->
                          <div id="skills" class="tab-pane fade">
                            <div class="row">                      
                              <div class="col-md-6">
                                <select id="demo-cs-multiselect" data-placeholder="Choose a Skill..." multiple tabindex="4">
                                  <?php foreach ($allSkills as $skillName) { ?>
                                    <option value="<?= $skillName -> getId() ?>" id ="skill_<?= $skillName -> getId() ?>"><?= $skillName -> getName() ?></option>  
                                  <?php } ?>
                                </select>
                                <button type="submit" id="skills" class="btn btn-primary" onclick="return (validateUpdateSkills());">Add Skills</button>
                              </div>
                            </div>
                          </div> <!--End Third tab-->
                          
                          <!--Fourth tab-->
                          <div id="work_exp" class="tab-pane">
                            <form class="form-horizontal"  onSubmit="return (validateUpdateWorkExp());">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Company Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="company_name" id="company_name" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">

                                <label class="col-md-3 control-label">Designation</label>

                                <div class="col-md-7">
                                  <input type="text" name="designation" id="designation" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Duration</label>

                                <div class="col-md-7">

                                  <div id="demo-dp-range">
                                    <div id="datepicker" class="input-daterange input-group">
                                      <input type="text" name="from" id="work_from" class="form-control"  placeholder="YYY-MM-DD"/>
                                      <span class="input-group-addon">to</span>
                                      <input type="text" name="to" id="work_to" class="form-control"  placeholder="YYY-MM-DD"/>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- /.form-group -->

                              <div class="form-group">
                                <div class="col-md-7 col-md-push-3">
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                  &nbsp;
                                  <button type="reset" class="btn btn-default">Cancel</button>
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->

                            </form>
                          </div> <!--End Fourth tab-->
            
                          <!--Fifth tab-->
                          <div id="education" class="tab-pane">
                            <form action="<?= $baseUrl ?>setting/updateEducation" class="form-horizontal" method="POST" onSubmit="return (validateUpdateEducation());">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Institute Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="institute" id="institute" value="" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">

                                <label class="col-md-3 control-label">Name of Degree</label>

                                <div class="col-md-7">
                                  <input type="text" name="degree" id="degree" value="" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              <div class="form-group">

                                <label class="col-md-3 control-label">Branch Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="branch" id="branch" value="" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Duration</label>

                                <div class="col-md-7">

                                  <div id="demo-dp-range">
                                    <div id="datepicker" class="input-daterange input-group">
                                      <input type="text" name="from" id="edu_from" value="" class="form-control" placeholder="YYYY"/>
                                      <span class="input-group-addon">to</span>
                                      <input type="text" name="to" id="edu_to" value="" class="form-control" placeholder="YYYY"/>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- /.form-group -->


                              <div class="form-group">
                                <div class="col-md-7 col-md-push-3">
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                  &nbsp;
                                  <button type="reset" class="btn btn-default">Cancel</button>
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->

                            </form>
                          </div> <!--End Fifth tab-->


                          <!--Sixth tab-->
                          <div id="projects" class="tab-pane">
                            <form class="form-horizontal" onSubmit="return (validateCreateProject());">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Title</label>

                                <div class="col-md-7">
                                  <input type="text" id ="title" class="form-control" placeholder="Title" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Used Technical Skills</label>

                                <div class="col-md-7">
                                  <input type="text" id="tech_skills" class="form-control" placeholder="Used Technical Skills..." />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Your Role</label>

                                <div class="col-md-7">
                                  <input type="text" id="my_role" class="form-control" placeholder="Specify Your Role" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Team Size</label>
                                <div class="col-md-7">
                                  <input type="integer" id="team_size" class="form-control" placeholder="Team Size" />
                                </div>

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Duration</label>
                                <div class="col-md-7">
                                  <div id="demo-dp-range">
                                    <div class="input-daterange input-group" id="datepicker">
                                      <input type="text" class="form-control" name="start" id="start"/>
                                      <span class="input-group-addon">To</span>
                                      <input type="text" class="form-control" name="end" id="end" />
                                    </div>
                                  </div>
                                </div>

                              </div> <!-- /.form-group -->

                              <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-7">
                                 
                                  <textarea class="form-control share-widget-textarea" id = "description" rows="10" placeholder="Share what you've been up to..." tabindex="1"></textarea>

                                  <div class="share-widget-actions">
                                    <div class=" pull-left">
                                      <div class="col-md-6">
                                       
                                        <select class="selectpicker" name="type" data-live-search="true" data-width="100%" id= "type" >    
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
                                </div>
                              </div>
                            </form>
                          </div> <!--End Sixth tab-->
                          
                          <!--Seventh tab-->
                          <div id="finish" class="tab-pane">
                          </div>
                        </div><!--End Seventh tab-->
                      </div>
            
            
                      <!--Footer button-->
                      <div class="pull-right pad-all">
                        <button type="button" class="previous btn btn-primary">Previous</button>
                        <button type="button" class="next btn btn-primary">Next</button>
                        <button type="button" class="finish btn btn-success" disabled>Finish</button>
                      </div>
            
                    </form>
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
    
</body>
</html>

