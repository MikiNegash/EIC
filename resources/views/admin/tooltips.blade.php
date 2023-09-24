@include('layout.link')

<body>
    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')


        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Tooltips</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Ui Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tooltips</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Tooltip Directions </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-list"> <button type="button" class="btn btn-primary btn-wave"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"> Tooltip
                                        on top </button> <button type="button" class="btn btn-primary btn-wave"
                                        data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                                        Tooltip on right </button> <button type="button"
                                        class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Tooltip on bottom"> Tooltip on bottom
                                    </button> <button type="button" class="btn btn-primary btn-wave"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                                        Tooltip on left </button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
    data-bs-placement="top" title="Tooltip on top"&gt;
    Tooltip on top
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
        data-bs-placement="right" title="Tooltip on right"&gt;
        Tooltip on right
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
        data-bs-placement="bottom" title="Tooltip on bottom"&gt;
        Tooltip on bottom
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
        data-bs-placement="left" title="Tooltip on left"&gt;
        Tooltip on left
    &lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Colored Tooltips </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-list"> <button type="button" class="btn btn-primary btn-wave"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary"
                                        data-bs-placement="top" title="Primary Tooltip"> Primary Tooltip </button>
                                    <button type="button" class="btn btn-secondary btn-wave" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-secondary" data-bs-placement="right"
                                        title="Secondary Tooltip"> Secondary Tooltip </button> <button type="button"
                                        class="btn btn-warning btn-wave" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-warning" data-bs-placement="bottom"
                                        title="Warning Tooltip"> Warning Tooltip </button> <button type="button"
                                        class="btn btn-info btn-wave" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-info" data-bs-placement="left"
                                        title="Info Tooltip"> Info Tooltip </button> <button type="button"
                                        class="btn btn-success btn-wave" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-success" data-bs-placement="top"
                                        title="Success Tooltip"> Success Tooltip </button> <button type="button"
                                        class="btn btn-danger btn-wave" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-danger" data-bs-placement="bottom"
                                        title="Danger Tooltip"> Danger Tooltip </button> <button type="button"
                                        class="btn btn-light btn-wave" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-light" data-bs-placement="bottom"
                                        title="Light Tooltip"> Light Tooltip </button> <button type="button"
                                        class="btn btn-dark text-white btn-wave" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-dark" data-bs-placement="bottom"
                                        title="Dark Tooltip"> Dark Tooltip </button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary"
        data-bs-placement="top" title="Primary Tooltip"&gt;
        Primary Tooltip
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-secondary"
        data-bs-placement="right" title="Secondary Tooltip"&gt;
        Secondary Tooltip
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-warning btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-warning"
        data-bs-placement="bottom" title="Warning Tooltip"&gt;
        Warning Tooltip
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-info btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-info"
        data-bs-placement="left" title="Info Tooltip"&gt;
        Info Tooltip
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-success btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-success"
        data-bs-placement="top" title="Success Tooltip"&gt;
        Success Tooltip
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-danger btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-danger"
        data-bs-placement="bottom" title="Danger Tooltip"&gt;
        Danger Tooltip
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-light btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-light"
        data-bs-placement="bottom" title="Light Tooltip"&gt;
        Light Tooltip
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-dark text-white btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
        data-bs-placement="bottom" title="Dark Tooltip"&gt;
        Dark Tooltip
    &lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Tooltips on links </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-0"> Hover on the link to view the <a href="javascript:void(0);"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary"
                                        title="Link Tooltip" class="text-primary">Tooltip</a> </p>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;p class="text-muted mb-0"&gt;
    Hover on the link to view the &lt;a href="javascript:void(0);"
        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Link Tooltip" class="text-primary"&gt;Tooltip&lt;/a&gt;
&lt;/p&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> With an SVG's </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Home"
                                    data-bs-custom-class="tooltip-primary" class="me-3"> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
                                    </svg> </a> <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Message"
                                    data-bs-custom-class="tooltip-secondary" class="me-3"> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="svg-secondary" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z" />
                                    </svg> </a> <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Add User"
                                    data-bs-custom-class="tooltip-warning" class="me-3"> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="svg-warning"
                                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                                        fill="#000000">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <path
                                                d="M20,9V6h-2v3h-3v2h3v3h2v-3h3V9H20z M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6 c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2S7,9.1,7,8C7,6.9,7.9,6,9,6z M15.39,14.56C13.71,13.7,11.53,13,9,13c-2.53,0-4.71,0.7-6.39,1.56 C1.61,15.07,1,16.1,1,17.22V20h16v-2.78C17,16.1,16.39,15.07,15.39,14.56z M15,18H3v-0.78c0-0.38,0.2-0.72,0.52-0.88 C4.71,15.73,6.63,15,9,15c2.37,0,4.29,0.73,5.48,1.34C14.8,16.5,15,16.84,15,17.22V18z" />
                                        </g>
                                    </svg> </a> <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Send File"
                                    data-bs-custom-class="tooltip-info" class="me-3"> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="svg-info" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M4.01 6.03l7.51 3.22-7.52-1 .01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2-15 2 .01 7L23 12 2.01 3z" />
                                    </svg> </a> <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Action"
                                    data-bs-custom-class="tooltip-success" class="me-3"> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="svg-success" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                                    </svg> </a> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;a href="javascript:void(0);" data-bs-toggle="tooltip" title="Home" data-bs-custom-class="tooltip-primary" class="me-3"&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/&gt;&lt;/svg&gt;
