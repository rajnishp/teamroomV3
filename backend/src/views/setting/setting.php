<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Collap &middot; Settings</title>

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

            <div class="col-md-10 col-lg-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">

                <div class="panel">
          
                  <!-- Panel heading -->
                  <div class="panel-heading">
                    <div class="panel-control">
                      <ul class="nav nav-tabs">
                        <li class="active">
                          <a data-toggle="tab" href="#tabs-profile"> <i class="fa fa-user"></i>
                            Profile Setting
                          </a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#tabs-password"><i class="fa fa-lock"></i> 
                            Change Password
                          </a>
                        </li>
                      </ul>
                    </div>
                    <h3 class="panel-title">Profile Setting</h3>
                  </div>
            
                  <!-- Panel body -->
                  
                  <div class="panel-body">
           
                    <div class="tab-content">
          
                      <!--USer Profile Starts-->
                      <!--===================================================-->
           
                      <div id="tabs-profile" class="tab-pane fade active in">
                        
                        <div class="heading-block">
                          <h3>
                            Update Resume
                          </h3>
                        </div> <!-- /.heading-block -->

                        <form action="#" class="form-horizontal" method="POST">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Upload Resume</label>
                            <div class="col-md-9">
                              <span class="pull-left btn btn-default btn-file">
                              Browse... <input type="file" id="resume" name="resume">
                              </span>
                            </div>
                          </div>
                        </form>

                        <div class="heading-block">
                          <h3>
                            Update Profile Picture
                          </h3>
                        </div> <!-- /.heading-block -->

                        <form action="profile/updatePic" class="form-horizontal" method="POST">

                          <div class="form-group">

                            <label class="col-md-3 control-label">Avatar</label>

                            <div class="col-md-7">

                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="max-width: 200px;">
                                  
                                  <img id="target" alt="Avatar" src="uploads/profilePictures/<?= $_SESSION['username'] ?>.jpg" >
                                </div>
                                <div>

                                <input id="src" type="file"/> 
                                  
                                </div>
                              </div> <!-- /.fileupload -->

                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->

                        </form>

                        <div class="heading-block">
                          <h3>
                            Social Link Urls
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div class="social_links">
                          <?php 
                            if ($userSocialLinks) { ?>

                              <form class="form-horizontal"  onsubmit="return (validateUpdateSocialLink(<?= $userSocialLinks->getId()?>));">

                                <div class="form-group">

                                  <label class="col-md-3 control-label">Facebook Link</label>

                                  <div class="col-md-7">
                                    <input type="url" name="facebook_url" id="facebook_url_<?= $userSocialLinks->getId() ?>" value="<?= $userSocialLinks->getFbLink()?>" class="form-control"/>
                                  </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                  <label class="col-md-3 control-label">Twitter Link</label>

                                  <div class="col-md-7">
                                    <input type="url" name="twitter_url" id="twitter_url_<?= $userSocialLinks->getId() ?>" value="<?= $userSocialLinks->getTwitterLink() ?>" class="form-control"/>
                                  </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                  <label class="col-md-3 control-label">LinkedIn Link</label>

                                  <div class="col-md-7">
                                    <input type="url" name="likedin_url" id="likedin_url_<?= $userSocialLinks->getId() ?>" value="<?= $userSocialLinks->getLinkedinLink()?>" class="form-control"/>
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
                          <?php } else { ?>
                              <form class="form-horizontal"  onsubmit="return (validateUpdateSocialLink());">

                                <div class="form-group">

                                  <label class="col-md-3 control-label">Facebook Link</label>

                                  <div class="col-md-7">
                                    <input type="url" name="facebook_url" id="facebook_url" class="form-control"/>
                                  </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                  <label class="col-md-3 control-label">Twitter Link</label>

                                  <div class="col-md-7">
                                    <input type="url" name="twitter_url" id="twitter_url" class="form-control"/>
                                  </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                  <label class="col-md-3 control-label">LinkedIn Link</label>

                                  <div class="col-md-7">
                                    <input type="url" name="likedin_url" id="likedin_url" class="form-control"/>
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
                          <?php } ?>
                        </div> <!-- /.social_links -->

                        <div class="heading-block">
                          <h3>
                            Edit Information
                          </h3>
                        </div> <!-- /.heading-block -->

                        <form action="<?= $baseUrl ?>setting/updateUserInfo" class="form-horizontal" method="POST" onSubmit="return (validateUpdateProfile());">

                          <div class="form-group">

                            <label class="col-md-3 control-label">Username</label>

                            <div class="col-md-7">
                              <input type="text" name="user_name" id="user_name" value="<?= ucfirst($userProfile->getUsername())?>" class="form-control" disabled />
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->


                          <div class="form-group">

                            <label class="col-md-3 control-label">First Name</label>

                            <div class="col-md-7">
                              <input type="text" name="first_name" id= "first_name" value="<?= ucfirst($userProfile->getFirstName() )?>" class="form-control" />
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->



                          <div class="form-group">

                            <label class="col-md-3 control-label">Last Name</label>

                            <div class="col-md-7">
                              <input type="text" name="last_name"  id= "last_name" value="<?= ucfirst($userProfile->getLastName() )?>" class="form-control" />
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->

                          <div class="form-group">

                            <label class="col-md-3 control-label">Contact Number</label>

                            <div class="col-md-7">
                              <input type="text" name="phone" id="phone" value="<?= ucfirst($userProfile->getPhone() )?>" class="form-control" />
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->

                          <div class="form-group">

                            <label class="col-md-3 control-label">Current Living Place</label>

                            <div class="col-md-7">
                              <input type="text" name="living_place" id="living_place" value="<?= ucfirst($userProfile->getLivingTown() )?>" class="form-control" />
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->



                          <div class="form-group">

                            <label class="col-md-3 control-label">Email Address</label>

                            <div class="col-md-7">
                              <input type="text" name="email_address" value="<?= ucfirst($userProfile->getEmail() )?>" class="form-control" disabled/>
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->


                          <div class="form-group">

                            <label class="col-md-3 control-label">About You</label>

                            <div class="col-md-7">
                              <textarea name="about_user" id="about_user" rows="6" class="form-control"><?= $userProfile -> getAboutUser() ?></textarea>
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

                        <div class="heading-block">
                          <h3>
                            Add More Skills
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div class="form-horizontal">
                          <div class="form-group">

                            <label class="col-md-3 control-label">Update Skills </label>

                            <div class="col-md-7">
                              <div id="skills_display_div">
                                <?php foreach($userSkills as $skill ) { ?>
                                  <span class="btn btn-secondary btn-sm"> <?= $skill -> getName() ?> </span>
                                <?php } ?>
                              </div> <!-- /.list-group -->
                              <hr class="spacer-sm">
                              <select id="demo-cs-multiselect" data-placeholder="Choose a Skill..." multiple tabindex="4">
                                <?php
                                  foreach ($allSkills as $skillName) { ?>
                                  <option value="<?= $skillName -> getId() ?>" id ="skill_<?= $skillName -> getId() ?>" name="<?= $skillName -> getName() ?>"><?= $skillName -> getName() ?></option>  
                                <?php } ?>
                              </select>
                              <input type="text" name = "new_skill" id="new_skill" class="form-control" placeholder="Add new Skill" data-role="tagsinput">
                              <small class="help-block">Enter new Skill seperated by comma (,)...</small>
                              <button type="submit" id="skills" class="btn btn-primary" onclick="return (validateUpdateSkills());">Add Skills</button>

                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->
                        </div>

                        <div class="heading-block">
                          <h3>
                            Edit Activities and Achievement
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div id="tech_strength_div">

                          <?php foreach ($userTechStrength as $key => $techStrength) { ?>

                            <form action="<?= $baseUrl ?>setting/updateTechStrength" class="form-horizontal" method="POST" onSubmit="return (validateUpdateTechStrength(<?= $techStrength->getId() ?>));">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Activities/Achievement</label>
                              
                                <div class="col-md-7">
                                  <input type="hidden" name="id" value="<?= $techStrength->getId() ?>" class="form-control"/>
                                  <input type="text" name="tech_strength" id="tech_strength_<?= $techStrength->getId() ?>" value="<?= ucfirst($techStrength -> getStrength()) ?>" class="form-control"/>
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
                
                          <?php } ?>

                          <form action="<?= $baseUrl ?>setting/updateTechStrength" id= "tech_strength_form" class="form-horizontal" method="POST" onSubmit="return (validateUpdateTechStrength());">

                            <div class="form-group">

                              <label class="col-md-3 control-label">Activities/Achievement</label>
                            
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

                        </div> <!-- /.id tech_strength_div -->

                        <div class="heading-block">
                          <h3>
                            Edit Work Experience
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div id="work_exp_div">
                          
                          <?php foreach ($userWorkExperience as $key => $workExperience) { ?>
                            
                            <form action="<?= $baseUrl ?>setting/updateWorkExp" class="form-horizontal" method="POST" onSubmit="return (validateUpdateWorkExp(<?= $workExperience->getId() ?>));">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Company Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="company_name" id="company_name_<?= $workExperience->getId() ?>" value="<?= ucfirst($workExperience -> getCompanyName()) ?>" class="form-control"/>
                                  <input type="hidden" name="id" value="<?= $workExperience -> getId() ?>" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">

                                <label class="col-md-3 control-label">Designation</label>

                                <div class="col-md-7">
                                  <input type="text" name="designation" id="designation_<?= $workExperience->getId() ?>" value="<?= ucfirst($workExperience -> getDesignation()) ?>" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">

                                <label class="col-md-3 control-label">Duration</label>

                                <div class="col-md-7">

                                  <div id="demo-dp-range">
                                    <div id="datepicker" class="input-daterange input-group">
                                      <input type="text" name="from" id="work_from_<?= $workExperience->getId() ?>" value="<?= ucfirst($workExperience -> getFrom()) ?>" class="form-control" placeholder="YYYY-MM-DD"/>
                                      <span class="input-group-addon">to</span>
                                      <input type="text" name="to" id="work_to_<?= $workExperience->getId() ?>" value="<?= ucfirst($workExperience -> getTo()) ?>" class="form-control" placeholder="YYYY-MM-DD"/>
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
                          <?php } ?>
                          
                          <form class="form-horizontal" id ="work_exp_form" onSubmit="return (validateUpdateWorkExp());">

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

                        </div> <!-- /.id work_exp_div -->

                        <div class="heading-block">
                          <h3>
                            Edit Education
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div id="education_div">
                          <?php foreach ($userEducation as $key1 => $education) { ?>
                            <form action="<?= $baseUrl ?>setting/updateEducation" class="form-horizontal" method = "POST" onSubmit="return (validateUpdateEducation(<?= $education -> getId() ?>));">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Institute Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="institute" id="institute_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getInstitute()) ?>" class="form-control"/>
                                  <input type="hidden" name="id" value="<?= ucfirst($education -> getId()) ?>" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">

                                <label class="col-md-3 control-label">Name of Degree</label>

                                <div class="col-md-7">
                                  <input type="text" name="degree" id="degree_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getDegree()) ?>" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              <div class="form-group">

                                <label class="col-md-3 control-label">Branch Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="branch" id="branch_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getBranch()) ?>" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">Duration</label>

                                <div class="col-md-7">

                                  <div id="">
                                    <div id="" class="input-daterange input-group">
                                      <input type="text" name="from" id="edu_from_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getFrom()) ?>" class="form-control" placeholder="YYYY"/>
                                      <span class="input-group-addon">to</span>
                                      <input type="text" name="to" id="edu_to_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getTo()) ?>" class="form-control" placeholder="YYYY"/>
                                    </div>
                                  </div>
                                </div>
                              </div>  <!-- /.form-group -->

                              <div class="form-group">
                                <div class="col-md-7 col-md-push-3">
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                  &nbsp;
                                  <button type="reset" class="btn btn-default">Cancel</button>
                                </div> <!-- /.col -->
                              </div> <!-- /.form-group -->

                            </form>
                          <?php } ?>

                          <form action="<?= $baseUrl ?>setting/updateEducation" class="form-horizontal" id="education_form" method="POST" onSubmit="return (validateUpdateEducation());">

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
                              <div class="col-md-7 col-md-push-3">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                &nbsp;
                                <button type="reset" class="btn btn-default">Cancel</button>
                              </div> <!-- /.col -->
                            </div> <!-- /.form-group -->

                          </form>
                        </div>  <!-- /.education_div -->

                        <div class="heading-block">
                          <h3>
                          Edit Job Preferences
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div class="form-horizontal">
                          
                          <div class="form-group">

                              <label class="col-md-3 control-label">Preferred Locations <br/>(First Location is first <b>Preference</b>) </label>

                              <div class="col-md-7">
                                <div class="">
                                  <?php foreach($userPreferredJobLocations as $locationName ) { ?>
                                    <span class="btn btn-secondary btn-sm"> <?= $locationName -> getLocationName() ?> </span>
                                  <?php } ?>
                                </div> <!-- /.list-group -->
                                
                                <select id="demo-cs-multiselect1" data-placeholder="Choose Location by Preference..." multiple tabindex="4">
                                  <?php foreach ($allLocations as $availablelocation) { ?>
                                    <option value="<?= $availablelocation -> getId() ?>" id ="location_<?= $availablelocation -> getId() ?>"><?= $availablelocation-> getLocationName() ?></option>  
                                  <?php } ?>
                                </select>

                                <button type="submit" id="locations" class="btn btn-primary" onclick="return (validateUpdateLocations());">Add Locations</button>

                              </div> <!-- /.col -->

                          </div> <!-- /.form-group -->
                        
                        </div>
                        
                        <!-- /.form edit job preferences --> 
                        <?php 
                            if ($userJobPreference) {
                              foreach ($userJobPreference as $key => $userJobPreference) { ?>
                                <div class="form-horizontal">
                            
                            <div class="form-group">

                              <label class="col-md-3 control-label">Current CTC </label>

                              <div class="col-md-7">

                                <input type="text" name="current_ctc" id="current_ctc" value="<?= $userJobPreference -> getCurrentCtc() ?>" class="form-control"/>
                                <input type="hidden" name="id" value="<?= $userJobPreference -> getId() ?>" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->

                            <div class="form-group">

                              <label class="col-md-3 control-label">Expected CTC </label>

                              <div class="col-md-7">
                                <input type="text" name="expected_ctc" id="expected_ctc" value="<?= $userJobPreference -> getExpectedCtc() ?>" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->

                            <div class="form-group">

                              <label class="col-md-3 control-label">Notice Period </label>

                              <div class="col-md-7">
                                <input type="text" name="notice_period" id="notice_period" value="<?= $userJobPreference -> getNoticePeriod() ?>" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->
                            

                            <div class="form-group">
                              <div class="col-md-7 col-md-push-3">
                                <button type="submit" class="btn btn-primary" onclick="return (validateUpdateJobPreference(<?= $userJobPreference -> getId() ?>));">Save Changes</button>
                                &nbsp;
                                <button type="reset" class="btn btn-default">Cancel</button>
                              </div> <!-- /.col -->
                            </div> <!-- /.form-group -->
                                </div>

                        <?php } } 
                            else { ?>

                              <div class="form-horizontal">

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
                                  <div class="col-md-7 col-md-push-3">
                                    <button type="submit" class="btn btn-primary" onclick="return (validateUpdateJobPreference());">Save Changes</button>
                                    &nbsp;
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                  </div> <!-- /.col -->
                                </div> <!-- /.form-group -->

                              </div>
                        <?php } ?>

                      </div> <!-- /.tab-pane-profile -->

                      <!--Change Password-->
                      <!--===================================================-->
           

                      <div id="tabs-password" class="tab-pane fade in" >

                        <div class="heading-block">
                          <h3>
                            Change Password
                          </h3>
                        </div> <!-- /.heading-block -->

                        <p>Keep change your password.</p>

                        <br><br>

                        <div class="form-horizontal">

                          <div class="form-group">

                            <label class="col-md-3 control-label">Old Password</label>

                            <div class="col-md-7">
                              <input type="password" name="old_password" id="old_password" class="form-control" />
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->

                          <hr>

                          <div class="form-group">

                            <label class="col-md-3 control-label">New Password</label>

                            <div class="col-md-7">
                              <input type="password" name="new_password_1" id="new_password_1" class="form-control" />
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->


                          <div class="form-group">

                            <label class="col-md-3 control-label">New Password Confirm</label>

                            <div class="col-md-7">
                              <input type="password" name="new_password_2" id="new_password_2" class="form-control" />
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->


                          <div class="form-group">

                            <div class="col-md-7 col-md-push-3">
                              <button type="submit" class="btn btn-primary" onclick="return (validateUpdatePassword());">Save Changes</button>
                              &nbsp;
                              <button type="reset" class="btn btn-default">Cancel</button>
                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->

                        </form>

                      </div> <!-- /.tab-password -->

                    </div> <!-- /.tab-content -->

                  </div> <!-- /.panel-body -->

                </div> <!-- /.panel -->


            </div> <!-- /.layout -->

          </div> <!-- /.row -->
        
        </div> <!-- .content-container -->

        <?php require_once 'views/sidebar/sidebar_button.php'; ?>

      </div> <!-- /.boxed -->
    
    </div> <!-- /.container -->

    <?php require_once 'views/footer/footer.php'; ?>
    
    <?php include_once "static/js/updateUserProfileSettingFunctions.php"; ?>

    
