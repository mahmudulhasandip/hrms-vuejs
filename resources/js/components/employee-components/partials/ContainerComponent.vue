<template>
    <div class="page">
        <!-- header -->
        <app-header />

        <div class="page-content d-flex align-items-stretch">
            <!-- sidebar -->
            <app-sidebar></app-sidebar>

            <!-- main container -->
            <div class="content-inner">
                <!-- content -->
                <dash-items></dash-items>

                <!-- footer -->
                <app-footer></app-footer>
            </div>
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
  }
};
</script>

