@include('layout.link')
<body>

    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')

        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Pagination</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Ui Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pagination</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Basic Pagination </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link"
                                                href="javascript:void(0);">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation"&gt;
    &lt;ul class="pagination mb-0"&gt;
        &lt;li class="page-item disabled"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;Previous&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Pagination With Icons </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0">
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);"
                                                aria-label="Previous"> <span aria-hidden="true"><i
                                                        class="bi bi-caret-left"></i></span> </a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);"
                                                aria-label="Next"> <span aria-hidden="true"><i
                                                        class="bi bi-caret-right"></i></span> </a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation"&gt;
    &lt;ul class="pagination mb-0"&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);" aria-label="Previous"&gt;
                &lt;span aria-hidden="true"&gt;&lt;i class="bi bi-caret-left"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);" aria-label="Next"&gt;
                &lt;span aria-hidden="true"&gt;&lt;i class="bi bi-caret-right"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Pagination Sizing </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body d-flex flex-wrap justify-content-between gap-2">
                                <nav aria-label="...">
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item active" aria-current="page"> <span
                                                class="page-link">1</span> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    </ul>
                                </nav>
                                <nav aria-label="...">
                                    <ul class="pagination pagination-lg mb-0">
                                        <li class="page-item active" aria-current="page"> <span
                                                class="page-link">1</span> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="..."&gt;
    &lt;ul class="pagination pagination-sm mb-0"&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;span class="page-link"&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label="..."&gt;
    &lt;ul class="pagination pagination-lg mb-0"&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;span class="page-link"&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2  -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Center & Right Aligned Pagination </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled"> <a class="page-link">Previous</a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end mb-0">
                                        <li class="page-item disabled"> <a class="page-link">Previous</a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation"&gt;
    &lt;ul class="pagination justify-content-center"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link"&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label="Page navigation"&gt;
    &lt;ul class="pagination justify-content-end mb-0"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link"&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Active and disabled states </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body d-flex flex-wrap">
                                <nav aria-label="..." class="me-3">
                                    <ul class="pagination">
                                        <li class="page-item disabled"> <a class="page-link">Previous</a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item active" aria-current="page"> <a class="page-link"
                                                href="javascript:void(0);">2</a> </li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item active" aria-current="page"> <span
                                                class="page-link">2</span> </li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="..." class="me-3"&gt;
    &lt;ul class="pagination"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link"&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label="..."&gt;
    &lt;ul class="pagination"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;span class="page-link"&gt;Previous&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;span class="page-link"&gt;2&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2  -->
                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Pagination Style-1 </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation" class="pagination-style-1">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);">
                                                <i class="ri-arrow-left-s-line align-middle"></i> </a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);"> <i
                                                    class="bi bi-three-dots"></i> </a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">21</a>
                                        </li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);"> <i
                                                    class="ri-arrow-right-s-line align-middle"></i> </a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation" class="pagination-style-1"&gt;
    &lt;ul class="pagination mb-0"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="ri-arrow-left-s-line align-middle"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;21&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="ri-arrow-right-s-line align-middle"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Pagination Style-2 </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation" class="pagination-style-2">
                                    <ul class="pagination mb-0 flex-wrap">
                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);">
                                                Prev </a> </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);"> <i
                                                    class="bi bi-three-dots"></i> </a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a>
                                        </li>
                                        <li class="page-item"> <a class="page-link text-primary"
                                                href="javascript:void(0);"> next </a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation" class="pagination-style-2"&gt;
    &lt;ul class="pagination mb-0 flex-wrap"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                Prev
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;17&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link text-primary" href="javascript:void(0);"&gt;
                next
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Pagination Style-3 </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation" class="pagination-style-3">
                                    <ul class="pagination mb-0 flex-wrap">
                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);">
                                                Prev </a> </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);"> <i
                                                    class="bi bi-three-dots"></i> </a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a>
                                        </li>
                                        <li class="page-item"> <a class="page-link text-primary"
                                                href="javascript:void(0);"> next </a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation" class="pagination-style-3"&gt;
    &lt;ul class="pagination mb-0 flex-wrap"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                Prev
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;16&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link text-primary" href="javascript:void(0);"&gt;
                next
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Pagination Style-4 </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0 flex-wrap">
                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);">
                                                Prev </a> </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"> <a class="page-link" href="javascript:void(0);"> <i
                                                    class="bi bi-three-dots"></i> </a> </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a>
                                        </li>
                                        <li class="page-item"> <a class="page-link text-primary"
                                                href="javascript:void(0);"> next </a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation" class="pagination-style-4"&gt;
    &lt;ul class="pagination mb-0 flex-wrap"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                Prev
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;16&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;17&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link text-primary" href="javascript:void(0);"&gt;
                next
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-3 -->
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