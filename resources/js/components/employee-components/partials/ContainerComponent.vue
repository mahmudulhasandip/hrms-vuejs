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
        <transition enter-active-class="animated fadeIn faster" leave-active-class="animated fadeOut faster">
            <router-view></router-view>
        </transition>

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
    //
    // const switchery = document.createElement("script");
    // switchery.setAttribute(
    //   "src",
    //   "/assets/libs/mohithg-switchery/switchery.min.js"
    // );
    // switchery.async = true;
    // document.body.appendChild(switchery);
    //
    const jqueryCore = document.createElement("script");
    jqueryCore.setAttribute("src", "/assets/js/jquery.core.js");
    jqueryCore.async = true;
    document.body.appendChild(jqueryCore);
    //
    const jqueryApp = document.createElement("script");
    jqueryApp.setAttribute("src", "/assets/js/jquery.app.js");
    jqueryApp.async = true;
    document.body.appendChild(jqueryApp);
    // this.$store.dispatch("present");
  }
};
</script>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css");
@import url("/assets/libs/mohithg-switchery/switchery.min.css");

.page-wrapper .container-fluid.main-container {
  padding: 20px;
  min-height: calc(100vh - 180px);
}
</style>


