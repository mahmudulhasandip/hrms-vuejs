<template>
    <dash-items></dash-items>
</template>

<script>
import DashboardItem from "./DashboardItem";
export default {
  name: "admin-dashboard",
  components: {
    "dash-items": DashboardItem
  }
};
</script>
