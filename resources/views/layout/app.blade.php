<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="ASAN Webs Development">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <link rel="shortcut icon" href="./images/favicon.png">
    <title>{{ env('APP_NAME') }} | {{ env('APP_DESC') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.1.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.1.0') }}">
</head>

<body class="nk-body bg-white npc-default has-aside ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-menu">
                                <ul class="nk-menu nk-menu-main">
                                    <li class="nk-menu-item">
                                        <a href="html/index.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Overview</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-text">Apps</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="html/apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">Messages</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">Inbox / Mail</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/apps-file-manager.html" class="nk-menu-link"><span class="nk-menu-text">File Manager</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/apps-chats.html" class="nk-menu-link"><span class="nk-menu-text">Chats / Messenger</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/apps-calendar.html" class="nk-menu-link"><span class="nk-menu-text">Calendar</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/apps-kanban.html" class="nk-menu-link"><span class="nk-menu-text">Kanban Board</span></a>
                                            </li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Components</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/support-kb.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Support</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/pages/contact.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Contact</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                </ul><!-- .nk-menu -->
                            </div><!-- .nk-header-menu -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="./images/flags/english-sq.png" alt="">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/english.png" alt="" class="language-flag">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/french.png" alt="" class="language-flag">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-lg-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                    <div class="user-action">
                                                        <a class="btn btn-icon me-n2" href="html/user-profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="d-lg-none">
                                        <a href="#" class="toggle nk-quick-nav-icon me-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                                    </li>
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                                <div class="nk-sidebar-menu" data-simplebar>
                                    <ul class="nk-menu nk-menu-main">
                                        <li class="nk-menu-item">
                                            <a href="html/index.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Overview</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Apps</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">Messages</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">Inbox / Mail</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/apps-file-manager.html" class="nk-menu-link"><span class="nk-menu-text">File Manager</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/apps-chats.html" class="nk-menu-link"><span class="nk-menu-text">Chats / Messenger</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/apps-calendar.html" class="nk-menu-link"><span class="nk-menu-text">Calendar</span><span class="nk-menu-badge">New</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/apps-kanban.html" class="nk-menu-link"><span class="nk-menu-text">Kanban Board</span><span class="nk-menu-badge">New</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="html/components.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Components</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="html/support-kb.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Support</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="html/pages/contact.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Contact</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                    </ul><!-- .nk-menu -->
                                    <ul class="nk-menu">
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">Use-Case Concept</h6>
                                        </li><!-- .nk-menu-heading -->
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/index.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking"></em></span>
                                                <span class="nk-menu-text">Subscription - SaaS</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">Dashboards</h6>
                                        </li><!-- .nk-menu-heading -->
                                        <li class="nk-menu-item">
                                            <a href="html/index.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                                <span class="nk-menu-text">SaaS Dashboard</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="html/index-analytics.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                                <span class="nk-menu-text">Analytics Dashboard</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">Pre-Built Pages</h6>
                                        </li><!-- .nk-menu-heading -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                                <span class="nk-menu-text">Projects</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/project-card.html" class="nk-menu-link"><span class="nk-menu-text">Project Cards</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Project List</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                                <span class="nk-menu-text">User Manage</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                                <span class="nk-menu-text">Order & Invoice</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/history-payment.html" class="nk-menu-link"><span class="nk-menu-text">Payment History</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/history-invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/history-invoice.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Detail</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                                <span class="nk-menu-text">Products</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/product-list.html" class="nk-menu-link"><span class="nk-menu-text">Product List</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/product-card.html" class="nk-menu-link"><span class="nk-menu-text">Product Card</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/product-details.html" class="nk-menu-link"><span class="nk-menu-text">Product Details</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="html/pricing-table.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-view-col"></em></span>
                                                <span class="nk-menu-text">Pricing Table</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="html/gallery.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-img"></em></span>
                                                <span class="nk-menu-text">Image Gallery</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                                <span class="nk-menu-text">Support & Ticket</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/support-kb.html" class="nk-menu-link"><span class="nk-menu-text">Support - KB</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/support-kb-topics.html" class="nk-menu-link"><span class="nk-menu-text">Support - KB Topic</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/support-kb-details.html" class="nk-menu-link"><span class="nk-menu-text">Support - KB Details</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/ticket-list.html" class="nk-menu-link"><span class="nk-menu-text">Ticket List</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/ticket-details.html" class="nk-menu-link"><span class="nk-menu-text">Ticket Details</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/history-invoice.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Detail</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span>
                                                <span class="nk-menu-text">Auth Pages</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/auths/auth-login.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/auths/auth-register.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/auths/auth-success.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Classic Version - v2</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item">
                                                            <a href="html/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">No Slider Version - v3</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item">
                                                            <a href="html/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                                <span class="nk-menu-text">Error Pages</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Classic</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Classic</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Modern</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Modern</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                                <span class="nk-menu-text">Other Pages</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/_blank.html" class="nk-menu-link"><span class="nk-menu-text">Blank / Startup</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/pricing.html" class="nk-menu-link"><span class="nk-menu-text">Pricing Plan</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Faqs / Help</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/contact.html" class="nk-menu-link"><span class="nk-menu-text">Contact</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/terms-policy.html" class="nk-menu-link"><span class="nk-menu-text">Terms / Policy</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/regular-v1.html" class="nk-menu-link"><span class="nk-menu-text">Regular Page - v1</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/regular-v2.html" class="nk-menu-link"><span class="nk-menu-text">Regular Page - v2</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">Others</h6>
                                        </li><!-- .nk-menu-heading -->
                                        <li class="nk-menu-item">
                                            <a href="html/email-templates.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                                                <span class="nk-menu-text">Email Template</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/components.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                                <span class="nk-menu-text">All Components</span>
                                            </a>
                                        </li>
                                    </ul><!-- .nk-menu -->
                                </div><!-- .nk-sidebar-menu -->
                                <div class="nk-aside-close">
                                    <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                                </div><!-- .nk-aside-close -->
                            </div><!-- .nk-aside -->
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Overview</h3>
                                                <div class="nk-block-des text-soft">
                                                    <p>Welcome to DashLite Dashboard Template.</p>
                                                </div>
                                            </div><!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content">
                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="toggle-expand-content" data-content="pageMenu">
                                                        <ul class="nk-block-tools g-3">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                            <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                            <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head-content -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="row g-gs">
                                            <div class="col-sm-6">
                                                <div class="card card-bordered">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start mb-2">
                                                            <div class="card-title">
                                                                <h6 class="title">Active Subscriptions</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total active subscription"></em>
                                                            </div>
                                                        </div>
                                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                            <div class="nk-sale-data">
                                                                <span class="amount">9.69K</span>
                                                                <span class="sub-title"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>since last month</span>
                                                            </div>
                                                            <div class="nk-sales-ck">
                                                                <canvas class="sales-bar-chart" id="activeSubscription"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                            <div class="col-sm-6">
                                                <div class="card card-bordered">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start mb-2">
                                                            <div class="card-title">
                                                                <h6 class="title">Avg Subscriptions</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Daily Avg. subscription"></em>
                                                            </div>
                                                        </div>
                                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                            <div class="nk-sale-data">
                                                                <span class="amount">346.2</span>
                                                                <span class="sub-title"><span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>2.45%</span>since last week</span>
                                                            </div>
                                                            <div class="nk-sales-ck">
                                                                <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                            <div class="col-xl-6">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start mb-2">
                                                            <div class="card-title">
                                                                <h6 class="title">Sales Revenue</h6>
                                                                <p>In last 30 days revenue from subscription.</p>
                                                            </div>
                                                            <div class="card-tools">
                                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Revenue from subscription"></em>
                                                            </div>
                                                        </div>
                                                        <div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-xl-wrap">
                                                            <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                                <div class="nk-sale-data">
                                                                    <span class="amount">14,299.59 <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>16.93%</span></span>
                                                                    <span class="sub-title">This Month</span>
                                                                </div>
                                                                <div class="nk-sale-data">
                                                                    <span class="amount">7,299.59 <span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>4.26%</span></span>
                                                                    <span class="sub-title">This Week</span>
                                                                </div>
                                                            </div>
                                                            <div class="nk-sales-ck sales-revenue">
                                                                <canvas class="sales-bar-chart" id="salesRevenue"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-xl-6">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start gx-3 mb-3">
                                                            <div class="card-title">
                                                                <h6 class="title">Sales Overview</h6>
                                                                <p>In 30 days sales of product subscription.</p>
                                                            </div>
                                                            <div class="card-tools">
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-primary btn-dim d-none d-sm-inline-flex" data-bs-toggle="dropdown"><em class="icon ni ni-download-cloud"></em><span>Report</span></a>
                                                                    <a href="#" class="btn btn-icon btn-primary btn-dim d-sm-none" data-bs-toggle="dropdown"><em class="icon ni ni-download-cloud"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><span>Download Mini Version</span></a></li>
                                                                            <li><a href="#"><span>Download Full Version</span></a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#"><em class="icon ni ni-opt-alt"></em><span>More Options</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-sale-data-group align-center justify-between gy-3 gx-5">
                                                            <div class="nk-sale-data">
                                                                <span class="amount">$82,944.60</span>
                                                            </div>
                                                            <div class="nk-sale-data">
                                                                <span class="amount sm">1,937 <small>Subscribers</small></span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-sales-ck large pt-4">
                                                            <canvas class="sales-overview-chart" id="salesOverview"></canvas>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                            <div class="col-12">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title"><span class="me-2">Invoices</span> <a href="html/history-payment.html" class="link d-none d-sm-inline">See History</a></h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <ul class="card-tools-nav">
                                                                    <li><a href="#"><span>Paid</span></a></li>
                                                                    <li><a href="#"><span>Pending</span></a></li>
                                                                    <li class="active"><a href="#"><span>All</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner p-0 border-top">
                                                        <div class="nk-tb-list nk-tb-orders">
                                                            <div class="nk-tb-item nk-tb-head">
                                                                <div class="nk-tb-col"><span>Order No.</span></div>
                                                                <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                                                                <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                                                <div class="nk-tb-col tb-col-lg"><span>Ref</span></div>
                                                                <div class="nk-tb-col"><span>Amount</span></div>
                                                                <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                                                                <div class="nk-tb-col"><span>&nbsp;</span></div>
                                                            </div>
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead"><a href="#">#95954</a></span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar user-avatar-sm bg-purple">
                                                                            <span>AB</span>
                                                                        </div>
                                                                        <div class="user-name">
                                                                            <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span class="tb-sub">02/11/2020</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span class="tb-sub text-primary">SUB-2309232</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-sub tb-amount">4,596.75 <span>USD</span></span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-action">
                                                                    <div class="dropdown">
                                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                            <ul class="link-list-plain">
                                                                                <li><a href="#">View</a></li>
                                                                                <li><a href="#">Invoice</a></li>
                                                                                <li><a href="#">Print</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead"><a href="#">#95850</a></span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar user-avatar-sm bg-azure">
                                                                            <span>DE</span>
                                                                        </div>
                                                                        <div class="user-name">
                                                                            <span class="tb-lead">Desiree Edwards</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span class="tb-sub">02/02/2020</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span class="tb-sub text-primary">SUB-2309154</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-sub tb-amount">596.75 <span>USD</span></span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-danger">Canceled</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-action">
                                                                    <div class="dropdown">
                                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                            <ul class="link-list-plain">
                                                                                <li><a href="#">View</a></li>
                                                                                <li><a href="#">Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead"><a href="#">#95812</a></span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar user-avatar-sm bg-warning">
                                                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                                                        </div>
                                                                        <div class="user-name">
                                                                            <span class="tb-lead">Blanca Schultz</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span class="tb-sub">02/01/2020</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span class="tb-sub text-primary">SUB-2309143</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-sub tb-amount">199.99 <span>USD</span></span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-action">
                                                                    <div class="dropdown">
                                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                            <ul class="link-list-plain">
                                                                                <li><a href="#">View</a></li>
                                                                                <li><a href="#">Invoice</a></li>
                                                                                <li><a href="#">Print</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead"><a href="#">#95256</a></span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar user-avatar-sm bg-purple">
                                                                            <span>NL</span>
                                                                        </div>
                                                                        <div class="user-name">
                                                                            <span class="tb-lead">Naomi Lawrence</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span class="tb-sub">01/29/2020</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span class="tb-sub text-primary">SUB-2305684</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-action">
                                                                    <div class="dropdown">
                                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                            <ul class="link-list-plain">
                                                                                <li><a href="#">View</a></li>
                                                                                <li><a href="#">Invoice</a></li>
                                                                                <li><a href="#">Print</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead"><a href="#">#95135</a></span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar user-avatar-sm bg-success">
                                                                            <span>CH</span>
                                                                        </div>
                                                                        <div class="user-name">
                                                                            <span class="tb-lead">Cassandra Hogan</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span class="tb-sub">01/29/2020</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span class="tb-sub text-primary">SUB-2305564</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-warning">Due</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-action">
                                                                    <div class="dropdown">
                                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                            <ul class="link-list-plain">
                                                                                <li><a href="#">View</a></li>
                                                                                <li><a href="#">Invoice</a></li>
                                                                                <li><a href="#">Notify</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner-sm border-top text-center d-sm-none">
                                                        <a href="#" class="btn btn-link btn-block">See History</a>
                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                            <div class="col-lg-6">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner border-bottom">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Recent Activities</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <ul class="card-tools-nav">
                                                                    <li><a href="#"><span>Cancel</span></a></li>
                                                                    <li class="active"><a href="#"><span>All</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-activity is-scrollable h-325px">
                                                        <li class="nk-activity-item">
                                                            <div class="nk-activity-media user-avatar bg-success"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                                            <div class="nk-activity-data">
                                                                <div class="label">Keith Jensen requested to Widthdrawl.</div>
                                                                <span class="time">2 hours ago</span>
                                                            </div>
                                                        </li>
                                                        <li class="nk-activity-item">
                                                            <div class="nk-activity-media user-avatar bg-warning">HS</div>
                                                            <div class="nk-activity-data">
                                                                <div class="label">Harry Simpson placed a Order.</div>
                                                                <span class="time">2 hours ago</span>
                                                            </div>
                                                        </li>
                                                        <li class="nk-activity-item">
                                                            <div class="nk-activity-media user-avatar bg-azure">SM</div>
                                                            <div class="nk-activity-data">
                                                                <div class="label">Stephanie Marshall got a huge bonus.</div>
                                                                <span class="time">2 hours ago</span>
                                                            </div>
                                                        </li>
                                                        <li class="nk-activity-item">
                                                            <div class="nk-activity-media user-avatar bg-purple"><img src="./images/avatar/d-sm.jpg" alt=""></div>
                                                            <div class="nk-activity-data">
                                                                <div class="label">Nicholas Carr deposited funds.</div>
                                                                <span class="time">2 hours ago</span>
                                                            </div>
                                                        </li>
                                                        <li class="nk-activity-item">
                                                            <div class="nk-activity-media user-avatar bg-pink">TM</div>
                                                            <div class="nk-activity-data">
                                                                <div class="label">Timothy Moreno placed a Order.</div>
                                                                <span class="time">2 hours ago</span>
                                                            </div>
                                                        </li>
                                                        <li class="nk-activity-item">
                                                            <div class="nk-activity-media user-avatar bg-warning">HS</div>
                                                            <div class="nk-activity-data">
                                                                <div class="label">Harry Simpson placed a Order.</div>
                                                                <span class="time">2 hours ago</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                            <div class="col-lg-6">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner border-bottom">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Support Requests</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <a href="#" class="link">All Tickets</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-support">
                                                        <li class="nk-support-item">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/a-sm.jpg" alt="">
                                                            </div>
                                                            <div class="nk-support-content">
                                                                <div class="title">
                                                                    <span>Vincent Lopez</span><span class="badge badge-dot badge-dot-xs bg-warning ms-1">Pending</span>
                                                                </div>
                                                                <p>Thanks for contact us with your issues...</p>
                                                                <span class="time">6 min ago</span>
                                                            </div>
                                                        </li>
                                                        <li class="nk-support-item">
                                                            <div class="user-avatar bg-purple-dim">
                                                                <span>DM</span>
                                                            </div>
                                                            <div class="nk-support-content">
                                                                <div class="title">
                                                                    <span>Daniel Moore</span><span class="badge badge-dot badge-dot-xs bg-info ms-1">Open</span>
                                                                </div>
                                                                <p>Thanks for contact us with your issues...</p>
                                                                <span class="time">2 Hours ago</span>
                                                            </div>
                                                        </li>
                                                        <li class="nk-support-item">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                                            </div>
                                                            <div class="nk-support-content">
                                                                <div class="title">
                                                                    <span>Larry Henry</span><span class="badge badge-dot badge-dot-xs bg-success ms-1">Solved</span>
                                                                </div>
                                                                <p>Thanks for contact us with your issues...</p>
                                                                <span class="time">3 Hours ago</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .nk-block -->
                                </div>
                                <!-- footer @s -->
                                <div class="nk-footer">
                                    <div class="container wide-xl">
                                        <div class="nk-footer-wrap g-2">
                                            <div class="nk-footer-copyright"> &copy; 2022 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                                            </div>
                                            <div class="nk-footer-links">
                                                <ul class="nav nav-sm">
                                                    <li class="nav-item dropup">
                                                        <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                            <ul class="language-list">
                                                                <li>
                                                                    <a href="#" class="language-item">
                                                                        <span class="language-name">English</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="language-item">
                                                                        <span class="language-name">Español</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="language-item">
                                                                        <span class="language-name">Français</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="language-item">
                                                                        <span class="language-name">Türkçe</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer @e -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=3.1.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.1.0') }}"></script>
    <script src="{{ asset('assets/js/charts/gd-default.js?ver=3.1.0') }}"></script>
</body>

</html>