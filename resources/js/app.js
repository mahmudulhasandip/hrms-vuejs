/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
// import Vue from "vue";
import VueRouter from "vue-router";
import Vuex from "vuex";
import StoreData from "./store";
import {
    routes
} from "./routes";
import MainApp from "./components/MainApp.vue";
import Axios from "axios";

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
    routes,
    mode: "history"
});

router.beforeEach((to, from, next) => {
    const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
    const currentUser = store.state.currentUser;

    if (requiresAuth && !currentUser) {
        next("/login");
    } else if (to.path == "/login" && currentUser) {
        next("/employee/dashboard");
    } else {
        next();
    }
});

axios.interceptors.response.use(null, (error) => {
    if (error.response.status == 401) {
        store.commit('logout');
        router.push('/login');
    }
})

const app = new Vue({
    el: "#app",
    router,
    store,
    components: {
        MainApp
    },
    mounted() {
        let recaptchaScript = document.createElement('script')
        recaptchaScript.setAttribute('src', 'http://127.0.0.1:8000/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')
        document.body.appendChild(recaptchaScript)
    },
});
