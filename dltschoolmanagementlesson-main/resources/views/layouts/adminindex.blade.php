@include('layouts.adminheader')

<div>


	<!-- Start Site Setting -->
	<div id="sitesettings" class="sitesettings">
		<div class="sitesettings-item"><a href="javascript:void(0);" id="sitetoggle" class="sitetoggle"><i class="fas fa-cog ani-rotates"></i></a></div>
	</div>
	<!-- End Site Setting -->

    <!-- Start Left Side Bar  -->
@include('layouts.adminleftsidebar')
    <!-- End Left Side Bar  -->

    <!-- Start Content Area -->
    <section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-md-9 pt-md-5 mt-md-3 ms-auto">
                    <!-- Start Inner Content Area  -->
                    <div class="row">
                        {{-- <h6>@yield('caption')</h6> --}}
                        {{-- <h6>{{ucfirst(\Request::path())}}</h6> --}}

                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{\Request::root()}}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{url()->previous()}}">{{\Str::title(preg_replace('/[[:punct:]]+[[:alnum:]]+/','',str_replace(\Request::root().'/','',url()->previous())))}}</a></li>
                                <li class="breadcrumb-item active">{{ucfirst(\Request::path())}}</li>
                            </ol>
                        </nav>


                     

                        



            

                        @yield('content')
                    </div>
                    <!-- End Inner Content Area  -->
                </div>
			</div>
		</div>
	</section>
    <!-- End Content Area -->





</div>




	


@include('layouts.adminfooter')



            {{--    <p>{{\Request::root()}}</p>                 http://localhost:8000   --}}
            {{--    <p>{{\Request::fullUrl()}}</p>              http://localhost:8000/edulinks?filter=6&search=9  --}}
            {{--    <p>{{\Request::url()}}</p>                  http://localhost:8000/posts/1/edit     not inc behind the ?... --}}
            {{--    <p>{{\Request::getRequestUri()}}</p>       /edulinks?filter=6&search=9   inc all request uri and query the address behind domain/host name --}}
            {{--    <p>{{\Request::getPathInfo()}}</p>         /posts/1/edit    inc all request uri the address behind domain/host name but query not inc--}}
            {{--    <p>{{\Request::path()}}</p>                 posts/1/edit    inc all request uri the address behind domain/host name but query not inc --}}


            {{--    <p>{{request()->root()}}</p>                http://localhost:8000    --}}
            {{--    <p>{{request()->fullUrl()}}</p>             http://localhost:8000/edulinks?filter=6&search=9  --}}
            {{--    <p>{{request()->url()}}</p>                 http://localhost:8000/posts/1/edit     not inc behind the ?... --}}
            {{--    <p>{{request()->getRequestUri()}}</p>       /edulinks?filter=6&search=9   inc all request uri and query the address behind domain/host name --}}
            {{--    <p>{{request()->getPathInfo()}}</p>         /posts/1/edit    inc all request uri the address behind domain/host name but query not inc--}}
            {{--    <p>{{request()->path()}}</p>                posts/1/edit    inc all request uri the address behind domain/host name but query not inc --}}

            {{--    <p>{{url()->full()}}</p>                    http://localhost:8000/edulinks?filter=6&search=9  --}}
            {{--    <p>{{url()->current()}}</p>                 http://localhost:8000/posts/1/edit     not inc behind the ?... --}}
            {{--    <p>{{url()->previous()}}</p>                recent links  --}}

