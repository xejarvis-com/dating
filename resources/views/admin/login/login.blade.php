
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Analytics - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="{{ url('css/admin_assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="https://demos.themeselection.com/chameleon-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/plugins/forms/switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/core/colors/palette-switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/pages/chat-application.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/pages/dashboard-analytics.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <img src="{{ url('css/admin_assets/images/logo/logo.png') }}" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center">
                                    Admin Login
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal" action="{{ url('/admin') }}" method="Post">
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" name="email" id="email" placeholder="Your Email" required>
                                            <div class="form-control-position">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" name="password" id="user-password" placeholder="Enter Password" required>
                                            <div class="form-control-position">
                                                <i class="fa-solid fa-lock"></i>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">

                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="#" class="card-link">Forgot Password?</a></div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Login</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{ url('css/admin_assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/vendors/js/forms/toggle/switchery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/js/scripts/forms/switch.min.js') }}" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('css/admin_assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url('css/admin_assets/js/core/app-menu.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/js/core/app.min.js') }}" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url('css/admin_assets/js/scripts/forms/form-login-register.min.js') }}" type="text/javascript"></script>
<!-- END: Page JS-->
<script src="{{ url('css/admin_assets/js/font-awesome.js') }}" type="text/javascript"></script>

</body>
<!-- END: Body-->

</html>
