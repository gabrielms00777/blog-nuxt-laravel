<template>
    <section class="min-h-screen bg-gray-100">
      <div class="flex h-full">
        
  
        <!-- Main Content -->
        <main class="flex-1 p-6">
          <h1 class="text-3xl font-bold text-gray-800">Bem-vindo ao admin</h1>
          <p class="mt-2 text-gray-600">
            Aqui você pode gerenciar o conteúdo e os usuários do blog.
          </p>
  
          <!-- Quick Links -->
          <div class="grid gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3">
            <NuxtLink
              to="/admin/posts"
              class="block bg-blue-600 text-white p-4 rounded-lg shadow hover:bg-blue-700 transition"
            >
              <h2 class="text-lg font-bold">Gerenciar Posts</h2>
              <p class="mt-2 text-sm">Criar, editar ou remover posts do blog.</p>
            </NuxtLink>
  
            <NuxtLink
              to="/admin/categorias"
              class="block bg-blue-600 text-white p-4 rounded-lg shadow hover:bg-blue-700 transition"
            >
              <h2 class="text-lg font-bold">Gerenciar Categorias</h2>
              <p class="mt-2 text-sm">Adicionar ou editar categorias.</p>
            </NuxtLink>
  
            <NuxtLink
              to="/admin/usuarios"
              class="block bg-blue-600 text-white p-4 rounded-lg shadow hover:bg-blue-700 transition"
            >
              <h2 class="text-lg font-bold">Gerenciar Usuários</h2>
              <p class="mt-2 text-sm">Controlar acesso de administradores e editores.</p>
            </NuxtLink>
  
            <NuxtLink
              to="/admin/estatisticas"
              class="block bg-blue-600 text-white p-4 rounded-lg shadow hover:bg-blue-700 transition"
            >
              <h2 class="text-lg font-bold">Estatísticas</h2>
              <p class="mt-2 text-sm">Visualizar métricas do blog.</p>
            </NuxtLink>
          </div>
        </main>
      </div>
    </section>
  </template>
  
  