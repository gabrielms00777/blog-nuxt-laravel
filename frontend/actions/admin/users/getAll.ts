import type { User } from ".";


export async function getAll() {
    const response = await useGet('/api/admin/users');
    return await response.data.value;
}