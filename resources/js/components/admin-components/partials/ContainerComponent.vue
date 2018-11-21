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
import MetisMenu from "./../../../../../public/assets/libs/metismenu/metisMenu.min.js";
export default {
  components: {
    "app-header": HeaderComponent,
    "app-sidebar": SidebarComponent,
    "app-footer": FooterComponent
  },
  created() {
    this.$scriptLoader.load("/assets/js/jquery.core.js");
    this.$scriptLoader.load("/assets/js/jquery.app.js");
  },
  mounted() {
    const config = {};
    const menu = new MetisMenu(this.$el, config); // $el is the dom needs metisMenu
    menu.init();
  }
};
</script>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css");
@import url("/assets/libs/jquery-toast-plugin/jquery.toast.min.css");

.page-wrapper .container-fluid.main-container {
  padding: 20px;
  min-height: calc(100vh - 180px);
}
</style>


