import Login from "./components/Login.vue";
import AdminDashboard from "./components/admin-components/AdminDashboard.vue";
import EmployeeDashboard from "./components/employee-components/EmployeeDashboard.vue";

export const routes = [{
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
    },



    // employee routes
    {
        path: "/employee/dashboard",
        component: EmployeeDashboard,
        meta: {
            requiresAuth: true
        }
    }
];
