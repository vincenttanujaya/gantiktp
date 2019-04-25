<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Charts</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
                <a class="nav-link" href="#" style="color:#dd6b4d"><b>Cek Status</b><span class="sr-only">(current)</span></a>
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
                      <b>Masukan Data Diri</b>
                  </div>
                <div class="card-body">
                  <form action="/submitform" id="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                      <div class="col">
                        <input class="form-control" name="nama" required placeholder="Masukan Nama">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <input class="form-control" type="number" name="nik" required placeholder="Masukan Nomor Induk Kependudukan" minlength="16" maxlength="16">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <input class="form-control" name="alamat" required placeholder="Masukan Alamat">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <input type="number" class="form-control" name="rt" required placeholder="RT">
                      </div>
                      {{-- <h2 class="h3 mb-2 text-gray-800">/</h2> --}}
                      <div class="col">
                        <input type="number" class="form-control" name="rw" required placeholder="RW">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <input class="form-control" name="kelurahan" required placeholder="Kelurahan">
                      </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                          <small><b>Alasan Pergantian</b></small>
                          <select class="form-control" name="alasan" onchange="inputFunction(this)">
                            <option value="rusak" selected>Rusak</option>
                            <option value="hilang">Hilang</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group">
                        <small for="exampleFormControlFile1"><b>Upload Foto KTP jika KTP Rusak, Upload Surat Kehilangan jika Hilang</b></small>
                        <input type="file" class="form-control-file" id="file" name="file" required>
                    </div>
                    {{-- <div class="row form-group">
                      <div class="col">
                        <small><b>Alasan Pergantian</b></small>
                        <select class="form-control" name="alasan" onchange="inputFunction(this)">
                          <option value="rusak" selected>Rusak</option>
                          <option value="hilang">Hilang</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group" id="hilang">
                      <div class="col-3">
                        <h1 class="h4 mb-2 text-gray-800">Upload Surat Kehilangan</h1>
                      </div>
                      <div class="col">
                      </div>
                    </div>
                    <div class="row form-group" id="rusak">
                      <div class="col-3">
                        <h1 class="h4 mb-2 text-gray-800">Upload Foto KTP Rusak</h1>
                      </div>
                      <div class="col">
                      </div>
                    </div> --}}
                    <hr>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
                  </form>
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

  <script type="text/javascript">
    $(document).ready(function() {
      $('#rusak').show();
      $('#hilang').hide();
    });
    function inputFunction(element) {
      if (element.value == 'rusak') {
        $('#rusak').show();
        $('#hilang').hide();
      }
      else {
        $('#rusak').hide();
        $('#hilang').show();
      }
    }
  </script>

</body>

</html>
