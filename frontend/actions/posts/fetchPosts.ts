

export async function fetchPosts() {
    const response = await useGet('/api/posts');
    return await response.data.value;

}