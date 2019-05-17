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

              <div class="alert alert-danger alert-dismissible fade show" style="display:none;" role="alert" id="fail">
                <strong>Data anda tidak ditemukan!</strong> NIK anda salah atau tidak terdaftar di kecamatan ini. Jika anda mengajukan dengan alasan pindah, klik tombol dibawah ini.
                <a href="{{ url('/form2')}}"><button class="btn btn-primary">Pindah</button></a>
              </div>

              <div class="alert alert-danger alert-dismissible fade show" style="display:none;" role="alert" id="over">
                <strong>Periksa lagi NIK anda!</strong> NIK anda lebih dari 16 digit angka.
              </div>

              <div class="alert alert-success alert-dismissible fade show" style="display:none;" role="alert" id="success">
                <strong>Data anda ditemukan!</strong> 
              </div>

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                  <div class="card-header text-center" style="background-color:white;color:black">
                      <b>Masukan 16-digit NIK</b>
                  </div>
                <div class="card-body">
                  <form action="/form" id="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                      <div class="col">
                        <input class="form-control" type="number" name="nik" id="nik" required placeholder="Masukan Nomor Induk Kependudukan" minlength="16" maxlength="16">
                        <small>Pastikan NIK anda terdiri dari 16 digit dan sesuai dengan KTP/KK anda.</small>
                      </div>
                    </div>
                    <div class="form-group">
                        Baca panduan terkait pergantian KTP <a href="{{ url('/panduan')}}">di sini</a>.
                    </div>
                    <hr>
                    <div class="row form-group" style="display:none;">
                      <div class="col">
                        <input class="form-control" name="result" id="result">
                      </div>
                    </div>
                    <div class="row form-group" id="submit" style="display:none;">
                      <div class="col">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ajukan Pergantian KTP</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer pt-1 pb-1" style="background-color:#1c4b82; bottom: 0; left: 0; position: fixed; width: 100%;">
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

  <script type="text/javascript">
  function changeFunction($data)
    {
      if($data == 'found')
      {
        $('#fail').hide();
        $('#success').show();
        $('#submit').show();
        $('#over').hide();
      }
      else if($data == 'hideall')
      {
        $('#fail').hide();
        $('#success').hide();
        $('#submit').hide();
        $('#over').hide();
      }
      else if($data == 'over')
      {
        $('#fail').hide();
        $('#success').hide();
        $('#submit').hide();
        $('#over').show();
      }
      else
      {
        $('#fail').show();
        $('#success').hide();
        $('#submit').hide();
        $('#over').hide();
      }
    }

  $(document).ready(function(){
        $('#nik').keyup(function(){
          var maxLength = $(this).attr("maxlength");
          if(maxLength == $(this).val().length)
          {
            var id=$(this).val();
            $.ajax({
                url : "/cekNik",
                method : "GET",
                data : {nik: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    $('#result').val(data);
                    changeFunction(data);
                }
            });
          }
          else if($(this).val().length > maxLength)
          {
            changeFunction('over');
          }
          else
          {
            changeFunction('hideall');
          }
        });
    });
  </script>
  
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>

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
