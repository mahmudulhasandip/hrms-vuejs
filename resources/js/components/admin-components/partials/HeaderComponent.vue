<template>
    <!-- Navigation Bar-->
    <header id="topnav">
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-bell noti-icon"></i>
                        <span class="badge badge-info noti-icon-badge">21</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                        </div>

                        <div class="slimscroll noti-scroll">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img :src="'/assets/images/users/avatar-2.jpg'" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-comment-account-outline"></i></div>
                                <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img :src="'/assets/images/users/avatar-4.jpg'" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-heart"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img :src="'/assets/images/users/avatar-1.jpg'" alt="user" class="rounded-circle"> <span class="ml-1">Agnes K <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="dripicons-user"></i> <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="dripicons-gear"></i> <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="dripicons-help"></i> <span>Support</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="dripicons-lock"></i> <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" @click="logout" class="dropdown-item notify-item">
                            <i class="dripicons-power"></i> <span>Logout</span>
                        </a>

                    </div>
                </li>
                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                        <i class="dripicons-gear noti-icon"></i>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled menu-left mb-0">
                <li class="float-left">
                    <a href="index.html" class="logo">
                        <span class="logo-lg">
                            <img :src="'/assets/images/logo.png'" alt="" height="20">
                        </span>
                        <span class="logo-sm">
                            <img :src="'/assets/images/logo_sm.png'" alt="" height="28">
                        </span>
                    </a>
                </li>
                <li class="float-left">
                    <a class="button-menu-mobile open-left navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </li>
                <li class="app-search">
                    <form>
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit" class="sr-only"></button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->
</template>

<script>
export default {
  methods: {
    logout() {
      this.$store.commit("logout");
      this.$router.push("/login");
    }
  }
};
</script>


