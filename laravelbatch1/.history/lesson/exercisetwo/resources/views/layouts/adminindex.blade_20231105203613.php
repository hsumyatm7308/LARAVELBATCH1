
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

    <!-- Start Left Navbar  -->
    @include('layouts.adminleftsidebar')

    <!-- End Left Navbar  -->
   
    <!--Start Content Area-->

    @yield('content')

    <!--End Content Area-->
  

   





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
