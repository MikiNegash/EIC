<!DOCTYPE html><!-- saved from url=(0014)about:internet -->
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ethiopian Investment Commission < </title>
    <meta name="Description" content="Bootsrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <!-- Favicon -->
    <link rel="icon" href="logo.png" type="image/x-icon">
    <!-- Main Theme Js -->
    <script src="../assets/js/authentication-main.js"></script> <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet"> <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet">

    </script><noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <meta http-equiv="imagetoolbar" content="no" />

    <!--[if gte IE 5]><frame></frame><![endif]-->
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-5 d-flex justify-content-center"> <a href="index.html"> <img
                            src="logo.png" alt="logo" class="desktop-logo"> <img
                            src="logo.png" alt="logo" class="desktop-dark"> </a>
                </div>
                <div class="card custom-card">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form action="{{ route('login') }}" method="POST"  id="login-form" class="white-popup-block">
                    @csrf
                    <div class="card-body p-5">
                        <p class="h5 fw-semibold mb-2 text-center">Sign In</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome Back  !</p>
                        <div class="row gy-3">


                            <div class="col-xl-12"> <label for="signin-username" class="form-label text-default">User
                                    Name</label> <input type="text" class="form-control form-control-lg"
                                  type="email"  name="email" :value="old('email')" required autofocus autocomplete="username"      placeholder="Email *"> </div>

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                    <div class="col-xl-12 mb-2">


            <div class="input-group"> <input type="password" class="form-control form-control-lg"
            name="password" required autocomplete="current-password"  placeholder="password">

            <x-input-error :messages="$errors->get('password')" class="mt-2" />


                                        <button class="btn btn-light"
                                        type="button" onclick="createpassword('signin-password',this)"
                                        id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button> </div>
                                <div class="mt-2">
                                <Br>
                                    <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                            id="defaultCheck1">


                                            <label for="signin-password"
                                    class="form-label text-default d-block">Remember Me<a href="forgot-password"
                                        class="float-end text-danger">Forgot Password ?</a></label>
                                </div>
                            </div>
      <div class="col-xl-12 d-grid mt-2">

      <button type="submit"   class="btn btn-lg btn-primary">
                                    {{ __('Log in') }}
                                    </button>
       </div>
                        </div>
                        <div class="text-center">
                            <p class="fs-12 text-muted mt-3">Dont have an account? <a href="register"
                                    class="text-primary">Register</a></p>








                        </div>
                        <div class="text-center my-3 authentication-barrier"> <span>OR</span> </div>
                        <div class="btn-list text-center"> <button class="btn btn-icon btn-light"> <i
                                    class="ri-facebook-line fw-bold text-dark op-7"></i> </button> <button
                                class="btn btn-icon btn-light"> <i class="ri-google-line fw-bold text-dark op-7"></i>
                            </button> <button class="btn btn-icon btn-light"> <i
                                    class="ri-twitter-line fw-bold text-dark op-7"></i> </button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Show Password JS -->
    <script src="../assets/js/show-password.js"></script>
</body>

</html>
