<?php if($_SESSION['username']) { ?>
	<!--MAIN NAVIGATION-->
	<!--===================================================-->
	<nav id="mainnav-container">
		<div id="mainnav">

			<!--Shortcut buttons-->
			<!--================================-->
			<div id="mainnav-shortcut">
				<ul class="list-unstyled">
					<li class="col-xs-4" data-content="Chat">
						<a id="demo-toggle-aside" class="shortcut-grid" href="#">
							<i class="fa fa-comments"></i>
						</a>
					</li>
					<!-- <li class="col-xs-4" data-content="Notification">
						<a id="demo-alert" class="shortcut-grid" href="#">
							<i class="fa fa-bullhorn"></i>
						</a>
					</li>
					<li class="col-xs-4" data-content="Page Alerts">
						<a id="demo-page-alert" class="shortcut-grid" href="#">
							<i class="fa fa-bell"></i>
						</a>
					</li> -->
				</ul>
			</div>
			<!--================================-->
			<!--End shortcut buttons-->


			<!--Menu-->
			<!--================================-->
			<div id="mainnav-menu-wrap">
				<div class="nano">
					<div class="nano-content">
						<ul id="mainnav-menu" class="list-group">
				
							<!--Menu list item-->
							<!-- <li>
								<a href="">
									<i class="fa fa-dashboard"></i>
									<span class="menu-title">
										<strong>Dashboard</strong>
										<span class="label label-success pull-right">Top</span>
									</span>
								</a>
							</li> -->

							<!--Menu list item-->

							<li>
								<a href="<?= $baseUrl ?>project/createNew">
									<i class="fa fa-edit"></i>
									<span class="menu-title">
										<strong>Create Project</strong>
									</span>
								</a>
							</li>

						<?php
						/*
							<li>
								<a href="#">
									<i class="fa fa-tasks"></i>
									<span class="menu-title">
										<strong>To-Do List</strong>
										<span class="pull-right badge badge-warning"><?= count($this->toDoList) ?></span>
									</span>


								</a>
									<!--Submenu-->
								<ul class="collapse">
									
									<!-- <li class="active-link"><a href="#">ASSET Mangament System</a></li>
									 -->
									<?php foreach ($this->toDoList as $key => $to_to) { ?>

									
										
										<li><a href="<?= $baseUrl ?>project/<?= $to_to->getId() ?>"><?= $to_to->getRefinedTitle() ?></a></li>

									<?php  } ?>
									
								</ul>
							</li>

							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-tasks"></i>
									<span class="menu-title">
										<strong>Get-Done List</strong>
										<span class="pull-right badge badge-warning"><?= count($this->getDoneList) ?></span>
									</span>


								</a>
									<!--Submenu-->
								<ul class="collapse">
									
									<!-- <li class="active-link"><a href="#">ASSET Mangament System</a></li>
									 -->
									<?php foreach ($this->getDoneList as $key => $get_done) { ?>
										
										<li><a href="<?= $baseUrl ?>project/<?= $get_done->getId() ?>"><?= $get_done->getRefinedTitle() ?></a></li>

									<?php  } ?>
									
								</ul>
							</li>
						*/
						?>
							<li class="list-divider"></li>
				
							<!--Category name-->
							<li class="list-header">Projects</li>
				
							<!--Menu list item-->
							<li class="active-sub">
								<a href="#">
									<i class="fa fa-briefcase"></i>
									<span class="menu-title">Classified Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									
									<!-- <li class="active-link"><a href="#">ASSET Mangament System</a></li>
									 -->
									<?php foreach ($this->projects as $key => $project) { 

										if($project->getType() == "Classified") { ?>	
										
										<li><a href="<?= $baseUrl ?>project/<?= $project->getId() ?>"><?= $project->getRefinedTitle() ?></a></li>

									<?php } } ?>
									
								</ul>
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-edit"></i>
									<span class="menu-title">Private Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<?php foreach ($this->projects as $key => $project) { 

										if($project->getType() == "Private"){ ?>	
										
										<li><a href="<?= $baseUrl ?>project/<?= $project->getId() ?>"><?= $project->getRefinedTitle() ?></a></li>

									<?php } } ?>
									
								</ul>
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-table"></i>
									<span class="menu-title">Public Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<?php foreach ($this->projects as $key => $project) { 

										if($project->getType() == "Public"){ ?>	
										
										<li><a href="<?= $baseUrl ?>project/<?= $project->getId() ?>"><?= $project->getRefinedTitle() ?></a></li>

									<?php }} ?>
									
								</ul>
							</li>


							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-table"></i>
									<span class="menu-title">Recommended Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<?php foreach ($this->recommendedProjects as $key => $project) { 

										if($project->getType() == "Public"){ ?>	
										
										<li><a href="<?= $baseUrl ?>project/<?= $project->getId() ?>"><?= $project->getRefinedTitle() ?></a></li>

									<?php }} ?>
									
								</ul>
							</li>

							
						
							
						</ul>

					</div>
				</div>
			</div>
			<!--================================-->
			<!--End menu-->

		</div>
	</nav>
	<!--===================================================-->
	<!--END MAIN NAVIGATION-->
	
	<!--ASIDE-->
			<!--===================================================-->
			<aside id="aside-container">
				<div id="aside">
					<div class="nano">
						<div class="nano-content">
							



							<!-- Tabs Content -->
							<!--================================-->
							<div class="tab-content">

								<!--First tab (Contact list)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade in active" id="demo-asd-tab-1">
									
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-info"><?= count($this->links) ?></span> Friends
									</h4>

									<!--Friends-->
									<div class="list-group bg-trans">
									<?php foreach ($this->links as $key => $value) { ?>

										<a href="#" class="list-group-item">
											<div class="media-left">

												<img class="img-circle img-xs" src="uploads/profilePictures/<?= $value->getUsername() ?>.jpg" onerror = "this.src = '<?= $baseUrl ?>static/img/collap.jpg';">
											</div>
											<div class="media-body">
												<div class="text-lg"><?= ucfirst($value->getFirstName()) ?> <?= ucfirst($value->getLastName()) ?></div>
												
											</div>
										</a>
									<?php } ?>
										<!-- <a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av6.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Olivia Spencer</div>
												<span class="text-muted">Thank you!</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av4.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Sarah Ruiz</div>
												<span class="text-muted">2 hours ago</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av3.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Paul Aguilar</div>
												<span class="text-muted">2 hours ago</span>
											</div>
										</a> -->
									</div>


									<!-- <hr>
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-success">Offline</span> Works
									</h4> -->
								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--End first tab (Contact list)-->

							</div>
						</div>
					</div>
				</div>
			</aside>
			<!--===================================================-->
			<!--END ASIDE-->



	<!-- SCROLL TOP BUTTON -->
	<!--===================================================-->
	<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
	<!--===================================================-->

	
	<!--===================================================-->
	<!-- END OF CONTAINER -->

<?php } ?>