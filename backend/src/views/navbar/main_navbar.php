<?php 

if(!isset($_SESSION['username'])){
  require_once 'views/navbar/navbar.php';;
}
else {

?>
  <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
      <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
          <a href="<?= $baseUrl ?>" class="navbar-brand">
            <img src="<?= $baseUrl ?>static/img/collap.jpg" alt="Collap Logo" class="brand-icon">
            <div class="brand-title">
              <span class="brand-text">Collap</span>
            </div>
          </a>
        </div>

        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
          <ul class="nav navbar-top-links pull-left">

            <!--Navigation toogle button-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li class="tgl-menu-btn">
              <a class="mainnav-toggle" href="#" id="nav-controller">
                <i class="fa fa-navicon fa-lg"></i>
              </a>
            </li>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End Navigation toogle button-->
          
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            


            <!--Notification dropdown-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-bell fa-lg"></i>
                <!-- <span class="badge badge-header badge-danger">5</span> -->
              </a>

              <!--Notification dropdown menu-->
              <div class="dropdown-menu dropdown-menu-md with-arrow">
                <div class="pad-all bord-btm">
                  <!-- <p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p> -->
                </div>
                <div class="nano scrollable">
                  <div class="nano-content">
                    <ul class="head-list">
                  
                      <!-- Dropdown list-->
                      <?php foreach ($this->notifications as $key => $value) { ?>
                        <!-- Dropdown list-->
                        <li>
                          <?= $value->getNoticelUrl() ?>
                        </li>
                      <?php } ?>
                  
                      <!-- Dropdown list-->
                      <!-- <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <span class="icon-wrap bg-success">
                              <i class="fa fa-user fa-lg"></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">New User Registered</div>
                            <small class="text-muted">4 minutes ago</small>
                          </div>
                        </a>
                      </li> -->
                    </ul>
                  </div>
                </div>

                <!--Dropdown footer-->
                <div class="pad-all bord-top">
                  <a href="#" class="btn-link text-dark box-block">
                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                  </a>
                </div>
              </div>
            </li>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End notifications dropdown-->

            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            <li></li>
            <li></li>
            <!-- <li>
              <form class="" role="search" style="margin-top: 8px; margin-left: 8px" >
                <input type="text" class="form-control input-md mainnav-search-query" placeholder="Search">
                <button class="btn btn-sm mainnav-form-btn" style="margin-top: 8px;"><i class="fa fa-search"></i></button>
              </form>
            </li> -->

          </ul>


            
  

          <ul class="nav navbar-top-links pull-right">
            
            <!--User dropdown-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li id="dropdown-user" class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                <span class="pull-right">
                  <img class="img-circle img-user media-object" src="/uploads/profilePictures/<?= $_SESSION['username'] ?>.jpg" alt="Profile Picture">
                </span>
                <div class="username hidden-xs"><?= ucfirst($_SESSION['first_name']) ?></div>
              </a>


              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

                <!-- User dropdown menu -->
                <ul class="head-list">
                  <li>
                    <a href="<?= $baseUrl ?>profile">
                      <i class="fa fa-user fa-fw fa-lg"></i> Profile
                    </a>
                  </li>
                 
                  <li>
                    <a href="<?= $baseUrl ?>setting">
                      <i class="fa fa-gear fa-fw fa-lg"></i> Settings
                    </a>
                  </li>
                 
                </ul>

                <!-- Dropdown footer -->
                <div class="pad-all text-right">
                  <a href="<?= $baseUrl ?>home/logout" class="btn btn-primary">
                    <i class="fa fa-sign-out fa-fw"></i> Logout
                  </a>
                </div>
              </div>
            </li>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End user dropdown-->
            
          </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

      

    </div> <!-- /.navbar-container -->
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->
<?php } ?>