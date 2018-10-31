<template>
    <!-- Page Content Start -->
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <!-- Page title box -->
                <div class="page-title-box">
                    <!-- <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Greeva</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Starter</li>
                    </ol> -->
                    <h4 class="page-title">Starter</h4>
                </div>
                <!-- End page title box -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                            <router-link to="/employee/dashboard">
                                <div class="float-left">
                                    <h3 class="text-white">Attendance</h3>
                                </div>
                                <div class="widget-chart-one-content text-right">
                                    <p class="text-white mb-0 mt-2">Statistics</p>
                                    <h3 class="text-white">$714</h3>
                                </div>
                            </router-link>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-box widget-chart-one gradient-warning bx-shadow-lg">
                            <router-link to="/employee">
                                <div class="float-left">
                                    <h3 class="text-white">My Profile</h3>
                                </div>
                                <div class="widget-chart-one-content text-right">
                                    <p class="text-white mb-0 mt-2">Statistics</p>
                                    <h3 class="text-white">$714</h3>
                                </div>
                            </router-link>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-box widget-chart-one gradient-info bx-shadow-lg">
                            <router-link to="/employee/dashboard">
                                <div class="float-left">
                                    <h3 class="text-white">Attendance Record</h3>
                                </div>
                                <div class="widget-chart-one-content text-right">
                                    <p class="text-white mb-0 mt-2">Statistics</p>
                                    <h3 class="text-white">$714</h3>
                                </div>
                            </router-link>
                        </div>
                    </div>
                </div>

            </div> <!-- end container-fluid-->
         </div> <!-- end contant-->
    </div>
    <!-- End Page Content-->
</template>
