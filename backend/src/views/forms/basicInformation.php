  <div class="form-group">

    <label class="col-md-3 control-label">First Name</label>

    <div class="col-md-7">
      <input type="text" name="first_name" id= "first_name"  value="<?= $userProfile->getFirstName() !=null ? $userProfile->getFirstName() : null ?>" placeholder="First Name" class="form-control" />
    </div> <!-- /.col -->

  </div> <!-- /.form-group -->

  <div class="form-group">

    <label class="col-md-3 control-label">Last Name</label>

    <div class="col-md-7">
      <input type="text" name="last_name"  id= "last_name"  value="<?= $userProfile->getLastName() !=null ? $userProfile->getLastName() : null ?>" placeholder="Last Name"  class="form-control" />
    </div> <!-- /.col -->

  </div> <!-- /.form-group -->
  <div class="form-group">

    <label class="col-md-3 control-label">Want to Collaborate As</label>

    <div class="col-md-7">
      <div class="checkbox">
        
        <label class="form-checkbox form-icon active form-text">
        Engineer
        <input type="checkbox" id="engineer" checked="" value="Engineer" >
        
        </label>
      </div>
      <div class="checkbox">
        
        <label class="form-checkbox form-icon active form-text">
        Project Manager
        <input type="checkbox"  id="project_manager" checked="" value="ProjectManager">
        
        </label>
      </div>
      <div class="checkbox">
        
        <label class="form-checkbox form-icon active form-text">
        UX Designer
        <input type="checkbox" id="ux_designer" checked=""  value="UxDesigner">
        
        </label>
      </div>
      <div class="checkbox">
        
        <label class="form-checkbox form-icon active form-text">
        Doctor
        <input type="checkbox" id="doctor" checked=""  value="Doctor">
        
        </label>
      </div>
      <div class="checkbox">
        
        <label class="form-checkbox form-icon active form-text">
        Research Scholar
        <input type="checkbox" id="research_scholar" checked=""  value="ResearchScholar">
        
        </label>
      </div>
      <div class="checkbox">
        
        <label class="form-checkbox form-icon active form-text">
        Lawyer
        <input type="checkbox" id="lawyer" checked=""  value="Lawyer">
        
        </label>
        
        <small class="help-block">Best suited according to your knowledge domain, you can choose multiples</small>

      </div>
    </div> <!-- /.col -->

  </div> <!-- /.form-group -->
 

  <div class="form-group">

    <label class="col-md-3 control-label">Contact Number</label>

    <div class="col-md-7">
      <input type="text" name="phone" id="phone"  value="<?= $userProfile->getPhone() !=null ? $userProfile->getPhone() : null ?>" placeholder="Contact No" class="form-control" />
      <small class="help-block">It will be private, only shown to others on your permission</small>
    </div> <!-- /.col -->

  </div> <!-- /.form-group -->

  <div class="form-group">

    <label class="col-md-3 control-label">Current Living Place</label>

    <div class="col-md-7">
      <input type="text" name="living_place" id="living_place"  value="<?= $userProfile->getLivingTown() !=null ? $userProfile->getLivingTown() : null ?>" placeholder="Current Living Town" class="form-control" />
    </div> <!-- /.col -->

  </div> <!-- /.form-group -->

  <div class="form-group">

    <label class="col-md-3 control-label">About You</label>

    <div class="col-md-7">
      <textarea name="about_user" id="about_user" rows="6" class="form-control" placeholder="Useful Information about You......"><?= $userProfile->getAboutUser() !=null ? $userProfile->getAboutUser() : null ?></textarea>
      <small class="help-block">Ex: I am a person with a positive attitude, worked at Collap..</small>                        
    </div> <!-- /.col -->

  </div> <!-- /.form-group -->