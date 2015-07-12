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

  <?php require_once 'views/header/header.php'; ?>

</head>

  <body>

    <div id="container" class="effect mainnav-lg">
        
      <?php require_once 'views/navbar/main_navbar.php'; ?>


      <div class="boxed">


        <div id="content-container">

          <!--   <hr class="spacer-sm"> -->
            
            <div class="row">

              <div class="col-sm-12 col-md-8 col-md-offset-1">

                <div class="panel">
          
                  <!-- Panel heading -->
                  <div class="panel-heading">
                    <div class="panel-control">
                      <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#demo-tabs-box-1"><i class="fa fa question"></i> Activity</a></li>
                        <li><a data-toggle="tab" href="#demo-tabs-box-2"><i class="fa fa video"></i> Videos</a></li>
                        <li><a data-toggle="tab" href="#demo-tabs-box-3"><i class="fa fa link"></i> Share Link</a></li>
                      </ul>
                    </div>
                    <h3 class="panel-title">Post to Collap</h3>
                  </div>
            
                  <!-- Panel body -->
                  
                  <div class="panel-body">
                    <div class="tab-content">
                      <div id="demo-tabs-box-1" class="tab-pane fade in">

                        <form id="demo-bv-errorcnt" class="form-horizontal" action="#" method="post">

                        
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Title</label>
                            <div class="col-lg-7">
                              <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                          </div>
                          <div class="form-group pad-btm">
                            <label class="col-lg-3 control-label">Description</label>
                            <div class="col-lg-7">
                              <textarea class="form-control" name="description" rows="7" placeholder="Tell us your story..."></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">File input</label>
                            <div class="col-md-9">
                              <span class="pull-left btn btn-default btn-file">
                              Browse... <input type="file">
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Post Type</label>
                            <div class="col-md-9">
                      
                              <select class="selectpicker">
                                <option>Challenge</option>
                                <option>Article</option>
                                <option>Photo</option>
                                <option>Idea</option>
                              </select>
                              <!--===================================================-->
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-7 col-sm-offset-3">
                              <button class="btn btn-primary btn-labeled fa fa-send fa-lg" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    
                
          
                      <!--SHOWING ERRORS IN POPOVER-->
                      <!--===================================================-->
                      <div id="demo-tabs-box-2" class="tab-pane fade">
                        <form id="demo-bv-errorcnt" class="form-horizontal" action="#" method="post">
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Title</label>
                            <div class="col-lg-7">
                              <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Youtube URL</label>
                            <div class="col-lg-7">
                              <input type="text" class="form-control" name="website" placeholder="http://" />
                            </div>
                          </div>
                          <div class="form-group pad-btm">
                            <label class="col-lg-3 control-label">Description</label>
                            <div class="col-lg-7">
                              <textarea class="form-control" name="description" rows="7" placeholder="Tell us your story..."></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-7 col-sm-offset-3">
                              <button class="btn btn-primary btn-labeled fa fa-send fa-lg" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
          
                      <div id="demo-tabs-box-3" class="tab-pane fade">
                        <form id="demo-bv-errorcnt" class="form-horizontal" action="#" method="post">
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Share URL</label>
                            <div class="col-lg-7">
                              <input type="text" class="form-control" name="website" placeholder="http://" />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-7 col-sm-offset-3">
                              <button class="btn btn-primary btn-labeled fa fa-send fa-lg" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                     
                    </div>
                  </div>
                </div>




                <!-- /.Activities-block -->
