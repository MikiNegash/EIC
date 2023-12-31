@include('PublicPage.link')

    <body>

     
        <!--Preloader ends-->

        <!-- Theme Switcher Start -->
        <div class="switch-theme-mode">
            <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
            </label>
        </div>
        <!-- Theme Switcher End -->

        <!-- Page Wrapper End -->
        <div class="page-wrapper">

            <!-- Header Section Start -->
            @include('PublicPage.navbar')
            <!-- Header Section End -->

            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-wrap bg-f br-1">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>Frequently Asked Questions</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index">Home </a></li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- FAQ Section Start -->
                <div class="faq-wrap ptb-100">
                    <div class="container">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <div class="faq-img-wrap">
                                    <img src="assets2/img/faq-shape." alt="Image" class="faq-shape bounce">
                                    <img src="assets2/img/faq-img" alt="Image" class="faq-img-one">
                                    <img src="assets2/img/faq-ig-2" alt="Image" class="faq-img-two">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-content">
                                    <div class="content-title style1 mb-40">
                                        <span>FAQ</span>
                                        <h2>Frequently Asked Questions</h2>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    <span>
                                                        <i class="ri-add-circle-line plus"></i>
                                                        <i class="ri-indeterminate-circle-line minus"></i>
                                                    </span>
                                                    Is A Phonecall Considered Telemedicine
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="single-product-text">
                                                        <p>
                                                         </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <span>
                                                        <i class="ri-add-circle-line plus"></i>
                                                        <i class="ri-indeterminate-circle-line minus"></i>
                                                    </span>
                                                 
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse "
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <span>
                                                        <i class="ri-add-circle-line plus"></i>
                                                        <i class="ri-indeterminate-circle-line minus"></i>
                                                    </span>
                                                  
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingfour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                                    aria-expanded="true" aria-controls="collapsefour">
                                                    <span>
                                                        <i class="ri-add-circle-line plus"></i>
                                                        <i class="ri-indeterminate-circle-line minus"></i>
                                                    </span>
                                                 
                                                </button>
                                            </h2>
                                            <div id="collapsefour" class="accordion-collapse collapse "
                                                aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="single-product-text">
                                                        <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ Section End -->

            </div>
            <!-- Content wrapper end -->

            <!-- Footer Section Start -->
          


            @include('PublicPage.footer')