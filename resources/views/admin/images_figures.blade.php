

@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')

        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Images & Figures</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Ui Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Images & Figures</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Responsive image </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title mb-3">Use <code> .img-fluid </code>class to the img tag to get
                                    responsive image.</p>
                                <div class="text-center"> <img src="../assets/images/media/media-48.jpg"
                                        class="img-fluid" alt="..."> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="../assets/images/media/media-48.jpg" class="img-fluid" alt="..."&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Image With Radius </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title mb-3">Use <code>.rounded</code> class along with
                                    <code>.img-fluid</code> to get border radius.</p>
                                <div class="text-center"> <img src="../assets/images/media/media-49.jpg"
                                        class="img-fluid rounded" alt="..."> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="../assets/images/media/media-49.jpg" class="img-fluid rounded" alt="..."&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Rounded Image </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title mb-3">Use <code>.rounded-pill</code> class to <code>img</code> tag
                                    to get rounded image.</p>
                                <div class="text-center"> <img src="../assets/images/media/media-50.jpg"
                                        class="img-fluid rounded-pill" alt="..."> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="../assets/images/media/media-50.jpg" class="img-fluid rounded-pill" alt="..."&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Image Left Align</div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <img class="rounded float-start"
                                    src="../assets/images/media/media-53.jpg" alt="..."> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;img class="rounded float-start" src="../assets/images/media/media-53.jpg" alt="..."&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Image Center Align</div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <img class="rounded mx-auto d-block"
                                    src="../assets/images/media/media-55.jpg" alt="..."> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;img class="rounded mx-auto d-block" src="../assets/images/media/media-55.jpg" alt="..."&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Image Right Align</div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <img class="rounded float-end"
                                    src="../assets/images/media/media-54.jpg" alt="..."> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;img class="rounded float-end" src="../assets/images/media/media-54.jpg" alt="..."&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Figures </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body d-flex justify-content-between gap-2">
                                <figure class="figure"> <img
                                        class="bd-placeholder-img figure-img img-fluid rounded card-img"
                                        src="../assets/images/media/media-56.jpg" alt="...">
                                    <figcaption class="figure-caption">A caption for the above image. </figcaption>
                                </figure>
                                <figure class="figure float-end"> <img
                                        class="bd-placeholder-img figure-img img-fluid rounded card-img"
                                        src="../assets/images/media/media-57.jpg" alt="...">
                                    <figcaption class="figure-caption text-end">A caption for the above image.
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;figure class="figure"&gt;
    &lt;img class="bd-placeholder-img figure-img img-fluid rounded card-img" src="../assets/images/media/media-56.jpg" alt="..."&gt;
    &lt;figcaption class="figure-caption"&gt;A caption for the above image.
    &lt;/figcaption&gt;
&lt;/figure&gt;
&lt;figure class="figure float-end"&gt;
    &lt;img class="bd-placeholder-img figure-img img-fluid rounded card-img" src="../assets/images/media/media-57.jpg" alt="..."&gt;
    &lt;figcaption class="figure-caption text-end"&gt;A caption for the above image.
    &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Image Thumbnail </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title mb-3">Use <code> .img-thumbnail </code>to give an image a rounded
                                    1px border.</p>
                                <div class="text-center"> <img src="../assets/images/media/media-51.jpg"
                                        class="img-thumbnail" alt="..."> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="../assets/images/media/media-51.jpg" class="img-thumbnail" alt="..."&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Rounded Thumbnail </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title mb-3">Use <code> .rounded-pill </code>along with
                                    <code> .img-thummbnail </code> to get radius.</p>
                                <div class="text-center"> <img src="../assets/images/media/media-52.jpg"
                                        class="img-thumbnail rounded-pill" alt="..."> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="../assets/images/media/media-52.jpg" class="img-thumbnail rounded-pill" alt="..."&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
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