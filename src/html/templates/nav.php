
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Start HTML document-->
<!DOCTYPE html>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--HTML-->
<html lang="en">
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Head-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicon icon-->
    <link href="../../../assets/images/favicon.png" type="image/png" rel="icon">
    <!--Browser navbar color for mobile-->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#5165d6">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#5165d6">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#5165d6">
    <!--Page title-->
    <title>Dashboard - materialcss</title>
    <!-- ================================================
    CSS
    ================================================ -->
    <!-- materialize stylesheet -->
    <link href="../../../assets/vendors/materialize/materialize.min.css" type="text/css" rel="stylesheet" />
    <!-- google material design icons -->
    <link href="../../../assets/vendors/material-icons/material-icons.css" type="text/css" rel="stylesheet" />
    <!-- prism syntax highlighter -->
    <link href="../../../assets/vendors/prism/prism.css" type="text/css" rel="stylesheet" />
    <!-- materialcss app stylesheet -->
    <link href="../../../assets/css/app.css" type="text/css" rel="stylesheet" />
    <!-- materialcss theme stylesheet -->
    <link href="../../../assets/css/theme-1.css" type="text/css" rel="stylesheet" />
    <!-- Your custom  stylesheet -->
    <link href="../../../assets/css/style.css" type="text/css" rel="stylesheet" />
</head>
<!-- End head-->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--body-->

