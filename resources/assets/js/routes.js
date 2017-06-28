import VueRouter from 'vue-router';
import Dashboard from './views/Dashboard.vue';
import ChartOfAccount from './views/ChartOfAccount.vue';
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
        path: '/chart-of-accounts',
        component: ChartOfAccount,
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
