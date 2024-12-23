<template>
    <section>
        <h1 class="text-2xl font-bold text-blue-600 mb-6">Editar Usuário</h1>

        <form class="bg-white p-6 shadow-lg rounded-lg space-y-4" @submit.prevent="editUser">
            <div>
                <label for="name" class="block text-gray-700 font-medium">Nome do Usuário</label>
                <input id="name" v-model="form.name" type="text" placeholder="Digite o nome do usuário"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" />
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-medium">E-mail</label>
                <input id="email" v-model="form.email" type="email" placeholder="Digite o e-mail do usuário"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" />
            </div>

            <div>
  <label for="is_active" class="block text-gray-700 font-medium">Status</label>
  <select
    id="is_active"
    v-model="form.is_active"
    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
  >
    <option :value="true">Ativo</option>
    <option :value="false">Inativo</option>
  </select>
</div>



            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                Criar Usuário
            </button>
        </form>
    </section>
</template>

<script setup>
import { UserService } from '~/services/admin/UserService';

definePageMeta({
    layout: 'admin',
    middleware: 'auth',
});

const route = useRoute();
const userId = route.params.id;

const form = ref({
    id: userId,
    name: '',
    email: '',
    is_active: true
});

const response = await UserService.getById(userId);
console.log(response);
form.value.name = response.data.name;
form.value.email = response.data.email;
form.value.is_active = response.data.is_active;


const editUser = async () => {
    // const response = await actions.admin.users.create(form.value);
    const response = await UserService.edit(form.value, form.value.id);
    console.log(response);
    if (response) {
        navigateTo('/admin/usuarios')
    }
}
</script>