<template>
  <section>
    <h1 class="text-2xl font-bold text-blue-600 mb-6">Criar Usuário</h1>

    <form class="bg-white p-6 shadow-lg rounded-lg space-y-4" @submit.prevent="createUser">
      <div>
        <label for="name" class="block text-gray-700 font-medium">Nome do Usuário</label>
        <input id="name" v-model="form.name" type="text" placeholder="Digite o nome do usuário"
          class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" />
        <p v-if="errors.name" class="text-red-600 text-sm mt-1">{{ errors.name[0] }}</p>
      </div>

      <div>
        <label for="email" class="block text-gray-700 font-medium">E-mail</label>
        <input id="email" v-model="form.email" type="email" placeholder="Digite o e-mail do usuário"
          class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" />
        <p v-if="errors.email" class="text-red-600 text-sm mt-1">{{ errors.email[0] }}</p>
      </div>

      <div>
        <label for="password" class="block text-gray-700 font-medium">Senha</label>
        <input id="password" v-model="form.password" type="password" placeholder="Digite uma senha"
          class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" />
        <p v-if="errors.password" class="text-red-600 text-sm mt-1">{{ errors.password[0] }}</p>
      </div>

      <div>
        <label for="password_confirmation" class="block text-gray-700 font-medium">Confirmação de Senha</label>
        <input id="password_confirmation" v-model="form.password_confirmation" type="password"
          placeholder="Confirme a senha"
          class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" />
        <p v-if="errors.password_confirmation" class="text-red-600 text-sm mt-1">
          {{ errors.password_confirmation }}
        </p>
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
        Criar Usuário
      </button>

    </form>
  </section>
</template>

<script setup>
import { ref } from "vue";
import { UserService } from "~/services/admin/UserService";

definePageMeta({
  layout: "admin",
  middleware: "auth",
});

const form = ref({

  name: "Gabriel",
  email: "gabriel@email",
  password: "admin",
  password_confirmation: "admin",
});

const errors = ref({});

const createUser = async () => {
  errors.value = {}; 

  try {
    const response = await UserService.create(form.value);

    if (response.error.value) {
      errors.value = response.error.value.data.errors;
      return
    } 

    navigateTo("/admin/usuarios");
    
  } catch (error) {
    alert("Erro ao criar o usuário. Tente novamente.");
    console.error(error);
  }
};

</script>
