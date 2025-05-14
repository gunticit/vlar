import { createRouter, createWebHistory } from 'vue-router'
import authRoutes from './auth.routes'
import dashboardRoutes from './dashboard.routes'
import memberRoutes from './member.routes'
import projectRoutes from './project.routes'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/home',
      redirect: '/dashboard'
    },
    ...authRoutes,
    ...dashboardRoutes,
    ...memberRoutes,
    ...projectRoutes,
    // Catch-all route for 404
    {
      path: '/:pathMatch(.*)*',
      redirect: '/dashboard'
    }
  ]
})

// Navigation guard for auth routes
router.beforeEach((to, from, next) => {
  const token = localStorage.getItem('token')
  const publicRoutes = ['login', 'register', 'forgot-password', 'reset-password']
  if (to.meta.requiresAuth && !token) {
    // Redirect to login if trying to access protected route without token
    next({ name: 'login' })
  } else if (token && publicRoutes.includes(to.name)) {
    // Redirect to dashboard if trying to access auth routes while logged in
    next({ name: 'dashboard' })
  } else {
    next()
  }
})

export default router