&lt;/a&gt;
&lt;a href="javascript:void(0);" data-bs-toggle="tooltip" title="Message" data-bs-custom-class="tooltip-secondary" class="me-3"&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-secondary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/&gt;&lt;/svg&gt;
&lt;/a&gt;
&lt;a href="javascript:void(0);" data-bs-toggle="tooltip" title="Add User" data-bs-custom-class="tooltip-warning" class="me-3"&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-warning" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;g&gt;&lt;rect fill="none" height="24" width="24"/&gt;&lt;/g&gt;&lt;g&gt;&lt;path d="M20,9V6h-2v3h-3v2h3v3h2v-3h3V9H20z M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6 c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2S7,9.1,7,8C7,6.9,7.9,6,9,6z M15.39,14.56C13.71,13.7,11.53,13,9,13c-2.53,0-4.71,0.7-6.39,1.56 C1.61,15.07,1,16.1,1,17.22V20h16v-2.78C17,16.1,16.39,15.07,15.39,14.56z M15,18H3v-0.78c0-0.38,0.2-0.72,0.52-0.88 C4.71,15.73,6.63,15,9,15c2.37,0,4.29,0.73,5.48,1.34C14.8,16.5,15,16.84,15,17.22V18z"/&gt;&lt;/g&gt;&lt;/svg&gt;
&lt;/a&gt;
&lt;a href="javascript:void(0);" data-bs-toggle="tooltip" title="Send File" data-bs-custom-class="tooltip-info" class="me-3"&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-info" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M4.01 6.03l7.51 3.22-7.52-1 .01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2-15 2 .01 7L23 12 2.01 3z"/&gt;&lt;/svg&gt;
&lt;/a&gt;
&lt;a href="javascript:void(0);" data-bs-toggle="tooltip" title="Action" data-bs-custom-class="tooltip-success" class="me-3"&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-success" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/&gt;&lt;/svg&gt;
&lt;/a&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Disabled elements </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip"
                                    title="Default tooltip"> <button class="btn btn-primary" type="button"
                                        disabled="">Disabled button </button> </span> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip"
    title="Default tooltip"&gt;
    &lt;button class="btn btn-primary" type="button" disabled=""&gt;Disabled
        button
    &lt;/button&gt;
&lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-3 -->
                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Tooltip For Images </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                    title="Alex Carey" data-bs-custom-class="tooltip-primary"
                                    class="avatar avatar-md me-2 online avatar-rounded"> <img
                                        src="../assets/images/faces/12.jpg" alt="img"> </a> <a
                                    href="javascript:void(0);" data-bs-toggle="tooltip" title="Marina Kai"
                                    data-bs-custom-class="tooltip-primary"
                                    class="avatar avatar-lg me-2 online avatar-rounded"> <img
                                        src="../assets/images/faces/3.jpg" alt="img"> </a> <a href="javascript:void(0);"
                                    data-bs-toggle="tooltip" title="Tim Cook" data-bs-custom-class="tooltip-primary"
                                    class="avatar avatar-xl me-2 offline avatar-rounded"> <img
                                        src="../assets/images/faces/15.jpg" alt="img"> </a> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;a href="javascript:void(0);" data-bs-toggle="tooltip" title="Alex Carey" data-bs-custom-class="tooltip-primary" class="avatar avatar-md me-2 online avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/12.jpg" alt="img"&gt;
&lt;/a&gt;
&lt;a href="javascript:void(0);" data-bs-toggle="tooltip" title="Marina Kai" data-bs-custom-class="tooltip-primary" class="avatar avatar-lg me-2 online avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
&lt;/a&gt;
&lt;a href="javascript:void(0);" data-bs-toggle="tooltip" title="Tim Cook" data-bs-custom-class="tooltip-primary" class="avatar avatar-xl me-2 offline avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
&lt;/a&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-4 -->
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
        </div> <!-- Footer Start -->
       


          
        @include('layout.footer')