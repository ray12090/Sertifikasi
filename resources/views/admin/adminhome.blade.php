<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   <title>GoCamp</title>
   <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">  -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/profile.css')}}" rel="stylesheet" /> 
    <script src="{{ asset('js/fontawesomeall.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/sweetalert.min.js')}}"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand"><i class="fas fa-mountain mr-2"></i>GoCamp</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 mr-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0 pb-2">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white-600 small"></span>
                    <img class="img-profile rounded-circle profil" src="">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/home">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Data Penyewaan</div>
                        <a class="nav-link" href="/datapelanggan">
                            <div class="sb-nav-link-icon"><i class="fas fa-users" aria-hidden="true"></i></div>
                            Data Pelanggan
                        </a>
                        <a class="nav-link" href="?p=barang">
                            <div class="sb-nav-link-icon"><i class="fas fa-boxes" aria-hidden="true"></i></div>
                            Data Barang
                        </a>
                        <a class="nav-link" href="?p=transaksi">
                            <div class="sb-nav-link-icon"><i class="fas fa-hands-helping" aria-hidden="true"></i></div>
                            Transaksi Penyewaan
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <b></b>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                        <ol class="breadcrumb mb-4 mt-4">
                            <!-- <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li> -->
                            <li class="breadcrumb-item active">
                                <h4>Selamat Datang</h4>
                            </li>
                        </ol>
                        <div class="container-flud">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-4 mt-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-gray-600 text-uppercase mb-1">
                                                        Jumlah Pelanggan Penyewaan</div>
                                                    <div class="h2 mb-0 font-weight-bold text-gray-800">
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-4 mt-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-gray-600 text-uppercase mb-1">
                                                        Jumlah Barang Tersedia</div>
                                                    <div class="h2 mb-0 font-weight-bold text-gray-800">
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-boxes fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-4 mt-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-gray-600 text-uppercase mb-1">
                                                        Total Seluruh Pendapatan</div>
                                                    <div class="h2 mb-0 font-weight-bold text-gray-800">
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 p-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    Data Transaksi Selesai
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Petugas</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Keterlambatan</th>
                                                    <th>Status</th>
                                                    <th>Total Bayar</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; GoCamp 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="{{ asset('js/deleteDialog.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script src="{{ asset('js/datepicker.js')}}"></script>
</body>

</html>