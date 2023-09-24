<!DOCTYPE html>
<html lang="en" dir="ltr" 
  >

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

    <link rel="icon" href=" type="image/x-icon">

    <script src="../assets/js/authentication-main.js"></script>
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet"> <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet">



</head>



    <div class="mb-4 text-sm text-gray-600" class="col-xl-4">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
            <Br><br><br><Br><br><br>
                <div class="card-title">Email Verification </div> <a href="javascript:void(0);"
                  > <i class="ri-close-line fs-18"></i> </a>
            </div>
            <Br><br><br><Br><br><br>
            <div class="card-body">
                <h3 class="card-text fw-semibold">Verify Your Email</h3><br>
                <h2 class="card-text mb-0">   {{ __('Thanks for signing up! Before getting started,
                    could you verify your email address 
                    by clicking on the link we just emailed to you? If you didn\'t receive the email,
                     we will gladly send you another.') }}  </h2>
            </div>

            @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif
            <div class="card-footer">

            <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            
            <div>

            <button class="btn btn-primary">  {{ __('Resend Verification Email') }}</button> 
            </form>  
            <form method="POST" action="{{ route('logout') }}">
                   @csrf
                &emsp;&emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;
                &emsp;&emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp;&emsp;   <button  class="btn btn-danger-ghost btn-wave">  {{ __('Log Out') }} </button>
               
                </form> 
        </div>

                   
                

               
                
                </div>
        </div>
    </div>



