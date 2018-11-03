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
        attandence: null
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
        attandence(state){
            return state.attandence;
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

    },
    actions: {
        login(context) {
            context.commit("login");
        },

        getAttendance(context){
            let date = new Date();
            // date = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
            axios.get(`/api/employee/attendance/${date}` )
                .then(response => {
                    console.log(response.data['attendance']);

                })
                .catch(err => {
                    console.log(err.data);
                })
        }
    }
};
