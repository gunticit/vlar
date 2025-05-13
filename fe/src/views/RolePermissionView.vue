<template>
  <div>
    <h1 class="text-3xl font-bold mb-6">Role and Permission Management</h1>

    <div class="mb-6">
      <h2 class="text-xl font-semibold mb-2">Roles</h2>
      <ul class="mb-4">
        <li v-for="role in roles" :key="role.id" class="mb-1">
          <label>
            <input type="checkbox" :value="role.id" v-model="selectedRoles" />
            {{ role.name }}
          </label>
        </li>
      </ul>
      <button
        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700"
        @click="updateUserRoles"
      >
        Update User Roles
      </button>
    </div>

    <div>
      <h2 class="text-xl font-semibold mb-2">Permissions</h2>
      <ul>
        <li v-for="permission in permissions" :key="permission.id" class="mb-1">
          <label>
            <input type="checkbox" :value="permission.id" v-model="selectedPermissions" />
            {{ permission.name }}
          </label>
        </li>
      </ul>
      <button
        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700"
        @click="updateRolePermissions"
      >
        Update Role Permissions
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const roles = ref([])
const permissions = ref([])

const selectedRoles = ref([])
const selectedPermissions = ref([])

// For demo, hardcoded userId and roleId
const userId = 1
const roleId = 1

async function fetchRoles() {
  const res = await axios.get('/api/auth/roles')
  roles.value = res.data
  // Load user roles
  const userRolesRes = await axios.get(`/api/auth/users/${userId}/roles`)
  selectedRoles.value = userRolesRes.data.map(r => r.id)
}

async function fetchPermissions() {
  const res = await axios.get('/api/auth/permissions')
  permissions.value = res.data
  // Load role permissions
  const rolePermissionsRes = await axios.get(`/api/auth/roles/${roleId}/permissions`)
  selectedPermissions.value = rolePermissionsRes.data.map(p => p.id)
}

async function updateUserRoles() {
  await axios.post(`/api/auth/users/${userId}/roles`, { roles: selectedRoles.value })
  alert('User roles updated')
}

async function updateRolePermissions() {
  await axios.post(`/api/auth/roles/${roleId}/permissions`, { permissions: selectedPermissions.value })
  alert('Role permissions updated')
}

onMounted(() => {
  fetchRoles()
  fetchPermissions()
})
</script>
