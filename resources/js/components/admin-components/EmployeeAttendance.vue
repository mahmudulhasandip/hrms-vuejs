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
          <h4 class="page-title">Attendance Details</h4>
        </div>
        <!-- End page title box -->
        <!-- employee list -->
        <div class="row">
          <div class="col-12">
            <div class="card-box">
              <h4 class="header-title">
                <strong class="text-danger">{{ name }}'s</strong>
                Attendance of {{ formatDate(new Date()) }}
              </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap">
                <thead>
                  <!-- <th>ID</th> -->
                  <th>Date</th>
                  <!-- <th>Name</th> -->
                  <th>In Time</th>
                  <th>Out Time</th>
                  <th>Late</th>
                  <th>Early Leave</th>
                  <!-- <th>Action</th> -->
                </thead>

                <tbody>
                  <tr v-for="employee in employees" :key="employee.id">
                    <!-- <td>{{ employee.id }}</td> -->
                    <td>{{ new Date(employee.created_at).getDate() +"/"+ new Date(employee.created_at).getMonth()+"/"+ new Date(employee.created_at).getFullYear() }}</td>
                    <!-- <td>{{ name }}</td> -->
                    <td>{{ employee.in_time }}</td>
                    <td>{{ employee.out_time }}</td>
                    <td>{{ employee.is_late }}</td>
                    <td>{{ employee.is_early_leave }}</td>
                    <!-- <td>8</td> -->
                  </tr>
                </tbody>
              </table>
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
import moment from "moment";
export default {
  data() {
    return {
      employees: [],
      employee: {
        id: 0,
        name: "",
        date: "",
        in_time: "",
        out_time: "",
        is_late: "",
        is_early_leave: ""
      },
      name: ""
    };
  },
  mounted() {
    axios
      .get(`/api/admin/employee/${this.$route.params.id}`)
      .then(res => [
        (this.employees = res.data.att),
        (this.name = res.data.name)
      ]);
  },
  methods: {
    formatDate(d) {
      return moment(d).format("MMM, YYYY");
    }
  }
};
</script>
