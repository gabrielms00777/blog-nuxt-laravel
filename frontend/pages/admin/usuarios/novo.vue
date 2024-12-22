<template>
    <section>
      <h1 class="text-2xl font-bold text-blue-600 mb-6">Criar Usuário</h1>
  
      <form class="bg-white p-6 shadow-lg rounded-lg space-y-4">
        <div>
          <label for="name" class="block text-gray-700 font-medium">Nome do Usuário</label>
          <input
            id="name"
            type="text"
            placeholder="Digite o nome do usuário"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
          />
        </div>
  
        <div>
          <label for="email" class="block text-gray-700 font-medium">E-mail</label>
          <input
            id="email"
            type="email"
            placeholder="Digite o e-mail do usuário"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
          />
        </div>
  
        <div>
          <label for="password" class="block text-gray-700 font-medium">Senha</label>
          <input
            id="password"
            type="password"
            placeholder="Digite uma senha"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
          />
        </div>
  
        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition"
        >
          Criar Usuário
        </button>
      </form>
    </section>
  </template>
  
  <script setup>
  definePageMeta({
    layout: 'admin',
  });
  </script>
  