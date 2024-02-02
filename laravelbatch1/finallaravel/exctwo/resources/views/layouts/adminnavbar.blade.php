<!-- Start Top Sidebar -->
<div class="col-lg-10 col-md-9 fixed-top ms-auto topnavbars">
    <div class="row">

        <nav class="navbar navbar-expand navbar-light bg-white shadow">

            <!-- search -->
            <form class="me-auto" action="" method="">
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control border-0 shadow-none"
                        placeholder="Search Something..." />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- search -->

            <!-- notify & userlogout-->
            <ul class="navbar-nav me-5 pe-5">
                <!-- notify -->
                <li class="nav-item dropdowns me-3">
                    <a href="javascript:void(0);" class="nav-line  dropbtn" onclick="dropbtn(event)">
                        <i class="fas fa-bell"></i>
                        <span class="badge bg-danger">{{Auth::user()->unreadnotifications->count()}}</span>
                    </a>

                    <div class="dropdown-contents mt-2 mydropdowns">

                        @if($userdata->unreadnotifications->count() > 0)
                          <a href="{{route('leaves.markasread')}}" class="small text-muted text-center">
                            Mark all as read </a>

                            @foreach($userdata->unreadnotifications as $notification)
                            <a href="{{route($notification->type === "App\Notifications\AnnouncementNotify" ? 'announcements.show' : 'leaves.show',$notification->data['id'])}}" class="d-flex">
                                <div class="me-3">
                                   @if($notification->type === "App\Notifications\AnnouncementNotify")
                                   <img src="{{$notification->data['img']}}" width="30" alt="{{$notification->data['id']}}">
                                    @else
                                    <i class="fas fa-bell fa-xs text-primary"></i>
                                    @endif 
                                </div>
                                <div class="small">
                                    <ul class="list-unstyled">
                                        @if($notification->type == "App\Notifications\LeaveNotify")
                                        <li>{{$notification->data['studentid']}}</li>
                                        <li>{{Str::limit($notification->data['title'],20)}}</li>

                                        @else
                                        <li>{{Str::limit($notification->data['title'],20)}}</li>
                                        <li>{{$notification->created_at->format('d M Y h:m:s A')}}</li>
                                        @endif 
                                    </ul>
                                    <i></i>
                                </div>
                            </a>
                            @endforeach
    
                            <a href="javascript:void(0);" class="small text-muted text-center shadow">Show
                                All Notification</a>
                        @else
                            <a href="javascript:void(0);" class="small text-muted text-center shadow">No
                                New Notification</a>
                        @endif

                     
               
                   
                   

                    </div>

                </li>
                {{-- mailgun.com  --}}
                {{-- mailtrap.com  * free  --}}
                {{-- cloudway.com  --}}
                <!-- notify -->



                <!-- userlogout -->
                <li class="navitem dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="text-muted small me-2">{{$userdata['name']}}</span>
                        <img src="./assets/img/users/user1.jpg" class="rounded-circle" width="25" />
                    </a>
                    <div class="dropdown-menu">
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="fas fa-user fa-sm text-muted me-2"></i> Profile</a>
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="fas fa-cogs fa-sm text-muted me-2"></i> Settings</a>
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="fas fa-list fa-sm text-muted me-2"></i> Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <!-- Authentication-->
                        <!-- <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        //   <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit()">Logout</a> 
                          <a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault(); this.parentElement.submit()">Logout</a>
                        </form>  -->

                        <a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutform').submit()">Logout</a>
                         <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form>
                    </div>
                </li>

                <!-- userlogout -->
            </ul>
            <!-- notify & userlogout-->

            <button type="button" class="close-btns" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="fas fa-times"></span>
            </button>

        </nav>

    </div>
</div>
<!-- End Top Sidebar -->