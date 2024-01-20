@include('layouts.adminheader')

<div>
    <!--Start Site Setting-->
    <div id="sitesettings" class="sitesettings">
        <div class="sitesettings-item"><a href="javascript:void(0);" id="sitetoggle" class="sitetoggle"><i class="fas fa-cog ani-rotates"></i></a>
        </div>

    </div>
    <!--End Site Setting-->

<!--Start Left Side Bar -->
@include('layouts.adminleftsidebar')
<!--End Left Side Bar -->

<!--Start Content Area-->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-9 pt-md-5 mt-md-3 ms-auto">
                <!--Start Inner Content Area-->
                <div class="row">
                    <h5>{{ucfirst(Request::path())}}</h5>

                  {{-- <p>  {{Request::root()}} </p>  http://127.0.0.1:8000--}}
                  {{--<p>  {{Request::fullUrl()}} </p>  {{--http://127.0.0.1:8000/countries?filter=&search=--}}
                  {{--<p>  {{Request::url()}} </p>  {{--http://127.0.0.1:8000/countries/edit/1   not include behind the ? --}}
                  {{--<p>  {{Request::getRequestUri()}} </p>  {{--countries?filter=&search=   include all request uri and query the address behind domain/host name--}}
                  {{--<p>  {{Request::getpathInfo()}} </p>  {{--/countries/3/edit  include all request uri the address behind domain/host  name  but query not inc--}}
                  {{--<p>  {{Request::path()}} </p>  {{--countries/3/edit  include all request uri the address behind domain/host name but query  not include--}}
                  {{--<p>  {{Request::path()}} </p>  {{--countries/3/edit--}}

                  {{--<p>  {{request()->root()}} </p>  {{--http://127.0.0.1:8000--}}
                  {{--<p>  {{request()->fullUrl()}} </p>  {{--http://127.0.0.1:8000/countries?filter=&search=--}}
                  {{--<p>  {{request()->url()}} </p>  {{--http://127.0.0.1:8000/countries/edit/1   not include behind the ? --}}
                  {{--<p>  {{request()->getRequestUri()}} </p>  {{--countries?filter=&search=   include all request uri and query the address behind domain/host name--}}
                  {{--<p>  {{request()->getpathInfo()}} </p>  {{--/countries/3/edit  include all request uri the address behind domain/host  name  but query not inc--}}
                  {{--<p>  {{request()->path()}} </p>  {{--countries/3/edit  include all request uri the address behind domain/host name but query  not include--}}
                  {{--<p>  {{request()->path()}} </p>  {{--countries/3/edit--}}


                 {{-- <p>  {{url()->full()}} </p>  {{--http://127.0.0.1:8000/countries?filter=&search=--}}
                  {{--<p>  {{url()->current()}} </p>  {{--http://127.0.0.1:8000/countries   not include query ? --}}
                 {{-- <p>  {{url()->perivious()}} </p>  recent linkns   => I can use this for recent history --}}


                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{Request::root()}} "><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url()->previous()}}"> {{ preg_replace('/[[:punct:]]+[[:digit:]]+/', '', str_replace(Request::root().'/','',url()->previous())) }}</a></li>
                            <li class="breadcrumb-item active">{{request()->path()}} </li>

                        </ol>
                    </nav>


                    {{-- {{str_replace(Request::root().'/','',url()->previous())}}  students/1/edit --}}

                    {{-- {{ preg_replace('/[[:punct:]]+[[:digit:]]+/', '', str_replace(Request::root().'/','',url()->previous())) }} --}}


                    @yield('content')
                </div>
                <!--End Inner Content Area-->
            </div>
        </div> 
    </div>
</section>
<!--End Content Area-->

</div>

	
	

@include('layouts.adminfooter')