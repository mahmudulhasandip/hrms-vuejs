import Axios from "axios";

export function login(credentials) {
    return new Promise((res, rej) => {
        Axios.post("/api/auth/admin/login", credentials)
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej("Wrong email or password");
            });
    });
}

export function logout() {
    return new Promise((res, rej) => {
        Axios.post("/api/auth/admin/logout")
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej("Error! Something went wrong");
            });
    });
}

export function userData(access_token) {
    return new Promise((res, rej) => {
        Axios.post("/api/auth/admin/me?token=" + access_token)
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej("wrong token");
            });
    });
}

export function getLocalAdmin() {
    const AdminStr = localStorage.getItem("admin");

    if (!AdminStr) {
        return null;
    }
    return JSON.parse(AdminStr);
}
