export default [
  {
    path: '/member',
    meta: { requiresAuth: true },
    component: () => import('../layouts/AdminLayout.vue'),
    children: [
      {
        path: 'list',
        name: 'Danh sách nhân viên',
        component: () => import('../views/member/ListView.vue')
      },
      {
        path: 'create',
        name: 'Tạo mới nhân viên',
        component: () => import('../views/member/CreateView.vue')
      }
    ]
  }
]
