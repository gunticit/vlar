<template>
  <div class="min-h-screen bg-gray-50">
    <Sidebar />
    <Header />
    <main class="ml-64 pt-16">
      <div class="p-6">
        <router-view></router-view>
      </div>
    </main>
  </div>
</template>

<script setup>
import Sidebar from '../components/layout/Sidebar.vue'
import Header from '../components/layout/Header.vue'
</script>
