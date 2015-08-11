  <?php require_once 'views/source/actionDropdown.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Collap &middot; Project page</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include_once 'views/header/header.php'; ?>

</head>

<body>

  <div id="container" class="effect mainnav-lg">
        
    <?php require_once 'views/navbar/main_navbar.php'; ?>


    <div class="boxed">

      <div id="content-container">

        <div class="row">

    
          <div class="col-md-10 col-sm-10 col-md-offset-1 col-xs-12 col-sm-offset-1">

            <img src="<?= $baseUrl ?>static/imgs/kapitalia.jpg" class="img-responsive" alt="" >
            <hr class="spacer-sm">

            
            <div class="row text-center">
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3 col-lg-offset-4 col-md-offset-4">

                  <h4><small>VIEWS</small></h4>
                  <p class="semibold">4</p>
                </div>  

                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">

                  <h4><small>FOLLOWERS</small></h4>          
                  <p class="semibold">23</p>   
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">

                  <h4><small>SHARES</small></h4>               
                  <p class="semibold">123</p>   
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">

                  <h4><small>Contact</small></h4>               
                  <a href="../icon/facebook-square"><i class="fa fa-facebook-square"></i></a>
                  <a href="../icon/twitter-square"><i class="fa fa-twitter-square"></i></a>
                </div>

            </div>

            <div class="text-center">
              <p>
                <a href="javascript:;" class="btn btn-info">Follow</a> 
              </p>
            </div>
          
          </div>
        </div>

        <div class="row">  

          <div class="col-md-7 col-sm-7 col-xs-11 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
            <hr>
            <div class="post-title">
                <h4>
                  DESCRIPTION
                </h4>
            </div> <!-- /.heading-block -->

            <div class="post-content">
              <p> 
                User experience design (UXD or UED) is the process of enhancing user satisfaction by improving the usability, accessibility, and pleasure provided in the interaction between the user and the product.[1] User experience design encompasses traditional human–computer interaction (HCI) design, and extends it by addressing all aspects of a product or service as perceived by user
              </p>
            </div>

            <hr>

            <!-- /.Activities-block -->
            <div class="activities-start">
                      
              <div class="post-title">
                  <h3>
                    Activities
                  </h3>
              </div> <!-- /.heading-block -->
      
              <hr>            
              <hr class="spacer-sm">

              <div class="activity-1 post">


                <div class="post-aside" style="padding-top: 28px;">
                  <div class="post-date">
                    <span class="post-date-day">12</span>
                    <span class="post-date-month"> January</span>
                    <span class="post-date-year"> 2015</span>
                  </div>

                  <a href="#comments" class="post-comment">
                    4
                  </a>
                </div> <!-- /.post-aside -->

                <div class="post-main">

                  <a href= '#' target="_blank">
                    <h4 class="post-title"> Google teams with Disney to make intergalactic cartoon to inspire kids to code</h4>
                  </a>
                  <h4 class="post-meta">Published by <a href="javascript:;">Rajnish Panwar</a> in <a href="javascript:;">India</a></h4>
                  <img src="<?= $baseUrl ?>static/imgs/googleactivity.jpg" class="post-img img-responsive" alt="Project Image" >
                  
                  <hr class="spacer-sm">
                    
                  <div class="post-content">
                    <p> This one might be a show for kids that’s just as fun for adults to watch. Google has partnered with Disney to make a new cartoon series, Miles from Tomorrowland, to inspire kids to code.
                        In this outer space adventure, Miles explores the galaxy with his family and best friend in tow. Miles’ family joins him for the ride, including his mom and ship captain, Phoebe, his mechanical engineer dad, Leo, his tech-savvy big sister, Loretta, and his best friend and pet robo-ostrich Merc. The show is designed to not only fuel kids’ interest in space but also coding, teamwork, critical thinking and exploration. The show’s makers tapped consultants from NASA, Space Tourism Society and Google to keep it real. 
                        Characters are voiced by a stellar cast, too, including Olivia Munn, Adrian Grenier, Mark Hamill, George Takei, Bill Nye, Wil Wheaton, Alton Brown and Brenda Song.
                        The series’ premiere is tomorrow, Feb. 6, on the Disney Channel, starting at 9 a.m. PT. You can watch four back-to-back episodes, each featuring space facts integrated into the storylines of Miles’ missions as he strives to “connect the galaxy on behalf of Tomorrowland Transit Authority.
                    </p>
                  </div>
                </div>
                
                <ol class="comment-list">
                  <li></li>
                  <li>
                    <div class="comment">

                      <div class="comment-avatar">
                        <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" style="width: 44px; height: 44px;" class="avatar">
                      </div> <!-- /.comment-avatar -->

                      <div class="comment-meta">
                      <p> <?= "The Sample Comment" ?> </p>
                      </div>
                    </div>
                  </li>
                  
                  <li>

                    <?php 
                      $img_url = "$baseUrl"."/static/imgs/rajnish.jpg";
                      postComment( $img_url , 'project/activity/comment', 'comment_to_project_activity' , 'comment_project_avtivity');
                    ?>
                  </li>
                
                </ol>

              </div>          
            </div>
            <!-- /.Activities-block ends-->

          </div>

          <div class="col-md-3 col-sm-4">
            <hr>
            <div class="post-title">
              <h4>
                TOPIC
              </h4>
            </div> <!-- /.heading-block -->

            <div class="">
              <span class="btn btn-secondary btn-sm"> Tag </span>
              <span class="btn btn-secondary btn-sm"> Technology </span>
              <span class="btn btn-secondary btn-sm"> IT </span>
              <span class="btn btn-secondary btn-sm"> Engineering </span>

            </div> <!-- /.list-group -->

            <hr>

          </div>
        </div>
      
      </div> <!-- id Content-container div end -->

      <?php require_once 'views/sidebar/sidebar_button.php'; ?>

    
    </div> <!-- boxed div end -->
    
  </div>
  <!-- id container div end -->


  <?php include_once 'views/footer/footer.php'; ?>

  </body>
</html>