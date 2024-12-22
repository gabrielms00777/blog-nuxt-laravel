<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg">
      <div class="p-6">
        <h2 class="text-2xl font-bold text-blue-600">Painel Admin</h2>
      </div>
      <nav class="mt-6 space-y-2">
        <NuxtLink
          to="/admin"
          class="block px-6 py-3 text-gray-700 hover:bg-blue-100 rounded-lg transition"
          :class="{'bg-blue-100': isActive('/admin')}"
        >
          Dashboard
        </NuxtLink>
        <NuxtLink
          to="/admin/posts"
          class="block px-6 py-3 text-gray-700 hover:bg-blue-100 rounded-lg transition"
          :class="{'bg-blue-100': isActive('/admin/posts')}"
        >
          Gerenciar Posts
        </NuxtLink>
        <NuxtLink
          to="/admin/categorias"
          class="block px-6 py-3 text-gray-700 hover:bg-blue-100 rounded-lg transition"
          :class="{'bg-blue-100': isActive('/admin/categorias')}"
        >
          Categorias
        </NuxtLink>
        <NuxtLink
          to="/admin/usuarios"
          class="block px-6 py-3 text-gray-700 hover:bg-blue-100 rounded-lg transition"
          :class="{'bg-blue-100': isActive('/admin/usuarios')}"
        >
          Gerenciar Usuários
        </NuxtLink>
        <NuxtLink
          to="/admin/estatisticas"
          class="block px-6 py-3 text-gray-700 hover:bg-blue-100 rounded-lg transition"
          :class="{'bg-blue-100': isActive('/admin/estatisticas')}"
        >
          Estatísticas
        </NuxtLink>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <slot />
    </main>
  </div>
</template>

<script setup>
import { useRoute } from 'vue-router';

const route = useRoute();
const isActive = (path) => route.path.startsWith(path);
</script>

<style scoped>
/* Estilos adicionais, se necessário */
</style>
