/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import AppComponent from "./components/AppComponent";
import router from './router'; //追加
import VueYouTubeEmbed from 'vue-youtube-embed';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import '@mdi/font/css/materialdesignicons.css'; // Ensure you are using css-loader
Vue.use(Vuetify);
Vue.use(VueYouTubeEmbed);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar-component', require('./components/parts/NavBarComponent.vue').default);
Vue.component('heading-component', require('./components/parts/HeadingComponent.vue').default);
Vue.component('footer-component', require('./components/parts/FooterComponent.vue').default);
Vue.component('replybooking-component', require('./components/emails/ReplyBookingComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        'app-component': AppComponent
    },
    router, //追加
    vuetify: new Vuetify({
        icons: {
            iconfont: 'mdi', // default - only for display purposes
          },
        theme: {
            themes:{
                light:{
                primary: '#323EDD',
                success: '#FFDF34',
                info: '#25DD76',
                error: '#DE04DD',
                background: '#f5f5f5'
                }
            }
        },
    }),
});
