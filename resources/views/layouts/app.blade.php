<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Football Informer</title>
    <!-- Custom fonts for this template-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="">

     <!-- Custom styles for Datatables -->
     <link href="{{asset('js/jquery/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('js/jquery/fontawesome-free/css/all.min.css')}}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion toggled" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index')}}">
                <img src="{{asset('img/logo_white.png')}}" alt="" width="150" height="150" class="d-inline-block align-text-top">
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class='bx bx-home align-middle' style='color:#ffffff;font-size:20px' ></i>
                    <span class="align-bottom">Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading mb-2">
                Europa
            </div>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2002.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2015.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2003.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2019.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/60.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2014.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2021.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2016.png')}}" alt="" width="48" height="48">
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading mb-2">
                América
            </div>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2013.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2152.png')}}" alt="" width="48" height="48">
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading mb-2">
                Interclubes e Seleções
            </div>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/2001.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/1301396.png')}}" alt="" width="48" height="48">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="#">
                    <img src="{{asset('img/champs/1301432.png')}}" alt="" width="48" height="48">
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - Jogos ao vivo -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class='bx bxs-circle bx-burst mr-2 ' style='color:#ff0000;font-size:10px' ></i>
                                <span>Ao vivo</span></a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        
                        <!-- Nav Item - Jogos de Hoje -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('matches.today')}}">
                                <i class='bx bx-calendar mr-2' style='color:green;font-size:18px'></i>
                                <span class="align-top">Hoje</span></a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">
                                <i class='bx bxs-star mr-2' style='color:#e8ff00' ></i>
                                <span>Favoritos</span></a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Main Content -->
                    <main id="content">
                        @yield('content')
                    </main>
                    <!-- End of Main Content -->

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Filipe Bomfim Santos Furtado - 2022</span>
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

    <script src="{{asset('js/jquery/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('js/jquery/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('js/jquery/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
    
    <!-- Page level plugins -->
    <script src="{{asset('js/jquery/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/jquery/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

</body>

</html>