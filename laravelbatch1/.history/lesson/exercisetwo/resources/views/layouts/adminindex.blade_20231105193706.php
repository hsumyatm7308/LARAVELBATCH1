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


