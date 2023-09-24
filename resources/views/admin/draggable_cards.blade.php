@include('layout.link')
<body>

    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')




        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Draggable Cards</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Advanced Ui</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-6" id="draggable-left">
                        <div class="card custom-card card-bg-primary"> <a href="javascript:void(0);"
                                class="card-anchor"></a>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0 text-center">
                                    <h6>The best and most beautiful things in the world cannot be seen or even touched —
                                        they must be felt with the heart..</h6>
                                    <footer class="blockquote-footer mt-3 fs-14 text-fixed-white op-7">Someone famous as
                                        <cite title="Source Title">-Helen Keller</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Card With Fullscreen Button </div> <a
                                    href="javascript:void(0);" data-bs-toggle="card-fullscreen"> <i
                                        class="ri-fullscreen-line"></i> </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-text fw-semibold">FullScreen Card</h6>
                                <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour, or randomised words</p>
                            </div>
                            <div class="card-footer"> <button class="btn btn-primary">Read More</button> </div>
                        </div>
                        <div class="card custom-card bg-dark overlay-card text-fixed-white"> <img
                                src="../assets/images/media/media-35.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay d-flex flex-column p-0">
                                <div class="card-header text-fixed-white">
                                    <div class="card-title"> Image Overlays Are Awesome! </div>
                                </div>
                                <div class="card-body overflow-hidden text-fixed-white">
                                    <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even.</div>
                                    <div class="card-text">Last updated 3 mins ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card"> <a href="javascript:void(0);" class="card-anchor"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="me-3"> <span class="avatar avatar-md"> <img
                                                src="../assets/images/faces/15.jpg" alt="img"> </span> </div>
                                    <div>
                                        <p class="card-text mb-0 fs-14 fw-semibold">Atharva Simon.</p>
                                        <div class="card-title text-muted fs-12 mb-0">Correspondent Professor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card border border-info"> <a href="javascript:void(0);"
                                class="card-anchor"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="me-3"> <span class="avatar avatar-xl"> <img
                                                src="../assets/images/faces/8.jpg" alt="img"> </span> </div>
                                    <div>
                                        <p class="card-text text-info mb-1 fs-14 fw-semibold">Alicia Keys.</p>
                                        <div class="card-title fs-12 mb-1">Department Of Commerce</div>
                                        <div class="card-title text-muted fs-11 mb-0">24 Years, Female</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" id="draggable-right">
                        <div class="card custom-card bg-dark overlay-card"> <img
                                src="../assets/images/media/media-36.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                <div class="card-body text-fixed-white">
                                    <div class="card-text"> Image Overlays Are Awesome! </div>
                                    <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even.</div>
                                    <div class="card-text">Last updated 3 mins ago</div>
                                </div>
                                <div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
                            </div>
                        </div>
                        <div class="card custom-card card-bg-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                src="../assets/images/faces/5.jpg" alt="img"> </span> </div>
                                    <div class="">
                                        <div class="fs-15 fw-semibold">Samantha sid</div>
                                        <p class="mb-0 text-fixed-white op-7 fs-12">In leave for 1 month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Card With Collapse Button </div> <a href="javascript:void(0);"
                                    data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample"> <i
                                        class="ri-arrow-down-s-line fs-18 collapse-open"></i> <i
                                        class="ri-arrow-up-s-line collapse-close fs-18"></i> </a>
                            </div>
                            <div class="collapse show" id="collapseExample">
                                <div class="card-body">
                                    <h6 class="card-text fw-semibold">Collapsible Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words</p>
                                </div>
                                <div class="card-footer"> <button class="btn btn-primary">Read More</button> </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Card With Close Button </div> <a href="javascript:void(0);"
                                    data-bs-toggle="card-remove"> <i class="ri-close-line fs-18"></i> </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-text fw-semibold">Closed Card</h6>
                                <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour, or randomised words</p>
                            </div>
                            <div class="card-footer"> <button class="btn btn-primary">Read More</button> </div>
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
        </div>
        
              
        
        @include('layout.footer')