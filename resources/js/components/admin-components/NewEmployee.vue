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
          </ol>-->
          <h4 class="page-title">Employee List</h4>
        </div>
        <!-- End page title box -->
        <!-- employee list -->
        <div class="row">
          <div class="col-md-12">
            <div class="card-box">
              <h4 class="m-t-0 header-title">Form row</h4>
              <p class="text-muted m-b-30 font-13">
                You may also swap
                <code class="highlighter-rouge">.row</code> for
                <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
              </p>
              <form @submit.prevent="createEmployee" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname" class="col-form-label">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="fname"
                      placeholder="First Name"
                      v-model="form.fname"
                    >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname" class="col-form-label">Last Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="lname"
                      placeholder="Last Name"
                      v-model="form.lname"
                    >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="gender" class="col-form-label">Gender</label>
                    <select id="gender" class="form-control" v-model="form.gender">
                      <option value>Choose</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="col-form-label">Date</label>
                    <input class="form-control" type="date" v-model="form.date_of_birth">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="phone" class="col-form-label">Phone</label>
                    <input
                      type="text"
                      class="form-control"
                      id="phone"
                      placeholder="Phone"
                      v-model="form.phone"
                    >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="inputEmail4"
                      placeholder="Email"
                      v-model="form.email"
                    >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4" class="col-form-label">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="inputPassword4"
                      placeholder="Password"
                      v-model="form.password"
                    >
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="current_address" class="col-form-label">Current Address</label>
                    <textarea
                      class="form-control"
                      v-model="form.current_address"
                      id="current_address"
                      cols="30"
                      rows="5"
                    ></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="permanent_address" class="col-form-label">Permanent Address</label>
                    <textarea
                      class="form-control"
                      v-model="form.permanent_address"
                      id="permanent_address"
                      cols="30"
                      rows="5"
                    ></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputCity" class="col-form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" v-model="form.city">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputCountry" class="col-form-label">Country</label>
                    <input
                      type="text"
                      class="form-control"
                      id="inputCountry"
                      v-model="form.country"
                    >
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputRole" class="col-form-label">Role</label>
                    <select id="inputRole" class="form-control" v-model="form.role_id">
                      <option value>Choose</option>
                      <option v-for="role in roles" :key="role.id" :value="role.id">{{ role.name }}</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputState" class="col-form-label">Marital Status</label>
                    <select id="inputState" class="form-control" v-model="form.marital_status">
                      <option value>Choose</option>
                      <option value="married">Married</option>
                      <option value="unmarried">Unmarried</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="salary" class="col-form-label">Salary</label>
                    <input
                      type="text"
                      class="form-control"
                      id="salary"
                      placeholder="Salary"
                      v-model="form.salary"
                    >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="nid" class="col-form-label">NID</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nid"
                      placeholder="NID"
                      v-model="form.nid"
                    >
                  </div>

                  <div class="form-group col-md-4">
                    <label for="nationality" class="col-form-label">Nationality</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nationality"
                      placeholder="Nationality"
                      v-model="form.nationality"
                    >
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="father_name" class="col-form-label">Father's Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="father_name"
                      placeholder="Father's Name"
                      v-model="form.father_name"
                    >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="mother_name" class="col-form-label">Mother's Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="mother_name"
                      placeholder="Mother's Name"
                      v-model="form.mother_name"
                    >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="linkedin" class="col-form-label">LinkedIn</label>
                    <input
                      type="text"
                      class="form-control"
                      id="linkedin"
                      placeholder="LinkedIn"
                      v-model="form.linkedin"
                    >
                  </div>
                </div>
                <div class="form-row">
                  <picture-input
                    ref="pictureInput"
                    width="300"
                    height="300"
                    margin="16"
                    accept="image/jpeg, image/png"
                    size="10"
                    button-class="btn"
                    v-model="form.dp"
                    :custom-strings="{
                        upload: '<h1>Bummer!</h1>',
                        drag: 'Drag a employer picture'
                    }"
                    @change="onChange"
                  ></picture-input>
                  <!-- <vue-dropzone
                    ref="myVueDropzone"
                    id="dropzone"
                    :options="dropzoneOptions"
                    v-model="form.dp"
                    @change="imageSelect"
                  ></vue-dropzone>-->
                </div>
                <div class="form-row mt-2">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <!-- end card-box -->
          </div>
          <!-- end col -->
        </div>
      </div>
      <!-- end container-fluid-->
    </div>
    <!-- end contant-->
  </div>
  <!-- End Page Content-->
</template>

<style scoped>
.dropzone {
  width: 100%;
}
</style>



<script>
// import vue2Dropzone from "vue2-dropzone";
// import "vue2-dropzone/dist/vue2Dropzone.min.css";
import PictureInput from "vue-picture-input";
export default {
  components: {
    // vueDropzone: vue2Dropzone
    PictureInput
  },
  data: function() {
    return {
      //   dropzoneOptions: {
      //     url: "https://httpbin.org/post",
      //     maxFilesize: 1,
      //     autoProcessQueue: false,
      //     dictDefaultMessage: "Select or drag and drop Employer Profile Image"
      //   },
      form: {
        fname: "",
        lname: "",
        email: "",
        password: "",
        gender: "",
        date_of_birth: "",
        current_address: "",
        permanent_address: "",
        city: "",
        country: "",
        nationality: "",
        nid: "",
        phone: "",
        role_id: "",
        marital_status: "",
        father_name: "",
        mother_name: "",
        linkedin: "",
        dp: "",
        salary: "",
        leave: ""
      },
      roles: {}
    };
  },
  created() {
    axios
      .get("/api/admin/get/role")
      .then(res => (this.roles = res.data))
      .catch(err => console.log(err.response.data));
  },
  methods: {
    createEmployee() {
      axios
        .post("/api/admin/employee/new/create", this.form)
        .then(res => console.log(res.data))
        .catch(err => console.log(err.response.data));
    },
    // imageSelect(e) {
    //   console.log(e);
    // },
    onChange(image) {
      console.log("New picture selected!");
      console.log(image);
      if (image) {
        console.log("Picture loaded.");
        this.form.dp = image;
      } else {
        console.log("FileReader API not supported: use the <form>, Luke!");
      }
    }
  }
};
</script>
