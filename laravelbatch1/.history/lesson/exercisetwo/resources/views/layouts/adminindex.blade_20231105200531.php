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


    <!-- start left side bar  -->
    @include('layouts.adminleftsidebar')
    <!-- end left side bar  -->


    <!-- start content area  -->
    @yield('content')
    <!-- end content area  -->
</div>
	
			

	

@include('layouts.adminfooter')






<!DOCTYPE html>
<html>

<head>
	<title>Admin Template Two</title>
	<!-- fav icon  -->
	<link href="./assets/img/fav/favicon.png" rel="icon" type="image/png" sizes="16x16" />
	<!-- bootstrap css1 js1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- fontawesome css1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- jqueryui css1 js1 -->
	<link href="./assets/libs/jquery-ui-1.13.2.custom/jquery-ui.min.css" rel="stylesheet" type="text/css" />
	<!-- custom css css1 -->
	<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="show-nav">


	<!--Start Site Setting-->
       <div id="sitesettings" class="sitesettings">
            <div><a href="javascript:void(0);" id="sitetoggle"></a></div>
	   </div>
	<!--End Site Setting-->


	<!--Start Content Area-->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-md-9 ms-auto">

					<!-- Start Shortcut Area -->
					<div class='row pt-md-5 mt-md-3'>

						<div class='col-lg-3 col-md-6 mb-2'>
							<div class='card shadow py-2 border-left-primarys'>
								<div class='card-body'>

									<div class='row align-items-center'>
										<div class='col'>
											<h5 class='text-xs fw-bold text-primary text-uppercase mb-1'>Sales (Monthly)
											</h5>
											<p class='h5 text-muted mb-0'>$ 50,000</p>
										</div>
										<div class='col-auto'>
											<i class='fas fa-calendar fa-2x text-secondary'></i>
										</div>
									</div>
								</div>


							</div>
						</div>

						<div class='col-lg-3 col-md-6 mb-2'>
							<div class='card shadow py-2 border-left-successes'>
								<div class='card-body'>

									<div class='row align-items-center'>
										<div class='col'>
											<h5 class='text-xs fw-bold text-primary text-uppercase mb-1'>Rental Fee
												(Annual)</h5>
											<p class='h5 text-muted mb-0'>$ 400,000</p>
										</div>
										<div class='col-auto'>
											<i class='fas fa-dollar-sign fa-2x text-secondary'></i>
										</div>
									</div>
								</div>


							</div>
						</div>


						<div class='col-lg-3 col-md-6 mb-2'>
							<div class='card shadow py-2 border-left-infos'>
								<div class='card-body'>

									<div class='row align-items-center'>
										<div class='col'>
											<h5 class='text-xs fw-bold text-primary text-uppercase mb-1'>Debt Collect
											</h5>
											<div class='row'>
												<div class='col-auto'>
													<p class='h5 text-muted mb-0'>60%</p>
												</div>
												<div class='col'>
													<div class='progress progress-sm'>
														<div class='progress-bar bg-info' style='width:60%'
															aria-valuenow="60" aria-valuemin="0" aria-valuemax='100'>
														</div>
													</div>
												</div>
											</div>
										</div>



										<div class='col-auto'>
											<i class='fas fa-clipboard-list fa-2x text-secondary'></i>
										</div>
									</div>
								</div>


							</div>
						</div>

						<div class='col-lg-3 col-md-6 mb-2'>
							<div class='card shadow py-2 border-left-warnings'>
								<div class='card-body'>

									<div class='row align-items-center'>
										<div class='col'>
											<h5 class='text-xs fw-bold text-primary text-uppercase mb-1'>Request Message
											</h5>
											<p class='h5 text-muted mb-0'>25</p>
										</div>
										<div class='col-auto'>
											<i class='fas fa-comments fa-2x text-secondary'></i>
										</div>
									</div>
								</div>


							</div>
						</div>


					</div>
					<!-- End Shortcut Area -->

					<!-- Start Carousel Area  -->

					<div class="row">
						<div class="col-sm-6 col-md-3 mb-2">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="cart-title">Sales</h6>
									</div>
									<div id="sales" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">

											<div class="carousel-item active">

												<div class="d-flex ">
													<h3 class="me-3">$ 58,664</h3>
													<h5 class="text-danger">+3.2%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Revenue <span
															class="text-muted">($1572M last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>

											<div class="carousel-item">

												<div class="d-flex">
													<h3 class="me-3">$ 8,664</h3>
													<h5 class="text-danger">+2.3%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Profit<span class="text-muted">($1572M
															last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>


											<div class="carousel-item">

												<div class="d-flex">
													<h3 class="me-3">$ 664</h3>
													<h5 class="text-danger">+5.2%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Net Amount<span
															class="text-muted">($1772M last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>

										</div>

										<button type="button" class="carousel-control-prev" data-bs-target="#sales"
											data-bs-slide="prev">
											<span class="carousel-control-prev-icon"></span>
										</button>

										<button type="button" class="carousel-control-next" data-bs-target="#sales"
											data-bs-slide="next">
											<span class="carousel-control-next-icon"></span>
										</button>

									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-3 mb-2">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="cart-title">Purchase</h6>
									</div>
									<div id="purchase" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">

											<div class="carousel-item active">

												<div class="d-flex ">
													<h3 class="me-3">$ 278,632</h3>
													<h5 class="text-danger">+1.2%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Preorder <span
															class="text-muted">($2172M last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>

											<div class="carousel-item">

												<div class="d-flex">
													<h3 class="me-3">$ 614</h3>
													<h5 class="text-danger">+2.3%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Fixorder<span
															class="text-muted">($2772M
															last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>


											<div class="carousel-item">

												<div class="d-flex">
													<h3 class="me-3">$ 614</h3>
													<h5 class="text-danger">+5.2%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Netorder<span
															class="text-muted">($272M last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>

										</div>

										<button type="button" class="carousel-control-prev" data-bs-target="#purchase"
											data-bs-slide="prev">
											<span class="carousel-control-prev-icon"></span>
										</button>

										<button type="button" class="carousel-control-next" data-bs-target="#purchase"
											data-bs-slide="next">
											<span class="carousel-control-next-icon"></span>
										</button>

									</div>
								</div>
							</div>
						</div>


						<div class="col-sm-6 col-md-3 mb-2">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="cart-title">Return</h6>
									</div>
									<div id="return" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">

											<div class="carousel-item active">

												<div class="d-flex ">
													<h3 class="me-3">$ 11,664</h3>
													<h5 class="text-danger">+1.0%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Expire <span class="text-muted">($2M
															last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>

											<div class="carousel-item">

												<div class="d-flex">
													<h3 class="me-3">$ 9,144</h3>
													<h5 class="text-danger">+2.3%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Damage<span class="text-muted">($72M
															last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>


											<div class="carousel-item">

												<div class="d-flex">
													<h3 class="me-3">$ 1,5664</h3>
													<h5 class="text-danger">+8.2%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Net Return<span
															class="text-muted">($2M last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>

										</div>

										<button type="button" class="carousel-control-prev" data-bs-target="#return"
											data-bs-slide="prev">
											<span class="carousel-control-prev-icon"></span>
										</button>

										<button type="button" class="carousel-control-next" data-bs-target="#return"
											data-bs-slide="next">
											<span class="carousel-control-next-icon"></span>
										</button>

									</div>
								</div>
							</div>
						</div>


						<div class="col-sm-6 col-md-3 mb-2">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="cart-title">Marketing</h6>
									</div>
									<div id="marketing" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">

											<div class="carousel-item active">

												<div class="d-flex ">
													<h3 class="me-3">$ 2,664</h3>
													<h5 class="text-danger">+1.2%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">company <span class="text-muted">($72M
															last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>

											<div class="carousel-item">

												<div class="d-flex">
													<h3 class="me-3">$ 75,664</h3>
													<h5 class="text-danger">+5.3%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Outlet<span class="text-muted">($172M
															last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>


											<div class="carousel-item">

												<div class="d-flex">
													<h3 class="me-3">$ 15,664</h3>
													<h5 class="text-danger">+7.2%</h5>
												</div>

												<div class="mb-3">
													<p class="fw-bold text-small">Workshop<span
															class="text-muted">($192M last month)</span></p>
												</div>
												<button
													class="btn btn-outline-secondary btn-sm d-flex align-items-center">
													<i class="fas fa-calendar-alt me-1"></i>
													<span>June</span>
												</button>
											</div>

										</div>

										<button type="button" class="carousel-control-prev" data-bs-target="#marketing"
											data-bs-slide="prev">
											<span class="carousel-control-prev-icon"></span>
										</button>

										<button type="button" class="carousel-control-next" data-bs-target="#marketing"
											data-bs-slide="next">
											<span class="carousel-control-next-icon"></span>
										</button>

									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- End Carousel Area  -->


					<!-- Start gauge Area -->
					<div class='row pt-md-5 mt-md-3'>

						<div class='col-lg-3 col-md-6 mb-2'>
							<div class='card shadow py-2 border-left-primarys'>
								<div class='card-body'>

									<div class='row justify-content-center align-items-center'>
										<div class='col d-flex justify-content-between'>
											<h6 class='text-xs fw-bold text-primary text-uppercase mb-1'>Users
												</h>
												<p class='h5 text-muted mb-0'>50</p>
										</div>
										<div class='col-auto'>
											<div id="gaugeusers"></div>
										</div>
									</div>
								</div>


							</div>
						</div>

						<div class='col-lg-3 col-md-6 mb-2'>
							<div class='card shadow py-2 border-left-successes'>
								<div class='card-body'>

									<div class='row justify-content-center align-items-center'>
										<div class='col d-flex justify-content-between'>
											<h5 class='text-xs fw-bold text-primary text-uppercase mb-1'>Customers</h5>
											<p class='h5 text-muted mb-0'>700,000</p>
										</div>
										<div class='col-auto'>
											<div id="gaugecustomers"></div>
										</div>
									</div>
								</div>


							</div>
						</div>


						<div class='col-lg-3 col-md-6 mb-2'>
							<div class='card shadow py-2 border-left-infos'>
								<div class='card-body'>

									<div class='row justify-content-center align-items-center'>
										<div class='col d-flex justify-content-between'>
											<h6 class='text-xs fw-bold text-primary text-uppercase mb-1'>Employees
											</h6>
											<div class='row'>
												<div class='col-auto'>
													<p class='h5 text-muted mb-0'>80</p>
												</div>
												<div class='col'>
													<div id="gaugeemployees"></div>
												</div>
											</div>
										</div>



										<div class='col-auto'>
											<i class='fas fa-clipboard-list fa-2x text-secondary'></i>
										</div>
									</div>
								</div>


							</div>
						</div>

						<div class='col-lg-3 col-md-6 mb-2'>
							<div class='card shadow py-2 border-left-warnings'>
								<div class='card-body'>

									<div class='row justify-content-center align-items-center'>
										<div class='col d-flex justify-content-between'>
											<h6 class='text-xs fw-bold text-primary text-uppercase mb-1'>Invester
											</h6>
											<p class='h5 text-muted mb-0'>40</p>
										</div>
										<div class='col-auto'>
											<div id="gaugeinvesters"></div>
										</div>
									</div>
								</div>


							</div>
						</div>


					</div>
					<!-- End gauge Area -->


					<!-- Start Expense Area -->
					<div class="row">
						<div class="col-md-7 mb-3">
							<div class="card shadow">
								<div class="card-header py-2">
									<h6 class="text-primary">Expense</h6>
								</div>
								<div class="card-body">
									<h4 class="small">Other Expenses <span>20%</span></h4>
									<div class="progress mb-2">
										<div class="progress-bar bg-danger" style="width:20%;" aria-valuenow="20"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>

									<h4 class="small">Sales Tracking <span>40%</span></h4>
									<div class="progress mb-2">
										<div class="progress-bar bg-warning" style="width:40%;" aria-valuenow="40"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>

									<h4 class="small">Rental Fee <span>60%</span></h4>
									<div class="progress mb-2">
										<div class="progress-bar bg-primary" style="width:60%;" aria-valuenow="60"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>

									<h4 class="small">Salary <span>80%</span></h4>
									<div class="progress mb-2">
										<div class="progress-bar bg-info" style="width:80%;" aria-valuenow="80"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>

									<h4 class="small">Fixture <span>100%</span></h4>
									<div class="progress mb-2">
										<div class="progress-bar bg-success" style="width:100%;" aria-valuenow="100"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-5 mb-3">
							<div class="card">
								<div class="card-header py-2">
									<h6 class="text-primary">Revenue Sources</h6>
								</div>
								<div class="card-body">
									<div class="d-flex justify-content-center">
										<canvas id="mypiechart"></canvas>
									</div>
									<div class="small text-center mt-2">
										<span><i class="fas fa-circle text-warning"></i> Return Item</span>
										<span class="mx-2"><i class="fas fa-circle text-primary"></i> Direct
											Sales</span>
										<span><i class="fas fa-circle text-danger"></i> Online Sales</span>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Expense Area -->

					<!-- Start Earning Area -->

					<div class="row">

						<div class="col-lg-8 mb-3">
							<div class="card">
								<div class="card-header d-flex justify-content-between align-items-center py-2">
									<h6>Earning Overview</h6>
									<div class="dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
											<i class="fas fa-ellipsis-v fa-sm"></i>
										</a>
										<div class="dropdown-menu shadow">
											<div class="dropdown-header">Quick Action</div>
											<a href="javascript:void(0);" class="dropdown-item">Action</a>
											<a href="javascript:void(0);" class="dropdown-item">Edit</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:void(0);" class="dropdown-item">Action</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div id="curve_chart" style="width:100%;"></div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 mb-3">
							<div class="card">
								<div class="card-body">
									<h5>Regional Team</h5>

									<div class="d-flex align-items-center border-bottom py-2">
										<img src="./assets/img/users/user1.jpg" class="rounded-circle" width="40"
											height="40" alt="user1" />
										<div class="ms-3">
											<h6 class="mb-1 ms-1">Ms . July</h6>
											<small class="text-muted mb-0"><i
													class="fa fa-map-marker-alt me-1"></i>Mandalay City,
												Myanmar.</small>
										</div>
										<div class="badge bg-success p-1 ms-auto">
											<i class="fas fa-plus"></i>
										</div>
									</div>


									<div class="d-flex align-items-center border-bottom py-2">
										<img src="./assets/img/users/user2.jpg" class="rounded-circle" width="40"
											height="40" alt="user2" />
										<div class="ms-3">
											<h6 class="mb-1 ms-1">Ms. Anton</h6>
											<small class="text-muted mb-0"><i
													class="fa fa-map-marker-alt me-1"></i>Yangon City, Myanmar.</small>
										</div>
										<div class="badge bg-success p-1 ms-auto">
											<i class="fas fa-check"></i>
										</div>
									</div>


									<div class="d-flex align-items-center py-2">
										<img src="./assets/img/users/user3.jpg" class="rounded-circle" width="40"
											height="40" alt="user3" />
										<div class="ms-3">
											<h6 class="mb-1 ms-1">Ms . Yoon</h6>
											<small class="text-muted mb-0"><i class="fa fa-map-marker-alt me-1"></i>Bago
												City, Myanmar.</small>
										</div>
										<div class="badge bg-success p-1 ms-auto">
											<i class="fas fa-check"></i>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>


					<!-- End Earning Area -->

					<!-- Start Result Area -->
					<div class="row">

						<div class="col-12 mb-3">
							<div class="card">
								<div class="row">

									<div class="col-md-3 col-sm-6">
										<div class="card-body">
											<div class="d-flex justify-content-center align-items-center">
												<i class="fas fa-users fa-2x text-primary me-4"></i>
												<div class="text-center">
													<p class="text-dark mb-0">Users</p>
													<h5 class="fw-bold text-dark mb-0">56,320</h5>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="card-body">
											<div class="d-flex justify-content-center align-items-center">
												<i class="fas fa-check-circle fa-2x text-primary me-4"></i>
												<div class="text-center">
													<p class="text-dark mb-0">Feedbacks</p>
													<h5 class="fw-bold text-dark mb-0">3,200</h5>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-3 col-sm-6">
										<div class="card-body">
											<div class="d-flex justify-content-center align-items-center">
												<i class="fas fa-trophy fa-2x text-primary me-4"></i>
												<div class="text-center">
													<p class="text-dark mb-0">Employees</p>
													<h5 class="fw-bold text-dark mb-0">1,600</h5>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-3 col-sm-6">
										<div class="card-body">
											<div class="d-flex justify-content-center align-items-center">
												<i class="fas fa-star fa-2x text-primary me-4"></i>
												<div class="text-center">
													<p class="text-dark mb-0">Sales</p>
													<h5 class="fw-bold text-dark mb-0">12,860</h5>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- End Result Area -->

					<!-- Start Project Status Area -->
					<div class="row">

						<div class="col-md-4 mt-4">
							<div class="card">
								<div class="card-body">
									<div>
										<h5 class="card-title">Sale Analysis Trend</h5>
									</div>

									<div id="salescontainer"></div>

									<!--                                     <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Order Value</small>
                                            <small>120.8%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-secondary" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">

                                            </div>
                                        </div>
                                    </div> -->

									<!--                                     <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Total Product</small>
                                            <small>325.2%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                            </div>
                                        </div>
                                    </div> -->


									<!--                                     <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Quantity</small>
                                            <small>25.60%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">

                                            </div>
                                        </div>
                                    </div> -->

								</div>
							</div>
						</div>

						<div class="col-md-8">

							<div class="card">
								<div class="card-body">
									<div>
										<h5>Project Status</h5>
									</div>
									<div class="table-resopnsive">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="d-flex">
															<img src="./assets/img/clients/client1.png"
																class="img-sm me-2" width="100" alt="client1" />
															<div>
																<div>Company</div>
																<div class="fw-bold mt-1">Sony Electronic</div>
															</div>
														</div>
													</td>
													<td>
														Sales
														<div class="fw-bold mt-1">$3250</div>
													</td>
													<td>
														Status
														<div class="fw-bold text-success mt-1">88%</div>
													</td>
													<td>
														Deadline
														<div class="fw-bold mt-1">10 June 2023</div>
													</td>
													<td>
														<button type="button" class="btn btn-sm btn-secondary"><i
																class="fas fa-pen"></i> edit action</button>
													</td>
												</tr>

												<tr>
													<td>
														<div class="d-flex">
															<img src="./assets/img/clients/client2.png"
																class="img-sm me-2" width="100" alt="client2" />
															<div>
																<div>Company</div>
																<div class="fw-bold mt-1">Mi Electronic</div>
															</div>
														</div>
													</td>
													<td>
														Sales
														<div class="fw-bold mt-1">$5250</div>
													</td>
													<td>
														Status
														<div class="fw-bold text-success mt-1">78%</div>
													</td>
													<td>
														Deadline
														<div class="fw-bold mt-1">12 June 2023</div>
													</td>
													<td>
														<button type="button" class="btn btn-sm btn-secondary"><i
																class="fas fa-pen"></i> edit action</button>
													</td>
												</tr>

												<tr>
													<td>
														<div class="d-flex">
															<img src="./assets/img/clients/client3.png"
																class="img-sm me-2" width="100" alt="client3" />
															<div>
																<div>Company</div>
																<div class="fw-bold mt-1">Vivo Electronic</div>
															</div>
														</div>
													</td>
													<td>
														Sales
														<div class="fw-bold mt-1">$1250</div>
													</td>
													<td>
														Status
														<div class="fw-bold text-success mt-1">38%</div>
													</td>
													<td>
														Deadline
														<div class="fw-bold mt-1">12 June 2023</div>
													</td>
													<td>
														<button type="button" class="btn btn-sm btn-secondary"><i
																class="fas fa-pen"></i> edit action</button>
													</td>
												</tr>

												<tr>
													<td>
														<div class="d-flex">
															<img src="./assets/img/clients/client4.png"
																class="img-sm me-2" width="100" alt="client4" />
															<div>
																<div>Company</div>
																<div class="fw-bold mt-1">Oppo Electronic</div>
															</div>
														</div>
													</td>
													<td>
														Sales
														<div class="fw-bold mt-1">$5250</div>
													</td>
													<td>
														Status
														<div class="fw-bold text-success mt-1">78%</div>
													</td>
													<td>
														Deadline
														<div class="fw-bold mt-1">10 June 2023</div>
													</td>
													<td>
														<button type="button" class="btn btn-sm btn-secondary"><i
																class="fas fa-pen"></i> edit action</button>
													</td>
												</tr>




											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>

					</div>
					<!-- End Project Status Area -->

					<!-- Start Todo List Area  -->
					<div class="row mt-3">

						<div class="col-lg-4">
							<div class="card">
								<div class="card-body">

									<div class="d-flex justify-content-between">
										<h4 class="card-title">Todo List</h4>
										<div class="dropdown">
											<a href="javascript:void(0);" class="dropdown-toggle"
												data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v fa-sm"></i></a>
											<div class="dropdown-menu shadow">
												<a href="javascript:void(0);" class="dropdown-item">Action</a>
												<a href="javascript:void(0);" class="dropdown-item">Another action</a>
												<a href="javascript:void(0);" class="dropdown-item">Something else
													here</a>
											</div>
										</div>
									</div>

									<div class="input-group mt-3">
										<input type="text" class="form-control form-control-sm"
											placeholder="Add List here..." />
										<button type="submit" class="btn btn-primary btn-sm form-group-text">Add to
											List</button>
									</div>

									<div>
										<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
											typesetting industry.</p>
										<ul class="list-unstyled">

											<li class="d-flex justify-content-between">
												<label>
													<input type="checkbox" class="checkbox" /><span class="ms-2">when an
														unknown printer took a galley of type</span>
												</label>
												<i class="fas fa-trash-alt text-muted"></i>
											</li>

											<li class="d-flex justify-content-between">
												<label>
													<input type="checkbox" class="checkbox" /><span class="ms-2">when an
														unknown printer took a galley of type</span>
												</label>
												<i class="fas fa-trash-alt text-muted"></i>
											</li>

											<li class="d-flex justify-content-between">
												<label>
													<input type="checkbox" class="checkbox" /><span class="ms-2">when an
														unknown printer took a galley of type</span>
												</label>
												<i class="fas fa-trash-alt text-muted"></i>
											</li>

											<li class="d-flex justify-content-between">
												<label>
													<input type="checkbox" class="checkbox" /><span class="ms-2">when an
														unknown printer took a galley of type</span>
												</label>
												<i class="fas fa-trash-alt text-muted"></i>
											</li>

											<li class="d-flex justify-content-between">
												<label>
													<input type="checkbox" class="checkbox" /><span class="ms-2">when an
														unknown printer took a galley of type</span>
												</label>
												<i class="fas fa-trash-alt text-muted"></i>
											</li>

											<li class="d-flex justify-content-between">
												<label>
													<input type="checkbox" class="checkbox" /><span class="ms-2">when an
														unknown printer took a galley of type</span>
												</label>
												<i class="fas fa-trash-alt text-muted"></i>
											</li>


										</ul>
									</div>
								</div>
							</div>
						</div>


						<div class="col-lg-8">
							<div class="card shadow">
								<div class="card-header">
									<h5 class="m-0 text-primary">Illustrations</h5>
								</div>
								<div class="card-body">
									<div class="text-center">
										<img src="./assets/img/etc/studentgroup.png" class="" style="width:150px"
											alt="studentgroup" />
									</div>
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industry's standard dummy text ever since the 1500s, when an
										unknown printer took a galley of type and scrambled it to make a type specimen
										book. It has survived not only five centuries, but also the leap into electronic
										typesetting, remaining essentially unchanged. It was popularised in the 1960s
									</p>
									<a href="javascript:void(0);">Browse Illustrations on more.</a>
								</div>
							</div>
						</div>

					</div>
					<!-- End Todo List Area -->


				</div>
			</div>
		</div>
	</section>
	<!--End Content Area-->

	<!--Start Footer Section-->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-8 ms-auto">

                <div class="row border-top pt-3">

                    <div class="col-lg-6 text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item me-2">
                                <a href="#" class="text-dark">Data Technology Co.,Ltd</a>
                            </li>
                            <li class="list-inline-item me-2">
                                <a href="#" class="text-dark">About</a>
                            </li>
                            <li class="list-inline-item me-2">
                                <a href="#" class="text-dark">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 text-center">
                        <span>&copy;<span id="getyear"></span> <span  class="">Copyright, All Rights Reserved</span></span>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
	<!--End Footer Section-->

    <!-- start right navbar section  -->
	<div class="right-panels">
		<h6>Custom your template</h6>
		<p class="small">Hifi!! here you can change your theme</p>

	</div>
    <!-- end right navbar section  -->


	<!-- bootstrap css1 js1 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
	<!-- jquery js1 -->
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" type="text/javascript"></script>
	<!-- jqueryui css1 js1 -->
	<script src="./assets//libs/jquery-ui-1.13.2.custom/jquery-ui.min.js" type="text/javascript"></script>
	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<!-- Chartjs js1 -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<!-- Raphael must be included before justgage -->
	<!-- https://github.com/toorshia/justgage -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.min.js"></script>

	<!-- custom js js1 -->
	<script src="./js/app.js" type="text/javascript"></script>


</body>

</html>

<!-- 12GT -->
<!-- 1ST -->
