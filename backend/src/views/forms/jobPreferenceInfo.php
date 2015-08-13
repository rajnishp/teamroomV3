  <div class="form-horizontal">
                          
    <div class="form-group">

        <label class="col-md-3 control-label">Preferred Locations <br/>(First Location is first <b>Preference</b>) </label>

        <div class="col-md-7">
          <div class="">
            <?php foreach($userPreferredJobLocations as $locationName ) { ?>
              <span class="btn btn-secondary btn-sm"> <?= $locationName -> getLocationName() ?> </span>
            <?php } ?>
          </div> <!-- /.list-group -->
          
          <select id="demo-cs-multiselect1" data-placeholder="Choose Location by Preference..." multiple tabindex="4">
            <?php foreach ($allLocations as $availablelocation) { ?>
              <option value="<?= $availablelocation -> getId() ?>" id ="location_<?= $availablelocation -> getId() ?>"><?= $availablelocation-> getLocationName() ?></option>  
            <?php } ?>
          </select>

          <button type="submit" id="locations" class="btn btn-primary" onclick="return (validateUpdateLocations());">Add Locations</button>

        </div> <!-- /.col -->

    </div> <!-- /.form-group -->
  
  </div>

  <?php if ($userJobPreference[0] != null) { ?>
    <div class="form-horizontal">
      
      <div class="form-group">

        <label class="col-md-3 control-label">Current CTC </label>

        <div class="col-md-7">

          <input type="text" name="current_ctc" id="current_ctc" value="<?= $userJobPreference[0] -> getCurrentCtc() ?>" class="form-control"/>
          <input type="hidden" name="id" value="<?= $userJobPreference[0] -> getId() ?>" class="form-control"/>
        </div> <!-- /.col -->

      </div> <!-- /.form-group -->

      <div class="form-group">

        <label class="col-md-3 control-label">Expected CTC </label>

        <div class="col-md-7">
          <input type="text" name="expected_ctc" id="expected_ctc" value="<?= $userJobPreference[0] -> getExpectedCtc() ?>" class="form-control"/>
        </div> <!-- /.col -->

      </div> <!-- /.form-group -->

      <div class="form-group">

        <label class="col-md-3 control-label">Notice Period </label>

        <div class="col-md-7">
          <input type="text" name="notice_period" id="notice_period" value="<?= $userJobPreference[0] -> getNoticePeriod() ?>" class="form-control"/>
        </div> <!-- /.col -->

      </div> <!-- /.form-group -->
      

      <div class="form-group">
        <div class="col-md-7 col-md-push-3">
          <button type="submit" class="btn btn-primary" onclick="return (validateUpdateJobPreference(<?= $userJobPreference[0] -> getId() ?>));">Save Changes</button>
          &nbsp;
          <button type="reset" class="btn btn-default">Cancel</button>
        </div> <!-- /.col -->
      </div> <!-- /.form-group -->
    </div>

  <?php } else { ?>

    <div class="form-horizontal">

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
        <div class="col-md-7 col-md-push-3">
          <button type="submit" class="btn btn-primary" onclick="return (validateUpdateJobPreference());">Save Changes</button>
          &nbsp;
          <button type="reset" class="btn btn-default">Cancel</button>
        </div> <!-- /.col -->
      </div> <!-- /.form-group -->

    </div>
  <?php } ?>