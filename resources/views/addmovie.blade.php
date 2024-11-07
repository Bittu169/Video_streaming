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
            <div id="content" style="background: #53c4b5;">

                <!-- Topbar -->
                @include('partials.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid col-md-9" style="padding: 10px; margin: auto;">

                    <form action="{{route('insertm')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <br><br>
                        <h1 style="color:black; display:flex; align-items:center; justify-content:center;">Fill Movie Details</h1><hr>
                        <h3 style="color:black;">Movie Name</h3>
                         <input type="text" name="mname" class="form-control" placeholder="Enter movie name...." required><br>
                        <h3 style="color:black;">Category</h3>
                        <select class="form-control" name="mtype" id="">
                            <option  value="">-Select-</option>
                            @foreach ($ed as $s)
                            <option  value="{{$s->name}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                         <br>
                         <h3 style="color:black;">Decription</h3>
                         <textarea class="form-control" name="description" id="" cols="20" rows="10" placeholder="Enter description here..."></textarea><br>
                          <h3 style="color: black;">Image</h3>
                          <input type="file" name="img" class="form-control">
                         <h3 style="color:black;">Movie Link</h3>
                          <input type="text" class="form-control" name="mlink" placeholder="Enter movie link...." required> <br>
                          <h3 style="color:black;">Price</h3>
                          <input type="number" class="form-control" name="mprice" required>
                         
                         <hr>
                
                        <p><input type="submit" onclick="return alert('Movie Added successfully')" class="btn btn-primary" name="save" value="Add Movie" ></p>
                    </form>
                    
                </div>
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