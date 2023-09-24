


@include('layout.link')

<body>
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5> <button type="button"
                class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist"> <button
                        class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button> <button class="nav-link" id="switcher-profile-tab"
                        data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false">Theme Colors</button> </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-light-theme"> Light </label> <input class="form-check-input"
                                        type="radio" name="theme-style" id="switcher-light-theme" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-dark-theme"> Dark </label> <input class="form-check-input"
                                        type="radio" name="theme-style" id="switcher-dark-theme"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-ltr"> LTR </label> <input class="form-check-input" type="radio"
                                        name="direction" id="switcher-ltr" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-rtl"> RTL </label> <input class="form-check-input" type="radio"
                                        name="direction" id="switcher-rtl"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-vertical"> Vertical </label> <input class="form-check-input"
                                        type="radio" name="navigation-style" id="switcher-vertical" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-horizontal"> Horizontal </label> <input class="form-check-input"
                                        type="radio" name="navigation-style" id="switcher-horizontal"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-click"> Menu Click </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-menu-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-hover"> Menu Hover </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-menu-hover"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-click"> Icon Click </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-icon-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-hover"> Icon Hover </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-icon-hover"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-default-menu"> Default Menu </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-closed-menu"> Closed Menu </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icontext-menu"> Icon Text </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-overlay"> Icon Overlay </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-detached"> Detached </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-detached"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-double-menu"> Double Menu </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-double-menu"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-regular"> Regular </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-regular" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-classic"> Classic </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-classic"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-modern"> Modern </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-modern"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-full-width"> Full Width </label> <input class="form-check-input"
                                        type="radio" name="layout-width" id="switcher-full-width" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-boxed"> Boxed </label> <input class="form-check-input"
                                        type="radio" name="layout-width" id="switcher-boxed"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-fixed"> Fixed </label> <input class="form-check-input"
                                        type="radio" name="menu-positions" id="switcher-menu-fixed" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-scroll"> Scrollable </label> <input class="form-check-input"
                                        type="radio" name="menu-positions" id="switcher-menu-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-header-fixed"> Fixed </label> <input class="form-check-input"
                                        type="radio" name="header-positions" id="switcher-header-fixed" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-header-scroll"> Scrollable </label> <input
                                        class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-transparent"> </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio"
                                        name="header-colors" id="switcher-header-gradient"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio"
                                        name="header-colors" id="switcher-header-transparent"> </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4"> </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4"> </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img3" type="radio"
                                        name="theme-background" id="switcher-bg-img2"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-wrap"> <a
                        href="https://themeforest.net/item/ynex-bootstrap-admin-dashboard-template/45551445"
                        class="btn btn-primary m-1">Buy Now</a> <a href="https://themeforest.net/user/spruko/portfolio"
                        class="btn btn-secondary m-1">Our Portfolio</a> <a href="javascript:void(0);" id="reset-all"
                        class="btn btn-danger m-1">Reset</a> </div>
            </div>
        </div>
    </div> <!-- End Switcher -->
    <div class="page">
        <!-- app-header -->
        <header class="app-header">
            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">
                <!-- Start::header-content-left -->
                <div class="header-content-left">
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo"> <a href="index.html" class="header-logo"> <img
                                    src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo"
                                    class="desktop-dark"> <img src="../assets/images/brand-logos/toggle-dark.png"
                                    alt="logo" class="toggle-dark"> </a> </div>
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link --> <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div> <!-- End::header-element -->
                </div> <!-- End::header-content-left -->
                <!-- Start::header-content-right -->
                <div class="header-content-right">
                    <!-- Start::header-element -->
                    <div class="header-element header-search">
                        <!-- Start::header-link --> <a href="javascript:void(0);" class="header-link"
                            data-bs-toggle="modal" data-bs-target="#searchModal"> <i
                                class="bx bx-search-alt-2 header-link-icon"></i> </a> <!-- End::header-link -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <img src="../assets/images/flags/us_flag.jpg" alt="img" class="rounded-circle"> </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/us_flag.jpg" alt="img"> </span> English </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/spain_flag.jpg" alt="img"> </span> Spanish </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/french_flag.jpg" alt="img"> </span> French </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/germany_flag.jpg" alt="img"> </span> German </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/italy_flag.jpg" alt="img"> </span> Italian </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/russia_flag.jpg" alt="img"> </span> Russian </a>
                            </li>
                        </ul>
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting --> <a href="javascript:void(0);"
                            class="header-link layout-setting"> <span class="light-layout">
                                <!-- Start::header-link-icon --> <i class="bx bx-moon header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span> <span class="dark-layout">
                                <!-- Start::header-link-icon --> <i class="bx bx-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span> </a> <!-- End::header-link|layout-setting -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <i class="bx bx-cart header-link-icon"></i> <span
                                class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                        </a> <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p><span
                                        class="badge bg-success-transparent" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/1.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                        href="cart.html">SomeThing Phone</a> </div>
                                                <div> <span class="text-black mb-1">$1,299.00</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Metallic Blue</li>
                                                    <li>6gb Ram</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/3.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="cart.html">Stop
                                                        Watch</a> </div>
                                                <div> <span class="text-black mb-1">$179.29</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item">
                                                    <li>Analog</li>
                                                    <li><span class="badge bg-pink-transparent fs-10">Free
                                                            shipping</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/5.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="cart.html">Photo
                                                        Frame</a> </div>
                                                <div> <span class="text-black mb-1">$29.00</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Decorative</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/4.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="cart.html">Kikon
                                                        Camera</a> </div>
                                                <div> <span class="text-black mb-1">$4,999.00</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Black</li>
                                                    <li>50MM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/6.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                        href="cart.html">Canvas Shoes</a> </div>
                                                <div> <span class="text-black mb-1">$129.00</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Gray</li>
                                                    <li>Sports</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid"> <a href="checkout.html" class="btn btn-primary">Proceed to
                                        checkout</a> </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center"> <span
                                        class="avatar avatar-xl avatar-rounded bg-warning-transparent"> <i
                                            class="ri-shopping-cart-2-line fs-2"></i> </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6> <span
                                        class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="products.html" class="btn btn-primary btn-wave btn-sm m-1"
                                        data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            id="messageDropdown" aria-expanded="false"> <i class="bx bx-bell header-link-icon"></i>
                            <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                                id="notification-icon-badge">5</span> </a> <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p><span
                                        class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-primary-transparent avatar-rounded"><i
                                                    class="ti ti-gift fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Your Order Has
                                                        Been Shipped</a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    No: 123456 Has Shipped To Your Delivery Address</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-secondary-transparent avatar-rounded"><i
                                                    class="ti ti-discount-2 fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Discount
                                                        Available</a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Discount
                                                    Available On Selected Products</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-pink-transparent avatar-rounded"><i
                                                    class="ti ti-user-check fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Account Has
                                                        Been Verified</a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Your
                                                    Account Has Been Verified Sucessfully</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-warning-transparent avatar-rounded"><i
                                                    class="ti ti-circle-check fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Order Placed
                                                        <span class="text-warning">ID: #1116773</span></a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    Placed Successfully</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-success-transparent avatar-rounded"><i
                                                    class="ti ti-clock fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Order Delayed
                                                        <span class="text-success">ID: 7731116</span></a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    Delayed Unfortunately</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid"> <a href="notifications.html" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center"> <span
                                        class="avatar avatar-xl avatar-rounded bg-secondary-transparent"> <i
                                            class="ri-notification-off-line fs-2"></i> </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-shortcuts-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            id="notificationDropdown" aria-expanded="false"> <i
                                class="bx bx-grid-alt header-link-icon"></i> </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end"
                            aria-labelledby="notificationDropdown">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                                </div>
                            </div>
                            <div class="dropdown-divider mb-0"></div>
                            <div class="main-header-shortcuts p-2" id="header-shortcut-scroll">
                                <div class="row g-2">
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/figma.png" alt=""> </span> <span
                                                    class="d-block fs-12">Figma</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/microsoft-powerpoint.png" alt="">
                                                </span> <span class="d-block fs-12">Power Point</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/microsoft-word.png" alt=""> </span>
                                                <span class="d-block fs-12">MS Word</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/calender.png" alt=""> </span> <span
                                                    class="d-block fs-12">Calendar</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/sketch.png" alt=""> </span> <span
                                                    class="d-block fs-12">Sketch</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/google-docs.png" alt=""> </span>
                                                <span class="d-block fs-12">Docs</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/google.png" alt=""> </span> <span
                                                    class="d-block fs-12">Google</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/translate.png" alt=""> </span> <span
                                                    class="d-block fs-12">Translate</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/google-sheets.png" alt=""> </span>
                                                <span class="d-block fs-12">Sheets</span> </div>
                                        </a> </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="d-grid"> <a href="javascript:void(0);" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link --> <a onclick="openFullscreen();" href="#" class="header-link"> <i
                                class="bx bx-fullscreen full-screen-open header-link-icon"></i> <i
                                class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i> </a>
                        <!-- End::header-link -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle --> <a href="#" class="header-link dropdown-toggle"
                            id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-sm-2 me-0"> <img src="../assets/images/faces/9.jpg" alt="img" width="32"
                                        height="32" class="rounded-circle"> </div>
                                <div class="d-sm-block d-none">
                                    <p class="fw-semibold mb-0 lh-1">Json Taylor</p><span
                                        class="op-7 fw-normal d-block fs-11">Web Designer</span>
                                </div>
                            </div>
                        </a> <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex" href="profile.html"><i
                                        class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex" href="mail.html"><i
                                        class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span
                                        class="badge bg-success-transparent ms-auto">25</span></a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="to-do-list.html"><i
                                        class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                            <li><a class="dropdown-item d-flex" href="mail-settings.html"><i
                                        class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i
                                        class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a></li>
                            <li><a class="dropdown-item d-flex" href="chat.html"><i
                                        class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex" href="sign-in-cover.html"><i
                                        class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                        </ul>
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon --> <a href="#" class="header-link switcher-icon"
                            data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas"> <i
                                class="bx bx-cog header-link-icon"></i> </a> <!-- End::header-link|switcher-icon -->
                    </div> <!-- End::header-element -->
                </div> <!-- End::header-content-right -->
            </div> <!-- End::main-header-container -->
        </header> <!-- /app-header -->
        <!-- Start::app-sidebar -->



    





        @include('layout.sidebar')






        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Personal</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Personal</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-9 col-xl-12">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body p-0">
                                                <div class="p-4">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="mb-3"> <span class="d-block fw-semibold fs-15">Water
                                                                Tracking</span> <span
                                                                class="text-muted fs-12 d-block">87 Points</span> </div>
                                                        <div> <span class="avatar bg-primary"> <i
                                                                    class="bi bi-droplet fs-18"></i> </span> </div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0"> <span class="fs-24 fw-semibold">8.1</span>
                                                            <span class="text-muted fs-12 ms-1">Lt</span> </p><span
                                                            class="text-muted">0.9 Lt more to reach goal</span>
                                                    </div>
                                                </div>
                                                <div id="waterTrack"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body p-0">
                                                <div class="p-4">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="mb-3"> <span class="d-block fw-semibold fs-15">Sleep
                                                                Tracking</span> <span
                                                                class="text-muted fs-12 d-block">54 Points</span> </div>
                                                        <div> <span class="avatar bg-success"> <i
                                                                    class="bi bi-alarm fs-18"></i> </span> </div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0"> <span class="fs-24 fw-semibold">5.2</span>
                                                            <span class="text-muted fs-12 ms-1">Hrs</span> </p><span
                                                            class="text-muted">2.8 Hrs more to reach goal</span>
                                                    </div>
                                                </div>
                                                <div id="sleepTrack"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div
                                            class="d-flex flex-wrap align-items-center border-bottom border-block-end-dashed">
                                            <div class="px-4 py-3 flex-fill border-end border-inline-end-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 flex-fill fs-14 fw-semibold">Instagram</p>
                                                    <div class="ms-0"> <span class="avatar bg-light text-danger"><i
                                                                class="bi bi-instagram fs-16"></i></span> </div>
                                                </div>
                                                <p class="mb-2 fs-24 fw-semibold">121K</p>
                                                <div class="flex-between"> <span class="text-muted fs-12">6 min
                                                        ago</span> <span class="text-danger"><i
                                                            class="bi bi-arrow-down-right me-1 fs-10"></i>1.5%</span>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3 flex-fill border-bottom-dashed border-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 flex-fill fs-14 fw-semibold">Facebook</p>
                                                    <div class="ms-2"> <span class="avatar bg-light text-warning"><i
                                                                class="bi bi-facebook fs-16"></i></span> </div>
                                                </div>
                                                <p class="mb-2 fs-24 fw-semibold">2.1K</p>
                                                <div class="flex-between"> <span class="text-muted fs-12">1 hr
                                                        ago</span> <span class="text-warning"><i
                                                            class="bi bi-arrow-down-right me-1 fs-10"></i>1.9%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="px-4 py-3 flex-fill border-end border-inline-end-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 flex-fill fs-14 fw-semibold">Youtube</p>
                                                    <div class="ms-1"> <span class="avatar bg-light text-info"><i
                                                                class="bi bi-youtube fs-16"></i></span> </div>
                                                </div>
                                                <p class="mb-2 fs-24 fw-semibold">1.1M</p>
                                                <div class="flex-between"> <span class="text-muted fs-12">1 day
                                                        ago</span> <span class="text-info"><i
                                                            class="bi bi-arrow-up-right me-1 fs-10"></i>1.9%</span>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3 flex-fill border-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 flex-fill fs-14 fw-semibold">Twitter</p>
                                                    <div class="ms-2"> <span class="avatar bg-light text-purple"><i
                                                                class="bi bi-twitter fs-16"></i></span> </div>
                                                </div>
                                                <p class="mb-2 fs-24 fw-semibold">2.1K</p>
                                                <div class="flex-between"> <span class="text-muted fs-12">1 week
                                                        ago</span> <span class="text-purple"><i
                                                            class="bi bi-arrow-up-right me-1 fs-10"></i>1.9%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="me-1">
                                                        <h6 class="fs-15 mg-b-3">Primary Account</h6> <a
                                                            href="javascript:void(0);"
                                                            class="fs-12 text-primary op-8">Change<i
                                                                class="bi bi-box-arrow-up-right fs-11 ms-1"></i></a>
                                                    </div>
                                                    <div class="min-w-fit-content">
                                                        <div class="avatar bg-primary-transparent"> <i
                                                                class="ri-paypal-fill fs-18"></i> </div>
                                                    </div>
                                                </div>
                                                <p class="fs-24 fw-semibold">$1,29,389.00</p>
                                                <p class="mb-1 fs-14">Sarah Jahn SP</p>
                                                <div class="d-flex justify-content-between text-muted"> <span>XXXX XXXX
                                                        XXXX 1116</span> <span>12/24</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title">Quick Transfer</div> <a
                                                    href="javascript:void(0);" class="text-primary">View History<i
                                                        class="bi bi-box-arrow-up-right fs-11 ms-2"></i></a>
                                            </div>
                                            <div class="card-body">
                                                <div class="avatar-list-stacked mb-4"> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/2.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/8.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/2.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/10.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/4.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/13.jpg" alt="img"> </span> <a
                                                        aria-label="anchor"
                                                        class="avatar bg-light text-default avatar-rounded"
                                                        href="javascript:void(0);"> <i
                                                            class="ri-arrow-right-s-line fs-18"></i> </a> </div>
                                                <div class="mt-2">
                                                    <div class="mt-2"> <label class="text-muted mb-1">Send /
                                                            Receive</label>
                                                        <div class="input-group"> <span class="input-group-text">Send
                                                                To</span> <input type="text" value="11167731611"
                                                                aria-label="First name" class="form-control"> <button
                                                                class="btn btn-light" type="button">Check</button>
                                                        </div> <label class="text-success fs-12">Say Hii</label>
                                                    </div>
                                                    <div class="input-group mt-3"> <span
                                                            class="input-group-text">Amount</span> <input type="text"
                                                            value="2000" aria-label="First name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-3 mt-4"> <button type="button"
                                                        aria-label="button"
                                                        class="btn btn-icon btn-wave btn-primary-light"><i
                                                            class="bi bi-arrow-down-up"></i></button> <button
                                                        type="button" class="btn btn-primary btn-wave flex-fill">Proceed
                                                        To Pay</button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title"> Discover </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row gy-sm-0 gy-3">
                                                    <div
                                                        class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4 text-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-info-light border-0 px-4 py-3 lh-1 rounded">
                                                            <i class="bi bi-cash-coin fs-22"></i> </a> <a
                                                            href="javascript:void(0);"
                                                            class="d-block pt-2 text-muted fw-semibold">Bills</a> </div>
                                                    <div
                                                        class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4 text-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-primary-light border-0 px-4 py-3 lh-1 rounded">
                                                            <i class="bi bi-shop-window fs-22"></i> </a> <a
                                                            href="javascript:void(0);"
                                                            class="d-block pt-2 text-muted fw-semibold">Shopping</a>
                                                    </div>
                                                    <div
                                                        class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4 text-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-warning-light border-0 px-4 py-3 lh-1 rounded">
                                                            <i class="bi bi-compass fs-22"></i> </a> <a
                                                            href="javascript:void(0);"
                                                            class="d-block pt-2 text-muted fw-semibold">Travel</a>
                                                    </div>
                                                    <div
                                                        class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4 text-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-secondary-light border-0 px-4 py-3 lh-1 rounded">
                                                            <i class="bi bi-gift fs-22"></i> </a> <a
                                                            href="javascript:void(0);"
                                                            class="d-block pt-2 text-muted fw-semibold">Food</a> </div>
                                                    <div
                                                        class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4 text-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-danger-light border-0 px-4 py-3 lh-1 rounded">
                                                            <i class="bi bi-currency-bitcoin fs-22"></i> </a> <a
                                                            href="javascript:void(0);"
                                                            class="d-block pt-2 text-muted fw-semibold">Stocks</a>
                                                    </div>
                                                    <div
                                                        class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4 text-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-light border-0 px-4 py-3 lh-1 rounded"> <i
                                                                class="bi bi-three-dots fs-22"></i> </a> <a
                                                            href="javascript:void(0);"
                                                            class="d-block pt-2 text-muted fw-semibold">Others</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title"> Upcoming Events </div> <button type="button"
                                                    class="btn btn-sm btn-light">View All</button>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-unstyled mb-0 personal-upcoming-events">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light"> <i
                                                                        class="bi bi-calendar2-heart fs-16 text-primary"></i>
                                                                </span> </div>
                                                            <div class="flex-fill"> <span>Meeting with <span
                                                                        class="text-primary fw-semibold">Umar
                                                                        Xai</span></span> <span
                                                                    class="d-block text-muted fs-12">2 Hours</span>
                                                            </div>
                                                            <div> <span
                                                                    class="badge bg-primary-transparent">11-06-2023</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                                        src="../assets/images/faces/2.jpg" alt="">
                                                                </span> </div>
                                                            <div class="flex-fill"> <span><span
                                                                        class="text-primary fw-semibold">Shin Map</span>
                                                                    Birthday Party</span> <span
                                                                    class="d-block text-muted fs-12">5 Hours</span>
                                                            </div>
                                                            <div> <span
                                                                    class="badge bg-success-transparent">15-06-2023</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light"> <i
                                                                        class="bi bi-compass fs-16 text-pink"></i>
                                                                </span> </div>
                                                            <div class="flex-fill"> <span>Holiday Trip To Italy</span>
                                                                <span class="d-block text-muted fs-12">1 Week</span>
                                                            </div>
                                                            <div> <span
                                                                    class="badge bg-danger-transparent">20-06-2023</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light"> <i
                                                                        class="bi bi-balloon-heart fs-16 text-success"></i>
                                                                </span> </div>
                                                            <div class="flex-fill"> <span>Wedding Anniversary</span>
                                                                <span class="d-block text-muted fs-12">1 Day</span>
                                                            </div>
                                                            <div> <span
                                                                    class="badge bg-secondary-transparent">24-07-2023</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                                        src="../assets/images/faces/7.jpg" alt="">
                                                                </span> </div>
                                                            <div class="flex-fill"> <span>Meeting with <span
                                                                        class="text-primary fw-semibold">Irav
                                                                        Ert</span></span> <span
                                                                    class="d-block text-muted fs-12">45 Minutes</span>
                                                            </div>
                                                            <div> <span
                                                                    class="badge bg-warning-transparent">15-06-2023</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title"> Recent Messages </div> <button type="button"
                                                    class="btn btn-light btn-sm btn-wave">View All</button>
                                            </div>
                                            <div class="card-body">
                                                <div class="avatar-list-stacked mb-4"> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/1.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/9.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/3.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/11.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/6.jpg" alt="img"> </span> <span
                                                        class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/14.jpg" alt="img"> </span> <a
                                                        aria-label="anchor"
                                                        class="avatar bg-light text-default avatar-rounded"
                                                        href="javascript:void(0);"> <i
                                                            class="ri-arrow-right-s-line fs-18"></i> </a> </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="fw-semibold">Messages</div>
                                                    <div><i
                                                            class="ri-check-double-line me-1 align-middle text-muted d-inline-flex"></i>Mark
                                                        as read</div>
                                                </div>
                                                <div class="mt-4">
                                                    <ul class="list-unstyled mb-0 personal-messages-list">
                                                        <li>
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <div class="me-2"> <span class="avatar avatar-rounded">
                                                                        <img src="../assets/images/faces/12.jpg" alt="">
                                                                    </span> </div>
                                                                <div class="flex-fill"> <span
                                                                        class="fw-semibold d-block">Elin Misk</span>
                                                                    <span
                                                                        class="fs-12 text-muted d-block text-truncate message">Hello
                                                                        there! How are you doing? Call me when...</span>
                                                                </div>
                                                                <div class="text-end"> <span
                                                                        class="d-block text-muted fs-12">2 min</span>
                                                                    <span class="badge bg-primary rounded-pill">2</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <div class="me-2"> <span class="avatar avatar-rounded">
                                                                        <img src="../assets/images/faces/2.jpg" alt="">
                                                                    </span> </div>
                                                                <div class="flex-fill"> <span
                                                                        class="fw-semibold d-block">Shakira Shen</span>
                                                                    <span
                                                                        class="fs-12 text-muted d-block text-truncate message">I
                                                                        would like to discuss about that
                                                                        assets...</span> </div>
                                                                <div class="text-end"> <span
                                                                        class="d-block text-muted fs-12">9:43Pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="avatar bg-primary-transparent avatar-rounded">
                                                                        <i class="ri-user-line fs-18"></i> </span>
                                                                </div>
                                                                <div class="flex-fill"> <span
                                                                        class="fw-semibold d-block">Sebastian</span>
                                                                    <span
                                                                        class="fs-12 text-muted d-block text-truncate message">Shall
                                                                        we go to the cafe at downtown...</span> </div>
                                                                <div class="text-end"> <span
                                                                        class="d-block text-muted fs-12">Yesterday</span>
                                                                    <span class="badge bg-primary rounded-pill">2</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-12">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between mb-4">
                                            <div> <span class="d-block fs-15 fw-semibold">My Profile</span> <span
                                                    class="d-block fs-12 text-muted">67% Completed - <a
                                                        href="javascript:void(0);"
                                                        class="text-center text-primary">Click Here<i
                                                            class="bi bi-box-arrow-up-right fs-10 ms-2 align-middle"></i></a></span>
                                            </div>
                                            <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i
                                                        class="fe fe-more-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Month</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text-center mb-4">
                                            <div class="mb-3"> <span
                                                    class="avatar avatar-xxl avatar-rounded circle-progress p-1"> <img
                                                        src="../assets/images/faces/9.jpg" alt=""> </span> </div>
                                            <div>
                                                <h5 class="fw-semibold mb-0">Json Taylor</h5> <span
                                                    class="fs-13 text-muted">jsontaylor345@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="btn-list text-center"> <a href="profile.html"
                                                class="btn btn-primary-light btn-sm"> Edit Profile </a> <a
                                                href="profile.html" class="btn btn-primary btn-sm"> View Profile </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">My Goals</div> <button type="button"
                                            class="btn btn-sm btn-light">View All</button>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled personal-goals-list mb-0">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"> <span
                                                            class="avatar avatar-rounded bg-secondary-transparent"> <i
                                                                class="bi bi-globe2 fs-18"></i> </span> </div>
                                                    <div class="flex-fill">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                            <span class="d-block fw-semibold">Maldives Trip</span> <span
                                                                class="d-block text-secondary">80%</span> </div>
                                                        <div class="progress progress-animate progress-xs"
                                                            role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped bg-secondary"
                                                                style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"> <span
                                                            class="avatar avatar-rounded bg-warning-transparent"> <i
                                                                class="bi bi-balloon-heart fs-18"></i> </span> </div>
                                                    <div class="flex-fill">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                            <span class="d-block fw-semibold">Savings For
                                                                Birthday</span> <span
                                                                class="d-block text-warning">90%</span> </div>
                                                        <div class="progress progress-animate progress-xs"
                                                            role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped bg-warning"
                                                                style="width: 90%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"> <span
                                                            class="avatar avatar-rounded bg-primary-transparent"> <i
                                                                class="bi bi-lightning fs-18"></i> </span> </div>
                                                    <div class="flex-fill">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                            <span class="d-block fw-semibold">Join Guitar Class</span>
                                                            <span class="d-block text-primary">80%</span> </div>
                                                        <div class="progress progress-animate progress-xs"
                                                            role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                                style="width: 40%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Favourite Contacts </div> <button type="button"
                                            class="btn btn-sm btn-light">View All</button>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled personal-favourite-contacts mb-0">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"> <span class="avatar"> <img
                                                                src="../assets/images/faces/2.jpg" alt=""> </span>
                                                    </div>
                                                    <div class="flex-fill"> <span class="fw-semibold d-block mb-1">Kiara
                                                            Advain</span> <span
                                                            class="text-muted d-block fs-12">+(72)-8765700876</span>
                                                    </div>
                                                    <div> <a aria-label="anchor" href="javascript:void(0);"
                                                            class="text-danger me-2"><i
                                                                class="bi bi-heart-fill"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);" class="text-muted"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="bi bi-three-dots fs-14"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Action</a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Another Action</a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Something Else Here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"> <span class="avatar"> <img
                                                                src="../assets/images/faces/9.jpg" alt=""> </span>
                                                    </div>
                                                    <div class="flex-fill"> <span class="fw-semibold d-block mb-1">Jason
                                                            Mama</span> <span
                                                            class="text-muted d-block fs-12">+(72)-234226333</span>
                                                    </div>
                                                    <div> <a aria-label="anchor" href="javascript:void(0);"
                                                            class="text-danger me-2"><i
                                                                class="bi bi-heart-fill"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);" class="text-muted"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="bi bi-three-dots fs-14"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Action</a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Another Action</a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Something Else Here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"> <span class="avatar"> <img
                                                                src="../assets/images/faces/10.jpg" alt=""> </span>
                                                    </div>
                                                    <div class="flex-fill"> <span
                                                            class="fw-semibold d-block mb-1">Stuart Edward</span> <span
                                                            class="text-muted d-block fs-12">+(11)-16743256</span>
                                                    </div>
                                                    <div> <a aria-label="anchor" href="javascript:void(0);"
                                                            class="text-danger me-2"><i
                                                                class="bi bi-heart-fill"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);" class="text-muted"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="bi bi-three-dots fs-14"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Action</a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Another Action</a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="dropdown-item">Something Else Here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
            </div>
        </div> <!-- End::app-content -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group"> <a href="javascript:void(0);" class="input-group-text"
                                id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a> <input
                                type="search" class="form-control border-0 px-2" placeholder="Search"
                                aria-label="Username"> <a href="javascript:void(0);" class="input-group-text"
                                id="voice-search"><i class="fe fe-mic header-link-icon"></i></a> <a
                                href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                                aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span
                                class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i
                                        class="fe fe-x"></i></a></span>
                        </div>
                        <div class="my-4">
                            <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                                    href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                                    href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a
                                    href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button>
                            <button class="btn btn-sm btn-primary">Clear Recents</button> </div>
                    </div>
                </div>
            </div>
        </div> <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container"> <span class="text-muted"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a>. Designed with <span
                        class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"> <span
                            class="fw-semibold text-primary text-decoration-underline">Spruko</span> </a> All rights
                    reserved </span> </div>
        </footer> <!-- Footer End -->
    </div>
    <div class="scrollToTop"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>
    <div id="responsive-overlay"></div> <!-- Popper JS -->
    <script src="../assets/libs/%40popperjs/core/umd/popper.min.js"></script> <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Defaultmenu JS -->
    <script src="../assets/js/defaultmenu.min.js"></script> <!-- Node Waves JS-->
    <script src="../assets/libs/node-waves/waves.min.js"></script> <!-- Sticky JS -->
    <script src="../assets/js/sticky.js"></script> <!-- Simplebar JS -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/simplebar.js"></script> <!-- Color Picker JS -->
    <script src="../assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script> <!-- Apex Charts JS -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script> <!-- HRM Dashboard JS -->
    <script src="../assets/js/personal-dashboard.js"></script> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
</body>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/index-11.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 07:35:24 GMT -->

</html>