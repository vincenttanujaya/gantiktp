<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pengajuan Pergantian KTP</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" style="background-color:#1c4b82">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

    <!-- Sidebar - Brand -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="background-color:#1c4b82">
        
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#1c4b82;" >
          <a class="navbar-brand" href="#" style="color:white">Form Pengajuan Pergantian KTP</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="/status" style="color:#dd6b4d"><b>Cek Status</b><span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <a href="/login" tabindex="-1" aria-disabled="true" style="color:white"><b>LOGIN</b></a>
              
            {{-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
          </div>
        </nav>

        <br>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-6 col-lg-7" style="width:800px; margin:0 auto;">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                  <div class="card-header text-center" style="background-color:white;color:black">
                      <b>Cek Status Pengajuan Pergantian KTP</b>
                  </div>
                <div class="card-body">
                <form action="/statusktp" id="form" method="post">
                  @csrf
                    <input class="form-control" name="nik" required placeholder="Masukan NIK">
                    <small>Masukan NIK sesuai dengan KTP yang diajukan untuk diganti.</small>
                  <hr>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
                </form>
                <br>
                @if ($status===3)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="fail">
                      <strong>Data pengajuan tidak ditemukan.</strong> Periksa kembali NIK anda.
                    </div>
                @elseif ($status == 1)
                @else
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
                      <strong>Data anda ditemukan! Status pengajuan pergantian KTP anda : {{$status}}</strong> 
                    </div>
                @endif
                </div>
              </div>
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer" style="background-color:#1c4b82">
        <div class="container my-auto" >
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ITS Surabaya</span>
          </div>
        </div>
      </footer>
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


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
</body>

</html>
