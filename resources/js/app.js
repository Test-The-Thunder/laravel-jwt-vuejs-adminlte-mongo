
require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'
Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
let routes = [
    { path: '/home', component: require('./components/ExampleComponent.vue').default },
    { path: '/demo', component: require('./components/Demo.vue').default },
  ];


// register Route
const router = new VueRouter({
    mode:"history", // short for `routes: routes`
    routes
  })

const app = new Vue({
    el: '#app',
    router
});