<!--Extra Activities and tech strength form -->
<div id="tech_strength_div">
  <div class='form-horizontal' id= 'tech_strength_form'>
    <div class='form-group'>
      <label class='col-md-3 control-label'>Extra Activities and Achievement</label>
      <div class='col-md-7'>
        <input type='text' name='tech_strength' id='tech_strength' value='' class='form-control'/>
        <small class='help-block'>Completed course on ETHICAL HACKING from XYZ...</small>
        <small class='help-block'>Winner of xyz Hackathon with Idea ------ </small>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->
    <div class='form-group'>
      <label class='col-md-3 control-label'></label>
      <div class='col-md-7'>
        <button type='submit' class='btn btn-success' onclick='return (validateUpdateTechStrength());'>Add More</button>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->
  </div>
</div>
<!--Extra Activities and tech strength form ends-->

<!--Add/Update Skills form -->
<div class='form-horizontal'>
  <div class='form-group'>
    <label class='col-md-3 control-label'>Add/Update Skills</label>
    <div class='col-md-7'>
      <select id='demo-cs-multiselect' name='skills' data-placeholder='Choose a Skill...' multiple tabindex='4'>
        <?php foreach ($allSkills as $skillName) { ?>
          <option value='<?= $skillName -> getId() ?>' id ='skill_<?= $skillName -> getId() ?>'><?= $skillName -> getName() ?></option>  
        <?php } ?>
      </select>
      <small class='help-block'>Ex: C, Cpp, PHP, JAVA</small>
      <button type='submit' id='skills' class='btn btn-success' onclick='return (validateUpdateSkills());'>Add Skills</button>
    </div> <!-- /.col -->
  </div> <!-- /.form-group -->
</div>
<!--Add/Update Skills form end-->

<!--Preferred Locations and Job preference form -->
<div id="job_preference_div">
  <div class="form-horizontal">
    <div class="form-group">
      <label class="col-md-3 control-label">Preferred Locations <br/>(First Location is first <b>Preference</b>) </label>
      <div class="col-md-7">          
        <select id="demo-cs-multiselect1" data-placeholder="Choose Location by Preference..." multiple tabindex="4">
          <?php foreach ($allLocations as $availablelocation) { ?>
            <option value="<?= $availablelocation -> getId() ?>" id ="location_<?= $availablelocation -> getId() ?>"><?= $availablelocation-> getLocationName() ?></option>  
          <?php } ?>
        </select>
        <small class="help-block">Preferred Job Location: Bangalore, Delhi/NCR ( First location will be first prefernece )</small>
        <button type="submit" id="locations" class="btn btn-success" onclick="return (validateUpdateLocations());">Add Locations</button>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->
    <div class="form-group">
      <label class="col-md-3 control-label">Current CTC </label>
      <div class="col-md-7">
        <input type="text" name="current_ctc" id="current_ctc" placeholder ="Lacs/Annum" class="form-control"/>
        <small class="help-block"> Ex: Only Numeric Value (If 6,40,000 (6.4 LPA) then enter only 6.4) </small>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->
    <div class="form-group">
      <label class="col-md-3 control-label">Expected CTC </label>
      <div class="col-md-7">
        <input type="text" name="expected_ctc" id="expected_ctc" placeholder ="Lacs/Annum" class="form-control"/>
        <small class="help-block"> Ex: Only Numeric Value (If 9,00,000 (9.0 LPA) then enter only 9) </small>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->
    <div class="form-group">
      <label class="col-md-3 control-label">Notice Period </label>
      <div class="col-md-7">
        <input type="text" name="notice_period" id="notice_period" placeholder ="Enter Months" class="form-control"/>
        <small class="help-block"> Ex: Only Integer Value (For 2 Months enter only 2) </small>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->
    <div class="form-group">
      <div class="pull-right pad-all">
        <button type="submit" class="btn btn-success" onclick="return (validateUpdateJobPreference());">Save Changes</button>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->
  </div>
</div>
<!--Preferred Locations and Job preference form -->