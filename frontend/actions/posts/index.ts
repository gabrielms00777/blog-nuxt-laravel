import { fetchPost } from "./fetchPost";
import { fetchPosts } from "./fetchPosts";

export interface Post {
    id: number;
    title: string;
    description: string;
    slug: string;
    image: string;
    author: string;
    created_at: string;
}

export default {
    fetchPosts,
    fetchPost   
}