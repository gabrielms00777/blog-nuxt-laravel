
export interface UserForm {
    id: number|null;
    name: string;
    email: string;
    is_active: boolean;
    password: string|null;
    password_confirmation: string|null;
}

export const UserService = {
    async getAll() {
        const response = await useGet("/api/admin/users");
        return response.data.value;
    },

    async getById(id: number) {
        const response = await useGet("/api/admin/users/" + id);
        console.log(response.data.value)
        return response.data.value;
    },

    async create(form: UserForm){
        return await usePost("/api/admin/users", {body: form});
    },

    async edit(form: UserForm){        
        return await usePut("/api/admin/users/" + form.id, {body: form});
    },

    async delete(id: number){
        return await useDelete("/api/admin/users/" + id);
    }
}