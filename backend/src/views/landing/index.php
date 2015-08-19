<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>All new Collaboration platform, which provides you every thing to grow in you dream field.
        Find your desired job. Make your Ideas grow to projects. Make your awesome teams. Make your career.</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Collap com">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="p:domain_verify" content="c336f4706953c5ce54aa851d2d3da4b5"/>
  <meta name="description" content="Collap is a powerful online platform which enables you to take a dig at problems, big or small, and collaborate with like minded people to make the world a better place. Identify any problem you want solved and let the world know about it. Assemble your team and have a go at it. Interested Collapers can join your quest and contribute which ever way they can. Collap provides you a wide range of helpful tools which enable hassle-free collaboration. Create and manage projects and be in control with our Project Dashboard all through the process. Share ideas freely and come up with innovative solutions. Make your realm private and work on that secret project you’ve long been planning. Participate in projects and upgrade your Level. Earn a special place in Collap for each incremental step. Sharpen your skills while lending them to do good. Challenges to solve your technical problems and help change the world! . Meet people,  allows everybody to share their ideas, views, challenges and achievements with the like minded for mutual benefits. In this collap v1 release, we are going to limit to some functionality due to technically liabilities and available resources.">
  <meta name="keywords" content="Challenge, Project, Problem solving, problem, article, collaborate, collaboration, digitalCollaboration">

  <?php include_once 'views/header/header.php'; ?>

</head>

<body>

