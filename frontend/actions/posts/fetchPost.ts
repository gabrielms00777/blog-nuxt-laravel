import type { Post } from ".";


export async function fetchPost(slug:string) {
    const response = await useGet('/api/posts/'+slug);
    // console.log(response.data.value);
    
    return await response.data.value as Post;

}