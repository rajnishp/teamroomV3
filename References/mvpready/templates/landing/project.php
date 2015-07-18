<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Homepage &middot; Welcome to Collap</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include_once 'html_components/header.php'; ?>

</head>

<body>

<div id="container" class="effect mainnav-lg">
  <?php include_once 'html_components/main_navbar.php'; ?>

  <?php include_once 'html_components/sidebar_button.php'; ?>

  <div id="content-container">

    <!--   <hr class="spacer-sm"> -->
      
      <div class="row">

        <div class="col-sm-12 col-md-8 col-md-offset-1">

          <img src="imgs/Open.png" style="width=400px;">
          <section class="demo-section">

            <div class="heading-block">
              
            </div> <!-- /.heading-block -->

            <ul id="myTab1" class="nav nav-tabs">
              <li class="active">
                <a href="#home" data-toggle="tab">Overview</a>
              </li>

              <li class="">
                <a href="#profile" data-toggle="tab">Description</a>
              </li>

              <li class="">
                <a href="#profile" data-toggle="tab">Discussion</a>
              </li>

              <li class="">
                <a href="#profile" data-toggle="tab">Dashboard</a>
              </li>

              <li class="">
                <a href="#profile" data-toggle="tab">Dashboard</a>
              </li>
              
              <li class="dropdown">
                <a href="javascript:;" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">
                  Dropdown <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                  <li class=""><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
                  <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
                </ul>
              </li>
            </ul>

            <div id="myTab1Content" class="tab-content">

              <div class="tab-pane fade active in" id="home">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              </div> <!-- /.tab-pane -->

            </div> <!-- /.tab-content -->

          </section> <!-- /.demo-section -->
        
        </div>

        <div class="col-sm-12 col-md-3">
            <div class="heading-block">
              Popular Projects           
            </div> <!-- /.heading-block -->

            <div class="row">
              <div class="col-sm-4 col-md-4">
                <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
              </div>

              <div class="col-sm-6 col-md-8">
                <a href="#"> Project Name</a>
                <br/>
                <a href="javascript:;" class="btn btn-success btn-sm btn-sm">Join</a> 
                &nbsp;
                <a href="javascript:;" class="btn btn-tertiary btn-sm btn-sm">Message</a>
              </div>
            </div>
    

            <div class="row">
              <div class="col-sm-4 col-md-4">
                <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
              </div>

              <div class="col-sm-6 col-md-8">

                <a href="#"> Project Name</a>
                <br/>
                <a href="javascript:;" class="btn btn-success btn-sm btn-sm">Join</a> 
                  &nbsp;
                <a href="javascript:;" class="btn btn-tertiary btn-sm btn-sm">Message</a>
              </div>
            </div>

                
            <div class="heading-block">
              Online Collaborators   
            </div> <!-- /.heading-block -->

            <div class="row">

              <div class="col-sm-4 col-md-4">
                <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
              </div>

              <div class="col-sm-6 col-md-8">

                <a href="#"><h3> Project Name </h3></a>
              </div>
            </div>

            <div class="row">

              <div class="col-sm-4 col-md-4">
                <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
              </div>

              <div class="col-sm-6 col-md-8">

                <a href="#"><h3> Project Name </h3></a>
              </div>
            </div>

        </div>

      </div>
  </div>

</div>

<?php include_once 'html_components/footer.php'; ?>
       