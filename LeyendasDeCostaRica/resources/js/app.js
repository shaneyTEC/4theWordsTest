require('./bootstrap');

import Vue from 'vue';

Vue.component('leyends-index', require('./component/leyendsIndex.vue').default);
const app = new Vue({
    el: '#app',
});