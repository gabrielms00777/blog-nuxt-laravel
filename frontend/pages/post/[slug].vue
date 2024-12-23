<template>
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h1 class="text-4xl font-bold text-gray-800">{{ post.title }}</h1>
      <p class="mt-2 text-gray-600">Por {{ post.author }} em {{ post.created_at }}</p>
      <img :src="post.image" alt="Imagem do post" class="mt-6 rounded-lg w-full object-cover h-64" />
      <div class="mt-6 text-gray-700">
        <p v-html="post.description"></p>
      </div>
    </div>
  </section>
</template>

<script setup>
import actions from '~/actions';

const route = useRoute();
const postSlug = route.params.slug;
const post = await actions.posts.fetchPost(postSlug);
console.log(post);


</script>