<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Waroeng Dpoer Apps')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <!-- third party css -->
    <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
    {{-- <link href="{{ url('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style"> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> --}}
    <!-- Mengimpor file CSS Bootstrap -->

    <!-- Mengimpor file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>



</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu"  style="background-color: #FFCF40 !important; color: white !important">
            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ url('dashboard') }}" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Dashboards </span>
                        </a>
                    </li>

                    <li class="side-nav-title side-nav-item">Apps</li>

                    <li class="side-nav-item">
                        <a href="{{ url('pembayaran') }}" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Pembayaran </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('data_menu') }}" class="side-nav-link">
                            <i class="dripicons-shopping-bag"></i>
                            <span> Menu </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('meja') }}" class="side-nav-link">
                            <i class="mdi mdi-18px mdi-table-chair"></i>
                            <span> Meja </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('pelanggan') }}" class="side-nav-link">
                            <i class="dripicons-user-group"></i>
                            <span> Customer </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ url('laporan') }}" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Laporan </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="apps-chat.html" class="side-nav-link">
                            <i class="mdi mdi-account-edit me-1"></i>
                            <span> Pengaturan </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('logout') }}" class="side-nav-link">
                            <i class="mdi mdi-logout-variant"></i>
                            <span> Logout </span>
                        </a>
                    </li>
                </ul>


                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                       

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ url('assets/images/users/avatar-1.png') }}" alt="user-image"
                                        class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">{{ Auth::guard('admin')->user()->name }}</span>
                                    <span class="account-position">{{ Auth::guard('admin')->user()->role }}</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                   
                </div>
                <!-- end Topbar -->
                @yield('content')
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Ladybugs - dpoerwaroeng.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{ url('assets/js/vendor.min.js') }}"></script>
        <script src="{{ url('assets/js/app.min.js') }}"></script>


        <!-- third party js -->
        <script src="{{ url('assets/js/vendor/apexcharts.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ url('assets/js/pages/demo.dashboard.js') }}"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        {{-- <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> --}}
        {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}
        <script>
            //let table = new DataTable('#dataTable');
            $(document).ready(function() {
                $('#datatable').DataTable({
                    searching: true,
                    paging: true,
                    destroy: true,
                });
            });
        </script>

        <!-- end demo js-->
</body>

</html>
