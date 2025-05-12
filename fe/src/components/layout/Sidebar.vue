<template>
  <aside class="w-64 bg-white h-screen fixed left-0 top-0 shadow-sm">
    <!-- Logo -->
    <div class="px-6 py-4 border-b">
      <router-link to="/dashboard" class="text-xl font-bold text-indigo-600">VLAR Admin</router-link>
    </div>

    <!-- Navigation Menu -->
    <nav class="mt-4">
      <router-link 
        to="/dashboard" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/dashboard' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        Dashboard
      </router-link>

      <router-link 
        to="/users" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/users' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
        Users
      </router-link>

      <router-link 
        to="/projects" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/projects' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
        </svg>
        Projects
      </router-link>

      <router-link 
        to="/payments" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/payments' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
        </svg>
        Payments
      </router-link>
    </nav>
  </aside>
</template>

<script setup>
// Component logic here if needed
</script>
