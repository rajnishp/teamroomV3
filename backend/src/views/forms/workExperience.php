<?php foreach ($userWorkExperience as $key => $workExperience) { ?>
                            
                            <form action="<?= $baseUrl ?>setting/updateWorkExp" class="form-horizontal" method="POST" onSubmit="return (validateUpdateWorkExp(<?= $workExperience->getId() ?>));">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Company Name</label>

                                <div class="col-md-7">
                                  <input type="text" name="company_name" id="company_name_<?= $workExperience->getId() ?>" value="<?= ucfirst($workExperience -> getCompanyName()) ?>" class="form-control"/>
                                  <input type="hidden" name="id" value="<?= $workExperience -> getId() ?>" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">

                                <label class="col-md-3 control-label">Designation</label>

                                <div class="col-md-7">
                                  <input type="text" name="designation" id="designation_<?= $workExperience->getId() ?>" value="<?= ucfirst($workExperience -> getDesignation()) ?>" class="form-control"/>
                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->
                              
                              <div class="form-group">

                                <label class="col-md-3 control-label">Duration</label>

                                <div class="col-md-7">

                                  <div id="demo-dp-range">
                                    <div id="datepicker" class="input-daterange input-group">
                                      <input type="text" name="from" id="work_from_<?= $workExperience->getId() ?>" value="<?= ucfirst($workExperience -> getFrom()) ?>" class="form-control" placeholder="YYYY-MM-DD"/>
                                      <span class="input-group-addon">to</span>
                                      <input type="text" name="to" id="work_to_<?= $workExperience->getId() ?>" value="<?= ucfirst($workExperience -> getTo()) ?>" class="form-control" placeholder="YYYY-MM-DD"/>
                                    </div>
                                  </div>
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
                          <?php } ?>
                          
                          <form class="form-horizontal" id ="work_exp_form" onSubmit="return (validateUpdateWorkExp());">

                            <div class="form-group">

                              <label class="col-md-3 control-label">Company Name</label>

                              <div class="col-md-7">
                                <input type="text" name="company_name" id="company_name" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->
                            
                            <div class="form-group">

                              <label class="col-md-3 control-label">Designation</label>

                              <div class="col-md-7">
                                <input type="text" name="designation" id="designation" class="form-control"/>
                              </div> <!-- /.col -->

                            </div> <!-- /.form-group -->

                            <div class="form-group">

                              <label class="col-md-3 control-label">Duration</label>

                              <div class="col-md-7">

                                <div id="demo-dp-range">
                                  <div id="datepicker" class="input-daterange input-group">
                                    <input type="text" name="from" id="work_from" class="form-control"  placeholder="YYY-MM-DD"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" name="to" id="work_to" class="form-control"  placeholder="YYY-MM-DD"/>
                                  </div>
                                </div>
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