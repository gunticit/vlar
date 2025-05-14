<template>
  <div>
    <h1 class="text-3xl font-bold mb-6">Nhân viên</h1>

    <div class="flex items-center mb-4 space-x-4">
      <div>
        <select class="px-3 py-2" v-model="activeTab">
          <option value="active">
            Hoạt động
          </option>
          <option value="inactive">
            Không hoạt động
          </option>
        </select>
      </div>
      <input
        type="text"
        placeholder="Search"
        v-model="searchQuery"
        class="border border-gray-300 rounded-md px-3 py-2 flex-grow"
      />
      <button class="bg-blue-600 text-white px-4 py-2 rounded-md font-semibold hover:bg-blue-700">
        Add User
      </button>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Projects</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr v-for="user in filteredUsers" :key="user.id">
            <td class="px-6 py-4 whitespace-nowrap flex items-center space-x-3">
              <div
                class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold"
                :class="user.colorClass"
              >
                {{ user.initial }}
              </div>
              <div>{{ user.fullName }}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">{{ user.email }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ user.username }}</td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span
                :class="['px-2 inline-flex text-xs leading-5 font-semibold rounded-full', user.role === 'admin' ? 'bg-red-100 text-red-800' : 'bg-gray-100 text-gray-800']"
              >
                {{ user.role.toUpperCase() }}
              </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">{{ user.projects || 'No projects' }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
              <button class="text-blue-600 hover:text-blue-900 p-2 mr-2 bg-[#154ec1]/10" @click="editUser(user)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>

              </button>
              <button class="p-2 mr-2 text-red-600 hover:text-red-900 bg-[#f00]/10" @click="deleteUser(user)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
              </button>
            </td>
          </tr>
          <tr v-if="filteredUsers.length === 0">
            <td colspan="6" class="px-6 py-4 text-center text-gray-500">No users found.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

const activeTab = ref('active')
const searchQuery = ref('')

const users = ref([
  { id: 1, fullName: 'Maka', email: 'maka@tin.it', username: 'maka', role: 'user', projects: 'okeh', active: true, initial: 'M', colorClass: 'bg-red-500' },
  { id: 2, fullName: 'Asd', email: 'asd@sad.comö', username: 'asd', role: 'user', projects: 'No projects', active: true, initial: 'A', colorClass: 'bg-lime-400' },
  { id: 3, fullName: 'A', email: 'a@email.com', username: 'a', role: 'user', projects: 'okeh', active: true, initial: 'A', colorClass: 'bg-lime-400' },
  { id: 4, fullName: 'Davies', email: 'carlinghamdavies09@sybrin.co.je', username: 'carlingham', role: 'user', projects: 'No projects', active: true, initial: 'D', colorClass: 'bg-blue-700' },
  { id: 5, fullName: 'Chris', email: 'chris.hems@tatooparlor.co.uk', username: 'hemsworth', role: 'user', projects: 'No projects', active: true, initial: 'C', colorClass: 'bg-red-600' },
  { id: 6, fullName: 'Benson Opisa', email: 'bensonopisa@gmail.com', username: 'onyino', role: 'user', projects: 'No projects', active: true, initial: 'B', colorClass: 'bg-gray-800' },
  { id: 7, fullName: 'Qweqweqqqwe', email: 'qeqeqeqe@gmail.com', username: 'qeqe', role: 'user', projects: 'No projects', active: true, initial: 'Q', colorClass: 'bg-gray-700' },
  { id: 8, fullName: 'Adad', email: 'sa@k.com', username: 'aad', role: 'user', projects: 'No projects', active: true, initial: 'A', colorClass: 'bg-lime-400' },
  { id: 9, fullName: 'Asdaqwq', email: 'ad@ca.com', username: 'qw', role: 'admin', projects: 'No projects', active: false, initial: 'A', colorClass: 'bg-red-600' },
  { id: 10, fullName: 'A', email: 'a@ss.com', username: 's', role: 'user', projects: 'No projects', active: false, initial: 'A', colorClass: 'bg-lime-400' },
])

const filteredUsers = computed(() => {
  return users.value.filter(user => {
    const matchesTab = activeTab.value === 'active' ? user.active : !user.active
    const matchesSearch = user.fullName.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
      user.email.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
      user.username.toLowerCase().includes(searchQuery.value.toLowerCase())
    return matchesTab && matchesSearch
  })
})

function editUser(user) {
  alert(`Edit user: ${user.fullName}`)
}

function deleteUser(user) {
  alert(`Delete user: ${user.fullName}`)
}
</script>
