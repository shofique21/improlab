//import { vue } from 'laravel-mix'
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


import Home from '../components/Home.vue'
import CreateClient from '../components/CreateClient.vue'

const routes = new VueRouter({ 
    mode: 'history',
    routes: [
        {
            name: 'home',
            path: '/',
            component: Home
        },
        {
            name: 'client',
            path: '/client',
            component: CreateClient
        }
       
    ]
});

export default routes;
