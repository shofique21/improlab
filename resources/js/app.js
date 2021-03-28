//import Vue from 'vue';
import routes from './router/index'
require('./bootstrap');
window.Vue = require('vue').default;

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('create-client', require('./components/CreateClient.vue').default);
Vue.component('customer-view', require('./components/CustomerView.vue').default);

const app = new Vue({
    el: '#app',
    router: routes

});

const router = new VueRouter({ mode: 'history'});
