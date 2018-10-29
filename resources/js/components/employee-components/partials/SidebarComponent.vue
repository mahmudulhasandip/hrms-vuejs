<template>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="index.html">
                            <i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-atom"></i> <span> UI Elements </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-tabs.html">Tabs & Accordions</a></li>
                            <li><a href="ui-notifications.html">Notifications</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-general.html">General</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkbox & Radio</a></li>
                            <li><a href="ui-progress.html">Progress</a></li>
                            <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                            <li><a href="ui-range-slider.html">Range Slider</a></li>
                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-materialdesign.html">Material Design</a></li>
                            <li><a href="ui-simpleline.html">Simple Line</a></li>
                            <li><a href="ui-dripicons.html">Dripicons</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-email-outline"></i><span> Email </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read Email</a></li>
                            <li><a href="email-compose.html">Compose Email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html">
                            <i class="mdi mdi-calendar"></i> <span> Calendar </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-chart-donut-variant"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-chartist.html">Chartist Chart</a></li>
                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-file-document-box"></i><span class="badge badge-danger float-right">6</span> <span> Forms </span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-upload.html">Form Upload</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-filter-variant"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Tables</a></li>
                            <li><a href="tables-responsive.html">Responsive Tables</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">More</li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-map"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="auth-login.html">Log In</a></li>
                            <li><a href="auth-register.html">Register</a></li>
                            <li><a href="auth-recoverpassword.html">Recover Password</a></li>
                            <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                            <li><a href="auth-404.html">Error 404</a></li>
                            <li><a href="auth-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);"><i class="mdi mdi-google-pages"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-starter.html">Starter</a></li>
                            <li><a href="pages-timeline.html">Timeline</a></li>
                            <li><a href="pages-faq.html">FAQs</a></li>
                        </ul>
                    </li>

                    <!-- <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-multiplication"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li><a href="javascript: void(0);">Level 1.1</a></li>
                            <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Level 2.1</a></li>
                                    <li><a href="javascript: void(0);">Level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

                </ul>

            </div>
            <!-- Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->
</template>
