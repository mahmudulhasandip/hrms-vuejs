<template>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- header -->
        <app-header />

        <!-- sidebar -->
        <app-sidebar></app-sidebar>

        <!-- content -->
        <!-- <dash-items></dash-items> -->
        <router-view></router-view>

        <!-- footer -->
        <app-footer></app-footer>
    </div>
</template>


<script>
import HeaderComponent from "./HeaderComponent";
import SidebarComponent from "./SidebarComponent";
import FooterComponent from "./FooterComponent";
export default {
  components: {
    "app-header": HeaderComponent,
    "app-sidebar": SidebarComponent,
    "app-footer": FooterComponent
  },
  mounted() {
    const plugin = document.createElement("script");
    plugin.setAttribute(
      "src",
      "http://localhost:8000/assets/js/jquery.core.js"
    );
    plugin.async = true;
    document.body.appendChild(plugin);
    const plugin2 = document.createElement("script");
    plugin2.setAttribute(
      "src",
      "http://localhost:8000/assets/js/jquery.app.js"
    );
    plugin2.async = true;
    document.body.appendChild(plugin2);
  }
};
</script>

<style>
.page-wrapper .container-fluid.main-container {
  padding: 20px;
  min-height: calc(100vh - 180px);
}
</style>


