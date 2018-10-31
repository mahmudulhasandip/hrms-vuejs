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

export function logout(token) {
    return new Promise((res, rej) => {
        axios
            .post('/api/auth/employee/logout', {
                headers: {
                    Authorization: 'Bearer' + token
                }
            })
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej('error');
            });
    });
}

export function userData(access_token) {
    return new Promise((res, rej) => {
        axios.post("/api/auth/employee/me?token=" + access_token)
            .then(response => {
                res(response.date)
            })
            .catch(err => {
                rej('wrong token')
            })
    })
}

export function getLocalUser() {
    const UserStr = localStorage.getItem("user");

    if (!UserStr) {
        return null;
    }

    return JSON.parse(UserStr);
}
