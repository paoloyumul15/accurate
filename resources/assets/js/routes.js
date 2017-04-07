import VueRouter from 'vue-router';
import Dashboard from './views/Dashboard.vue';
import Settings from './views/Settings.vue';
import NotFound from './views/NotFound.vue';

let routes = [
    {
        path: '/',
        component: Dashboard,
    },
    {
        path: '/settings',
        component: Settings,
    },
    {
        path: '*',
        component: NotFound,
    }
];

export default new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: 'is-active',
});
