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
        Tổng quan
      </router-link>

      <router-link 
        to="/users" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/users' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
        Nhân viên
      </router-link>

      <router-link 
        to="/projects" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/projects' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
        </svg>
        Dự án
      </router-link>

      <router-link 
        to="/customer" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/customer' }"
      >
        <svg class="w-5 h-5 mr-3 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
        </svg>
        Khách hàng
      </router-link>
      <router-link
        to="/payments" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/payments' }"
      >
        <svg class="w-5 h-5 mr-3 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
        </svg>
        Rải Ngân
      </router-link>
      <router-link
        to="/setting" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"
        :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/setting' }"
      >
        <svg class="w-5 h-5 mr-3 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        Thiết lập
      </router-link>
      <div class="pl-12">
        <router-link
          to="/setting/language"
          class="block px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-indigo-600"
          :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/setting/language' }"
        >
          Ngôn ngữ
        </router-link>
        <router-link
          to="/setting/province"
          class="block px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-indigo-600"
          :class="{ 'bg-indigo-50 text-indigo-600': $route.path === '/setting/province' }"
        >
          Tỉnh thành
        </router-link>
      </div>
    </nav>
  </aside>
</template>

<script setup>
// Component logic here if needed
</script>
