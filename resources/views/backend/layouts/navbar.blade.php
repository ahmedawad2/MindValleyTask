{{--@extends('backend.layouts.header')--}}

<!-- ahmed upper navbar navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a href="index-2.html" class="navbar-brand"><img alt="stack admin logo" src="../../../app-assets/images/logo/stack-logo-light.png" class="brand-logo">
                        <h2 class="brand-text">index</h2></a></li>
                <li class="nav-item hidden-sm-down float-xs-right"><a data-toggle="collapse" class="nav-link modern-nav-toggle"><i data-ticon="ft-toggle-right" class="toggle-icon ft-toggle-right font-medium-3 white"></i></a></li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">

                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a></li>
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
                    <li class="dropdown dropdown-language nav-item"><a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                        <div aria-labelledby="dropdown-flag" class="dropdown-menu"><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-gb"></i> English</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-fr"></i> French</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-de"></i> German</a></div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon ft-bell"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                            </li>
                            <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% Server load</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Complete the task</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Generate monthly report</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
                                        </div>
                                    </div></a></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon ft-mail"></i><span class="tag tag-pill tag-default tag-warning tag-default tag-up">3</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-warning float-xs-right m-0">4 New</span></h6>
                            </li>
                            <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Margaret Govan</h6>
                                            <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Bret Lezama</h6>
                                            <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Carie Berra</h6>
                                            <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Eric Alsobrook</h6>
                                            <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                                        </div>
                                    </div></a></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">John Doe</span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a><a href="#" class="dropdown-item"><i class="ft-mail"></i> My Inbox</a><a href="#" class="dropdown-item"><i class="ft-check-square"></i> Task</a><a href="#" class="dropdown-item"><i class="ft-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->