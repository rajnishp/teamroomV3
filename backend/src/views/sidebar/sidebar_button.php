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
					<li class="col-xs-4" data-content="Notification">
						<a id="demo-alert" class="shortcut-grid" href="#">
							<i class="fa fa-bullhorn"></i>
						</a>
					</li>
					<li class="col-xs-4" data-content="Page Alerts">
						<a id="demo-page-alert" class="shortcut-grid" href="#">
							<i class="fa fa-bell"></i>
						</a>
					</li>
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
				
							<!--Category name-->
							<li class="list-header">Navigation</li>
				
							<!--Menu list item-->
							<li>
								<a href="index.html">
									<i class="fa fa-dashboard"></i>
									<span class="menu-title">
										<strong>Dashboard</strong>
										<span class="label label-success pull-right">Top</span>
									</span>
								</a>
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#" data-target="#demo-default-modal" data-toggle="modal">
									<i class="fa fa-bell"></i>
									<span class="menu-title">
										<strong>
										Add Reminder
										</strong>
									</span>
								</a>
				
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-bullseye"></i>
									<span class="menu-title">
										<strong>All Reminders</strong>
										<i class="arrow"></i>
									</span>
								</a>

								<!--Submenu-->
								<ul class="collapse">
									<li><a href="#">Create project for UX Design</a></li>
									<li><a href="#">Attend interview</a></li>
									<li><a href="#">Make a presentation for seed funding</a></li>
									
								</ul>


							</li>


							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-tasks"></i>
									<span class="menu-title">
										<strong>To-Do List</strong>
										<span class="pull-right badge badge-warning">9</span>
									</span>
								</a>
							</li>

							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-tasks"></i>
									<span class="menu-title">
										<strong>Get Done List</strong>
										<span class="pull-right badge badge-warning">9</span>
									</span>
								</a>
							</li>
				
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
								<ul class="collapse in">
									
									<!-- <li class="active-link"><a href="#">ASSET Mangament System</a></li>
									 -->
									<?php foreach ($projects as $key => $project) { 

										if($project->getType() == "Classified") { ?>	
										
										<li><a href=""><?= $project->getRefinedTitle() ?></a></li>

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
									<?php foreach ($projects as $key => $project) { 

										if($project->getType() == "Private"){ ?>	
										
										<li><a href=""><?= $project->getRefinedTitle() ?></a></li>

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
									<?php foreach ($projects as $key => $project) { 

										if($project->getType() == "Public"){ ?>	
										
										<li><a href=""><?= $project->getRefinedTitle() ?></a></li>

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
									<li><a href="">Computer Library</a></li>
									<li><a href="">Memory/Brain Power</a></li>
									<li><a href="">Awesome PICS over Internet</a></li>
									<li><a href="">Software Clone Detection</a></li>
									<li><a href="">HYBRID APPROACH FOR DETECTING CODE Clone Detection</a></li>
									<li><a href="">Sportskeeda: A dating with sports every evening</a></li>
									<li><a href="">Collap v2 UX design</a></li>
									<li><a href="">CSE Interview Preparation Questions</a></li>
									<li><a href=""> Greatest Mens of the Century</a></li>
									
								</ul>
							</li>

							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-table"></i>
									<span class="menu-title">Joined Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<li><a href="#">Git Tips #SoftwareDevelopment</a></li>
									<li><a href="#">MDU: Computer NetworksInformation and Communications Technology</a></li>
									<li><a href="#">Information and Communications Technology</a></li>
									<li><a href="#">Collap hands to empower Indian youth</a></li>
									<li><a href="#">Biomedical Device Engineering</a></li>
									<li><a href="#">Distributed Combinational Web Query</a></li>
									<li><a href="#">Upcoming Hackathon 2015</a></li>
									<li><a href="#">Tech Market News</a></li>
									<li><a href="#">Academic Zodiac</a></li>
									<li><a href="#">Distributed Combinational Web Query 2</a></li>
									<li><a href="#">Smart Grids</a></li>
									
								</ul>
							</li>
				
							<!--Menu list item-->
						
							
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
							
							<!--Nav tabs-->
							<!--================================-->
							<ul class="nav nav-tabs nav-justified">
								<li class="active">
									<a href="#demo-asd-tab-1" data-toggle="tab">
										<i class="fa fa-comments"></i>
										<span class="badge badge-purple">7</span>
									</a>
								</li>
								
							</ul>
							<!--================================-->
							<!--End nav tabs-->



							<!-- Tabs Content -->
							<!--================================-->
							<div class="tab-content">

								<!--First tab (Contact list)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade in active" id="demo-asd-tab-1">
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-warning">3</span> Family
									</h4>

									<!--Family-->
									<div class="list-group bg-trans">
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av2.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Stephen Tran</div>
												<span class="text-muted">Availabe</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av4.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Brittany Meyer</div>
												<span class="text-muted">I think so</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av3.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Donald Brown</div>
												<span class="text-muted">Lorem ipsum dolor sit amet.</span>
											</div>
										</a>
									</div>


									<hr>
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-info">4</span> Friends
									</h4>

									<!--Friends-->
									<div class="list-group bg-trans">
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av5.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Betty Murphy</div>
												<span class="text-muted">Bye</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
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
										</a>
									</div>


									<hr>
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-success">Offline</span> Works
									</h4>
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

	<?php //require_once 'views/modals/modal.php'; ?>