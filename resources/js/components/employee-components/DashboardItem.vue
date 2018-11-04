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
  created() {},
  mounted() {
    this.$store.dispatch("present").then(() => {
      $('[data-plugin="switchery"]').each(function(idx, obj) {
        new Switchery($(this)[0], $(this).data());
      });
    });
    // alert(this.$store.getters.isPresent);
    this.checked = this.$store.getters.isPresent;

    if (this.checked) {
      this.checkedBoxLable = "I'm in!! ";
    } else {
      this.checkedBoxLable = "I'm out!! ";
    }
  }
};
</script>


<style scoped>
.toggle-btn {
  width: 80px;
  height: 40px;
  margin: 10px;
  border-radius: 50px;
  display: inline-block;
  position: relative;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAyklEQVQ4T42TaxHCQAyENw5wAhLACVUAUkABOCkSwEkdhNmbpHNckzv689L98toIAKjqGcAFwElEFr5ln6ruAMwA7iLyFBM/TPDuQSrxwf6fCKBoX2UMIYGYkg8BLOnVg2RiAEexGaQQq4w9e9klcxGLLAUwgDAcihlYAR1IvZA1sz/+AAaQjXhTQQVoe2Yo3E7UQiT2ijeQdojRtClOfVKvMVyVpU594kZK9zzySWTlcNqZY9tjCsUds00+A57z1e35xzlzJjee8xf0HYp+cOZQUQAAAABJRU5ErkJggg==")
    no-repeat 50px center #e74c3c;
  cursor: pointer;
  -webkit-transition: background-color 0.4s ease-in-out;
  -moz-transition: background-color 0.4s ease-in-out;
  -o-transition: background-color 0.4s ease-in-out;
  transition: background-color 0.4s ease-in-out;
  cursor: pointer;
}
.toggle-btn.active {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAmUlEQVQ4T6WT0RWDMAhFeZs4ipu0mawZpaO4yevBc6hUIWLNd+4NeQDk5sE/PMkZwFvZywKSTxF5iUgH0C4JHGyF97IggFVSqyCFga0CvQSg70Mdwd8QSSr4sGBMcgavAgdvwQCtApvA2uKr1x7Pu++06ItrF5LXPB/CP4M0kKTwYRIDyRAOR9lJTuF0F0hOAJbKopVHOZN9ACS0UgowIx8ZAAAAAElFTkSuQmCC")
    no-repeat 10px center #2ecc71;
}
.toggle-btn.active .round-btn {
  left: 45px;
}
.toggle-btn .round-btn {
  width: 30px;
  height: 30px;
  background-color: #fff;
  border-radius: 50%;
  display: inline-block;
  position: absolute;
  left: 5px;
  top: 50%;
  margin-top: -15px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.toggle-btn .cb-value {
  position: absolute;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 9;
  cursor: pointer;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
}

.made-with-love {
  position: fixed;
  left: 0;
  width: 100%;
  bottom: 10px;
  text-align: center;
  font-size: 10px;
  z-index: 9999;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #f50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}
</style>
