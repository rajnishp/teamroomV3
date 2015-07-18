<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Signup &middot; MVP Ready Admin</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Google Font: Open Sans -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,300,700">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../../bower_components/fontawesome/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Custom Add CSS -->
  <link rel="stylesheet" href="../landing/css/custom_add.css">


    <!-- App CSS -->
  <link rel="stylesheet" href="./css/mvpready-landing.css">
  <link href="../../bower_components/animate.css/animate.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./css/custom.css"> -->


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="favicon.ico">
</head>

<body>

<div id="wrapper">

  <?php include_once 'html_components/navbar.html'; ?>

    <div class="content">

      <div class="container">

        <hr class="spacer-sm">

        <div class="account-wrapper">

          <div class="">

            <h3 class ="pull-left">Join Collap</h3>

            <span class="pull-right"><a href="#/login" style="color:#0CD85E"> Already have an account? </a></span>
<label></label>

            <form class="form account-form registration-form" method="POST" action="../admin/index.html">

              <div class="form-group">
                
                <input type="text" class="input-block-level form-control" placeholder="Enter first name" id="firstname" onkeyup="nospaces(this)" tabindex="1">
              </div> <!-- /.form-group -->

              <div class="form-group">
                <input type="text" class="input-block-level form-control" placeholder="Enter last name" id="lastname" onkeyup="nospaces(this)" tabindex="1">
              </div> <!-- /.form-group -->

              <div class="form-group">
                <input type="email" class="input-block-level form-control" placeholder="Enter email-id" id="email" onkeyup="nospaces(this)" onblur="emailCheck();" tabindex="1">
                <span id="status_email"></span>
              </div> <!-- /.form-group -->
              
              <div class="form-group">
                <input type="text" class="input-block-level form-control" placeholder="Enter username" id="usernameR" onkeyup="nospaces(this)" onblur="usernameCheck();"/>
                <span id="status"></span>
              </div> <!-- /.form-group -->

              <div class="form-group">
                <input type="password" class="input-block-level form-control" placeholder="Enter password" onkeyup="nospaces(this)" id="passwordR"/>
              </div> <!-- /.form-group -->

              <div class="form-group">
                <input type="password" class="input-block-level form-control" placeholder="Confirm password" onkeyup="nospaces(this)" id="password2R"/>
              </div> <!-- /.form-group -->

              <label>You are here for</label>
              <br>

              <input type="checkbox" class="btn btn-mini custom-checkbox" id='typeCol' /> Collaboration &nbsp;&nbsp;&nbsp;

              <input type="checkbox" class="btn btn-mini custom-checkbox" onclick='aboutinvest()' id='typeInv'/> Invester &nbsp;&nbsp;&nbsp;
              
              <input type="checkbox" class="btn btn-mini custom-checkbox" id='typeFun'/> Fund Searcher 

              <label>
                <div class='totalcapital'>
                  <label>How much amount you want to invest (in dollars)</label>
                  <input type="num" class="input-group" id="investment" onkeyup="nospaces(this)" min='10' onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" placeholder="Enter amount"/>
                  <span class="input-group-addon" style='font-size:20px;'>.00 $</span>
                </div>
              </label>

              <div class="form-group">
                <label class="checkbox-inline">
                  <input type="checkbox" class="" value="" tabindex="5">
                    Aggree to  
                    <a href="#" data-toggle="modal">Terms &amp; Conditions</a>
                </label>
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn btn-success" id="request_reg" style="width:100%;height:50px;font-size:22px;" >
                  <b>Register</b>
                </button>
              </div>

              <div class="line"> or </div>
              <div class="socials">
                <ul class="list-inline">
                  <li><a  href="https://www.facebook.com/pages/collapcom/739310236156746" target='_blank'>
                    <img class="media-object img-circle" src="imgs/facebook.png" style="width:50px;"/>
                  </a></li>
                  <li><a  href="https://twitter.com/CollapCom" target='_blank'>
                    <img class="media-object img-circle" src="imgs/Twitter.png" style="width:50px;"/>
                  </a></li>
                  <li><a  href="https://www.pinterest.com/collapcom/" target='_blank'>
                    <img class="media-object img-circle" src="imgs/pinterest.png" style="width:50px;"/>
                  </a></li>
                  <li><a  href="https://plus.google.com/117170233233281087141" rel="publisher" target='_blank'>
                    <img class="media-object img-circle" src="imgs/google.png" style="width:50px;"/>
                  </a></li>
                  <li><a  href="https://in.linkedin.com/" target='_blank'>
                    <img class="media-object img-circle" src="imgs/linkdin.png" style="width:50px;"/>
                  </a></li>
                  <li><a  href="https://github.com/collapcom" target='_blank'>
                    <img class="media-object img-circle" src="imgs/github.png" style="width:50px;"/>
                  </a></li>
                </ul>
              </div>
            <p style="text-align:center;"> We'll never post anything anywhere without your permission </p>
          </form>

          </div> <!-- /.account-body -->

          <div class="account-footer">
            <p>
            Already have an account? &nbsp;
            <a href="./account-login.html" class="">Login to your Account!</a>
            </p>
          </div> <!-- /.account-footer -->

        </div> <!-- /.account-wrapper -->
        
        <br><br><br>

      </div> <!-- /.container -->   	

    </div> <!-- /.content -->


