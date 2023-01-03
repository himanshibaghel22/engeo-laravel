<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 10:06:13 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Log In | Shiv Shakti</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('public/admin_assets') }}/images/favicon.ico">
        
        <!-- Theme Config Js -->
        <script src="{{ url('public/admin_assets') }}/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="{{ url('public/admin_assets') }}/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ url('public/admin_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    
        <style>
            .error
            {
                color: red;
                font-size: 12px;
            }
        </style>
    </head>
    
    <body class="authentication-bg">
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <span style="color: white; font-size: 20px;"><b>Shiv Shakti</b></span>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                    <p class="text-muted mb-4">Enter your username and password to access admin panel.</p>
                                </div>
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif
                                <form action="{{ url('login') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input class="form-control" type="text" name="username" id="username" value="{{ old('username') }}"   placeholder="Enter Username">
                                        <span class="error">@error('username')
                                           * {{ $message }}
                                        @enderror</span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" value="{{ old('username') }}" class="form-control" placeholder="Enter your Password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                        <span class="error">@error('password')
                                           * {{ $message }}
                                        @enderror</span>
                                    </div>

                                    <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit" name="submit"> Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
           <script>document.write(new Date().getFullYear())</script> © Design and Devloped by MyProject HD
        </footer>
        <!-- Vendor js -->
        <script src="{{ url('public/admin_assets') }}/js/vendor.min.js"></script>
        
        <!-- App js -->
        <script src="{{ url('public/admin_assets') }}/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 10:06:13 GMT -->
</html>
