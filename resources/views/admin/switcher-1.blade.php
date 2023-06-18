<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Gym – Dashboard</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="../assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="../assets/switcher/demo.css" rel="stylesheet" />
</head>

<body class="app sidebar-mini ltr">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="/admin">

                            <img src="../assets/images/brand/logo.png"  style="width: 75px;max-height: 100%;vertical-align: middle;"
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
                                    <li><a href="/admin/books" class="slide-item"> Books</a>
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

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Dashboard Settings</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Switcher</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Switcher Style-1</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!--Row-->
                        <div class="container">
                            <div class="row row-sm">
                                <div class="col-xl-6 m-auto">
                                    <div class="card sidebar-right1">

                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">LTR and RTL VERSIONS</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle d-flex">
													<span class="me-auto">LTR Version</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch23" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">RTL Version</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox">
														<label for="myonoffswitch24" class="onoffswitch2-label"></label>
													</p>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Light Theme Style</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Light Theme</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch1" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex">
													<span class="me-auto">Light Primary</span>
													<div class="">
														<input class="w-30p h-30 input-color-picker color-primary-light" value="#6c5ffc" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Dark Theme Style</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Dark Theme</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
														<label for="myonoffswitch2" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Dark Primary</span>
													<div class="">
														<input class="w-30p h-30 input-dark-color-picker color-primary-dark" value="#6c5ffc" id="darkPrimaryColorID" oninput="darkPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor"
															name="darkPrimary">
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Transparent Theme Styles</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Transparent Theme</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
														<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Transparent Primary</span>
													<div class="">
														<input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentPrimaryColorID" oninput="transparentPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
															data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
													</div>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Transparent Background</span>
													<div class="">
														<input class="w-30p h-30 input-transparent-color-picker color-bg-transparent" value="#6c5ffc" id="transparentBgColorID" oninput="transparentBgColor()" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Transparent Bg-Image Styles</h6>
                                            </div>
											<div class="skin-body switch_section">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Bg-Image Primary</span>
													<div class="">
														<input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentBgImgPrimaryColorID" oninput="transparentBgImgPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
													</div>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<a class="bg-img1 me-2" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img1.jpg"  alt="Bg-Image" id="bgimage1" class="br-7"></a>
													<a class="bg-img2 me-2" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img2.jpg"  alt="Bg-Image"  id="bgimage2" class="br-7"></a>
													<a class="bg-img3 me-2" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img3.jpg"  alt="Bg-Image" id="bgimage3" class="br-7"></a>
													<a class="bg-img4 me-2" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img4.jpg"  alt="Bg-Image" id="bgimage4" class="br-7"></a>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Leftmenu Styles</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle lightMenu d-flex">
													<span class="me-auto">Light Menu</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch3" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle colorMenu d-flex mt-2">
													<span class="me-auto">Color Menu</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
														<label for="myonoffswitch4" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle darkMenu d-flex mt-2">
													<span class="me-auto">Dark Menu</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
														<label for="myonoffswitch5" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle gradientMenu d-flex mt-2">
													<span class="me-auto">Gradient Menu</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch19" class="onoffswitch2-checkbox">
														<label for="myonoffswitch19" class="onoffswitch2-label"></label>
													</p>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Header Styles</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle lightHeader d-flex">
													<span class="me-auto">Light Header</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch6" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle  colorHeader d-flex mt-2">
													<span class="me-auto">Color Header</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
														<label for="myonoffswitch7" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle darkHeader d-flex mt-2">
													<span class="me-auto">Dark Header</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
														<label for="myonoffswitch8" class="onoffswitch2-label"></label>
													</p>
												</div>

												<div class="switch-toggle darkHeader d-flex mt-2">
													<span class="me-auto">Gradient Header</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch20" class="onoffswitch2-checkbox">
														<label for="myonoffswitch20" class="onoffswitch2-label"></label>
													</p>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Layout Width Styles</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Full Width</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch9" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Boxed</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
														<label for="myonoffswitch10" class="onoffswitch2-label"></label>
													</p>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Layout Positions</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Fixed</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch11" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Scrollable</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
														<label for="myonoffswitch12" class="onoffswitch2-label"></label>
													</p>
												</div>
											</div>
                                        </div>
                                        <div class="card-body leftmenu-styles">
                                            <div>
                                                <h6 class="main-content-label mb-3">Sidemenu Layout Styles</h6>
                                            </div>
											<div class="switch_section">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Default Menu</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
														<label for="myonoffswitch13" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Icon with Text</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
														<label for="myonoffswitch14" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Icon Overlay</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
														<label for="myonoffswitch15" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Closed Sidemenu</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch16" class="onoffswitch2-checkbox">
														<label for="myonoffswitch16" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Hover Submenu</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch17" class="onoffswitch2-checkbox">
														<label for="myonoffswitch17" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Hover Submenu Style 1</span>
													<p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch18" class="onoffswitch2-checkbox">
														<label for="myonoffswitch18" class="onoffswitch2-label"></label>
													</p>
												</div>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="switch_section text-center px-0">
                                                <div class="btn-list">
                                                    <button class="btn btn-success w-lg">Save Settings</button>
                                                    <button class="btn btn-danger" onclick="localStorage.clear();
                                                    document.querySelector('html').style = '';
                                                    names() ;
                                                    resetData() ;" type="button">Reset All
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Row-->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>




    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<script src="../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../assets/js/typehead.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom1.js"></script>

    <!-- Switcher js -->
    <script src="../assets/switcher/js/switcher.js"></script>

</body>

</html>
