@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')




        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Swiper</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Advanced Ui</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Swiper</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Basic Swiper </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-basic">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-27.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-26.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-25.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Swiper With Navigation </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-navigation">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-29.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-28.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-30.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Swiper with Pagination </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper pagination">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-32.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-31.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-33.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Dynamic Pagination </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper pagination-dynamic">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-21.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-17.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-16.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Pagination With Progress </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper pagination-progress">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-12.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-8.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-5.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Pagination Fraction </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper pagination-fraction">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-16.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-30.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-31.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Custom Paginatioin </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper custom-pagination">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-25.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-5.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-33.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Scrollbar Swiper </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper scrollbar-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-30.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-28.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-29.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Vertical Swiper </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper vertical swiper-vertical">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-8.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-32.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-17.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Mouse Wheel Control </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper vertical vertical-mouse-control">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-28.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-30.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-32.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Keyboard Control </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper keyboard-control">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-31.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-12.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-8.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Nested Swiper</div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-horizontal1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../assets/images/media/media-30.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper vertical swiper-vertical1">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img
                                                            src="../assets/images/media/media-25.jpg" alt=""></div>
                                                    <div class="swiper-slide"><img
                                                            src="../assets/images/media/media-31.jpg" alt=""></div>
                                                    <div class="swiper-slide"><img
                                                            src="../assets/images/media/media-32.jpg" alt=""></div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-28.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="../assets/images/media/media-29.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Effect Cube </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-effect-cube">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-62.jpg"
                                                alt="img"> </div>
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-63.jpg"
                                                alt="img"> </div>
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-64.jpg"
                                                alt="img"> </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Effect Fade </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-fade">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-18.jpg"
                                                alt="img"> </div>
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-19.jpg"
                                                alt="img"> </div>
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-20.jpg"
                                                alt="img"> </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Effect Flip </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-flip">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-20.jpg"
                                                alt="img"> </div>
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-62.jpg"
                                                alt="img"> </div>
                                        <div class="swiper-slide"> <img src="../assets/images/media/media-63.jpg"
                                                alt="img"> </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Effect Coverflow </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-overflow">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-40.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-41.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-42.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-43.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-44.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-59.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-46.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-61.jpg" alt="img"> </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Thumbs Gallery </div>
                            </div>
                            <div class="card-body">
                                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                    class="swiper swiper-preview">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid rounded"
                                                src="../assets/images/media/media-1.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid rounded"
                                                src="../assets/images/media/media-2.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid rounded"
                                                src="../assets/images/media/media-3.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid rounded"
                                                src="../assets/images/media/media-6.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid rounded"
                                                src="../assets/images/media/media-7.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid rounded"
                                                src="../assets/images/media/media-10.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid rounded"
                                                src="../assets/images/media/media-11.jpg" alt="img"> </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="swiper swiper-view">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-1.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-2.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-3.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-6.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-7.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-10.jpg" alt="img"> </div>
                                        <div class="swiper-slide"> <img class="img-fluid"
                                                src="../assets/images/media/media-11.jpg" alt="img"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-3 -->
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