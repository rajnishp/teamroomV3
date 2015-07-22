<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Complete User Profile</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <?php include_once 'views/header/header.php'; ?>
  
</head>

<body style="background-color: #E7EBEE;">
  <div id="" class="effect mainnav-lg">
        
    <?php require_once 'views/navbar/main_navbar.php'; ?>

    <div class="boxed">

      <div id="">

        <div class="row" style="margin-top: 50px;">
          
          <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
            
            <div class="panel">

              <div class="eq-height clearfix">
                
                <div class="col-md-7 eq-box-md eq-no-panel">
            
                  <!-- Main Form Wizard -->
                  <!--===================================================-->
                  <div id="">
            
                    <!--nav-->
                    <ul class="row wz-step wz-icon-bw wz-nav-on mar-top">
                      <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab1">
                          <span class="icon-wrap icon-wrap-xs bg-danger"><i class="fa fa-info"></i></span>
                          <p class="text-thin">Profile</p>
                        </a>
                      </li>
                      <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab2">
                          <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-user"></i></span>
                          <p class="text-thin">Technical Strength</p>
                        </a>
                      </li>
                      <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab3">
                          <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-home"></i></span>
                          <p class="text-thin">Work Experience</p>
                        </a>
                      </li>
                      <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab4">
                          <span class="icon-wrap icon-wrap-xs bg-success"><i class="fa fa-heart"></i></span>
                          <p class="text-thin">Education</p>
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
                          <div id="demo-main-tab1" class="tab-pane active">
                            <form action="<?= $baseUrl ?>setting/updateUserInfo" class="form-horizontal" method="POST" onSubmit="return (validateUpdateProfile());">

                              <div class="form-group">

                                <label class="col-md-3 control-label">First Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="first_name" id= "first_name"  class="form-control" />
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
                                  <textarea id="about-textarea" name="about_user" id="about_user" rows="6" class="form-control"></textarea>
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
                          </div>
            
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
                          </div>
            
                          <!--Third tab-->
                          <div id="demo-main-tab3" class="tab-pane">
                            <form action="<?= $baseUrl ?>setting/updateWorkExp" class="form-horizontal" method="POST" onSubmit="return (validateUpdateWorkExp());">

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

                                <label class="col-md-3 control-label">Started From</label>

                                <div class="col-md-7">
                                  <input type="text" name="from" id="from" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              <div class="form-group">

                                <label class="col-md-3 control-label">Leave </label>

                                <div class="col-md-7">
                                  <input type="text" name="to" id="to" class="form-control"/>
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
                          </div>
            
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

                                <label class="col-md-3 control-label">Started From</label>

                                <div class="col-md-7">
                                  <input type="text" name="from" id="from" value="" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                              <div class="form-group">

                                <label class="col-md-3 control-label">To</label>

                                <div class="col-md-7">
                                  <input type="text" name="to" id="to" value="" class="form-control"/>
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
                          </div>
                        </div>
                      </div>
            
            
                      <!--Footer button-->
                      <div class="pull-right pad-all">
                        <button type="button" class="previous btn btn-primary">Previous</button>
                        <button type="button" class="next btn btn-primary">Next</button>
                        <button type="button" class="finish btn btn-success" disabled>Finish</button>
                      </div>
            
                    
                  </div>
                  <!--===================================================-->
                  <!-- End of Main Form Wizard -->
            
                </div>
              </div>
            </div>

          </div> <!-- /.row md 10-->
        
        </div>


      </div> <!-- /.content container -->

    </div> <!-- .container -->
  </div>

  <?php include_once 'views/footer/footer.php'; ?>


  <script src="<?= $baseUrl ?>static/js/genericEmptyFieldValidator.js"></script>

    <script type="text/javascript">

      function validateUpdateProfile(){
        console.log("Inside Validate User Profile");
        fields = ["first_name","last_name","phone","living_place", "about_user"];
        return genericEmptyFieldValidator(fields);
        
      }

      function validateUpdateTechStrength(){
        console.log("Inside Validate Technical Strength");
        fields = ["tech_strength"];
        return genericEmptyFieldValidator(fields);
      }

      function validateUpdateWorkExp(){
        console.log("Inside Validate Work Experience");
        fields = ["company_name", "designation", "from", "to"];
        return genericEmptyFieldValidator(fields);
      }

      function validateUpdateEducation(){
        console.log("Inside Validate Education");
        fields = ["institute", "degree", "branch", "from", "to"];
        return genericEmptyFieldValidator(fields);
      }
    </script>

  </body>
</html>