export interface UserForm {
    name: string;
    email: string;
    password: string;
    password_confirmation: string;
}

export async function create(form: UserForm) {
    const response = await usePost('/api/admin/users', { body: form });
    return response.data.value
}