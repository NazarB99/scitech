require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter);

import MainPage from './views/MainPage';
import TopHeader from './components/Header.vue';
import Logo from './components/Logo.vue';
import FooterSidebars from './components/FooterSidebars.vue';
import BFooter from './components/Footer.vue';
import Article from './views/Article.vue';
import Category from './views/Category.vue';

// Vue.component('single-article', require('./components/Article.vue'));
Vue.use(require('vue-moment'));

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'main',
            component: MainPage,
        },
        {
            path: '/article/:id',
            name: 'article',
            component: Article,
        },
        {
            path: '/category/:id',
            name: 'getArticleByCategory',
            component: Category,
        },
    ],
});

const app = new Vue({
    el: '#app',
    data() {
        return {
            articles: [],
            categories:[]
        }
    },
    created() {
        this.fetchLatestArticles();
        this.fetchCategories();
    },
    methods: {
        fetchLatestArticles() {
            axios.get('/articles')
                .then(({data}) => {
                    this.articles = data.data;
                    router.push({name: 'main', params: {articles: this.articles}})
                })
        },
        fetchCategories() {
            axios.get('/categories')
                .then(({data}) => {
                    this.categories = data.data;
                })
        },
    },
    components:{
        TopHeader,
        Logo,
        MainPage,
        FooterSidebars,
        BFooter,
    },
    router
});
