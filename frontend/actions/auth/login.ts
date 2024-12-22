import { usePost } from "~/composables/useApi";

export interface LoginForm {
    email: string
    password: string
}
  
  export async function login(form: LoginForm) {
      await usePost("/login", { body: form });
  }