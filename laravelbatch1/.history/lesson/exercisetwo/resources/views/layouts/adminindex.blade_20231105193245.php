@include('layouts.adminheader')

<div>


	<!-- Start Site Setting  -->
	<div class="sitesetting">
		<div class="sitesettings-item ani-rotates"><a href="javascritp:void(0)" target="_blank
			"><i class="fas fa-cog"></i></a></div>
		<div class="sitesettings-item"><a href="javascritp:void(0)" target="_blank
			"><i class="fas fa-comment-dots"></i></a></div>

		<div class="sitesettings-item"><a href="javascritp:void(0)" target="_blank
			"><i class="fas fa-file-alt"></i></a></div>
		<div class="sitesettings-item"><a href="javascritp:void(0)" target="_blank
			"><i class="fas fa-cart-plus"></i></a></div>
				

	</div>
	<!-- End Site Setting -->


    @include('layouts.adminleftsidebar')
</div>
	
					<!-- start top sidebar -->
					<div class="col-lg-10 col-md-9 fixed-top py-2 ms-auto topnavbars">
						
						<div class="row">
							<div class="col-md-4 ">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="javascript:void(0);">Home</a>
									</li>
									<li class="breadcrumb-item active">
										<a href="javascript:void(0);">Dashboard</a>
									</li>
								</ol>
								
							</div>

							<div class="col-md-5">
								
							</div>

							<div class="d-flex col-md-3">
								<ul class="navbar-nav me-5">
									<li class="nav-item iconparents"><a href="javascript:void(0);" class="nav-link iconbullets"><i class="fas fa-comments fa-lg"></i></a></li>
								</ul>

								<div class="dropdown">
									<a href="javascript:void(0)" class="text-decoration-none" data-bs-toggle="dropdown">
										<img src="./assets/img/users/user1.jpg" width="32" height="32" class="rounded-circle" alt="userimg">
									</a>

									<ul class="dropdown-menu text-small" >
										<li><a href="javascript:void(0)" class="dropdown-item">New Project</a></li>
										<li><a href="javascript:void(0)" class="dropdown-item">Settings</a></li>
										<li><a href="javascript:void(0)" class="dropdown-item">Profile</a></li>
										<li><hr class="dropdown-divider" /></li>
										<li><a href="javascript:void(0)" class="dropdown-item">Sign Out</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- end top sidebar -->
				</div>
			</div>
			
		</div>
	</nav>

	<!-- End Left Side Bar Section -->

	<!-- Start Pannel Section -->
	<section>
		<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-9 ms-auto">

                        <div class="row pt-5">

                            <div class="col-lg-3 col-sm-6 mb-2">
                                <div class="card rounded-0 cardboxs">
                                    <div class="card-body">
                                       <div class="d-flex justify-content-between">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                        <div class="text-secondary text-end">
                                            <h5>Customers</h5>
                                            <h3>35,250</h3>
                                        </div>
                                       </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync me-3"></i>
                                        <span>Update</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-2">
                                <div class="card rounded-0 cardboxs">
                                    <div class="card-body">
                                       <div class="d-flex justify-content-between">
                                        <i class="fas fa-shopping-cart fa-2x text-success"></i>
                                        <div class="text-secondary text-end">
                                            <h5>Orders</h5>
                                            <h3>75,25</h3>
                                        </div>
                                       </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync me-3"></i>
                                        <span>Update</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-2">
                                <div class="card rounded-0 cardboxs">
                                    <div class="card-body">
                                       <div class="d-flex justify-content-between">
                                        <i class="fas fa-money-bill-alt fa-2x text-danger"></i>
                                        <div class="text-secondary text-end">
                                            <h5>Revenue</h5>
                                            <h3>$580,000</h3>
                                        </div>
                                       </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync me-3"></i>
                                        <span>Update</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-2">
                                <div class="card rounded-0 cardboxs">
                                    <div class="card-body">
                                       <div class="d-flex justify-content-between">
                                        <i class="fas fa-chart-line fa-2x text-info"></i>
                                        <div class="text-secondary text-end">
                                            <h5>Growth</h5>
                                            <h3>+ 40.78%</h3>
                                        </div>
                                       </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync me-3"></i>
                                        <span>Update</span>
                                    </div>
                                </div>
                            </div>

                           <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-4 col-sm-12">
                                    <div class="col-sm-12 mb-2">
                                        <div class="card rounded-0 cardboxs">
                                            <div class="card-body">
                                               <div class="d-flex justify-content-between">
                                                <i class="fas fa-eye fa-2x text-secondary"></i>
                                                <div class="text-secondary text-end">
                                                    <h5>Page Views</h5>
                                                    <h3>37,543</h3>
                                                </div>
                                               </div>
                                            </div>
                                            <div class="card-footer text-secondary">
                                                <i class="fas fa-sync me-3"></i>
                                                <span>Update</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-2">
                                        <div class="card rounded-0 cardboxs">
                                            <div class="card-body">
                                               <div class="d-flex justify-content-between">
                                                <i class="fas fa-clock fa-2x text-dark"></i>
                                                <div class="text-secondary text-end">
                                                    <h5>Avg . Time</h5>
                                                    <h3>258 hs</h3>
                                                </div>
                                               </div>
                                            </div>
                                            <div class="card-footer text-secondary">
                                                <i class="fas fa-sync me-3"></i>
                                                <span>Update</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End col-4-->

                                <div class="col-md-8">
                                   
                                        <div class="card rounded-0 cardboxs">
                                            <div class="card-body">
                                               <div id="viewerreport"></div>
                                            </div>
                                            <div class="card-footer text-secondary">
                                                <i class="fas fa-sync me-3"></i>
                                                <span>Update</span>
                                            </div>
                                        </div>
                                    
                                </div>

                            </div>
                           </div>

                        </div>

                    </div>
                </div>
            </div>
	</section>
	<!-- End Pannel Section -->

	<!-- Start User Permission -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-md-9 ms-auto">
					<div class="row">
						<div class="col-xl-6 col-12 ">
							<h5 class="text-muted">User Permission:</h5>

							<div class="container-fluid bg-white borderends">
								<div class="row align-items-center p-3 mb-2">
									<div class="col-1">
										<i class="fas fa-lock-open fa-lg text-success"></i>
									</div>
									<div class="col-md-9 col-8">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									</div>
									<div class="col-1 form-switch">
										<input type="checkbox" name="check1" id="check1" class="form-check-input" checked>
									</div>
								</div>
							</div>

							<div class="container-fluid bg-white borderends">
								<div class="row align-items-center p-3 mb-2">
									<div class="col-1">
										<i class="fas fa-lock-open fa-lg text-success"></i>
									</div>
									<div class="col-md-9 col-8">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									</div>
									<div class="col-1 form-switch">
										<input type="checkbox" name="check2" id="check2" class="form-check-input" checked>
									</div>
								</div>
							</div>

							<div class="container-fluid bg-white borderends">
								<div class="row align-items-center p-3 mb-2">
									<div class="col-1">
										<i class="fas fa-lock-open fa-lg text-success"></i>
									</div>
									<div class="col-md-9 col-8">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									</div>
									<div class="col-1 form-switch">
										<input type="checkbox" name="check3" id="check3" class="form-check-input" checked>
									</div>
								</div>
							</div>

							<div class="container-fluid bg-white borderends">
								<div class="row align-items-center p-3 mb-2">
									<div class="col-1">
										<i class="fas fa-lock-open fa-lg text-success"></i>
									</div>
									<div class="col-md-9 col-8">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									</div>
									<div class="col-1 form-switch">
										<input type="checkbox" name="check4" id="check4" class="form-check-input" checked>
									</div>
								</div>
							</div>

							<div class="container-fluid bg-white borderends">
								<div class="row align-items-center p-3 mb-2">
									<div class="col-1">
										<i class="fas fa-lock-open fa-lg text-success"></i>
									</div>
									<div class="col-md-9 col-8">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									</div>
									<div class="col-1 form-switch">
										<input type="checkbox" name="check5" id="check5" class="form-check-input" checked>
									</div>
								</div>
							</div>

						</div>
						<div class="col-xl-6 col-12 ">
							<h5 class="text-muted mb-3
							">Inventory</h5>
							<table class="table table-secondary table-hover text-center">
								<thead>
									<tr>
										<th>ID</th>
										<th>Item</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Status</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1001</td>
										<td>Monitor</td>
										<td>$ 50</td>
										<td>200</td>
										<td><span class="badge bg-success py-2">In</span></td>
										<td><i class="fas fa-edit text-primary"></i></td>
									</tr>
									<tr>
										<td>1002</td>
										<td>Mouse</td>
										<td>$ 30</td>
										<td>1000</td>
										<td><span class="badge bg-success py-2">In</span></td>
										<td><i class="fas fa-edit text-primary"></i></td>
									</tr>
									<tr>
										<td>1003</td>
										<td>DVD</td>
										<td>$ 10</td>
										<td>0</td>
										<td><span class="badge bg-danger py-2">Out</span></td>
										<td><i class="fas fa-edit text-primary"></i></td>
									</tr>
									<tr>
										<td>1004</td>
										<td>Speaker</td>
										<td>$ 50</td>
										<td>1000</td>
										<td><span class="badge bg-success py-2">In</span></td>
										<td><i class="fas fa-edit text-primary"></i></td>
									</tr>
									<tr>
										<td>1005</td>
										<td>Ram</td>
										<td>$ 90</td>
										<td>1000</td>
										<td><span class="badge bg-success py-2">In</span></td>
										<td><i class="fas fa-edit text-primary"></i></td>
									</tr>
									<tr>
										<td>1006</td>
										<td>Keyboard</td>
										<td>$ 40</td>
										<td>0</td>
										<td><span class="badge bg-danger py-2">Out</span></td>
										<td><i class="fas fa-edit text-primary"></i></td>
									</tr>
								</tbody>
							</table>

							<!-- start paganation -->
							<nav>
								<ul class="pagination pagination-sm justify-content-center">
									<li class="page-item"><a href="javascript:void(0);" class="page-link px-3 py-2"><span>Previous</span></a></li>
									<li class="page-item active"><a href="javascript:void(0);" class="page-link px-3 py-2"><span>1</span></a></li>
									<li class="page-item"><a href="javascript:void(0);" class="page-link px-3 py-2"><span>2</span></a></li>
									<li class="page-item"><a href="javascript:void(0);" class="page-link px-3 py-2"><span>3</span></a></li>
									<li class="page-item"><a href="javascript:void(0);" class="page-link px-3 py-2"><span>Next</span></a></li>

								</ul>
							</nav>
							<!-- end paganation -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End User Permission -->

	<!-- Start Sale Analysis -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-md-9 ms-auto">
					<div class="row">
						<div class="col-xl-3 col-6">
							
							<div class="card">
								<div class="card-body">
									<h5 class="card-title mb-3">Sale Analysis Trend</h5>

									<div class="mt-2">
										<div class="d-flex justify-content-between">
										<small>Order Value</small>
										<small>155.5%</small>
										</div>

										<div class="progress" style="height: 10px;">
											<div class="progress-bar bg-secondary" style="width: 80%; " aria-valuenone="90" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>

									<div  class="mt-2">
										<div class="d-flex justify-content-between">
										<small>Order Value</small>
										<small>238.2%</small>
										</div>

										<div class="progress" style="height: 10px;">
											<div class="progress-bar bg-success" style="width: 50%;" aria-valuenone="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>

									<div  class="mt-2">
										<div class="d-flex justify-content-between">
										<small>Quantity</small>
										<small>23.30%</small>
										</div>

										<div class="progress" style="height: 10px;">
											<div class="progress-bar bg-warning" style="width: 70%;" aria-valuenone="70" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="col-xl-3 col-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div>
												<p>Total Salary</p>
											</div>
											<div>
												<h4>$7,590</h4>
												<div class="progress">
													<div class="progress-bar bg-danger" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div>
												<p>Total Bonus</p>
											</div>
											<div>
												<h4>$1,330</h4>
												<div class="progress">
													<div class="progress-bar bg-success" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-6">
							<div class="card bg-primary text-white">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-center">
										<h2>$4,624</h2>
										<div>
											<i class="fas fa-suitcase fa-2x"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<h5>Average Sales</h5>
										<div>
											<p>Since Last Month</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-6">
							<div style="width: 250px;height: 250px;">
  								<canvas id="myChart"></canvas>
							</div>
						</div>	

						


					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Sale Analysis -->

	<!-- Start Quick Sales -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-md-9 ms-auto">
					<div class="row">
						<div class="col-xl-5">
							<div class="card">
								<div class="card-body">
									<h5 class="text-center text-muted">Quick Sales</h5>
									<ul class="list-inline text-center py-3">
										<li class="list-inline-item">
											<a href="javascript:void(0);" class="nav-link">
												<i class="fas fa-pencil-alt text-success"></i>
												<span class="h6 text-muted">Post</span>
											</a>
										</li>
										<li class="list-inline-item mx-4">
											<a href="javascript:void(0);" class="nav-link">
												<i class="fas fa-image text-info"></i>
												<span class="h6 text-muted">Image</span>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="javascript:void(0);" class="nav-link">
												<i class="fas fa-video text-primary"></i>
												<span class="h6 text-muted">Video</span>
											</a>
										</li>
									</ul>

									<form action="" method="">
										<div class="form-group">
											<input type="text" name="post" id="post" class="form-control py-2 mb-3" placeholder="Write Something...">
										</div>
										<div class="d-grid">
											<button type="button" class="btn btn-primary fw-bold text-uppercase py-2">Submit Post</button>
										</div>
									</form>

									<div class="d-flex justify-content-center datepicker">
										<div id="datepicker"> </div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-7">
							<h5 class="text-muted">Recent Customer Activities</h5>

							<div>
								<div class="card">
                                    <div class="card-header">
										<div class="d-grid">
											<button class="btn btn-secondary text-light" data-bs-target="#collapse1" data-bs-toggle="collapse">
												<img src="./assets/img/users/user2.jpg" class="me-3 rounded-circle" width="50" height="50" alt="uset1">
												Mr.June post a  new comment now.
											</button>
										</div>
									</div>

									<div id="collapse1" class="collapse show">
										<div class="card-body">
											<small> Lorem ipsum is a placeholder text commonly used to demonstrate the visual</small>
										</div>
									</div>

								</div>

								<div class="card">
                                    <div class="card-header">
										<div class="d-grid">
											<button class="btn btn-secondary text-light" data-bs-target="#collapse2" data-bs-toggle="collapse">
												<img src="./assets/img/users/user1.jpg" width="50" height="50" class="me-3 rounded-circle" alt="uset1">
												Mr.Aung post a  new comment now.
											</button>
										</div>
									</div>

									<div id="collapse2" class="collapse">
										<div class="card-body">
											<small> Lorem ipsum is a placeholder text commonly used to demonstrate the visual</small>
										</div>
									</div>

								</div>

								<div class="card">
                                    <div class="card-header">
										<div class="d-grid">
											<button class="btn btn-secondary text-light" data-bs-target="#collapse3" data-bs-toggle="collapse">
												<img src="./assets/img/users/agen-s-3-1.jpg" width="50" height="50" class="me-3 rounded-circle" alt="uset1">
												Mr.July post a  new comment now.
											</button>
										</div>
									</div>

									<div id="collapse3" class="collapse">
										<div class="card-body">
											<small> Lorem ipsum is a placeholder text commonly used to demonstrate the visual</small>
										</div>
									</div>

								</div>

								<div class="card">
                                    <div class="card-header">
										<div class="d-grid">
											<button class="btn btn-secondary text-light" data-bs-target="#collapse4" data-bs-toggle="collapse">
												<img src="./assets/img/users/agen-s-3-2.jpg" width="50" height="50" class="me-3 rounded-circle" alt="uset1">
												Mr.May post a  new comment now.
											</button>
										</div>
									</div>

									<div id="collapse4" class="collapse">
										<div class="card-body">
											<small> Lorem ipsum is a placeholder text commonly used to demonstrate the visual</small>
										</div>
									</div>

								</div>

								<div class="card">
                                    <div class="card-header">
										<div class="d-grid">
											<button class="btn btn-secondary text-light" data-bs-target="#collapse5" data-bs-toggle="collapse">
												<img src="./assets/img/users/agen-s-3-4.jpg" width="50" height="50" class="me-3 rounded-circle" alt="uset1">
												Mr.Kyaw post a  new comment now.
											</button>
										</div>
									</div>

									<div id="collapse5" class="collapse">
										<div class="card-body">
											<small> Lorem ipsum is a placeholder text commonly used to demonstrate the visual</small>
										</div>
									</div>

								</div>

								<div class="card">
                                    <div class="card-header">
										<div class="d-grid">
											<button class="btn btn-secondary text-light" data-bs-target="#collapse6" data-bs-toggle="collapse">
												<img src="./assets/img/users/agent-1.jpg" width="50" height="50" class="me-3 rounded-circle" alt="uset1">
												Mr.Anto post a  new comment now.
											</button>
										</div>
									</div>

									<div id="collapse6" class="collapse">
										<div class="card-body">
											<small> Lorem ipsum is a placeholder text commonly used to demonstrate the visual</small>
										</div>
									</div>

								</div>



							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Quick Sales -->

@include('layouts.adminfooter')


