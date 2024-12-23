import { create } from "./create";
import { getAll } from "./getAll";

export interface User {
    id: number;
    name: string;
    email: string;
    created_at: string;
    updated_at: string;
}

export default {
    getAll,
    create
}