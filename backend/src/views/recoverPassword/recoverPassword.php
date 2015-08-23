<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
      <title>Recover Password</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Collap com">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Password Recovery from Collap">
      <meta name="keywords" content="Challenge, Project, Problem solving, problem, article, collaborate, collaboration, digitalCollaboration">

      <?php include_once 'views/header/header.php'; ?>

    </head>

    <body>

        <div class="mainnav navbar-fixed-top">

          <div class="container">

            <a href="./" class="navbar-brand-img">
              <img src="<?= $baseUrl ?>static/img/collap.jpg" style="width: 75px;" alt = "Collap"/> 
              <span style="font-size: 30px;"> Collap
            </a>

            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-bars"></i>
            </button>

          </div> <!-- /.container -->
  
        </div> <!-- /.mainnav -->

        <div id="wrapper">

            <div class="content">
                <div class="jumbotron">
                    <p align='center'>Reset your password</p>
                    <div class="alert-placeholder"> </div>
                    <?php 
                        /*if ($accessed_or_not == 0) {
                            echo "<p align='center'>Something going wrong here, Please try again</p>";
                        }
                        else {*/
                    ?>

                    <form class="form-horizontal" onsubmit="return (validateUpdatePassword());">

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
                    <?php //} ?>
                </div>
            </div>
        </div>
    <?php include_once 'views/footer/footer.php'; ?>
    <script type="text/javascript">
      
      function validateUpdatePassword () {
        if($('#new_password_1').val() == "" || $('#new_password_1').val() == null || $('#new_password_1').val().length < 6){
            $('#new_password_1').css("border-color", "red");
            //returnBool = false;
            return false;
        }
        else if($('#new_password_2').val() == "" || $('#new_password_2').val() == null){
            $('#new_password_2').css("border-color", "red");
            //returnBool = false;
            return false;
        }

        else {
            $('#new_password_1').css("border-color", "green");
            $('#new_password_2').css("border-color", "green");

            var dataString = "";      
            dataString = "new_password_1=" + $('#new_password_1').val() + "&new_password_2=" + $('#new_password_2').val();

            $.ajax({
              type: "POST",
              url: "<?= $this-> baseUrl?>"+"forgetPassword/newPassword",
              data: dataString,
              cache: false,
              success: function(result){
                alert(result);
                $('#new_password_1').val("");
                $('#new_password_2').val("");
                setTimeout(function () {
                  window.location.href = "<?= $this-> baseUrl ?>"; //will redirect to your blog page (an ex: blog.html)
                }, 5000);
              },
              error: function(result){
                alert(result);
              }

            });
        }
        return false;
      }
    </script>
    
    </body>
</html>