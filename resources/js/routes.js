import Login from "./components/Login.vue";
import AdminDashboard from "./components/admin-components/AdminDashboard.vue";

// employee components
import EmployeeComponents from "./components/employee-components/EmployeeComponents.vue";
import DashboardItem from "./components/employee-components/DashboardItem.vue";

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
        path: "/employee",
        component: EmployeeComponents,
        children: [{
            path: "dashboard",
            component: DashboardItem
        }],
        meta: {
            requiresAuth: true
        }
    }
];
