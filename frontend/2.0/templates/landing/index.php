<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Welcome to Collap: Login or Join</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include_once 'html_components/header.php'; ?>

</head>

<body>

<?php include_once 'html_components/navbar.html'; ?>

<div id="wrapper">

    <div class="content">
      <section id = "login">
        <div class="container"  style=" padding-top: 100px;">

          <div class="account-wrapper">

                <h3 class ="pull-left">Welcome back to Collap</h3>
                <h5 class="pull-right" style="margin-top: 28px;">
                  <a href="#register" style="color:#0CD85E"> 
                    Don't have an account? 
                  </a>
                </h5>
                <br><br>
                <label></label>
                
                <form class="form account-form login-form masthead-form well">

                  <div class="form-group">
                    <input type="text" class=" input-block-level form-control" id="username" placeholder="Email or Username" tabindex="1">
                  </div>
                  <div class="form-group">
                    <input type="password" class="input-block-level form-control" id="passwordlogin" placeholder="Password" tabindex="1">
                  </div>

                  <div class="form-group clearfix">
                    <div class="pull-left">         
                      <label class="checkbox-inline">
                        <input type="checkbox" class="" value="" tabindex="3" style="margin-top: 11px;"> <h5> Remember me </h5>
                      </label>
                    </div>

                    <div class="pull-right">
                      <h5><a href="#/forgetpassword" style="color:#0CD85E"> Forgot Password? </a> </h5>
                    </div>
                  </div> <!-- /.form-group -->

                  <input name="project" type="hidden" value="Collap"/>
                  <button class="btn btn-success" style="width:100%;height:50px;font-size:22px;" id="login"><b> Login </b></button>
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
                  </div> <!-- End of social Login -->

                </form>

                <div class="divider large visible-desktop"></div><br/>
          </div>
        </section>      
      </div> <!-- /.container -->

    </div> <!-- /.item -->

    <hr class="spacer-md hidden-xs">
    <hr class="spacer-sm visible-xs">
