
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('top-header', require('./components/Header.vue'));
Vue.component('logo', require('./components/Logo.vue'));
Vue.component('main-content', require('./components/MainContent.vue'));
Vue.component('additional-topics', require('./components/AdditionalTopics.vue'));
Vue.use(require('vue-moment'));

const app = new Vue({
    el: '#app',
    data() {
        return {
            articles: []
        }
    },
    created() {
        this.fetchLatestArticles();
    },
    methods: {
        fetchLatestArticles() {
            axios.get('/articles')
                .then(({data}) => {
                    this.articles = data.data;
                    console.log(this.articles)
                })
        },
    },
});
