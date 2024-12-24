<template>
    <section>
      <h1 class="text-2xl font-bold text-blue-600 mb-6">Estatísticas</h1>
  
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 shadow-lg rounded-lg">
          <h2 class="text-lg font-semibold text-gray-700">Posts</h2>
          <p v-if="statistics.posts != null" class="mt-2 text-3xl font-bold text-blue-600">{{ statistics.posts }}</p>
          <p v-else class="mt-2 text-3xl font-bold text-blue-600">Carregando...</p>
        </div>
        <div class="bg-white p-6 shadow-lg rounded-lg">
          <h2 class="text-lg font-semibold text-gray-700">Categorias</h2>
          <p v-if="statistics.categories != null" class="mt-2 text-3xl font-bold text-blue-600">{{ statistics.categories }}</p>
          <p v-else class="mt-2 text-3xl font-bold text-blue-600">Carregando...</p>
        </div>
        <div class="bg-white p-6 shadow-lg rounded-lg">
          <h2 class="text-lg font-semibold text-gray-700">Usuários Ativos</h2>
          <p v-if="statistics.users != null" class="mt-2 text-3xl font-bold text-blue-600">{{ statistics.users }}</p>
          <p v-else class="mt-2 text-3xl font-bold text-blue-600">Carregando...</p>
        </div>
      </div>
    </section>
</template>
  
<script setup>
definePageMeta({
  layout: 'admin',
  middleware: 'auth',
});

const statistics = ref({
  posts: null,
  categories: null,
  users: null
});

const getStatistics = async () => {
  const response = await useGet('/api/admin/statistics');
  const data = response.data.value;
  statistics.value.users = data?.usersCount;
  statistics.value.posts = data?.postsCount;
  statistics.value.categories = data?.categoriesCount;
  // console.log(response.data.value);
}

onMounted(async () => {
  await getStatistics();
})
</script>
  
  <style scoped>
  /* Estilos adicionais, se necessário */
  </style>
  