
@include('layout.link')

<body>
    <!-- Start Switcher -->
    @include('layout.switcher')


    <div class="page">
        <!-- app-header -->
        @include('layout.header')

           
        @include('layout.sidebar')




        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Input Group</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Form Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input Group</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Input Groups </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1"> </div>
                                <div class="input-group mb-3"> <input type="text" class="form-control"
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2"> <span class="input-group-text"
                                        id="basic-addon2">@example.com</span> </div> <label for="basic-url"
                                    class="form-label">Your vanity URL</label>
                                <div class="input-group mb-3"> <span class="input-group-text"
                                        id="basic-addon3">https://example.com/users/</span> <input type="text"
                                        class="form-control" id="basic-url" aria-describedby="basic-addon3"> </div>
                                <div class="input-group mb-3"> <span class="input-group-text">$</span> <input
                                        type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span> </div>
                                <div class="input-group mb-3"> <input type="text" class="form-control"
                                        placeholder="Username" aria-label="Username"> <span
                                        class="input-group-text">@</span> <input type="text" class="form-control"
                                        placeholder="Server" aria-label="Server"> </div>
                                <div class="input-group"> <span class="input-group-text">With textarea</span> <textarea
                                        class="form-control" aria-label="With textarea"></textarea> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text" id="basic-addon1"&gt;@&lt;/span&gt;
    &lt;input type="text" class="form-control" placeholder="Username"
        aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Recipient's username"
        aria-label="Recipient's username" aria-describedby="basic-addon2"&gt;
    &lt;span class="input-group-text" id="basic-addon2"&gt;@example.com&lt;/span&gt;
&lt;/div&gt;
&lt;label for="basic-url" class="form-label"&gt;Your vanity URL&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text"
        id="basic-addon3"&gt;https://example.com/users/&lt;/span&gt;
    &lt;input type="text" class="form-control" id="basic-url"
        aria-describedby="basic-addon3"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text"&gt;$&lt;/span&gt;
    &lt;input type="text" class="form-control"
        aria-label="Amount (to the nearest dollar)"&gt;
    &lt;span class="input-group-text"&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Username"
        aria-label="Username"&gt;
    &lt;span class="input-group-text"&gt;@&lt;/span&gt;
    &lt;input type="text" class="form-control" placeholder="Server"
        aria-label="Server"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;span class="input-group-text"&gt;With textarea&lt;/span&gt;
    &lt;textarea class="form-control" aria-label="With textarea"&gt;&lt;/textarea&gt;
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
                                <div class="card-title"> Warpping </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group flex-nowrap"> <span class="input-group-text"
                                        id="addon-wrapping">@</span> <input type="text" class="form-control"
                                        placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="input-group flex-nowrap"&gt;
    &lt;span class="input-group-text" id="addon-wrapping"&gt;@&lt;/span&gt;
    &lt;input type="text" class="form-control" placeholder="Username"
        aria-label="Username" aria-describedby="addon-wrapping"&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
                <!-- Start:: row-3 -->
                <div class="row">
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
                                        <div class="input-group input-group-sm mb-3"> <span class="input-group-text"
                                                id="inputGroup-sizing-sm">Small</span> <input type="text"
                                                class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm"> </div>
                                        <div class="input-group mb-3"> <span class="input-group-text"
                                                id="inputGroup-sizing-default">Default</span> <input type="text"
                                                class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default"> </div>
                                        <div class="input-group input-group-lg"> <span class="input-group-text"
                                                id="inputGroup-sizing-lg">Large</span> <input type="text"
                                                class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-lg"> </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group input-group-sm mb-3"&gt;
    &lt;span class="input-group-text" id="inputGroup-sizing-sm"&gt;Small&lt;/span&gt;
    &lt;input type="text" class="form-control"
        aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-sm"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text"
        id="inputGroup-sizing-default"&gt;Default&lt;/span&gt;
    &lt;input type="text" class="form-control"
        aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-default"&gt;
