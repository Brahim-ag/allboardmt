require('./bootstrap');

// Import modules...
import {
    createApp,
    h,

}
from 'vue';
import {
    createWebHistory,
    createRouter
} from "vue-router";
import {
    App as InertiaApp,
    plugin as InertiaPlugin
} from '@inertiajs/inertia-vue3';
import {
    InertiaProgress
} from '@inertiajs/progress';

const el = document.getElementById('app');
const router = createRouter({
    history: createWebHistory(),
    routes: [{
        path: '/employe/edit/:id',
       
    }],
    linkActiveClass: 'active'
});
createApp({
        render: () =>
            h(InertiaApp, {
                initialPage: JSON.parse(el.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            }),
        })
    .mixin({
        methods: {
            route
        }
    })
    .use(InertiaPlugin)
    .use(router)
    .mount(el);

InertiaProgress.init({
    color: '#4B5563'
});
