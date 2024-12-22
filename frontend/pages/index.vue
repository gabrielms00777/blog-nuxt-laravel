<template>
    <section class="bg-gray-50 py-12">
      <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center text-gray-800">Bem-vindo ao Mini Blog</h1>
        <p class="mt-4 text-center text-gray-600">
          Explore os últimos posts e descubra conteúdos incríveis.
        </p>
  
        <!-- Post Grid -->
        <div class="grid gap-6 mt-8 md:grid-cols-2 lg:grid-cols-3">
          <div
            v-for="post in posts"
            :key="post.id"
            class="bg-white rounded-lg shadow hover:shadow-lg transition-all"
          >
            <img
              :src="post.image"
              alt="Imagem do post"
              class="rounded-t-lg object-cover w-full h-48"
            />
            <div class="p-4">
              <h2 class="text-lg font-bold text-gray-800 truncate">
                {{ post.title }}
              </h2>
              <p class="mt-2 text-sm text-gray-600">
                {{ post.description }}
              </p>
              <NuxtLink class="inline-block mt-4 text-primary-600 hover:underline" :to="{ name: 'post-slug', params: { slug: 'como-iniciar-desenvolvimento' } }">
                Ler mais
              </NuxtLink>
                
                
            </div>
          </div>
        </div>
      </div>
  
    </section>
  </template>
  
  <script setup>
  const posts = [
    {
      id: 1,
      title: "Como iniciar no mundo do desenvolvimento?",
      description: "Dicas essenciais para quem está começando no desenvolvimento web.",
      slug: "como-iniciar-desenvolvimento",
      image: "https://via.placeholder.com/300x200",
    },
    {
      id: 2,
      title: "10 ferramentas que todo dev precisa conhecer",
      description: "Ferramentas indispensáveis para programadores modernos.",
      slug: "ferramentas-dev",
      image: "https://via.placeholder.com/300x200",
    },
    {
      id: 3,
      title: "Entendendo o JavaScript de forma prática",
      description: "Um guia simples para dominar o básico de JavaScript.",
      slug: "javascript-pratico",
      image: "https://via.placeholder.com/300x200",
    },
    {
      id: 4,
      title: "O poder do TailwindCSS no design moderno",
      description: "Como o TailwindCSS está mudando a forma de estilizar interfaces.",
      slug: "poder-tailwindcss",
      image: "https://via.placeholder.com/300x200",
    },
    {
      id: 5,
      title: "Nuxt.js: O framework Vue para SSR e SPAs",
      description: "Descubra o que torna o Nuxt.js tão poderoso para desenvolvimento Vue.",
      slug: "nuxtjs-framework",
      image: "https://via.placeholder.com/300x200",
    },
  ];
  </script>
  