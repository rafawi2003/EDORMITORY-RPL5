<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>    Login
MyDormitory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="MyDormitory | Telkom University MyDormitory" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7_fxOrHTnSYtwclwVqKDkRbkbAMZc1hVLj-mfLJK7Vg&s">

    <!-- App css -->
    <link href="https://toss.telkomuniversity.ac.id/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://toss.telkomuniversity.ac.id/assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="https://toss.telkomuniversity.ac.id/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://toss.telkomuniversity.ac.id/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="https://toss.telkomuniversity.ac.id/assets/css/app.css" rel="stylesheet" type="text/css" />
    </head>

<body class="account-body accountbg">

    <!-- content -->
        <!-- Log In page -->
    <nav class="navbar navbar-light bg-white" style="background-color: #fff;">
        <div class="mx-auto my-0 order-0 order-md-1 position-relative">
            <a class="navbar-brand" href="#">
                <img src="https://dormitory.telkomuniversity.ac.id/wp-content/uploads/2020/08/Logo-Asrama-Tel-U-long-ori-e1598410380797.png" width="300" alt="">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row vh-100 ">
            <div class="col-12 align-self-center mb-5">
                <div class="text-center auth-logo-text">
                    <h4 class="mt-0">Hello! <br> Welcome to E-Dormitory</h4>
                    <h2 class="mt-0 mb-3">SSO LOGIN</h2>
                </div>
                <div class="auth-page">
                    <div class="card-access auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form-horizontal auth-form my-4" method="POST" action="https://toss.telkomuniversity.ac.id/login">
                                    <input type="hidden" name="_token" value="KvdlrEFTz6GQPFLQW29hZB82hxroAC1BwoJzqag2">                                    <div class="form-group">
                                        <label for="username" class="label-access">Username</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-user"></i>
                                            </span>
                                            <input id="username" type="text" placeholder="username"
                                                class="form-control " name="username"
                                                 value=""                                                 value="" required autocomplete="username" autofocus>

                                            
                                        </div>
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group">
                                        <label for="userpassword" class="label-access">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-lock"></i>
                                            </span>

                                            <input id="password" type="password" placeholder="Password"
                                                class="form-control " name="password"
                                                value="" required autocomplete="current-password">

                                            
                                        </div>
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group row mt-4">
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-switch switch-success">
                                                <input class="custom-control-input" type="checkbox" name="remember"
                                                    id="customSwitchSuccess" >

                                                <label class="custom-control-label text-muted"
                                                    for="customSwitchSuccess">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-light btn-round btn-block text-dark" type="submit">Log
                                                In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end form-group-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                    <!--end account-social-->
                </div>
                <div class="text-center auth-logo-text">
                    <h6><a href="/dashboard"><i ></i> Bypass Login</a></h6>
                </div>
                <!--end auth-page-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->

    <!-- jQuery  -->
   

    <!-- App js -->
    <script src="https://toss.telkomuniversity.ac.id/assets/js/app.js"></script>

</body>

</html>
