<?php 

include '../koneksi.php';

echo '<script>
        var url = window.location.href;
        url = url.replace(/[?&]pesan=ya/g, "");
        window.history.replaceState({}, document.title, url);
      </script>

';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin TPQ | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php 

  session_start();


  //cek login
  if ($_SESSION['status']!="login") {
    echo "<script>alert('Gagal Login, Ini Bukan Tempat Anda!'); window.location.href = '../index.php?pesan=ya';</script>";
  }


   ?>
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">



        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>

        <!-- Exit Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> Profil
            </a>
            <a href="#" class="dropdown-item">
              <i class="fas fa-sign mr-2"></i> Exit
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../daftar-santri/daftar_santri.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin TPQ</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

           

          <li class="nav-item">
            <a href="../daftar-santri/daftar_santri.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Daftar Santri
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../absensi/absen.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Absensi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../daftar-nilai/form_nilai.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Form Nilai
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="log.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Log
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="../pengumuman/pengumuman.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman Log Nilai Santri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Log Nilai Santri</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-right: 20px;">
                  <a href="cetak_log.php" target="_blank" class="btn btn-warning" type="button"><i class="fas fa-columns"></i>&nbsp Print Data</a>
                  <a href="reset_log.php" target="_blank" class="btn btn-danger" onclick="return confirm('Reset Data?');" type="button"><i class="fas fa-trash"></i>&nbsp Reset</a></h3>
                </h3>

                <form action="log.php" method="get">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="cari" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
<?php 
if (isset($_GET['cari'])){
  $cari=$_GET['cari'];
}






 ?>

              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Tahfidz</th>
                      <th>Aqidah</th>
                      <th>Fiqih</th>
                      <th>Tajwid</th>
                      <th>Mahfudlot</th>
                      <th>Persholatan</th>
                      <th>Imla'/Khot</th>
                      <th>Semester</th>
                      <th>Tahun</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php 
if (isset($_GET['cari'])){
$cari=$_GET['cari'];
$c=mysqli_query($koneksi,"SELECT * FROM log JOIN santri ON log.nis = santri.nis where nama_santri like '%$cari%' OR semester like '%$cari%' OR tahun like '%$cari%' OR nis like '%$cari%' ");

}else{
  $c=mysqli_query($koneksi,"SELECT * FROM log JOIN santri ON log.nis = santri.nis ORDER BY tahun DESC");
}

 ?>


 <?php 
$no=1;
while($d =mysqli_fetch_array($c)){


  ?>

  
                  <tbody>
                    <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nis']; ?></td>
    <td><?php echo $d['nama_santri']; ?></td>
    <td><?php echo $d['tahfidz']; ?></td>
    <td><?php echo $d['aqidah']; ?></td>
    <td><?php echo $d['fiqih']; ?></td>
    <td><?php echo $d['tajwid']; ?></td>
    <td><?php echo $d['mahfudlot']; ?></td>
    <td><?php echo $d['persholatan']; ?></td>
    <td><?php echo $d['imla']; ?></td>
    <td><?php echo $d['semester']; ?></td>
    <td><?php echo $d['tahun']; ?></td>
    <td>
        <a class="btn btn-block btn-danger" href="hapus_log.php?id_nilai=<?php echo $d['id_nilai']; ?>" onclick="return confirm('Hapus Data?');" ><i class="fas fa-trash"></i></a>         
    </td>

  </tr>


                  </tbody>
                  <?php }  ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

  </div>


  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
  <?php include '../footer.html'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
