@include('layout.link')
<body>

    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')

        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Popovers</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Ui Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Popovers</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-5">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Default Popovers </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-list"> <a tabindex="0" class="btn btn-outline-primary btn-wave"
                                        role="button" data-bs-toggle="popover" data-bs-placement="top"
                                        title="Popover Top"
                                        data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                        Top </a> <a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
                                        data-bs-toggle="popover" data-bs-placement="right" title="Popover Right"
                                        data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                        Right</a> <a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
                                        data-bs-toggle="popover" data-bs-placement="bottom" title="Popover Bottom"
                                        data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                        Bottom</a> <a tabindex="0" class="btn btn-outline-primary btn-wave"
                                        role="button" data-bs-toggle="popover" data-bs-placement="left"
                                        title="Popover Left"
                                        data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                        Left</a> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
        data-bs-toggle="popover" data-bs-placement="top" title="Popover Top"
        data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Popover
        Top
    &lt;/a&gt;
    &lt;a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
        data-bs-toggle="popover" data-bs-placement="right" title="Popover Right"
        data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Popover
        Right&lt;/a&gt;
    &lt;a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
        data-bs-toggle="popover" data-bs-placement="bottom" title="Popover Bottom"
        data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Popover
        Bottom&lt;/a&gt;
    &lt;a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
        data-bs-toggle="popover" data-bs-placement="left" title="Popover Left"
        data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Popover
        Left&lt;/a&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Colored Headers </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-list"> <button type="button" class="btn btn-outline-primary btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="top"
                                        data-bs-custom-class="header-primary" title="Color Header"
                                        data-bs-content="Popover with primary header."> Header Primary </button> <button
                                        type="button" class="btn btn-outline-secondary btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="right"
                                        data-bs-custom-class="header-secondary" title="Color Header"
                                        data-bs-content="Popover with secondary header."> Header Secondary </button>
                                    <button type="button" class="btn btn-outline-info btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="bottom" data-bs-custom-class="header-info"
                                        title="Color Header" data-bs-content="Popover with info header."> Header Info
                                    </button> <button type="button" class="btn btn-outline-warning btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="left"
                                        data-bs-custom-class="header-warning" title="Color Header"
                                        data-bs-content="Popover with warning header."> Header Warning </button> <button
                                        type="button" class="btn btn-outline-success btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="top" data-bs-custom-class="header-success"
                                        title="Color Header" data-bs-content="Popover with success header."> Header
                                        Success </button> <button type="button" class="btn btn-outline-danger btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="top"
                                        data-bs-custom-class="header-danger" title="Color Header"
                                        data-bs-content="Popover with danger header."> Header Danger </button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-outline-primary btn-wave" data-bs-toggle="popover"
        data-bs-placement="top" data-bs-custom-class="header-primary"
        title="Color Header" data-bs-content="Popover with primary header."&gt;
        Header Primary
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary btn-wave"
        data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="header-secondary" title="Color Header"
        data-bs-content="Popover with secondary header."&gt;
        Header Secondary
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-info btn-wave" data-bs-toggle="popover"
        data-bs-placement="bottom" data-bs-custom-class="header-info"
        title="Color Header" data-bs-content="Popover with info header."&gt;
        Header Info
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-warning btn-wave" data-bs-toggle="popover"
        data-bs-placement="left" data-bs-custom-class="header-warning"
        title="Color Header" data-bs-content="Popover with warning header."&gt;
        Header Warning
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success btn-wave" data-bs-toggle="popover"
        data-bs-placement="top" data-bs-custom-class="header-success"
        title="Color Header" data-bs-content="Popover with success header."&gt;
        Header Success
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-danger btn-wave" data-bs-toggle="popover"
        data-bs-placement="top" data-bs-custom-class="header-danger"
        title="Color Header" data-bs-content="Popover with danger header."&gt;
        Header Danger
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
                                <div class="card-title"> Colored Popovers </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-list"> <button type="button" class="btn btn-primary btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="top"
                                        data-bs-custom-class="popover-primary" title="Color Background"
                                        data-bs-content="Popover with primary background."> Primary </button> <button
                                        type="button" class="btn btn-secondary btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="right" data-bs-custom-class="popover-secondary"
                                        title="Color Background" data-bs-content="Popover with secondary background.">
                                        Secondary </button> <button type="button" class="btn btn-info btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="bottom"
                                        data-bs-custom-class="popover-info" title="Color Background"
                                        data-bs-content="Popover with info background."> Info </button> <button
                                        type="button" class="btn btn-warning btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="left" data-bs-custom-class="popover-warning"
                                        title="Color Background" data-bs-content="Popover with warning background.">
                                        Warning </button> <button type="button" class="btn btn-success btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="top"
                                        data-bs-custom-class="popover-success" title="Color Background"
                                        data-bs-content="Popover with success background."> Success </button> <button
                                        type="button" class="btn btn-danger btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="right" data-bs-custom-class="popover-danger"
                                        title="Color Background" data-bs-content="Popover with danger background.">
                                        Danger </button> <button type="button" class="btn btn-teal btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="bottom"
                                        data-bs-custom-class="popover-teal" title="Color Background"
                                        data-bs-content="Popover with teal background."> Teal </button> <button
                                        type="button" class="btn btn-purple btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="left" data-bs-custom-class="popover-purple"
                                        title="Color Background" data-bs-content="Popover with purple background.">
                                        Purple </button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-primary btn-wave" data-bs-toggle="popover"
        data-bs-placement="top" data-bs-custom-class="popover-primary"
        title="Color Background" data-bs-content="Popover with primary background."&gt;
        Primary
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary btn-wave"
        data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="popover-secondary" title="Color Background"
        data-bs-content="Popover with secondary background."&gt;
        Secondary
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-info btn-wave" data-bs-toggle="popover"
        data-bs-placement="bottom" data-bs-custom-class="popover-info"
        title="Color Background" data-bs-content="Popover with info background."&gt;
        Info
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-warning btn-wave" data-bs-toggle="popover"
        data-bs-placement="left" data-bs-custom-class="popover-warning"
        title="Color Background" data-bs-content="Popover with warning background."&gt;
        Warning
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-success btn-wave" data-bs-toggle="popover"
        data-bs-placement="top" data-bs-custom-class="popover-success"
        title="Color Background" data-bs-content="Popover with success background."&gt;
        Success
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-danger btn-wave" data-bs-toggle="popover"
        data-bs-placement="right" data-bs-custom-class="popover-danger"
        title="Color Background" data-bs-content="Popover with danger background."&gt;
        Danger
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-teal btn-wave" data-bs-toggle="popover"
        data-bs-placement="bottom" data-bs-custom-class="popover-teal"
        title="Color Background" data-bs-content="Popover with teal background."&gt;
        Teal
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-purple btn-wave" data-bs-toggle="popover"
        data-bs-placement="left" data-bs-custom-class="popover-purple"
        title="Color Background" data-bs-content="Popover with purple background."&gt;
        Purple
    &lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Light Popovers </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-list"> <button type="button" class="btn btn-primary-light btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="top"
                                        data-bs-custom-class="popover-primary-light" title="Light Background"
                                        data-bs-content="Popover with light primary background."> Primary </button>
                                    <button type="button" class="btn btn-secondary-light btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="right"
                                        data-bs-custom-class="popover-secondary-light" title="Light Background"
                                        data-bs-content="Popover with light secondary background."> Secondary </button>
                                    <button type="button" class="btn btn-info-light btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="bottom" data-bs-custom-class="popover-info-light"
                                        title="Light Background" data-bs-content="Popover with light info background.">
                                        Info </button> <button type="button" class="btn btn-warning-light btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="left"
                                        data-bs-custom-class="popover-warning-light" title="Light Background"
                                        data-bs-content="Popover with light warning background."> Warning </button>
                                    <button type="button" class="btn btn-success-light btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="top"
                                        data-bs-custom-class="popover-success-light" title="Light Background"
                                        data-bs-content="Popover with light success background."> Success </button>
                                    <button type="button" class="btn btn-danger-light btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="right" data-bs-custom-class="popover-danger-light"
                                        title="Light Background"
                                        data-bs-content="Popover with light danger background."> Danger </button>
                                    <button type="button" class="btn btn-teal-light btn-wave" data-bs-toggle="popover"
                                        data-bs-placement="bottom" data-bs-custom-class="popover-teal-light"
                                        title="Light Background" data-bs-content="Popover with light teal background.">
                                        Teal </button> <button type="button" class="btn btn-purple-light btn-wave"
                                        data-bs-toggle="popover" data-bs-placement="left"
                                        data-bs-custom-class="popover-purple-light" title="Light Background"
                                        data-bs-content="Popover with light purple background."> Purple </button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-primary-light btn-wave" data-bs-toggle="popover"
        data-bs-placement="top" data-bs-custom-class="popover-primary-light"
        title="Light Background" data-bs-content="Popover with light primary background."&gt;
        Primary
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary-light btn-wave"
        data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="popover-secondary-light" title="Light Background"
        data-bs-content="Popover with light secondary background."&gt;
        Secondary
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-info-light btn-wave" data-bs-toggle="popover"
        data-bs-placement="bottom" data-bs-custom-class="popover-info-light"
        title="Light Background" data-bs-content="Popover with light info background."&gt;
        Info
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-warning-light btn-wave" data-bs-toggle="popover"
        data-bs-placement="left" data-bs-custom-class="popover-warning-light"
        title="Light Background" data-bs-content="Popover with light warning background."&gt;
        Warning
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-success-light btn-wave" data-bs-toggle="popover"
        data-bs-placement="top" data-bs-custom-class="popover-success-light"
        title="Light Background" data-bs-content="Popover with light success background."&gt;
        Success
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-danger-light btn-wave" data-bs-toggle="popover"
        data-bs-placement="right" data-bs-custom-class="popover-danger-light"
        title="Light Background" data-bs-content="Popover with light danger background."&gt;
        Danger
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-teal-light btn-wave" data-bs-toggle="popover"
        data-bs-placement="bottom" data-bs-custom-class="popover-teal-light"
        title="Light Background" data-bs-content="Popover with light teal background."&gt;
        Teal
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-purple-light btn-wave" data-bs-toggle="popover"
        data-bs-placement="left" data-bs-custom-class="popover-purple-light"
        title="Light Background" data-bs-content="Popover with light purple background."&gt;
        Purple
    &lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-3 -->
                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Dismissible Popovers </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body d-flex flex-wrap justify-content-between"> <a tabindex="0"
                                    class="btn btn-primary m-1" role="button" data-bs-toggle="popover"
                                    data-bs-trigger="focus" data-bs-placement="top" title="Dismissible popover"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                    Dismiss </a> <a tabindex="0" class="btn btn-secondary m-1" role="button"
                                    data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right"
                                    title="Dismissible popover"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                    Dismiss </a> <a tabindex="0" class="btn btn-info m-1" role="button"
                                    data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                    title="Dismissible popover"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                    Dismiss </a> <a tabindex="0" class="btn btn-warning m-1" role="button"
                                    data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="left"
                                    title="Dismissible popover"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                    Dismiss </a> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;a tabindex="0" class="btn btn-primary m-1" role="button"
    data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" title="Dismissible popover"
    data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Popover Dismiss
