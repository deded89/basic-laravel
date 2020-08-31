<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="" />
    <!-- Page Title -->
    <title>Sales Monitoring | Avesta - Multipurpose Admin Dashboard Template</title>
    <!-- Datepicket CSS -->
    <link type="text/css" rel="stylesheet"
        href="{{ asset('') }}plugins/daterangepicker/daterangepicker.css" />
    <!-- Chart CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('') }}plugins/chartist/chartist.css">
    <!-- Map CSS -->
    <link type="text/css" rel="stylesheet"
        href="{{ asset('') }}plugins/jqvmap/jquery-jvectormap-2.0.2.css">
    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('') }}css/style.css" />
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('') }}images/favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <!--================================-->
    <!-- Page Container Start -->
    <!--================================-->
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="index.html">
                    <img class="desktop-logo" src="{{ asset('') }}images/logo.png" alt="">
                    <img class="small-logo" src="{{ asset('') }}images/small-logo.png" alt="">
                </a>
                <a id="sidebar-toggle-button-close"><i class="wd-20" data-feather="x"></i> </a>
            </div>
            <!--================================-->
            <!-- Sidebar Menu Start -->
            <!--================================-->
            <div class="page-sidebar-inner">
                <div class="page-sidebar-menu">
                    <ul class="accordion-menu">
                        <li class="mg-l-20-force mg-t-25-force menu-navigation">Navigation</li>
                        <li class="open active">
                            <a href=""><i data-feather="home"></i>
                                <span>Dashboard</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu" style="display: block;">
                                <!-- Active Page -->
                                <li class="active"><a href="index.html">Sales</a></li>
                                <li><a href="index2.html">Analytics</a></li>
                                <li><a href="index3.html">Cryptocurrency</a></li>
                                <li><a href="index4.html">Helpdesk</a></li>
                                <li><a href="index5.html">Project</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="mail"></i>
                                <span>Mailbox</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="mailbox.html">Inbox</a></li>
                                <li><a href="mailbox-message.html">View Mail</a></li>
                                <li><a href="mailbox-compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="feather"></i>
                                <span>Apps View</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="app-chatroom.html">Chat Room</a></li>
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-file-manager.html">File Manager</a></li>
                            </ul>
                        </li>
                        <li class="mg-l-20-force mg-t-25-force menu-elements">Elements</li>
                        <li>
                            <a href=""><i data-feather="underline"></i>
                                <span>UI Elements</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="uie-accordion.html">Accordion</a></li>
                                <li><a href="uie-alert.html">Alerts</a></li>
                                <li><a href="uie-avatar.html">Avatar</a></li>
                                <li><a href="uie-badge.html">Badges</a></li>
                                <li><a href="uie-breadcrumbs.html">Breadcrumbs</a></li>
                                <li><a href="uie-buttons.html">Buttons</a></li>
                                <li><a href="uie-button-groups.html">Button Groups</a></li>
                                <li><a href="uie-cards.html">Cards</a></li>
                                <li><a href="uie-carousel.html">Carousel</a></li>
                                <li><a href="uie-collapse.html">Collapse</a></li>
                                <li><a href="uie-dropdown.html">Dropdown</a></li>
                                <li><a href="uie-images.html">Images</a></li>
                                <li><a href="uie-list-group.html">List Group</a></li>
                                <li><a href="uie-marker.html">Marker</a></li>
                                <li><a href="uie-modal.html">Modal</a></li>
                                <li><a href="uie-navs.html">Navs</a></li>
                                <li><a href="uie-navbar.html">Navbar</a></li>
                                <li><a href="uie-pagination.html">Pagination</a></li>
                                <li><a href="uie-placeholder.html">Placeholder</a></li>
                                <li><a href="uie-popovers.html">Popovers</a></li>
                                <li><a href="uie-progress.html">Progress</a></li>
                                <li><a href="uie-scrollbar.html">Scrollbar</a></li>
                                <li><a href="uie-scrollspy.html">Scrollspy</a></li>
                                <li><a href="uie-spinners.html">Spinners</a></li>
                                <li><a href="uie-tooltips.html">Tooltips</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="aperture"></i>
                                <span>UI Utilities</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="uiu-background.html">Background</a></li>
                                <li><a href="uiu-borders.html">Borders</a></li>
                                <li><a href="uiu-colors.html">Colors</a></li>
                                <li><a href="uiu-display.html">Display </a></li>
                                <li><a href="uiu-embeds.html">Embeds</a></li>
                                <li><a href="uiu-flex.html">Flex</a></li>
                                <li><a href="uiu-margin.html">Margin</a></li>
                                <li><a href="uiu-padding.html">Padding</a></li>
                                <li><a href="uiu-float.html">Float</a></li>
                                <li><a href="uiu-position.html">Position</a></li>
                                <li><a href="uiu-screenreaders.html">Screenreaders</a></li>
                                <li><a href="uiu-sizing.html">Sizing</a></li>
                                <li><a href="uiu-spacing.html">Spacing</a></li>
                                <li><a href="uiu-text.html">Text</a></li>
                                <li><a href="uiu-vertical-alignment.html">Vertical Alignment</a></li>
                                <li><a href="uiu-width.html">Width</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="grid"></i>
                                <span>Grid</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="grid-utilities-layout.html">Utilities for Layout</a></li>
                                <li><a href="grid-auto-layout-columns.html">Auto-layout Columns</a></li>
                                <li><a href="grid-responsive-classes.html">Responsive Classes</a></li>
                                <li><a href="grid-alignment.html">Alignment</a></li>
                                <li><a href="grid-reordering.html">Reordering</a></li>
                                <li><a href="grid-customizing-grid.html">Customizing Grid</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="gift"></i>
                                <span>Icons</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="icon-font-awesome.html">Font Awesome</a></li>
                                <li><a href="icon-feather.html">Feather Icons</a></li>
                                <li><a href="icon-mdi.html">Mdi icons</a></li>
                                <li><a href="icon-flag.html">Flag icons</a></li>
                                <li><a href="icon-simple-line.html">Simple line icons</a></li>
                                <li><a href="icon-themify.html">Themify icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="calendar"></i>
                                <span>Forms</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="form-element.html">Form Elements</a></li>
                                <li><a href="form-formatter.html">Form Formatter </a></li>
                                <li><a href="form-input-group.html">Input Group</a></li>
                                <li><a href="form-input-tag.html">Input Tags</a></li>
                                <li><a href="form-input-masks.html">Input Masks</a></li>
                                <li><a href="form-layout.html">Form Layouts</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-range-slider.html">Range Slider</a></li>
                                <li><a href="form-date-pickers.html">Date Pickers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="database"></i>
                                <span>Tables</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="table-static.html">Static</a></li>
                                <li><a href="table-responsive.html">Responsive</a></li>
                                <li><a href="table-datatable.html">Data Tables</a></li>
                                <li><a href="table-footable.html">Foo Tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="pie-chart"></i>
                                <span>Charts</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="chart-apex.html">Apex</a></li>
                                <li><a href="chart-google.html">Google</a></li>
                                <li><a href="chart-morris.html">Morris</a></li>
                                <li><a href="chart-chartjs.html">ChartJS</a></li>
                                <li><a href="chart-flot.html">Flot</a></li>
                                <li><a href="chart-chartlist.html">Chartlist</a></li>
                                <li><a href="chart-sparkline.html">Sparkline</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="map"></i>
                                <span>Maps</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="map-google.html">Google Maps</a></li>
                                <li><a href="map-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="mg-l-20-force mg-t-25-force menu-extras">Extras</li>
                        <li>
                            <a href=""><i data-feather="cpu"></i>
                                <span>Authentication</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="aut-error404.html">404 Page</a></li>
                                <li><a href="aut-error500.html">500 Page</a></li>
                                <li><a href="aut-signin.html">Login</a></li>
                                <li><a href="aut-signup.html">Register</a></li>
                                <li><a href="aut-unlock.html">Lockscreen</a></li>
                                <li><a href="aut-password.html">password Reset</a></li>
                                <li><a href="aut-logign-register.html">Login + Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="git-pull-request"></i>
                                <span>Plugins</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="plg-bootbox.html">Bootbox</a></li>
                                <li><a href="plg-block-ui.html">BlockUI</a></li>
                                <li><a href="plg-bootstrap-data-table.html">Bootstrap dataTable</a></li>
                                <li><a href="plg-bootstrap-daterangepicker.html">Bootstrap Daterangepicker</a></li>
                                <li><a href="plg-bootstrap-dateTimePicker.html">Bootstrap DateTimePicker</a></li>
                                <li><a href="plg-bootstrap-dual-listbox.html">Bootstrap Dual Listbox</a></li>
                                <li><a href="plg-bootstrap-slider.html">Bootstrap Slider</a></li>
                                <li><a href="plg-bootstrap-markdown.html">Bootstrap Markdown</a></li>
                                <li><a href="plg-bootstrap-maxlength.html">Bootstrap Maxlength</a></li>
                                <li><a href="plg-bootstrap-multiselect.html">Bootstrap Multiselect</a></li>
                                <li><a href="plg-bootstrap-pwstrength.html">Bootstrap Pwstrength</a></li>
                                <li><a href="plg-bootstrap-select.html">Bootstrap Select</a></li>
                                <li><a href="plg-bootstrap-sortable.html">Bootstrap Sortable</a></li>
                                <li><a href="plg-bootstrap-tagsinput.html">Bootstrap Tagsinput</a></li>
                                <li><a href="plg-cropper.html">Cropper</a></li>
                                <li><a href="plg-clipboard.html">Clipboard</a></li>
                                <li><a href="plg-codeeditor.html">Code Editor</a></li>
                                <li><a href="plg-dropzone.html">Dropzone</a></li>
                                <li><a href="plg-dragula.html">Dragula</a></li>
                                <li><a href="plg-flow-js.html">Flow.js</a></li>
                                <li><a href="plg-fullcalendar.html">Fullcalendar</a></li>
                                <li><a href="plg-flatpickr.html">Flatpickr</a></li>
                                <li><a href="plg-growl.html">Growl</a></li>
                                <li><a href="plg-idle-timer.html">IdleTimer</a></li>
                                <li><a href="plg-knob.html">Knob</a></li>
                                <li><a href="plg-ladda.html">Ladda</a></li>
                                <li><a href="plg-masonry.html">Masonry</a></li>
                                <li><a href="plg-nestable.html">Nestable</a></li>
                                <li><a href="plg-numeral.html">Numeral</a></li>
                                <li><a href="plg-no-ui-slider.html">noUiSlider</a></li>
                                <li><a href="plg-photoswipe.html">Photoswipe</a></li>
                                <li><a href="plg-plyr.html">Plyr</a></li>
                                <li><a href="plg-sortable-js.html">Sortable.js</a></li>
                                <li><a href="plg-spinkit.html">Spinkit</a></li>
                                <li><a href="plg-swiper.html">Swiper</a></li>
                                <li><a href="plg-select2.html">Select2</a></li>
                                <li><a href="plg-sweet-alert2.html">SweetAlert2</a></li>
                                <li><a href="plg-SmartWizard.html">SmartWizard</a></li>
                                <li><a href="plg-typeahead.html">Typeahead</a></li>
                                <li><a href="plg-toastr.html">Toastr</a></li>
                                <li><a href="plg-jstree.html">Tree</a></li>
                                <li><a href="plg-vanilla-text-mask.html">Vanilla Text Mask</a></li>
                                <li><a href="plg-wysiwyg.html">WYSIWYG Editor</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="codepen"></i>
                                <span>Pages</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="pages-article.html">Articles</a></li>
                                <li><a href="pages-contact.html">Contacts</a></li>
                                <li><a href="pages-faq.html">FAQ's</a></li>
                                <li><a href="pages-forum.html">Forum</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-profile.html">Profile</a></li>
                                <li><a href="pages-product.html">Products</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-project.html">Projects</a></li>
                                <li><a href="pages-search.html">Search</a></li>
                                <li><a href="pages-ticket.html">Tickets</a></li>
                                <li><a href="pages-voting.html">Voting</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i data-feather="codepen"></i>
                                <span>UI Kit</span><i class="accordion-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li><a href="uik-base.html" target="_blank">Base</a></li>
                                <li><a href="uik-company.html" target="_blank">Company</a></li>
                                <li><a href="uik-ecommerce.html" target="_blank">E-Commerce</a></li>
                                <li><a href="uik-magazine.html" target="_blank">Magazine</a></li>
                                <li><a href="uik-social.html" target="_blank">Social</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="email-template.html"><i data-feather="printer"></i>
                                <span>Mail Template</span></a>
                        </li>
                        <li class="mg-l-20-force mg-t-25-force menu-others">Others</li>
                        <li>
                            <a href="../documentation/documentation.html"><i data-feather="life-buoy"></i>
                                <span>Documentation</span></a>
                        </li>
                        <li>
                            <a href="../documentation/changelog.html"><i data-feather="coffee"></i>
                                <span>Changelog</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/ Sidebar Menu End -->
            <!--================================-->
            <!-- Sidebar Footer Start -->
            <!--================================-->
            <div class="sidebar-footer">
                <a class="pull-left" href="pages-profile.html" data-toggle="tooltip" data-placement="top"
                    data-original-title="Profile">
                    <i data-feather="user" class="wd-16"></i></a>
                <a class="pull-left " href="mailbox.html" data-toggle="tooltip" data-placement="top"
                    data-original-title="Mailbox">
                    <i data-feather="mail" class="wd-16"></i></a>
                <a class="pull-left" href="aut-unlock.html" data-toggle="tooltip" data-placement="top"
                    data-original-title="Lockscreen">
                    <i data-feather="lock" class="wd-16"></i></a>
                <a class="pull-left" href="aut-signin.html" data-toggle="tooltip" data-placement="top"
                    data-original-title="Sing Out">
                    <i data-feather="log-out" class="wd-16"></i></a>
            </div>
            <!--/ Sidebar Footer End -->
        </div>
        <!--/ Page Sidebar End -->
        <!--================================-->
        <!-- Page Content Start -->
        <!--================================-->
        <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input class="form-control search-input typeahead" name="search"
                                placeholder="Type something..." type="text" />
                            <span class="input-group-btn"><span id="close-search"><i data-feather="x"
                                        class="wd-16"></i></span></span>
                        </div>
                    </form>
                </div>
                <nav class="navbar navbar-default">
                    <!--================================-->
                    <!-- Brand and Logo Start -->
                    <!--================================-->
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            <ul class="list-inline">
                                <!-- Mobile Toggle and Logo -->
                                <li class="list-inline-item"><a class="hidden-md hidden-lg" href="#"
                                        id="sidebar-toggle-button"><i data-feather="menu" class="wd-20"></i></a></li>
                                <!-- PC Toggle and Logo -->
                                <li class="list-inline-item"><a class=" hidden-xs hidden-sm" href="#"
                                        id="collapsed-sidebar-toggle-button"><i data-feather="menu"
                                            class="wd-20"></i></a></li>
                                <li class="list-inline-item mg-l-10"><a href="#" id="search-button"><i
                                            data-feather="search" class="wd-20"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ Brand and Logo End -->
                    <!--================================-->
                    <!-- Header Right Start -->
                    <!--================================-->
                    <div class="header-right pull-right">
                        <ul class="list-inline justify-content-end">
                            <!--================================-->
                            <!-- Languages Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a href="" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="flag-icon flag-icon-us"></i>
                                </a>
                                <ul class="dropdown-menu languages-dropdown">
                                    <li>
                                        <a href="" data-lang="en"><i
                                                class="flag-icon flag-icon-us mr-2"></i><span>English-US</span></a>
                                    </li>
                                    <li>
                                        <a href="" data-lang="es"><i
                                                class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span></a>
                                    </li>
                                    <li>
                                        <a href="" data-lang="fr"><i
                                                class="flag-icon flag-icon-fr mr-2"></i><span>French</span></a>
                                    </li>
                                    <li>
                                        <a href="" data-lang="gr"><i
                                                class="flag-icon flag-icon-de mr-2"></i><span>German</span></a>
                                    </li>
                                    <li>
                                        <a href="" data-lang="ru"><i
                                                class="flag-icon flag-icon-ru mr-2"></i><span>Russian</span></a>
                                    </li>
                                    <li>
                                        <a href="" data-lang="ru"><i
                                                class="flag-icon flag-icon-gb mr-2"></i><span>English-UK</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Languages Dropdown End -->
                            <!--================================-->
                            <!-- Notifications Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a class=" notification-icon" href="" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="bell" class="wd-20"></i>
                                    <span class="notification-count wave in"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- Top Notifications Area -->
                                    <div class="top-notifications-area">
                                        <!-- Heading -->
                                        <div class="notifications-heading">
                                            <div class="heading-title">
                                                <h6>Notifications</h6>
                                            </div>
                                            <span>5+ New Notifications</span>
                                        </div>
                                        <div class="notifications-box" id="notificationsBox">
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                                        <i data-feather="smile" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="wd-100p">
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="tx-13 tx-semibold mb-0">Your order is placed</h3>
                                                        <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                                    </div>
                                                    <div class="tx-gray-700">System reboot has been successfully
                                                        completed</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-warning">
                                                        <i data-feather="bell" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="wd-100p">
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                                        <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                                    </div>
                                                    <div class="tx-gray-700">New user feedback received</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                                        <i data-feather="check-circle" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="wd-100p">
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="tx-13 tx-semibold mb-0">Payment failed!</h3>
                                                        <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                                    </div>
                                                    <div class="tx-gray-700">New file has been uploaded</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                                        <i data-feather="info" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="wd-100p">
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                                        <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                                    </div>
                                                    <div class="tx-gray-700">New order has been received</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                                        <i data-feather="info" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="wd-100p">
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="tx-13 tx-semibold mb-0">New order available</h3>
                                                        <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                                    </div>
                                                    <div class="tx-gray-700">New order has been received</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                                        <i data-feather="smile" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="wd-100p">
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="tx-13 tx-semibold mb-0">Your order is placed</h3>
                                                        <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                                    </div>
                                                    <div class="tx-gray-700">System reboot has been successfully
                                                        completed</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-warning">
                                                        <i data-feather="bell" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="wd-100p">
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                                        <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                                    </div>
                                                    <div class="tx-gray-700">New user feedback received</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="notifications-footer">
                                            <a href="">View all Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--/ Notifications Dropdown End -->
                            <!--================================-->
                            <!-- Messages Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a class=" message-icon" href="" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="message-square" class="wd-20"></i>
                                    <span class="messages-count wave in"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="top-message-area">
                                        <div class="top-message-heading">
                                            <div class="heading-title">
                                                <h6>Messages</h6>
                                            </div>
                                            <span>5+ New Messages</span>
                                        </div>
                                        <div class="message-box" id="messageBox">
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="d-flex justify-content-between">
                                                    <div class="pd-r-10">
                                                        <span class="avatar avatar-online">
                                                            <img src="{{ asset('') }}images/users-face/1.png"
                                                                class="img-fluid" alt="">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="tx-semibold">Mary Adams</span>
                                                        <span class="small tx-gray-500 ft-right">Mar 20, 22:21pm</span>
                                                        <div class="tx-gray-700">Congratulate! Socrates Itumayfor work
                                                            anniversaries</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="d-flex justify-content-between">
                                                    <div class="pd-r-10">
                                                        <span class="avatar avatar-online">
                                                            <img src="{{ asset('') }}images/users-face/2.png"
                                                                class="img-fluid" alt="">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="tx-semibold">Richards Caleb</span>
                                                        <span class="small tx-gray-500 ft-right">Mar 2, 22:21pm</span>
                                                        <div class="tx-gray-700">Richards Caleb, just created a new blog
                                                            post</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="d-flex justify-content-between">
                                                    <div class="pd-r-10">
                                                        <span class="avatar avatar-busy">
                                                            <img src="{{ asset('') }}images/users-face/3.png"
                                                                class="img-fluid" alt="">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="tx-semibold">Lane Richards</span>
                                                        <span class="small tx-gray-500 ft-right">Mar 12, 22:21pm</span>
                                                        <div class="tx-gray-700">Richards Caleb, just created a new blog
                                                            post</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="d-flex justify-content-between">
                                                    <div class="pd-r-10">
                                                        <span class="avatar avatar-busy">
                                                            <img src="{{ asset('') }}images/users-face/4.png"
                                                                class="img-fluid" alt="">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="tx-semibold">Edward Lane</span>
                                                        <span class="small tx-gray-500 ft-right">Mar 15, 02:21pm</span>
                                                        <div class="tx-gray-700">Adrian Monino, added new comment on
                                                            your photo</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="d-flex justify-content-between">
                                                    <div class="pd-r-10">
                                                        <span class="avatar avatar-offline">
                                                            <img src="{{ asset('') }}images/users-face/5.png"
                                                                class="img-fluid" alt="">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="tx-semibold">Lane Richards</span>
                                                        <span class="small tx-gray-500 ft-right">Mar 20, 08:28pm</span>
                                                        <div class="tx-gray-700">Edward Lane, added new comment on your
                                                            photo</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="d-flex justify-content-between">
                                                    <div class="pd-r-10">
                                                        <span class="avatar avatar-offline">
                                                            <img src="{{ asset('') }}images/users-face/6.png"
                                                                class="img-fluid" alt="">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="tx-semibold">Edward Lane</span>
                                                        <span class="small tx-gray-500 ft-right">Mar 21, 22:21pm</span>
                                                        <div class="tx-gray-700">Edward Lane, just created a new blog
                                                            post</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="top-message-footer">
                                            <a href="">View all Messages</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--/ Messages Dropdown End -->
                            <!--================================-->
                            <!-- Profile Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown">
                                <a href="" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img src="{{ asset('') }}images/users-face/1.png"
                                        class="img-fluid wd-30 ht-30 rounded-circle" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-profile">
                                    <div class="user-profile-area">
                                        <div class="user-profile-heading">
                                            <div class="profile-thumbnail">
                                                <img src="{{ asset('') }}images/users-face/1.png"
                                                    class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                                            </div>
                                            <div class="profile-text">
                                                <h6>Ruhul Hasan</h6>
                                                <span>email@example.com</span>
                                            </div>
                                        </div>
                                        <a href="" class="dropdown-item"><i data-feather="user" class="wd-16 mr-2"></i>
                                            My profile</a>
                                        <a href="" class="dropdown-item"><i data-feather="message-square"
                                                class="wd-16 mr-2"></i> Messages</a>
                                        <a href="" class="dropdown-item"><i data-feather="settings"
                                                class="wd-16 mr-2"></i> Settings</a>
                                        <a href="" class="dropdown-item"><i data-feather="activity"
                                                class="wd-16 mr-2"></i> My Activity</a>
                                        <a href="" class="dropdown-item"><i data-feather="download"
                                                class="wd-16 mr-2"></i> My Download</a>
                                        <a href="" class="dropdown-item"><i data-feather="life-buoy"
                                                class="wd-16 mr-2"></i> Support</a>
                                        <a href="aut-logign-register.html" class="dropdown-item"><i data-feather="power"
                                                class="wd-16 mr-2"></i> Sign-out</a>
                                    </div>
                                </div>
                            </li>
                            <!-- Profile Dropdown End -->
                        </ul>
                    </div>
                    <!--/ Header Right End -->
                </nav>
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
                <!--================================-->
                <!-- Breadcrumb Start -->
                <!--================================-->
                <div class="pageheader pd-t-25 pd-b-35">
                    <div class="d-flex justify-content-between">
                        <div class="clearfix">
                            <div class="pd-t-5 pd-b-5">
                                <h1 class="pd-0 mg-0 tx-20 tx-dark">Sales Monitoring</h1>
                            </div>
                            <div class="breadcrumb pd-0 mg-0">
                                <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i>
                                    Home</a>
                                <a class="breadcrumb-item" href="">Dashboard</a>
                                <span class="breadcrumb-item active">Sales Monitoring</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <button id="dashboardDate"
                                class="btn btn-default dropdown-toggle mr-2 d-none d-md-block pd-y-8-force"></button>
                            <button type="button"
                                class="btn btn-default mr-2 d-none d-none d-lg-block pd-t-6-force pd-b-5-force">
                                <i data-feather="log-in" class="wd-16 mr-2"></i>Import</button>
                            <button type="button"
                                class="btn btn-default mr-2 mb-2 mb-md-0 d-none d-lg-block pd-t-6-force pd-b-5-force">
                                <i data-feather="printer" class="wd-16 mr-2"></i>Print</button>
                            <button type="button"
                                class="btn btn-default mb-2 mb-md-0 d-none d-lg-block pd-t-6-force pd-b-5-force">
                                <i data-feather="download" class="wd-16 mr-2"></i>Download Report</button>
                        </div>
                    </div>
                </div>
                <!--/ Breadcrumb End -->
                <!--================================-->
                <!--  Start -->
                <!--================================-->
                <div class="row clearfix">
                    <!--================================-->
                    <!-- Heard Card Start -->
                    <!--================================-->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today Sales</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">$1,181</h2>
                                </div>
                                <div class="d-flex align-items-center tx-gray-500 tx-11"><span
                                        class="tx-success mr-2 d-flex align-items-center"><i
                                            class="ti-arrow-up tx-8 mr-1 tx-8"></i>+1,551</span>since last day</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today Earning</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">$11,241</h2>
                                </div>
                                <div class="d-flex align-items-center tx-gray-500 tx-11"><span
                                        class="tx-danger mr-2 d-flex align-items-center"><i
                                            class="ti-arrow-down tx-8 mr-1 tx-8"></i>-1,003</span>since last day</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Average Order Value</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">$3,241</h2>
                                </div>
                                <div class="d-flex align-items-center tx-gray-500 tx-11"><span
                                        class="tx-success mr-2 d-flex align-items-center"><i
                                            class="ti-arrow-up tx-8 mr-1 tx-8"></i>+2,012</span>since last day</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total Earning</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">$74,254</h2>
                                </div>
                                <div class="d-flex align-items-center tx-gray-500 tx-11"><span
                                        class="tx-danger mr-2 d-flex align-items-center"><i
                                            class="ti-arrow-down tx-8 mr-1 tx-8"></i>-1,120</span>since last month</div>
                            </div>
                        </div>
                    </div>
                    <!--/ Heard Card End -->
                </div>
                <div class="row clearfix">
                    <!--================================-->
                    <!-- Annual Report and Bar Chart Start -->
                    <!--================================-->
                    <div class="col-xl-9">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="row mg-b-20">
                                            <div class="col-sm-12 col-md-6 col-xl-12 mg-t-0">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today
                                                        Sales</h6>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mg-b-5">
                                                    <h5 class="mg-b-0 tx-dark tx-rubik tx-normal"><span
                                                            class="counter">$1,860</span></h5>
                                                    <div class="d-flex align-items-center tx-gray-700"><span
                                                            class="small text-success mr-2 d-flex align-items-center"><i
                                                                class="ti-arrow-up mr-1 tx-8"></i>+351</span></div>
                                                </div>
                                                <div class="progress ht-3 mg-b-0">
                                                    <div class="progress-bar bg-teal wd-70p" role="progressbar"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-xl-12 mg-t-30 mg-md-t-0 mg-xl-t-30">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today
                                                        Earning</h6>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mg-b-5">
                                                    <h5 class="mg-b-0 tx-dark tx-rubik tx-normal"><span
                                                            class="counter">$2,530</span></h5>
                                                    <div class="d-flex align-items-center tx-gray-700"><span
                                                            class="small text-success mr-2 d-flex align-items-center"><i
                                                                class="ti-arrow-up mr-1 tx-8"></i>+425</span></div>
                                                </div>
                                                <div class="progress ht-3 mg-b-0">
                                                    <div class="progress-bar bg-success wd-80p" role="progressbar"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-xl-12 mg-t-30">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">
                                                        Average Order</h6>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mg-b-5">
                                                    <h5 class="mg-b-0 tx-dark tx-rubik tx-normal"><span
                                                            class="counter">$2,148</span></h5>
                                                    <div class="d-flex align-items-center tx-gray-700"><span
                                                            class="small text-danger mr-2 d-flex align-items-center"><i
                                                                class="ti-arrow-down mr-1 tx-8"></i>-211</span></div>
                                                </div>
                                                <div class="progress ht-3 mg-b-0">
                                                    <div class="progress-bar bg-danger wd-70p" role="progressbar"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-xl-12 mg-t-30">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total
                                                        Revenue</h6>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mg-b-5">
                                                    <h5 class="mg-b-0 tx-dark tx-rubik tx-normal"><span
                                                            class="counter">$11,290</span></h5>
                                                    <div class="d-flex align-items-center tx-gray-700"><span
                                                            class="small text-success mr-2 d-flex align-items-center"><i
                                                                class="ti-arrow-up mr-1 tx-8"></i>+151</span></div>
                                                </div>
                                                <div class="progress ht-3 mg-b-0">
                                                    <div class="progress-bar bg-primary wd-65p" role="progressbar"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="clearfix">
                                            <div id="salesBarChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mg-b-30">
                                    <div class="card-body">
                                        <div class="pd-b-20">
                                            <h3 class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-0">Profit Share
                                            </h3>
                                            <p class="tx-13 tx-gray-500 mb-0">Profit Share between customers</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-50p ht-100" id="salesDonut1"></div>
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2">
                                                    </div>
                                                    <div class="tx-gray-500">37% Sport Tickets</div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2">
                                                    </div>
                                                    <div class="tx-gray-500">47% Business Events</div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2">
                                                    </div>
                                                    <div class="tx-gray-500">19% Others</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mg-b-30">
                                    <div class="card-body">
                                        <div class="pd-b-20">
                                            <h3 class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-0">Revenue
                                                Change</h3>
                                            <p class="tx-13 tx-gray-500 mb-0">Revenue change breakdown by cities</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-50p ht-100" id="salesDonut2"></div>
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2">
                                                    </div>
                                                    <div class="tx-gray-500">+10% New York</div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2">
                                                    </div>
                                                    <div class="tx-gray-500">-7% London</div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2">
                                                    </div>
                                                    <div class="tx-gray-500">+20% California</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Annual Report and Bar Chart End -->
                    <!--================================-->
                    <!-- Earnings Details Start -->
                    <!--================================-->
                    <div class="col-xl-3">
                        <div class="card mg-b-30">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-12">
                                    <div class="media pd-t-20 pd-x-20">
                                        <div
                                            class="wd-40 ht-40 bg-primary tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                            <i data-feather="bar-chart-2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-gray-500 mg-b-5">Gross
                                                Earnings</h6>
                                            <h5 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0">$51,958<small
                                                    class="tx-12">.50</small></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-12">
                                    <div class="media pd-y-20 pd-x-20">
                                        <div
                                            class="wd-40 ht-40 bg-warning tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                            <i data-feather="bar-chart-2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-gray-500 mg-b-5">Net Earnings
                                            </h6>
                                            <h5 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0">$31,608<small
                                                    class="tx-12">.50</small></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-12">
                                    <div class="media pd-b-20 pd-x-20 pd-md-t-20 pd-xl-t-0">
                                        <div
                                            class="wd-40 ht-40 bg-pink tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                            <i data-feather="bar-chart-2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-gray-500 mg-b-5">Tax Withheld
                                            </h6>
                                            <h5 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0">$24,769<small
                                                    class="tx-12">.50</small></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pd-0">
                                <div class="table-responsive">
                                    <table class="table table-hover tx-12 mb-0">
                                        <thead class="tx-10 tx-uppercase">
                                            <tr>
                                                <th class="wd-40">Date</th>
                                                <th class="wd-25 text-right">Orders</th>
                                                <th class="wd-35 text-right">Earnings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="tx-13">05/04/2019</td>
                                                <td class="text-right tx-teal">2,369</td>
                                                <td class="text-right tx-pink">$258,963</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-13">01/05/2019</td>
                                                <td class="text-right tx-teal">1,950</td>
                                                <td class="text-right tx-pink">$123,654</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-13">02/05/2019</td>
                                                <td class="text-right tx-teal">1,198</td>
                                                <td class="text-right tx-pink">$369,852</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-13">12/06/2019</td>
                                                <td class="text-right tx-teal">1,456</td>
                                                <td class="text-right tx-pink">$789,125</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-13">20/06/2019</td>
                                                <td class="text-right tx-teal">1,198</td>
                                                <td class="text-right tx-pink">$357,489</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-13">02/06/2019</td>
                                                <td class="text-right tx-teal">1,458</td>
                                                <td class="text-right tx-pink">$541,478</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-13">01/07/2019</td>
                                                <td class="text-right tx-teal">1,257</td>
                                                <td class="text-right tx-pink">$951,357</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-13">02/07/2019</td>
                                                <td class="text-right tx-teal">1,147</td>
                                                <td class="text-right tx-pink">$124,452</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-13">04/08/2019</td>
                                                <td class="text-right tx-teal">1,478</td>
                                                <td class="text-right tx-pink">$145,452</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- table-responsive -->
                            </div>
                        </div>
                    </div>
                    <!--/ Earnings Details End -->
                </div>
                <div class="row">
                    <!--================================-->
                    <!-- Expansions Details Start -->
                    <!--================================-->
                    <div class="col-xl-6">
                        <div class="card mg-b-30">
                            <div class="card-body pd-b-0">
                                <div class="row mg-b-20">
                                    <div class="col-lg-6">
                                        <h5 class="mb-0 tx-14 tx-semibold">Your Most Recent Earnings</h5>
                                        <div class="tx-12 tx-gray-500">Customers who have upgraded the level of your
                                            products or service.</div>
                                    </div>
                                    <div class="col-lg-6 d-none d-lg-block">
                                        <div class="d-inline-ock btn-group mb-3 mb-md-0 ft-right" role="group">
                                            <button type="button" class="btn btn-default">Today</button>
                                            <button type="button"
                                                class="btn btn-default d-none d-md-block">Week</button>
                                            <button type="button" class="btn btn-default">Month</button>
                                            <button type="button" class="btn btn-default">Year</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix mg-b-20">
                                    <div class="col-md-4 col-lg-4 col-xl-4 mg-t-20 mg-sm-t-0 mg-md-t-20 mg-lg-t-0">
                                        <div class="media">
                                            <div
                                                class="wd-40 ht-40 rounded bd bd-2 bd-primary d-flex flex-shrink-0 align-items-center justify-content-center">
                                                <i data-feather="bar-chart-2" class="wd-20 ht-20 tx-primary"></i>
                                            </div>
                                            <div class="media-body mg-l-10">
                                                <p class="tx-10 tx-uppercase tx-primary tx-spacing-1 mg-b-0 tx-medium">
                                                    Expansions</p>
                                                <h5 class="tx-normal tx-rubik lh-1 mg-b-5">$92,350<small>.50</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-xl-4 mg-t-20 mg-sm-t-0 mg-md-t-20 mg-lg-t-0">
                                        <div class="media">
                                            <div
                                                class="wd-40 ht-40 rounded bd bd-2 bd-danger d-flex flex-shrink-0 align-items-center justify-content-center">
                                                <i data-feather="bar-chart-2" class="wd-20 ht-20 tx-danger"></i>
                                            </div>
                                            <div class="media-body mg-l-10">
                                                <p class="tx-10 tx-uppercase tx-danger tx-spacing-1 mg-b-0 tx-medium">
                                                    Cancellations</p>
                                                <h5 class="tx-normal tx-rubik lh-1 mg-b-5">$10,301<small>.00</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-xl-4 mg-t-20 mg-sm-t-0 mg-md-t-20 mg-lg-t-0">
                                        <div class="media">
                                            <div
                                                class="wd-40 ht-40 rounded bd bd-2 bd-success d-flex flex-shrink-0 align-items-center justify-content-center">
                                                <i data-feather="bar-chart-2" class="wd-20 ht-20 tx-success"></i>
                                            </div>
                                            <div class="media-body mg-l-10">
                                                <p class="tx-10 tx-uppercase tx-success tx-spacing-1 mg-b-0 tx-medium">
                                                    Revenue</p>
                                                <h5 class="tx-normal tx-rubik lh-1 mg-b-5">$45,254<small>.00</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix mg-b-20">
                                    <div id="stackedBarChart" style="height: 220px"></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-dashboard mg-b-0">
                                    <thead class="tx-10 tx-uppercase">
                                        <tr>
                                            <th>Date</th>
                                            <th class="text-right">Gross Earnings</th>
                                            <th class="text-right">Total Orders</th>
                                            <th class="text-right">Net Earnings</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tx-13">
                                        <tr>
                                            <td class="">02/04/2019</td>
                                            <td class="tx-success tx-right">$30,123<small>.50</small></td>
                                            <td class="tx-primary tx-right">5,258</td>
                                            <td class="tx-gray-500 tx-right">$25,147 <span
                                                    class="mg-l-5 tx-10  tx-success"><i class="ti-arrow-up tx-8"></i>
                                                    2.41%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="">03/04/2019</td>
                                            <td class="tx-success tx-right">$28,325<small>.50</small></td>
                                            <td class="tx-primary tx-right">4,257</td>
                                            <td class="tx-gray-500 tx-right">$24,152 <span
                                                    class="mg-l-5 tx-10  tx-danger"><i class="ti-arrow-down tx-8"></i>
                                                    2.41%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="">01/05/2019</td>
                                            <td class="tx-success tx-right">$26,789<small>.50</small></td>
                                            <td class="tx-primary tx-right">3,271</td>
                                            <td class="tx-gray-500 tx-right">$20,369 <span
                                                    class="mg-l-5 tx-10  tx-success"><i class="ti-arrow-up tx-8"></i>
                                                    2.41%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="">08/05/2019</td>
                                            <td class="tx-success tx-right">$22,963<small>.50</small></td>
                                            <td class="tx-primary tx-right">2,854</td>
                                            <td class="tx-gray-500 tx-right">$19,475 <span
                                                    class="mg-l-5 tx-10  tx-success"><i class="ti-arrow-up tx-8"></i>
                                                    2.41%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="">12/06/2019</td>
                                            <td class="tx-success tx-right">$20,145<small>.50</small></td>
                                            <td class="tx-primary tx-right">2,147</td>
                                            <td class="tx-gray-500 tx-right">$14,478 <span
                                                    class="mg-l-5 tx-10  tx-danger"><i class="ti-arrow-down tx-8"></i>
                                                    2.41%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="">22/06/2019</td>
                                            <td class="tx-success tx-right">$18,123<small>.50</small></td>
                                            <td class="tx-primary tx-right">1,563</td>
                                            <td class="tx-gray-500 tx-right">$12,452 <span
                                                    class="mg-l-5 tx-10  tx-success"><i class="ti-arrow-up tx-8"></i>
                                                    2.41%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/ Expansions Details End -->
                    <!--================================-->
                    <!-- Search Result Details Start -->
                    <!--================================-->
                    <div class="col-xl-6">
                        <div class="card mg-b-30">
                            <div class="card-body pd-b-0">
                                <div id="world-map" style="height: 340px;"></div>
                                <div class="row search-statistic">
                                    <div class="col-sm-4 col-md-4 col-lg-4 pd-20 bd-r bd-b">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Organic Search
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-success">+27%</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 pd-20 bd-r bd-b">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Google Search
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-success">+34%</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 pd-20">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Bing Search
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-danger">-32%</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Yandex Search
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-danger mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-danger">-22%</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">DuckDuckGo
                                            Search</div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-teal mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-success">+42%</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 pd-20 bd-t">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Baidu Search
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-info mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-success">+15%</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">DuckDuckGo
                                            Search</div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-teal mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-success">+42%</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Baidu Search
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-info mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-success">+15%</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                        <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Yandex Search
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-danger mr-2"></div>
                                            <div class="tx-12 tx-gray-500">1,125,367 <small
                                                    class="tx-danger">-22%</small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Search Result Details End -->
                </div>
                <!--================================-->
                <!-- Sales Details Start -->
                <!--================================-->
                <div class="row clearfix">
                    <div class="col-lg-6">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 col-lg-4 col-xl-6 order-1 order-sm-0 mg-t-20 mg-sm-t-0">
                                        <div class="clearfix">
                                            <div id="flotBarRecentOrders" style="height: 100px"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-8 col-xl-6">
                                        <div class="pd-0">
                                            <div class="d-flex align-items-baseline mg-b-5">
                                                <h1 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">
                                                    1,245</h1>
                                                <span class="d-flex align-items-center tx-success mg-l-2 tx-10"><i
                                                        class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>11.24%</span>
                                            </div>
                                            <h6 class="tx-11 tx-primary tx-uppercase">Recent Orders</h6>
                                            <p class="tx-11 tx-sm-12 mg-b-0 tx-gray-500">Habi tasse labo rum purus,
                                                vesti bulum at<span class="d-none d-sm-inline"> vivamus tempor port
                                                    titor vulpu</span>... <a href="">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 col-lg-4 col-xl-6 order-1 order-sm-0 mg-t-20 mg-sm-t-0">
                                        <div class="clearfix">
                                            <div id="flotBarCompleteOrders" style="height: 100px"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-8 col-xl-6">
                                        <div class="pd-0">
                                            <div class="d-flex align-items-baseline mg-b-5">
                                                <h1 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">
                                                    9,540</h1>
                                                <span class="d-flex align-items-center tx-danger mg-l-2 tx-10"><i
                                                        class="ti-arrow-down tx-8 tx-danger tx-8 mr-1"></i>10.9%</span>
                                            </div>
                                            <h6 class="tx-11 tx-pink tx-uppercase">Complete Orders</h6>
                                            <p class="tx-12 mg-b-0 tx-gray-500">Habi tasse labo rum purus, vesti
                                                bulum<span class="d-none d-sm-inline"> at vivamus tempor port titor
                                                    vulpu</span>... <a href="">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                </div>
                <!--/ Sales Details End -->
                <div class="row">
                    <!--================================-->
                    <!-- New Customers Start -->
                    <!--================================-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mg-b-30">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h6 class="tx-13 mb-0">New Customers</h6>
                                <div class="card-header-btn">
                                    <div class="dropdown">
                                        <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item"><i data-feather="info"
                                                    class="wd-16 mr-2"></i>View Details</a>
                                            <a href="" class="dropdown-item"><i data-feather="share"
                                                    class="wd-16 mr-2"></i>Share</a>
                                            <a href="" class="dropdown-item"><i data-feather="download"
                                                    class="wd-16 mr-2"></i>Download</a>
                                            <a href="" class="dropdown-item"><i data-feather="copy"
                                                    class="wd-16 mr-2"></i>Copy to</a>
                                            <a href="" class="dropdown-item"><i data-feather="folder"
                                                    class="wd-16 mr-2"></i>Move to</a>
                                            <a href="" class="dropdown-item"><i data-feather="edit"
                                                    class="wd-16 mr-2"></i>Rename</a>
                                            <a href="" class="dropdown-item"><i data-feather="trash"
                                                    class="wd-16 mr-2"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pd-y-20">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-center mg-b-15">
                                        <a href="">
                                            <div class="avatar avatar-online"><span
                                                    class="avatar-initial rounded-circle bg-gray-800">A</span><i></i>
                                            </div>
                                        </a>
                                        <div class="media-body pd-l-15 lh-2">
                                            <p class="tx-medium mg-b-2"><a href="">Archie Cantones</a></p>
                                            <span class="tx-12 tx-gray-500">Joined: 01 Mar, 2019</span>
                                        </div>
                                        <div class="mg-l-auto d-flex align-self-center action-icon">
                                            <nav class="nav nav-icon-only">
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Send Message"><i
                                                        data-feather="mail" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Add to Fiend"><i
                                                        data-feather="user-plus" class="wd-16"></i></a>
                                                <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                                    data-placement="top" data-original-title="Flag User"><i
                                                        data-feather="flag" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                                    data-placement="top" data-original-title="More Options"><i
                                                        data-feather="more-vertical" class="wd-16"></i></a>
                                            </nav>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mg-b-15">
                                        <a href="">
                                            <div class="avatar avatar-online"><span
                                                    class="avatar-initial rounded-circle bg-primary">H</span><i></i>
                                            </div>
                                        </a>
                                        <div class="media-body pd-l-15 lh-2">
                                            <p class="tx-medium mg-b-2"><a href="">Holmes Cherryman</a></p>
                                            <span class="tx-12 tx-gray-500">Joined: 06 Mar, 2019</span>
                                        </div>
                                        <div class="mg-l-auto d-flex align-self-center action-icon">
                                            <nav class="nav nav-icon-only">
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Send Message"><i
                                                        data-feather="mail" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Add to Fiend"><i
                                                        data-feather="user-plus" class="wd-16"></i></a>
                                                <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                                    data-placement="top" data-original-title="Flag User"><i
                                                        data-feather="flag" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                                    data-placement="top" data-original-title="More Options"><i
                                                        data-feather="more-vertical" class="wd-16"></i></a>
                                            </nav>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mg-b-15">
                                        <a href="">
                                            <div class="avatar avatar-online"><span
                                                    class="avatar-initial rounded-circle bg-danger">M</span><i></i>
                                            </div>
                                        </a>
                                        <div class="media-body pd-l-15 lh-2">
                                            <p class="tx-medium mg-b-2"><a href="">Malanie Hanvey</a></p>
                                            <span class="tx-12 tx-gray-500">Joined: 11 Mar, 2019</span>
                                        </div>
                                        <div class="mg-l-auto d-flex align-self-center action-icon">
                                            <nav class="nav nav-icon-only">
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Send Message"><i
                                                        data-feather="mail" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Add to Fiend"><i
                                                        data-feather="user-plus" class="wd-16"></i></a>
                                                <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                                    data-placement="top" data-original-title="Flag User"><i
                                                        data-feather="flag" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                                    data-placement="top" data-original-title="More Options"><i
                                                        data-feather="more-vertical" class="wd-16"></i></a>
                                            </nav>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mg-b-15">
                                        <a href="">
                                            <div class="avatar avatar-offline"><span
                                                    class="avatar-initial rounded-circle bg-teal">K</span><i></i></div>
                                        </a>
                                        <div class="media-body pd-l-15 lh-2">
                                            <p class="tx-medium mg-b-2"><a href="">Kenneth Hune</a></p>
                                            <span class="tx-12 tx-gray-500">Joined: 12 Mar, 2019</span>
                                        </div>
                                        <div class="mg-l-auto d-flex align-self-center action-icon">
                                            <nav class="nav nav-icon-only">
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Send Message"><i
                                                        data-feather="mail" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Add to Fiend"><i
                                                        data-feather="user-plus" class="wd-16"></i></a>
                                                <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                                    data-placement="top" data-original-title="Flag User"><i
                                                        data-feather="flag" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                                    data-placement="top" data-original-title="More Options"><i
                                                        data-feather="more-vertical" class="wd-16"></i></a>
                                            </nav>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mg-b-15">
                                        <a href="">
                                            <div class="avatar avatar-offline"><span
                                                    class="avatar-initial rounded-circle bg-success">V</span><i></i>
                                            </div>
                                        </a>
                                        <div class="media-body pd-l-15 lh-2">
                                            <p class="tx-medium mg-b-2"><a href="">Valentine Maton</a></p>
                                            <span class="tx-12 tx-gray-500">Joined: 15 Mar, 2019</span>
                                        </div>
                                        <div class="mg-l-auto d-flex align-self-center action-icon">
                                            <nav class="nav nav-icon-only">
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Send Message"><i
                                                        data-feather="mail" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Add to Fiend"><i
                                                        data-feather="user-plus" class="wd-16"></i></a>
                                                <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                                    data-placement="top" data-original-title="Flag User"><i
                                                        data-feather="flag" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                                    data-placement="top" data-original-title="More Options"><i
                                                        data-feather="more-vertical" class="wd-16"></i></a>
                                            </nav>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mg-b-15">
                                        <a href="">
                                            <div class="avatar avatar-offline"><span
                                                    class="avatar-initial rounded-circle bg-primary">M</span><i></i>
                                            </div>
                                        </a>
                                        <div class="media-body pd-l-15 lh-2">
                                            <p class="tx-medium mg-b-2"><a href="">Madsen Daniel</a></p>
                                            <span class="tx-12 tx-gray-500">Joined: 20 Mar, 2019</span>
                                        </div>
                                        <div class="mg-l-auto d-flex align-self-center action-icon">
                                            <nav class="nav nav-icon-only">
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Send Message"><i
                                                        data-feather="mail" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Add to Fiend"><i
                                                        data-feather="user-plus" class="wd-16"></i></a>
                                                <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                                    data-placement="top" data-original-title="Flag User"><i
                                                        data-feather="flag" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                                    data-placement="top" data-original-title="More Options"><i
                                                        data-feather="more-vertical" class="wd-16"></i></a>
                                            </nav>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a href="">
                                            <div class="avatar avatar-offline"><span
                                                    class="avatar-initial rounded-circle bg-warning">M</span><i></i>
                                            </div>
                                        </a>
                                        <div class="media-body pd-l-15 lh-2">
                                            <p class="tx-medium mg-b-2"><a href="">Jesse Ross</a></p>
                                            <span class="tx-12 tx-gray-500">Joined: 21 Mar, 2019</span>
                                        </div>
                                        <div class="mg-l-auto d-flex align-self-center action-icon">
                                            <nav class="nav nav-icon-only">
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Send Message"><i
                                                        data-feather="mail" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                                    data-placement="top" data-original-title="Add to Fiend"><i
                                                        data-feather="user-plus" class="wd-16"></i></a>
                                                <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                                    data-placement="top" data-original-title="Flag User"><i
                                                        data-feather="flag" class="wd-16"></i></a>
                                                <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                                    data-placement="top" data-original-title="More Options"><i
                                                        data-feather="more-vertical" class="wd-16"></i></a>
                                            </nav>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ New Customers End -->
                    <!--================================-->
                    <!-- Transaction History Start -->
                    <!--================================-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mg-b-30">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h6 class="tx-13 mb-0">Transaction History</h6>
                                <div class="card-header-btn">
                                    <div class="dropdown">
                                        <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item"><i data-feather="info"
                                                    class="wd-16 mr-2"></i>View Details</a>
                                            <a href="" class="dropdown-item"><i data-feather="share"
                                                    class="wd-16 mr-2"></i>Share</a>
                                            <a href="" class="dropdown-item"><i data-feather="download"
                                                    class="wd-16 mr-2"></i>Download</a>
                                            <a href="" class="dropdown-item"><i data-feather="copy"
                                                    class="wd-16 mr-2"></i>Copy to</a>
                                            <a href="" class="dropdown-item"><i data-feather="folder"
                                                    class="wd-16 mr-2"></i>Move to</a>
                                            <a href="" class="dropdown-item"><i data-feather="edit"
                                                    class="wd-16 mr-2"></i>Rename</a>
                                            <a href="" class="dropdown-item"><i data-feather="trash"
                                                    class="wd-16 mr-2"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pd-0 pd-y-15">
                                <ul class="list-group list-group-flush tx-13">
                                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                        <div class="d-none d-sm-block"><span
                                                class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-primary tx-white"><i
                                                    class="ti-check"></i></span></div>
                                        <div class="pd-sm-l-10">
                                            <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                                    class="tx-dark mg-b-0 tx-semibold">#985632</a></p>
                                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #857423</span>
                                        </div>
                                        <div class="mg-l-auto text-right">
                                            <p class="mg-b-0 tx-rubik">$4,550<small class="tx-8">.50</small></p>
                                            <span class="tx-success tx-12">Completed</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                        <div class="d-none d-sm-block"><span
                                                class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-warning tx-dark"><i
                                                    class="ti-anchor"></i></span></div>
                                        <div class="pd-sm-l-10">
                                            <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                                    class="tx-dark mg-b-0 tx-semibold">#698524</a></p>
                                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #452356</span>
                                        </div>
                                        <div class="mg-l-auto text-right">
                                            <p class="mg-b-0 tx-rubik">$2,645<small class="tx-8">.40</small></p>
                                            <span class="tx-warning tx-12">Pending</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                        <div class="d-none d-sm-block"><span
                                                class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-primary tx-white"><i
                                                    class="ti-check"></i></span></div>
                                        <div class="pd-sm-l-10">
                                            <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                                    class="tx-dark mg-b-0 tx-semibold">#458762</a></p>
                                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #354155</span>
                                        </div>
                                        <div class="mg-l-auto text-right">
                                            <p class="mg-b-0 tx-rubik">$3,248<small class="tx-8">.80</small></p>
                                            <span class="tx-success tx-12">Completed</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                        <div class="d-none d-sm-block"><span
                                                class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-warning tx-dark"><i
                                                    class="ti-anchor"></i></span></div>
                                        <div class="pd-sm-l-10">
                                            <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                                    class="tx-dark mg-b-0 tx-semibold">#698524</a></p>
                                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #452356</span>
                                        </div>
                                        <div class="mg-l-auto text-right">
                                            <p class="mg-b-0 tx-rubik">$1,243<small class="tx-8">.60</small></p>
                                            <p class="mg-b-0 tx-12 tx-warning">Pending</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                        <div class="d-none d-sm-block"><span
                                                class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-primary tx-white"><i
                                                    class="ti-check"></i></span></div>
                                        <div class="pd-sm-l-10">
                                            <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                                    class="tx-dark mg-b-0 tx-semibold">#365845</a></p>
                                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #748562</span>
                                        </div>
                                        <div class="mg-l-auto text-right">
                                            <p class="mg-b-0 tx-rubik">$5,319<small class="tx-10">.10</small></p>
                                            <span class="tx-success tx-12">Completed</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                        <div class="d-none d-sm-block"><span
                                                class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-danger tx-white"><i
                                                    class="ti-close"></i></span></div>
                                        <div class="pd-sm-l-10">
                                            <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                                    class="tx-dark mg-b-0 tx-semibold">#475821</a></p>
                                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #457771</span>
                                        </div>
                                        <div class="mg-l-auto text-right">
                                            <p class="mg-b-0 tx-rubik">$4,347<small class="tx-8">.90</small></p>
                                            <span class="tx-danger tx-12">Canceled</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Transaction History End -->
                    <!--================================-->
                    <!-- Customer Satisfaction Start -->
                    <!--================================-->
                    <div class="col-xl-4">
                        <div class="card mg-b-30">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h6 class="tx-13 mb-0">Customer Satisfaction</h6>
                                <div class="card-header-btn">
                                    <div class="dropdown">
                                        <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item"><i data-feather="info"
                                                    class="wd-16 mr-2"></i>View Details</a>
                                            <a href="" class="dropdown-item"><i data-feather="share"
                                                    class="wd-16 mr-2"></i>Share</a>
                                            <a href="" class="dropdown-item"><i data-feather="download"
                                                    class="wd-16 mr-2"></i>Download</a>
                                            <a href="" class="dropdown-item"><i data-feather="copy"
                                                    class="wd-16 mr-2"></i>Copy to</a>
                                            <a href="" class="dropdown-item"><i data-feather="folder"
                                                    class="wd-16 mr-2"></i>Move to</a>
                                            <a href="" class="dropdown-item"><i data-feather="edit"
                                                    class="wd-16 mr-2"></i>Rename</a>
                                            <a href="" class="dropdown-item"><i data-feather="trash"
                                                    class="wd-16 mr-2"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-baseline">
                                    <h1 class="mg-b-0 mg-r-5">9.5<span class="tx-10 tx-success">(<i
                                                class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>8.60%)</span></h1>
                                    <div class="tx-16">
                                        <i class="fa fa-star tx-warning"></i>
                                        <i class="fa fa-star tx-warning"></i>
                                        <i class="fa fa-star tx-warning"></i>
                                        <i class="fa fa-star tx-warning"></i>
                                        <i class="fa fa-star-half-empty tx-warning"></i>
                                    </div>
                                </div>
                                <p class="tx-11 tx-sm-12 mg-b-20 tx-gray-500">Habi tasse labo rum purus, vesti bulum
                                    at<span class="d-none d-sm-inline"> vivamus tempor port titor vulpu</span>... <a
                                        href="">Learn More</a></p>
                                <div class="card-progressbar">
                                    <label class="tx-10 tx-uppercase tx-gray-500 mg-b-0">Score</label>
                                    <div class="progress" style="height: 3px">
                                        <div class="progress-bar" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <label class="tx-10 tx-uppercase tx-gray-500 mg-b-0">85%<i
                                            class="ti-arrow-up tx-8 tx-success tx-8 ml-1"></i></label>
                                </div>
                                <div class="list-group list-group-flush m-t-10 tx-13">
                                    <div
                                        class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                                            <span class="tx-semibold">Excellent</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="mg-r-5">3,345</div>
                                            <div class="tx-10 tx-gray-500">(<i
                                                    class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>4.7%)</div>
                                        </div>
                                    </div>
                                    <div
                                        class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-danger mr-2"></div>
                                            <span class="tx-semibold">Very Good</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="mg-r-5">2,854</div>
                                            <div class="tx-10 tx-gray-500">(<i
                                                    class="ti-arrow-down tx-8 tx-danger tx-8 mr-1"></i>5.8%)</div>
                                        </div>
                                    </div>
                                    <div
                                        class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                                            <span class="tx-semibold">Good</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="mg-r-5">2,145</div>
                                            <div class="tx-10 tx-gray-500">(<i
                                                    class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>2.8%)</div>
                                        </div>
                                    </div>
                                    <div
                                        class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-info mr-2"></div>
                                            <span class="tx-semibold">Fair</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="mg-r-5">1,574</div>
                                            <div class="tx-10 tx-gray-500">(<i
                                                    class="ti-arrow-down tx-8 tx-danger tx-8 mr-1"></i>3.7%)</div>
                                        </div>
                                    </div>
                                    <div
                                        class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                                            <span class="tx-semibold">Poor</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="mg-r-5">1,540</div>
                                            <div class="tx-10 tx-gray-500">(<i
                                                    class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>5.5%)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Customer Satisfaction End -->
                </div>
            </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <!-- Page Footer Start -->
            <!--================================-->
            <footer class="page-footer">
                <div class="pd-t-4 pd-b-0 pd-x-20">
                    <div class="tx-10 tx-uppercase tx-gray-500 tx-spacing-1">
                        <p class="pd-y-10 mb-0">Copyright&copy; 2019 | Created By <a
                                href="https://themeforest.net/user/colorlibcode/portfolio"
                                target="_blank">ColorlibCode</a></p>
                    </div>
                </div>
            </footer>
            <!--/ Page Footer End -->
        </div>
        <!--/ Page Content End -->
    </div>
    <!--/ Page Container End -->
    <!--================================-->
    <!-- Scroll To Top Start-->
    <!--================================-->
    <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!--/ Scroll To Top End -->
    <!--================================-->
    <!-- Template Customizer Start-->
    <!--================================-->
    <div class="avesta-settings">
        <a id="avestaSettingsShow" href="" class="avesta-settings-link"><i data-feather="settings"
                class="wd-20"></i></a>
        <div class="avesta-settings-body">
            <div class="pd-y-20">
                <img src="{{ asset('') }}images/logo-dark.png" class="d-block" alt="">
                <span class="tx-10 tx-uppercase tx-spacing-1">Template Customizer</span>
            </div>
            <div class="pd-y-20 bd-t">
                <label class="tx-10 tx-uppercase tx-bold tx-spacing-1 mg-b-15">Skin Mode</label>
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name tx-spacing-1">Default Skin</span>
                        <a href="" class="avesta-mode avesta-mode-default active" data-title="default-skin"></a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Light Skin</span>
                        <a href="" class="avesta-mode avesta-mode-light" data-title="light-skin">
                            <span class="demo-color-palet-1"></span>
                            <span class="demo-color-palet-2"></span>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name tx-spacing-1">Cool Skin</span>
                        <a href="" class="avesta-mode avesta-mode-cool" data-title="cool-skin">
                            <span class="bg-primary"></span>
                            <span class="bg-primary"></span>
                        </a>
                    </div>
                    <!-- row -->
                </div>
            </div>
            <div class="pd-y-20 bd-t">
                <label class="tx-10 tx-uppercase tx-bold tx-spacing-1 mg-b-15">Navigation Skin</label>
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Default</span>
                        <a href="" class="avesta-demo-customizer avesta-demo-customizer-default active"
                            data-title="default">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Light</span>
                        <a href="" class="avesta-demo-customizer avesta-demo-customizer-light" data-title="light">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Blue Purple</span>
                        <a href="" class="avesta-demo-customizer avesta-demo-customizer-bluepurple"
                            data-title="bluepurple">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Gradient</span>
                        <a href="" class="avesta-demo-customizer avesta-demo-customizer-gradient" data-title="gradient">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <!-- row -->
            </div>
            <div class="pd-y-20 bd-t">
                <label class="tx-10 tx-uppercase tx-bold tx-spacing-1 mg-b-15">Font Family Mode</label>
                <div class="row font-customize">
                    <div class="col-12">
                        <a href="" id="setFontBase" class="active-font">IBM Plex Sans</a>
                    </div>
                    <!-- col -->
                    <div class="col-12">
                        <a href="" id="setFontRoboto">Roboto</a>
                    </div>
                    <!-- col -->
                    <div class="col-12">
                        <a href="" id="setFontPoppins">Poppins</a>
                    </div>
                    <!-- col -->
                    <div class="col-12">
                        <a href="" id="setFontOpenSans">Open Sans</a>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
        </div>
        <!-- avesta-settings-body -->
    </div>
    <!--/ Template Customizer End -->
    <!--================================-->
    <!-- Footer Script -->
    <!--================================-->
    <script src="{{ asset('') }}plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('') }}plugins/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('') }}plugins/moment/moment.min.js"></script>
    <script src="{{ asset('') }}plugins/popper/popper.js"></script>
    <script src="{{ asset('') }}plugins/feather/feather.min.js"></script>
    <script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}plugins/typeahead/typeahead.js"></script>
    <script src="{{ asset('') }}plugins/typeahead/typeahead-active.js"></script>
    <script src="{{ asset('') }}plugins/pace/pace.min.js"></script>
    <script src="{{ asset('') }}plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('') }}plugins/highlight/highlight.min.js"></script>
    <!-- Dashboard Script -->
    <script src="{{ asset('') }}plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('') }}plugins/jqvmap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('') }}plugins/jqvmap/gdp-data.js"></script>
    <script src="{{ asset('') }}plugins/jqvmap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('') }}plugins/chartist/chartist.js"></script>
    <script src="{{ asset('') }}plugins/apex-chart/apexcharts.min.js"></script>
    <script src="{{ asset('') }}plugins/apex-chart/irregular-data-series.js"></script>
    <script src="{{ asset('') }}plugins/flot/jquery.flot.js"></script>
    <script src="{{ asset('') }}plugins/flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('') }}plugins/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('') }}plugins/flot/sampledata.js"></script>
    <script src="{{ asset('') }}js/dashboard/sales-dashboard-init.js"></script>
    <!-- Required Script -->
    <script src="{{ asset('') }}js/app.js"></script>
    <script src="{{ asset('') }}js/avesta.js"></script>
    <script src="{{ asset('') }}js/avesta-customizer.js"></script>
    <!-- Javascript -->
    <script>
        //World Map
        "use strict";
        $(document).ready(function () {
            // World Map
            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                markerStyle: {
                    initial: {
                        fill: '#2e2e2e',
                        stroke: '#2e2e2e',
                        "fill-opacity": 1,
                        "stroke-width": 15,
                        "stroke-opacity": 0.2
                    }
                },
                markers: [{
                        latLng: [37.18, -93.35],
                        name: 'United States'
                    },
                    {
                        latLng: [20.59, 78.96],
                        name: 'India'
                    },
                    {
                        latLng: [-25.27, 133.77],
                        name: 'Australia'
                    },
                    {
                        latLng: [-38.41, -63.61],
                        name: 'Argentina'
                    },
                    {
                        latLng: [61.52, 105.31],
                        name: 'Russia'
                    },
                    {
                        latLng: [-30.55, 22.93],
                        name: 'South Africa'
                    },
                ],
                focusOn: {
                    x: 0,
                    y: 0,
                    scale: 1
                },
                series: {
                    regions: [{
                        values: {
                            US: 'rgba(148, 77, 255, 0.3)',
                            AU: 'rgba(255, 228, 17, 0.3)',
                            IN: 'rgba(8, 210, 111, 0.3)',
                            AR: 'rgba(252, 79, 104, 0.3)',
                            RU: 'rgba(129, 206, 246, 0.3)',
                            ZA: 'rgba(252, 79, 104, 0.3)',
                        }
                    }]
                },
                regionStyle: {
                    initial: {
                        fill: '#e9eff9'
                    }
                }
            });

        });

        // Dashboard DateTimePicker
        $(function () {
            var isRtl = $('body').attr('dir') === 'rtl' || $('html').attr('dir') === 'rtl';

            // Button         
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#dashboardDate').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
            $('#dashboardDate').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                },
                opens: (isRtl ? 'left' : 'right')
            }, cb);
            cb(start, end);

            // Replace icons         
            $('#dashboardDate').each(function () {
                var obj = $(this).data('daterangepicker');
                var _updateCalendars = obj.updateCalendars;
                obj.updateCalendars = function () {
                    // Call original function
                    _updateCalendars.call(obj)
                    // Replace icons
                    obj.container.find('.prev > i').each(function () {
                        this.className = 'ion ion-ios-arrow-back'
                    });
                    obj.container.find('.next > i').each(function () {
                        this.className = 'ion ion-ios-arrow-forward'
                    });
                    obj.container.find('.daterangepicker_input > i').each(function () {
                        this.className = 'ion ion-md-calendar'
                    });
                    obj.container.find('.calendar-time > i').each(function () {
                        this.className = 'ion ion-md-time'
                    });
                };
            });
        });

    </script>
    <!-- / Javascript -->
</body>

</html>