<?php include_once 'views/navbar/navbar.php'; ?>

  <div id="wrapper">

    <div class="content">

         
      <section id = "register" style="background-color: #354b5e; background-image: url(<?= $baseUrl ?>static/global/img/bg/dark-mosaic.png);">

        <div class="container " style=" padding-top: 70px;" >

         
         
            
            <div class="row">
              <div class="col-md-5 masthead-text animated fadeInDownBig">
                <div class="section-header">
              <!-- SECTION TITLE -->
              <h4 class="masthead-title">Register</h4>
            </div>
            <?php /*
              <form class="form account-form registration-form masthead-form" method="POST" action="<?= $this-> baseUrl?>home/signup" onSubmit="return (validateReg());">
                
                <div class="form-group">
                  <input type="email" class="input-block-level form-control" placeholder="Enter email-id" id="email" name="email" onkeyup="nospaces(this)" onblur="emailCheck();" tabindex="1">
                  <span id="status_email"></span>
                </div> <!-- /.form-group -->
        
                <div class="form-group">
                  <input type="text" class="input-block-level form-control" placeholder="Enter username" id="usernameR" name="username" onkeyup="nospaces(this)" onblur="usernameCheck();"  />
                  <span id="status_username"></span>
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <input type="password" class="input-block-level form-control" placeholder="Enter password" onkeyup="nospaces(this)" id="passwordR" name="passwordR" />
                </div> <!-- /.form-group -->

                
                <!-- <label>You are here for</label>
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
                -->

                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="checkbox" class="" id="accept_tnc" value="">
                      Aggree to  
                      <a href="#" data-target="#terms-conditions" data-toggle="modal" style="color:#0CD85E"> Terms &amp; Conditions </a>
                  </label>
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-success" name="submit" value="signup" id="request_reg" style="width:100%;height:50px;font-size:22px;" >
                    <b>Register</b>
                  </button>
                </div>

                <!-- <div class="line"> or </div>
                <div class="socials">
                  <ul class="list-inline">
                    
                    <li><a  href="https://www.facebook.com/pages/collapcom/739310236156746" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/facebook.png" style="width:50px;"/>
                    </a></li>
                    
                    <li><a  href="https://plus.google.com/117170233233281087141" rel="publisher" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/google.png" style="width:50px;"/>
                    </a></li>
                    
                    <li><a  href="https://in.linkedin.com/" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/linkdin.png" style="width:50px;"/>
                    </a></li>
                    
                  </ul>
                </div> --> <!-- End of social Login -->
                <p style="text-align:center;"> We'll never post anything anywhere without your permission </p>
              </form>
            */ ?>
              <form class="form account-form registration-form masthead-form"  onsubmit="return (validateReg());">
                
                <div class="form-group">
                  <input type="email" class="input-block-level form-control" placeholder="Enter email-id" id="email" name="email" onkeyup="nospaces(this)" onblur="emailCheck();" tabindex="1">
                  <span id="status_email"></span>
                </div> <!-- /.form-group -->
        
                <div class="form-group">
                  <input type="text" class="input-block-level form-control" placeholder="Enter username" id="usernameR" name="username" onkeyup="nospaces(this)" onblur="usernameCheck();"  />
                  <span id="status_username"></span>
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <input type="password" class="input-block-level form-control" placeholder="Enter password" onkeyup="nospaces(this)" id="passwordR" name="passwordR" />
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="checkbox" class="" id="accept_tnc" value="">
                      Aggree to  
                      <a href="#" data-target="#terms-conditions" data-toggle="modal" style="color:#0CD85E"> Terms &amp; Conditions </a>
                  </label>
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-success" name="submit" value="signup" id="request_reg" style="width:100%;height:50px;font-size:22px;" >
                    <b>Register</b>
                  </button>
                </div>
                <p style="text-align:center;"> We'll never post anything anywhere without your permission </p>
              </form>>
            
            </div>
            
            <div class="col-md-7 masthead-text animated fadeInDownBig">

              <iframe width="100%" height="340" src="https://www.youtube.com/embed/hDWHBSCMj0w" frameborder="0" allowfullscreen style="margin-top: 21px;"></iframe>
            </div>
          </div>
         
        </div>
      </section>


      <section id = "login" style="background-image: url(<?= $baseUrl ?>static/img/collaboration.jpg);">
        <div class="container">
          <div class="row">
          
          <div class="col-md-7 masthead-text animated fadeInDownBig">
          </div>
          <div class="col-md-5 masthead-text animated fadeInDownBig">
          <br/><br/><br/><br/>
          <div class="account-body" style="margin-top: 60px;">
          
            <div class="row">

              <h3 class ="pull-left">Login</h3>
              <h5 class="pull-right" style="margin-top: 18px;">
                <a href="#register" style="color:#0CD85E"> 
                  Don't have an account?
                </a>
              </h5>
            </div>

            <div class="row">
            <?php /*
              <form class="form account-form login-form masthead-form" action="<?= $baseUrl ?>home/login<?= $this->fromUrl ? "?from=".$this->fromUrl:""  ?>" method="post" onSubmit="return (validateLog());">

                <div class="form-group">
                  <input type="text" class=" input-block-level form-control" id="username" name="username" placeholder="Email or Username">
                  <i class="form-control-feedback" style="display: none;" data-bv-icon-for="username" data-original-title="" title=""></i>
                  <small class="help-block" style="display: none;" data-bv-validator="notEmpty" data-bv-for="username" data-bv-result="NOT_VALIDATED">The first name is required and cannot be empty</small>
                  <small class="help-block" style="display: none;" data-bv-validator="regexp" data-bv-for="username" data-bv-result="NOT_VALIDATED">The first name can only consist of alphabetical characters and spaces</small>
                </div>
                <div class="form-group">
                  <input type="password" class="input-block-level form-control" id="password" name="password" placeholder="Password">
                </div>

                <div class="form-group clearfix">
                  <div class="pull-left">         
                    <label class="checkbox-inline">
                      <input type="checkbox" class="" value="" style="margin-top: 11px;"> <h5> Remember me </h5>
                    </label>
                  </div>

                  <div class="pull-right">
                    <h5><a href="#forget-password" data-target="#forget-password" data-toggle="modal" style="color:#0CD85E"> Forgot Password? </a> </h5>
                  </div>
                </div> <!-- /.form-group -->

                <input name="project" type="hidden" value="Collap"/>
                <button class="btn btn-success" style="width:100%;height:50px;font-size:22px;" id="login" name="submit" value="login"><b> Login </b></button>
                <!-- <div class="line"> or </div>  
                <div class="socials">
                  <ul class="list-inline">
                    
                    <li><a  href="https://www.facebook.com/pages/collapcom/739310236156746" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/facebook.png" style="width:50px;"/>
                    </a></li>
                    
                    <li><a  href="https://plus.google.com/117170233233281087141" rel="publisher" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/google.png" style="width:50px;"/>
                    </a></li>
                    
                    <li><a  href="https://in.linkedin.com/" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/linkdin.png" style="width:50px;"/>
                    </a></li>
                    
                  </ul>
                </div> --> <!-- End of social Login -->

              </form>
              */ ?>
              <form class="form account-form login-form masthead-form"  onsubmit="return (validateLog());" >

                <div class="form-group">
                  <input type="text" class=" input-block-level form-control" id="username" name="username" placeholder="Email or Username">
                  <i class="form-control-feedback" style="display: none;" data-bv-icon-for="username" data-original-title="" title=""></i>
                  <small class="help-block" style="display: none;" data-bv-validator="notEmpty" data-bv-for="username" data-bv-result="NOT_VALIDATED">The first name is required and cannot be empty</small>
                  <small class="help-block" style="display: none;" data-bv-validator="regexp" data-bv-for="username" data-bv-result="NOT_VALIDATED">The first name can only consist of alphabetical characters and spaces</small>
                </div>
                <div class="form-group">
                  <input type="password" class="input-block-level form-control" id="password" name="password" placeholder="Password">
                </div>

                <div class="form-group clearfix">
                  <div class="pull-left">         
                    <label class="checkbox-inline">
                      <input type="checkbox" class="" value="" style="margin-top: 11px;"> <h5> Remember me </h5>
                    </label>
                  </div>

                  <div class="pull-right">
                    <h5><a href="#forget-password" data-target="#forget-password" data-toggle="modal" style="color:#0CD85E"> Forgot Password? </a> </h5>
                  </div>
                </div> <!-- /.form-group -->

                <input name="project" type="hidden" value="Collap"/>
                <button class="btn btn-success" style="width:100%;height:50px;font-size:22px;" id="login" name="submit" value="login"><b> Login </b></button>
                <!-- <div class="line"> or </div>  
                <div class="socials">
                  <ul class="list-inline">
                    
                    <li><a  href="https://www.facebook.com/pages/collapcom/739310236156746" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/facebook.png" style="width:50px;"/>
                    </a></li>
                    
                    <li><a  href="https://plus.google.com/117170233233281087141" rel="publisher" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/google.png" style="width:50px;"/>
                    </a></li>
                    
                    <li><a  href="https://in.linkedin.com/" target='_blank'>
                      <img class="media-object img-circle" src="<?= $baseUrl ?>static/imgs/linkdin.png" style="width:50px;"/>
                    </a></li>
                    
                  </ul>
                </div> --> <!-- End of social Login -->

              </form>
            </div>

            <div class="divider large visible-desktop"></div><br/>
          </div>
          <br/><br/><br/>
          </div>
          </div>
        </div> <!-- /.container -->
      </section>   
      

      <div class="item " style="background-color: #354b5e; background-image: url(<?= $baseUrl ?>static/global/img/bg/dark-mosaic.png);">

        <hr class="spacer-md hidden-xs">
        <hr class="spacer-sm visible-xs">

        <div class="container">

          <div class="row">

            <div class="col-md-6 masthead-text animated fadeInDownBig">
              <h4 class="masthead-title">Power of collaboration.</h4>

              <p>
              Collaboration, lets you to produce quility solution in very short time with various diversity in the socity. Collaboratoin is neccessory due to big diversity in the socity. Collaboration brings up New Ideas, New Relations, Shared Resources, Inovative solutions, Strengthened Newtwork and Inpleased Legitimacy.
              </p>

              <br>
 
            </div> <!-- /.masthead-text -->

            <hr class="spacer-sm visible-xs visible-sm">

            <div class="col-md-6 masthead-img animated pulse">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/iN_A7keXtVg" frameborder="0" allowfullscreen></iframe>
              <hr class="spacer-md">
              <hr class="spacer-xs">

            </div> <!-- /.masthead-img -->

          </div> <!-- /.row -->

        </div> <!-- /.container -->

      </div> <!-- /.item -->            



      <div class="content">


        <section id="section-features" class="home-section">

          <div class="container">

            <div class="heading-block heading-minimal heading-center">
              <h1>
                Why to Start Collaborating?
              </h1>
            </div> <!-- /.heading-block -->

            


            <div class="feature-lg">

              <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <hr class="spacer-sm">
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/HKGkBRk1kSo" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.col -->
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="feature-content">
                    <h5>TEDx San Diego</h5>
                    <h3>Collaboration - Affect/Possibility: Ken Blanchard</h3>
                    <p>Changes needs a plan, plan will help to make a difference.</p>
                    <ul class="icons-list">
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        You can not learn everything ourself.
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        No one is smarter then all of us.
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Reach people around us.
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Find people who have similar thought and collaborate together and do better.
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        We are here to give to give not to get.
                      </li>
                    </ul>
                  </div> <!-- /.feature-content -->
                </div><!-- /.col -->
                
              </div> <!-- /.row -->

            </div> <!-- /.feature-lg -->


            <hr class="spacer-lg">


            <div class="feature-lg figure-right">

              <div class="row">
                
                
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="feature-content">
                    <h5>TheArtmadillo</h5>
                    <h3>Effective Team Work and Collaboration</h3>
                    <p>Our world and socity is continously change, products and services are becoming more and more complex. New technologies anre becomming a part of our life. Our old ways of solving problems are becoming obsolete, due to increase in complaxity. The new interdisciplinary team collaboration can provide us better solution to the problems</p>
                    <ul class="icons-list">
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Effective collaboration in Multi-disciplinary TEAMS.
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Our old ways of solving problems are becoming obsolete.
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Collaboration provices interdeciplinarity Thinking to achieve innovative solution.
                      </li>
                    </ul>
                    
                  </div> <!-- /.feature-content -->
                </div><!-- /.col -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <hr class="spacer-sm">
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/NsndhCQ5hRY" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.col -->
                
              </div> <!-- /.row -->

            </div> <!-- /.feature-lg -->


            <hr class="spacer-lg">


            <div class="feature-lg">

              <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <hr class="spacer-xs">
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/63NTB7oObtw" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.col -->
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="feature-content">
                    <h5>Create, Think and Share.</h5>
                    <h3>Sir Ken Robinson: Collaboration in the 21st Centuryier</h3>
                    <p></p>
                    <ul class="icons-list">
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Creativity is operational idea, you can plan for it and make it happen systematically.
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        We need to make continous innovation. 
                      </li>
                      <li>
                        <i class="icon-li fa fa-check text-primary"></i>
                        Creativity is applied innovation.
                      </li>
                    </ul>
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
                    <i class="fa fa-question-circle feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">What is collap.com?</h3>

                    <p class="feature-sm-content">
                      Collap is an engaged community of problem solvers in various domains of Science, Technology, Marketing, Economics, Social Sciences etc. We empower problem solvers with the tools and technology to identify the problems and collaborate with others to solve them.
                       If you have a problem you want solved, simple create a project and challenge fellow Collapers to solve it. With the power of collaboration, no problem is too big.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-users feature-sm-icon text-secondary"></i>

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
                      Collap.com is a free collaborative and talent hunt engine. Collap.com helps in regenarate ideas and keep it alive. Create project for your idea and find similar idea hunter talent and start working here.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-comments-o feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">Why people love to use collap.com? </h3>

                    <p class="feature-sm-content">
                      As collap.com name specify coll-ap collaboration. Its free to use and helps peoples to reach other same interest peoples for working on their idea. Help to find out co-founder.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

                <div class="col-sm-4">
                  <div class="feature-sm">
                    <i class="fa fa-usd feature-sm-icon text-secondary"></i>

                    <h3 class="feature-sm-label">Does I need to pay collap for its services?</h3>

                    <p class="feature-sm-content">
                      Collap is free for use. You do not need to pay any amount for its use. Collap is a collaboration plateform. For future it may charge little only for server running cost and other maintainance costs. Its free to use, so enjoy here.
                    </p>
                  </div> <!-- /.feature-sm -->
                </div> <!-- /.col -->

              </div> <!-- /.row -->

          </div> <!-- /.container -->

        </section>

      </div> <!-- /.content -->


    </div> <!-- /#content -->
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

            </ul>
          </div> <!-- /.col -->


          <div class="col-sm-3">

            <div class="heading-block">
              <h4>Connect With Us</h4>
            </div> <!-- /.heading-block -->

            <ul class="icons-list">

              <li>
                <i class="icon-li fa fa-facebook"></i>
                <a href="https://www.facebook.com/pages/collapcom/739310236156746" target="_blank"> Facebook </a>
              </li>

              <li>
                <i class="icon-li fa fa-twitter"></i>
                <a href="https://twitter.com/collapcom" target="_blank"> Twitter </a>
              </li>

              <!-- <li>
                <i class="icon-li fa fa-soundcloud"></i>
                <a href="javascipt:;">Sound Cloud</a>
              </li> -->

              <li>
                <i class="icon-li fa fa-google-plus"></i>
                <a href="https://plus.google.com/+Collapcom/" target="_blank"> Google Plus </a>
              </li>
            </ul>
            
          </div> <!-- /.col -->

        
          <div class="col-sm-3">

            <div class="heading-block">
              <h4>Stay Updated</h4>
            </div> <!-- /.heading-block -->

            <p>Get emails about new ideas, projects and challanges created &amp;  future updates.</p>
            <br>
            
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
  

  <!--Forget Password Modal-->
  <!--===================================================-->
  <div class="modal fade modal-styled" id="forget-password">
    <div class="modal-dialog">
      <div class="modal-content">

        <!--Modal header-->
        <div class="modal-header" >
          <button data-dismiss="modal" class="close" type="button">
          <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Password Reset</h4>
        </div>

        <!--Modal body-->
        <div class="modal-body">

          <div class="account-wrapper">

            <h5>We'll email you instructions on how to reset your password.</h5>

            <form class="form account-form" method="POST" action="forgetPassword" onsubmit="validateEmail()">

              <div class="form-group">
                <label for="forgot-email" class="placeholder-hidden">Your Email</label>
                <input type="email" class="form-control" id="forgot-email" placeholder="Your Email"  style= "border-color: blue;">
              </div> <!-- /.form-group -->

              <div class="form-group">
                <button type="submit" class="btn btn-secondary btn-block btn-lg">
                  Reset Password &nbsp; <i class="fa fa-refresh"></i>
                </button>
              </div> <!-- /.form-group -->

              <div class="form-group">
                <a data-dismiss="modal" href="#login"><i class="fa fa-angle-double-left"></i> &nbsp;Back to Login</a>
              </div> <!-- /.form-group -->
            </form>

          </div> <!-- /.account-wrapper -->
          
        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!--===================================================-->
  <!--Forget Password Modal ends-->


  <!--Terms and Condition modal-->
  <!--===================================================-->
  <div class="modal fade modal-styled" id="terms-conditions">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!--Modal header-->
        <div class="modal-header" >
          <button data-dismiss="modal" class="close" type="button">
          <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Terms and Conditions</h4>
        </div>

        <!--Modal body-->
        <div class="modal-body">
            
            <h2>Statement of Rights and Responsibilities</h2>
            <p>
              This Statement of Rights and Responsibilities ("Statement," "Terms," or "SRR") derives from the Collap.com Principles, and is our terms of service that governs our relationship with users and others who interact with Collap. By using or accessing Collap, you agree to this Statement, as updated from time to time in accordance with Section 14 below. Additionally, you will find resources at the end of this document that help you understand how Collap works.
              Privacy: Your privacy is very important to us. We designed our Data Use Policy to make important disclosures about how you can use Collap to share with others and how we collect and can use your content and information.
              Sharing Your Content and Information: You own all of the content and information you post on Collap, and you can control how it is shared through your privacy and application settings. In addition:
              For content that is covered by intellectual property rights, like photos and videos (IP content), you specifically give us the following permission, subject to your privacy and application settings: you grant us a non-exclusive, transferable, sub-licensable, royalty-free, worldwide license to use any IP content that you post on or in connection with Collap (IP License). This IP License ends when you delete your IP content or your account unless your content has been shared with others, and they have not deleted it.
              When you delete IP content, it is deleted in a manner similar to emptying the recycle bin on a computer. However, you understand that removed content may persist in backup copies for a reasonable period of time (but will not be available to others).
              When you use an application, the application may ask for your permission to access your content and information as well as content and information that others have shared with you.  We require applications to respect your privacy, and your agreement with that application will control how the application can use, store, and transfer that content and information.  (To learn more about Platform, including how you can control what information other people may share with applications, read our Data Use Policy and Platform Page.)
              When you publish content or information using the Public setting, it means that you are allowing everyone, including people off of Collap, to access and use that information, and to associate it with you (i.e., your name and profile picture).
              We always appreciate your feedback or other suggestions about Collap, but you understand that we may use them without any obligation to compensate you for them (just as you have no obligation to offer them).
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b>Safety</b></span>
            <p>
              We do our best to keep Collap safe, but we cannot guarantee it. We need your help to keep Collap safe, which includes the following commitments by you:
              You will not post unauthorized commercial communications (such as spam) on Collap.
              You will not collect users' content or information, or otherwise access Collap, using automated means (such as harvesting bots, robots, spiders, or scrapers) without our prior permission.
              You will not engage in unlawful multi-level marketing, such as a pyramid scheme, on Collap.
              You will not upload viruses or other malicious code.
              You will not solicit login information or access an account belonging to someone else.
              You will not bully, intimidate, or harass any user.
              You will not post content that: is hate speech, threatening, or pornographic; incites violence; or contains nudity or graphic or gratuitous violence.
              You will not develop or operate a third-party application containing alcohol-related, dating or other mature content (including advertisements) without appropriate age-based restrictions.
              You will follow our Promotions Guidelines and all applicable laws if you publicize or offer any contest, giveaway, or sweepstakes (“promotion”) on Collap.
              You will not use Collap to do anything unlawful, misleading, malicious, or discriminatory.
              You will not do anything that could disable, overburden, or impair the proper working or appearance of Collap, such as a denial of service attack or interference with page rendering or other Collap functionality.
              You will not facilitate or encourage any violations of this Statement or our policies.
            </p>
            <p style="text-align: justify;"><span style="color: #993300;"><b> 
              Registration and Account Security</b></span>
            </p>
            <p>
              Collap users provide their real names and information, and we need your help to keep it that way. Here are some commitments you make to us relating to registering and maintaining the security of your account:
              You will not provide any false personal information on Collap, or create an account for anyone other than yourself without permission.
              You will not create more than one personal account.
              If we disable your account, you will not create another one without our permission.
              You will not use your personal timeline primarily for your own commercial gain, and will use a Collap Page for such purposes.
              You will not use Collap if you are under 13.
              You will not use Collap if you are a convicted sex offender.
              You will keep your contact information accurate and up-to-date.
              You will not share your password (or in the case of developers, your secret key), let anyone else access your account, or do anything else that might jeopardize the security of your account.
              You will not transfer your account (including any Page or application you administer) to anyone without first getting our written permission.
              If you select a username or similar identifier for your account or Page, we reserve the right to remove or reclaim it if we believe it is appropriate (such as when a trademark owner complains about a username that does not closely relate to a user's actual name).
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b> 
            Protecting Other People's Rights</b></span></p>

            <p>
              We respect other people's rights, and expect you to do the same.
              You will not post content or take any action on Collap that infringes or violates someone else's rights or otherwise violates the law.
              We can remove any content or information you post on Collap if we believe that it violates this Statement or our policies.
              We provide you with tools to help you protect your intellectual property rights. To learn more, visit our How to Report Claims of Intellectual Property Infringement page.
              If we remove your content for infringing someone else's copyright, and you believe we removed it by mistake, we will provide you with an opportunity to appeal.
              If you repeatedly infringe other people's intellectual property rights, we will disable your account when appropriate.
              You will not use our copyrights or trademarks (including Collap, the Collap and F Logos, FB, Face, Poke, Book and Wall), or any confusingly similar marks, except as expressly permitted by our Brand Usage Guidelines or with our prior written permission.
              If you collect information from users, you will: obtain their consent, make it clear you (and not Collap) are the one collecting their information, and post a privacy policy explaining what information you collect and how you will use it.
              You will not post anyone's identification documents or sensitive financial information on Collap.
              You will not tag users or send email invitations to non-users without their consent. Collap offers social reporting tools to enable users to provide feedback about tagging.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b> 
            Mobile and Other Devices</b></span></p>

            <p>
              We currently provide our mobile services for free, but please be aware that your carrier's normal rates and fees, such as text messaging and data charges, will still apply.
              In the event you change or deactivate your mobile telephone number, you will update your account information on Collap within 48 hours to ensure that your messages are not sent to the person who acquires your old number.
              You provide consent and all rights necessary to enable users to sync (including through an application) their devices with any information that is visible to them on Collap.
            </p>
            <p style="text-align: justify;"><span style="color: #993300;"><b> 
            Payments</b></span></p>

            <p>
            If you make a payment on Collap or use Collap Credits, you agree to our Payments Terms.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b> 
            Special Provisions Applicable to Social Plugins</b></span></p>

            <p>
              If you include our Social Plugins, such as the Share or Like buttons on your website, the following additional terms apply to you:
              We give you permission to use Collap's Social Plugins so that users can post links or content from your website on Collap.
              You give us permission to use and allow others to use such links and content on Collap.
              You will not place a Social Plugin on any page containing content that would violate this Statement if posted on Collap.
            </p>
            <p style="text-align: justify;"><span style="color: #993300;"><b> 
            Special Provisions Applicable to Developers/Operators of Applications and Websites</b></span></p>

            <p>
              If you are a developer or operator of a Platform application or website, the following additional terms apply to you:
              You are responsible for your application and its content and all uses you make of Platform. This includes ensuring your application or use of Platform meets our Collap Platform Policies and our Advertising Guidelines.
              Your access to and use of data you receive from Collap, will be limited as follows:
              You will only request data you need to operate your application.
              You will have a privacy policy that tells users what user data you are going to use and how you will use, display, share, or transfer that data and you will include your privacy policy URL in the Developer Application.
              You will not use, display, share, or transfer a user’s data in a manner inconsistent with your privacy policy.
              You will delete all data you receive from us concerning a user if the user asks you to do so, and will provide a mechanism for users to make such a request.
              You will not include data you receive from us concerning a user in any advertising creative.
              You will not directly or indirectly transfer any data you receive from us to (or use such data in connection with) any ad network, ad exchange, data broker, or other advertising related toolset, even if a user consents to that transfer or use.
              You will not sell user data.  If you are acquired by or merge with a third party, you can continue to use user data within your application, but you cannot transfer user data outside of your application. 
              We can require you to delete user data if you use it in a way that we determine is inconsistent with users’ expectations.
              We can limit your access to data.
              You will comply with all other restrictions contained in our Collap Platform Policies.
              You will not give us information that you independently collect from a user or a user's content without that user's consent.
              You will make it easy for users to remove or disconnect from your application.
              You will make it easy for users to contact you. We can also share your email address with users and others claiming that you have infringed or otherwise violated their rights.
              You will provide customer support for your application.
              You will not show third party ads or web search boxes on www.Collap.com.
              We give you all rights necessary to use the code, APIs, data, and tools you receive from us.
              You will not sell, transfer, or sublicense our code, APIs, or tools to anyone.
              You will not misrepresent your relationship with Collap to others.
              You may use the logos we make available to developers or issue a press release or other public statement so long as you follow our Collap Platform Policies.
              We can issue a press release describing our relationship with you.
              You will comply with all applicable laws. In particular you will (if applicable):
              have a policy for removing infringing content and terminating repeat infringers that complies with the Digital Millennium Copyright Act.
              comply with the Video Privacy Protection Act (VPPA), and obtain any opt-in consent necessary from users so that user data subject to the VPPA may be shared on Collap.  You represent that any disclosure to us will not be incidental to the ordinary course of your business.
              We do not guarantee that Platform will always be free.
              You give us all rights necessary to enable your application to work with Collap, including the right to incorporate content and information you provide to us into streams, timelines, and user action stories.
              You give us the right to link to or frame your application, and place content, including ads, around your application.
              We can analyze your application, content, and data for any purpose, including commercial (such as for targeting the delivery of advertisements and indexing content for search).
              To ensure your application is safe for users, we can audit it.
              We can create applications that offer similar features and services to, or otherwise compete with, your application.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b>
            About Advertisements and Other Commercial Content Served or Enhanced by Collap</b></span></p>

            <p>
              Our goal is to deliver advertising and other commercial or sponsored content that is valuable to our users and advertisers. In order to help us do that, you agree to the following:
              You give us permission to use your name, profile picture, content, and information in connection with commercial, sponsored, or related content (such as a brand you like) served or enhanced by us. This means, for example, that you permit a business or other entity to pay us to display your name and/or profile picture with your content or information, without any compensation to you. If you have selected a specific audience for your content or information, we will respect your choice when we use it.
              We do not give your content or information to advertisers without your consent.
              You understand that we may not always identify paid services and communications as such.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b> 
            Special Provisions Applicable to Advertisers</b></span></p>

            <p>
              You can target your desired audience by buying ads on Collap or our publisher network. The following additional terms apply to you if you place an order through our online advertising portal (Order):
              When you place an Order, you will tell us the type of advertising you want to buy, the amount you want to spend, and your bid. If we accept your Order, we will deliver your ads as inventory becomes available. When serving your ad, we do our best to deliver the ads to the audience you specify, although we cannot guarantee in every instance that your ad will reach its intended target.
              In instances where we believe doing so will enhance the effectiveness of your advertising campaign, we may broaden the targeting criteria you specify.
              You will pay for your Orders in accordance with our Payments Terms. The amount you owe will be calculated based on our tracking mechanisms.
              Your ads will comply with our Advertising Guidelines.
              We will determine the size, placement, and positioning of your ads.
              We do not guarantee the activity that your ads will receive, such as the number of clicks your ads will get.
              We cannot control how clicks are generated on your ads. We have systems that attempt to detect and filter certain click activity, but we are not responsible for click fraud, technological issues, or other potentially invalid click activity that may affect the cost of running ads.
              You can cancel your Order at any time through our online portal, but it may take up to 24 hours before the ad stops running.  You are responsible for paying for all ads that run.
              Our license to run your ad will end when we have completed your Order. You understand, however, that if users have interacted with your ad, your ad may remain until the users delete it.
              We can use your ads and related content and information for marketing or promotional purposes.
              You will not issue any press release or make public statements about your relationship with Collap without our prior written permission.
              We may reject or remove any ad for any reason.
              If you are placing ads on someone else's behalf, you must have permission to place those ads, including the following:
              You warrant that you have the legal authority to bind the advertiser to this Statement.
              You agree that if the advertiser you represent violates this Statement, we may hold you responsible for that violation.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b> 
              Special Provisions Applicable to Pages</b></span>
            </p>

            <p>
              If you create or administer a Page on Collap, or run a promotion or an offer from your Page, you agree to our Pages Terms.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b> 
              Special Provisions Applicable to Software</b></span></p>

            <p>
              If you download or use our software, such as a stand-alone software product, an app, or a browser plugin, you agree that from time to time, the software may download and install upgrades, updates and additional features from us in order to improve, enhance, and further develop the software.
              You will not modify, create derivative works of, decompile, or otherwise attempt to extract source code from us, unless you are expressly permitted to do so under an open source license, or we give you express written permission.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b>
            Amendments</b></span></p>

            <p>
              Unless we make a change for legal or administrative reasons, or to correct an inaccurate statement, we will provide you with seven (7) days notice (for example, by posting the change on the Collap Site Governance Page) and an opportunity to comment on changes to this Statement.  You can also visit our Collap Site Governance Page and "like" the Page to get updates about changes to this Statement.
              If we make changes to policies referenced in or incorporated by this Statement, we may provide notice on the Site Governance Page.
              Your continued use of Collap following changes to our terms constitutes your acceptance of our amended terms.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b> 
            Termination</b></span></p>

            <p>
            If you violate the letter or spirit of this Statement, or otherwise create risk or possible legal exposure for us, we can stop providing all or part of Collap to you. We will notify you by email or at the next time you attempt to access your account. You may also delete your account or disable your application at any time. In all such cases, this Statement shall terminate, but the following provisions will still apply: 2.2, 2.4, 3-5, 8.2, 9.1-9.3, 9.9, 9.10, 9.13, 9.15, 9.18, 10.3, 11.2, 11.5, 11.6, 11.9, 11.12, 11.13, and 15-19.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b> 
            Disputes</b></span></p>

            <p>
              You will resolve any claim, cause of action or dispute (claim) you have with us arising out of or relating to this Statement or Collap exclusively in the U.S. District Court for the Northern District of California or a state court located in San Mateo County, and you agree to submit to the personal jurisdiction of such courts for the purpose of litigating all such claims. The laws of the State of California will govern this Statement, as well as any claim that might arise between you and us, without regard to conflict of law provisions.
              If anyone brings a claim against us related to your actions, content or information on Collap, you will indemnify and hold us harmless from and against all damages, losses, and expenses of any kind (including reasonable legal fees and costs) related to such claim. Although we provide rules for user conduct, we do not control or direct users' actions on Collap and are not responsible for the content or information users transmit or share on Collap. We are not responsible for any offensive, inappropriate, obscene, unlawful or otherwise objectionable content or information you may encounter on Collap. We are not responsible for the conduct, whether online or offline, or any user of Collap.
              WE TRY TO KEEP Collap UP, BUG-FREE, AND SAFE, BUT YOU USE IT AT YOUR OWN RISK. WE ARE PROVIDING Collap AS IS WITHOUT ANY EXPRESS OR IMPLIED WARRANTIES INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE DO NOT GUARANTEE THAT Collap WILL ALWAYS BE SAFE, SECURE OR ERROR-FREE OR THAT Collap WILL ALWAYS FUNCTION WITHOUT DISRUPTIONS, DELAYS OR IMPERFECTIONS. Collap IS NOT RESPONSIBLE FOR THE ACTIONS, CONTENT, INFORMATION, OR DATA OF THIRD PARTIES, AND YOU RELEASE US, OUR DIRECTORS, OFFICERS, EMPLOYEES, AND AGENTS FROM ANY CLAIMS AND DAMAGES, KNOWN AND UNKNOWN, ARISING OUT OF OR IN ANY WAY CONNECTED WITH ANY CLAIM YOU HAVE AGAINST ANY SUCH THIRD PARTIES. IF YOU ARE A CALIFORNIA RESIDENT, YOU WAIVE CALIFORNIA CIVIL CODE §1542, WHICH SAYS: A GENERAL RELEASE DOES NOT EXTEND TO CLAIMS WHICH THE CREDITOR DOES NOT KNOW OR SUSPECT TO EXIST IN HIS FAVOR AT THE TIME OF EXECUTING THE RELEASE, WHICH IF KNOWN BY HIM MUST HAVE MATERIALLY AFFECTED HIS SETTLEMENT WITH THE DEBTOR. WE WILL NOT BE LIABLE TO YOU FOR ANY LOST PROFITS OR OTHER CONSEQUENTIAL, SPECIAL, INDIRECT, OR INCIDENTAL DAMAGES ARISING OUT OF OR IN CONNECTION WITH THIS STATEMENT OR Collap, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. OUR AGGREGATE LIABILITY ARISING OUT OF THIS STATEMENT OR Collap WILL NOT EXCEED THE GREATER OF ONE HUNDRED DOLLARS ($100) OR THE AMOUNT YOU HAVE PAID US IN THE PAST TWELVE MONTHS. APPLICABLE LAW MAY NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY OR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU. IN SUCH CASES, Collap'S LIABILITY WILL BE LIMITED TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW.
            </p>
            <p>
              Special Provisions Applicable to Users Outside the United States
              We strive to create a global community with consistent standards for everyone, but we also strive to respect local laws. The following provisions apply to users and non-users who interact with Collap outside the United States:
              You consent to having your personal data transferred to and processed in the United States.
              If you are located in a country embargoed by the United States, or are on the U.S. Treasury Department's list of Specially Designated Nationals you will not engage in commercial activities on Collap (such as advertising or payments) or operate a Platform application or website. You will not use Collap if you are prohibited from receiving products, services, or software originating from the United States.
              Certain specific terms that apply only for German users are available here.
            </p>

            <p style="text-align: justify;"><span style="color: #993300;"><b>
            Definitions</b></span></p>

            <p>
              By "Collap" we mean the features and services we make available, including through (a) our website at www.Collap.com and any other Collap branded or co-branded websites (including sub-domains, international versions, widgets, and mobile versions); (b) our Platform; (c) social plugins such as the Like button, the Share button and other similar offerings and (d) other media, software (such as a toolbar), devices, or networks now existing or later developed.
              By "Platform" we mean a set of APIs and services (such as content) that enable others, including application developers and website operators, to retrieve data from Collap or provide data to us.
              By "information" we mean facts and other information about you, including actions taken by users and non-users who interact with Collap.
              By "content" we mean anything you or other users post on Collap that would not be included in the definition of information.
              By "data" or "user data" or "user's data" we mean any data, including a user's content or information that you or third parties can retrieve from Collap or provide to Collap through Platform.
              By "post" we mean post on Collap or otherwise make available by using Collap.
              By "use" we mean use, run, copy, publicly perform or display, distribute, modify, translate, and create derivative works of.
              By "active registered user" we mean a user who has logged into Collap at least once in the previous 30 days.
              By "application" we mean any application or website that uses or accesses Platform, as well as anything else that receives or has received data from us.  If you no longer access Platform but have not deleted all data from us, the term application will apply until you delete the data.
            </p>
            <p>
              If you are a resident of or have your principal place of business in the US or Canada, this Statement is an agreement between you and Collap, Inc.  Otherwise, this Statement is an agreement between you and Collap Ireland Limited.  References to “us,” “we,” and “our” mean either Collap, Inc. or Collap Ireland Limited, as appropriate.
              This Statement makes up the entire agreement between the parties regarding Collap, and supersedes any prior agreements.
              If any portion of this Statement is found to be unenforceable, the remaining portion will remain in full force and effect.
              If we fail to enforce any of this Statement, it will not be considered a waiver.
              Any amendment to or waiver of this Statement must be made in writing and signed by us.
              You will not transfer any of your rights or obligations under this Statement to anyone else without our consent.
              All of our rights and obligations under this Statement are freely assignable by us in connection with a merger, acquisition, or sale of assets, or by operation of law or otherwise.
              Nothing in this Statement shall prevent us from complying with the law.
              This Statement does not confer any third party beneficiary rights.
              We reserve all rights not expressly granted to you.
              You will comply with all applicable laws when using or accessing Collap.
            </p>

        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        </div>

      </div>
    </div>
  </div>
<!-- Terms and Condition modal ends
================================================== -->
<!-- Core JS -->
<script src="static/bower_components/jquery/dist/jquery.js"></script>
<script src="static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- App JS -->
<script src="static/global/js/mvpready-core.js"></script>
<script src="static/global/js/mvpready-helpers.js"></script>
<script src="static/js/mvpready-landing.js"></script>
<!-- <script src="static/js/landingPage.js"></script> -->

<?php include 'static/js/landingPage.php'; ?>

<script type="text/javascript">

function usernameCheck() {
  var xmlhttp;
  var username=document.getElementById("usernameR");
  if (username.value != ""){
    if (window.XMLHttpRequest){
      xmlhttp=new XMLHttpRequest();
    } 
    else {
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        //document.getElementById("status_username").innerHTML=xmlhttp.responseText;
        document.getElementById("usernameR").innerHTML=xmlhttp.responseText;
      }
    };
    xmlhttp.open("GET","<?= $this->baseUrl ?>home/usernameCheck="+encodeURIComponent(username.value),true);
    xmlhttp.send(null);
  }
  return false;
}

