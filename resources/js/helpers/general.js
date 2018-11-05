export function initialize(store, router) {
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
    // router.beforeEach((to, from, next) => {
    //     if (to.path == '/employee/dashboard') {
    //         if (store.dispatch("present")) {
    //             next();
    //         }
    //     }
    // });

    // axios.interceptors.response.use(null, (error) => {
    //     if (error.response.status == 401) {
    //         store.commit('logout');
    //         router.push('/login');
    //     }
    // })


    if (store.getters.currentUser) {
        setAuthorization(store.getters.currentUser.token);
    }
}

export function setAuthorization(token) {
    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
}
