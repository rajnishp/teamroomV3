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
                            <div class="form-horizontal">

                              <div class="form-group">

                                <label class="col-md-3 control-label">First Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="first_name" id= "first_name"  value="<?= $userProfile->getFirstName() !=null ? $userProfile->getFirstName() : null ?>" placeholder="First Name" class="form-control" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Last Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="last_name"  id= "last_name"  value="<?= $userProfile->getLastName() !=null ? $userProfile->getLastName() : null ?>" placeholder="Last Name"  class="form-control" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              <div class="form-group">

                                <label class="col-md-3 control-label">Want to Collaborate As</label>

                                <div class="col-md-7">
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Engineer
                                    <input type="checkbox" id="engineer" checked="" value="Engineer" >
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Project Manager
                                    <input type="checkbox"  id="project_manager" checked="" value="ProjectManager">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    UX Designer
                                    <input type="checkbox" id="ux_designer" checked=""  value="UxDesigner">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Doctor
                                    <input type="checkbox" id="doctor" checked=""  value="Doctor">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Research Scholar
                                    <input type="checkbox" id="research_scholar" checked=""  value="ResearchScholar">
                                    
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    
                                    <label class="form-checkbox form-icon active form-text">
                                    Lawyer
                                    <input type="checkbox" id="lawyer" checked=""  value="Lawyer">
                                    
                                    </label>
                                    
                                    <small class="help-block">Best suited according to your knowledge domain, you can choose multiples</small>

                                  </div>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                             

                              <div class="form-group">

                                <label class="col-md-3 control-label">Contact Number</label>

                                <div class="col-md-7">
                                  <input type="text" name="phone" id="phone"  value="<?= $userProfile->getPhone() !=null ? $userProfile->getPhone() : null ?>" placeholder="Contact No" class="form-control" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Current Living Place</label>

                                <div class="col-md-7">
                                  <input type="text" name="living_place" id="living_place"  value="<?= $userProfile->getLivingTown() !=null ? $userProfile->getLivingTown() : null ?>" placeholder="Current Living Town" class="form-control" />
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">About You</label>

                                <div class="col-md-7">
                                  <textarea name="about_user" id="about_user" rows="6" class="form-control" placeholder="Useful Information about You......"><?= $userProfile->getAboutUser() !=null ? $userProfile->getAboutUser() : null ?></textarea>
                                  <small class="help-block">Ex: I am a person with a positive attitude, worked at Collap..</small>                        
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">
      
                                <div class="pull-right pad-all">

                                <!--                                   

                                  <button type="submit" class="btn btn-success" onclick="return (validateUpdateProfile());">Save Changes</button>
                                -->
                                   <button type="button" class="next btn btn-primary" id='validateUpdateProfile'>Save and Next</button>
                                </div> <!-- /.col -->
      
                              </div> <!-- /.form-group -->

                            </div> <!--End Form user basic profile-->
                          </div> <!-- End First tab-->
            
                          <!--Second tab-->
                          <div id="tab_tech_strength" class="tab-pane fade">
                            <div id="tech_strength_div">

                              <div class="form-horizontal">
                                <div class="form-group">

                                  <label class="col-md-3 control-label">Add Skills</label>

                                  <div class="col-md-7">                                  
                                    <select id="demo-cs-multiselect" name="skills" data-placeholder="Choose a Skill..." multiple tabindex="4">
                                      <?php foreach ($allSkills as $skillName) { ?>
                                        <option value="<?= $skillName -> getId() ?>" id ="skill_<?= $skillName -> getId() ?>"><?= $skillName -> getName() ?></option>  
                                      <?php } ?>
                                    </select>
                                    
                                    <small class="help-block">Ex: C, Cpp, PHP, JAVA</small>                                

                                    <button type="submit" id="skills" class="btn btn-success" onclick="return (validateUpdateSkills());">Add Skills</button>

                                  </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                              </div> <!-- /.form-horizontal -->

                            
                              <div class="form-horizontal" id= "tech_strength_form">

                                <div class="form-group">
                                 
                                  <label class="col-md-3 control-label">Extra Activities and Achievement</label>
                                
                                  <div class="col-md-7">
                                    <input type="text" name="tech_strength" id="tech_strength" value="" class="form-control"/>
                                  
                                    <small class="help-block">Completed course on ETHICAL HACKING from XYZ...</small>                                
                                    <small class="help-block">Winner of xyz Hackathon with Idea ------ </small>                                
                                  
                                  </div> <!-- /.col -->
                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                  <label class="col-md-3 control-label"></label>
                                
                                  <div class="col-md-7">
                                  
                                    <button type="submit" class="btn btn-success" onclick="return (validateUpdateTechStrength());">Add More</button>

                                  </div> <!-- /.col -->
                                </div> <!-- /.form-group -->

                              </div>
                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>

                              <button type="button" class="next btn btn-primary" id='validateUpdateTechStrength'>Next</button>
                            </div>

                          </div> <!--End Second tab-->
                          
                        
                          <!--Third tab-->
                          <div id="tab_work_exp" class="tab-pane">
                            
                            <div id="work_exp_div">
                              
                              <div class="form-horizontal" <div id="work_exp_form">

                                <div class="form-group">

                                  <label class="col-md-3 control-label">Company Name</label>

                                  <div class="col-md-7">
                                    <input type="text" name="company_name" id="company_name" class="form-control"/>
                                    <small class="help-block">Ex: Example Pvt. Ltd</small>

                                  </div> <!-- /.col -->

                                </div> <!-- /.form-group -->
                                
                                <div class="form-group">

                                  <label class="col-md-3 control-label">Designation</label>

                                  <div class="col-md-7">
                                    <input type="text" name="designation" id="designation" class="form-control"/>
                                    
                                    <small class="help-block">Ex: Software Developer</small>

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
                                    
                                    <small class="help-block">Working Duration like August 01, 2014 to July 30, 2015</small>

                                  </div>
                                </div> <!-- /.form-group -->


                                <div class="form-group">

                                  <label class="col-md-3 control-label"></label>
                                
                                  <div class="col-md-7">
                                  
                                    <button type="submit" class="btn btn-success" onclick ="return (validateUpdateWorkExp());">Add More</button>

                                  </div> <!-- /.col -->
                                </div> <!-- /.form-group -->

                              </div>

                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>

                              <button type="button" class="next btn btn-primary">Next</button>
                            </div>

                          </div> <!--End Third tab-->
                          
                          <!--Fourth tab-->
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
                                  
                                  <small class="help-block">Preferred Job Location: Bangalore, Delhi/NCR ( First location will be first prefernece )</small>

                                  <button type="submit" id="locations" class="btn btn-success" onclick="return (validateUpdateLocations());">Add Locations</button>

                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                            
                              <div class="form-group">

                                <label class="col-md-3 control-label">Current CTC </label>

                                <div class="col-md-7">
                                  <input type="text" name="current_ctc" id="current_ctc" placeholder ="Lacs/Annum" class="form-control"/>
                                
                                  <small class="help-block"> Ex: 6 LPA </small>
                                
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Expected CTC </label>

                                <div class="col-md-7">
                                  <input type="text" name="expected_ctc" id="expected_ctc" placeholder ="Lacs/Annum" class="form-control"/>
                                
                                  <small class="help-block"> Ex: 9 LPA </small>
                                
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Notice Period </label>

                                <div class="col-md-7">
                                  <input type="text" name="notice_period" id="notice_period" placeholder ="Enter Months" class="form-control"/>
                                 
                                  <small class="help-block"> Ex: 2 Months </small>
                                  
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">
                                <div class="pull-right pad-all">

                                  <!--                                   
                                  <button type="submit" class="btn btn-success" onclick="return (validateUpdateJobPreference());">Save Changes</button>
                                 -->
                                  <button type="button" class="previous btn btn-info">Previous</button>

                                  <button type="button" class="next btn btn-primary">Next</button>
    
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->
                            </div>
                          
                          </div> <!--End Fourth tab-->
            
                          
                          <!--Fifth tab-->
                          <div id="tab_education" class="tab-pane">
                            <div id="education_div">
                              <div class="form-horizontal"  id="education_form">

                                <div class="form-group">

                                  <label class="col-md-3 control-label">Institute Name</label>

                                  <div class="col-md-7">
                                    <input type="text" name="institute" id="institute" value="" class="form-control"/>
                                    
                                    <small class="help-block"> Ex: Indian Institute of Technology Delhi </small>

                                  </div> <!-- /.col -->

                                </div> <!-- /.form-group -->
                                
                                <div class="form-group">

                                  <label class="col-md-3 control-label">Name of Degree</label>

                                  <div class="col-md-7">
                                    <input type="text" name="degree" id="degree" value="" class="form-control"/>
                                    
                                    <small class="help-block"> Ex: Bachelor of Engineering/Technology </small>

                                  </div> <!-- /.col -->

                                </div> <!-- /.form-group -->
                                <div class="form-group">

                                  <label class="col-md-3 control-label">Branch Name</label>

                                  <div class="col-md-7">
                                    <input type="text" name="branch" id="branch" value="" class="form-control"/>

                                    <small class="help-block"> Ex: Computer Science and Engineering </small>

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

                                    <small class="help-block"> Ex: Duration of Degree 2012 to 2014 </small>

                                  </div>
                                </div> <!-- /.form-group -->


                                <div class="form-group">

                                  <label class="col-md-3 control-label"></label>

                                  <div class="col-md-7">

                                    <button type="submit" class="btn btn-success" onclick="return (validateUpdateEducation());">Add More</button>

                                  </div>
                                </div> <!-- /.form-group -->

                              </div>
                            </div>

                            <div class="pull-right pad-all">

                              <button type="button" class="previous btn btn-info">Previous</button>

                              <button type="button" class="next btn btn-primary">Next</button>
                            </div>

                          </div> <!--End Fifth tab-->


                          <!--Sixth tab-->
                          <div id="tab_projects" class="tab-pane">
                            <div class="form-horizontal">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Title</label>

                                <div class="col-md-7">
                                  <input type="text" id ="title" class="form-control" placeholder="Title" />
                                  
                                  <small class="help-block"> Ubuntu Unity: deliver a consistent user experience for desktop and netbook users alike</small>

                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Used Technical Skills</label>

                                <div class="col-md-7">
                                  <input type="text" id="tech_skills" class="form-control" placeholder="Used Technical Skills..." />
                                  
                                  <small class="help-block"> C++, JavaScript, QML, Python, Vala</small>

                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Your Role</label>

                                <div class="col-md-7">
                                  <input type="text" id="my_role" class="form-control" placeholder="Specify Your Role" />
                                  
                                  <small class="help-block"> Like Architect or Frontend Developer with JavaScript</small>

                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Team Size</label>
                                <div class="col-md-7">
                                  <input type="integer" id="team_size" class="form-control" placeholder="Team Size" />

                                  <small class="help-block"> Total team Members: 1, 2, 3, 4, ....</small>

                                </div>

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Project Status</label>
                                <div class="col-md-5">
                                  <select class="selectpicker" name="status" data-width="100%" id= "status" >
                                    <option value='Ongoing' >Ongoing ( Still it is ongoing or you want to expend your idea )</option>
                                    <option value='Completed' >Completed ( If you have completed your project )</option>
                                    <option value='YetToStart' >Yet To Start ( Its good time to start, <i>Best Of Luck</i>)</option>
                                  </select>                  
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
                                  
                                  <small class="help-block"> When it started (August 01, 2014 ) to ended ( July 30, 2015 )</small>

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

                                  <small class="help-block"> Project Description with Introduction, Problem, Solution, Features ...</small>

                                </div>
                              </div>

                              <div class="pull-right pad-all">

                                <button type="submit" class="btn btn-success" onclick="return (validateCreateProject());">Add More</button>
                                <button type="button" class="previous btn btn-info">Previous</button>
                                <button type="button" class="next btn btn-primary">Next</button>
  
                              </div> <!-- /.col -->
                              
                            </div>
                      
                          </div> <!--End Sixth tab-->
                          
                          <!--Seventh tab-->
                          <div id="tab_join_projects" class="tab-pane">
                            <!--Recommended Join Projects-->
                            <?php  foreach ($this -> recommendedProjects as $project) { ?>
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

