<template>
  <div>
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
      <!-- Revenue Report -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">REVENUE REPORT</h2>
        <div class="text-2xl font-bold mb-2">$12,641.00</div>
        <div class="text-gray-600 mb-4">Total earnings</div>
        <!-- Placeholder for chart -->
        <div class="h-32 bg-blue-100 rounded"></div>
      </div>

      <!-- Yearly Breakup -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">YEARLY BREAKUP</h2>
        <div class="text-2xl font-bold mb-2">$36,358</div>
        <div class="text-green-500 mb-4">+2.5% last year</div>
        <!-- Placeholder for pie chart -->
        <div class="h-32 w-32 bg-blue-200 rounded-full mx-auto"></div>
      </div>

      <!-- Monthly Earnings -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">MONTHLY EARNINGS</h2>
        <div class="text-2xl font-bold mb-2">$6,820</div>
        <div class="text-green-500 mb-4">+25.36% last month</div>
        <!-- Placeholder for line chart -->
        <div class="h-32 bg-blue-100 rounded"></div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
      <div class="bg-white p-4 rounded-lg shadow flex flex-col justify-center items-center">
        <div class="text-2xl font-bold">$35,548</div>
        <div class="text-gray-600">Open invoices</div>
        <div class="text-red-500 text-sm mt-1">- $1,450 since last month</div>
      </div>
      <div class="bg-white p-4 rounded-lg shadow flex flex-col justify-center items-center">
        <div class="text-2xl font-bold">15</div>
        <div class="text-gray-600">Ongoing projects</div>
        <div class="text-green-500 text-sm mt-1">+ 25.36% since last month</div>
      </div>
      <div class="bg-white p-4 rounded-lg shadow flex flex-col justify-center items-center">
        <div class="text-2xl font-bold">25</div>
        <div class="text-gray-600">Employees</div>
        <div class="text-green-500 text-sm mt-1">+ 2.5% since last month</div>
      </div>
      <div class="bg-white p-4 rounded-lg shadow flex flex-col justify-center items-center">
        <div class="text-2xl font-bold">27%</div>
        <div class="text-gray-600">New profit</div>
        <div class="text-green-500 text-sm mt-1">+ 4% since last month</div>
      </div>
    </div>

    <!-- Placeholder for map and table -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">REVENUE BY LOCATION</h2>
        <div class="h-48 bg-blue-100 rounded"></div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-sm font-semibold text-gray-500 mb-4">REVENUE BY TOP REGIONS</h2>
        <table class="w-full text-left text-sm">
          <thead>
            <tr>
              <th class="py-2">TOP REGION</th>
              <th class="py-2">REVENUE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Japan</td>
              <td>$4,748,454</td>
            </tr>
            <tr>
              <td>United Kingdom</td>
              <td>$405,748</td>
            </tr>
            <tr>
              <td>United States</td>
              <td>$308,536</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script setup>
// Placeholder for future data fetching and chart integration
</script>
