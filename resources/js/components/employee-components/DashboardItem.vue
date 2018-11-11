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
                    <div class="pt-2 float-right">
                        <label for="attendance_switch">{{ checkedBoxLable }} </label>
                        <input class="" id="attendance_switch" type="checkbox" v-model="checked"  @change="onChange" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" checked/>
                        <!-- <div class="toggle-btn ">
                            <input type="checkbox"  v-model="checked"  @change="onChange" class="cb-value" />
                            <span class="round-btn"></span>
                        </div> -->

                    </div>
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
<button type="button" class="btn btn-success waves-effect waves-light btn-sm" id="toastr-three">Click me</button>


                </div>

            </div> <!-- end container-fluid-->
         </div> <!-- end contant-->
    </div>
    <!-- End Page Content-->
</template>

<script>
import Switchery from "./../../../../public/assets/libs/mohithg-switchery/switchery.min.js";
import * as toast from "./../../../../public/assets/libs/jquery-toast-plugin/jquery.toast.min.js";
import * as toastr from "./../../../../public/assets/js/jquery.toastr.js";
export default {
  data() {
    return {
      checked: false,
      checkedBoxLable: ""
    };
  },
  methods: {
    onChange() {
      this.$emit("attendance_switch", this.checked);
      if (this.checked) {
        this.checkedBoxLable = "I'm in ";
        this.$store.dispatch("entryTime");
        // this.$store.commit("isPresent", true);
      } else {
        this.checkedBoxLable = "I'm out";
        this.$store.commit("isPresent", false);
      }
    }
  },
  created() {},
  mounted() {
    //   import toast js
    const toast = document.createElement("script");
    toast.setAttribute(
      "src",
      "/assets/libs/jquery-toast-plugin/jquery.toast.min.js"
    );
    toast.async = true;
    document.body.appendChild(toast);

    const toastr = document.createElement("script");
    toastr.setAttribute("src", "/assets/js/jquery.toastr.js");
    toastr.async = true;
    document.body.appendChild(toastr);

    $("#toastr-three").on("click", function(e) {
      $.NotificationApp.send(
        "Well Done!",
        "You successfully read this important alert message",
        "top-right",
        "#5ba035",
        "success"
      );
    });

    $.toast({
      heading: "Information",
      text:
        "Loaders are enabled by default. Use `loader`, `loaderBg` to change the default behavior",
      icon: "info",
      loader: true, // Change it to false to disable loader
      loaderBg: "#9EC600" // To change the background
    });

    // entryTime for attendance
    let date = new Date();

    async function getPresent(date, store, checked) {
      try {
        await axios
          .get(`/api/employee/attendance/${date}`)
          .then(response => {
            store.commit("isPresent", response.data["present"]);
            checked = store.state.is_present;
            $('[data-plugin="switchery"]').each(function(idx, obj) {
              new Switchery($(this)[0], $(this).data());
            });
            if (response.data["present"]) {
              $(".switchery").click();
            }
          })
          .catch(err => {
            console.log(err);
          });
      } catch (err) {
        console.log(err);
      }
    }
    getPresent(date, this.$store, this.checked);

    if (this.checked) {
      this.checkedBoxLable = "I'm in ";
    } else {
      this.checkedBoxLable = "I'm out";
    }
  }
};
</script>


