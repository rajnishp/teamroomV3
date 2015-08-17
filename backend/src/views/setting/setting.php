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

                        <?php require_once 'views/forms/profilePicture.php'; ?>

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

                        <form class="form-horizontal" onSubmit="return (validateUpdateProfile());">

                          <?php require_once 'views/forms/basicInformation.php'; ?>

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

                        <?php require_once 'views/forms/addSkills.php'; ?>                        

                        <div class="heading-block">
                          <h3>
                            Edit Activities and Achievement
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div id="tech_strength_div">

                          <?php require_once 'views/forms/techStrength.php'; ?>                          

                        </div> <!-- /.id tech_strength_div -->

                        <div class="heading-block">
                          <h3>
                            Edit Work Experience
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div id="work_exp_div">
                          
                          <?php require_once 'views/forms/workExperience.php'; ?>

                        </div> <!-- /.id work_exp_div -->

                        <div class="heading-block">
                          <h3>
                            Edit Education
                          </h3>
                        </div> <!-- /.heading-block -->

                        <div id="education_div">
                          
                          <?php require_once 'views/forms/education.php'; ?>

                        </div>  <!-- /.education_div -->

                        <div class="heading-block">
                          <h3>
                          Edit Job Preferences
                          </h3>
                          <small class="help-block">It will be private, only shown to Recruiters on demand.</small>
                        </div> <!-- /.heading-block -->

                        <?php require_once 'views/forms/jobPreferenceInfo.php'; ?>

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

        <?php //require_once 'views/sidebar/sidebar_button.php'; ?>

      </div> <!-- /.boxed -->
    
    </div> <!-- /.container -->

    <?php require_once 'views/footer/footer.php'; ?>
    
    <?php include_once "static/js/updateUserProfileSettingFunctions.php"; ?>

    

  </body>
</html>
