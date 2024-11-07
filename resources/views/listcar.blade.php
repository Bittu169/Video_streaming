<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
   
    

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials.slidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background: #e8ffb6;  ">

                <!-- Topbar -->
                @include('partials.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                {{-- <div class="container-fluid col-md-9"> --}}

                    <div style="padding: 10px; margin: auto;">
                        <h2  style="text-align: center; color:black; justify-content:center; display:flex; border: 2px solid black;">Carousel Details</h2>
                        <br>            
                        <table class="table" style="border: 2px solid black;">
                          <thead>
                            <tr style="text-align: center; color:black;">
                              <th> Id</th>
                              <th> Name</th>
                              <th>Type</th>
                              <th>Description</th>
                              <th>Link</th>
                              <th>Image</th>
                              <th>Operations</th>
                    
                            </tr>
                          </thead>
                          @foreach($std as $s)
                          <tr style="text-align: center; color:black;">
                           <td>{{$s->id}}</td>
                           <td>{{$s->name}}</td>
                           <td>{{$s->mtype}}</td>
                           <td>{{$s->description}}</td>
                           <td>{{$s->mlink}}</td>
                           <td><img style="width: 100px;" src="{{url('assets.car_img')}}/{{$s->image}}" alt=""></td>
                           <td><a onclick="return confirm('Are you sure');" class="btn btn-danger" href="{{url('/delcar')}}/{{$s->id}}">Delete</a><br><br>
                            <a onclick="return confirm('Are you sure');" class="btn btn-success" href="{{url('/edc')}}/{{$s->id}}">Edit</a></td>
                         </tr>
                         @endforeach
                          <tbody>
                            <tr>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                      
                      
                    
                {{-- </div> --}}
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           @include('partials.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('partials.logout_modal');

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2-min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>