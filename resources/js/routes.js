// admin components
import AdminLogin from "./components/AdminLogin.vue";
import AdminDashboard from "./components/admin-components/AdminDashboard.vue";

// employee components
import Login from "./components/Login.vue";
import EmployeeComponents from "./components/employee-components/EmployeeComponents.vue";
import DashboardItem from "./components/employee-components/DashboardItem.vue";

export const routes = [
    {
        path: "/",
        component: Login
    },

    // admin routes
    {
        path: "/admin/login",
        component: AdminLogin
    },
    {
        path: "/admin/dashboard",
        component: AdminDashboard,
        meta: { requiresAuth: true }
    },

    // employee routes
    {
        path: "/login",
        component: Login
    },
    {
        path: "/employee",
        component: EmployeeComponents,
        children: [
            {
                path: "dashboard",
                component: DashboardItem
            }
        ],
        meta: { requiresAuth: true }
    }
];
