<!--Default Bootstrap Modal-->
	<!--===================================================-->
	<div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<!--Modal header-->
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button">
					<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Add Reminder</h4>
				</div>

				<!--Modal body-->
				<div class="modal-body">

					<form id="demo-bv-errorcnt" class="form-horizontal" action="#" method="post">
                          

						<!-- Bootstrap Select with Search Input -->
						<!--===================================================-->
                        <div class="form-group pad-btm">
                            <label class="col-lg-3 control-label">To Whom: </label>
                            <div class="col-lg-7">

								<select class="selectpicker" data-live-search="true" data-width="100%">
									<option>Self</option>
									<option>Rahul</option>
									<option>Rajnsih</option>
									<option>Anil</option>
									<option>Dileep</option>
									<option>Neeraj</option>
									<option>Rutwik</option>
									<option>Abu</option>
									<option>Video</option>
								</select>
							</div>
						</div>
						
                        <div class="form-group pad-btm">
                            <label class="col-lg-3 control-label">Select Date/Time</label>
                            <div class="col-lg-7">

								<div class="input-group date">
									<input type="text" class="form-control">
									<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
								</div>
							</div>
						</div>

                        <div class="form-group pad-btm">
                            <label class="col-lg-3 control-label">Your Messaege here</label>
                            <div class="col-lg-7">
                              <textarea class="form-control" name="message" rows="7" placeholder="Tell us your story..."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 col-sm-offset-3">
                              <button class="btn btn-primary btn-labeled fa fa-send fa-lg" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
					
				</div>

				<!--Modal footer-->
				<div class="modal-footer">
					<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
					<button class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--===================================================-->
	<!--End Default Bootstrap Modal-->
