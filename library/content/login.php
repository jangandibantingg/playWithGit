
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="<?php echo $server; ?>/library/assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="<?php echo $server; ?>/library/assets/css/main.css"/>
<link rel="stylesheet" href="<?php echo $server; ?>/library/assets/css/theme2.css"/>

</head>
<body class="font-montserrat">

<div class="auth">
    <div class="auth_left">
        <div class="card">
            <div class="text-center mb-2">
                <a class="header-brand" href="#"><i class="fe fe-command brand-logo"></i></a>
            </div>
            <div class="card-body">

              <form id="form" action="webapp/engoncode/auth/login" method="post">
                <p id="info" ></p>

                <div class="card-title">Login to your account</div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="form-label">Password<a href="#" class="float-right small">I forgot password</a></label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked/>
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" id="submit" class="btn btn-primary btn-primary-block "> <i class="fa fa-lock"></i> Login </button>
                </div>
              </form>

            </div>
            <div class="text-center text-muted">
                Don't have account yet? <a href="#">Sign up</a>
            </div>
        </div>
    </div>
    <div class="auth_right">
        <div class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $server; ?>/library/assets/images/slider1.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Fully Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $server; ?>/library/assets/images/slider2.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Quality Code and Easy Customizability</h4>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $server; ?>/library/assets/images/slider3.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Cross Browser Compatibility</h4>
                        <p>Overview We're a group of women who want to learn JavaScript.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo $server; ?>/library/assets/bundles/lib.vendor.bundle.js"></script>
<script src="<?php echo $server; ?>/library/assets/js/core.js"></script>
<script src="<?php echo $server; ?>/library/form.js" ></script>
