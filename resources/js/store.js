import { getLocalUser } from "./helpers/auth";
import { getLocalAdmin } from "./helpers/adminAuth";
import Axios from "axios";

const user = getLocalUser();
const admin = getLocalAdmin();

export default {
    state: {
        // admin
        currentAdmin: admin,

        // employee
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
        employees: [],
        attandence: null,
        in_time: null,
        out_time: null,
        is_present: false,
        entry_trigger: true
    },
    getters: {
        isLoading(state) {
            return state.loading;
        },
        isLoggedIn(state) {
            return state.isLoggedIn;
        },

        authError(state) {
            return state.auth_error;
        },
        // admin
        currentAdmin(state) {
            return state.currentAdmin;
        },

        // employee
        currentUser(state) {
            return state.currentUser;
        },
        employees(state) {
            return state.employees;
        },
        attandence(state) {
            return state.attandence;
        },
        officeInTime(state) {
            return state.in_time;
        },
        officeOutTime(state) {
            return state.out_time;
        },
        isPresent(state) {
            return state.is_present;
        }
    },
    mutations: {
        // Admin
        adminLoginSuccess(state, payload) {
            state.auth_error = null;
            state.isLoggedIn = true;
            state.loading = false;
            state.currentAdmin = Object.assign({}, payload.admin, {
                token: payload.access_token
            });
            localStorage.setItem("admin", JSON.stringify(state.currentAdmin));
        },
        adminLoginFailed(state, payload) {
            state.loading = true;
            state.auth_error = payload.error;
        },
        adminLogout(state) {
            localStorage.removeItem("admin");
            state.isLoggedIn = false;
            state.currentAdmin = null;
        },

        // employee
        login(state) {
            state.loading = true;
            state.auth_error = null;
        },
        loginSuccess(state, payload) {
            state.auth_error = null;
            state.isLoggedIn = true;
            state.loading = false;
            state.currentUser = Object.assign({}, payload.user, {
                token: payload.access_token
            });

            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload) {
            (state.loading = true), (state.auth_error = payload.error);
        },
        logout(state) {
            localStorage.removeItem("user");
            state.isLoggedIn = false;
            state.currentUser = null;
            state.is_present = false;
            state.entry_trigger = true;
        },
        isPresent(state, payload) {
            state.is_present = payload;
            if (state.is_present) {
                state.entry_trigger = false;
            } else {
                state.entry_trigger = true;
            }
        },
        setOfficeTime(state, payload) {
            state.in_time = payload.in_time;
            state.out_time = payload.out_time;
        }
    },
    actions: {
        login(context) {
            context.commit("login");
        },

        // office time
        officeTime(context) {
            Axios.get("/api/employee/office_time").then(response => {
                context.commit("setOfficeTime", response.data.office_time);
            });
        },
        // entry time
        entryTime(context) {
            Axios.post("/api/employee/attendance/time_entry")
                .then(response => {
                    context.commit("isPresent", true);
                })
                .catch(err => {
                    console.log(err);
                });
        },

        // leave time
        leaveTime(context) {
            Axios.post("/api/employee/attendance/time_entry").then(response => {
                context.commit("isPresent", false);
            });
        }
    }
};
