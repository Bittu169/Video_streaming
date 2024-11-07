<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #357970;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{asset('movie_img/logo.jpg')}}" style="width: 50px; border-radius:50%;margin-right:10px;" alt="">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text ">Admin Panel </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin Settings
    </div>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span> Category</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Customize Category:</h6>
                <a class="collapse-item" href="{{route('addcat')}}">Add Category</a>
                <a class="collapse-item" href="{{route('selcat')}}">List Category</a>
            </div>
        </div>
    </li>
    <br>
    <!-- Divider -->
    <hr class="sidebar-divider">
    

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage Movies</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Customize Movies:</h6>
                <a class="collapse-item" href="{{route('addmov')}}">Add Movie</a>
                <a class="collapse-item" href="{{route('selmov')}}">List Movie</a>
            </div>
        </div>
    </li>
    <br>
     <!-- Divider -->
     <hr class="sidebar-divider">
     
     
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage Carousel</span>
        </a>
        <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Customize Carousels:</h6>
                <a class="collapse-item" href="{{route('addcar')}}">Add Details</a>
                <a class="collapse-item" href="{{route('selcar')}}">List Details</a>
            </div>
        </div>
    </li>
    <br>
     <!-- Divider -->
     <hr class="sidebar-divider">
     <br>

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>


</ul>