    <!-- leftbar-tab-menu -->
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <span>
                    <img src="{{ asset('website/logo.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ asset('website/logo1.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ asset('website/logo1.png') }}" alt="logo-large" class="logo-lg logo-dark">
                </span>

            </a>
        </div>
        <!--end brand-->
        <!--start startbar-menu-->
        <div class="startbar-menu" >
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label mt-2">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <iconify-icon icon="solar:monitor-bold-duotone" class="menu-icon"></iconify-icon> 
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.gallery.index') }}">
                                <iconify-icon icon="solar:monitor-bold-duotone" class="menu-icon"></iconify-icon> 
                                <span>Gallery</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.contact_messages.index') }}">
                                <iconify-icon icon="solar:monitor-bold-duotone" class="menu-icon"></iconify-icon> 
                                <span>Contact Data</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.banners.index') }}">
                                <iconify-icon icon="solar:monitor-bold-duotone" class="menu-icon"></iconify-icon> 
                                <span>Slider</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.members.index') }}">
                                <iconify-icon icon="solar:monitor-bold-duotone" class="menu-icon"></iconify-icon> 
                                <span>Member</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.change_password_form') }}">
                                <iconify-icon icon="solar:bill-list-bold-duotone" class="menu-icon"></iconify-icon> 
                                <span>Change Password</span>
                            </a>
                        </li>
                   
                    </ul><!--end navbar-nav--->
                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->    
    </div><!--end startbar-->
    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->

    

    <!-- dashboard -->
         <div class="page-title-box">
        <div class="container-fluid">
            <div class="row gap-0">
                <div class="col-sm-12">
                    <div class="page-title-content d-sm-flex justify-content-sm-between align-items-center">
                        <h4 class="page-title mt-3 mt-md-0">Project</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Materialy</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>                            
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>



    <div class="page-wrapper">
