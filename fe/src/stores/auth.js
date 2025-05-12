import { defineStore } from "pinia";
import { ref, computed } from "vue";
import axios from "axios";

export const useAuthStore = defineStore("auth", () => {
    // State
    const user = ref(null);
    const token = ref(localStorage.getItem("token"));
    const loading = ref(false);
    const error = ref(null);

    // Getters
    const isAuthenticated = computed(() => !!token.value);
    const getUser = computed(() => user.value);
    const isLoading = computed(() => loading.value);
    const getError = computed(() => error.value);

    // Actions
    const setToken = (newToken) => {
        token.value = newToken;
        if (newToken) {
            localStorage.setItem("token", newToken);
            axios.defaults.headers.common["Authorization"] = `Bearer ${newToken}`;
        } else {
            localStorage.removeItem("token");
            delete axios.defaults.headers.common["Authorization"];
        }
    };

    const register = async (credentials) => {
        loading.value = true;
        error.value = null;
        try {
            const response = await axios.post("/api/auth/register", credentials);
            return response.data;
        } catch (err) {
            error.value = err.response?.data?.message || "Registration failed";
            throw err;
        } finally {
            loading.value = false;
        }
    };

    const login = async (credentials) => {
        loading.value = true;
        error.value = null;
        try {
            const response = await axios.post("/api/auth/login", credentials);
            setToken(response.data.access_token);
            return response.data;
        } catch (err) {
            error.value = err.response?.data?.message || "Login failed";
            throw err;
        } finally {
            loading.value = false;
        }
    };

    const forgotPassword = async (email) => {
        loading.value = true;
        error.value = null;
        try {
            const response = await axios.post("/api/auth/forgot-password", { email });
            return response.data;
        } catch (err) {
            error.value = err.response?.data?.message || "Failed to send reset link";
            throw err;
        } finally {
            loading.value = false;
        }
    };

    const resetPassword = async (resetData) => {
        loading.value = true;
        error.value = null;
        try {
            const response = await axios.post("/api/auth/reset-password", resetData);
            return response.data;
        } catch (err) {
            error.value = err.response?.data?.message || "Password reset failed";
            throw err;
        } finally {
            loading.value = false;
        }
    };

    const logout = async () => {
        loading.value = true;
        error.value = null;
        try {
            await axios.post("/api/auth/logout");
            setToken(null);
            user.value = null;
        } catch (err) {
            error.value = err.response?.data?.message || "Logout failed";
            throw err;
        } finally {
            loading.value = false;
        }
    };

    const fetchUser = async () => {
        if (!token.value) return;

        loading.value = true;
        error.value = null;
        try {
            const response = await axios.get("/api/auth/me");
            user.value = response.data;
            console.log("response.data");
            console.log(response.data)
            return response.data;
        } catch (err) {
            error.value = err.response?.data?.message || "Failed to fetch user";
            if (err.response?.status === 401) {
                setToken(null);
                user.value = null;
            }
            throw err;
        } finally {
            loading.value = false;
        }
    };

    return {
        // State
        user,
        token,
        loading,
        error,
        // Getters
        isAuthenticated,
        getUser,
        isLoading,
        getError,
        // Actions
        setToken,
        register,
        login,
        forgotPassword,
        resetPassword,
        logout,
        fetchUser,
    };
});
