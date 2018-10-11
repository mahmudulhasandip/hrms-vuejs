export function login(credentials) {
    return new Promise((res, rej) => {
        axios
            .post("/api/auth/employee/login", credentials)
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej("Wrong email or password");
            });
    });
}

export function getLocalUser() {
    const UserStr = localStorage.getItem("user");

    if (!UserStr) {
        return null;
    }

    return JSON.parse(UserStr);
}
