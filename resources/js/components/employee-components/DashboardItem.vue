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

                </div>

            </div> <!-- end container-fluid-->
         </div> <!-- end contant-->
    </div>
    <!-- End Page Content-->
</template>

<script>
import Switchery from "./../../../../public/assets/libs/mohithg-switchery/switchery.min.js";
import moment from "moment";

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
        if (this.$store.state.entry_trigger) {
          this.checkedBoxLable = "I'm in ";
          this.$store.dispatch("entryTime");
          swal({
            title: "Welcome to the office!",
            text: "Your entry time successfully inserted.",
            timer: 3000,
            confirmButtonClass: "btn btn-confirm mt-2",
            type: "success",
            showConfirmButton: false
          }).then(
            function() {},
            // handling the promise rejection
            function(dismiss) {
              if (dismiss === "timer") {
                console.log("Entry time inserted. (swal)");
              }
            }
          );
          this.$store.state.entry_trigger = false;
        }

        // this.$store.commit("isPresent", true);
      } else {
        this.checkedBoxLable = "I'm out";
        // this.$store.dispatch("leaveTime");
        if (
          this.$store.getters.officeOutTime >
          moment(String(new Date())).format("H:mm:ss")
        ) {
          this.$store.dispatch("leaveTime");
          swal({
            title: "You are leaving early!",
            text: "Early leave counted!",
            type: "warning"
          }).then(function() {});
        } else {
          this.$store.dispatch("leaveTime");
          swal({
            title: "You are leaving!",
            text: "Your leave time successfully inserted.",
            timer: 3000,
            confirmButtonClass: "btn btn-confirm mt-2",
            type: "success",
            showConfirmButton: false
          }).then(
            function() {},
            function(dismiss) {
              if (dismiss === "timer") {
                console.log("Entry time inserted. (swal)");
              }
            }
          );
        }
      }
    }
  },
  created() {
    //   get office time
    this.$store.dispatch("officeTime");
    // loading external plugins
    this.$scriptLoader.load(
      "/assets/libs/jquery-toast-plugin/jquery.toast.min.js"
    );
    this.$scriptLoader.load("/assets/js/jquery.toastr.js");
    this.$scriptLoader.load("/assets/libs/sweetalert2/sweetalert2.min.js");
  },
  mounted() {
    // entryTime for attendance
    let date = new Date();
    // alert(moment(String(date)).format("MM/DD/YYYY H:mm:ss"));
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
              store.state.entry_trigger = false;
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


<style scoped>
@import url("./../../../../public/assets/libs/sweetalert2/sweetalert2.min.css");
</style>


