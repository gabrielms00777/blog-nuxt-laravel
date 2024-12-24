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
          <p v-if="errors.email" class="text-red-500 text-sm mt-1">{{ errors.email[0] }}</p>
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

const errors = ref({});

const handleLogin = async () => {
  errors.value = {};

  try {
    const response = await actions.auth.login(form.value);
    console.log(response);

    if (response.error.value) {
      errors.value = response.error.value.data.errors;
      return
    } 

    await actions.auth.fetchUser();
    
    navigateTo('/admin');
  } catch (error: any) {
    alert("Erro ao realizar login. Tente novamente.");
    console.error(error);
  }
}

const getUser = async () => {
    console.log(useAuthStore().user)
}

</script>
  