  <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
      <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand">
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
              <a class="mainnav-toggle" href="#">
                <i class="fa fa-navicon fa-lg"></i>
              </a>
            </li>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End Navigation toogle button-->
          
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            <li class="dropdown">
              <a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
              
              Dashboards
              <i class="mainnav-caret"></i>
              </a>

              <ul class="dropdown-menu with-arrow" role="menu">
                <li>
                  <a href="./index.html">
                  <i class="fa fa-dashboard dropdown-icon "></i> 
                  Analytics Dashboard
                  </a>
                </li>

                <li>
                  <a href="./dashboard-2.html">
                  <i class="fa fa-dashboard dropdown-icon "></i> 
                  Sidebar Dashboard
                  </a>
                </li>

                <li>
                  <a href="./dashboard-3.html">
                  <i class="fa fa-dashboard dropdown-icon "></i> 
                  Reports Dashboard
                  </a>
                </li>
              </ul>
            </li>


            <!--Messages Dropdown-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-envelope fa-lg"></i>
                <span class="badge badge-header badge-warning">9</span>
              </a>

              <!--Message dropdown menu-->
              <div class="dropdown-menu dropdown-menu-md with-arrow">
                <div class="pad-all bord-btm">
                  <p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
                </div>
                <div class="nano scrollable">
                  <div class="nano-content">
                    <ul class="head-list">
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <img src="img/av2.png" alt="Profile Picture" class="img-circle img-sm">
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Andy sent you a message</div>
                            <small class="text-muted">15 minutes ago</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <img src="img/av4.png" alt="Profile Picture" class="img-circle img-sm">
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Lucy sent you a message</div>
                            <small class="text-muted">30 minutes ago</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm">
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Jackson sent you a message</div>
                            <small class="text-muted">40 minutes ago</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <img src="img/av6.png" alt="Profile Picture" class="img-circle img-sm">
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Donna sent you a message</div>
                            <small class="text-muted">5 hours ago</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <img src="img/av4.png" alt="Profile Picture" class="img-circle img-sm">
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Lucy sent you a message</div>
                            <small class="text-muted">Yesterday</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm">
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Jackson sent you a message</div>
                            <small class="text-muted">Yesterday</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <!--Dropdown footer-->
                <div class="pad-all bord-top">
                  <a href="#" class="btn-link text-dark box-block">
                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages
                  </a>
                </div>
              </div>
            </li>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End message dropdown-->




            <!--Notification dropdown-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-bell fa-lg"></i>
                <span class="badge badge-header badge-danger">5</span>
              </a>

              <!--Notification dropdown menu-->
              <div class="dropdown-menu dropdown-menu-md with-arrow">
                <div class="pad-all bord-btm">
                  <p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
                </div>
                <div class="nano scrollable">
                  <div class="nano-content">
                    <ul class="head-list">

                      <!-- Dropdown list-->
                      <li>
                        <a href="#">
                          <div class="clearfix">
                            <p class="pull-left">Database Repair</p>
                            <p class="pull-right">70%</p>
                          </div>
                          <div class="progress progress-sm">
                            <div style="width: 70%;" class="progress-bar">
                              <span class="sr-only">70% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <!-- Dropdown list-->
                      <li>
                        <a href="#">
                          <div class="clearfix">
                            <p class="pull-left">Upgrade Progress</p>
                            <p class="pull-right">10%</p>
                          </div>
                          <div class="progress progress-sm">
                            <div style="width: 10%;" class="progress-bar progress-bar-warning">
                              <span class="sr-only">10% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <span class="icon-wrap icon-circle bg-primary">
                              <i class="fa fa-comment fa-lg"></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">New comments waiting approval</div>
                            <small class="text-muted">15 minutes ago</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                      <span class="badge badge-success pull-right">90%</span>
                          <div class="media-left">
                            <span class="icon-wrap icon-circle bg-danger">
                              <i class="fa fa-hdd-o fa-lg"></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">HDD is full</div>
                            <small class="text-muted">50 minutes ago</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                          <div class="media-left">
                            <span class="icon-wrap bg-info">
                              <i class="fa fa-file-word-o fa-lg"></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Write a news article</div>
                            <small class="text-muted">Last Update 8 hours ago</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
                        <a href="#" class="media">
                      <span class="label label-danger pull-right">New</span>
                          <div class="media-left">
                            <span class="icon-wrap bg-purple">
                              <i class="fa fa-comment fa-lg"></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Comment Sorting</div>
                            <small class="text-muted">Last Update 8 hours ago</small>
                          </div>
                        </a>
                      </li>
                  
                      <!-- Dropdown list-->
                      <li>
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
                      </li>
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
            <li>
              <form class="" role="search" style="margin-top: 8px; margin-left: 8px" >
                <input type="text" class="form-control input-md mainnav-search-query" placeholder="Search">
                <button class="btn btn-sm mainnav-form-btn" style="margin-top: 8px;"><i class="fa fa-search"></i></button>
              </form>
            </li>

          </ul>


            
  

          <ul class="nav navbar-top-links pull-right">
            
            <!--User dropdown-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li id="dropdown-user" class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                <span class="pull-right">
                  <img class="img-circle img-user media-object" src="<?= $baseUrl ?>static/img/av1.png" alt="Profile Picture">
                </span>
                <div class="username hidden-xs">Rajnish Panwar</div>
              </a>


              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

                <!-- Dropdown heading  -->
                <div class="pad-all bord-btm">
                  <p class="text-lg text-muted text-thin mar-btm">750Gb of 1,000Gb Used</p>
                  <div class="progress progress-sm">
                    <div class="progress-bar" style="width: 70%;">
                      <span class="sr-only">70%</span>
                    </div>
                  </div>
                </div>


                <!-- User dropdown menu -->
                <ul class="head-list">
                  <li>
                    <a href="#">
                      <i class="fa fa-user fa-fw fa-lg"></i> Profile
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="badge badge-danger pull-right">9</span>
                      <i class="fa fa-envelope fa-fw fa-lg"></i> Messages
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="label label-success pull-right">New</span>
                      <i class="fa fa-gear fa-fw fa-lg"></i> Settings
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-question-circle fa-fw fa-lg"></i> Help
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-lock fa-fw fa-lg"></i> Lock screen
                    </a>
                  </li>
                </ul>

                <!-- Dropdown footer -->
                <div class="pad-all text-right">
                  <a href="pages-login.html" class="btn btn-primary">
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