
const routes = [
    {
        key : 1,
        path: '/',
        component: () => import('../pages/home/Home.vue'),
        name: 'Tableau de bord',
        icon : 'tachometer-alt',
        meta : {layout : 'app'}
    },
    {
        key : 2,
        path: '/eglise',
        component: () => import('../pages/Dashboard.vue'),
        name: 'Eglise',
        icon: 'church',
        meta : {layout : 'admin'}
    },
    {
        key : 3,
        path: '/fideles',
        component: () => import('../pages/Dashboard.vue'),
        name: 'Fidèles',
        icon: 'user-injured',
        meta : {layout : 'admin'}
    },
    {
        key : 4,
        path: '/nouvelle_ame',
        component: () => import('../pages/Dashboard.vue'),
        name: 'Nouvelles Ames',
        icon : 'restroom',
        meta : {layout : 'admin'}
    },
    {
        key : 5,
        path: '/nouvelle_pertinent',
        component: () => import('../pages/Dashboard.vue'),
        name: 'Nouvelles pertinentes',
        icon : 'rss-square',
        meta : {layout : 'admin'}
    },
    {
        key : 6,
        path: '/absence',
        component: () => import('../pages/Dashboard.vue'),
        name: 'Absence au culte',
        icon : 'rss-square',
        meta : {layout : 'admin'}
    },
    {
        key : 7,
        path: '/veuves',
        component: () => import('../pages/Dashboard.vue'),
        name: 'Veuves',
        icon : 'rss-square',
        meta : {layout : 'admin'}
    },
    {
        key : 8,
        path: '/orphelins',
        component: () => import('../pages/Dashboard.vue'),
        name: 'Orphelins',
        icon : 'rss-square',
        meta : {layout : 'admin'}
    },
    {
        key : 9,
        path: '/settings',
        component: () => import('../pages/Dashboard.vue'),
        name: 'Paramètres',
        icon : 'rss-square',
        meta : {layout : 'admin'}
    }
];

export default routes;