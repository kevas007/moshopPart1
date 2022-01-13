require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
window.Vue = require('vue');
import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);
import routes from './router'
import vuetify from './vuetify';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const router = new VueRouter({
    routes:routes,
    mode:"history"
})

const app = new Vue({
    el: '#app',
    vuetify,
    // render: h => h(require('./components/Guide.vue').default),
    router,

});

