<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manajer - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="manajer.css" rel="stylesheet">
    <script src="vendor/chart.js/Chart.js"></script>
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

            <!-- Menu Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-chart-line"></i>
                <span>Dashboard</span>
                </a>
            </li>

            <!-- Menu Store -->
            <li class="nav-item">
            <a class="nav-link" href="store.php">
                <i class="fas fa-fw fa-store"></i>
                <span>Store</span>
            </a>
            </li>

            <!-- Menu Obat -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-pills"></i>
                        <span>Obat</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class=" py-2 collapse-inner rounded">
                            <h6 class="collapse-header" style="color: #fff">data table:</h6>
                            <a class="collapse-item" href="tables.php" style="color: #fff">Tabel Obat</a>
                            <a class="collapse-item" href="" style="color: #fff">Laporan</a>
                        </div>
                    </div>
            </li>
        
            <!-- Menu Expired -->
            <li class="nav-item">
                <a class="nav-link" href="Expired.php">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Expired</span>
                </a>
            </li>

            <!-- Menu Stok kosong -->
            <li class="nav-item">
                <a class="nav-link" href="lowStock.php">
                <i class="fas fa-fw fa-map"></i>
                <span>Low stock</span>
                </a>
            </li>
            
            <!-- Menu Inbox -->
            <li class="nav-item">
            <a class="nav-link" href="inbox.php">
            <i class="fas fa-fw fa-inbox"></i>
                <span>Inbox</span>
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

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
                                    Notification Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="inbox.php">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: Paracetamol dengan kode obat 1234 akan kadaluarsa 3 hari lagi.
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="inbox.php">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: Promag dengan kode obat 1234 akan kadaluarsa 1 minggu lagi.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="inbox.php">Show All Alerts</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Manajer1</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">                                
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Stok Obat -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                            <?php 
                                            
                                            include "koneksi.php";
                                            // Total Stok
                                            $querystok = "SELECT SUM(stok) AS total_stok FROM obat WHERE kadaluarsa > CURDATE();";
                                            $hasilstok = mysqli_query($koneksi, $querystok);
                                            $stok = mysqli_fetch_row($hasilstok);

                                            // Total jumlah Apotek cabang
                                            $queryapotek = "SELECT COUNT(id_apotek) AS apotek FROM apotek";
                                            $hasilapotek = mysqli_query($koneksi, $queryapotek);
                                            $apotek = mysqli_fetch_row($hasilapotek);

                                            // Total Obat Terjual
                                            $queryjumlah = "SELECT SUM(jumlah_obat) AS total FROM detail_transaksi";
                                            $hasiljumlah = mysqli_query($koneksi, $queryjumlah);
                                            $jumlah = mysqli_fetch_row($hasiljumlah);

                                            ?>
                                            <div class="h5 mb-0 font-weight-bold mb-3" style="color: #617A55;"><?php echo $stok[0];  ?></div>
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="font-size: 15px; color: #B3C99C;">
                                                Total Stok Obat
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-pills fa-2x " style="color: #B3C99C;"></i>
                                        </div>                                        
                                    </div>                                                                        
                                </div>
                                <div class="text-center">
                                    <a href="tables.php" class="small-box-footer">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Total Apotek -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold mb-3" style="color: #617A55;"><?php echo $apotek[0];  ?></div>
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="font-size: 15px; color: #B3C99C;">
                                                Total Apotek
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clinic-medical fa-2x" style="color: #B3C99C;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="store.php" class="small-box-footer">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Total Obat Terjual -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold mb-3" style="color: #617A55;"><?php echo $jumlah[0];  ?></div>
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="font-size: 15px; color: #B3C99C;">
                                                Total Obat Terjual
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book-medical fa-2x" style="color: #B3C99C;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="" class="small-box-footer">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-7 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold" style="color: #617A55;">Obat yang Terjual</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <div class="chart-area" style="position: relative; height: 400px; width: 100%;">
                                    <canvas id="myChart" width="100%" ></canvas>

                                        <?php
                                        // Mengambil data dari database atau sumber data lainnya
                                        include "koneksi.php";
                                        $query = "SELECT DATE_FORMAT(tanggal, '%Y-%m') AS bulan, SUM(jumlah_obat) AS total_penjualan FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi GROUP BY DATE_FORMAT(tanggal, '%Y-%m');";
                                        $result = mysqli_query($koneksi, $query);

                                        $data = array();

                                        // Loop melalui hasil query dan simpan data ke dalam array
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $data[$row['bulan']] = $row['total_penjualan'];
                                        }

                                        // Konversi data menjadi format yang dapat digunakan oleh Chart.js
                                        $labels = json_encode(array_keys($data));
                                        $values = json_encode(array_values($data));
                                        ?>

                                        <script>
                                        // Membuat grafik menggunakan Chart.js
                                        var ctx = document.getElementById('myChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: <?php echo $labels; ?>,
                                                datasets: [{
                                                    label: 'Jumlah',
                                                    data: <?php echo $values; ?>,
                                                    backgroundColor: 'rgba(0, 123, 255, 0.6)'
                                                }]
                                            },
                                            options: {
                                                responsive: true,
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pie Chart -->
                        <div class="col-xl-5 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">                                    
                                <h6 class="m-0 font-weight-bold" style="color: #617A55;">Ditribusi Stok Obat</h6>                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-chart-pie-container">
                                    <canvas id="PieChart" width="350" height="350"></canvas>

                                        <?php
                                        // Buat koneksi ke database
                                        
                                        $query = "SELECT apotek.id_apotek, apotek.nama AS nama_apotek, SUM(obat.stok) AS jumlah_stok
                                        FROM obat
                                        JOIN apotek ON obat.id_apotek = apotek.id_apotek
                                        GROUP BY apotek.id_apotek, apotek.nama;
                                        ";
                                        $result = mysqli_query($koneksi, $query);

                                        $data = array();

                                        // Loop melalui hasil query dan simpan data ke dalam array
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $data[$row['nama_apotek']] = $row['jumlah_stok'];
                                        }

                                        // Konversi data menjadi format yang dapat digunakan oleh Chart.js
                                        $labels = json_encode(array_keys($data));
                                        $values = json_encode(array_values($data));
                                        ?>

                                        <script>
                                        var ctx = document.getElementById('PieChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'pie',
                                            data: {
                                                labels: <?php echo $labels; ?>,
                                                datasets: [{
                                                    label: 'Jumlah',
                                                    data: <?php echo $values; ?>,
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(54, 162, 235, 0.6)',
                                                        'rgba(255, 206, 86, 0.6)',
                                                        'rgba(75, 192, 192, 0.6)',
                                                        'rgba(153, 102, 255, 0.6)',
                                                    ],
                                                }]
                                            },
                                            options: {
                                                responsive: false,
                                                plugins: {
                                                    legend: {
                                                        position: 'bottom', // Menempatkan legenda di sebelah kiri grafik
                                                        maxWidth: 150
                                                    }
                                                }
                                            }
                                        });
                                        </script>
                                        <!-- Styling piechart -->
                                        <style>
                                        .chart-pie-container {
                                            /* display: flex; */
                                            justify-content: center;
                                            align-items: center;
                                            /* height: 300px; Sesuaikan dengan tinggi yang diinginkan */
                                        }
                                        </style>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <!-- Card Barchart -->
                        <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                            
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold" style="color: #617A55;">Penjualan Obat Bulan Ini</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                    <canvas id="barChart"></canvas>

                                        <?php
                                        
                                        // Query untuk mengambil data dari database
                                        $query = "SELECT o.id_obat ,o.Nama_Obat as nama, SUM(d.jumlah) FROM `detailtransaksi` d JOIN obat o ON d.ID_Obat=o.ID_Obat GROUP BY ID_Obat;";
                                        $result = mysqli_query($koneksi, $query);

                                        // Array untuk menyimpan data dari database
                                        $data = array();

                                        // Loop melalui hasil query dan simpan data ke dalam array
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $data[$row['nama']] = $row['SUM(d.jumlah)'];
                                        }

                                        // Konversi data menjadi format yang dapat digunakan oleh Chart.js
                                        $labels = json_encode(array_keys($data));
                                        $values = json_encode(array_values($data));
                                        ?>

                                        <script>
                                        var ctx = document.getElementById('barChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: <?php echo $labels; ?>,
                                                datasets: [{
                                                    label: 'Jumlah',
                                                    data: <?php echo $values; ?>,
                                                    backgroundColor: [
                                                            'rgba(255, 99, 132, 0.6)',
                                                            'rgba(54, 162, 235, 0.6)',
                                                            'rgba(255, 206, 86, 0.6)',
                                                            'rgba(75, 192, 192, 0.6)',
                                                            'rgba(153, 102, 255, 0.6)'
                                                    ],
                                                }]
                                            },
                                            options: {
                                                responsive: true,
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                        </script>
                                    </div>
                                </div>
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
                        <span>Apotik Direction</span>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script src="barchart.js"></script> -->
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>