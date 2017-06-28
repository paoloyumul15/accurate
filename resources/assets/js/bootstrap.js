import _ from 'lodash';
import $ from 'jquery';
import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';

window._ = _;
window.$ = $;

window.Vue = Vue;
Vue.use(VueRouter);

window.axios = axios;
window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Accurate.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

Vue.prototype.$http = window.axios;


// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
