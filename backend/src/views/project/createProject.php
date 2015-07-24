<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Create New Project</title>

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
            
            <div class="row">

              <div class="col-sm-10 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">

                  <div class="heading-block">
                    <h3>
                      Create New Project
                    </h3>
                  </div> <!-- /.heading-block -->
                  
                  <form class="form-horizontal" onSubmit="return (validateCreateProject());">

                    

                    <div class="form-group">

                      <label class="col-md-3 control-label">Title</label>

                      <div class="col-md-7">
                        <input type="text" id ="title" class="form-control" placeholder="Title" />
                      </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                    <div class="form-group">

                      <label class="col-md-3 control-label">Used Technical Skills</label>

                      <div class="col-md-7">
                        <input type="text" id="tech_skills" class="form-control" placeholder="Used Technical Skills..." />
                      </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                    <div class="form-group">

                      <label class="col-md-3 control-label">Your Role</label>

                      <div class="col-md-7">
                        <input type="text" id="my_role" class="form-control" placeholder="Specify Your Role" />
                      </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                    <div class="form-group">

                      <label class="col-md-3 control-label">Team Size</label>
                      <div class="col-md-7">
                        <input type="integer" id="team_size" class="form-control" placeholder="Team Size" />
                      </div>

                    </div> <!-- /.form-group -->

                    <div class="form-group">

                      <label class="col-md-3 control-label">Duration</label>
                      <div class="col-md-7">
                        <div id="demo-dp-range">
                          <div class="input-daterange input-group" id="datepicker">
                            <input type="text" class="form-control" name="start" id="start"/>
                            <span class="input-group-addon">To</span>
                            <input type="text" class="form-control" name="end" id="end" />
                          </div>
                        </div>
                      </div>

                    </div> <!-- /.form-group -->

                    <div class="form-group">
                      <label class="col-md-3 control-label">Description</label>
                      <div class="col-md-7">
                       
                        <textarea class="form-control share-widget-textarea" id = "description" rows="10" placeholder="Share what you've been up to..." tabindex="1"></textarea>

                        <div class="share-widget-actions">
                          <div class=" pull-left">
                            <div class="col-md-6">
                             
                              <select class="selectpicker" name="type" data-live-search="true" data-width="100%" id= "type" >    
                                  <option value='Public' >Public</option>
                                  <option value='Classified' >Classified</option>
                                  <option value='Private' >Private</option>
                              </select>
                             
                            </div>
                            <div class="col-md-6">
                              <input type="file" name="file" class="btn btn-default btn-file" value="Browse">
                            </div>    
                          </div>  

                          <div class="pull-right">
                            <button type="submit" class="btn btn-primary btn-labeled fa fa-send fa-lg" tabindex="2">Post</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>

 
              </div>
            </div>

        <?php require_once 'views/sidebar/sidebar_button.php'; ?>

        </div>
      
      </div>

    <?php require_once 'views/footer/footer.php'; ?>


<script type="text/javascript">
function postNewProject(fields){
          //fields = ["title","my_role","tech_skills","team_size","description"];
          var dataString = "";

          
          dataString = "title=" + $('#'+fields[0]).val() + "&my_role=" + $('#'+fields[1]).val() + "&tech_skills=" + $('#'+fields[2]).val() + "&team_size=" + $('#'+fields[3]).val() + "&description=" + $('#'+fields[4]).val() + "&start=" + $('#start').val() + "&end=" + $('#end').val() + "&type=" + $('#type').val()  ;
          //console.log(dataString);
          
          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>project/createProject",
            data: dataString,
            cache: false,
            success: function(result){
              window.location.href  = result;

            },
             error: function(result){
              console.log(result);
              $.niftyNoty({ 
                type:"danger",
                icon:"fa fa-check fa-lg",
                title:"Project",
                message:result.responseText,
                focus: true,
                container:"floating",
                timer:4000
              });
            }
          });
          return false;
      }

  function validateCreateProject(){
    fields = ["title","my_role","tech_skills","team_size","description"];
    
    if (genericEmptyFieldValidator(fields)) {
   
            postNewProject(fields);
    }

    return false;
    
  }
</script>
  </body>
</html>