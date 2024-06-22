import { createRouter, createWebHistory } from 'vue-router';
import Register from './components/Register.vue';
import Login from './components/Login.vue';


const routes = [
    {
        path: '/register', component: Register
    },
    {
        path: '/login', component: Login
    }
];

export default createRouter({
    history: createWebHistory(),
    routes,
})
