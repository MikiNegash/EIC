@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')




        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Buttongroup</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Ui Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Buttongroup</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!--ROW-START-->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Basic example </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-group" role="group" aria-label="Basic example"> <button type="button"
                                        class="btn btn-info btn-wave"><i class="bi bi-skip-backward"></i></button>
                                    <button type="button" class="btn btn-info btn-wave"><i
                                            class="bi bi-pause"></i></button> <button type="button"
                                        class="btn btn-info btn-wave"><i class="bi bi-skip-forward"></i></button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
    &lt;button type="button" class="btn btn-info btn-wave"&gt;&lt;i class="bi bi-skip-backward"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;button type="button" class="btn btn-info btn-wave"&gt;&lt;i class="bi bi-pause"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;button type="button" class="btn btn-info btn-wave"&gt;&lt;i class="bi bi-skip-forward"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Navigation </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-group"> <a href="javascript:void(0);"
                                        class="btn btn-primary active btn-wave" aria-current="page">Active link</a> <a
                                        href="javascript:void(0);" class="btn btn-primary">Link</a> <a
                                        href="javascript:void(0);" class="btn btn-primary">Link</a> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-group"&gt;
    &lt;a href="javascript:void(0);" class="btn btn-primary active btn-wave" aria-current="page"&gt;Active
        link&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="btn btn-primary"&gt;Link&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="btn btn-primary"&gt;Link&lt;/a&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Mixed style </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"> <button
                                        type="button" class="btn btn-danger btn-wave">Left</button> <button
                                        type="button" class="btn btn-warning btn-wave">Middle</button> <button
                                        type="button" class="btn btn-success btn-wave">Right</button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic mixed styles example"&gt;
    &lt;button type="button" class="btn btn-danger btn-wave"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-warning btn-wave"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-success btn-wave"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Outline styled </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-group" role="group" aria-label="Basic outlined example"> <button
                                        type="button" class="btn btn-outline-primary btn-wave">Left</button> <button
                                        type="button" class="btn btn-outline-primary btn-wave">Middle</button> <button
                                        type="button" class="btn btn-outline-primary btn-wave">Right</button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic outlined example"&gt;
    &lt;button type="button" class="btn btn-outline-primary btn-wave"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary btn-wave"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary btn-wave"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Checkbox button groups </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body checkbox-button-group">
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1"> <label
                                        class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label> <input
                                        type="checkbox" class="btn-check" id="btncheck2"> <label
                                        class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label> <input
                                        type="checkbox" class="btn-check" id="btncheck3"> <label
                                        class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic checkbox toggle button group"&gt;
    &lt;input type="checkbox" class="btn-check" id="btncheck1"&gt;
    &lt;label class="btn btn-outline-primary" for="btncheck1"&gt;Checkbox 1&lt;/label&gt;

    &lt;input type="checkbox" class="btn-check" id="btncheck2"&gt;
    &lt;label class="btn btn-outline-primary" for="btncheck2"&gt;Checkbox 2&lt;/label&gt;

    &lt;input type="checkbox" class="btn-check" id="btncheck3"&gt;
    &lt;label class="btn btn-outline-primary" for="btncheck3"&gt;Checkbox 3&lt;/label&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Radio button groups </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body radio-button-group">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> <input
                                        type="radio" class="btn-check" name="btnradio" id="btnradio1" checked> <label
                                        class="btn btn-outline-primary" for="btnradio1">Radio 1</label> <input
                                        type="radio" class="btn-check" name="btnradio" id="btnradio2"> <label
                                        class="btn btn-outline-primary" for="btnradio2">Radio 2</label> <input
                                        type="radio" class="btn-check" name="btnradio" id="btnradio3"> <label
                                        class="btn btn-outline-primary" for="btnradio3">Radio 3</label> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic radio toggle button group"&gt;
    &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio1"
        checked&gt;
    &lt;label class="btn btn-outline-primary" for="btnradio1"&gt;Radio 1&lt;/label&gt;

    &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio2"
       &gt;
    &lt;label class="btn btn-outline-primary" for="btnradio2"&gt;Radio 2&lt;/label&gt;

    &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio3"
       &gt;
    &lt;label class="btn btn-outline-primary" for="btnradio3"&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Sizing </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-group btn-group-lg my-1" role="group"
                                            aria-label="Large button group"> <button type="button"
                                                class="btn btn-outline-success">Left</button> <button type="button"
                                                class="btn btn-outline-success">Middle</button> <button type="button"
                                                class="btn btn-outline-success">Right</button> </div>
                                        <div class="btn-group my-1" role="group" aria-label="Default button group">
                                            <button type="button" class="btn btn-outline-success">Left</button> <button
                                                type="button" class="btn btn-outline-success">Middle</button> <button
                                                type="button" class="btn btn-outline-success">Right</button> </div>
                                        <div class="btn-group btn-group-sm my-1" role="group"
                                            aria-label="Small button group"> <button type="button"
                                                class="btn btn-outline-success">Left</button> <button type="button"
                                                class="btn btn-outline-success">Middle</button> <button type="button"
                                                class="btn btn-outline-success">Right</button> </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="btn-group btn-group-lg my-1" role="group" aria-label="Large button group"&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1" role="group" aria-label="Default button group"&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group btn-group-sm my-1" role="group" aria-label="Small button group"&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Button toolbar </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-toolbar mb-4" role="toolbar"
                                            aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2 my-1" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-primary">1</button> <button
                                                    type="button" class="btn btn-primary">2</button> <button
                                                    type="button" class="btn btn-primary">3</button> <button
                                                    type="button" class="btn btn-primary">4</button> </div>
                                            <div class="btn-group me-2 my-1" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-secondary">5</button> <button
                                                    type="button" class="btn btn-secondary">6</button> <button
                                                    type="button" class="btn btn-secondary">7</button> </div>
                                            <div class="btn-group my-1" role="group" aria-label="Third group"> <button
                                                    type="button" class="btn btn-info">8</button> </div>
                                        </div>
                                        <div class="btn-toolbar mb-3" role="toolbar"
                                            aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2 my-1" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-outline-secondary">1</button>
                                                <button type="button" class="btn btn-outline-secondary">2</button>
                                                <button type="button" class="btn btn-outline-secondary">3</button>
                                                <button type="button" class="btn btn-outline-secondary">4</button>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-text" id="btnGroupAddon">@</div> <input
                                                    type="text" class="form-control" placeholder="Input group example"
                                                    aria-label="Input group example" aria-describedby="btnGroupAddon">
                                            </div>
                                        </div>
                                        <div class="btn-toolbar justify-content-between" role="toolbar"
                                            aria-label="Toolbar with button groups">
                                            <div class="btn-group my-1" role="group" aria-label="First group"> <button
                                                    type="button" class="btn btn-outline-secondary">1</button> <button
                                                    type="button" class="btn btn-outline-secondary">2</button> <button
                                                    type="button" class="btn btn-outline-secondary">3</button> <button
                                                    type="button" class="btn btn-outline-secondary">4</button> </div>
                                            <div class="input-group">
                                                <div class="input-group-text" id="btnGroupAddon2">@</div> <input
                                                    type="text" class="form-control" placeholder="Input group example"
                                                    aria-label="Input group example" aria-describedby="btnGroupAddon2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="btn-toolbar mb-4" role="toolbar"
    aria-label="Toolbar with button groups"&gt;
    &lt;div class="btn-group me-2 my-1" role="group" aria-label="First group"&gt;
        &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;3&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group me-2 my-1" role="group" aria-label="Second group"&gt;
        &lt;button type="button" class="btn btn-secondary"&gt;5&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary"&gt;6&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary"&gt;7&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group my-1" role="group" aria-label="Third group"&gt;
        &lt;button type="button" class="btn btn-info"&gt;8&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="btn-toolbar mb-3" role="toolbar"
    aria-label="Toolbar with button groups"&gt;
    &lt;div class="btn-group me-2 my-1" role="group" aria-label="First group"&gt;
        &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-secondary"&gt;3&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-secondary"&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="input-group"&gt;
        &lt;div class="input-group-text" id="btnGroupAddon"&gt;@&lt;/div&gt;
        &lt;input type="text" class="form-control"
            placeholder="Input group example"
            aria-label="Input group example"
            aria-describedby="btnGroupAddon"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="btn-toolbar justify-content-between" role="toolbar"
    aria-label="Toolbar with button groups"&gt;
    &lt;div class="btn-group my-1" role="group" aria-label="First group"&gt;
        &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-secondary"&gt;3&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-secondary"&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="input-group"&gt;
        &lt;div class="input-group-text" id="btnGroupAddon2"&gt;@&lt;/div&gt;
        &lt;input type="text" class="form-control"
            placeholder="Input group example"
            aria-label="Input group example"
            aria-describedby="btnGroupAddon2"&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Nesting </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-group" role="group"
                                            aria-label="Button group with nested dropdown"> <button type="button"
                                                class="btn btn-primary">1</button> <button type="button"
                                                class="btn btn-primary">2</button>
                                            <div class="btn-group" role="group"> <button id="btnGroupDrop1"
                                                    type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Dropdown
                                                            link</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Dropdown
                                                            link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group"
    aria-label="Button group with nested dropdown"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;

    &lt;div class="btn-group" role="group"&gt;
        &lt;button id="btnGroupDrop1" type="button"
            class="btn btn-primary dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Dropdown
        &lt;/button&gt;
        &lt;ul class="dropdown-menu" aria-labelledby="btnGroupDrop1"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Vertical variation </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gap-2">
                                            <div class="col-sm-3">
                                                <div class="btn-group-vertical" role="group"
                                                    aria-label="Vertical button group"> <button type="button"
                                                        class="btn btn-primary">Button</button> <button type="button"
                                                        class="btn btn-primary">Button</button>
                                                    <div class="btn-group" role="group"> <button
                                                            id="btnGroupVerticalDrop1" type="button"
                                                            class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> Dropdown
                                                        </button>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="btnGroupVerticalDrop1">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Dropdown link</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Dropdown link</a></li>
                                                        </ul>
                                                    </div> <button type="button" class="btn btn-primary">Button</button>
                                                    <button type="button" class="btn btn-primary">Button</button>
                                                    <div class="btn-group" role="group"> <button
                                                            id="btnGroupVerticalDrop2" type="button"
                                                            class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> Dropdown
                                                        </button>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="btnGroupVerticalDrop2">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Dropdown link</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group" role="group"> <button
                                                            id="btnGroupVerticalDrop3" type="button"
                                                            class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> Dropdown
                                                        </button>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="btnGroupVerticalDrop3">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Dropdown link</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group" role="group"> <button
                                                            id="btnGroupVerticalDrop4" type="button"
                                                            class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> Dropdown
                                                        </button>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="btnGroupVerticalDrop4">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Dropdown link</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="btn-group-vertical" role="group"
                                                    aria-label="Vertical button group"> <button type="button"
                                                        class="btn btn-info">Button</button> <button type="button"
                                                        class="btn btn-info">Button</button> <button type="button"
                                                        class="btn btn-info">Button</button> <button type="button"
                                                        class="btn btn-info">Button</button> <button type="button"
                                                        class="btn btn-info">Button</button> <button type="button"
                                                        class="btn btn-info">Button</button> </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="btn-group-vertical" role="group"
                                                    aria-label="Vertical radio toggle button group"> <input type="radio"
                                                        class="btn-check" name="vbtn-radio" id="vbtn-radio1" checked="">
                                                    <label class="btn btn-outline-danger" for="vbtn-radio1">Radio
                                                        1</label> <input type="radio" class="btn-check"
                                                        name="vbtn-radio" id="vbtn-radio2"> <label
                                                        class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                                                    <input type="radio" class="btn-check" name="vbtn-radio"
                                                        id="vbtn-radio3"> <label class="btn btn-outline-danger"
                                                        for="vbtn-radio3">Radio 3</label> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="row gap-2"&gt;
    &lt;div class="col-sm-3"&gt;
        &lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
            &lt;div class="btn-group" role="group"&gt;
                &lt;button id="btnGroupVerticalDrop1" type="button"
                    class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Dropdown
                &lt;/button&gt;
                &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
            &lt;div class="btn-group" role="group"&gt;
                &lt;button id="btnGroupVerticalDrop2" type="button"
                    class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Dropdown
                &lt;/button&gt;
                &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2"&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class="btn-group" role="group"&gt;
                &lt;button id="btnGroupVerticalDrop3" type="button"
                    class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Dropdown
                &lt;/button&gt;
                &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3"&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class="btn-group" role="group"&gt;
                &lt;button id="btnGroupVerticalDrop4" type="button"
                    class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Dropdown
                &lt;/button&gt;
                &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4"&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-3"&gt;
        &lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
            &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-3"&gt;
        &lt;div class="btn-group-vertical" role="group"
            aria-label="Vertical radio toggle button group"&gt;
            &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1"
                checked=""&gt;
            &lt;label class="btn btn-outline-danger" for="vbtn-radio1"&gt;Radio 1&lt;/label&gt;
            &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2"
               &gt;
            &lt;label class="btn btn-outline-danger" for="vbtn-radio2"&gt;Radio 2&lt;/label&gt;
            &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3"
               &gt;
            &lt;label class="btn btn-outline-danger" for="vbtn-radio3"&gt;Radio 3&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Social Group Buttons</div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-group" role="group" aria-label="Basic example"> <button
                                                class="btn btn-icon btn-facebook btn-wave"> <i
                                                    class="ri-facebook-line"></i> </button> <button
                                                class="btn btn-icon btn-twitter btn-wave"> <i
                                                    class="ri-twitter-line"></i> </button> <button
                                                class="btn btn-icon btn-instagram btn-wave"> <i
                                                    class="ri-instagram-line"></i> </button> <button
                                                class="btn btn-icon btn-github btn-wave"> <i class="ri-github-line"></i>
                                            </button> <button class="btn btn-icon btn-youtube btn-wave"> <i
                                                    class="ri-youtube-line"></i> </button> <button
                                                class="btn btn-icon btn-google btn-wave"> <i class="ri-google-line"></i>
                                            </button> </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
    &lt;button class="btn btn-icon btn-facebook btn-wave"&gt;
        &lt;i class="ri-facebook-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-twitter btn-wave"&gt;
        &lt;i class="ri-twitter-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-instagram btn-wave"&gt;
        &lt;i class="ri-instagram-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-github btn-wave"&gt;
        &lt;i class="ri-github-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-youtube btn-wave"&gt;
        &lt;i class="ri-youtube-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-google btn-wave"&gt;
        &lt;i class="ri-google-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--ROW-END-->
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