@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')

        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Timeline</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Timeline</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <div class="container">
                    <ul class="timeline list-unstyled">
                        <li>
                            <div class="timeline-time text-end"> <span class="date">FRIDAY</span> <span
                                    class="time d-inline-block">02:31</span> </div>
                            <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                            <div class="timeline-body">
                                <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                            alt="avatar" src="../assets/images/faces/4.jpg"> </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-sm-0 mt-2">
                                                <p class="mb-0 fs-14 fw-semibold">Emperio</p>
                                                <p class="mb-0 text-muted">Project assigned by the manager all<span
                                                        class="badge bg-primary-transparent fw-semibold mx-1">files</span>and<span
                                                        class="badge bg-primary-transparent fw-semibold mx-1">folders</span>were
                                                    included</p>
                                            </div>
                                            <div class="ms-auto"> <span
                                                    class="float-end badge bg-light text-muted timeline-badge"> 24,Oct
                                                    2022 </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-time text-end"> <span class="date">MONDAY</span> <span
                                    class="time d-inline-block">08:47</span> </div>
                            <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                            <div class="timeline-body">
                                <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md offline me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                            alt="avatar" src="../assets/images/faces/15.jpg"> </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-sm-0 mt-2">
                                                <p class="mb-0 fs-14 fw-semibold">Dwayne Bero</p>
                                                <p class="mb-0 text-muted">Admin and other team accepted your work
                                                    request</p>
                                            </div>
                                            <div class="ms-auto"> <span
                                                    class="float-end badge bg-light text-muted timeline-badge"> 30,Sep
                                                    2022 </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-time text-end"> <span class="date">YESTERDAY</span> <span
                                    class="time d-inline-block">18:43</span> </div>
                            <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                            <div class="timeline-body">
                                <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md offline me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                            alt="avatar" src="../assets/images/faces/11.jpg"> </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-sm-0 mt-2">
                                                <p class="mb-0 fs-14 fw-semibold">Alister Chuk</p>
                                                <p class="mb-0 text-muted">Temporary data will be <span
                                                        class="badge bg-danger-transparent fw-semibold mx-1">deleted</span>
                                                    once dedicated time complated</p>
                                            </div>
                                            <div class="ms-auto"> <span
                                                    class="float-end badge bg-light text-muted timeline-badge"> 11,Sep
                                                    2021 </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-time text-end"> <span class="date">TODAY</span> <span
                                    class="time d-inline-block">03:18</span> </div>
                            <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                            <div class="timeline-body">
                                <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                            alt="avatar" src="../assets/images/faces/5.jpg"> </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-sm-0 mt-2">
                                                <p class="mb-0 fs-14 fw-semibold">Melissa Blue</p>
                                                <p class="mb-0 text-muted">Approved date for sanction of loan is
                                                    verified <i
                                                        class="ri-checkbox-circle-line text-success ms-1 fs-16 align-middle"></i>
                                                </p>
                                            </div>
                                            <div class="ms-auto"> <span
                                                    class="float-end badge bg-light text-muted timeline-badge"> 18,Sep
                                                    2021 </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-time text-end"> <span class="date">TODAY</span> <span
                                    class="time d-inline-block">12:24</span> </div>
                            <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                            <div class="timeline-body">
                                <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                            alt="avatar" src="../assets/images/faces/10.jpg"> </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-sm-0 mt-2">
                                                <p class="mb-0 fs-14 fw-semibold">Zack Slayer</p>
                                                <p class="mb-0 text-muted">Social network accounts are at risk check
                                                    your <span
                                                        class="badge bg-success-transparent fw-semibold mx-1">login</span>
                                                    details</p>
                                            </div>
                                            <div class="ms-auto"> <span
                                                    class="float-end badge bg-light text-muted timeline-badge"> 15,Sep
                                                    2021 </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-time text-end"> <span class="date">TODAY</span> <span
                                    class="time d-inline-block">04:11</span> </div>
                            <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                            <div class="timeline-body">
                                <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                            alt="avatar" src="../assets/images/faces/2.jpg"> </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-sm-0 mt-2">
                                                <p class="mb-0 fs-14 fw-semibold">Monika Karen</p>
                                                <p class="mb-0 text-muted">Changed the password of gmail 4 hrs ago.
                                                    <span class="badge bg-secondary">Update</span></p>
                                            </div>
                                            <div class="ms-auto"> <span
                                                    class="float-end badge bg-light text-muted timeline-badge"> 12,Sep
                                                    2021 </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="timeline-loadmore-container"> <button
                            class="btn btn-info-transparent btn-loader mx-auto"> <span class="me-2">Loading</span> <span
                                class="loading"><i class="ri-loader-4-line fs-16"></i></span> </button> </div>
                </div>
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
        
        @include('layout.footer')
        