<template>

    <!-- Login -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="wrapper-page">
                        <div class="account-pages">
                            <div class="account-box" >

                                <!-- Logo box-->
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase text-center">
                                        <a href="index.html" class="text-success">
                                            <span><img :src="'assets/images/logo_dark.png'" alt="" height="28"></span>
                                        </a>
                                    </h2>
                                </div>

                                <div class="account-content">
                                    <form @submit.prevent="authenticate">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress" class="font-weight-medium">Email address</label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" v-model="form.email">
                                        </div>

                                        <div class="form-group mb-3">
                                            <a href="auth-recoverpassword.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                            <label for="password" class="font-weight-medium">Password</label>
                                            <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" v-model="form.password">
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="checkbox checkbox-info">
                                                <input id="remember" type="checkbox">
                                                <label for="remember">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div><p class="text-danger">ok</p></div>

                                        <div class="form-group row text-center">
                                            <div class="col-12">
                                                <button class="btn btn-block btn-success waves-effect waves-light" type="submit">Sign In</button>
                                            </div>
                                        </div>
                                    </form> <!-- end form -->

                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="text-muted">Don't have an account? <a href="#" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end account-content -->

                            </div> <!-- end account-box -->
                        </div>
                        <!-- end account-page-->
                    </div>
                    <!-- end wrapper-page -->

                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- END HOME -->

</template>

<script>
import { login } from "../helpers/auth.js";
import { setAuthorization } from "./../helpers/general.js";
// import { userData } from "../helpers/auth.js";

export default {
  name: "login",
  data() {
    return {
      form: {
        email: "",
        password: ""
      },
      error: null
    };
  },
  methods: {
    authenticate() {
      //   this.$store.dispatch("login");

      login(this.$data.form)
        .then(res => {
          this.$store.commit("loginSuccess", res);
          setAuthorization(this.$store.getters.currentUser.token);
          this.$router.push({ path: "/employee/dashboard" });
        })
        .catch(error => {
          this.$store.commit("loginFailed", { error });
        });
    }
  }
};
</script>


<style scope>
.account-pages {
  background: url("/assets/images/auth-bg.jpg") no-repeat center center;
}
</style>