&lt;/div&gt;
&lt;div class="input-group input-group-lg"&gt;
    &lt;span class="input-group-text" id="inputGroup-sizing-lg"&gt;Large&lt;/span&gt;
    &lt;input type="text" class="form-control"
        aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-lg"&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Buttons addons </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-3"> <button class="btn btn-primary" type="button"
                                                id="button-addon1">Button</button> <input type="text"
                                                class="form-control" placeholder=""
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1"> </div>
                                        <div class="input-group mb-3"> <input type="text" class="form-control"
                                                placeholder="Recipient's username" aria-label="Recipient's username"
                                                aria-describedby="button-addon2"> <button class="btn btn-primary"
                                                type="button" id="button-addon2">Button</button> </div>
                                        <div class="input-group mb-3"> <button class="btn btn-primary"
                                                type="button">Button</button> <button class="btn btn-primary"
                                                type="button">Button</button> <input type="text" class="form-control"
                                                placeholder="" aria-label="Example text with two button addons"> </div>
                                        <div class="input-group"> <input type="text" class="form-control"
                                                placeholder="Recipient's username"
                                                aria-label="Recipient's username with two button addons"> <button
                                                class="btn btn-primary" type="button">Button</button> <button
                                                class="btn btn-primary" type="button">Button</button> </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;button class="btn btn-primary" type="button"
        id="button-addon1"&gt;Button&lt;/button&gt;
    &lt;input type="text" class="form-control" placeholder=""
        aria-label="Example text with button addon"
        aria-describedby="button-addon1"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Recipient's username"
        aria-label="Recipient's username" aria-describedby="button-addon2"&gt;
    &lt;button class="btn btn-primary" type="button"
        id="button-addon2"&gt;Button&lt;/button&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
    &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
    &lt;input type="text" class="form-control" placeholder=""
        aria-label="Example text with two button addons"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;input type="text" class="form-control" placeholder="Recipient's username"
        aria-label="Recipient's username with two button addons"&gt;
    &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
    &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Buttons with dropdowns </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-3"> <button class="btn btn-primary dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul> <input type="text" class="form-control"
                                                aria-label="Text input with dropdown button">
                                        </div>
                                        <div class="input-group mb-3"> <input type="text" class="form-control"
                                                aria-label="Text input with dropdown button"> <button
                                                class="btn btn-outline-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                        <div class="input-group"> <button
                                                class="btn btn-primary-transparent dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action
                                                        before</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action
                                                        before</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul> <input type="text" class="form-control"
                                                aria-label="Text input with 2 dropdown buttons"> <button
                                                class="btn btn-primary-transparent dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;button class="btn btn-primary dropdown-toggle" type="button"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with dropdown button"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with dropdown button"&gt;
    &lt;button class="btn btn-outline-primary dropdown-toggle" type="button"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;button class="btn btn-primary-transparent dropdown-toggle" type="button"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action before&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action before&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with 2 dropdown buttons"&gt;
    &lt;button class="btn btn-primary-transparent dropdown-toggle" type="button"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Custom file input </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-3"> <label class="input-group-text"
                                                for="inputGroupFile01">Upload</label> <input type="file"
                                                class="form-control" id="inputGroupFile01"> </div>
                                        <div class="input-group mb-3"> <input type="file" class="form-control"
                                                id="inputGroupFile02"> <label class="input-group-text"
                                                for="inputGroupFile02">Upload</label> </div>
                                        <div class="input-group mb-3"> <button class="btn btn-primary" type="button"
                                                id="inputGroupFileAddon03">Button</button> <input type="file"
                                                class="form-control" id="inputGroupFile03"
                                                aria-describedby="inputGroupFileAddon03" aria-label="Upload"> </div>
                                        <div class="input-group"> <input type="file" class="form-control"
                                                id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                                                aria-label="Upload"> <button class="btn btn-primary" type="button"
                                                id="inputGroupFileAddon04">Button</button> </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;label class="input-group-text" for="inputGroupFile01"&gt;Upload&lt;/label&gt;
    &lt;input type="file" class="form-control" id="inputGroupFile01"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;input type="file" class="form-control" id="inputGroupFile02"&gt;
    &lt;label class="input-group-text" for="inputGroupFile02"&gt;Upload&lt;/label&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;button class="btn btn-primary" type="button"
        id="inputGroupFileAddon03"&gt;Button&lt;/button&gt;
    &lt;input type="file" class="form-control" id="inputGroupFile03"
        aria-describedby="inputGroupFileAddon03" aria-label="Upload"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
    &lt;input type="file" class="form-control" id="inputGroupFile04"
        aria-describedby="inputGroupFileAddon04" aria-label="Upload"&gt;
    &lt;button class="btn btn-primary" type="button"
        id="inputGroupFileAddon04"&gt;Button&lt;/button&gt;
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
                                        <div class="card-title"> Multiple inputs </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group"> <span class="input-group-text">First and last
                                                name</span> <input type="text" aria-label="First name"
                                                class="form-control"> <input type="text" aria-label="Last name"
                                                class="form-control"> </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group"&gt;
    &lt;span class="input-group-text"&gt;First and last name&lt;/span&gt;
    &lt;input type="text" aria-label="First name" class="form-control"&gt;
    &lt;input type="text" aria-label="Last name" class="form-control"&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Checkboxes and radios </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-text"> <input class="form-check-input mt-0"
                                                    type="checkbox" value=""
                                                    aria-label="Checkbox for following text input"> </div> <input
                                                type="text" class="form-control" aria-label="Text input with checkbox">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-text"> <input class="form-check-input mt-0"
                                                    type="radio" value=""
                                                    aria-label="Radio button for following text input"> </div> <input
                                                type="text" class="form-control"
                                                aria-label="Text input with radio button">
                                        </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;div class="input-group-text"&gt;
        &lt;input class="form-check-input mt-0" type="checkbox" value=""
            aria-label="Checkbox for following text input"&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with checkbox"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;div class="input-group-text"&gt;
        &lt;input class="form-check-input mt-0" type="radio" value=""
            aria-label="Radio button for following text input"&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with radio button"&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Multiple addons </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-text"> <input class="form-check-input mt-0"
                                                    type="checkbox" value=""
                                                    aria-label="Checkbox for following text input"> </div> <input
                                                type="text" class="form-control" aria-label="Text input with checkbox">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-text"> <input class="form-check-input mt-0"
                                                    type="radio" value=""
                                                    aria-label="Radio button for following text input"> </div> <input
                                                type="text" class="form-control"
                                                aria-label="Text input with radio button">
                                        </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;div class="input-group-text"&gt;
        &lt;input class="form-check-input mt-0" type="checkbox" value=""
            aria-label="Checkbox for following text input"&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with checkbox"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;div class="input-group-text"&gt;
        &lt;input class="form-check-input mt-0" type="radio" value=""
            aria-label="Radio button for following text input"&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with radio button"&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Segmented buttons </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-3"> <button type="button"
                                                class="btn btn-primary">Action</button> <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false"> <span
                                                    class="visually-hidden">Toggle Dropdown</span> </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul> <input type="text" class="form-control"
                                                aria-label="Text input with segmented dropdown button">
                                        </div>
                                        <div class="input-group"> <input type="text" class="form-control"
                                                aria-label="Text input with segmented dropdown button"> <button
                                                type="button" class="btn btn-primary">Action</button> <button
                                                type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false"> <span
                                                    class="visually-hidden">Toggle Dropdown</span> </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-primary dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with segmented dropdown button"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with segmented dropdown button"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-primary dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Custom select </div>
                                        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show
                                                Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-3"> <label class="input-group-text"
                                                for="inputGroupSelect01">Options</label> <select class="form-select"
                                                id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> </div>
                                        <div class="input-group mb-3"> <select class="form-select"
                                                id="inputGroupSelect02">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> <label class="input-group-text"
                                                for="inputGroupSelect02">Options</label> </div>
                                        <div class="input-group mb-3"> <button class="btn btn-primary"
                                                type="button">Button</button> <select class="form-select"
                                                id="inputGroupSelect03" aria-label="Example select with button addon">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> </div>
                                        <div class="input-group"> <select class="form-select" id="inputGroupSelect04"
                                                aria-label="Example select with button addon">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </div>
                                    <div class="card-footer d-none border-top-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;label class="input-group-text" for="inputGroupSelect01"&gt;Options&lt;/label&gt;
    &lt;select class="form-select" id="inputGroupSelect01"&gt;
        &lt;option selected&gt;Choose...&lt;/option&gt;
        &lt;option value="1"&gt;One&lt;/option&gt;
        &lt;option value="2"&gt;Two&lt;/option&gt;
        &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;select class="form-select" id="inputGroupSelect02"&gt;
        &lt;option selected&gt;Choose...&lt;/option&gt;
        &lt;option value="1"&gt;One&lt;/option&gt;
        &lt;option value="2"&gt;Two&lt;/option&gt;
        &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
    &lt;label class="input-group-text" for="inputGroupSelect02"&gt;Options&lt;/label&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
    &lt;select class="form-select" id="inputGroupSelect03"
        aria-label="Example select with button addon"&gt;
        &lt;option selected&gt;Choose...&lt;/option&gt;
        &lt;option value="1"&gt;One&lt;/option&gt;
        &lt;option value="2"&gt;Two&lt;/option&gt;
        &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;select class="form-select" id="inputGroupSelect04"
        aria-label="Example select with button addon"&gt;
        &lt;option selected&gt;Choose...&lt;/option&gt;
        &lt;option value="1"&gt;One&lt;/option&gt;
        &lt;option value="2"&gt;Two&lt;/option&gt;
        &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
    &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                                    </div>
                                </div>
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