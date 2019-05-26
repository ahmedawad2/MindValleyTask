<!DOCTYPE html>
<html lang="en" data-textdirection=@yield('direction', 'ltr') class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title', 'MindValley')</title>
    <link rel="apple-touch-icon" href="{{ asset('public/backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/backend/app-assets/images/ico/favicon.ico')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/backend/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/backend/app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/backend/app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/app-assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <!-- END VENDOR CSS-->

    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/backend/app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/app-assets/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/app-assets/css/colors.min.css')}}">
    <!-- END STACK CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/backend/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/backend/app-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/backend/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <!-- END Page Level CSS-->

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/css/style.css')}}">
    <!-- END Custom CSS-->

    @section('development_css')

</head>
<body data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"
      class="vertical-layout vertical-menu-modern menu-expanded fixed-navbar 2-columns">

<!-- ahmed upper navbar navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left">
                    <a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs">
                        <i class="ft-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="navbar-brand">
                        <img alt="stack admin logo"
                             src="{{asset('public/backend/app-assets/images/logo/stack-logo-light.png')}}"
                             class="brand-logo">
                        <h2 class="brand-text">MindValley</h2>
                    </a>
                </li>

                <li class="nav-item hidden-md-up float-xs-right">
                    <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">

                <ul class="nav navbar-nav float-xs-right">

                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- ahmed navigation menu part -->

<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow menu-bordered">

</div>


<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <!-- ahmed breadcrumb part -->


        <!-- ahmed here place all your content -->
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            {{--                            <div class="card-title text-xs-center">--}}
                            {{--                                <div class="p-1"><img src="{{asset('public/backend/app-assets/images/logo/stack-logo-dark.png')}}" alt="branding logo"></div>--}}
                            {{--                            </div>--}}
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login with MindValley</span>
                            </h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form method="post" class="form-horizontal form-simple" action="#" novalidate>
                                    {{ csrf_field()  }}
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <input type="text" class="form-control form-control-lg input-lg" name="email"
                                               id="email" placeholder="Your Username" required>
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" class="form-control form-control-lg input-lg"
                                               name="password" id="password" placeholder="Enter Password" required>
                                        <div class="form-control-position">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </fieldset>

                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i
                                                class="ft-unlock"></i> Login
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
</div>


<footer class="footer navbar-fixed-bottom footer-dark navbar-border ">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
                <span class="float-md-left d-xs-block d-md-inline-block">
                    Copyright  &copy; {{date('Y', time())}}
                    <a href="https://www.mindvalley.com/" target="_blank"
                       class="text-bold-800 grey darken-2">mindvalley.com </a> , All rights reserved.
                </span>
    </p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('public/backend/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script type="text/javascript" src="{{asset('public/backend/app-assets/vendors/js/ui/prism.min.js')}}"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/jquery.dataTables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/buttons.html5.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/buttons.print.min.js')}}"
        type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{asset('public/backend/app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('public/backend/app-assets/js/scripts/tables/datatables/datatable-advanced.min.js')}}"
        type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

@section('development_js')
</body>

</html>