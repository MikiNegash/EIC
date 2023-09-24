
@include('layout.link')
<body>
    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')



        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Select2</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Select2</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <div class="alert alert-solid-secondary alert-dismissible fs-15 fade show mb-4"> We Placed <strong
                        class="text-fixed-black">Select2</strong> only in this page by using <strong
                        class="text-fixed-black">jquery</strong> cdn link. <button type="button" class="btn-close"
                        data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button> </div>
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Basic Select2 </div>
                            </div>
                            <div class="card-body"> <select class="js-example-basic-single" name="state">
                                    <option value="s-1">Selection-1</option>
                                    <option value="s-2">Selection-2</option>
                                    <option value="s-3">Selection-3</option>
                                    <option value="s-4">Selection-4</option>
                                    <option value="s-5">Selection-5</option>
                                </select> </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-titlte"> Multiple Select </div>
                            </div>
                            <div class="card-body"> <select class="js-example-basic-multiple" name="states[]"
                                    multiple="multiple">
                                    <option value="m-1" selected>Multiple-1</option>
                                    <option value="m-2">Multiple-2</option>
                                    <option value="m-3">Multiple-3</option>
                                    <option value="m-4">Multiple-4</option>
                                    <option value="m-5">Multiple-5</option>
                                </select> </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Single Select With Placeholder </div>
                            </div>
                            <div class="card-body">
                                <select class="js-example-placeholder-single js-states form-control">
                                    <option value="st-1" selected>Texas</option>
                                    <option value="st-2">Georgia</option>
                                    <option value="st-3">California</option>
                                    <option value="st-4">Washington D.C</option>
                                    <option value="st-5">Virginia</option>
                                </select>


                            </div>
                        </div>
                    </div>




                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Multiple Select With Placeholder </div>
                            </div>
                            <div class="card-body"> <select class="js-example-placeholder-multiple js-states"
                                    multiple="multiple">
                                    <option value="fr-1">Appple</option>
                                    <option value="fr-2">Mango</option>
                                    <option value="fr-3">Orange</option>
                                    <option value="fr-4">Guava</option>
                                    <option value="fr-5">Pineapple</option>
                                </select> </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Templating </div>
                            </div>
                            <div class="card-body"> <select class="js-example-templating js-persons form-control">
                                    <option value="p-1">Andrew</option>
                                    <option value="p-2">Maya</option>
                                    <option value="p-3">Brodus Axel</option>
                                    <option value="p-4">Goldhens</option>
                                    <option value="p-5">Angelina</option>
                                </select> </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Templating Selection </div>
                            </div>
                            <div class="card-body"> <select class="select2-client-search form-control">
                                    <option value="p-1" selected>Andrew</option>
                                    <option value="p-2">Maya</option>
                                    <option value="p-3">Brodus Axel</option>
                                    <option value="p-4">Goldhens</option>
                                    <option value="p-5">Angelina</option>
                                </select> </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Max Selections Limiting </div>
                            </div>
                            <div class="card-body"> <select class="js-example-basic-multiple-limit-max form-control"
                                    multiple="multiple">
                                    <option value="p-1" selected>Andrew</option>
                                    <option value="p-2" selected>Maya</option>
                                    <option value="p-3">Brodus Axel</option>
                                    <option value="p-4">Goldhens</option>
                                    <option value="p-5">Angelina</option>
                                </select> </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Disabling a Select2 control </div>
                            </div>
                            <div class="card-body vstack gap-3"> <select class="js-example-disabled mb-3" name="state">
                                    <option value="s-1">Selection-1</option>
                                    <option value="s-2">Selection-2</option>
                                    <option value="s-3">Selection-3</option>
                                    <option value="s-4">Selection-4</option>
                                    <option value="s-5">Selection-5</option>
                                </select> <select class="js-example-disabled-multi" name="state" multiple="multiple">
                                    <option value="s-1" selected>Selection-1</option>
                                    <option value="s-2">Selection-2</option>
                                    <option value="s-3">Selection-3</option>
                                    <option value="s-4">Selection-4</option>
                                    <option value="s-5">Selection-5</option>
                                </select>
                                <div> <button class="btn btn-primary-light js-programmatic-enable">Enable</button>
                                    <button class="btn btn-primary js-programmatic-disable">Disable</button> </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
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