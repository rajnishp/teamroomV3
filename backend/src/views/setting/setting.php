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
                            Edit Profile
                          </h3>
                        </div> <!-- /.heading-block -->

                        <p> Here, Edit your profile.</p>

                        <br><br>

                        <form action="profile/updatePic" class="form-horizontal" method="POST">

                          <div class="form-group">

                            <label class="col-md-3 control-label">Avatar</label>

                            <div class="col-md-7">

                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 125px; min-height: 125px;">
                                  <img src="<?= $baseUrl ?>static/img/rajnish.png" alt="Avatar">
                                </div>
                                <div>
                                  <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                  <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                              </div> <!-- /.fileupload -->

                            </div> <!-- /.col -->

                          </div> <!-- /.form-group -->

                        </form>

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
                            Edit Technical Strength
                          </h3>
                        </div> <!-- /.heading-block -->


                        <?php foreach ($userTechStrength as $key => $value) { ?>

                          <form action="<?= $baseUrl ?>setting/updateTechStrength" class="form-horizontal" method="POST" onSubmit="return (validateUpdateTechStrength(<?= $key ?>));">

                            <div class="form-group">

                              <label class="col-md-3 control-label">Technical Strength</label>
                            
                              <div class="col-md-7">
                                <input type="hidden" name="id" value="<?= $value -> getId() ?>" class="form-control"/>
                                <input type="text" name="tech_strength" id="tech_strength_<?= $key ?>" value="<?= ucfirst($value -> getStrength()) ?>" class="form-control"/>
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

          
                        <div class="heading-block">
                          <h3>
                            Edit Work Experience
                          </h3>
                        </div> <!-- /.heading-block -->


                        <?php foreach ($userWorkExperience as $key => $workExperience) { ?>
                          
                          <form action="<?= $baseUrl ?>setting/updateWorkExp" class="form-horizontal" method="POST" onSubmit="return (validateUpdateWorkExp(<?= $key ?>));">

                            <div class="form-group">

                              <label class="col-md-3 control-label">Company Name</label>

                              <div class="col-md-7">
                                <input type="text" name="company_name" id="company_name_<?= $key ?>" value="<?= ucfirst($workExperience -> getCompanyName()) ?>" class="form-control"/>
                                <input type="hidden" name="id" value="<?= $workExperience -> getId() ?>" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->
                            
                            <div class="form-group">

                              <label class="col-md-3 control-label">Designation</label>

                              <div class="col-md-7">
                                <input type="text" name="designation" id="designation_<?= $key ?>" value="<?= ucfirst($workExperience -> getDesignation()) ?>" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->
                            
                            <div class="form-group">

                              <label class="col-md-3 control-label">Duration</label>

                              <div class="col-md-7">

                                <div id="demo-dp-range">
                                  <div id="datepicker" class="input-daterange input-group">
                                    <input type="text" name="from" id="work_from_<?= $key ?>" value="<?= ucfirst($workExperience -> getFrom()) ?>" class="form-control"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" name="to" id="work_to_<?= $key ?>" value="<?= ucfirst($workExperience -> getTo()) ?>" class="form-control"/>
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
                                    <input type="text" name="from" id="work_from" class="form-control"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" name="to" id="work_to" class="form-control"/>
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

                        <div class="heading-block">
                          <h3>
                            Edit Education
                          </h3>
                        </div> <!-- /.heading-block -->

                        <?php foreach ($userEducation as $key1 => $education) { ?>
                          <form action="<?= $baseUrl ?>setting/updateEducation" class="form-horizontal" method = "POST" onSubmit="return (validateUpdateEducation(<?= $education->getId() ?>));">

                            <div class="form-group">

                              <label class="col-md-3 control-label">Institute Name</label>

                              <div class="col-md-7">
                                <input type="text" name="institute" id="institute_<?= $key1 ?>" value="<?= ucfirst($education -> getInstitute()) ?>" class="form-control"/>
                                <input type="hidden" name="id" value="<?= ucfirst($education -> getId()) ?>" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->
                            
                            <div class="form-group">

                              <label class="col-md-3 control-label">Name of Degree</label>

                              <div class="col-md-7">
                                <input type="text" name="degree" id="degree_<?= $key1 ?>" value="<?= ucfirst($education -> getDegree()) ?>" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->
                            <div class="form-group">

                              <label class="col-md-3 control-label">Branch Name</label>

                              <div class="col-md-7">
                                <input type="text" name="branch" id="branch_<?= $key1 ?>" value="<?= ucfirst($education -> getBranch()) ?>" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->

                            <div class="form-group">

                              <label class="col-md-3 control-label">Duration</label>

                              <div class="col-md-7">

                                <div id="demo-dp-range">
                                  <div id="datepicker" class="input-daterange input-group">
                                    <input type="text" name="from" id="edu_from_<?= $key1 ?>" value="<?= ucfirst($education -> getFrom()) ?>" class="form-control"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" name="to" id="edu_to_<?= $key1 ?>" value="<?= ucfirst($education -> getTo()) ?>" class="form-control"/>
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
                                    <input type="text" name="from" id="edu_from" value="" class="form-control"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" name="to" id="edu_to" value="" class="form-control"/>
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

                        <form action="<?= $baseUrl ?>setting/updatePassword" class="form-horizontal" method="POST" onSubmit="return (validateUpdatePassword());">

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
                              <button type="submit" class="btn btn-primary">Save Changes</button>
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

            </div> <!-- .content-container -->

        <?php require_once 'views/sidebar/sidebar_button.php'; ?>

      </div> <!-- /.boxed -->
    </div> <!-- /.container -->

    <?php require_once 'views/footer/footer.php'; ?>


    <script src="<?= $baseUrl ?>static/js/genericEmptyFieldValidator.js"></script>

    <script type="text/javascript">

      function postUpdateProfile(){
        var dataString = "";
        $.each(fields, function( index, value ) {
          
          dataString = "first_name=" + first_name + "&last_name=" + last_name + "&phone=" + phone + "&living_place=" + living_place + "&about_user=" + about_user;
          alert(dataString); 
        });

        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updateUserInfo",
          data: dataString,
          cache: false,
          success: function(result){
            $.niftyNoty({ 
              type:"success",
              icon:"fa fa-check fa-lg",
              title:"Profile Information",
              message:result,
              focus: true,
              container:"floating",
              timer:4000
            });
          },
          error: function(result){
            console.log(result);
            $.niftyNoty({ 
              type:"danger",
              icon:"fa fa-check fa-lg",
              title:"Profile Information",
              message:result.responseText,
              focus: true,
              container:"floating",
              timer:4000
            });
          }

        });      
      }

      function validateUpdateProfile(){

        console.log("Inside Validate user Profile");
        
        fields = ["first_name","last_name","phone","living_place", "about_user"];

        if(genericEmptyFieldValidator(fields)){
          console.log("iam there");
          postUpdateProfile(fields);          

        }
        return false;
      }

      function postUpdateTechStrength(){
          var dataString = "";
          $.each(fields, function( index, value ) {
              console.log(value);
              
              dataString = "tech_strength=" + $('#'+value).val() ;  
              
          });

         $.ajax({
                type: "POST",
                url: "<?= $baseUrl ?>" + "setting/updateTechStrength",
                data: dataString,
                cache: false,
                success: function(result){
                  $.niftyNoty({ 
                    type:"success",
                    icon:"fa fa-check fa-lg",
                    title:"Technical Strength",
                    message:result,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                },
                 error: function(result){
                  console.log(result);
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-check fa-lg",
                    title:"Technical Strength",
                    message:result.responseText,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                }

              });

      }

      function validateUpdateTechStrength(key){

        console.log("Inside Validate Technical Strength",key);
        fields = ["tech_strength"];

        if(key != undefined ){
           $.each(fields, function( index, value ) {

              fields[index] = value + "_" +key;


           });
        }
        if(genericEmptyFieldValidator(fields)){

            postUpdateTechStrength(fields);          

        }
        return false;
      }

      function postUpdateWorkExp(fields){
          var dataString = "";
          
              
          dataString = "company_name=" + $('#'+fields[0]).val() + "&designation=" + $('#'+fields[1]).val() + "&from=" + $('#'+fields[2]).val() + "&to=" + $('#'+fields[3]).val() ;  
              
          

          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>" + "setting/updateWorkExp",
            data: dataString,
            cache: false,
            success: function(result){
              $.niftyNoty({ 
                type:"success",
                icon:"fa fa-check fa-lg",
                title:"Working Experience",
                message:result,
                focus: true,
                container:"floating",
                timer:4000
              });
            },
             error: function(result){
              console.log(result);
              $.niftyNoty({ 
                type:"danger",
                icon:"fa fa-check fa-lg",
                title:"Working Experience",
                message:result.responseText,
                focus: true,
                container:"floating",
                timer:4000
              });
            }
          });

      }

      function validateUpdateWorkExp(key){
        console.log("Inside Validate Work Experience");
        fields = ["company_name", "designation", "work_from", "work_to"];

        if(key != undefined ){
           $.each(fields, function( index, value ) {

              fields[index] = value + "_" +key;

           });
        }
        if (genericEmptyFieldValidator(fields)) {
            postUpdateWorkExp(fields);
        }
        return false;
      }


      function postUpdateEducation(fields){
          var dataString = "";

          dataString = "institute=" + $('#'+fields[0]).val() + "&degree=" + $('#'+fields[1]).val() + "&branch=" + $('#'+fields[2]).val() + "&edu_from=" + $('#'+fields[3]).val() + "&edu_to=" + $('#'+fields[4]).val() ;  

          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>" + "setting/updateEducation",
            data: dataString,
            cache: false,
            success: function(result){
              $.niftyNoty({ 
                type:"success",
                icon:"fa fa-check fa-lg",
                title:"Education",
                message:result,
                focus: true,
                container:"floating",
                timer:4000
              });
            },
             error: function(result){
              console.log(result);
              $.niftyNoty({ 
                type:"danger",
                icon:"fa fa-check fa-lg",
                title:"Education",
                message:result.responseText,
                focus: true,
                container:"floating",
                timer:4000
              });
            }
          });

      }

      function validateUpdateEducation(key){
        
        console.log("Inside Validate Education");
        
        fields = ["institute", "degree", "branch", "edu_from", "edu_to"];

        if(key != undefined ){
            $.each(fields, function( index, value ) {

              fields[index] = value + "_" +key;

           });
        }
alert(fields);
        if (genericEmptyFieldValidator(fields)) {
        
            postUpdateEducation(fields);
        }
        return false;

      }

      function postUpdatePassword(){
        //check new_password_1 and new_password_2 match or not
        var dataString = "";
        $.each(fields, function( index, value ) {
            console.log(value);
            
            dataString = "old_password=" + $('#'+value).val() + "&new_password_1=" + $('#'+value).val() + "&new_password_2=" + $('#'+value).val();
            
        });

        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updatePassword",
          data: dataString,
          cache: false,
          success: function(result){
            $.niftyNoty({ 
              type:"success",
              icon:"fa fa-check fa-lg",
              title:"Reset Password",
              message:result,
              focus: true,
              container:"floating",
              timer:4000
            });
          },
           error: function(result){
            console.log(result);
            $.niftyNoty({ 
              type:"danger",
              icon:"fa fa-check fa-lg",
              title:"Reset Password",
              message:result.responseText,
              focus: true,
              container:"floating",
              timer:4000
            });
          }
        });
      }

      function validateUpdatePassword(){
        console.log("Inside Validate Password");
        fields = ["old_password", "new_password_1","new_password_2"];

        if (genericEmptyFieldValidator(fields)) {
            postUpdatePassword(fields);
        }
        return false;    
      }
      
    </script>
  
  </body>
</html>
