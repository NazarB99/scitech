require('./bootstrap');

window.Vue = require('vue');

require('froala-editor/js/froala_editor.pkgd.min');
require('froala-editor/css/froala_editor.pkgd.min.css');
require('font-awesome/css/font-awesome.css');
require('froala-editor/css/froala_style.min.css');

const moment = require('moment');
require('moment/locale/ru');

// Import and use Vue Froala lib.
import VueFroala from 'vue-froala-wysiwyg';

Vue.use(VueFroala);

import VueRouter from 'vue-router'

Vue.use(VueRouter);

Vue.use(require('vue-moment'), {
    moment
});

import MainPage from './views/MainPage';
import TopHeader from './components/Header.vue';
import Logo from './components/Logo.vue';
import FooterSidebars from './components/FooterSidebars.vue';
import BFooter from './components/Footer.vue';
import Article from './views/Article.vue';
import Category from './views/Category.vue';
import AdminCategory from './components/admin/Category.vue';
import Message from './components/admin/comps/Message.vue';
import SelectCategory from './components/admin/comps/SelectCategory.vue';

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
            name: '',
            password: '',
            category: '',
            articleTitle:'',
            articleImage:'',
            articleText: '',
            articleCategory: null,
            successPosting: false,
            failed: false
        }
    },
    methods: {
        onSubmit() {
            axios.post(document.getElementById('route').value, {name: this.name, password: this.password})
                .then(res => {
                    window.location.href = '/main';
                })
        },
        submitCategory() {
            axios.post('/post/category', {category: this.category})
                .then(response => {
                    if (response.status === 200) {
                        this.successPosting = true;
                        setTimeout(() => {
                            this.successPosting = false;
                            this.category = '';
                        }, 4000)
                    } else {
                        this.failed = true;
                        setTimeout(() => {
                            this.failed = false;
                            this.category = '';
                        }, 4000)
                    }
                })
        },
        submitArticle() {
            if (this.articleText && this.articleCategory) {
                axios.post('/post/article', {article: this.articleText, category: this.articleCategory,title:this.articleTitle,image:this.articleImage})
                    .then(response => {
                        if (response.status >= 200 && response.status <= 299) {
                            this.successPosting = true;
                            setTimeout(() => {
                                this.successPosting = false;
                                this.category = '';
                                window.location.href = '/main';
                            }, 4000)
                        } else {
                            this.failed = true;
                            setTimeout(() => {
                                this.failed = false;
                                this.category = '';
                            }, 4000)
                        }
                        console.log(response);
                    })
            }else {
                this.failed = true;
                setTimeout(() => {
                    this.failed = false;
                    this.category = '';
                }, 8000)
            }
        },
        uploadFile(e){
            let data = new FormData();
            data.append('file', document.getElementById('image_article').files[0]);

            axios.post('/post/image',data).then((response) => {
                this.articleImage = response.data;
            });
        }

    },
    components: {
        TopHeader,
        Logo,
        MainPage,
        FooterSidebars,
        BFooter,
        AdminCategory,
        Message,
        SelectCategory
    },
    router
});
