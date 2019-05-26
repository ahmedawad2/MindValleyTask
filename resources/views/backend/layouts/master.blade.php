<!DOCTYPE html>
<html lang="en" data-textdirection=@yield('direction', 'ltr') class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    {{--<meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">--}}
    {{--<meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">--}}
    {{--<meta name="author" content="PIXINVENT">--}}
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
          href="{{asset('public/backend/app-assets/vendors/css/forms/selects/select2.min.css')}}">
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

    @yield('development_css')

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
                <li class="nav-item hidden-sm-down float-xs-right">
                    <a data-toggle="collapse" class="nav-link modern-nav-toggle">
                        <i data-ticon="ft-toggle-right" class="toggle-icon ft-toggle-right font-medium-3 white"></i>
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
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down">
                        <a href="#" class="nav-link nav-link-expand">
                            <i class="ficon ft-maximize"></i>
                        </a>
                    </li>
                    <!-- ahmed search icon in the upper navbar -->
                    <!--
                    <li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input type="text" placeholder="Explore Stack..." class="input">
                        </div>
                    </li>
                    -->
                </ul>
                <ul class="nav navbar-nav float-xs-right">

                    <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                                    <span class="avatar avatar-online">
                                        <img src="{{asset('public/backend/app-assets/images/portrait/small/avatar-s-1.png')}}"
                                             alt="avatar">
                                        <i></i>
                                    </span>
                            <span class="user-name">{{\Auth::user() ?  ucwords(\Auth::user()->name).' | '.ucwords(\Auth::user()->role['name']) : 'user'}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{--<a href="#" class="dropdown-item">--}}
                            {{--<i class="ft-user"></i> Edit Profile--}}
                            {{--</a>--}}
                            {{--<a href="#" class="dropdown-item">--}}
                            {{--<i class="ft-mail"></i> My Inbox--}}
                            {{--</a>--}}
                            {{--<a href="#" class="dropdown-item">--}}
                            {{--<i class="ft-check-square"></i> Task--}}
                            {{--</a>--}}
                            {{--<a href="#" class="dropdown-item">--}}
                            {{--<i class="ft-message-square"></i> Chats--}}
                            {{--</a>--}}

                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{route('logout')}}">
                                {{csrf_field()}}
                                <button type="submit" class="dropdown-item">
                                    <i class="ft-power"></i> Logout
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- ahmed navigation menu part -->

<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow menu-bordered">
    <div class="main-menu-content">


        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            {{--@yield('navigation_menu')--}}
            @include('backend.partials.navigation_menu')

        </ul>

    </div>
</div>


<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <!-- ahmed breadcrumb part -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-2">
                <h3 class="content-header-title mb-0">@yield('breadcrumb_header')</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            @yield('breadcrumb')
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <!-- ahmed here place all your content -->
        <div class="content-body">
            @yield('main_content')
        </div>
    </div>
</div>


<footer class="footer navbar-fixed-bottom footer-dark navbar-border ">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
                <span class="float-md-left d-xs-block d-md-inline-block">
                    Copyright  &copy; 2017
                    <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank"
                       class="text-bold-800 grey darken-2">PIXINVENT </a> , All rights reserved.
                </span>
    </p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('public/backend/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->


<script src="{{asset('public/backend/app-assets/vendors/js/forms/select/select2.full.min.js')}}"
        type="text/javascript"></script>

<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{asset('public/backend/app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('public/backend/app-assets/vendors/js/ui/prism.min.js')}}"></script>

<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->

<script src="{{asset('public/backend/app-assets/js/scripts/forms/select/form-select2.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/js/scripts/modal/components-modal.min.js')}}"
        type="text/javascript"></script>

<!-- my common javascript work is going here -->
<script>
    function carbonStringToJsDate(carbonString) {
        var JSDate = new Date(carbonString);
        return JSDate.getFullYear() + '-' + (JSDate.getMonth() + 1) + '-' + JSDate.getDate();
    }

    $(function () {
        $('a[href="{{URL::current()}}"]').parent().addClass('active');


    })
</script>
<!-- END PAGE LEVEL JS-->

@yield('development_js')
</body>
</html>
