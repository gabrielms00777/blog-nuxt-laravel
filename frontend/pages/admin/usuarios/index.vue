<template>
  <section class="min-h-screen bg-gray-100 p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Gerenciar Usuários</h1>

    <!-- Botão de Adicionar Usuário -->
    <div class="mb-6">
      <NuxtLink to="/admin/usuarios/novo"
        class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
        Adicionar Novo Usuário
      </NuxtLink>
    </div>

    <!-- Tabela de Usuários -->
    <div class="bg-white rounded-lg shadow overflow-x-auto">
      <table class="w-full text-left table-auto">
        <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
          <tr>
            <th class="px-6 py-3">Nome</th>
            <th class="px-6 py-3">E-mail</th>
            <th class="px-6 py-3">Status</th>
            <th class="px-6 py-3">Ações</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <template v-if="users.length > 0">
            <tr v-for="user in users" class="border-t">
              <td class="px-6 py-3">{{ user.name }}</td>
              <td class="px-6 py-3">{{ user.email }}</td>
              <td class="px-6 py-3">{{ user.is_active ? 'Ativo' : 'Inativo' }}</td>
              <td class="px-6 py-3 space-x-2">
                <NuxtLink :to="{ name: 'admin-usuarios-edit-id', params: { id: user.id } }"
                  class="text-blue-600 hover:underline">
                  Editar
                </NuxtLink>
                <button class="text-red-600 hover:underline" @click="deleteUser(user)">
                  Excluir
                </button>
              </td>
            </tr>
          </template>
          <template v-else>
            <tr>
              <td colspan="4" class="px-6 py-3 text-center">Nenhum usuário encontrado.</td>
            </tr>
          </template>
        </tbody>
      </table>
    </div>
  </section>
</template>

<script setup>
import { UserService } from '~/services/admin/UserService';

definePageMeta({
  layout: 'admin',
  middleware: 'auth',
});

const users = ref([]);

const fetchUsers = async () => {
  const response = await UserService.getAll();
  users.value = response.data;
}

onMounted(() => {
  fetchUsers();
})


const deleteUser = async (user) => {
  const confirmation = confirm(`Deseja realmente deletar o usuário ${user.name}?`);
  if (!confirmation) return;
  const response = await UserService.delete(user.id);
  console.log(response);
  console.log(users);
  users.value = users.value.filter((u) => u.id !== user.id);
}



</script>