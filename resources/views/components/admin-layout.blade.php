<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Gym - Dashboard </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/dark-style.css" rel="stylesheet" />
    <link href="/assets/css/transparent-style.css" rel="stylesheet">
    <link href="/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="/assets/colors/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="/assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="/assets/switcher/demo.css" rel="stylesheet" />
</head>

<body class="app sidebar-mini ltr light-mode">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        <div class="app-header header sticky">
            <div class="container-fluid main-container">
                <div class="d-flex">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                    <!-- sidebar-toggle-->
                    <a class="logo-horizontal " href="/admin">
                        <img src="/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                    </a>
                    <!-- LOGO -->
                    <div class="main-header-center ms-3 d-none d-lg-block">
                        <input type="hidden" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off">
                        <button class="btn px-0 pt-2"></button>
                    </div>
                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                        <div class="dropdown d-none">
                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                            </a>
                            <div class="dropdown-menu header-search dropdown-menu-start">
                                <div class="input-group w-100 p-2">
                                    <input  class="form-control" placeholder="Search...." type="hidden">
                                    <div class="input-group-text btn btn-primary">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SEARCH -->
                        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                        </button>
                        <div class="navbar navbar-collapse responsive-navbar p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex order-lg-2">
                                    <div class="dropdown d-lg-none d-flex">
                                        <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                            <i class="fe fe-search"></i>
                                        </a>
                                        <div class="dropdown-menu header-search dropdown-menu-start">
                                            <div class="input-group w-100 p-2">
                                                <input type="text" class="form-control" placeholder="Search....">
                                                <div class="input-group-text btn btn-primary">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex country">
                                        <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                            <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                            <span class="light-layout"><i class="fe fe-sun"></i></span>
                                        </a>
                                    </div>
                                    <!-- Theme-Layout -->

                                    <div class="dropdown d-flex">
                                        <a class="nav-link icon full-screen-link nav-link-bg">
                                            <i class="fe fe-minimize fullscreen-button"></i>
                                        </a>
                                    </div>
                                    <!-- FULL-SCREEN -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        <div class="sticky">
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="app-sidebar">
                <div class="side-header">
                    <a class="header-brand1" href="/admin">


                        <img src="/assets/images/brand/logo-3.png"  style="width: 75px;max-height: 100%;vertical-align: middle;"
                             alt="logo">
                    </a>
                    <!-- LOGO -->
                </div>
                <div class="main-sidemenu">
                    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                          fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                        </svg></div>
                    <ul class="side-menu">
                        <li class="sub-category">
                            <h3>Main</h3>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                    class="side-menu__icon fe fe-layers"></i><span
                                    class="side-menu__label">Gym</span><i
                                    class="angle fe fe-chevron-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="/admin/nutrition" class="slide-item"> Nutrition</a>
                                <li><a href="/admin/exercise" class="slide-item"> Workout</a>
                                <li><a href="/admin/dietary" class="slide-item"> Supplements</a>
                                <li><a href="/admin/book" class="slide-item"> Books</a>
                                </li>

                            </ul>
                            <a class="side-menu__item" data-bs-toggle="slide" href="/admin/switcher"><i
                                    class="side-menu__icon fe fe-layers"></i><span
                                    class="side-menu__label">Switcher</span></a>

                            @auth()
                                <a class="side-menu__item" data-bs-toggle="slide" href="/admin/logout"><i
                                        class="side-menu__icon fe fe-layers"></i><span
                                        class="side-menu__label">Logout</span></a>
                            @endauth

                        </li>
                    </ul>
                </div>
            </div>
            <!--/APP-SIDEBAR-->
        </div>

        {{$slot}}

    </div>





    <!-- FOOTER -->
{{--    <footer class="footer">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center flex-row-reverse">--}}
{{--                <div class="col-md-12 col-sm-12 text-center">--}}
{{--                    Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span--}}
{{--                        class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
    <!-- FOOTER END -->

</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="/assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SPARKLINE JS-->
<script src="/assets/js/jquery.sparkline.min.js"></script>

<!-- Sticky js -->
<script src="/assets/js/sticky.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="/assets/js/circle-progress.min.js"></script>

<!-- PIETY CHART JS-->
<script src="/assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="/assets/plugins/peitychart/peitychart.init.js"></script>

<!-- SIDEBAR JS -->
<script src="/assets/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="/assets/plugins/p-scroll/pscroll.js"></script>
<script src="/assets/plugins/p-scroll/pscroll-1.js"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="/assets/plugins/chart/Chart.bundle.js"></script>
<script src="/assets/plugins/chart/rounded-barchart.js"></script>
<script src="/assets/plugins/chart/utils.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="/assets/plugins/select2/select2.full.min.js"></script>

<!-- INTERNAL Data tables js-->
<script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="/assets/js/apexcharts.js"></script>
<script src="/assets/plugins/apexchart/irregular-data-series.js"></script>

<!-- INTERNAL Flot JS -->
<script src="/assets/plugins/flot/jquery.flot.js"></script>
<script src="/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
<script src="/assets/plugins/flot/chart.flot.sampledata.js"></script>
<script src="/assets/plugins/flot/dashboard.sampledata.js"></script>

<!-- INTERNAL Vector js -->
<script src="/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- SIDE-MENU JS-->
<script src="/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- TypeHead js -->
<script src="/assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
<script src="/assets/js/typehead.js"></script>

<!-- INTERNAL INDEX JS -->
<script src="/assets/js/index1.js"></script>

<!-- Color Theme js -->
<script src="/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="/assets/js/custom.js"></script>

<!-- Switcher js -->
<script src="/assets/switcher/js/switcher.js"></script>
</body>

</html>
