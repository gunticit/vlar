<template>
  <div class="flex items-center justify-center bg-gray-50">
    <div class="hidden md:flex w-[35%] min-h-screen bg-[#154EC1] items-center justify-center text-white text-3xl font-bold">
      VUESTIC <span class="text-sm font-normal ml-1">ADMIN</span>
    </div>
    <div class="w-full md:w-[65%] min-h-screen flex flex-col items-center justify-center">
      <div class="w-[80%] md:w-[420px]">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Tạo tài khoản
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          hoặc
          <router-link to="/login" class="font-medium text-[#154ec1] hover:text-indigo-500">
            đăng nhập nếu đã đăng ký
          </router-link>
        </p>
      </div>
      <form class="mt-8 space-y-6 w-[80%] md:w-[420px]" @submit.prevent="handleSubmit">
        <div class="rounded-md shadow-sm -space-y-px">
          <div class="!mb-2">
            <label for="name" class="text-[9px] font-bold uppercase text-[#154ec1]">Tên đầy đủ</label>
            <input
              id="name"
              v-model="form.name"
              name="name"
              type="text"
              required
              class="appearance-none rounded relative block w-full px-3 py-2 border border-[#dee5f2] placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
              :class="{ 'border-red-500': authStore.error }"
            />
          </div>
          <div class="!mb-2">
            <label for="email-address" class="text-[9px] font-bold uppercase text-[#154ec1]">Email</label>
            <input
              id="email-address"
              v-model="form.email"
              name="email"
              type="email"
              autocomplete="email"
              required
              class="appearance-none rounded relative block w-full px-3 py-2 border border-[#dee5f2] placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
              :class="{ 'border-red-500': authStore.error }"
            />
          </div>
          <div class="!mb-2">
            <label for="password" class="text-[9px] font-bold uppercase text-[#154ec1]">Mật khẩu</label>
            <input
              id="password"
              v-model="form.password"
              name="password"
              type="password"
              autocomplete="new-password"
              required
              class="appearance-none rounded relative block w-full px-3 py-2 border border-[#dee5f2] placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
              :class="{ 'border-red-500': authStore.error }"
            />
          </div>
          <div class="!mb-2">
            <label for="password_confirmation" class="text-[9px] font-bold uppercase text-[#154ec1]">Nhập lại mật khẩu</label>
            <input
              id="password_confirmation"
              v-model="form.password_confirmation"
              name="password_confirmation"
              type="password"
              autocomplete="new-password"
              required
              class="appearance-none relative block w-full px-3 py-2 border border-[#dee5f2] rounded placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
              :class="{ 'border-red-500': authStore.error }"
            />
          </div>
        </div>

        <div v-if="authStore.error" class="rounded-md bg-red-50 p-4">
          <div class="flex">
            <div class="flex-shrink-0">
              <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-red-800">
                {{ authStore.error }}
              </p>
            </div>
          </div>
        </div>

        <div>
          <button
            type="submit"
            :disabled="authStore.isLoading"
            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            :class="{ 'opacity-50 cursor-not-allowed': authStore.isLoading }"
          >
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <svg
                class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            {{ authStore.isLoading ? 'Đang tạo tài khoản...' : 'Tạo tài khoản' }}
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '../../stores/auth'

const router = useRouter()
const authStore = useAuthStore()

const form = ref({
  name: '',
  email: '',
  password: '',
  password_confirmation: ''
})

const handleSubmit = async () => {
  try {
    const response = await authStore.register(form.value)
    if (response) {
      router.push('/login')
    }
  } catch (error) {
    console.error('Registration error:', error)
    // Stay on register page when registration fails
  }
}
</script>
