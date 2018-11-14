import { getLocalUser } from "./helpers/auth";
import Axios from "axios";

const user = getLocalUser();

export default {
    state: {
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
        employees: [],
        attandence: null,
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
        currentUser(state) {
            return state.currentUser;
        },
        authError(state) {
            return state.auth_error;
        },
        employees(state) {
            return state.employees;
        },
        attandence(state) {
            return state.attandence;
        },
        isPresent(state) {
            return state.is_present;
        }
    },
    mutations: {
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
        },
        isPresent(state, payload) {
            state.is_present = payload;
            if (state.is_present) {
                state.entry_trigger = false;
            } else {
                state.entry_trigger = true;
            }
        }
    },
    actions: {
        login(context) {
            context.commit("login");
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
            Axios.post("/api/employee/attendace/time_entry").then(response => {
                context.commit("isPresent", false);
            });
        }
    }
};
