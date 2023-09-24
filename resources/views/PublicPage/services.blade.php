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
                <div class="breadcrumb-wrap bg-f br-2">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>Services</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index">Home </a></li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Service Section Start -->
                <section class="service-wrap ptb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-card style4">
                                   
                                    <div class="service-info">
                                        <h3><a href="service-details">New Investment Permit</a></h3>
                                        <p> Once data on basic customer information is completed and approved, customers can request New Investment Permit certificate.   </p>
                                        <a href="service-details" class="link style2">More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-card style4">
                                    
                                    <div class="service-info">
                                        <h3><a href="service-details"></a>Renewal of Investment Permit</h3>
                                        <p> Once data on basic customer information is completed, cutomers with existing Investment Permit can renew their Investment Permit.</p>
                                        <a href="service-details" class="link style2">More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-card style4">
                                        
                                    <div class="service-info">
                                        <h3><a href="service-details">Investment Permit Substitute</a></h3>
                                        <p>This service allows customers get a replacement of their Investment Permit certificate </p>
                                        <a href="service-details" class="link style2">More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-card style4">
                                    
                                    <div class="service-info">
                                        <h3><a href="service-details">Heart Checkup</a></h3>
                                        <p>It is a long established fact that reader will content of page when looks layout.</p>
                                        <a href="service-details" class="link style2">Explore More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-card style4">
                                   
                                    <div class="service-info">
                                        <h3><a href="service-details">Duty Free Incentive</a></h3>
                                        <p>This service allows customers to request Duty Free incentive support for their eligible projects</p>
                                        <a href="service-details" class="link style2">More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-card style4">
                                   
                                    <div class="service-info">
                                        <h3><a href="service-details">Heart Checkup</a></h3>
                                        <p>It is a long established fact that reader will content of page when looks layout.</p>
                                        <a href="service-details" class="link style2"> More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="page-nav list-style">
                            <li><a href="service-one"><i class="ri-arrow-left-s-line"></i></a></li>
                            <li><a class="active" href="service-one">1</a></li>
                            <li><a href="service-one">2</a></li>
                            <li><a href="service-one">3</a></li>
                            <li><a href="service-one"><i class="ri-arrow-right-s-line"></i></a></li>
                        </ul>
                    </div>
                </section>
                <!-- Service Section End -->

            </div>
            <!-- Content wrapper end -->

            <!-- Footer Section Start -->

           

            
            @include('PublicPage.footer')