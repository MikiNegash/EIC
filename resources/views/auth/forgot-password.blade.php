<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ethiopian Investment Commission </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,
        jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <link rel="icon" href="logo.jpg" type="image/x-icon">

    <script src="../assets/js/authentication-main.js"></script>
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet"> <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet">


    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <meta http-equiv="imagetoolbar" content="no" />

</head>



<div class="container-lg">
        <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-5 d-flex justify-content-center"> <a href="index.html"> <img
                src="logo.png"  alt="logo" class="desktop-logo"> <img
                src="logo.png"  alt="logo" class="desktop-dark"> </a>
                </div>
<div class="card custom-card">
                    <div class="card-body p-5">
                        <p class="h5 fw-semibold mb-2 text-center">Forgot your password?</p>
                        <p class="mb-3 text-muted text-center"> {{ __('
                             No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
   </p>
                        <div class="d-flex align-items-center mb-3">
                            <div class="lh-1"> </div>
                           
                        </div>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
   
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
                        <div class="row gy-3">
                            <div class="col-xl-12 mb-2"> <label for="lockscreen-password"
                                    class="form-label text-default">Email</label>
                                <div class="input-group">
                     <input type="email" id="email" class="form-control form-control-lg"  name="email" :value="old('email')" required autofocus
                                         placeholder="Enter Your Email"> 

                                        <x-input-error :messages="$errors->get('email')" class="invalid-feedback"  class="mt-2" />
                               </div>
                            
                            </div>

                            <div class="col-xl-12 d-grid mt-2">                 
      <button type="submit"   class="btn btn-lg btn-primary">
                                    {{ __('Email Password Reset Link') }}
                        </button>
                        
                        </form>
                       
                    </div>
                </div>

                </div>
        </div>
    </div>
    