<div class="activities-start">
          
            <div class="post-title">
                <h3>
                  Activities
                </h3>
            </div> <!-- /.heading-block -->
            <hr>            
            <hr class="spacer-sm">


          <div class="activity-1">


            <? foreach ($top10Activities as $activity) { ?>
            <div class="post">
                <div class="post-aside" style="padding-top: 28px;">
                  <div class="post-date">
                    <?php $data = date_parse($activity->getCreationTime()); ?>
                    <span class="post-date-day"><?= $data["day"] ?></span>
                    <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                    <span class="post-date-year"><?= $data["year"] ?></span>
                  </div>


              
                </div> <!-- /.post-aside -->
              <div class="post-main">
              <h4 class="post-title"><?= $activity->getRefinedTitle() ?></h4>
              <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                  
              
              <div class="post-content">
                <p> 
                  <?= $activity->getRefinedStmt() ?>
                </p>
              </div>
              </div>
              <hr>
              <hr class="spacer-sm">
            </div>
            
            <? } ?>
            
            
            <ol class="comment-list">
              <li></li>
              <li>
                <div class="comment">

                  <div class="comment-avatar">
                    <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar">
                  </div> <!-- /.comment-avatar -->

                  <div class="comment-meta">

                    <span class="comment-author">
                      <a href="javascript:;" class="url">Rajnish Kumar </a>
                    </span>

                    <a href="javascript:;" class="comment-timestamp">
                      April 3, 2013 at 6:47 am
                    </a>

                    -

                    <!-- <a class="comment-reply-link" href="javascript:;">Reply</a> -->

                  </div> <!-- /.comment-meta -->

                  <div class="comment-body">
                  <p> This is comment box, looks nice,, hav eto improve 
                  ux more, stay on work,, nice article</p>
                  </div> <!-- /.comment-body -->

                </div> <!-- /.comment -->
              </li>

              <li>
                <div class="comment">

                  <div class="comment-avatar">
                    <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar">
                  </div> <!-- /.comment-avatar -->

                  <div class="comment-meta">

                    <span class="comment-author">
                      <a href="javascript:;" class="url">Rajnish Kumar </a>
                    </span>

                    <a href="javascript:;" class="comment-timestamp">
                      April 3, 2013 at 6:47 am
                    </a>

                    -

                    <!-- <a class="comment-reply-link" href="javascript:;">Reply</a> -->

                  </div> <!-- /.comment-meta -->

                  <div class="comment-body">
                  <p> This is comment box, looks nice,, hav eto improve 
                  ux more, stay on work,, nice article</p>
                  </div> <!-- /.comment-body -->

                </div> <!-- /.comment -->
              </li>

              <li>
                <div class="comment">

                  <div class="comment-avatar">
                    <img alt="" src="<?= $baseUrl ?>static/imgs/github.png" class="avatar">
                  </div> <!-- /.comment-avatar -->

                  <div class="comment-meta">

                    <span class="comment-author">
                      <a href="javascript:;" class="url">Rajnish Kumar </a>
                    </span>

                    <a href="javascript:;" class="comment-timestamp">
                      April 3, 2013 at 6:47 am
                    </a>

                    -

                    <!-- <a class="comment-reply-link" href="javascript:;">Reply</a> -->

                  </div> <!-- /.comment-meta -->

                  <div class="comment-body">
                  <p> This is comment box, looks nice,, hav eto improve 
                  ux more, stay on work,, nice article</p>
                  </div> <!-- /.comment-body -->

                </div> <!-- /.comment -->
              </li>
            </ol>
          
          </div>


            
            <hr>

          <div class="activity-2">
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
              <!-- /.heading-block -->
              <a href= '#' target="_blank">
                <h4 class="post-title">Researchers parallelize a common data structure to work with multicore chips </h4>
              </a>
              <h4 class="post-meta">Published by <a href="javascript:;">Rajnish Panwar</a> in <a href="javascript:;">India</a></h4>

              <img src="<?= $baseUrl ?>static/imgs/image2.jpeg" class="post-img img-responsive" alt="Project Image" >
              
              <hr class="spacer-sm">
                
              <div class="post-content">
                <p> Parallelizing common algorithms:
                    Researchers revamp a common "data structure" so that it will work with multicore chips.
                    Every undergraduate computer-science major takes a course on data structures, which describes different ways of organizing data in a computer’s memory. Every data structure has its own advantages: Some are good for fast retrieval, some for efficient search, some for quick insertions and deletions, and so on.
                    Today, hardware manufacturers are making computer chips faster by giving them more cores, or processing units. But while some data structures are well adapted to multicore computing, others are not. In principle, doubling the number of cores should double the efficiency of a computation. With algorithms that use a common data structure called a priority queue, that’s been true for up to about eight cores — but adding any more cores actually causes performance to plummet.
                    At the Association for Computing Machinery’s Symposium on Principles and Practice of Parallel Programming in February, researchers from MIT’s Computer Science and Artificial Intelligence Laboratory will describe a new way of implementing priority queues that lets them keep pace with the addition of new cores. In simulations, algorithms using their data structure continued to demonstrate performance improvement with the addition of new cores, up to a total of 80 cores.
                </p>
              </div>


              <ol class="comment-list">
              <li></li>
              <li>
                <div class="comment">

                  <div class="comment-avatar">
                    <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar">
                  </div> <!-- /.comment-avatar -->

                  <div class="comment-meta">

                    <span class="comment-author">
                      <a href="javascript:;" class="url">Rajnish Kumar </a>
                    </span>

                    <a href="javascript:;" class="comment-timestamp">
                      April 3, 2013 at 6:47 am
                    </a>

                    -

                    <!-- <a class="comment-reply-link" href="javascript:;">Reply</a> -->

                  </div> <!-- /.comment-meta -->

                  <div class="comment-body">
                  <p> This is comment box, looks nice,, hav eto improve 
                  ux more, stay on work,, nice article</p>
                  </div> <!-- /.comment-body -->

                </div> <!-- /.comment -->
              </li>

              <li>
                <div class="comment">

                  <div class="comment-avatar">
                    <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar">
                  </div> <!-- /.comment-avatar -->

                  <div class="comment-meta">

                    <span class="comment-author">
                      <a href="javascript:;" class="url">Rajnish Kumar </a>
                    </span>

                    <a href="javascript:;" class="comment-timestamp">
                      April 3, 2013 at 6:47 am
                    </a>

                    -

                    <!-- <a class="comment-reply-link" href="javascript:;">Reply</a> -->

                  </div> <!-- /.comment-meta -->

                  <div class="comment-body">
                  <p> This is comment box, looks nice,, hav eto improve 
                  ux more, stay on work,, nice article</p>
                  </div> <!-- /.comment-body -->

                </div> <!-- /.comment -->
              </li>

              <li>
                <div class="comment">

                  <div class="comment-avatar">
                    <img alt="" src="<?= $baseUrl ?>static/imgs/github.png" class="avatar">
                  </div> <!-- /.comment-avatar -->

                  <div class="comment-meta">

                    <span class="comment-author">
                      <a href="javascript:;" class="url">Rajnish Kumar </a>
                    </span>

                    <a href="javascript:;" class="comment-timestamp">
                      April 3, 2013 at 6:47 am
                    </a>

                    -

                    <!-- <a class="comment-reply-link" href="javascript:;">Reply</a> -->

                  </div> <!-- /.comment-meta -->

                  <div class="comment-body">
                  <p> This is comment box, looks nice,, hav eto improve 
                  ux more, stay on work,, nice article</p>
                  </div> <!-- /.comment-body -->

                </div> <!-- /.comment -->
              </li>
            </ol>

            </div>
            <hr>
          </div>
        </div>


              
              </div>

              <div class="col-sm-12 col-md-3">
              
              </div>

            </div>
        </div>

        <?php require_once 'views/sidebar/sidebar_button.php'; ?>

      </div>
    </div>

    <?php require_once 'views/footer/footer.php'; ?>


  </body>
</html>