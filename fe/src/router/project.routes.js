export default [
  {
    path: '/project',
    meta: { requiresAuth: true },
    component: () => import('../layouts/AdminLayout.vue'),
    children: [
      {
        path: 'list',
        name: 'Danh sách dự án',
        component: () => import('../views/project/ListView.vue')
      },
      {
        path: 'create',
        name: 'Tạo mới dự án',
        component: () => import('../views/project/CreateView.vue')
      }
    ]
  }
]