<hr>


              <section id = "register">
                <div class="container ">

                  <div class="account-wrapper">
                  <div class="section-header">
                    <!-- SECTION TITLE -->
                    <h2 class="dark-text">Register with Collap</h2>
                  </div>
                  <div class="row">
                    <form class="form account-form registration-form masthead-form well" method="POST" action="../admin/index.html">

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
                  </div>
                </div>
                </div>
              </section>


  
            <div class="item " style="background-color: #354b5e; background-image: url(../../global/img/bg/dark-mosaic.png);">

              <hr class="spacer-md hidden-xs">
              <hr class="spacer-sm visible-xs">

              <div class="container">

                <div class="row">

                  <div class="col-md-6 masthead-text animated fadeInDownBig">
                    <h4 class="masthead-title">Don't feel limited to color schemes provided.</h4>

                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <br>

                    <div class="masthead-actions">
                      <a href="javascript:;" class="btn btn-transparent btn-jumbo">
                      Learn More
                      </a>

                      <a href="./account-signup.html" class="btn btn-primary btn-jumbo">
                      Create an Account
                      </a>
                    </div> <!-- /.masthead-actions -->

                  </div> <!-- /.masthead-text -->

                  <hr class="spacer-sm visible-xs visible-sm">

                  <div class="col-md-6 masthead-img animated pulse">
                    <iframe src="https://player.vimeo.com/video/57175742?title=0&amp;byline=0&amp;portrait=0&amp;color=e2007a" style="width: 85%; height: 325px;"></iframe>

                    <hr class="spacer-md">
                    <hr class="spacer-xs">
      
                  </div> <!-- /.masthead-img -->

                </div> <!-- /.row -->

              </div> <!-- /.container -->

            </div> <!-- /.item -->            

          </div>  <!-- /.carousel-inner -->
          <!-- Carousel nav -->


          <div class="container">
            <div class="carousel-controls">
              <a class="carousel-control left" href="#masthead-carousel" data-slide="prev">&lsaquo;</a>
              <a class="carousel-control right" href="#masthead-carousel" data-slide="next">&rsaquo;</a>
            </div>
          </div>
            
        </div> <!-- /.masthead-carousel -->

      </div> <!-- /.masthead -->



      <div class="content">

        <section id="section-features" class="home-section">

          <div class="container">

            <div class="heading-block heading-minimal heading-center">
              <h1>
                Why Choose MVP Ready?
              </h1>
            </div> <!-- /.heading-block -->

            


            <div class="feature-lg">

              <div class="row">
                
                <div class="col-sm-6">
                  <hr class="spacer-sm">
                  <figure class="feature-figure"><img src="./img/features/product01.png" class="img-responsive" alt=""></figure>
                </div><!-- /.col -->
                
                <div class="col-sm-6">
                  <div class="feature-content">
                    <h5>Consent accullignis dentibea.</h5>
                    <h3>Fully flexible user interface</h3>
                    <p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut reporemni aut labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped.</p>
                    <ul class="icons-list">
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Voloratati andigen daepeditem quiate
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Laceaque quiae sitiorem
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Tumquam core posae
                      </li>
                    </ul>
                    <a href="#" class="btn btn-default">Check out the functions</a>
                  </div> <!-- /.feature-content -->
                </div><!-- /.col -->
                
              </div> <!-- /.row -->

            </div> <!-- /.feature-lg -->


            <hr class="spacer-lg">


            <div class="feature-lg figure-right">

              <div class="row">
                
                <div class="col-sm-6 col-sm-push-6 ">
                  <hr class="spacer-sm">
                  <figure class="feature-figure"><img src="./img/features/product02.jpg" class="img-responsive" alt=""></figure>
                </div><!-- /.col -->
                
                <div class="col-sm-6 col-sm-pull-6">
                  <div class="feature-content">
                    <h5>Incim resto explabo.</h5>
                    <h3>Over 14,000 designs available</h3>
                    <p>Magnis modipsae que lib voloratati andigen daepeditem quiate es reporemus aut labor. Laceaque quiae sitiorem rest non restibusaes dem tumquam core posae volor remped modis volor. Doloreiur quia commolu ptatemp dolupta oreprerum tibusam eumenis et consent accullignis lib dentibea autem inisita.</p>
                    <ul class="icons-list">
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Tumquam core posae volor remped modis volor
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Non restibusaes dem tumquam
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Modipsae que lib voloratati andigen daepeditem
                      </li>
                    </ul>
                    <a href="#" class="btn btn-default">Visit the showroom</a>
                  </div> <!-- /.feature-content -->
                </div><!-- /.col -->
                
              </div> <!-- /.row -->

            </div> <!-- /.feature-lg -->


            <hr class="spacer-lg">


            <div class="feature-lg">

              <div class="row">
                
                <div class="col-sm-6">
                  <hr class="spacer-xs">
                  <iframe src="https://www.youtube.com/embed/ySJhFCtVTUQ?list=UUvNBXWGykQrWb7kPAn5eLUQ" style="width: 95%; height: 315px;"></iframe>
                </div><!-- /.col -->
                
                <div class="col-sm-6">
                  <div class="feature-content">
                    <h5>Volor remped modis volor.</h5>
                    <h3>Social media made even easier</h3>
                    <p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut reporemni aut labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp.</p>
                    <ul class="icons-list">
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Tumquam core posae volor remped modis volor
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Non restibusaes dem tumquam
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Modipsae que lib voloratati andigen daepeditem
                      </li>
                    </ul>
                    <a href="#" class="btn btn-default">Learn more about it</a>
                  </div> <!-- /.feature-content -->
                </div><!-- /.col -->
                
              </div> <!-- /.row -->

            </div> <!-- /.feature-lg -->

            </div> <!-- /.container -->

          </section>




          <section id="faq" class="home-section" style="background-color: #f3f3f3;">

            <div class="container">

              <div class="heading-block heading-minimal heading-center">
                <h1>
                  Frequently Asked Questions
                </h1>
              </div> <!-- /.heading-block -->


              <div class="row">

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-anchor feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">What is collap.com?</h3>

                    <p class="feature-sm-content">
                      Collap is an engaged community of problem solvers in various domains of Science, Technology, Marketing, Economics, Social Sciences etc. We empower problem solvers with the tools and technology to identify the problems and collaborate with others to solve them.
                       If you have a problem you want solved, simple create a project and challenge fellow Collapers to solve it. With the power of collaboration, no problem is too big.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-ils feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">Who can use it?</h3>

                    <p class="feature-sm-content">
                      Collap is for anyone who wished to have a problem addressed. Identified a problem? Flag it!
                      Have a great idea? Share it! Think you have an solution to a problem, solve it!
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-gift feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">What features it provide?</h3>

                    <p class="feature-sm-content">
                      Collap.com provides a whole host of useful features to enable you to collaboratively undertake projects and deliver them. Sharing for everybody, it won’t be possible to define every feature in this document; to name a few, users can publish articles, share challenges and ideas. Users can also create or join a project(public or classified) and teams and start collaborating and contributing.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

              </div> <!-- /.row -->



              <div class="row">

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-code feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">How can collap.com help people?</h3>

                    <p class="feature-sm-content">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-comments-o feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">Why people love to use collap.com? </h3>

                    <p class="feature-sm-content">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-cloud-download feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">Does I need to pay collap for its services?</h3>

                    <p class="feature-sm-content">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

              </div> <!-- /.row -->



              <div class="row">

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-crosshairs feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">Quis nostrud exercitation</h3>

                    <p class="feature-sm-content">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-rocket feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">Incididunt ut labore</h3>

                    <p class="feature-sm-content">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-star feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">Enim ad minim</h3>

                    <p class="feature-sm-content">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

              </div> <!-- /.row -->

          </div> <!-- /.container -->

        </section>



        <section id="section-testimonials" class="home-section">

          <div class="container">

            <div class="heading-block heading-minimal heading-center">
              <h1>
                Trusted by Thousands
              </h1>
            </div> <!-- /.heading-block -->

            <ul class="clients-list">
              <li>
                <img src="../../global/img/clients/logo1-grayscale.png" class="img-responsive" alt="Client Logo">
              </li>
              <li>
                <img src="../../global/img/clients/logo2-grayscale.png" class="img-responsive" alt="Client Logo">
              </li>
              <li>
                <img src="../../global/img/clients/logo3-grayscale.png" class="img-responsive" alt="Client Logo">
              </li>
              <li>
                <img src="../../global/img/clients/logo4-grayscale.png" class="img-responsive" alt="Client Logo">
              </li>
            </ul>

            <hr class="spacer-md">


            <div class="row">

              <div class="col-sm-4">

                <div class="testimonial">

                  <div class="testimonial-icon bg-secondary">
                    <i class="fa fa-quote-left"></i>
                  </div> <!-- /.testimonial-icon -->

                  <div class="testimonial-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit.
                  </div> <!-- /.testimonial-content -->

                  <div class="testimonial-author">
                    <div class="testimonial-image"><img alt="" src="../../global/img/avatars/avatar-3-md.jpg"></div>

                    <div class="testimonial-author-info">
                      <h5><a href="#">Adelle Charles</a></h5> @adellecharles
                    </div>
                  </div> <!-- /.testimonial-author -->

                </div> <!-- /.testimonial -->

                <hr class="spacer-sm">

              </div> <!-- /.col -->

              <div class="col-sm-4">

                <div class="testimonial">

                  <div class="testimonial-icon bg-secondary">
                    <i class="fa fa-quote-left"></i>
                  </div> <!-- /.testimonial-icon -->

                  <div class="testimonial-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit.
                  </div> <!-- /.testimonial-content -->

                  <div class="testimonial-author">
                    <div class="testimonial-image"><img alt="" src="../../global/img/avatars/avatar-4-md.jpg"></div>

                    <div class="testimonial-author-info">
                      <h5><a href="#">Peter Landt</a></h5> @peterlandt
                    </div>
                  </div> <!-- /.testimonial-author -->

                </div> <!-- /.testimonial -->

                <hr class="spacer-sm">

              </div> <!-- /.col -->

              <div class="col-sm-4">

                <div class="testimonial">

                  <div class="testimonial-icon bg-secondary">
                    <i class="fa fa-quote-left"></i>
                  </div> <!-- /.testimonial-icon -->

                  <div class="testimonial-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit.
                  </div> <!-- /.testimonial-content -->

                  <div class="testimonial-author">
                    <div class="testimonial-image"><img alt="" src="../../global/img/avatars/avatar-5-md.jpg"></div>

                    <div class="testimonial-author-info">
                      <h5><a href="#">Enda Nasution</a></h5> @enda
                    </div>
                  </div> <!-- /.testimonial-author -->

                </div> <!-- /.testimonial -->

              </div> <!-- /.col -->

            </div> <!-- /.row -->

          </div> <!-- /.container -->

        </section>



        <section id="section-contact" class="home-section" style="background-color: #f3f3f3;">

          <div class="container">

            <div class="heading-block heading-minimal heading-center">
              <h1>
                Want to work with us?
              </h1>
            </div> <!-- /.heading-block -->

            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <p class="text-center text-xl">
                  <em>Magnis modipsae que voloratati andigen daepeditem quiate re porem aut labor. Laceaque quiae sitiorem rest.</em>
                <br><br>
                <a href="./page-contact.html" class="btn btn-primary btn-lg">Get In Touch</a>
                </p>
              </div>
            </div>

            <br><br>

          </div> <!-- /.container -->

        </section>

      </div> <!-- /.content -->


