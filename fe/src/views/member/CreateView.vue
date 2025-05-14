<template>
  <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-2xl font-bold mb-6 text-gray-800">Create User</h2>
  
  <form>
    <!-- Full Name -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
      <input type="text" placeholder="John Doe" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Email -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
      <input type="email" placeholder="john@example.com" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Password -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
      <input type="password" placeholder="********" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Role -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
      <select class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="user">User</option>
        <option value="admin">Admin</option>
        <option value="moderator">Moderator</option>
      </select>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300">
      Create User
    </button>
  </form>
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
