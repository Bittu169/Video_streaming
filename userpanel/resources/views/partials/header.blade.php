
<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            {{-- <a href="../index.html"><h1>One<span>Movies</span></h1></a> --}}
            <img style="width: 90px; border-radius:70%; border-radius: 2px solid black;" src="{{asset('assets/images/logo.jpg')}}" alt="">
        </div>
        <div class="w3_search" style="border: 1.5px solid #fff; border-radius: 25px;">
            <form action="{{route('search')}}" method="post">
                @csrf
                <input type="text" name="search" placeholder="Search" required="">
                <input type="submit" value="Go" name="save">
            </form>
        </div>
        <div class="w3l_sign_in_register">
            <ul>
                {{-- <li style="color: white;"><i class="fa fa-phone" style="color: white;" aria-hidden="true"></i> (+000) 123 345 653</li> --}}
                <li><a style="background: none;" href="{{route('pro')}}"><img style="width: 40px; border-radius:50%" class="img-profile rounded-circle"
                    src="{{asset('assets/images/male-avatar-profile-picture-vector-10211761.jpg')}}"></a></li>
                <li><form action="{{url('/')}}/logout" method="post">
                    @csrf
                <input type="submit" onclick="return confirm('Are you confirm ?')" value="Logout" class="btn btn-warning">
                </form></li>
               
                {{-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                
            </a> --}}

            </ul>
            <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            
        </div>
        <div class="clearfix"> </div>
    </div>
</div>