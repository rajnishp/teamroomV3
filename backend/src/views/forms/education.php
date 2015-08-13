  <?php foreach ($userEducation as $key1 => $education) { ?>
    <form class="form-horizontal" onSubmit="return (validateUpdateEducation(<?= $education -> getId() ?>));">

      <div class="form-group">

        <label class="col-md-3 control-label">Institute Name</label>

        <div class="col-md-7">
          <input type="text" name="institute" id="institute_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getInstitute()) ?>" class="form-control"/>
          <input type="hidden" name="id" value="<?= ucfirst($education -> getId()) ?>" class="form-control"/>
        </div> <!-- /.col -->

      </div> <!-- /.form-group -->
      
      <div class="form-group">

        <label class="col-md-3 control-label">Name of Degree</label>

        <div class="col-md-7">
          <input type="text" name="degree" id="degree_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getDegree()) ?>" class="form-control"/>
        </div> <!-- /.col -->

      </div> <!-- /.form-group -->
      <div class="form-group">

        <label class="col-md-3 control-label">Branch Name</label>

        <div class="col-md-7">
          <input type="text" name="branch" id="branch_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getBranch()) ?>" class="form-control"/>
        </div> <!-- /.col -->

      </div> <!-- /.form-group -->

      <div class="form-group">

        <label class="col-md-3 control-label">Duration</label>

        <div class="col-md-7">

          <div id="">
            <div id="" class="input-daterange input-group">
              <input type="text" name="from" id="edu_from_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getFrom()) ?>" class="form-control" placeholder="YYYY"/>
              <span class="input-group-addon">To</span>
              <input type="text" name="to" id="edu_to_<?= $education -> getId() ?>" value="<?= ucfirst($education -> getTo()) ?>" class="form-control" placeholder="YYYY"/>
            </div>
          </div>
        </div>
      </div>  <!-- /.form-group -->

      <div class="form-group">
        <div class="col-md-7 col-md-push-3">
          <button type="submit" class="btn btn-primary">Save Changes</button>
          &nbsp;
          <button type="reset" class="btn btn-default">Cancel</button>
        </div> <!-- /.col -->
      </div> <!-- /.form-group -->

    </form>
  <?php } ?>

  <form class="form-horizontal" id="education_form" onSubmit="return (validateUpdateEducation());">

    <div class="form-group">

      <label class="col-md-3 control-label">Institute Name</label>

      <div class="col-md-7">
        <input type="text" name="institute" id="institute" value="" class="form-control"/>
        <small class="help-block"> Ex: Indian Institute of Technology Delhi </small>
      </div> <!-- /.col -->

    </div> <!-- /.form-group -->
    
    <div class="form-group">

      <label class="col-md-3 control-label">Name of Degree</label>

      <div class="col-md-7">
        <input type="text" name="degree" id="degree" value="" class="form-control"/>
        <small class="help-block"> Ex: Bachelor of Engineering/Technology </small>
      </div> <!-- /.col -->

    </div> <!-- /.form-group -->
    <div class="form-group">

      <label class="col-md-3 control-label">Branch Name</label>

      <div class="col-md-7">
        <input type="text" name="branch" id="branch" value="" class="form-control"/>
        <small class="help-block"> Ex: Computer Science and Engineering </small>
      </div> <!-- /.col -->

    </div> <!-- /.form-group -->

    <div class="form-group">

      <label class="col-md-3 control-label">Duration</label>

      <div class="col-md-7">

        <div id="">
          <div id="" class="input-daterange input-group">
            <input type="text" name="from" id="edu_from" value="" class="form-control" placeholder="YYYY"/>
            <span class="input-group-addon">UpTo</span>
            <input type="text" name="to" id="edu_to" value="" class="form-control" placeholder="YYYY"/>
          </div>
        </div>

        <small class="help-block"> Ex: Duration of Education 2012 to 2014 </small>
      
      </div>
    </div> <!-- /.form-group -->


    <div class="form-group">
      <div class="col-md-7 col-md-push-3">
        <button type="submit" class="btn btn-primary">Save Changes</button>
        &nbsp;
        <button type="reset" class="btn btn-default">Cancel</button>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->

  </form>