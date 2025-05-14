export default [
  {
    path: '/dashboard',
    component: () => import('../layouts/AdminLayout.vue'),
    meta: { requiresAuth: true },
    children: [
      {
        path: '',
        name: 'dashboard',
        component: () => import('../views/DashboardView.vue')
      },
      {
        path: '/users',
        name: 'users',
        component: () => import('../views/UsersView.vue')
      },
      {
        path: '/projects',
        name: 'projects',
        component: () => import('../views/ProjectsView.vue')
      },
      {
        path: '/payments',
        name: 'payments',
        component: () => import('../views/PaymentsView.vue')
      }
    ]
  }
]
