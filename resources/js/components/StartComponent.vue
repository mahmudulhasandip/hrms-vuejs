<template>
  <!-- Login -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wrapper-page">
            <div class="account-pages">
              <div class="account-box">
                <!-- Logo box-->
                <div class="account-logo-box">
                  <h2 class="text-uppercase text-center">
                    <a href="/" class="text-success">
                      <span>
                        <img :src="'assets/images/logo_black.png'" alt height="100">
                      </span>
                    </a>
                  </h2>
                </div>

                <div class="account-content text-center">
                  <div class="button-list">
                    <router-link to="/login" class="btn btn-primary w-md">Employee</router-link>
                    <router-link to="/admin/login" class="btn btn-danger w-md">Admin</router-link>
                  </div>

                  <!-- end row-->
                </div>
                <!-- end account-content -->
              </div>
              <!-- end account-box -->
            </div>
            <!-- end account-page-->
          </div>
          <!-- end wrapper-page -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- END HOME -->
</template>
