<template>
  <aside class="w-64 bg-white h-screen fixed left-0 top-0 shadow-sm">
    <!-- Logo -->
    <div class="px-6 py-6 h-[64px] border-b">
      <router-link to="/dashboard" class="text-xl font-bold text-[#154EC1]"><svg data-v-4553d6b2="" height="18" alt="Vuestic Admin" fill="none" viewBox="0 0 478 57" xmlns="http://www.w3.org/2000/svg"><path d="M18.2761 56.1386L0 13.3794H10.5519L18.8968 33.3107L27.2417 13.3794H37.7936L19.5175 56.1386H18.2761ZM62.4836 40.8281V13.3794H72.5527V39.3108C72.5527 44.8281 75.1734 46.7592 78.6907 46.7592C82.5528 46.7592 84.9666 44.8281 84.9666 39.3108V13.3794H95.1047V40.8281C95.1047 50.6213 87.7942 56.1386 78.6907 56.1386C69.2423 56.1386 62.4836 50.3454 62.4836 40.8281ZM122.415 54.7593V13.3794H149.795V22.3451H132.553V29.7935H148.485V38.6211H132.553V46.0695H150.554V54.7593H122.415ZM175.933 42.6212H185.795C185.795 45.035 187.727 46.9661 190.071 46.9661C192.623 46.9661 194.209 45.5178 194.209 43.3798C194.209 40.2763 190.14 39.3798 186.761 38.2074C179.795 35.7246 175.933 32.4831 175.933 25.3796C175.933 18.0692 182.209 12.0001 190.002 12.0001C199.175 12.0001 203.52 17.8623 204.072 25.5175H194.554C194.554 23.1727 193.106 21.2416 190.278 21.2416C188.071 21.2416 185.933 22.552 185.933 25.2417C185.933 28.3452 189.727 28.8969 193.244 29.9314C200.623 32.1383 204.072 36.2763 204.072 42.7591C204.072 50.0696 197.865 56.1386 190.071 56.1386C181.037 56.1386 175.933 50.0696 175.933 42.6212ZM236.442 54.7593V22.3451H227.2V13.3794H256.028V22.3451H246.649V54.7593H236.442ZM281.408 54.7593V13.3794H291.546V54.7593H281.408ZM317.502 34.0694C317.502 21.7244 326.812 12.0001 339.916 12.0001C347.778 12.0001 353.226 14.9657 357.64 19.5864L350.675 26.2072C347.778 23.3796 344.054 21.5865 339.916 21.5865C332.536 21.5865 327.778 27.1038 327.778 34.0694C327.778 41.035 332.536 46.5523 339.916 46.5523C344.054 46.5523 347.778 44.7592 350.675 41.9315L357.433 48.5523C353.295 52.8972 347.571 56.1386 339.916 56.1386C326.812 56.1386 317.502 46.4143 317.502 34.0694Z" fill="url(#paint0_linear)"></path><path fill="#154EC1" d="M388.671 23.5893L388.364 24.844H391.71L391.403 23.5893C391.18 22.7157 390.957 21.7677 390.734 20.7454C390.511 19.7231 390.288 18.7565 390.065 17.8457H389.953C389.749 18.7751 389.535 19.751 389.312 20.7733C389.107 21.777 388.894 22.7157 388.671 23.5893ZM381.7 32.3999L387.221 14.2769H393.02L398.541 32.3999H393.466L392.574 28.5523H387.5L386.607 32.3999H381.7Z"></path><path fill="#154EC1" d="M403.987 32.3999V14.2769H409.34C410.715 14.2769 411.97 14.4441 413.104 14.7787C414.256 15.1133 415.241 15.6431 416.059 16.368C416.877 17.0929 417.509 18.0223 417.955 19.1561C418.42 20.29 418.652 21.6562 418.652 23.2548C418.652 24.8533 418.429 26.2288 417.983 27.3812C417.537 28.5337 416.905 29.4817 416.087 30.2252C415.288 30.9687 414.331 31.517 413.215 31.8702C412.119 32.2234 410.92 32.3999 409.619 32.3999H403.987ZM408.782 28.5523H409.061C409.712 28.5523 410.325 28.4779 410.901 28.3292C411.477 28.1619 411.97 27.8831 412.379 27.4928C412.806 27.1024 413.141 26.5634 413.383 25.8756C413.624 25.1879 413.745 24.3143 413.745 23.2548C413.745 22.1953 413.624 21.3309 413.383 20.6618C413.141 19.9926 412.806 19.4721 412.379 19.1004C411.97 18.7286 411.477 18.4777 410.901 18.3476C410.325 18.1989 409.712 18.1245 409.061 18.1245H408.782V28.5523Z"></path><path fill="#154EC1" d="M424.664 32.3999V14.2769H429.794L432.526 21.6934C432.694 22.1953 432.852 22.7157 433 23.2548C433.149 23.7938 433.307 24.3328 433.474 24.8719H433.586C433.753 24.3328 433.911 23.7938 434.06 23.2548C434.208 22.7157 434.366 22.1953 434.534 21.6934L437.155 14.2769H442.285V32.3999H437.935V27.0467C437.935 26.582 437.954 26.0708 437.991 25.5132C438.047 24.9555 438.103 24.3886 438.158 23.8124C438.214 23.2176 438.279 22.6414 438.354 22.0837C438.428 21.5261 438.493 21.0242 438.549 20.5781H438.437L436.932 24.9277L434.701 30.9222H432.136L429.905 24.9277L428.456 20.5781H428.344C428.4 21.0242 428.465 21.5261 428.539 22.0837C428.614 22.6414 428.679 23.2176 428.734 23.8124C428.79 24.3886 428.837 24.9555 428.874 25.5132C428.93 26.0708 428.957 26.582 428.957 27.0467V32.3999H424.664Z"></path><path fill="#154EC1" d="M450.028 32.3999V14.2769H454.823V32.3999H450.028Z"></path><path fill="#154EC1" d="M462.567 32.3999V14.2769H467.474L471.489 22.3625L473.218 26.4333H473.329C473.274 25.95 473.209 25.4202 473.134 24.844C473.06 24.2678 472.995 23.6823 472.939 23.0875C472.883 22.4741 472.828 21.87 472.772 21.2752C472.735 20.6618 472.716 20.0762 472.716 19.5186V14.2769H477.289V32.3999H472.381L468.366 24.2864L466.638 20.2435H466.526C466.638 21.2845 466.768 22.4183 466.917 23.6451C467.065 24.8719 467.14 26.0429 467.14 27.1582V32.3999H462.567Z"></path><defs><linearGradient id="paint0_linear" gradientUnits="userSpaceOnUse" x1="0" x2="357.64" y1="56.1386" y2="56.1386"><stop stop-color="#154EC1"></stop><stop stop-color="#154EC1" offset="1"></stop></linearGradient></defs></svg></router-link>
    </div>

    <!-- Navigation Menu -->
    <nav>
      <router-link 
        to="/dashboard" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-[#154EC1]"
        :class="{ 'font-bold text-[#154EC1]': $route.path === '/dashboard' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        Tổng quan
      </router-link>

      <router-link 
        to="/member" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-[#154EC1]"
        :class="{ 'font-bold text-[#154EC1]': $route.path === '/member' || $route.path === '/member/list' || $route.path === '/member/create' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
        Nhân viên
      </router-link>
      <div class="pl-4">
        <router-link
          to="/member/list"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/member/list' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Danh sách</span>
        </router-link>
        <router-link
          to="/member/create"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/member/create' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Thêm mới</span>
        </router-link>
      </div>
      <router-link 
        to="/project" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-[#154EC1]"
        :class="{ 'font-bold text-[#154EC1]': $route.path === '/project' }"
      >
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
        </svg>
        Dự án
      </router-link>
      <div class="pl-4">
        <router-link
          to="/project/list"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/project/list' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Danh sách</span>
        </router-link>
        <router-link
          to="/project/create"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/project/create' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Thêm mới</span>
        </router-link>
      </div>
      <router-link 
        to="/customer" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-[#154EC1]"
        :class="{ 'font-bold text-[#154EC1]': $route.path === '/customer' }"
      >
        <svg class="w-5 h-5 mr-3 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
        </svg>
        Khách hàng
      </router-link>
      <div class="pl-4">
        <router-link
          to="/setting/language"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/setting/language' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Danh sách</span>
        </router-link>
        <router-link
          to="/setting/language"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/setting/language' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Thêm mới</span>
        </router-link>
      </div>
      <router-link
        to="/payments" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-[#154EC1]"
        :class="{ 'font-bold text-[#154EC1]': $route.path === '/payments' }"
      >
        <svg class="w-5 h-5 mr-3 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
        </svg>
        Rải Ngân
      </router-link>
      <div class="pl-4">
        <router-link
          to="/setting/language"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/setting/language' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Quy trình</span>
        </router-link>
        <router-link
          to="/setting/language"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/setting/language' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Lịch sử</span>
        </router-link>
      </div>
      <router-link
        to="/setting" 
        class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-[#154EC1]"
        :class="{ 'font-bold text-[#154EC1]': $route.path === '/setting' }"
      >
        <svg class="w-5 h-5 mr-3 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        Thiết lập
      </router-link>
      <div class="pl-4">
        <router-link
          to="/setting/language"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/setting/language' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Ngôn ngữ</span>
        </router-link>
        <router-link
          to="/setting/province"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/setting/province' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Tỉnh thành</span>
        </router-link>
        <router-link
          to="/setting/account"
          class="flex align-items text-xs px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-[#154EC1]"
          :class="{ 'bg-indigo-50 text-[#154EC1]': $route.path === '/setting/account' }"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
          <span>Tài khoản</span>
        </router-link>
      </div>
    </nav>
  </aside>
</template>

<script setup>
// Component logic here if needed
</script>
