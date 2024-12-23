<template>
    <section>
      <h1 class="text-2xl font-bold text-blue-600 mb-6">Criar Post</h1>
  
      <form class="bg-white p-6 shadow-lg rounded-lg space-y-4">
        <div>
          <label for="title" class="block text-gray-700 font-medium">Título do Post</label>
          <input
            id="title"
            type="text"
            placeholder="Digite o título do post"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
          />
        </div>
  
        <div>
          <label for="category" class="block text-gray-700 font-medium">Categoria</label>
          <select
            id="category"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
          >
            <option value="" disabled selected>Selecione uma categoria</option>
            <option value="1">Tecnologia</option>
            <option value="2">Saúde</option>
            <option value="3">Educação</option>
          </select>
        </div>
  
        <div>
          <label for="content" class="block text-gray-700 font-medium">Conteúdo</label>
          <textarea
            id="content"
            placeholder="Digite o conteúdo do post"
            rows="6"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
          ></textarea>
        </div>
  
        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition"
        >
          Salvar Post
        </button>
      </form>
    </section>
  </template>
  
  <script setup>
definePageMeta({
  layout: 'admin',
  middleware: 'auth',
});
</script>
  