import Vue from 'vue';
import App from './App';

require('./bootstrap');

Vue.component('wheels', require('./components/Wheels.vue'));
// Vue.component('projects-client-side', require('./components/ProjectsClientSide.vue'));

const app = new Vue({
    el: '#app',
    components: { App },
    template: '<App/>',
});
