<template>
  <div>
    <router-view></router-view>
    <!-- set progressbar -->
    <vue-progress-bar></vue-progress-bar>
  </div>
</template>
<script>
export default {
  name: "main-app",
  mounted() {
    //  [App.vue specific] When App.vue is finish loading finish the progress bar
    this.$Progress.finish();
  },
  created() {
    this.$scriptLoader.load("/assets/js/jquery.core.js");
    this.$scriptLoader.load("/assets/js/jquery.app.js");

    //  [App.vue specific] When App.vue is first loaded start the progress bar
    this.$Progress.start();
    //  hook the progress bar to start before we move router-view
    this.$router.beforeEach((to, from, next) => {
      //  does the page we want to go to have a meta.progress object
      if (to.meta.progress !== undefined) {
        let meta = to.meta.progress;
        // parse meta tags
        this.$Progress.parseMeta(meta);
      }
      //  start the progress bar
      this.$Progress.start();
      //  continue to next page
      next();
    });
    //  hook the progress bar to finish after we've finished moving router-view
    this.$router.afterEach((to, from) => {
      //  finish the progress bar
      this.$Progress.finish();
    });

    axios.interceptors.request.use(config => {
      this.$Progress.start(); // for every request start the progress
      return config;
    });

    axios.interceptors.response.use(response => {
      this.$Progress.finish(); // finish when a response is received
      return response;
    });
  }
};
</script>

