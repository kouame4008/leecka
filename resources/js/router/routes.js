
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
        path: '/compte',
        component: () => import('../pages/Compte.vue'),
        name: 'Compte',
        icon : 'tachometer-alt',
        meta : {layout : 'page'}
    },
];

export default routes;