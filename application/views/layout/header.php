
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="AdminWrap Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>AdminWrap Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/admin-wrap-lite-master/') ?>assets/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/admin-wrap-lite-master/') ?>assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin-wrap-lite-master/html/') ?>css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url('assets/admin-wrap-lite-master/html/') ?>css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                    <span class="sidebar-brand-text mx-3">TOKO AAC</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" alt="user" class="" /> <span
                                    class="hidden-md-down"><?= $user['nama']; ?> &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <?php if ($user['role'] == 'Admin') { ?>
                        <li> <a class="waves-effect waves-dark" href="<?= site_url('Dashboard/') ?>" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?= site_url('User/') ?>" aria-expanded="false"><i
                                    class="fa fa-user-circle"></i><span class="hide-menu">User</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?= site_url('Pakaian/?role=').$user['role'] ?>" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Pakaian</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?= site_url('Penjualan/')?>" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Penjualan</span></a>
                        </li>
                        <div class="text-center mt-4">
                          <a class="btn waves-effect waves-light btn-danger hidden-md-down text-white"
                          href="<?= site_url('Auth/logout') ?>">
                          <i class="fa fa-arrow-left"></i> Log Out</a>
                        </div>
                        <?php } else { ?>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?= site_url('Profil/') ?>" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profil</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?= site_url('Pakaian') ?>" aria-expanded="false"><i
                                    class="fa fa-home"></i><span class="hide-menu">Pakaian</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?= site_url('Pemesanan') ?>" aria-expanded="false"><i
                                    class="fa fa-shopping-basket"></i><span class="hide-menu">Keranjang</span></a>
                        </li>
                        <div class="text-center mt-4">
                          <a class="btn waves-effect waves-light btn-danger hidden-md-down text-white"
                          href="<?= site_url('Auth/logout') ?>">
                          <i class="fa fa-arrow-left"></i> Log Out</a>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            