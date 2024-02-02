<!--Start Left Navbar-->

<div class="wrappers">
    <nav class="navbar navbar-expand-md navbar-light">

        <button type="button" class="navbar-toggler ms-auto mb-2" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="nav" class="navbar-collapse collapse">
            <div class="container-fluid">
                <div class="row">

                    <!-- Start Left Sidebar -->
                    <div class="col-lg-2 col-md-3 fixed-top vh-100 overflow-auto sidebars">
                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item nav-categories ">Main</li>
                            <li class="nav-item nav-categories"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks"><i
                                        class="fas fa-tachometer-alt fa-lg me-3"></i>Dashboard</a></li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks currents"
                                    data-bs-target="#pagelayout" data-bs-toggle="collapse"><i
                                        class="fas fa-cloud-download-alt fa-md me-3"></i>Download<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="pagelayout" class="collapse ps-2">
                                    <li><a href="{{route('edulinks.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Education</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Software</a></li>
                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks"
                                    data-bs-target="#sidebarlayout" data-bs-toggle="collapse"><i
                                        class="fas fa-file-alt fa-lg me-3"></i>Form<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="sidebarlayout" class="collapse ps-2">
                                    
                                    <li><a href="{{route('attendances.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Att Form</a></li>
                                                <li><a href="{{route('enrolls.index')}}" class="nav-link text-white sidebarlinks"><i
                                                    class="fas fa-long-arrow-alt-right me-4"></i>Enrolls</a></li>
                                                <li><a href="{{route('leaves.index')}}" class="nav-link text-white sidebarlinks"><i
                                                        class="fas fa-long-arrow-alt-right me-4"></i>Leave Form</a></li>
    
                                </ul>

                            </li>

                            <li class="nav-item nav-categories">Widgets</li>

                            <li class="nav-item nav-categories">UI Features</li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#basicui"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Articles<i class="fas fa-angle-left mores"></i></a>

                                <ul id="basicui" class="collapse ps-2">
                                    <li><a href="{{route('posts.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Post</a></li>
                                    <li><a href="{{route('announcements.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Announcement</a></li>
                                

                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#advanceui"
                                    data-bs-toggle="collapse"><i class="fas fa-users fa-lg me-3"></i>student<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="advanceui" class="collapse ps-2">
                                    <li><a href="{{route('students.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>All Student</a></li>
                                    

                                </ul>

                            </li>

                            <li class="nav-item nav-categories">Popus</li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#iconselement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Apps<i
                                        class="fas fa-share-alt-square mores"></i></a>

                                <ul id="iconselement" class="collapse ps-2">
                                    <li><a href="{{route('contacts.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Contacts</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Todo</a></li>
                                  

                                </ul>

                            </li>

                            <li class="nav-item nav-categories">Editors</li>

                            <li class="nav-item nav-categories">Text Editors</li>

                            <li class="nav-item nav-categories">Code Editors</li>

                            <li class="nav-item nav-categories">Data Representation</li>

                            

                            <li class="nav-item"><a href="javascript:void(0);"
                                class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#fixedanalysis"
                                data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Fixed Analysis<i
                                    class="fas fa-angle-left mores"></i></a>

                                    <ul id="fixedanalysis" class="collapse ps-2">
                                        {{-- <li class="nav-item"><a href="{{route('stages.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Stage</a>
                                        </li> --}}
                                        
                                        <li class="nav-item"><a href="{{route('statuses.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>status</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('cities.index')}}"
                                            class="nav-link text-white  sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>city</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('countries.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>country</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('genders.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>gender</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('categories.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>categories</a>
                                        </li>

                                        <li class="nav-item"><a href="{{route('roles.index')}}"
                                            class="nav-link text-white p-3 mb-2 sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>role</a>
                                        </li>

                                        <li class="nav-item"><a href="{{route('types.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Type</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('tags.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Tag</a>
                                        </li> 
                                        
                                        <li class="nav-item"><a href="{{route('days.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Day</a>
                                        </li> 
    
                                    </ul>
                            </li>

                               

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#chartelement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Addon<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="chartelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Pie Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Map Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Line Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Chart Js</a></li>

                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#chartelement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Charts<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="chartelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Pie Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Map Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Line Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Chart Js</a></li>

                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#tableelement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Tables<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="tableelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Basic Table</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Data Table</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Sortable table</a></li>
                                    <li><a href="" class="nav-link text-white sidebarlinks"><i
                                                    class="fas fa-long-arrow-alt-right me-4"></i>Sortable table</a></li>
                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#mapelement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Maps<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="mapelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Google Map</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Vector Map</a></li>
                                </ul>

                            </li>

                        </ul>
                    </div>
                    <!-- End Left Sidebar -->
                    {{-- start top sidebar  --}}
                    @include('layouts.adminnavbar')
                    {{-- end top sidebar  --}}
                </div>

            </div>
        </div>

    </nav>
</div>

<!--End Left Navbar-->