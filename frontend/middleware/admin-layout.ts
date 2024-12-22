export default defineNuxtRouteMiddleware((to) => {
    if (to.path.startsWith('/admin')) {
      useState('layout').value = 'admin';
    }
  });
  