<body>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--Page wrapper-->
    <div class="page-wrapper">
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--Control page-->
        <div id="control-body" class="fixed-sidebar medium-sidebar fixed-nav collapsed-sidebar">
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--prepage loader-->
            <div id="prepage-loader">
                <div class="preloader-center">
                    <div class="col s12 m4">
                        <div class="preloader5-cube-grid preloader-size-40">
                            <div class="preloader5-cube preloader5-cube1"></div>
                            <div class="preloader5-cube preloader5-cube2"></div>
                            <div class="preloader5-cube preloader5-cube3"></div>
                            <div class="preloader5-cube preloader5-cube4"></div>
                            <div class="preloader5-cube preloader5-cube5"></div>
                            <div class="preloader5-cube preloader5-cube6"></div>
                            <div class="preloader5-cube preloader5-cube7"></div>
                            <div class="preloader5-cube preloader5-cube8"></div>
                            <div class="preloader5-cube preloader5-cube9"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End prepage loader-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Header-->
            <nav class="page-header z-depth-3">
                <div class="nav-wrapper">
                    <a id="logo-container" href="#" class="brand-logo hide-on-med-and-down">That´s IT</a>
                    <ul class="left">
                        <li class="hide-on-large-only"><a href="javascript:void(0)" id="toggle-left-sidebar" class="hrz-menu waves-effect waves-default"><i class="material-icons">menu</i></a></li>
                        <!--notifications list-->
                        <li><a onclick="alert();" href="javascript:void(0)" class="hrz-menu dropdown-button dropdown-belowOrigin waves-effect waves-default" data-activates='notification-list-dropdown'><i class="material-icons">notifications</i><span id="notification-cout">25</span></a></li>
                    </ul>
                    
                       
                        <!--user account-->
                        <li id="user-account-box"><a href="javascript:void(0)" class="hrz-menu dropdown-button dropdown-belowOrigin dropdown-widthChange waves-effect waves-default" data-activates='user-account-dropdown'><i class="material-icons">account_circle</i></a></li>
                    </ul>
                    <!--user account dropdown-->
                    <ul id='user-account-dropdown' class='dropdown-content'>
                        <li><a href="#!"><i class="material-icons">perm_identity</i>My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#!"><i class="material-icons">lock</i>Lock</a></li>
                        <li><a href="#!"><i class="material-icons">power_settings_new</i>Logout</a></li>
                    </ul>
                    <!--end user account dropdown-->
                </div>
            </nav>
            <!--End Header-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Left sidebar-->
            <aside>
                <!-- overlay -->
                <div class="left-sidebar-overlay"></div>
                <div class="left-sidebar z-depth-3">
                    <!-- brand -->
                    <div class="md-logo-container hide-on-large-only theme-bg">
                        <a class="md-brand-logo white-text" href="#">materialcss</a>
                    </div>
                    <!--end brand -->
                    <!--Left sidebar body-->
                    <div class="left-sidebar-body">
                        <!--current subscription user plan -->
                        <div class="current-subscription">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="center">
                                            <span class="current-plan">Business</span>
                                            <span class="price">&#36;49/month</span>
                                        </td>
                                        <td class="center">
                                            <a href="#" class="waves-effect waves-light btn-flat theme-text">UPGRADE</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="divider"></div>
                        <!--End current subscription user plan -->
                        <!--sidebar menu-->
                        <ul class="leftside-navigation">
                            <li class="navigation">Menu</li>
                            <li><a href="dashboard.html" class="menu waves-effect waves-default active tooltipped" data-position="right" data-delay="50" data-tooltip="Dashboard"><i class="material-icons left-icon">dashboard</i>Dashboard2</a></li>
                            <li><a href="javascript:void(0)" class="collapsible-label1 waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Material UI"><i class="material-icons left-icon">build</i><i class="material-icons right-icon">arrow_drop_down</i>Material UI</a>
                                <ul class="collapsible-body">
                                    <li><a href="buttons.html" class="waves-effect waves-default">Buttons</a></li>
                                    <li><a href="breadcrumbs.html" class="waves-effect waves-default">Breadcrumbs</a></li>
                                    <li><a href="collections.html" class="waves-effect waves-default">Collections</a></li>
                                    <li><a href="collapsibles.html" class="waves-effect waves-default">Collapsibles</a></li>
                                    <li><a href="dropdown.html" class="waves-effect waves-default">Dropdown</a></li>
                                    <li><a href="tabs.html" class="waves-effect waves-default">Tabs</a></li>
                                    <li><a href="pagination.html" class="waves-effect waves-default">Pagination</a></li>
                                    <li><a href="preloader.html" class="waves-effect waves-default">Preloader</a></li>
                                    <li><a href="toasts.html" class="waves-effect waves-default">Toasts</a></li>
                                    <li><a href="tooltip.html" class="waves-effect waves-default">Tooltip</a></li>
                                    <li><a href="waves.html" class="waves-effect waves-default">Waves</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-label1 waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="CSS"><i class="material-icons left-icon">library_books</i><i class="material-icons right-icon">arrow_drop_down</i>CSS</a>
                                <ul class="collapsible-body">
                                    <li><a href="typography.html" class="waves-effect waves-default">Typography</a></li>
                                    <li><a href="icons.html" class="waves-effect waves-default">Icons</a></li>
                                    <li><a href="animations.html" class="waves-effect waves-default">Animations</a></li>
                                    <li><a href="shadow.html" class="waves-effect waves-default">Shadow</a></li>
                                    <li><a href="media.html" class="waves-effect waves-default">Media</a></li>
                                    <li><a href="pulse.html" class="waves-effect waves-default">Pulse</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-label1 waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Advanced UI"><i class="material-icons left-icon">add_to_photos</i><i class="material-icons right-icon">arrow_drop_down</i>Advanced UI</a>
                                <ul class="collapsible-body">
                                    <li><a href="chips.html" class="waves-effect waves-default">Chips</a></li>
                                    <li><a href="cards.html" class="waves-effect waves-default">Cards</a></li>
                                    <li><a href="carousel.html" class="waves-effect waves-default">Carousel</a></li>
                                    <li><a href="modals.html" class="waves-effect waves-default">Modals</a></li>
                                    <li><a href="range-slider.html" class="waves-effect waves-default">Range Slider</a></li>
                                    <li><a href="sweetAlert.html" class="waves-effect waves-default">SweetAlert</a></li>
                                    <li><a href="highlight.html" class="waves-effect waves-default">Highlight</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-label1 waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Charts"><i class="material-icons left-icon">insert_chart</i><i class="material-icons right-icon">arrow_drop_down</i>Charts</a>
                                <ul class="collapsible-body">
                                    <li><a href="echarts-charts.html" class="waves-effect waves-default">ECharts</a></li>
                                    <li><a href="google-charts.html" class="waves-effect waves-default">Google Charts</a></li>
                                    <li><a href="chartjs-charts.html" class="waves-effect waves-default">ChartJS</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-label1 waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Forms"><i class="material-icons left-icon">message</i><i class="material-icons right-icon">arrow_drop_down</i>Forms</a>
                                <ul class="collapsible-body">
                                    <li><a href="form-elements.html" class="waves-effect waves-default">Form Elements</a></li>
                                    <li><a href="form-layouts.html" class="waves-effect waves-default">Form Layouts</a></li>
                                    <li><a href="form-validations.html" class="waves-effect waves-default">Form Validations</a></li>
                                    <li><a href="form-masks.html" class="waves-effect waves-default">Form Masks</a></li>
                                    <li><a href="text-editor.html" class="waves-effect waves-default">Text Editor</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-label1 waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Tables"><i class="material-icons left-icon">border_all</i><i class="material-icons right-icon">arrow_drop_down</i>Tables</a>
                                <ul class="collapsible-body">
                                    <li><a href="basic-table.html" class="waves-effect waves-default">Basic Tables</a></li>
                                    <li><a href="data-table.html" class="waves-effect waves-default">Data Tables</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-label1 waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Pages"><i class="material-icons left-icon">terrain</i><i class="material-icons right-icon">arrow_drop_down</i>Pages</a>
                                <ul class="collapsible-body">
                                    <li><a href="login.html" class="waves-effect waves-default">Login</a></li>
                                    <li><a href="signup.html" class="waves-effect waves-default">Signup</a></li>
                                    <li><a href="reset.html" class="waves-effect waves-default">Reset</a></li>
                                    <li><a href="lock.html" class="waves-effect waves-default">Lock</a></li>
                                    <li><a href="change-password.html" class="waves-effect waves-default">Change Password</a></li>
                                    <li><a href="contactus.html" class="waves-effect waves-default">Contactus</a></li>
                                    <li><a href="blank.html" class="waves-effect waves-default">Blank Page</a></li>
                                    <li><a href="404.html" class="waves-effect waves-default">404</a></li>
                                    <li><a href="500.html" class="waves-effect waves-default">500</a></li>
                                    <li><a href="404-admin.html" class="waves-effect waves-default">Dashboard 404</a></li>
                                    <li><a href="500-admin.html" class="waves-effect waves-default">Dashboard 500</a></li>
                                </ul>
                            </li>
                            <li><a href="grid.html" class="waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Grid"><i class="material-icons left-icon">grid_on</i>Grid</a></li>
                            <li><a href="color.html" class="waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Color"><i class="material-icons left-icon">format_color_fill</i>Color</a></li>
                            <li><a href="helpers.html" class="waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Helpers"><i class="material-icons left-icon">live_help</i>Helpers</a></li>
                            <li><a href="docs.html" class="waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Docs"><i class="material-icons left-icon">book</i>Docs</a></li>
                            <li><a href="javascript:void(0)" class="collapsible-label1 waves-effect waves-default tooltipped" data-position="right" data-delay="50" data-tooltip="Label"><i class="material-icons left-icon">menu</i><i class="material-icons right-icon">arrow_drop_down</i>Label 1</a>
                                <ul class="collapsible-body">
                                    <li><a class="collapsible-label2 waves-effect waves-default"><i class="material-icons left-icon">arrow_drop_down</i>Label 2</a>
                                        <ul class="collapsible-body">
                                            <li><a href="#" class="waves-effect waves-default"> Lebel 2 title</a></li>
                                            <li><a href="#" class="waves-effect waves-default"> Lebel 2 title</a></li>
                                            <li><a href="#" class="waves-effect waves-default"> Lebel 2 title</a></li>
                                            <li><a href="#" class="waves-effect waves-default"> Lebel 2 title</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="waves-effect waves-default">Label 2</a></li>
                                    <li><a class="collapsible-label2 waves-effect waves-default"><i class="material-icons left-icon">arrow_drop_down</i>Label 2</a>
                                        <ul class="collapsible-body">
                                            <li><a href="#" class="waves-effect waves-default"> Lebel 2 title</a></li>
                                            <li><a href="#" class="waves-effect waves-default"> Lebel 2 title</a></li>
                                            <li><a href="#" class="waves-effect waves-default"> Lebel 2 title</a></li>
                                            <li><a href="#" class="waves-effect waves-default"> Lebel 2 title</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="waves-effect waves-default">Lebel 2</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!--End sidebar menu-->
                    </div>
                    <!--End Left sidebar body-->
                    <!--Left sidebar footer-->
                    <div class="sidebar-footer">
                        <a href="javascript:void(0)" id="collapsed-left-sidebar" class="toggle-icon-left-sidebar waves-effect waves-default"><i class="right material-icons">keyboard_arrow_left</i></a>
                    </div>
                    <!--End Left sidebar footer-->
                </div>
            </aside>
            <!--End left sidebar-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Page Body-->
            <main id="page-body"class="page-body">
            </main>
            <!--End page body-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Footer-->
            <footer class="page-footer">
                <div class="footer-copyright">
                    <div class="left">&copy; That´s IT</div>
                    <div class="right"><a href="javascript:void(0)" id="scroll-top-dash" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Go top"><i class="material-icons">arrow_upward</i></a></div>
                </div>
            </footer>
            <!--End footer-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
        </div>
        <!--End page control-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--End page wrapper-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--  Scripts-->
    <!-- Jquery -->
    <script src="../../../assets/vendors/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- Materialize js -->
    <script src="../../../assets/vendors/materialize/materialize.min.js" type="text/javascript"></script>
    <!-- prism syntax highlighter -->
    <script src="../../../assets/vendors/prism/prism.js" type="text/javascript"></script>
    <!-- materialcss theme script -->
    <script src="../../../assets/js/app.js" type="text/javascript"></script>
    <!-- echarts chart -->
    <script src="../../../assets/vendors/echarts/echarts.min.js" type="text/javascript"></script>
    <!-- echarts map extension -->
    <script src="../../../assets/vendors/echarts/map-world.js" type="text/javascript"></script>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
</body>
<!--End body-->
</html>
<!--End HTML-->