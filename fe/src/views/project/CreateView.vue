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
<script setup></script>