</div> <!-- /#wrapper -->

<footer class="footer">

	<div class="container">
  		
      <div class="row">

        <div class="col-sm-3">

          <div class="heading-block">
            <h4>MVP Ready</h4>
          </div> <!-- /.heading-block -->    

          <p>Aliquam fringilla, sapien egetferas scelerisque placerat, lorem libero cursus lorem, sed sodales lorem libero eu sapien. Nunc mattis feugiat justo vel faucibus. Nulla consequat feugiat malesuada.</p>

          <p>Placerat, lorem libero cursus lorem, sed sodales lorem libero eu sapien</p>
        </div> <!-- /.col -->


        <div class="col-sm-3">

          <div class="heading-block">
            <h4>Keep In Touch</h4>
          </div> <!-- /.heading-block -->

          <ul class="icons-list">
            <li>
              <i class="icon-li fa fa-home"></i>
              123 Northwest Way <br>
              Las Vegas, NV 89183
            </li>

            <li>
              <i class="icon-li fa fa-phone"></i>
              +1 702 123 4567
            </li>

            <li>
              <i class="icon-li fa fa-envelope"></i>
              <a href="mailto:info@mvpready.com">info@mvpready.com</a>
            </li>
            <li>
              <i class="icon-li fa fa-map-marker"></i>
              <a href="javascript:;">View Map</a>
            </li>
          </ul>
        </div> <!-- /.col -->


        <div class="col-sm-3">

          <div class="heading-block">
            <h4>Connect With Us</h4>
          </div> <!-- /.heading-block -->

          <ul class="icons-list">

            <li>
              <i class="icon-li fa fa-facebook"></i>
              <a href="javascript:;">Facebook</a>
            </li>

            <li>
              <i class="icon-li fa fa-twitter"></i>
              <a href="javascript:;">Twitter</a>
            </li>

            <li>
              <i class="icon-li fa fa-soundcloud"></i>
              <a href="javascipt:;">Sound Cloud</a>
            </li>

            <li>
              <i class="icon-li fa fa-google-plus"></i>
              <a href="javascript:;">Google Plus</a>
            </li>
          </ul>
          
        </div> <!-- /.col -->

        
        <div class="col-sm-3">

          <div class="heading-block">
            <h4>Stay Updated</h4>
          </div> <!-- /.heading-block -->

        <p>Get emails about new theme launches &amp;  future updates.</p>

        <form action="/" class="form">
          
          <div class="form-group">
            <!-- <label>Email: <span class="required">*</span></label> -->
            <input class="form-control" id="newsletter_email" name="newsletter_email" type="text" value="" required="" placeholder="Email Address">
          </div> <!-- /.form-group -->

          <div class="form-group">
            <button class="btn btn-transparent">Subscribe Me</button>
          </div> <!-- /.form-group -->

        </form>

      </div> <!-- /.col -->

      </div> <!-- /.row -->

	</div> <!-- /.container -->

</footer>

<footer class="copyright">
  <div class="container">

    <div class="row">

      <div class="col-sm-12">
        <p>Copyright &copy; 2013-15 <a href="javascript:;">Jumpstart Themes</a>.</p>
      </div> <!-- /.col -->

    </div> <!-- /.row -->
    
  </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Core JS -->
<script src="../../bower_components/jquery/dist/jquery.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- App JS -->
<script src="../../global/js/mvpready-core.js"></script>
<script src="../../global/js/mvpready-helpers.js"></script>
<script src="./js/mvpready-landing.js"></script>


<!-- Demo JS -->
<script src="../../global/js/mvpready-account.js"></script>

</body>
</html>