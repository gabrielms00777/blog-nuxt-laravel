<template>
    <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-gray-800">{{ post.title }}</h1>
        <p class="mt-2 text-gray-600">Por {{ post.author }} em {{ post.date }}</p>
        <img :src="post.image" alt="Imagem do post" class="mt-6 rounded-lg w-full object-cover h-64" />
        <div class="mt-6 text-gray-700">
          <p v-html="post.content"></p>
        </div>
      </div>
    </section>
  </template>
  
  <script setup>
  import { useRoute } from 'vue-router';
  
  const route = useRoute();
  const postSlug = route.params.slug;
  
  // Simulação de busca de dados com base no slug
  const posts = [
    {
      slug: "como-iniciar-desenvolvimento",
      title: "Como iniciar no mundo do desenvolvimento?",
      author: "João Silva",
      date: "22 de Dezembro de 2024",
      image: "https://via.placeholder.com/800x400",
      content: "<p>Este é o conteúdo completo do post...</p>",
    },
    // Outros posts...
  ];
  
  const post = posts.find((p) => p.slug === postSlug);
  </script>
  