<?php foreach ($userTechStrength as $key => $techStrength) { ?>

  <form action="<?= $baseUrl ?>setting/updateTechStrength" class="form-horizontal" method="POST" onSubmit="return (validateUpdateTechStrength(<?= $techStrength->getId() ?>));">

    <div class="form-group">

      <label class="col-md-3 control-label">Activities/Achievement</label>
    
      <div class="col-md-7">
        <input type="hidden" name="id" value="<?= $techStrength->getId() ?>" class="form-control"/>
        <input type="text" name="tech_strength" id="tech_strength_<?= $techStrength->getId() ?>" value="<?= ucfirst($techStrength -> getStrength()) ?>" class="form-control"/>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->

    <div class="form-group">
      <div class="col-md-7 col-md-push-3">
        <button type="submit" class="btn btn-primary">Save Changes</button>
        &nbsp;
        <button type="reset" class="btn btn-default">Cancel</button>
      </div> <!-- /.col -->
    </div> <!-- /.form-group -->

  </form>

<?php } ?>

<form action="<?= $baseUrl ?>setting/updateTechStrength" id= "tech_strength_form" class="form-horizontal" method="POST" onSubmit="return (validateUpdateTechStrength());">

  <div class="form-group">

    <label class="col-md-3 control-label">Activities/Achievement</label>
  
    <div class="col-md-7">
      <input type="text" name="tech_strength" id="tech_strength" value="" class="form-control"/>
    </div> <!-- /.col -->
  </div> <!-- /.form-group -->

  <div class="form-group">
    <div class="col-md-7 col-md-push-3">
      <button type="submit" class="btn btn-primary">Save Changes</button>
      &nbsp;
      <button type="reset" class="btn btn-default">Cancel</button>
    </div> <!-- /.col -->
  </div> <!-- /.form-group -->

</form>