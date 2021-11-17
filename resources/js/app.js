/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('consulta', require('./components/ConsultaComponent.vue').default);

Vue.component('cliente', require('./components/ClienteComponent.vue').default);


Vue.component('listpaciente', require('./components/ListpacienteComponent.vue').default);
Vue.component('paciente', require('./components/PacienteComponent.vue').default);
Vue.component('usuario', require('./components/UsuarioComponent.vue').default);
Vue.component('cita', require('./components/CitaComponent.vue').default);
Vue.component('citadetalle', require('./components/CitadetalleComponent.vue').default);
Vue.component('doctor', require('./components/DoctorComponent.vue').default);


/*
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


