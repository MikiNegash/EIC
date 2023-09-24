

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
                    <h1 class="page-title fw-semibold fs-18 mb-0">Sales</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sales</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pe-0">
                                        <p class="mb-2"> <span class="fs-16">Sales Statistics</span> </p>
                                        <p class="mb-2 fs-12"> <span
                                                class="fs-25 fw-semibold lh-1 vertical-bottom mb-0">153</span> <span
                                                class="d-block fs-10 fw-semibold text-muted">THIS MONTH</span> </p><a
                                            href="javascript:void(0);" class="fs-12 mb-0 text-primary">Show full stats<i
                                                class="ti ti-chevron-right ms-1"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <p class="badge bg-success-transparent float-end d-inline-flex"><i
                                                class="ti ti-caret-up me-1"></i>42%</p>
                                        <p class="main-card-icon mb-0"><svg class="svg-primary"
                                                xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z"
                                                    opacity=".3" />
                                                <path d="M0,0h24v24H0V0z" fill="none" />
                                                <g>
                                                    <path
                                                        d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z" />
                                                    <rect height="2" width="6" x="9" y="7" />
                                                    <rect height="2" width="2" x="16" y="7" />
                                                    <rect height="2" width="6" x="9" y="10" />
                                                    <rect height="2" width="2" x="16" y="10" />
                                                </g>
                                            </svg></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pe-0">
                                        <p class="mb-2"> <span class="fs-16">Total Revenue</span> </p>
                                        <p class="mb-2 fs-12"> <span
                                                class="fs-25 fw-semibold lh-1 vertical-bottom mb-0">$4,32,474</span>
                                            <span class="d-block fs-10 fw-semibold text-muted">THIS MONTH</span> </p><a
                                            href="javascript:void(0);" class="fs-12 mb-0 text-primary">Show full stats<i
                                                class="ti ti-chevron-right ms-1"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <p class="badge bg-danger-transparent float-end d-inline-flex"><i
                                                class="ti ti-caret-down me-1"></i>12%</p>
                                        <p class="main-card-icon mb-0"> <svg class="svg-primary"
                                                xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <g>
                                                    <rect fill="none" height="24" width="24" />
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M12,6c-3.87,0-7,3.13-7,7s3.13,7,7,7s7-3.13,7-7S15.87,6,12,6z M13,14h-2V8h2V14z"
                                                            opacity=".3" />
                                                        <rect height="2" width="6" x="9" y="1" />
                                                        <path
                                                            d="M19.03,7.39l1.42-1.42c-0.43-0.51-0.9-0.99-1.41-1.41l-1.42,1.42C16.07,4.74,14.12,4,12,4c-4.97,0-9,4.03-9,9 c0,4.97,4.02,9,9,9s9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M12,20c-3.87,0-7-3.13-7-7s3.13-7,7-7s7,3.13,7,7S15.87,20,12,20z" />
                                                        <rect height="6" width="2" x="11" y="8" />
                                                    </g>
                                                </g>
                                            </svg> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pe-0">
                                        <p class="mb-2"> <span class="fs-16">Page Views</span> </p>
                                        <p class="mb-2 fs-12"> <span
                                                class="fs-25 fw-semibold lh-1 vertical-bottom mb-0">27,146</span> <span
                                                class="d-block fs-10 fw-semibold text-muted">THIS MONTH</span> </p><a
                                            href="javascript:void(0);" class="fs-12 mb-0 text-primary">Show full stats<i
                                                class="ti ti-chevron-right ms-1"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <p class="badge bg-success-transparent float-end d-inline-flex"><i
                                                class="ti ti-caret-up me-1"></i>27%</p>
                                        <p class="main-card-icon mb-0"> <svg class="svg-primary"
                                                xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                                width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z"
                                                    opacity=".3" />
                                                <path
                                                    d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z" />
                                            </svg> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pe-0">
                                        <p class="mb-2"> <span class="fs-16">Profit By Sale</span> </p>
                                        <p class="mb-2 fs-12"> <span
                                                class="fs-25 fw-semibold lh-1 vertical-bottom mb-0">$563</span> <span
                                                class="d-block fs-10 fw-semibold text-muted">THIS MONTH</span> </p><a
                                            href="javascript:void(0);" class="fs-12 mb-0 text-primary">Show full stats<i
                                                class="ti ti-chevron-right ms-1"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <p class="badge bg-success-transparent float-end d-inline-flex"><i
                                                class="ti ti-caret-up me-1"></i>32.5%</p>
                                        <p class="main-card-icon mb-0"> <svg class="svg-primary"
                                                xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                                width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1.23 13.33V19H10.9v-1.69c-1.5-.31-2.77-1.28-2.86-2.97h1.71c.09.92.72 1.64 2.32 1.64 1.71 0 2.1-.86 2.1-1.39 0-.73-.39-1.41-2.34-1.87-2.17-.53-3.66-1.42-3.66-3.21 0-1.51 1.22-2.48 2.72-2.81V5h2.34v1.71c1.63.39 2.44 1.63 2.49 2.97h-1.71c-.04-.97-.56-1.64-1.94-1.64-1.31 0-2.1.59-2.1 1.43 0 .73.57 1.22 2.34 1.67 1.77.46 3.66 1.22 3.66 3.42-.01 1.6-1.21 2.48-2.74 2.77z"
                                                    opacity=".3" />
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z" />
                                            </svg> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-12">
                        <div class="card custom-card recent-transactions-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Recent Transactions</div>
                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i
                                            class="fe fe-more-vertical"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group"> <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="d-flex align-items-start"> <span
                                                    class="tansaction-icon bg-primary"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" class="svg-white"
                                                        enable-background="new 0 0 24 24" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                            <path
                                                                d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z" />
                                                        </g>
                                                    </svg> </span>
                                                <div class="w-100">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <div class="mt-0">
                                                            <p class="mb-0 fw-semibold"><span
                                                                    class="me-3">Shopping</span></p><span
                                                                class="mb-0 fs-12 text-muted">card</span>
                                                        </div>
                                                        <div class="text-muted fs-12 text-center"></div> <span
                                                            class="ms-auto"> <span class="text-end text-danger d-block">
                                                                -$256.99 </span> <span
                                                                class="text-end text-muted d-block fs-12">Mar
                                                                12,2022</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="d-flex align-items-start"> <span
                                                    class="tansaction-icon bg-info"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" class="svg-white"
                                                        enable-background="new 0 0 24 24" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M20,2H4C3,2,2,2.9,2,4v3.01C2,7.73,2.43,8.35,3,8.7V20c0,1.1,1.1,2,2,2h14c0.9,0,2-0.9,2-2V8.7c0.57-0.35,1-0.97,1-1.69V4 C22,2.9,21,2,20,2z M19,20H5V9h14V20z M20,7H4V4h16V7z" />
                                                                <rect height="2" width="6" x="9" y="12" />
                                                            </g>
                                                        </g>
                                                    </svg> </span>
                                                <div class="w-100">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <div class="mt-0">
                                                            <p class="mb-0 fw-semibold"><span class="me-3">Stock
                                                                    Market</span></p><span
                                                                class="mb-0 fs-12 text-muted">Transfer</span>
                                                        </div>
                                                        <div class="text-muted fs-12 text-center"></div> <span
                                                            class="ms-auto"> <span
                                                                class="text-end text-success d-block"> +$18,567.00
                                                            </span> <span class="text-end text-muted d-block fs-12">Mar
                                                                10,2022</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="d-flex align-items-start"> <span
                                                    class="tansaction-icon bg-warning"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" class="svg-white"
                                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-1.45-5c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6z" />
                                                    </svg> </span>
                                                <div class="w-100">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <div class="mt-0">
                                                            <p class="mb-0 fw-semibold"><span
                                                                    class="me-3">Grocery</span></p><span
                                                                class="mb-0 fs-12 text-muted">card</span>
                                                        </div>
                                                        <div class="text-muted fs-12 text-center"></div> <span
                                                            class="ms-auto"> <span class="text-end text-danger d-block">
                                                                -$256.99 </span> <span
                                                                class="text-end text-muted d-block fs-12">Apr
                                                                23,2022</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="d-flex align-items-start"> <span
                                                    class="tansaction-icon bg-danger"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" class="svg-white"
                                                        enable-background="new 0 0 24 24" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g />
                                                            <g>
                                                                <path
                                                                    d="M21.9,8.89l-1.05-4.37c-0.22-0.9-1-1.52-1.91-1.52H5.05C4.15,3,3.36,3.63,3.15,4.52L2.1,8.89 c-0.24,1.02-0.02,2.06,0.62,2.88C2.8,11.88,2.91,11.96,3,12.06V19c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2v-6.94 c0.09-0.09,0.2-0.18,0.28-0.28C21.92,10.96,22.15,9.91,21.9,8.89z M18.91,4.99l1.05,4.37c0.1,0.42,0.01,0.84-0.25,1.17 C19.57,10.71,19.27,11,18.77,11c-0.61,0-1.14-0.49-1.21-1.14L16.98,5L18.91,4.99z M13,5h1.96l0.54,4.52 c0.05,0.39-0.07,0.78-0.33,1.07C14.95,10.85,14.63,11,14.22,11C13.55,11,13,10.41,13,9.69V5z M8.49,9.52L9.04,5H11v4.69 C11,10.41,10.45,11,9.71,11c-0.34,0-0.65-0.15-0.89-0.41C8.57,10.3,8.45,9.91,8.49,9.52z M4.04,9.36L5.05,5h1.97L6.44,9.86 C6.36,10.51,5.84,11,5.23,11c-0.49,0-0.8-0.29-0.93-0.47C4.03,10.21,3.94,9.78,4.04,9.36z M5,19v-6.03C5.08,12.98,5.15,13,5.23,13 c0.87,0,1.66-0.36,2.24-0.95c0.6,0.6,1.4,0.95,2.31,0.95c0.87,0,1.65-0.36,2.23-0.93c0.59,0.57,1.39,0.93,2.29,0.93 c0.84,0,1.64-0.35,2.24-0.95c0.58,0.59,1.37,0.95,2.24,0.95c0.08,0,0.15-0.02,0.23-0.03V19H5z" />
                                                            </g>
                                                        </g>
                                                    </svg> </span>
                                                <div class="w-100">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <div class="mt-0">
                                                            <p class="mb-0 fw-semibold"><span
                                                                    class="me-3">Business</span></p><span
                                                                class="mb-0 fs-12 text-muted">transfer</span>
                                                        </div>
                                                        <div class="text-muted fs-12 text-center"></div> <span
                                                            class="ms-auto"> <span
                                                                class="text-end text-success d-block"> +$256.99 </span>
                                                            <span class="text-end text-muted d-block fs-12">May
                                                                4,2022</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="d-flex align-items-start"> <span
                                                    class="tansaction-icon bg-success"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" class="svg-white"
                                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM10 9h8v2h-8zm0 3h4v2h-4zm0-6h8v2h-8z" />
                                                    </svg> </span>
                                                <div class="w-100">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <div class="mt-0">
                                                            <p class="mb-0 fw-semibold"><span class="me-3">Books</span>
                                                            </p><span class="mb-0 fs-12 text-muted">card</span>
                                                        </div>
                                                        <div class="text-muted fs-12 text-center"></div> <span
                                                            class="ms-auto"> <span class="text-end text-danger d-block">
                                                                -$256.99 </span> <span
                                                                class="text-end text-muted d-block fs-12">May
                                                                18,2022</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="d-flex align-items-start"> <span
                                                    class="tansaction-icon bg-pink"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" class="svg-white"
                                                        enable-background="new 0 0 24 24" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M21.58,16.09l-1.09-7.66C20.21,6.46,18.52,5,16.53,5H7.47C5.48,5,3.79,6.46,3.51,8.43l-1.09,7.66 C2.2,17.63,3.39,19,4.94,19h0c0.68,0,1.32-0.27,1.8-0.75L9,16h6l2.25,2.25c0.48,0.48,1.13,0.75,1.8,0.75h0 C20.61,19,21.8,17.63,21.58,16.09z M19.48,16.81C19.4,16.9,19.27,17,19.06,17c-0.15,0-0.29-0.06-0.39-0.16L15.83,14H8.17 l-2.84,2.84C5.23,16.94,5.09,17,4.94,17c-0.21,0-0.34-0.1-0.42-0.19c-0.08-0.09-0.16-0.23-0.13-0.44l1.09-7.66 C5.63,7.74,6.48,7,7.47,7h9.06c0.99,0,1.84,0.74,1.98,1.72l1.09,7.66C19.63,16.58,19.55,16.72,19.48,16.81z" />
                                                                <polygon
                                                                    points="9,8 8,8 8,10 6,10 6,11 8,11 8,13 9,13 9,11 11,11 11,10 9,10" />
                                                                <circle cx="17" cy="12" r="1" />
                                                                <circle cx="15" cy="9" r="1" />
                                                            </g>
                                                        </g>
                                                    </svg> </span>
                                                <div class="w-100">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <div class="mt-0">
                                                            <p class="mb-0 fw-semibold"><span class="me-3">Sports</span>
                                                            </p><span class="mb-0 fs-12 text-muted">card</span>
                                                        </div>
                                                        <div class="text-muted fs-12 text-center"></div> <span
                                                            class="ms-auto"> <span class="text-end text-danger d-block">
                                                                -$256.99 </span> <span
                                                                class="text-end text-muted d-block fs-12">Apr
                                                                30,2022</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xxl-6 col-xl-8">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Sales Overview </div> <a aria-label="anchor"
                                    href="javascript:void(0);" class="btn btn-icon btn-sm btn-light ms-auto"
                                    data-bs-toggle="dropdown"> <i class="fe fe-more-vertical"></i> </a>
                                <div class="dropdown">
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="salesOverview"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xxl-3 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Activities</div>
                                <div class="dropdown"> <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                        data-bs-toggle="dropdown"> View All<i
                                            class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body mt-0 latest-timeline" id="latest-timeline">
                                <ul class="timeline-main mb-0 list-unstyled">
                                    <li>
                                        <div class="featured_icon1 featured-danger"></div>
                                    </li>
                                    <li class="mt-0 activity"> <a href="javascript:void(0);" class="fs-12">
                                            <p class="mb-0"><span class="fw-semibold">#Anita</span> <span
                                                    class="ms-2 fs-12">Lorem ipsum dolor, sit amet consectetur
                                                    adipisicing .</span></p>
                                        </a> <small class="text-muted mt-0 mb-0 fs-10">12 mins ago.</small> </li>
                                    <li>
                                        <div class="featured_icon1 featured-success"> </div>
                                    </li>
                                    <li class="mt-0 activity"> <a href="javascript:void(0);" class="fs-12">
                                            <p class="mb-0"><span class="me-2 fs-12">New Product reveived.</span><span
                                                    class="fw-semibold">#FX-321</span> </p>
                                        </a> <small class="text-muted mt-0 mb-0 fs-10">28 mins ago.</small> </li>
                                    <li>
                                        <div class="featured_icon1 featured-danger"></div>
                                    </li>
                                    <li class="mt-0 activity">
                                        <div class="fs-12">
                                            <p class="mb-0"> <span class="fw-semibold text-primary">#Zlatan</span> <span
                                                    class="ms-2 fs-12">shared a page. <a
                                                        href="https://themeforest.net/user/spruko/portfolio"
                                                        target="_blank"
                                                        class="text-success underlined fs-11">https://themeforest.net/user/spruko/portfolio</a>
                                                </span> </p>
                                        </div> <small class="text-muted mt-0 mb-0 fs-10">37 mins ago.</small>
                                    </li>
                                    <li>
                                        <div class="featured_icon1 featured-success"></div>
                                    </li>
                                    <li class="mt-0 activity">
                                        <div class="fs-12">
                                            <p class="mb-0"><span class="fw-semibold text-primary">#Hussain</span> <span
                                                    class="ms-2 fs-12">shared a file. </span></p><small
                                                class="text-muted mt-0 mb-0 fs-10">1 day ago.</small>
                                            <p class="p-1 border border-dotted wp-50 br-5 mb-0"> <a
                                                    href="javascript:void(0);"> <span
                                                        class="badge bg-success text-fixed-white me-2">PPT</span> <span
                                                        class="fs-11">Project_discussion</span> </a> </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featured_icon1 featured-danger"></div>
                                    </li>
                                    <li class="mt-0 activity"> <a href="javascript:void(0);" class="fs-12">
                                            <p class="mb-0"> <span class="fw-semibold">#Emiley</span> <span
                                                    class="ms-2 fs-12">Lorem ipsum dolor, sit amet consectetur
                                                    adipisicing ipsum dolor...</span> <span
                                                    class="fw-semibold ms-2">More</span> </p>
                                        </a> <small class="text-muted mt-0 mb-0 fs-10">14 Mar 2022.</small> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-2 -->
                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xxl-6 col-xl-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header d-sm-flex d-block">
                                <div class="card-title">Task List</div>
                                <div class="tab-menu-heading border-0 p-0 ms-auto mt-sm-0 mt-2">
                                    <div class="tabs-menu-task me-3">
                                        <ul class="nav nav-tabs panel-tabs-task border-0" role="tablist">
                                            <li><a href="javascript:void(0);" class="me-1 active" data-bs-toggle="tab"
                                                    data-bs-target="#Active" role="tab" aria-selected="true">Active
                                                    Tasks</a></li>
                                            <li><a href="javascript:void(0);" data-bs-toggle="tab"
                                                    data-bs-target="#Complete" role="tab"
                                                    aria-selected="false">Completed Tasks</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-sm-0 mt-2"> <button type="button" class="btn btn-sm btn-light"><i
                                            class="ti ti-plus me-1 fw-semibold align-middle d-inline-block"></i>Add
                                        Task</button> </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content p-0">
                                    <div class="tab-pane active p-0 border-0" id="Active">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center"> <span> <input
                                                                    class="form-check-input" type="checkbox"
                                                                    id="checkAll" value="" aria-label="..."> </span>
                                                        </th>
                                                        <th scope="col">Task details</th>
                                                        <th scope="col">Assigned date</th>
                                                        <th scope="col">Target</th>
                                                        <th scope="col">Assigned to</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check1" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>Design task page for new template</td>
                                                        <td class="text-muted">12.43pm</td>
                                                        <td><span class="badge bg-primary">Today</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/2.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/8.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/2.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check2" value=""
                                                                    aria-label="..." checked> </span> </td>
                                                        <td>Solve UI issues in new template</td>
                                                        <td class="text-muted">11.25am</td>
                                                        <td><span class="badge bg-secondary">Tomorrow</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/6.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/9.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check3" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>prepare pre requisites</td>
                                                        <td class="text-muted">9.56am</td>
                                                        <td><span class="badge bg-primary">Today</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/3.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/5.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/10.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/15.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check4" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>Change total styles od that dashboard</td>
                                                        <td class="text-muted">8.15am</td>
                                                        <td><span class="badge bg-primary">Today</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/11.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check5" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>Update color theme</td>
                                                        <td class="text-muted">4.20pm</td>
                                                        <td><span class="badge bg-secondary">Tomorrow</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/13.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/16.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/8.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check11" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>New dashboard design update</td>
                                                        <td class="text-muted">8.29am</td>
                                                        <td><span class="badge bg-primary">Today</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/10.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/5.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0 border-0" id="Complete">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center"> <span> <input
                                                                    class="form-check-input" type="checkbox"
                                                                    id="checkAll1" value="" aria-label="..."> </span>
                                                        </th>
                                                        <th scope="col">Task details</th>
                                                        <th scope="col">Assigned date</th>
                                                        <th scope="col">Completed</th>
                                                        <th scope="col">Assigned to</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check6" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>New landing page ui update</td>
                                                        <td class="text-muted">24 Nov 2022</td>
                                                        <td><span class="badge bg-success">4 hrs ago</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/5.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/9.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check7" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>Job portal dashboard redesign</td>
                                                        <td class="text-muted">30 Nov 2022</td>
                                                        <td><span class="badge bg-success">Today</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/11.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/12.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/13.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check8" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>New template layout update</td>
                                                        <td class="text-muted">11 Dec 2022</td>
                                                        <td><span class="badge bg-success">Yesterday</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/4.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check29" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>All dashboard licenses page update</td>
                                                        <td class="text-muted">6 Dec 2022</td>
                                                        <td><span class="badge bg-success">Yesterday</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/1.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/2.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check19" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>Update color theme of ynex template</td>
                                                        <td class="text-muted">8 Dec 2022</td>
                                                        <td><span class="badge bg-success">Yesterday</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/5.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/3.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/11.jpg" alt="img">
                                                                </span> <span class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/12.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> <span> <input class="form-check-input"
                                                                    type="checkbox" id="check9" value=""
                                                                    aria-label="..."> </span> </td>
                                                        <td>New pages list noted</td>
                                                        <td class="text-muted">21 Dec 2022</td>
                                                        <td><span class="badge bg-success">Today</span></td>
                                                        <td>
                                                            <div class="avatar-list-stacked mb-0"> <span
                                                                    class="avatar avatar-xs"> <img
                                                                        src="../assets/images/faces/1.jpg" alt="img">
                                                                </span> </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                    <div>
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"> <a class="page-link"
                                                        href="javascript:void(0);"> Prev </a> </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">2</a></li>
                                                <li class="page-item"> <a class="page-link text-primary"
                                                        href="javascript:void(0);"> next </a> </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Visitors By Countries </div>
                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i
                                            class="fe fe-more-vertical"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-12 sales-visitors-countries">
                                        <div class="mt-2">
                                            <ul class="list-unstyled p-4 my-auto">
                                                <li class="mb-3"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-primary"></i>Usa</span><span
                                                        class="fw-semibold float-end">3,201</span> </li>
                                                <li class="mb-3"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-secondary"></i>India</span><span
                                                        class="fw-semibold float-end">2,345</span> </li>
                                                <li class="mb-3"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-danger"></i>Vatican
                                                        City</span><span class="fw-semibold float-end">106</span> </li>
                                                <li class="mb-3"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-info"></i>Canada</span><span
                                                        class="fw-semibold float-end">2,857</span> </li>
                                                <li class="mb-3"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-orange"></i>Mauritius</span><span
                                                        class="fw-semibold float-end">169</span> </li>
                                                <li class="mb-3"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-warning"></i>Singapore</span><span
                                                        class="fw-semibold float-end">1,950</span> </li>
                                                <li class="mb-3"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-success"></i>Palau</span><span
                                                        class="fw-semibold float-end">224</span> </li>
                                                <li class="mb-3"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-pink"></i>Maldives</span><span
                                                        class="fw-semibold float-end">147</span> </li>
                                                <li class="mb-0"> <span class="fs-12"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block"></i>São
                                                        Tomé and Príncipe</span><span
                                                        class="fw-semibold float-end">182</span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-12 text-center">
                                        <div id="visitors-countries"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-3 -->
                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Customers</div>
                                <div class="dropdown"> <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                        data-bs-toggle="dropdown"> View All<i
                                            class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0 customers">
                                <ul class="list-group my-2">
                                    <li class="list-group-item border-0"> <a href="javascript:void(0);"
                                            class="border-0">
                                            <div class="d-flex align-items-top"> <img
                                                    class="avatar avatar-md me-3 my-auto"
                                                    src="../assets/images/faces/2.jpg" alt="Image description">
                                                <div class="mt-0">
                                                    <p class="mb-1 fw-semibold">Samantha Melon</p>
                                                    <p class="mb-0 fs-11 text-success">User ID: #1234</p>
                                                </div> <span class="ms-auto fs-12"> <span
                                                        class="float-end text-muted fw-semibold">11.43am</span> </span>
                                            </div>
                                        </a> </li>
                                    <li class="list-group-item border-0 mb-2"> <a href="javascript:void(0);"
                                            class="border-0">
                                            <div class="d-flex align-items-top"> <img
                                                    class="avatar avatar-md me-3 my-auto"
                                                    src="../assets/images/faces/1.jpg" alt="Image description">
                                                <div class="mt-0">
                                                    <p class="mb-1 fw-semibold">Allie Grater</p>
                                                    <p class="mb-0 fs-11 text-success">User ID: #3432</p>
                                                </div> <span class="ms-auto fs-12"> <span
                                                        class="float-end text-muted fw-semibold">12.35pm</span> </span>
                                            </div>
                                        </a> </li>
                                    <li class="list-group-item border-0 mb-2"> <a href="javascript:void(0);"
                                            class="border-0">
                                            <div class="d-flex align-items-top"> <img
                                                    class="avatar avatar-md me-3 my-auto"
                                                    src="../assets/images/faces/5.jpg" alt="Image description">
                                                <div class="mt-0">
                                                    <p class="mb-1 fw-semibold">Gabe Lackmen</p>
                                                    <p class="mb-0 fs-11 text-success">User ID: #2312</p>
                                                </div> <span class="ms-auto fs-12"> <span
                                                        class="float-end text-muted fw-semibold">Yeserday</span> </span>
                                            </div>
                                        </a> </li>
                                    <li class="list-group-item border-0 mb-2"> <a href="javascript:void(0);"
                                            class="border-0">
                                            <div class="d-flex align-items-top"> <img
                                                    class="avatar avatar-md me-3 my-auto"
                                                    src="../assets/images/faces/7.jpg" alt="Image description">
                                                <div class="mt-0">
                                                    <p class="mb-1 fw-semibold">Manuel Labor</p>
                                                    <p class="mb-0 fs-11 text-success">User ID: #4231</p>
                                                </div> <span class="ms-auto fs-12"> <span
                                                        class="float-end text-muted fw-semibold">24 Mar 2022</span>
                                                </span>
                                            </div>
                                        </a> </li>
                                    <li class="list-group-item border-0 mb-2"> <a href="javascript:void(0);"
                                            class="border-0">
                                            <div class="d-flex align-items-top"> <img
                                                    class="avatar avatar-md me-3 my-auto"
                                                    src="../assets/images/faces/9.jpg" alt="Image description">
                                                <div class="mt-0">
                                                    <p class="mb-1 fw-semibold">Hercules Bing</p>
                                                    <p class="mb-0 fs-11 text-success">User ID: #1754</p>
                                                </div> <span class="ms-auto fs-12"> <span
                                                        class="float-end text-muted fw-semibold">18 Mar 2022</span>
                                                </span>
                                            </div>
                                        </a> </li>
                                    <li class="list-group-item border-0"> <a href="javascript:void(0);"
                                            class="border-0">
                                            <div class="d-flex align-items-top"> <img
                                                    class="avatar avatar-md me-3 my-auto"
                                                    src="../assets/images/faces/11.jpg" alt="Image description">
                                                <div class="mt-0">
                                                    <p class="mb-1 fw-semibold">Manuel Labor</p>
                                                    <p class="mb-0 fs-11 text-success">User ID: #1345</p>
                                                </div> <span class="ms-auto fs-12"> <span
                                                        class="float-end text-muted fw-semibold">15 Mar 2022</span>
                                                </span>
                                            </div>
                                        </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Billing</div>
                                <div class="tab-menu-heading border-0 p-0 ms-auto">
                                    <div class="tabs-menu-billing my-1">
                                        <ul class="nav panel-tabs-billing">
                                            <li class=""><a href="#Invoice" data-bs-toggle="tab"
                                                    class="active">Invoices</a></li>
                                            <li><a href="#Revenue" data-bs-toggle="tab">Revenue</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active border-0 p-0" id="Invoice">
                                        <ul class="list-group border-0 py-2 my-1">
                                            <li class="list-group-item align-items-start border-0 mb-2"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <div> <span class="badge bg-info me-3">Processing</span> </div>
                                                        <div class="billing-invoice-details"> <span
                                                                class="mb-0 fw-semibold me-2">Invoice #A12-005 _ <span
                                                                    class="fs-12 ">$1,938</span></span> <span
                                                                class="small text-muted fs-11 d-block">Nov
                                                                24,2022</span> </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item align-items-start border-0 mb-2"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <div> <span class="badge bg-success me-3">Sent</span> </div>
                                                        <div class="billing-invoice-details"> <span
                                                                class="mb-0 fw-semibold me-2">Invoice #A12-006 _ <span
                                                                    class="fs-12">$1,098</span></span> <span
                                                                class="small text-muted fs-11 d-block">Nov
                                                                28,2022</span> </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item align-items-start border-0 mb-2"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <div> <span class="badge bg-warning me-3">Pending</span> </div>
                                                        <div class="billing-invoice-details"> <span
                                                                class="mb-0 fw-semibold me-2">Invoice #A12-007 _ <span
                                                                    class="fs-12 ">$3,672</span></span> <span
                                                                class="small text-muted fs-11 d-block">Dec
                                                                20,2022</span> </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item align-items-start border-0 mb-2"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <div> <span class="badge bg-info me-3">Processing</span> </div>
                                                        <div class="billing-invoice-details"> <span
                                                                class="mb-0 fw-semibold me-2">Invoice #A12-008 _ <span
                                                                    class="fs-12 ">$4,362</span></span> <span
                                                                class="small text-muted fs-11 d-block">Dec
                                                                16,2022</span> </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item align-items-start border-0 mb-2"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <div> <span class="badge bg-success me-3">Sent</span> </div>
                                                        <div class="billing-invoice-details"> <span
                                                                class="mb-0 fw-semibold me-2">Invoice #A12-009 _ <span
                                                                    class="fs-12 ">$2,389</span></span> <span
                                                                class="small text-muted fs-11 d-block">Dec
                                                                10,2022</span> </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item align-items-start border-0"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <div> <span class="badge bg-success me-3">Sent</span> </div>
                                                        <div class="billing-invoice-details"> <span
                                                                class="mb-0 fw-semibold me-2">Invoice #A12-002 _ <span
                                                                    class="fs-12 ">$4,390</span></span> <span
                                                                class="small text-muted fs-11 d-block">Nov
                                                                30,2022</span> </div>
                                                    </div>
                                                </a> </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="Revenue">
                                        <ul class="list-group border-0 py-2">
                                            <li class="list-group-item align-items-start border-0 mb-1"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <p class="mb-0 fw-semibold">Order Picking</p>
                                                        <p class="mb-0 fw-semibold text-success fs-14">+$3,876</p>
                                                    </div>
                                                    <div class="d-flex w-100 justify-content-between"> <span
                                                            class="text-muted fs-12"><i
                                                                class="ri-arrow-up-fill align-middle text-success me-1"></i>
                                                            <span class="text-success me-2">03%</span></span> <span
                                                            class="text-muted  fs-11">5 days ago</span> </div>
                                                </a> </li>
                                            <li class="list-group-item flex-column align-items-start border-0 mb-1"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <p class="mb-0 fw-semibold">Storage</p>
                                                        <p class="mb-0 fw-semibold text-danger fs-14">-$2,178</p>
                                                    </div>
                                                    <div class="d-flex w-100 justify-content-between"> <span
                                                            class="text-muted  fs-12"><i
                                                                class="ri-arrow-down-fill align-middle text-danger me-1"></i><span
                                                                class="text-danger"> 16%</span></span> <span
                                                            class="text-muted  fs-11">2 days ago</span> </div>
                                                </a> </li>
                                            <li class="list-group-item flex-column align-items-start border-0 mb-1"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <p class="mb-0 fw-semibold">Shipping</p>
                                                        <p class="mb-0 fw-semibold text-success fs-14">+$1,367</p>
                                                    </div>
                                                    <div class="d-flex w-100 justify-content-between"> <span
                                                            class="text-muted  fs-12"><i
                                                                class="ri-arrow-up-fill align-middle text-success me-1"></i><span
                                                                class="text-success"> 06%</span></span> <span
                                                            class="text-muted  fs-11">1 days ago</span> </div>
                                                </a> </li>
                                            <li class="list-group-item flex-column align-items-start border-0 mb-1"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <p class="mb-0 fw-semibold">Receiving</p>
                                                        <p class="mb-0 fw-semibold text-danger fs-14">-$678</p>
                                                    </div>
                                                    <div class="d-flex w-100 justify-content-between"> <span
                                                            class="text-muted  fs-12"><i
                                                                class="ri-arrow-down-fill align-middle text-danger me-1"></i><span
                                                                class="text-danger"> 25%</span></span> <span
                                                            class="text-muted  fs-11">10 days ago</span> </div>
                                                </a> </li>
                                            <li class="list-group-item flex-column align-items-start border-0 mb-1"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <p class="mb-0 fw-semibold">Review</p>
                                                        <p class="mb-0 fw-semibold text-success fs-14">+$578</p>
                                                    </div>
                                                    <div class="d-flex w-100 justify-content-between"> <span
                                                            class="text-muted  fs-12"><i
                                                                class="ri-arrow-up-fill align-middle text-success me-1"></i><span
                                                                class="text-success"> 55%</span></span> <span
                                                            class="text-muted  fs-11">11 days ago</span> </div>
                                                </a> </li>
                                            <li class="list-group-item flex-column align-items-start border-0 mb-0"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <p class="mb-0 fw-semibold">Profit</p>
                                                        <p class="mb-0 fw-semibold text-success fs-14">+$27,215</p>
                                                    </div>
                                                    <div class="d-flex w-100 justify-content-between"> <span
                                                            class="text-muted fs-12"><i
                                                                class="ri-arrow-up-fill align-middle text-success me-1"></i><span
                                                                class="text-success"> 32%</span></span> <span
                                                            class="text-muted fs-11">11 days ago</span> </div>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Sale Value </div>
                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i
                                            class="fe fe-more-vertical"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-0 px-2">
                                <div id="sale-value" class="p-3"></div>
                                <div class="row pt-4">
                                    <div class="col-xl-12 border-bottom pb-3 text-center d-flex flex-wrap"><span
                                            class="fw-semibold ms-2 text-primary px-4">60% Increase in sale value since
                                            last week</span></div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 border-end p-3 text-center">
                                        <p class="mb-1">Sale Items</p>
                                        <h5 class="mb-1 fw-semibold">567</h5>
                                        <p class="fs-11 text-muted mb-0">Increased<span class="text-success ms-2"><i
                                                    class="ri-arrow-up-s-line me-2 fw-bold align-middle d-inline-block"></i><span
                                                    class="badge bg-success-transparent text-success fs-11">0.9%</span></span>
                                        </p>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 p-3 text-center">
                                        <p class="mb-1">Sale Revenue</p>
                                        <h5 class="mb-1 fw-semibold">$11,197</h5>
                                        <p class="fs-11 text-muted mb-0">Profit<span class="text-success ms-2"><i
                                                    class="ri-arrow-down-s-line me-2 fw-bold align-middle d-inline-block"></i><span
                                                    class="badge bg-success-transparent text-success fs-11">0.15%</span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Profitable Categories</div>
                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i
                                            class="fe fe-more-vertical"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group mb-0">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"> <span
                                                    class="avatar avatar-sm bg-light text-default fw-semibold"> 1
                                                </span> </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-semibold">Clothing</p>
                                            </div>
                                            <div> <span class="text-success">$123.45M</span> </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"> <span
                                                    class="avatar avatar-sm bg-light text-default fw-semibold"> 2
                                                </span> </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-semibold">Electronics</p>
                                            </div>
                                            <div> <span class="text-success">$765.89K</span> </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"> <span
                                                    class="avatar avatar-sm bg-light text-default fw-semibold"> 3
                                                </span> </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-semibold">Grocery</p>
                                            </div>
                                            <div> <span class="text-success">$289.00M</span> </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"> <span
                                                    class="avatar avatar-sm bg-light text-default fw-semibold"> 4
                                                </span> </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-semibold">Mobiles</p>
                                            </div>
                                            <div> <span class="text-success">$662.97K</span> </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"> <span
                                                    class="avatar avatar-sm bg-light text-default fw-semibold"> 5
                                                </span> </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-semibold">Kitchen Appliances</p>
                                            </div>
                                            <div> <span class="text-success">$1.2B</span> </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"> <span
                                                    class="avatar avatar-sm bg-light text-default fw-semibold"> 6
                                                </span> </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-semibold">Automobiles</p>
                                            </div>
                                            <div> <span class="text-success">$109.23k</span> </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item text-center"> <button type="button"
                                            class="btn btn-sm btn-primary-light btn-wave">See All Activity</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-4 -->
                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Orders </div>
                                <div class="d-flex flex-wrap">
                                    <div class="me-3 my-1"> <input class="form-control form-control-sm" type="text"
                                            placeholder="Search Here" aria-label=".form-control-sm example"> </div>
                                    <div class="dropdown m-1"> <a href="javascript:void(0);"
                                            class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                            data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col"> <span> <input class="form-check-input" type="checkbox"
                                                            id="order_All" value="" aria-label="..."> </span> </th>
                                                <th scope="col">Order Id </th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Ordered Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <span> <input class="form-check-input" type="checkbox" id="order_1"
                                                            value="" aria-label="..."> </span> </td>
                                                <td> <span class="text-success fw-semibold">#1537890</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                                    src="../assets/images/faces/15.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="fs-14">Simon Cowall</div>
                                                    </div>
                                                </td>
                                                <td> 1 </td>
                                                <td> <span class="fw-semibold fs-14">$4320.29</span> </td>
                                                <td> <span class="badge bg-success-transparent">Shipped</span> </td>
                                                <td> <span class="text-muted">25,Nov 2022</span> </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <span> <input class="form-check-input" type="checkbox" id="order_2"
                                                            value="" aria-label="..."> </span> </td>
                                                <td> <span class="text-success fw-semibold">#1539078</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                                    src="../assets/images/faces/4.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="fs-14">Meisha Kerr</div>
                                                    </div>
                                                </td>
                                                <td> 1 </td>
                                                <td> <span class="fw-semibold fs-14">$6745.99</span> </td>
                                                <td> <span class="badge bg-danger-transparent">Cancelled</span> </td>
                                                <td> <span class="text-muted">29,Nov 2022</span> </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <span> <input class="form-check-input" type="checkbox" id="order_3"
                                                            value="" aria-label="..."> </span> </td>
                                                <td> <span class="text-success fw-semibold">#1539832</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                                    src="../assets/images/faces/5.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="fs-14">Jessica</div>
                                                    </div>
                                                </td>
                                                <td> 2 </td>
                                                <td> <span class="fw-semibold fs-14">$1176.89</span> </td>
                                                <td> <span class="badge bg-info-transparent">Under Process</span> </td>
                                                <td> <span class="text-muted">04,Dec 2022</span> </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <span> <input class="form-check-input" type="checkbox" id="order_4"
                                                            value="" aria-label="..."> </span> </td>
                                                <td> <span class="text-success fw-semibold">#1539832</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                                    src="../assets/images/faces/6.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="fs-14">Amanda B</div>
                                                    </div>
                                                </td>
                                                <td> 1 </td>
                                                <td> <span class="fw-semibold fs-14">$1899.99</span> </td>
                                                <td> <span class="badge bg-success-transparent">Shipped</span> </td>
                                                <td> <span class="text-muted">10,Dec 2022</span> </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <span> <input class="form-check-input" type="checkbox" id="order_5"
                                                            value="" aria-label="..."> </span> </td>
                                                <td> <span class="text-success fw-semibold">#1538267</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                                    src="../assets/images/faces/11.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="fs-14">Jason Stathman</div>
                                                    </div>
                                                </td>
                                                <td> 1 </td>
                                                <td> <span class="fw-semibold fs-14">$1867.29</span> </td>
                                                <td> <span class="badge bg-warning-transparent">Pending</span> </td>
                                                <td> <span class="text-muted">18,Dec 2022</span> </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <span> <input class="form-check-input" type="checkbox" id="order_6"
                                                            value="" aria-label="..."> </span> </td>
                                                <td> <span class="text-success fw-semibold">#1537890</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                                    src="../assets/images/faces/13.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="fs-14">Khabib Hussain</div>
                                                    </div>
                                                </td>
                                                <td> 1 </td>
                                                <td> <span class="fw-semibold fs-14">$2439.99</span> </td>
                                                <td> <span class="badge bg-success-transparent">Success</span> </td>
                                                <td> <span class="text-muted">24,Dec 2022</span> </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"> <a class="page-link"
                                                        href="javascript:void(0);"> Prev </a> </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">2</a></li>
                                                <li class="page-item"> <a class="page-link text-primary"
                                                        href="javascript:void(0);"> next </a> </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-5 -->
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
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script> <!-- JSVector Maps JS -->
    <script src="../assets/libs/jsvectormap/js/jsvectormap.min.js"></script> <!-- JSVector Maps MapsJS -->
    <script src="../assets/libs/jsvectormap/maps/world-merc.js"></script> <!-- Date & Time Picker JS -->
    <script src="../assets/libs/flatpickr/flatpickr.min.js"></script> <!-- Sales-Dashboard JS -->
    <script src="../assets/js/sales-dashboard.js"></script> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
</body>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 07:35:16 GMT -->

</html>