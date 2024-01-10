
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
	
			

	






@include('layouts.adminheader')




 <!DOCTYPE html>
<html>
    <head>
        <title>Admin Template two</title>

         <!--link fav icon-->
         <link href="./assets/img/fav/favicon.png" type="image/png" size="16x16" />

        <!--fontawesome cdn version 5.15.4-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--bootstrap css 1 version 5.3.0-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!--Custom Css-->
        <link href="./css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <!--Start Site Setting-->
    
    <!--End Site Setting-->
    <!--Start Left Navbar-->
   
    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light">
            <div id="nav" class="navbar-collapse">
                <div class="container-fluid">
                    <div class="row">
                    <!--Start Left Sidebar-->
                    <div class="col-lg-2 col-md-3 fixed-top vh-100 overflow-auto sidebars">
                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item nav-categories ">Main</li>
                            <li class="nav-item nav-categories"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks"><i class="fas fa-tachometer-alt fa-lg me-3"></i>Dashboard</a></li>

                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks currents" data-bs-target="#pagelayout" data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Page Layout<i class="fas fa-angle-left mores"></i></a>
                            
                            <ul id="pagelayout" class="collapse ps-2">
                                <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Right Boxed</a></li>
                                <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Left Boxed</a></li>
                            </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#sidebarlayout" data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Sidebar Layout<i class="fas fa-angle-left mores"></i></a>
                            
                                <ul id="sidebarlayout" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Compact Menu</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Icon Menu</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Sidebar Hidden</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Sidebar overlay</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Sidebar Fixed</a></li>
                                    
                                </ul>
    
                            </li>

                            <li class="nav-item nav-categories">Widgets</li>

                            <li class="nav-item nav-categories">UI Features</li>

                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#basicui" data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Basic UI Element<i class="fas fa-angle-left mores"></i></a>
                            
                                <ul id="basicui" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Accordions</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Buttons</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Badges</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Breadcrumbs</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Dropdowns</a></li>
                                    
                                </ul>
    
                            </li>

                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#advanceui" data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Advance UI<i class="fas fa-angle-left mores"></i></a>
                            
                                <ul id="advanceui" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Clipboard</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Sliders</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Carousel</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Loaders</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Tree Views</a></li>
                                    
                                </ul>
    
                            </li>

                            <li class="nav-item nav-categories">Popus</li>

                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#iconselement" data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Icons<i class="fas fa-angle-left mores"></i></a>
                            
                                <ul id="iconselement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Material</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Flat Icons</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Font Awesome</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Simple Line Icons</a></li>
                                    
                                </ul>
    
                            </li>

                            <li class="nav-item nav-categories">Editors</li>

                            <li class="nav-item nav-categories">Text Editors</li>

                            <li class="nav-item nav-categories">Code Editors</li>

                            <li class="nav-item nav-categories">Date Representation</li>

                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#chartelement" data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Charts<i class="fas fa-angle-left mores"></i></a>
                            
                                <ul id="chartelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Pie Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Map Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Line Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Chart Js</a></li>
                                    
                                </ul>
    
                            </li>

                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#tableelement" data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Tables<i class="fas fa-angle-left mores"></i></a>
                            
                                <ul id="tableelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Basic Table</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Data Table</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Sortable table</a></li>
                                </ul>
    
                            </li>

                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#mapelement" data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Maps<i class="fas fa-angle-left mores"></i></a>
                            
                                <ul id="mapelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Google Map</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i>Vector Map</a></li>
                                </ul>
    
                            </li>

                        </ul>
                    </div>
                    <!--End Left Sidebar-->

                    <!--Start Top Sidebar-->
                    <div class="col-lg-10 col-md-9 fixed-top ms-auto topnavbars">
                        <div class="row">
                            <nav class="navbar navbar-expand navbar-light bg-white shadow">
                                <!--Seacrh-->

                                <!--Seacrh-->
                                <form class="me-auto" action="" method="">
                                    <div class="input-group">
                                        <input type="text" name="search" id="search" class="form-control border-0 shadow-none" placeholder="Search Something..." />
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <!--notify & userlogout-->
                                <ul class="navbar-nav me-5 pe-5">
                                    <!-- notify -->
                                    <li class="nav-item dropdowns">
                                        <a href="javascript:void(0);" class="nav-line dropbtn" onclick="dropbtn(event)">
                                            <i class="fas fa-bell"></i>
                                            <span class="badge bg-danger">5+</span>
                                        </a>

                                        <div class="dropdown-contents mydropdowns">

                                            <h6>Alert Center</h6>
                                            <a href="javascript-void(0);" class="d-flex">
                                                <div class="me-3">
                                                    <i class="fas fa-file-alt"></i>
                                                </div>
                                                <div>
                                                    <p class="small text-muted">3 May 2023</p>
                                                    <i>A new members created.</i>
                                                </div>
                                            </a>

                                            <a href="javascript-void(0);" class="d-flex">
                                                <div class="me-3">
                                                    <i class="fas fa-database text-warning"></i>
                                                </div>
                                                <div>
                                                    <p class="small text-muted">3 May 2023</p>
                                                    <i>Some of your data are missing</i>
                                                </div>
                                            </a>

                                            <a href="javascript-void(0);" class="d-flex">
                                                <div class="me-3">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div>
                                                    <p class="small text-muted">3 May 2023</p>
                                                    <i>New user are invited you.</i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="small text-center text-muted">Show All Notification</a>

                                        </div>
                                    </li>
                                    <!-- notify -->

                                     <!-- message -->
                                     <li class="nav-item dropdowns mx-3">
                                        <a href="javascript:void(0);" class="nav-line dropbtn" onclick="dropbtn(event)">
                                            <i class="fas fa-envelope"></i>
                                            <span class="badge bg-danger">7+</span>
                                        </a>

                                        <div class="dropdown-contents mydropdowns">

                                            <h6>Message Center</h6>
                                            <a href="javascript-void(0);" class="d-flex">
                                                <div>
                                                    <img src="./assets/img/users/user1.jpg" class="rounded-circle" width="20" alt="user1" />
                                                </div>
                                                <div>
                                                    <p class="small text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing.
                                                    </p>
                                                    <i>Ms.July 25m ago.</i>
                                                </div>
                                            </a>

                                            <a href="javascript-void(0);" class="d-flex">
                                                <div>
                                                    <img src="./assets/img/users/user2.jpg" class="rounded-circle" width="20" alt="user2" />
                                                </div>
                                                <div>
                                                    <p class="small text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing.
                                                    </p>
                                                    <i>Mr.Anto 40m ago.</i>
                                                </div>
                                            </a>

                                            <a href="javascript-void(0);" class="d-flex">
                                                <div>
                                                    <img src="./assets/img/users/user3.jpg" class="rounded-circle" width="20" alt="user3" />
                                                </div>
                                                <div>
                                                    <p class="small text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing.
                                                    </p>
                                                    <i>Ms.PaPa 55m ago.</i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="small text-center text-muted">Read More Message</a>

                                        </div>
                                    </li>
                                    <!-- message -->

                                    <!--user logout-->
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" ">
                                           
                                            <span class="text-muted small me-2">Admin</span>
                                            <img src="./assets/img/users/user1.jpg" class="rounded-circle" width="25" />
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="fas fa-user fa-sm text-muted me-2"></i> Profile</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="fas fa-cogs fa-sm text-muted me-2"></i> Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="fas fa-list fa-sm text-muted me-2"></i> Avtivity Log</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="fas fa-sign-out-alt fa-sm text-muted me-2"></i> Logout</a>
                                        </div>
                                    </li>
                                    <!--user logout-->

                                </ul>
                                <!--notify & userlogout-->
                            </nav>
                        </div>
                    </div>
                    <!--End Top Sidebar-->

                    </div>

                </div>
            </div>
        </nav>
    </div>
    
   
    <!--End Left Navbar-->

    <!--Start Content Area-->

    <!--End Content Area-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-9 ms-auto">
                    <!--Start Shortcut Area-->
                    <div class="row pt-md-5 mt-md-3">

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="card shadow py-2 border-left-primarys">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h5 class="text-xs fw-bold text-primary text-uppercase">Sales (Monthly)</h5>
                                        <p class="h5 text-muted mb-0">$ 50,000</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="card shadow py-2 border-left-successes">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h5 class="text-xs fw-bold text-primary text-uppercase">Rental (Monthly)</h5>
                                        <p class="h5 text-muted mb-0">$ 50,000</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="card shadow py-2 border-left-infos">
                                <div class="card-body">
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                             <h5 class='text-xs fw-bold text-primary text-uppercase mb-1'>Debt Collect</h5>
                                             <div class='row'>
                                                 <div class='col-auto'>
                                                     <p class='h5 text-muted mb-0'>60%</p>
                                                 </div>
                                                 <div class='col'>
                                                     <div class='progress progress-sm'>
                                                         <div class='progress-bar bg-info' style='width:60%' aria-valuenow="60" aria-valuemin="0" aria-valuemax='100'></div>
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

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="card shadow py-2 border-left-warnings">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h5 class="text-xs fw-bold text-primary text-uppercase">Request Message</h5>
                                        <p class="h5 text-muted mb-0">25</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End Shortcut Area-->

    <!--Start Expenses Area-->
    <div class="row">
        <div class="col-md-7 mb-3">
            <div class="card shadow">
                <div class="card-header py-2">
                    <h5 class="text-primary">Expenses</h5>
                </div>
                <div class="card-body">
                    <h4 class="small">Other Expenses <span>20%</span></h4>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-danger" style="width:20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small">Sales Tracking <span>40%</span></h4>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" style="width:40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small">Rental Fee <span>60%</span></h4>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-warning" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small">Salary <span>80%</span></h4>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-info" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small">Fixture <span>100%</span></h4>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <div class="card">
                <div class="card-header py-2">
                    <h6 class="text-prmary">Revenue Sources</h6>
                    
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <canvas id="mypiechart"></canvas>
                    </div>
                    <div class="small text-center mt-2">
                        <span><i class="fas fa-circle text-warning"></i> Return Item</span>
                        <span class="mx-2"><i class="fas fa-circle text-primary"></i> Direct Sales</span>
                        <span><i class="fas fa-circle text-danger"></i> Online Sales</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Expenses Area-->

    <!--Start Earning Area-->
    <div class="row">
        <div class="col-lg-8 mb-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-2">
                    <h6>Earning Overview</h6>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v fa-sm"></i></a>

                        <div class="dropdown-menu shadow">
                            <div class="dropdown-header">Quick Action</div>
                            <a href="javascrip:void(0);" class="dropdown-item">Action</a>
                            <a href="javascrip:void(0);" class="dropdown-item">Edit</a>
                            <div class="dropdown-divider"></div>
                            <a href="javascrip:void(0);" class="dropdown-item">View Report</a>
                        </div>

                    </div>
                </div>

                <div class="body">
                    <div id="curve_chart" style=" height: 300px"></div>
                </div>
                </div>

        </div>
            
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Reginal Team</h5>

                    <div class="d-flex align-item-center border-bottom py-2">
                        <img src="./assets/img/users/user1.jpg" class="rounded-circle" width="40" height="40" alt="user1" />
                        <div>
                            <h6 class="mb-1 ms-1">Ms. July</h6>
                            <small class="text-muted mb-0 ms-1"><i class="fas fa-map-marker-alt"></i> Mandalay City , Myanmar</small>
                            <div class="badge bg-success p-1 ms-auto">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-item-center border-bottom py-2">
                        <img src="./assets/img/users/user2.jpg" class="rounded-circle" width="40" height="40" alt="user2" />
                        <div>
                            <h6 class="mb-1 ms-1">Mr. Antom</h6>
                            <small class="text-muted ms-1"><i class="fas fa-map-marker-alt"></i> Yangon City , Myanmar</small>
                            <div class="badge bg-success p-1 ms-auto">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-item-center border-bottom py-2">
                        <img src="./assets/img/users/user3.jpg" class="rounded-circle" width="40" height="40" alt="user3" />
                        <div>
                            <h6 class="mb-1 ms-1">Ms. Yon</h6>
                            <small class="text-muted ms-1"><i class="fas fa-map-marker-alt"></i> Bago City , Myanmar</small>
                            <div class="badge bg-success p-1 ms-auto">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Earning Area-->

    <!--Start Result Area-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="card-body">
                            <div clsss="d-flex justify-content-center align-items-center">
                                <i class="fas fa-users fa-2x text-primary me-4"></i>
                                <div class="text-center">
                                    <p class="text-dark mb-0">Users</p>
                                    <h5 class="fw-bold text-dark mb-0">56,320</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="card-body">
                            <div clsss="d-flex justify-content-center align-items-center bg-primary">
                                <i class="fas fa-check-circle fa-2x text-primary me-4"></i>
                                <div class="text-center">
                                    <p class="text-dark mb-0">Feedback</p>
                                    <h5 class="fw-bold text-dark mb-0">56,320</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="card-body">
                            <div clsss="d-flex justify-content-center align-items-center bg-primary">
                                <i class="fas fa-trophy fa-2x text-primary me-4"></i>
                                <div class="text-center">
                                    <p class="text-dark mb-0">Employees</p>
                                    <h5 class="fw-bold text-dark mb-0">16,00</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="card-body">
                            <div clsss="d-flex justify-content-center align-items-center bg-primary">
                                <i class="fas fa-star fa-2x text-primary me-4"></i>
                                <div class="text-center">
                                    <p class="text-dark mb-0">sales</p>
                                    <h5 class="fw-bold text-dark mb-0">12,860</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Result Area-->

    <!--Start Project Status Area-->
    <div class="row">
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <h5 class="card-title">Sale Analysis Trend</h5>
                    </div>

                    <div id="salecontainer">

                    </div>

                    <!-- <div class="mt-2">
                        <div class="d-flex justify-content-between">
                            <small>Order Value</small>
                            <small>120.8%</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div class="d-flex justify-content-between">
                            <small>Total Products</small>
                            <small>325.2%</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div class="d-flex justify-content-between">
                            <small>Quantity</small>
                            <small>25.60%</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h5>Project Status</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="./assets/img/clients/client1.png" class="img-sm rounded-circle" width="100" alt="client1" />
                                            <div>
                                                <div>Company</div>
                                                <div class="fw-bold mt-1">Sony Eelectronic</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        Sales
                                        <div class="fw-bold mt-1">$3250</div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="fw-bold mt-1">88%</div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="fw-bold mt-1">10 June 2023</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="./assets/img/clients/client2.png" class="img-sm rounded-circle" width="100" alt="client2" />
                                            <div>
                                                <div>Company</div>
                                                <div class="fw-bold mt-1">Mi Eelectronic</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        Sales
                                        <div class="fw-bold mt-1">$3250</div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="fw-bold mt-1">78%</div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="fw-bold mt-1">10 June 2023</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="./assets/img/clients/client3.png" class="img-sm rounded-circle" width="100" alt="client3" />
                                            <div>
                                                <div>Company</div>
                                                <div class="fw-bold mt-1">Sony Eelectronic</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        Sales
                                        <div class="fw-bold mt-1">$3250</div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="fw-bold mt-1">38%</div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="fw-bold mt-1">10 June 2023</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="./assets/img/clients/client4.png" class="img-sm rounded-circle" width="100" alt="client4" />
                                            <div>
                                                <div>Company</div>
                                                <div class="fw-bold mt-1">Sony Eelectronic</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        Sales
                                        <div class="fw-bold mt-1">$3250</div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="fw-bold mt-1">88%</div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="fw-bold mt-1">10 June 2023</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Project Status Area-->

    <!--Start Todo list Area-->
    <div class="row mt-3">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Todo List</h4>
                        <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="dropdown-toggle"><i class="fas fa-ellipsis-v fa-sm"></i></a>
                            <div class="dropdown-menu shadow">
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <a href="javascript:void(0);" class="dropdown-item">Something</a>
                                <a href="javascript:void(0);" class="dropdown-item">Another Action</a>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Add List here..." />
                        <button type="submit" class="btn btn-primary btn-sm form-group-text">Add to List</button>
                    </div>

                    <div>
                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between">
                                <label>
                                    <input type="checkbox" class="checkbox" /><span class="ms-2">when an unknown printer took a galley of type </span>
                                </label>
                                <i class="fas fa-trash-alt text-muted"></i>
                            </li>

                            <li class="d-flex justify-content-between">
                                <label>
                                    <input type="checkbox" class="checkbox" /><span class="ms-2">when an unknown printer took a galley of type </span>
                                </label>
                                <i class="fas fa-trash-alt text-muted"></i>
                            </li>

                            <li class="d-flex justify-content-between">
                                <label>
                                    <input type="checkbox" class="checkbox" /><span class="ms-2">when an unknown printer took a galley of type </span>
                                </label>
                                <i class="fas fa-trash-alt text-muted"></i>
                            </li>

                            <li class="d-flex justify-content-between">
                                <label>
                                    <input type="checkbox" class="checkbox" /><span class="ms-2">when an unknown printer took a galley of type </span>
                                </label>
                                <i class="fas fa-trash-alt text-muted"></i>
                            </li>

                            <li class="d-flex justify-content-between">
                                <label>
                                    <input type="checkbox" class="checkbox" /><span class="ms-2">when an unknown printer took a galley of type </span>
                                </label>
                                <i class="fas fa-trash-alt text-muted"></i>
                            </li>

                            <li class="d-flex justify-content-between">
                                <label>
                                    <input type="checkbox" class="checkbox" /><span class="ms-2">when an unknown printer took a galley of type </span>
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
                    <h5 class="mt-0 text-primary">Illustrations</h5>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="./assets/img/etc/studentgroup.png" class="studentgroup" style="width:150px" alt="">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    <a href="javascript:void(0);">Brower Illustrations on more</a>
                </div>
            </div>
        </div>

        <div>

        </div>
    </div>
    <!--End Ttodo list Area-->

                </div>
            </div>
        </div>
    </section>

   





    <!--Start Footer Section-->

    <!--End Footer Section-->


        <!--bootstrap js 1 version 5.3.0-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <!--jquery js 1-->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" type="text/javascript"></script>

        <!--Chart js-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


        <!--custom js-->
        <script src="./js/app.js" type="text/javascript"></script>
    </body>
</html>




@include('layouts.adminfooter')

<!-- 12GT -->
<!-- 1ST -->
