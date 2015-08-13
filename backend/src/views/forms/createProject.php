  <div class="form-horizontal" id="project_form">

    <div class="form-group">

      <label class="col-md-3 control-label">Title</label>

      <div class="col-md-7">
        <input type="text" id ="title" class="form-control" placeholder="Title" />
        
        <small class="help-block"> Ubuntu Unity: deliver a consistent user experience for desktop and netbook users alike</small>

      </div> <!-- /.col -->

    </div> <!-- /.form-group -->

    <div class="form-group">

      <label class="col-md-3 control-label">Used Technical Skills</label>

      <div class="col-md-7">
        <input type="text" id="tech_skills" class="form-control" placeholder="Used Technical Skills..." />
        
        <small class="help-block"> C++, JavaScript, QML, Python, Vala</small>

      </div> <!-- /.col -->

    </div> <!-- /.form-group -->

    <div class="form-group">

      <label class="col-md-3 control-label">Your Role</label>

      <div class="col-md-7">
        <input type="text" id="my_role" class="form-control" placeholder="Specify Your Role" />
        
        <small class="help-block"> Like Architect or Frontend Developer with JavaScript</small>

      </div> <!-- /.col -->

    </div> <!-- /.form-group -->

    <div class="form-group">

      <label class="col-md-3 control-label">Team Size</label>
      <div class="col-md-7">
        <input type="number" id="team_size" class="form-control" placeholder="Team Size" />

        <small class="help-block"> Total team Members: 1, 2, 3, 4, ....</small>

      </div>

    </div> <!-- /.form-group -->

    <div class="form-group">

      <label class="col-md-3 control-label">Project Status</label>
      <div class="col-md-5">
        <select class="selectpicker" name="status" data-width="100%" id= "status" >
          <option value='Ongoing' >Ongoing ( Still it is ongoing or you want to expend your idea )</option>
          <option value='Completed' >Completed ( If you have completed your project )</option>
          <option value='YetToStart' >Yet To Start ( Its good time to start, <i>Best Of Luck</i>)</option>
        </select>                  
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
        
        <small class="help-block"> When it started (August 01, 2014 ) to ended ( July 30, 2015 )</small>

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

          </div>
        </div>

        <small class="help-block"> Project Description with Introduction, Problem, Solution, Features ...</small>

      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label"></label>
      <div class="col-md-7">
        <button type="submit" class="btn btn-success" onclick="return (validateCreateProject());">Add More</button>
      </div>
    </div> <!-- /.form-group -->
  </div>