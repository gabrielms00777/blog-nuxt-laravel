import { usePost } from "~/composables/useApi";
import actions from "..";

export interface LoginForm {
    email: string
    password: string
}
  
export async function login(form: LoginForm) {
  try {
    return await usePost("/login", { body: form });
    // const response = await usePost("/login", { body: form });
    // console.log(response.data.value);
    // return response.data.value;
    // await actions.auth.fetchUser();
  } catch (error: any) {
    console.log(error);
    throw error; // Propaga o erro para tratamento na interface
  }
}
