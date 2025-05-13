<template>
  <div>
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
      <!-- Revenue Report -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">Tổng tiền đã rãi ngân</h2>
        <div class="text-2xl font-bold mb-2">$12,641.00</div>
      </div>

      <!-- Yearly Breakup -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">Tổng rãi ngân trong năm</h2>
        <div class="text-2xl font-bold mb-2">$36,358</div>
        <div class="text-green-500 mb-4">+2.5% so với năm trước</div>
      </div>

      <!-- Monthly Earnings -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">Tổng rãi ngân trong tháng</h2>
        <div class="text-2xl font-bold mb-2">$6,820</div>
        <div class="text-green-500 mb-4">+25.36% so với tháng trước</div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
      <div class="bg-white p-4 rounded-lg shadow flex flex-col justify-center items-center">
        <div class="text-2xl font-bold">$35,548</div>
        <div class="text-gray-600">Tổng lợi nhuận</div>
        <div class="text-red-500 text-sm mt-1">- $1,450 so với tháng trước</div>
      </div>
      <div class="bg-white p-4 rounded-lg shadow flex flex-col justify-center items-center">
        <div class="text-2xl font-bold">27%</div>
        <div class="text-gray-600">Phần trăm lợi nhuận</div>
        <div class="text-green-500 text-sm mt-1">+ 4% so với tháng trước</div>
      </div>
      <div class="bg-white p-4 rounded-lg shadow flex flex-col justify-center items-center">
        <div class="text-2xl font-bold">15</div>
        <div class="text-gray-600">Dự án đang thực hiện</div>
        <div class="text-green-500 text-sm mt-1">+ 25.36% so với tháng trước</div>
      </div>
      <div class="bg-white p-4 rounded-lg shadow flex flex-col justify-center items-center">
        <div class="text-2xl font-bold">25</div>
        <div class="text-gray-600">Nhân viên</div>
        <div class="text-green-500 text-sm mt-1">+ 2.5% so với tháng trước</div>
      </div>
    </div>

    <!-- Placeholder for map and table -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">Biểu đồ thống kê</h2>
        <div class="h-48 bg-blue-100 rounded"></div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">Dữ liệu liên quan</h2>
        <table class="w-full text-left text-sm">
          <thead>
            <tr>
              <th class="py-2">Dự án nổi bật</th>
              <th class="py-2">NHân viên xuất sắc</th>
            </tr>
          </thead>Pro
          <tbody>
            <tr>
              <td>Dự án A</td>
              <td>Nguyễn Văn A</td>
            </tr>
            <tr>
              <td>Dự án B</td>
              <td>Nguyễn Văn B</td>
            </tr>
            <tr>
              <td>Dự án C</td>
              <td>Nguyễn Văn C</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>