function emailCheck() {
  var xmlhttp;
  var email=document.getElementById("email");
  if (email.value != ""){
    if (window.XMLHttpRequest){
      xmlhttp=new XMLHttpRequest();
    } 
    else {
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        //document.getElementById("status_email").innerHTML=xmlhttp.responseText;
        document.getElementById("email").innerHTML=xmlhttp.responseText;
      }
    };
    xmlhttp.open("GET","<?= $this->baseUrl ?>home/emailCheck="+encodeURIComponent(email.value),true);
    xmlhttp.send();
    
  }
};

/*
function email_forget() {
  var xmlhttp;
  var email_forget=document.getElementById("email_forget");
  if (email_forget.value != ""){
    if (window.XMLHttpRequest){
      xmlhttp=new XMLHttpRequest();
    } 
    else {
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("status_email_forget_password").innerHTML=xmlhttp.responseText;
      }
    };
    xmlhttp.open("GET","ajax/email_exist_check_forget_password.php?email_forget="+encodeURIComponent(email_forget.value),true);
    xmlhttp.send();
  }
  if (result = "No user registered with this Email, <br>Please try again with different Email-id or Signup") {                    
  }
}
*/
</script>

<script type="text/javascript">
    function nospaces(t){
        if(t.value.match(/\s/g)){
            //bootstrap_alert(".alert_placeholder_nospace", "Sorry, you are not allowed to enter any spaces", 5000,"alert-warning");
            t.value=t.value.replace(/\s/g,'');
        }
    }
</script>
</body>
</html>