<script type="text/javascript">
  function uploadProfilePic(){
            //var _progress = document.getElementById('_progress'); 
            if(src.files.length === 0){
              
              return false ;
            }
            else if (src.files['0'].size > 2015000) {
             
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-check fa-lg",
                    title:"File Upload Error",
                    message:"File size is too large",
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
              
              return false ;
            } 
            else {
              var data = new FormData();
              data.append('file', src.files[0]);
              var request = new XMLHttpRequest();
              var responceTx = "";
              request.onreadystatechange = function(){
                if(request.readyState == 4){
                  responceTx = request.response;
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-check fa-lg",
                    title:"Profile Pic Change Successfully",
                    message:responceTx,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                }
              };
            }
            request.upload.addEventListener('progress', function(e){
              //_progress.style.width = Math.ceil(e.loaded/e.total) * 100 + '%';
            }, false);  
            request.open('POST', '<?= $baseUrl ?>fileUpload/profilePic');
            request.send(data);
          }

  function showImage() {
    var src = document.getElementById("src");
    var target = document.getElementById("target");
  var fr=new FileReader();
  // when image is loaded, set the src of the image where you want to display it
  fr.onload = function(e) { target.src = this.result; };
  src.addEventListener("change",function() {
    // fill fr with image data    
    fr.readAsDataURL(src.files[0]);
    uploadProfilePic();
  });
}
showImage();

</script>  
  </body>
</html>
