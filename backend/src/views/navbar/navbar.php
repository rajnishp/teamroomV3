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

      <nav class="collapse navbar-collapse navbar-right" role="navigation">

        <!-- <form class="mainnav-form" role="search">
          <input type="text" class="form-control input-md mainnav-search-query" placeholder="Search">
          <button class="btn btn-sm mainnav-form-btn"><i class="fa fa-search"></i></button>
        </form>
 -->
        <ul class="mainnav-menu">

          <li class="dropdown ">
            <a href="<?= $baseUrl ?>#login<?= $this->url ? "?from=".urlencode($this->url):"" ?>">
              Login
            </a>
          </li>

          <li class="dropdown ">
            <a href="<?= $baseUrl ?>#register<?= $this->url ? "?from=".urlencode($this->url):"" ?>">
              Register
            </a>
          </li>  


          <li class="dropdown ">
            <a href="<?= $baseUrl ?>#faq<?= $this->url ? "?from=".urlencode($this->url):"" ?>">
              FAQ
            </a>
          </li>


          <li class="dropdown ">
            <a href="<?= $baseUrl ?>#contact<?= $this->url ? "?from=".urlencode($this->url):"" ?>">
              Contact
            </a>
          </li>


          <!-- <li class="dropdown ">

            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            Login
            <i class="fa fa-caret-down navbar-caret"></i>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="./account-login.html">
                <i class="fa fa-unlock dropdown-icon"></i> 
                Login
                </a>
              </li>  

              <li>
                <a href="./account-login-social.html">
                <i class="fa fa-unlock dropdown-icon"></i> 
                Login Social
                </a>
              </li>    

              <li>
                <a href="./account-forgot.html">
                <i class="fa fa-unlock dropdown-icon"></i> 
                Forgot Password
                </a>
              </li> 

              <li>
                <a href="./account-signup.php">
                <i class="fa fa-star dropdown-icon"></i> 
                Signup
                </a>
              </li>
            </ul>
          </li> -->

        </ul>

      </nav>

    </div> <!-- /.container -->

  </div> <!-- /.mainnav -->