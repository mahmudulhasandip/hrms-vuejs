<template>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- header -->
        <app-header />

        <!-- sidebar -->
        <app-sidebar></app-sidebar>

        <div class="page-wrapper">

            <!-- content -->
            <dash-items></dash-items>

            <!-- footer -->
            <app-footer></app-footer>
        </div>
    </div>
</template>



<script>
import HeaderComponent from "./HeaderComponent";
import SidebarComponent from "./SidebarComponent";
import FooterComponent from "./FooterComponent";
import DashboardItem from "../DashboardItem";
export default {
  components: {
    "app-header": HeaderComponent,
    "app-sidebar": SidebarComponent,
    "app-footer": FooterComponent,
    "dash-items": DashboardItem
  },
  created() {
    let recaptchaScript = document.createElement('script')
    recaptchaScript.setAttribute('src', 'http://127.0.0.1:8000/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')
    document.body.appendChild(recaptchaScript)
  },
};
</script>

<style>
.page-wrapper .container-fluid.main-container {
  padding: 20px;
  min-height: calc(100vh - 180px);
}
</style>


