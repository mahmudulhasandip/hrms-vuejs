/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
window.$ = window.jQuery = require("jquery");
window.Vue = require("vue");
window._ = require("lodash");
// import Vue from "vue";
import VueRouter from "vue-router";
import Vuex from "vuex";
import StoreData from "./store";
import { routes } from "./routes";
import MainApp from "./components/MainApp.vue";
import { initialize } from "./helpers/general";

const scriptLoader = {
    loaded: [],
    load(src) {
        if (this.loaded.indexOf(src) !== -1) {
            return;
        }

        this.loaded.push(src);

        if (document) {
            const script = document.createElement("script");
            script.setAttribute("src", src);
            document.head.appendChild(script);
        }
    }
};

Vue.use({
    install() {
        Vue.prototype.$scriptLoader = scriptLoader;
    }
});

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
    routes,
    mode: "history"
});

initialize(store, router);

const app = new Vue({
    el: "#app",
    router,
    store,
    components: {
        MainApp
    }
});
