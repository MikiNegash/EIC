@include('layout.link')
<body>
    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')


        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Range Slider</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Form Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Range Slider</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Default Range </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <input type="range" class="form-range" id="customRange1"> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;input type="range" class="form-range" id="customRange1"&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Disabled Range </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <input type="range" class="form-range" id="disabledRange" disabled>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;input type="range" class="form-range" id="disabledRange" disabled&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Range With Min and Max Values </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <input type="range" class="form-range" min="0" max="5"
                                    id="customRange2"> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;input type="range" class="form-range" min="0" max="5" id="customRange2"&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Range With Steps </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <input type="range" class="form-range" min="0" max="5" step="0.5"
                                    id="customRange3"> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3"&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <h6 class="mb-3">noUiSlider:</h6>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Default-Styling </div>
                            </div>
                            <div class="card-body">
                                <div id="slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Fit Handles </div>
                            </div>
                            <div class="card-body">
                                <div id="slider-fit"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Rounded Styling </div>
                            </div>
                            <div class="card-body">
                                <div id="slider-round"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Square Styling </div>
                            </div>
                            <div class="card-body">
                                <div id="slider-square"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Color Picker Slider</div>
                            </div>
                            <div class="card-body">
                                <div class="sliders" id="color1"></div>
                                <div class="sliders" id="color2"></div>
                                <div class="sliders" id="color3"></div>
                                <div id="result"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Locking Sliders</div>
                                </div>
                                <div class="card-body">
                                    <div id="slider1"></div>
                                    <div id="slider1-span" class="my-1"></div>
                                    <div id="slider2"></div>
                                    <div id="slider2-span" class="my-1"></div>
                                    <div id="slider3"></div>
                                    <div id="slider3-span" class="my-1"></div> <button id="lockbutton"
                                        class="btn btn-sm btn-primary float-end">Lock</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Merging tooltips slider</div>
                                </div>
                                <div class="card-body">
                                    <div id="merging-tooltips"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Non Linear Slider</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="nonlinear"></div>
                                        <div id="lower-value" class="mt-5"></div>
                                        <div id="upper-value" class="mt-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Sliding Handles Tooltips</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider-hide"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-3 -->
                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-10">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Colored Connect Elements</div>
                            </div>
                            <div class="card-body">
                                <div class="slider" id="color-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Slider Toggle</div>
                            </div>
                            <div class="card-body">
                                <div id="slider-toggle"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-4 -->
                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Toggle Movement By Clicking Pips</div>
                            </div>
                            <div class="card-body pb-5">
                                <div id="slider-pips"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Soft Limits</div>
                            </div>
                            <div class="card-body pb-5">
                                <div id="soft"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-5 -->
                <!-- Start:: row-6 -->
                <h6 class="mb-3">noUiSlider Colors:</h6>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Primary </div>
                            </div>
                            <div class="card-body">
                                <div id="primary-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Secondary </div>
                            </div>
                            <div class="card-body">
                                <div id="secondary-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Warning </div>
                            </div>
                            <div class="card-body">
                                <div id="warning-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Info </div>
                            </div>
                            <div class="card-body">
                                <div id="info-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Success </div>
                            </div>
                            <div class="card-body">
                                <div id="success-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Danger </div>
                            </div>
                            <div class="card-body">
                                <div id="danger-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-6 -->
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
        </div> 
        
        
        
        @include('layout.footer')
