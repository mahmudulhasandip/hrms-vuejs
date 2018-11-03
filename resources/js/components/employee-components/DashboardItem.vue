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
                        <input class="" id="attendance_switch" type="checkbox" v-model="checked" @change="onChange" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
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
        this.checkedBoxLable = "I'm in!!";
      } else {
        this.checkedBoxLable = "I'm out!!";
      }
    }
  },
  mounted() {
      let date = new Date();
      date = `${date.getHours()}-${date.getMinutes()}-${date.getSeconds()}`;

      this.$store.dispatch('getAttendance');
    if (this.checked) {
      this.checkedBoxLable = "I'm in!! ";
    } else {
      this.checkedBoxLable = "I'm out!! ";
    }
    $('[data-plugin="switchery"]').each(function(idx, obj) {
      new Switchery($(this)[0], $(this).data());
    });
  }
};
</script>

