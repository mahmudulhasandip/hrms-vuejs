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
          <div class="col-12">
            <div class="card-box">
              <h4 class="header-title">Employee List</h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap">
                <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Phone</th>
                  <th>Salary</th>
                  <th>Leave</th>
                  <!-- <th>Action</th> -->
                </thead>

                <tbody>
                  <tr v-for="employee in employees" :key="employee.id">
                    <td>{{ employee.id }}</td>
                    <td>
                      <router-link
                        :to="{ path: '/admin/employee/attendance/'+ employee.id }"
                        :name="employee.fname"
                      >{{ employee.fname }} {{ employee.lname }}</router-link>
                    </td>
                    <td>{{ employee.email }}</td>
                    <td>{{ employee.gender }}</td>
                    <td>{{ employee.date_of_birth }}</td>
                    <td>{{ employee.phone }}</td>
                    <td>{{ employee.salary }}</td>
                    <td>{{ employee.leave }}</td>
                    <!-- <td>8</td> -->
                  </tr>
                </tbody>
              </table>
              <div class="btn-group mb-2">
                <button
                  type="button"
                  class="btn btn-light"
                  @click="fetchPaginateUser(pagination.prev_page_url)"
                  :disabled="!pagination.prev_page_url"
                >Prev</button>
                <!-- <button type="button" class="btn btn-light">1</button> -->
                <button
                  type="button"
                  class="btn btn-light"
                  @click="fetchPaginateUser(pagination.next_page_url)"
                  :disabled="!pagination.next_page_url"
                >Next</button>
              </div>
            </div>
          </div>
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
  data() {
    return {
      employees: [],
      employee: {
        id: 0,
        name: "",
        email: "",
        gender: "",
        phone: ""
      },
      url: "/api/admin/employee",
      pagination: []
    };
  },
  mounted() {
    this.getEmployees();
  },
  methods: {
    getEmployees() {
      let $this = this;
      axios.get(this.url).then(response => {
        // console.log(response.data.data);
        this.employees = response.data.data;

        $this.makePagination(response.data);
      });
    },
    makePagination(data) {
      let pagination = {
        current_page: data.current_page,
        last_page: data.last_page,
        next_page_url: data.next_page_url,
        prev_page_url: data.prev_page_url
      };

      this.pagination = pagination;
    },

    fetchPaginateUser(url) {
      this.url = url;
      this.getEmployees();
    }
  }
};
</script>

<style>
/* @import url("./../../../../public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css");
@import url("./../../../../public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css");
@import url("./../../../../public/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css");
@import url("./../../../../public/assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css"); */
</style>

