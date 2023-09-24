@include('layout.link')
<body>
    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')

        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">File Uploads</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Form Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">File Uploads</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Bootstrap File Input </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3"> <label for="formFile" class="form-label">Default file input
                                        example</label> <input class="form-control" type="file" id="formFile"> </div>
                                <div class="mb-3"> <label for="formFileMultiple" class="form-label">Multiple files input
                                        example</label> <input class="form-control" type="file" id="formFileMultiple"
                                        multiple=""> </div>
                                <div class="mb-3"> <label for="formFileDisabled" class="form-label">Disabled file input
                                        example</label> <input class="form-control" type="file" id="formFileDisabled"
                                        disabled=""> </div>
                                <div class="mb-3"> <label for="formFileSm" class="form-label">Small file input
                                        example</label> <input class="form-control form-control-sm" id="formFileSm"
                                        type="file"> </div>
                                <div> <label for="formFileLg" class="form-label">Large file input example</label> <input
                                        class="form-control form-control-lg" id="formFileLg" type="file"> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="formFile" class="form-label"&gt;Default file input example&lt;/label&gt;
    &lt;input class="form-control" type="file" id="formFile"&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
    &lt;label for="formFileMultiple" class="form-label"&gt;Multiple files input
        example&lt;/label&gt;
    &lt;input class="form-control" type="file" id="formFileMultiple" multiple=""&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
    &lt;label for="formFileDisabled" class="form-label"&gt;Disabled file input
        example&lt;/label&gt;
    &lt;input class="form-control" type="file" id="formFileDisabled" disabled=""&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
    &lt;label for="formFileSm" class="form-label"&gt;Small file input example&lt;/label&gt;
    &lt;input class="form-control form-control-sm" id="formFileSm" type="file"&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;label for="formFileLg" class="form-label"&gt;Large file input example&lt;/label&gt;
    &lt;input class="form-control form-control-lg" id="formFileLg" type="file"&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <h6 class="mb-3">Filepond:</h6>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Multiple Upload </div>
                                    </div>
                                    <div class="card-body"> <input type="file" class="multiple-filepond" name="filepond"
                                            multiple data-allow-reorder="true" data-max-file-size="3MB"
                                            data-max-files="6"> </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Single Upload </div>
                                    </div>
                                    <div class="card-body"> <input type="file" class="single-fileupload" name="filepond"
                                            accept="image/png, image/jpeg, image/gif"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Dropzone </div>
                            </div>
                            <div class="card-body">
                                <form data-single="true" method="post" action="https://httpbin.org/post"
                                    class="dropzone"></form>
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
