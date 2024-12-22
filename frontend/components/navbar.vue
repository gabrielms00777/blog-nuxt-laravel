<template>
    <header class="bg-white shadow">
      <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <NuxtLink to="/" class="text-2xl font-bold text-blue-600">
          Mini Blog
        </NuxtLink>
  
        <!-- Navigation Links -->
        <nav class="flex space-x-6">
          <NuxtLink
            to="/sobre"
            class="text-gray-700 hover:text-blue-600 transition"
          >
            Sobre
          </NuxtLink>
          <NuxtLink
            to="/contato"
            class="text-gray-700 hover:text-blue-600 transition"
          >
            Contato
          </NuxtLink>
          <NuxtLink
            to="/login"
            class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition"
          >
            Login
          </NuxtLink>
        </nav>
      </div>
    </header>
  </template>
  
  <script setup>
  </script>
  