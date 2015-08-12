<div class="form-group">

  <label class="col-md-3 control-label">Update Skills </label>

  <div class="col-md-7">
    <div id="skills_display_div">
      <?php foreach($userSkills as $skill ) { ?>
        <span class="btn btn-secondary btn-sm"> <?= $skill -> getName() ?> </span>
      <?php } ?>
    </div> <!-- /.list-group -->
    <hr class="spacer-sm">
    <select id="demo-cs-multiselect" data-placeholder="Choose a Skill..." multiple tabindex="4">
      <?php
        foreach ($allSkills as $skillName) { ?>
        <option value="<?= $skillName -> getId() ?>" id ="skill_<?= $skillName -> getId() ?>" name="<?= $skillName -> getName() ?>"><?= $skillName -> getName() ?></option>  
      <?php } ?>
    </select>
    <input type="text" name = "new_skill" id="new_skill" class="form-control" placeholder="Add new Skill" data-role="tagsinput">
    <small class="help-block">Enter new Skill seperated by comma (,)...</small>
    <button type="submit" id="skills" class="btn btn-primary" onclick="return (validateUpdateSkills());">Add Skills</button>

  </div> <!-- /.col -->

</div> <!-- /.form-group -->