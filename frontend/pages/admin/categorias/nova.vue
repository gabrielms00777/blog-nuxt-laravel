<template>
    <section>
      <h1 class="text-2xl font-bold text-blue-600 mb-6">Criar Categoria</h1>
  
      <form class="bg-white p-6 shadow-lg rounded-lg space-y-4">
        <div>
          <label for="name" class="block text-gray-700 font-medium">Nome da Categoria</label>
          <input
            id="name"
            type="text"
            placeholder="Digite o nome da categoria"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
          />
        </div>
  
        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition"
        >
          Salvar Categoria
        </button>
      </form>
    </section>
  </template>
  
  <script setup>
  definePageMeta({
    layout: 'admin',
  });
  </script>
  