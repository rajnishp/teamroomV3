<form action="profile/updatePic" class="form-horizontal" method="POST">

                              <div class="form-group">

                                <label class="col-md-3 control-label">Profile Picture</label>

                                <div class="col-md-7">

                                  <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="max-width: 200px;">
                                      
                                      <img id="target" onerror="this.src='static/img/collap.jpg'" src="uploads/profilePictures/<?= $_SESSION['username'] ?>.jpg" >
                                    </div>
                                    <div>

                                    <input id="src" type="file"/> 
                                      
                                    </div>
                                  </div> <!-- /.fileupload -->

                                </div> <!-- /.col -->

                              </div> <!-- /.form-group -->

                            </form>