import axios from 'axios';

/**
 * Axios instance configured for Laravel Sanctum SPA authentication.
 * Automatically handles CSRF cookies and credentials.
 */
const api = axios.create({
    baseURL: '/api',
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'Accept': 'application/json',
        'Content-Type': 'application/json',
    },
    withCredentials: true,
    withXSRFToken: true,
});

/**
 * Request interceptor: ensures CSRF cookie is fetched before
 * any state-changing requests (POST, PUT, PATCH, DELETE).
 */
let csrfCookieFetched = false;

api.interceptors.request.use(async (config) => {
    const method = config.method?.toLowerCase();
    const needsCsrf = ['post', 'put', 'patch', 'delete'].includes(method);

    if (needsCsrf && !csrfCookieFetched) {
        await axios.get('/sanctum/csrf-cookie', { withCredentials: true });
        csrfCookieFetched = true;
    }

    return config;
});

/**
 * Response interceptor: handle 401 (unauthenticated) errors.
 */
api.interceptors.response.use(
    (response) => response,
    (error) => {
        if (error.response?.status === 401) {
            csrfCookieFetched = false;
        }
        return Promise.reject(error);
    }
);

export default api;
