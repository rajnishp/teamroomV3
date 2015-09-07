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
              <!-- For facebook Likes -->
              <div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
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
              </form>
            
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
              <!-- For facebook Likes -->
              <div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
              
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
                <div class="form-group" id="password_div">
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
            <div id = "forget_password_fiv">
              <form class="form account-form" onsubmit="return (validateForgetPassword());">

                <div class="form-group">
                  <label for="forget_email" class="placeholder-hidden">Your Email</label>
                  <input type="email" class="form-control" id="forget_email" placeholder="Your Email"  style= "border-color: blue;" />
                  <span id = "forget_email_status"></span>
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
            </div>
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
  <?php include 'views/landing/termsCondition.php'; ?>
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

<!-- Fb plugin script added by Rajnish -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '999514663402400',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Fb plugin script ends here-->

</body>
</html>