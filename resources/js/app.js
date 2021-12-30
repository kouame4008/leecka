/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue';
import Vuesax from 'vuesax';
import 'vuesax/dist/vuesax.css'
import 'material-icons/iconfont/material-icons.css';
import App from './App.vue';
import Antd, {Space} from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';

import VueRouter from 'vue-router';
import router from './router/index';

import { library } from '@fortawesome/fontawesome-svg-core'
import { faChurch, faRestroom, faRssSquare, faTachometerAlt, faUserInjured} from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faTachometerAlt, faChurch, faUserInjured, faRestroom, faRssSquare)

Vue.config.productionTip = false;


Vue.use(VueRouter);
Vue.use(Vuesax);
Vue.use(Antd);
Vue.use (Space);

Vue.component('admin-layout', require('./admin/layouts/admin-layout.vue').default);
Vue.component('app-layout', require('./layouts/app-layout.vue').default);
Vue.component('page-layout', require('./layouts/page-layout.vue').default);
Vue.component('font-awesome-icon', FontAwesomeIcon)




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    router,
    components : {App}
});
