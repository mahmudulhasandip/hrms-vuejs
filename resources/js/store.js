import {
    getLocalUser
} from "./helpers/auth";

const user = getLocalUser();

export default {
    state: {
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
        employees: [],
        attandence: null,
        is_present: false
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
        },
        isPresent(state, payload) {
            state.is_present = payload;
        }

    },
    actions: {
        login(context) {
            context.commit("login");
        },

        present(context, state) {
            let date = new Date();
            // date = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
            axios.get(`/api/employee/attendance/${date}`)
                .then(response => {
                    // console.log(response.data['present']);
                    context.commit('isPresent', response.data['present']);
                })
                .catch(err => {
                    console.log(err.data);
                })
        }
    }
};
