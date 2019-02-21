// admin components
import AdminLogin from "./components/AdminLogin.vue";
import AdminComponents from "./components/admin-components/AdminComponents.vue";
import adminDashboardItem from "./components/admin-components/DashboardItem.vue";
import EmployeeList from "./components/admin-components/EmployeeList.vue";
import NewEmployee from "./components/admin-components/NewEmployee.vue";

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
        path: "/admin",
        component: AdminComponents,
        children: [
            {
                path: "dashboard",
                component: adminDashboardItem
            },
            {
                path: "employee/list",
                component: EmployeeList
            },
            {
                path: "employee/new",
                component: NewEmployee
            }
        ],
        meta: {
            requiresAdminAuth: true
        }
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
