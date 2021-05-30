require('./bootstrap');

window.Vue = require('vue').default;

import router from './router'
import Vuetify from '../plugins/vuetify'
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('main-component', require('./components/main.vue').default);

const app = new Vue({
    el: '#app',
    router,
    vuetify: Vuetify
});
