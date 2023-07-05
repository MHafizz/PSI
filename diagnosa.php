<?php
require 'functionnbc.php';
include 'koneksi.php';    
$query ="SELECT DATEDIFF(kadaluarsa, CURRENT_DATE()) AS selisih_hari, Nama_Obat, kode_produksi, produsen, Stok, Harga_Satuan,penyimpanan 
FROM obat WHERE kadaluarsa <= DATE_ADD(CURRENT_DATE(), INTERVAL 7 DAY);;";
$kadaluarsa = mysqli_query($koneksi, $query);
                                  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard DIRECTION</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Custom styles for this Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">DIRECTION</div>
        </a>

        <!-- Divider -->
        <hr class="text-white" />

        <li class="nav-item">
          <a class="nav-link" href="Paymentss.php">
          <i class="fas fa-fw fa-cash-register"></i>
            <span>Kasir</span>
          </a>
        </li>

        <!-- Menu Obat -->
        <li class="nav-item">
          <a class="nav-link" href="obatKaryawan.php">
            <i class="fas fa-fw fa-pills"></i>
            <span>Obat</span>
          </a>
        </li>

        <!-- Menu Expired -->
        <li class="nav-item">
          <a class="nav-link" href="Expiredkaryawan.php">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Expired</span>
          </a>
        </li>

        <!-- Menu Inbox -->
        <li class="nav-item">
          <a class="nav-link" href="inboxkaryawan.php">
            <i class="fas fa-fw fa-inbox"></i>
            <span>Inbox</span>
          </a>
        </li>

        <!-- Menu Rekomendasi Obat -->
        <li class="nav-item active">
          <a class="nav-link" href="diagnosa.php">
          <i class="fas fa-fw fa-stethoscope"></i>
            <span>Rekomendasi Obat</span>
          </a>
        </li>
        <!--  -->

        <!-- Divider -->
        <!-- <hr class="text-white" /> -->
    </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <?php
                                // Menampilkan obat yang belum kadaluarsa
                                while($row = mysqli_fetch_array($kadaluarsa)){?>

                                    <a class="dropdown-item d-flex align-items-center" href="inboxkaryawan.php">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500"><?php echo date('l, d-m-Y');?></div>
                                             <?php echo $row["Nama_Obat"]?> akan kadaluarsa <?php echo $row["selisih_hari"] ?> hari lagi.
                                        </div>
                                    </a> 
                                <?php
                                }
                                ?>                               
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Karyawan</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Data Obat</h1> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Usulan Obat</h6>
                            <!-- Button trigger modal -->
                        
                        <div class="card-body">
                            <!-- ... -->
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="dSelect" class="form-label">Masukkan Keluhan Pertama Pelanggan</label>
                                    <select id="Select" class="form-select" name="gejala1">
                                        <?php
                                        foreach(nilai_kolom('gejala1') as $keluhan){
                                            echo '<option value="'.$keluhan['gejala1'].'">'.$keluhan['gejala1'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>                                                           
                                <div class="mb-3">
                                    <label for="dSelect" class="form-label">Masukkan Keluhan Kedua Pelanggan</label>
                                    <select id="Select" class="form-select" name="gejala2">
                                        <?php
                                        foreach(nilai_kolom('gejala2') as $keluhan){
                                            echo '<option value="'.$keluhan['gejala2'].'">'.$keluhan['gejala2'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>                                                           
                                <div class="mb-3">
                                    <label for="dSelect" class="form-label">Masukkan Usia Pelanggan</label>
                                    <select id="Select" class="form-select" name="usia">
                                        <?php
                                        foreach(nilai_kolom('usia') as $keluhan){
                                            echo '<option value="'.$keluhan['usia'].'">'.$keluhan['usia'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>                                                           
                                <div class="mb-3">
                                    <label for="dSelect" class="form-label">Apakah Mempunyai Riwayat Alergi?</label>
                                    <select id="Select" class="form-select" name="riwayat_alergi">
                                        <?php
                                        foreach(nilai_kolom('riwayat_alergi') as $keluhan){
                                            echo '<option value="'.$keluhan['riwayat_alergi'].'">'.$keluhan['riwayat_alergi'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>                                                           
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </form>

                            <?php
                                
                                if(isset($_POST['submit'])){

                                    //MENGHITUNG ADA BERAPA KALI LABEL MUNCUL
                                    $obatA = jumlah_label('Obat A');
                                    $obatB = jumlah_label('Obat B');
                                    $obatC = jumlah_label('Obat C');

                                    //MENGHITUNG ADA BERAPA BANYAK FITUR GEJALA1 YANG MUNCUL PADA SETIAP LABEL
                                    $gejala1A = hitung_jumlah("gejala1",$_POST["gejala1"],"Obat A");                                                                        
                                    $gejala1B = hitung_jumlah("gejala1",$_POST["gejala1"],"Obat B");
                                    $gejala1C = hitung_jumlah("gejala1",$_POST["gejala1"],"Obat C");

                                    //MENGHITUNG ADA BERAPA BANYAK FITUR GEJALA2 YANG MUNCUL PADA SETIAP LABEL
                                    $gejala2A = hitung_jumlah("gejala2",$_POST["gejala2"],"Obat A");                                                                        
                                    $gejala2B = hitung_jumlah("gejala2",$_POST["gejala2"],"Obat B");
                                    $gejala2C = hitung_jumlah("gejala2",$_POST["gejala2"],"Obat C");

                                    //MENGHITUNG ADA BERAPA BANYAK FITUR USIA YANG MUNCUL PADA SETIAP LABEL
                                    $usiaA = hitung_jumlah("usia",$_POST["usia"],"Obat A");                                                                        
                                    $usiaB = hitung_jumlah("usia",$_POST["usia"],"Obat B");
                                    $usiaC = hitung_jumlah("usia",$_POST["usia"],"Obat C");

                                    //MENGHITUNG ADA BERAPA BANYAK FITUR RIWAYAT ALERGI YANG MUNCUL PADA SETIAP LABEL
                                    $riwayat_alergiA = hitung_jumlah("riwayat_alergi",$_POST["riwayat_alergi"],"Obat A");                                                                        
                                    $riwayat_alergiB = hitung_jumlah("riwayat_alergi",$_POST["riwayat_alergi"],"Obat B");
                                    $riwayat_alergiC = hitung_jumlah("riwayat_alergi",$_POST["riwayat_alergi"],"Obat C");
                                    
                                    //MENGHITUNG NILAI NBC
                                    $prob_obatA = ($gejala1A/$obatA)*($gejala2A/$obatA)*
                                    ($usiaA/$obatA)*($riwayat_alergiA/$obatA)*($obatA/total_label());
                                    
                                    $prob_obatB = ($gejala1B/$obatB)*($gejala2B/$obatB)*
                                    ($usiaB/$obatB)*($riwayat_alergiB/$obatB)*($obatB/total_label());

                                    $prob_obatC = ($gejala1C/$obatC)*($gejala2C/$obatC)*
                                    ($usiaC/$obatC)*($riwayat_alergiC/$obatC)*($obatC/total_label());

                                    $prob_total = $prob_obatA + $prob_obatB + $prob_obatC;

                                    $prob_obatA /= $prob_total;
                                    $prob_obatB /= $prob_total;
                                    $prob_obatC /= $prob_total;                                    

                                    $prob_obatA = number_format($prob_obatA,'4','.','');
                                    $prob_obatB = number_format($prob_obatB,'4','.','');
                                    $prob_obatC = number_format($prob_obatC,'4','.','');

                                    //MENENTUKAN NILAI TERBESAR
                                    if($prob_obatA > $prob_obatB && $prob_obatA > $prob_obatC){
                                        echo "Obat A";
                                    }elseif($prob_obatB > $prob_obatC) {
                                         echo"Obat B";
                                    }else {
                                         echo"Obat C";
                                    }
                                                                            
                                     echo "\n $prob_obatA \n $prob_obatB \n $prob_obatC";
                                }

                            ?>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Obat 2023</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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

</body>

</html>