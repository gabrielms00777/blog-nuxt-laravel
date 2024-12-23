<template>
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4 max-w-md">
        <h1 class="text-4xl font-bold text-gray-800">Login</h1>
        <p class="mt-2 text-gray-600">
          Faça login para acessar o painel administrativo.
        </p>
        
        <form class="mt-6 space-y-4" @submit.prevent="handleLogin">
          <div>
            <label for="email" class="block text-gray-700">Email</label>
            <input
            v-model="form.email"
              type="email"
              id="email"
              class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>
  
          <div>
            <label for="password" class="block text-gray-700">Senha</label>
            <input
            v-model="form.password"
              type="password"
              id="password"
              class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>
  
          <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
          >
            Entrar
          </button>
        </form>
      </div>
      <button
      @click="getUser"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
          >
            GetUser
          </button>
    </section>
  </template>
  
<script setup lang="ts">
import actions from '~/actions';
import type { LoginForm } from '~/actions/auth/login.ts';

definePageMeta({
  middleware: 'guest'
})

const form = ref<LoginForm>({
  email: 'admin@admin',
  password: 'password'
})

const handleLogin = async () => {
  await actions.auth.login(form.value)
  navigateTo('/admin')
}

const getUser = async () => {
    console.log(useAuthStore().user)
}

</script>
  