&lt;/a&gt;
&lt;a tabindex="0" class="btn btn-secondary m-1" role="button"
data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right" title="Dismissible popover"
data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Popover Dismiss
&lt;/a&gt;
&lt;a tabindex="0" class="btn btn-info m-1" role="button" data-bs-toggle="popover"
data-bs-trigger="focus" data-bs-placement="bottom" title="Dismissible popover"
data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Popover Dismiss
&lt;/a&gt;
&lt;a tabindex="0" class="btn btn-warning m-1" role="button" data-bs-toggle="popover"
data-bs-trigger="focus" data-bs-placement="left" title="Dismissible popover"
data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Popover Dismiss
&lt;/a&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Disabled Popover </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                    data-bs-trigger="hover focus" data-bs-content="Disabled popover"> <button
                                        class="btn btn-primary" type="button" disabled>Disabled button</button> </span>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
    data-bs-trigger="hover focus" data-bs-content="Disabled popover"&gt;
    &lt;button class="btn btn-primary" type="button" disabled&gt;Disabled
        button&lt;/button&gt;
    &lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Icon Popovers </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <a class="me-4" href="javascript:void(0)" data-bs-toggle="popover"
                                    data-bs-placement="top" data-bs-custom-class="popover-primary"
                                    data-bs-content="This popover is used to provide details about this icon."> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z" />
                                    </svg> </a> <a class="me-4" href="javascript:void(0)" data-bs-toggle="popover"
                                    data-bs-placement="left" data-bs-custom-class="popover-secondary"
                                    data-bs-content="This popover is used to provide information about this icon."> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="svg-secondary" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                    </svg> </a> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;a class="me-4" href="javascript:void(0)" data-bs-toggle="popover"
    data-bs-placement="top" data-bs-custom-class="popover-primary" data-bs-content="This popover is used to provide details about this icon."&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/&gt;&lt;/svg&gt;
&lt;/a&gt;
&lt;a class="me-4" href="javascript:void(0)" data-bs-toggle="popover"
    data-bs-placement="left" data-bs-custom-class="popover-secondary" data-bs-content="This popover is used to provide information about this icon."&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-secondary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/&gt;&lt;/svg&gt;
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
        </div>
        
          
        @include('layout.footer')