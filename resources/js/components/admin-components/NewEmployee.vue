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
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname" class="col-form-label">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="fname"
                      placeholder="First Name"
                      name="fname"
                    >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname" class="col-form-label">Last Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="lname"
                      placeholder="Last Name"
                      name="lname"
                    >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="gender" class="col-form-label">Gender</label>
                    <select id="gender" class="form-control" name="gender">
                      <option>Choose</option>
                      <option value>Male</option>
                      <option value>Female</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="col-form-label">Date</label>
                    <input class="form-control" type="date" name="date_of_birth">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="phone" class="col-form-label">Phone</label>
                    <input
                      type="text"
                      class="form-control"
                      id="phone"
                      placeholder="Phone"
                      name="phone"
                    >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="inputEmail4"
                      placeholder="Email"
                      name="email"
                    >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4" class="col-form-label">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="inputPassword4"
                      placeholder="Password"
                      name="password"
                    >
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="current_address" class="col-form-label">Current Address</label>
                    <textarea
                      class="form-control"
                      name="current_address"
                      id="current_address"
                      cols="30"
                      rows="5"
                    ></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="permanent_address" class="col-form-label">Permanent Address</label>
                    <textarea
                      class="form-control"
                      name="permanent_address"
                      id="permanent_address"
                      cols="30"
                      rows="5"
                    ></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputCity" class="col-form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputCountry" class="col-form-label">Country</label>
                    <input type="text" class="form-control" id="inputCountry" name="country">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputRole" class="col-form-label">Role</label>
                    <select id="inputRole" class="form-control" name="role_id">
                      <option>Choose</option>
                      <option>Role</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputState" class="col-form-label">Marital Status</label>
                    <select id="inputState" class="form-control" name="marital_status">
                      <option>Choose</option>
                      <option>Married</option>
                      <option>Unmarried</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="father_name" class="col-form-label">Father's Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="father_name"
                      placeholder="First Name"
                      name="father_name"
                    >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mother_name" class="col-form-label">Mother's Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="mother_name"
                      placeholder="First Name"
                      name="mother_name"
                    >
                  </div>

                  <div class="fallback">
                    <input name="file" type="file" multiple="multiple">
                  </div>
                  <div class="dz-message needsclick">
                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                    <h3>Drop files here or click to upload.</h3>
                    <span class="text-muted font-13">
                      (This is just a demo dropzone. Selected files are
                      <strong>not</strong> actually uploaded.)
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Check me out
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
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


<script>
export default {
  created() {
    this.$scriptLoader.load("/assets/libs/dropzone/min/dropzone.min.js");
  }
};
</script>
