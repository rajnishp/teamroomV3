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
            <h1 class="page-header text-overflow">Let's be ready to collaborate.</h1>

          </div>
          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <!--End page title-->

          <!--Page content-->
          <!--===================================================-->
          <div id="page-content">
            
            <div class="panel">
            <div class="row">
                 <div class="col-lg-8 col-md-8 eq-box-md text-center box-vmiddle-wrap bg-primary">
            
                   <div class="box-vmiddle pad-all">
                    <h3 class="text-thin">Provide as much as infomation you can, because it will help others to collaborate with you better. </h3>
                   
                  </div>
              </div>
              <div class="eq-height clearfix">

                  
                </div> 
                <!-- <div class="col-md-7 eq-box-md eq-no-panel"> -->
                <div class="col-md-8 eq-box-md eq-no-panel ">
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
                          <p class="text-thin">Technical Strength</p>
                        </a>
                      </li>
                      <li class="col-xs-1">
                        <a data-toggle="tab" href="#tab_skills">
                          <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-code"></i></span>
                          <p class="text-thin">Skills</p>
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
                            <div class="form-horizontal">

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

                                <label class="col-md-3 control-label">Want to Collaborate As</label>

                                <div class="col-md-7">
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Engineer
                                    <input type="checkbox" checked="">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Project Manager
                                    <input type="checkbox" checked="">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    UX Designer
                                    <input type="checkbox" checked="">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Doctor
                                    <input type="checkbox" checked="">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Research Scholar
                                    <input type="checkbox" checked="">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Lawyer
                                    <input type="checkbox" checked="">
                                    
                                    </label>
                                  </div>
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
      
                                <div class="pull-right pad-all">

                                  <button type="submit" class="btn btn-success" onclick="return (validateUpdateProfile());">Save Changes</button>

                                  <button type="button" class="next btn btn-primary">Next</button>
                                  
                                </div> <!-- /.col -->
      
                              </div> <!-- /.form-group -->

                            </div> <!--End Form user basic profile-->
                          </div> <!-- End First tab-->
            
                          <!--Second tab-->
                          <div id="tab_tech_strength" class="tab-pane fade">
                            
                            <div id="tech_strength_div">
                              <div class="form-horizontal" id= "tech_strength_form">

                                <div class="form-group">
                                 
                                  <label class="col-md-3 control-label">Technical Strength</label>
                                
                                  <div class="col-md-7">
                                    <input type="text" name="tech_strength" id="tech_strength" value="" class="form-control"/>
                                  
                                  </div> <!-- /.col -->
                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                  <label class="col-md-3 control-label"></label>
                                
                                  <div class="col-md-7">
                                  
                                    <button type="submit" class="btn btn-success" onclick="return (validateUpdateTechStrength());">Save Changes</button>

                                  </div> <!-- /.col -->
                                </div> <!-- /.form-group -->

                              </div>
                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>

                              <button type="button" class="next btn btn-primary">Next</button>
                            </div>

                          </div> <!--End Second tab-->
                          
                          <!--Third tab-->
                          <div id="tab_skills" class="tab-pane fade">
                            
                            <div class="form-horizontal">
                              <div class="form-group">

                                <label class="col-md-3 control-label">Add Skills</label>

                                <div class="col-md-7">                                  
                                  <select id="demo-cs-multiselect" data-placeholder="Choose a Skill..." multiple tabindex="4">
                                    <?php foreach ($allSkills as $skillName) { ?>
                                      <option value="<?= $skillName -> getId() ?>" id ="skill_<?= $skillName -> getId() ?>"><?= $skillName -> getName() ?></option>  
                                    <?php } ?>
                                  </select>

                                  <button type="submit" id="skills" class="btn btn-success" onclick="return (validateUpdateSkills());">Add Skills</button>

                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">
                                <div class="pull-right pad-all">

                                  <button type="button" class="previous btn btn-info">Previous</button>

                                  <button type="button" class="next btn btn-primary">Next</button>
    
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->

                            </div> <!-- /.form-horizontal -->

                          </div> <!--End Third tab-->
                          
                          <!--Fourth tab-->
                          <div id="tab_work_exp" class="tab-pane">
                            
                            <div id="work_exp_div">
                              
                              <div class="form-horizontal" <div id="work_exp_form">>

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

                                  <label class="col-md-3 control-label"></label>
                                
                                  <div class="col-md-7">
                                  
                                    <button type="submit" class="btn btn-success" onclick ="return (validateUpdateWorkExp());">Save Changes</button>

                                  </div> <!-- /.col -->
                                </div> <!-- /.form-group -->

                              </div>

                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>

                              <button type="button" class="next btn btn-primary">Next</button>
                            </div>

                          </div> <!--End Fourth tab-->
            
                          <!--Fifth tab-->
                          <div id="tab_job_preference" class="tab-pane">
                            
                            <div class="form-horizontal">
                              <div class="form-group">

                                <label class="col-md-3 control-label">Preferred Locations <br/>(First Location is first <b>Preference</b>) </label>

                                <div class="col-md-7">          
                                  <select id="demo-cs-multiselect1" data-placeholder="Choose Location by Preference..." multiple tabindex="4">
                                    <?php foreach ($allLocations as $availablelocation) { ?>
                                      <option value="<?= $availablelocation -> getId() ?>" id ="location_<?= $availablelocation -> getId() ?>"><?= $availablelocation-> getLocationName() ?></option>  
                                    <?php } ?>
                                  </select>

                                  <button type="submit" id="locations" class="btn btn-success" onclick="return (validateUpdateLocations());">Add Locations</button>

                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              
                                

                              <div class="form-group">

                                <label class="col-md-3 control-label">Current CTC </label>

                                <div class="col-md-7">
                                  <input type="text" name="current_ctc" id="current_ctc" placeholder ="Lacs/Annum" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Expected CTC </label>

                                <div class="col-md-7">
                                  <input type="text" name="expected_ctc" id="expected_ctc" placeholder ="Lacs/Annum" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Notice Period </label>

                                <div class="col-md-7">
                                  <input type="text" name="notice_period" id="notice_period" placeholder ="Enter Months" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">
                                <div class="pull-right pad-all">

                                  <button type="submit" class="btn btn-success" onclick="return (validateUpdateJobPreference());">Save Changes</button>

                                  <button type="button" class="previous btn btn-info">Previous</button>

                                  <button type="button" class="next btn btn-primary">Next</button>
    
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->
                            </div>
                          
                          </div> <!--End Fifth tab-->

                           <!--Sixth tab-->
                          <div id="tab_education" class="tab-pane">
                            <div id="education_div">
                              <div class="form-horizontal"  id="education_form">

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

                                    <div id="">
                                      <div id="" class="input-daterange input-group">
                                        <input type="text" name="from" id="edu_from" value="" class="form-control" placeholder="YYYY"/>
                                        <span class="input-group-addon">to</span>
                                        <input type="text" name="to" id="edu_to" value="" class="form-control" placeholder="YYYY"/>
                                      </div>
                                    </div>
                                  </div>
                                </div> <!-- /.form-group -->


                                <div class="form-group">

                                  <label class="col-md-3 control-label"></label>

                                  <div class="col-md-7">

                                    <button type="submit" class="btn btn-success" onclick="return (validateUpdateEducation());">Save Changes</button>

                                  </div>
                                </div> <!-- /.form-group -->

                              </div>
                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>

                              <button type="button" class="next btn btn-primary">Next</button>
                            </div>

                          </div> <!--End Sixth tab-->


                          <!--Seventh tab-->
                          <div id="tab_projects" class="tab-pane">
                            <div class="form-horizontal">

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

                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="pull-right pad-all">

                                <button type="submit" class="btn btn-success" onclick="return (validateCreateProject());">Save Changes</button>
                                <button type="button" class="previous btn btn-info">Previous</button>
                                <button type="button" class="next btn btn-primary">Next</button>
  
                              </div> <!-- /.col -->
                      
                            </div>
                      
                          </div> <!--End Seventh tab-->
                          
                          <!--Eight tab-->
                          <div id="tab_finish" class="tab-pane">
                            <div class="form-horizontal">
                              You have completed Your Profile. <br />

                              You can also edit/modify your profile on your profile setting page. <br />
                              Keep updating your profile for more chances to get call, Recruiters always preferred updated profile. <br />

                            </div>
                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>
    
                              <a href="<?= $baseUrl ?>" type="button" class="finish btn btn-success">Finish</a>
  
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

