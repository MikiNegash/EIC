<!DOCTYPE html><!-- saved from url=(0014)about:internet -->
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head><!-- Meta Data -->
    @include('common.link')

</head>

<body>
    <!-- Start @include('common.switcher')Switcher -->



    <div class="page">
        <!-- app-header -->
        @include('common.header')


        @include('common.sidebar')

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                @yield('content')
				<!-- /content area -->


            <div>
        </div> <!-- End::app-content -->

        @include('common.footer')

</body>


</html>