</div> <!-- /#wrapper -->

<footer class="footer">
<section id = "contact">
	<div class="container">
  		
      <div class="row">

        <div class="col-sm-3">

          <div class="heading-block">
            <h4>Collap</h4>
          </div> <!-- /.heading-block -->    

          <p>Introducing a powerful online platform to collaborate with like minded people and change the world, solving one problem at a time.</p>
          <p>Collap offers a wide range of tools to identify a challenge and assemble your own team to collaborate and crack it. Here’s to the the joy of collaborative problem solving!</p>

        </div> <!-- /.col -->


        <div class="col-sm-3">

          <div class="heading-block">
            <h4>Keep In Touch</h4>
          </div> <!-- /.heading-block -->

          <ul class="icons-list">
            <li>
              <i class="icon-li fa fa-home"></i>
              HSR Layout, Sector-2 <br>
              Bangalore, India 560102
            </li>

            <li>
              <i class="icon-li fa fa-phone"></i>
              +91 8901414422
            </li>

            <li>
              <i class="icon-li fa fa-envelope"></i>
              <a href="mailto:collapcom@gmail.com">collapcom@gmail.com</a>
            </li>
<!--             <li>
              <i class="icon-li fa fa-map-marker"></i>
              <a href="javascript:;">View Map</a>
            </li> -->
          </ul>
        </div> <!-- /.col -->


        <div class="col-sm-3">

          <div class="heading-block">
            <h4>Connect With Us</h4>
          </div> <!-- /.heading-block -->

          <ul class="icons-list">

            <li>
              <i class="icon-li fa fa-facebook"></i>
              <a href="https://www.facebook.com/pages/collapcom/739310236156746"> Facebook </a>
            </li>

            <li>
              <i class="icon-li fa fa-twitter"></i>
              <a href="https://twitter.com/collapcom"> Twitter </a>
            </li>

            <!-- <li>
              <i class="icon-li fa fa-soundcloud"></i>
              <a href="javascipt:;">Sound Cloud</a>
            </li> -->

            <li>
              <i class="icon-li fa fa-google-plus"></i>
              <a href="https://plus.google.com/+Collapcom/"> Google Plus </a>
            </li>
          </ul>
          
        </div> <!-- /.col -->

        
        <div class="col-sm-3">

          <div class="heading-block">
            <h4>Stay Updated</h4>
          </div> <!-- /.heading-block -->

        <p>Get emails about new ideas, projects and challanges created &amp;  future updates.</p>
        <br>
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
</section>
</footer>

<footer class="copyright">
  <div class="container">

    <div class="row">

      <div class="col-sm-12">
        <p>Copyright &copy; 2014-15 <a href="http://dpower4.com/">Dpower4</a>.</p>
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


</body>
</html>