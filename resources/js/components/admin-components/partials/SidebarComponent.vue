<template>
  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">
    <div class="slimscroll-menu">
      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <ul class="metismenu" id="side-menu">
          <li class="menu-title">Navigation</li>

          <li>
            <router-link to="/admin/dashboard">
              <i class="mdi mdi-view-dashboard"></i>
              <span>Dashboard</span>
            </router-link>
          </li>

          <li>
            <router-link to>
              <i class="mdi mdi-account"></i>
              <span>Employees</span>
              <span class="menu-arrow"></span>
            </router-link>
            <ul class="nav-second-level nav" aria-expanded="false">
              <li>
                <router-link to="/admin/employee/list">Employee List</router-link>
              </li>
              <li>
                <router-link to="/admin/employee/new">New Employee</router-link>
              </li>
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

          </li>-->
        </ul>
      </div>
      <!-- Sidebar -->
      <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
  </div>
  <!-- Left Sidebar End -->
</template>


<script>
export default {
  methods: {
    logout() {
      this.$Progress.start();
      this.$store.commit("logout");
      this.$router.push("/login");
      this.$Progress.finish();
    }
  }
};
</script>
