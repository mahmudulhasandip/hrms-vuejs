export function initialize(store, router) {
    router.beforeEach((to, from, next) => {
        const requiresAuth = to.matched.some(
            record => record.meta.requiresAuth
        );
        const requiresAdminAuth = to.matched.some(
            record => record.meta.requiresAdminAuth
        );

        const currentUser = store.state.currentUser;
        const currentAdmin = store.state.currentAdmin;

        if (requiresAuth && !currentUser) {
            next("/login");
        } else if (requiresAdminAuth && !currentAdmin) {
            next("/admin/login");
        } else if (to.path == "/login" && currentUser) {
            next("/employee/dashboard");
        } else if (to.path == "/admin/login" && currentAdmin) {
            next("/employee/dashboard");
        } else {
            next();
        }
    });

    axios.interceptors.response.use(null, error => {
        if (error.response.status == 401) {
            store.commit("logout");
            router.push("/login");
        }

        return Promise.reject(error);
    });

    if (store.getters.currentUser) {
        setAuthorization(store.getters.currentUser.token);
    }
    if (store.getters.currentAdmin) {
        setAuthorization(store.getters.currentAdmin.token);
    }
}

export function setAuthorization(token) {
    axios.defaults.headers.common["Authorization"] = `Bearer ${token}`;
}
