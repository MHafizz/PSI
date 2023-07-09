<?php

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

    <title>Manajer - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Bootstrap Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <script defer src="tables.js"></script>

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
            <div class="sidebar-brand-text mx-3">Apotik +</div>
            </a>

            <!-- Divider -->
            <hr class="text-white" />

            <!-- Menu Dashboard -->
            <li class="nav-item">
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
                            <a class="collapse-item" href="laporanObat.php" style="color: #fff">Laporan</a>
                        </div>
                    </div>
            </li>
        
            <!-- Menu Expired -->
            <li class="nav-item active">
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

                                    <a class="dropdown-item d-flex align-items-center" href="inbox.php">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Manajer1</span>
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
                    <!-- <h1 class="h3 mb-2 text-gray-800">expired</h1> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Obat Kadaluarsa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="container">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Kode Produksi</th>
                                                <th>Produsen</th>
                                                <th>Sisa Hari</th>
                                                <th>Stok Obat</th>
                                                <th>Harga</th>
                                                <th>Penyimpanan</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'koneksi.php';
                                            $no=1;        
                                            $query ="SELECT DATEDIFF(kadaluarsa, CURRENT_DATE) AS selisih_hari, Nama_Obat, kode_produksi, produsen, Stok, Harga_Satuan,penyimpanan 
                                                    FROM obat WHERE kadaluarsa <= DATE_ADD(CURRENT_DATE, INTERVAL 7 DAY);";
                                            $obat = mysqli_query($koneksi, $query);

                                            // Menampilkan obat yang belum kadaluarsa
                                            while($row = mysqli_fetch_array($obat)){?>
                                                <tr>
                                                    <td><?php echo $no++ ; ?>.</td>
                                                    <!-- <td><?php echo $row["ID_Obat"]; ?></td> -->
                                                    <td><?php echo $row["Nama_Obat"]; ?></td>
                                                    <td><?php echo $row["kode_produksi"]; ?></td>
                                                    <td><?php echo $row["produsen"]; ?></td>
                                                    <td><?php echo $row["selisih_hari"]; ?> Hari</td>
                                                    <td><?php echo $row["Stok"]; ?></td>
                                                    <td><?php echo $row["Harga_Satuan"]; ?></td>
                                                    <td><?php echo $row["penyimpanan"]; ?></td>
                                                    <td> - </td>
                                                </tr>                                                
                                            <?php
                                            }
                                            ?>                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Kode Produksi</th>
                                                <th>Produsen</th>
                                                <th>Sisa Hari</th>
                                                <th>Stok Obat</th>
                                                <th>Harga</th>
                                                <th>Penyimpanan</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
                        <span>Copyright &copy; Your Website 2020</span>
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
                    <a class="btn btn-primary" href="login.php">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>