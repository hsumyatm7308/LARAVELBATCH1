

			

	

@include('layouts.adminheader')



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
	<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-9 pt-md-5 mt-md-3 ms-auto">
                <div class="row">
					<h5> @yield('caption') </h5>
				  @yield('content')
 
                  </div>

	        </div>
        </div>
    </div>
</section>
    <!--End Content Area-->
  

   


























    


@include('layouts.adminfooter')

<!-- 12GT -->
<!-- 1ST -->
