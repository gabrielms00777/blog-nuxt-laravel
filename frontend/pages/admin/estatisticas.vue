<template>
    <section>
      <h1 class="text-2xl font-bold text-blue-600 mb-6">Estatísticas</h1>
  
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 shadow-lg rounded-lg">
          <h2 class="text-lg font-semibold text-gray-700">Posts Criados</h2>
          <p class="mt-2 text-3xl font-bold text-blue-600">120</p>
        </div>
        <div class="bg-white p-6 shadow-lg rounded-lg">
          <h2 class="text-lg font-semibold text-gray-700">Categorias</h2>
          <p class="mt-2 text-3xl font-bold text-blue-600">15</p>
        </div>
        <div class="bg-white p-6 shadow-lg rounded-lg">
          <h2 class="text-lg font-semibold text-gray-700">Usuários Ativos</h2>
          <p class="mt-2 text-3xl font-bold text-blue-600">50</p>
        </div>
      </div>
    </section>
  </template>
  
  <script setup>
  definePageMeta({
    layout: 'admin',
  });
  </script>
  
  <style scoped>
  /* Estilos adicionais, se necessário */
  </style>
  