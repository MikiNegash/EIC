@include('layout.link')

<body>
    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')



        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Helpers</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Utilities</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Helpers</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Colors With backgrounds </div>
                            </div>
                            <div class="card-body">
                                <div class="text-bg-primary p-3">Primary with contrasting color</div>
                                <div class="text-bg-secondary p-3">Secondary with contrasting color</div>
                                <div class="text-bg-success p-3">Success with contrasting color</div>
                                <div class="text-bg-danger p-3">Danger with contrasting color</div>
                                <div class="text-bg-warning p-3">Warning with contrasting color</div>
                                <div class="text-bg-info p-3">Info with contrasting color</div>
                                <div class="text-bg-light p-3 text-default">Light with contrasting color</div>
                                <div class="text-bg-dark p-3 text-white">Dark with contrasting color</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">With Other Components</div>
                            </div>
                            <div class="card-body">
                                <h6 class="fw-semibold mb-3">Badges:</h6> <span
                                    class="badge text-bg-primary">Primary</span> <span
                                    class="badge text-bg-info mb-4">Info</span>
                                <h6 class="fw-semibold mb-3">cards:</h6>
                                <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                    <div class="card-header border-bottom-0">
                                        <div class="card-title"> Header </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card text-bg-info mb-3" style="max-width: 18rem;">
                                    <div class="card-header border-bottom-0">
                                        <div class="card-title"> Header </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Card With Stretched Links </div>
                            </div>
                            <div class="card-body"> <img class="bd-placeholder-img card-img-top card-img"
                                    src="../assets/images/media/media-4.jpg" alt="...">
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Card with stretched links</h5>
                                    <p class="card-text"> <a href="#" class="stretched-link text-danger"
                                            style="position: relative;">Stretched link will not work here, because
                                            <code>position: relative</code> is added to the link</a> </p>
                                    <p class="card-text bg-light mb-0 p-1 rounded" style="transform: rotate(0);"> This
                                        <a href="#" class="text-warning stretched-link">stretched link</a> will only be
                                        spread over the <code>p</code>-tag, because a transform is applied to it. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Clearfix </div>
                            </div>
                            <div class="card-body">
                                <div class="bg-light clearfix"> <button type="button"
                                        class="btn btn-primary float-start m-1">Example Button floated left</button>
                                    <button type="button" class="btn btn-primary float-end m-1">Example Button floated
                                        right</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Colored links </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-evenly flex-wrap"> <a href="#"
                                        class="link-primary fw-semibold fs-15 p-1">Primary</a> <a href="#"
                                        class="link-secondary fw-semibold fs-15 p-1">Secondary</a> <a href="#"
                                        class="link-success fw-semibold fs-15 p-1">Success</a> <a href="#"
                                        class="link-danger fw-semibold fs-15 p-1">Danger</a> <a href="#"
                                        class="link-warning fw-semibold fs-15 p-1">Warning</a> <a href="#"
                                        class="link-info fw-semibold fs-15 p-1">Info</a> <a href="#"
                                        class="link-light fw-semibold fs-15 p-1">Light</a> <a href="#"
                                        class="link-dark fw-semibold fs-15 p-1">Dark</a> </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Ratio </div>
                            </div>
                            <div class="card-body">
                                <div class="ratio ratio-16x9"> <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/-lDlbQ7DiCI" title="YouTube video player"
                                        style="border:0px"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Aspect ratios </div>
                                    </div>
                                    <div class="card-body bd-example-ratios">
                                        <div class="ratio ratio-1x1">
                                            <div class="d-flex align-items-center justify-content-center">1x1</div>
                                        </div>
                                        <div class="ratio ratio-4x3">
                                            <div class="d-flex align-items-center justify-content-center">4x3</div>
                                        </div>
                                        <div class="ratio ratio-16x9">
                                            <div class="d-flex align-items-center justify-content-center">16x9</div>
                                        </div>
                                        <div class="ratio ratio-21x9">
                                            <div class="d-flex align-items-center justify-content-center">21x9</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Custom ratios </div>
                                    </div>
                                    <div class="card-body bd-example-ratios bd-example-ratios-breakpoint">
                                        <div class="ratio" style="--bs-aspect-ratio: 50%;">
                                            <div class="d-flex align-items-center justify-content-center">2x1</div>
                                        </div>
                                        <div class="ratio ratio-4x3">
                                            <div class="d-flex align-items-center justify-content-center">4x3, then 2x1
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-3 -->
                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Vertical Stacking </div>
                            </div>
                            <div class="card-body">
                                <div class="vstack gap-3">
                                    <div class="bg-light border p-1 px-2 rounded">First item</div>
                                    <div class="bg-light border p-1 px-2 rounded">Second item</div>
                                    <div class="bg-light border p-1 px-2 rounded">Third item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Horizontal Stacking </div>
                            </div>
                            <div class="card-body">
                                <div class="hstack gap-3 mb-3">
                                    <div class="bg-light border p-1 px-2 rounded">First item</div>
                                    <div class="bg-light border p-1 px-2 rounded">Second item</div>
                                    <div class="bg-light border p-1 px-2 rounded">Third item</div>
                                </div>
                                <div class="hstack gap-3 mb-3">
                                    <div class="bg-light border p-1 px-2 rounded">First item</div>
                                    <div class="bg-light border ms-auto p-1 px-2 rounded">Second item</div>
                                    <div class="bg-light border p-1 px-2 rounded">Third item</div>
                                </div>
                                <div class="hstack gap-3">
                                    <div class="bg-light border p-1 px-2 rounded">First item</div>
                                    <div class="bg-light border ms-auto p-1 px-2 rounded">Second item</div>
                                    <div class="vr"></div>
                                    <div class="bg-light border p-1 px-2 rounded">Third item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-4 -->
                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Vstack For Buttons </div>
                            </div>
                            <div class="card-body">
                                <div class="vstack gap-2 col-md-5 mx-auto"> <button type="button"
                                        class="btn btn-primary">Save changes</button> <button type="button"
                                        class="btn btn-outline-primary">Cancel</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Inline Form With Hstack </div>
                            </div>
                            <div class="card-body">
                                <div class="hstack gap-3"> <input class="form-control me-auto" type="text"
                                        placeholder="Add your item here..." aria-label="Add your item here..."> <button
                                        type="button" class="btn btn-primary">Submit</button>
                                    <div class="vr"></div> <button type="button"
                                        class="btn btn-outline-danger">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Text Truncation </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2 text-truncate"> This text is quite long, and will be truncated
                                        once displayed. </div>
                                </div> <!-- Inline level --> <span class="d-inline-block text-truncate"
                                    style="max-width: 150px;"> This text is quite long, and will be truncated once
                                    displayed. </span>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-5 -->
            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
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