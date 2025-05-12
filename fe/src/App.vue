<template>
  <RouterView />
</template>

<script setup>
import { RouterView } from 'vue-router'
import { useAuthStore } from './stores/auth'
import { onMounted } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const authStore = useAuthStore()

// Fetch user data on app mount if token exists
onMounted(async () => {
  if (authStore.token) {
    try {
      await authStore.fetchUser()
      router.push('/home')
    } catch (error) {
      console.error('Failed to fetch user:', error)
    }
  }
})
</script>

<style>
/* Add any global styles here */
body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
}

/* Ensure proper height for layout */
html, body {
  height: 100%;
}

#app {
  height: 100%;
}
</style>
