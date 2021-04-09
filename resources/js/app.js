
require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'
import { Form, HasError, AlertError } from "vform";
import VueProgressBar from "vue-progressbar";
import Swal from "sweetalert2";
import Multiselect from 'vue-multiselect'
import moment from 'moment'
import VueExcelXlsx from "vue-excel-xlsx";

Vue.use(VueRouter)
Vue.use(VueExcelXlsx);
window.Form = Form;
window.Swal = Swal;
window.Fire = new Vue();
window.Multiselect = Multiselect;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

//Vue paginnation
Vue.component('pagination', require('laravel-vue-pagination'));

//for progessbar
Vue.use(VueProgressBar, {
    color: "rgb(0, 255, 140)",
    failedColor: "red",
    thickness: "7px",
});
// /Global function for currency formate
Vue.prototype.currencyFormate = (data) => {
    return new Intl.NumberFormat('en-IN', { currency: 'IND' }).format(data)
}
// Global Function for date formate
Vue.prototype.customDateFormatter = (date) => {
    let tempDate = moment(date).format("DD-MM-YYYY hh:mm A");
    if(tempDate != 'Invalid date'){ return tempDate } else { return 'NULL' }
}


Vue.prototype.$PaginationCounterLimit = 2;
Vue.prototype.$PaginationLimit = '10';
Vue.prototype.$PaginationOptions = ['1','10','50','100','500','1000'];

//sweet alert
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    onOpen: toast => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    }
});

window.Toast = Toast;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component(
    "ToastTemplet",
    require("./components/Widgets/toast.vue").default
);


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
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
 
 