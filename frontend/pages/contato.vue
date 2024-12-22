<template>
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-gray-800">Contato</h1>
        <p class="mt-4 text-gray-600">
          Entre em contato conosco para dúvidas, sugestões ou parcerias.
        </p>
  
        <form class="mt-6 max-w-lg space-y-4">
          <div>
            <label for="name" class="block text-gray-700">Seu Nome</label>
            <input
              type="text"
              id="name"
              class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-primary-500 focus:border-primary-500"
            />
          </div>
  
          <div>
            <label for="email" class="block text-gray-700">Seu Email</label>
            <input
              type="email"
              id="email"
              class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-primary-500 focus:border-primary-500"
            />
          </div>
  
          <div>
            <label for="message" class="block text-gray-700">Mensagem</label>
            <textarea
              id="message"
              rows="4"
              class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-primary-500 focus:border-primary-500"
            ></textarea>
          </div>
  
          <button
            type="submit"
            class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700"
          >
            Enviar
          </button>
        </form>
      </div>
    </section>
  </template>
  
  <script setup>
  // Página estática simples
  </script>
  