import Login from "./components/Login.vue";
import AdminDashboard from "./components/admin-components/AdminDashboard.vue";

export const routes = [
    {
        path: "/",
        component: Login
    },

    {
        path: "/login",
        component: Login
    },

    // admin routes
    {
        path: "/admin/dashboard",
        component: AdminDashboard,
        meta: {
            requiresAuth: true
        }
    }

    // employee routes
];
