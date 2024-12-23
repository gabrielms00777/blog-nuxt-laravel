<template>
    <section class="min-h-screen bg-gray-100 p-6">
      <h1 class="text-3xl font-bold text-gray-800 mb-6">Gerenciar Categorias</h1>
  
      <!-- Botão de Adicionar Categoria -->
      <div class="mb-6">
        <NuxtLink
          to="/admin/categorias/nova"
          class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition"
        >
          Adicionar Nova Categoria
        </NuxtLink>
      </div>
  
      <!-- Tabela de Categorias -->
      <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="w-full text-left table-auto">
          <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
            <tr>
              <th class="px-6 py-3">Nome</th>
              <th class="px-6 py-3">Descrição</th>
              <th class="px-6 py-3">Ações</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="border-t">
              <td class="px-6 py-3">Tecnologia</td>
              <td class="px-6 py-3">Posts relacionados a tecnologia.</td>
              <td class="px-6 py-3 space-x-2">
                <NuxtLink
                  to="/admin/categorias/editar/1"
                  class="text-blue-600 hover:underline"
                >
                  Editar
                </NuxtLink>
                <button class="text-red-600 hover:underline">
                  Excluir
                </button>
              </td>
            </tr>
            <!-- Adicione mais categorias aqui -->
          </tbody>
        </table>
      </div>
    </section>
  </template>
  
  <script setup>
definePageMeta({
  layout: 'admin',
  middleware: 'auth',
});
</script>
  
  