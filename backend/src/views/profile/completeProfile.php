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
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#demo-main-tab1">
                          <span class="icon-wrap icon-wrap-xs bg-danger"><i class="fa fa-info"></i></span>
                          <p class="text-thin">Profile</p>
                        </a>
                      </li>
                      <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab2">
                          <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-code"></i></span>
                          <p class="text-thin">Technical Strength</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#demo-main-tab3">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-briefcase"></i></span>
                          <p class="text-thin">Work Experience</p>
                        </a>
                      </li>
                      <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab4">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-book"></i></span>
                          <p class="text-thin">Education</p>
                        </a>
                      </li>
                      <li class="col-xs-2">
                        <a data-toggle="tab" href="#demo-main-tab5">
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
                          <div id="demo-main-tab1" class="tab-pane">
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
                          <div id="demo-main-tab2" class="tab-pane fade">
                            
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
                          <div id="demo-main-tab3" class="tab-pane">
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
                          </div> <!--End Third tab-->
            
                          <!--Fourth tab-->
                          <div id="demo-main-tab4" class="tab-pane">
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
                          </div> <!--End Fourth tab-->

                          <!--Fourth tab-->
                          <div id="demo-main-tab5" class="tab-pane">
                          </div>
                        </div>
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

          <?php require_once 'views/sidebar/sidebar_button.php'; ?>

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->
        
      </div> <!-- /.boxed -->
    
    </div> <!-- /.container -->

    <?php require_once 'views/footer/footer.php'; ?>

</body>
</html>

