<template>
    <div>
        <div class="penci-mega-post penci-mega-post-1 penci-imgtype-landscape"
             v-if="index === 0"
             v-for="article in science">
            <div class="penci-mega-thumbnail">
                <a class="mega-cat-name" href="category/creative-news/3d-design/index.html">
                    3D Design
                </a>
            </div>
            <div class="penci-mega-thumbnail">
                <a class="mega-cat-name" href="category/creative-news/illustrations/index.html">
                    {{article.category.category}}
                </a>
                <a
                    class="penci-image-holder  penci-lazy"
                    :style="article.image">
                </a>
            </div>
            <div class="penci-mega-meta ">
                <h3 class="post-mega-title entry-title">
                    <a href="13-tips-making-vr-gaming-world/index.html">
                        {{article.title}}
                    </a>
                </h3>
                <p class="penci-mega-date"><i class="fa fa-clock-o"></i>
                    {{article.created_at.date | moment("MMMM D, YYYY") }}
                </p>
            </div>
        </div>
        <div class="penci-mega-post penci-mega-post-1 penci-imgtype-landscape"
             v-if="index === 1"
             v-for="article in tech">
            <div class="penci-mega-thumbnail">
                <a class="mega-cat-name" href="category/creative-news/3d-design/index.html">
                    3D Design
                </a>
            </div>
            <div class="penci-mega-thumbnail">
                <a class="mega-cat-name" href="category/creative-news/illustrations/index.html">
                    {{article.category.category}}
                </a>
                <a
                    class="penci-image-holder  penci-lazy"
                    :style="article.image">
                </a>
            </div>
            <div class="penci-mega-meta ">
                <h3 class="post-mega-title entry-title">
                    <a href="13-tips-making-vr-gaming-world/index.html">
                        {{article.title}}
                    </a>
                </h3>
                <p class="penci-mega-date"><i class="fa fa-clock-o"></i>
                    {{article.created_at.date | moment("MMMM D, YYYY") }}
                </p>
            </div>
        </div>
        <div class="penci-mega-post penci-mega-post-1 penci-imgtype-landscape"
             v-if="index === 2"
             v-for="article in fun">
            <div class="penci-mega-thumbnail">
                <a class="mega-cat-name" href="category/creative-news/3d-design/index.html">
                    3D Design
                </a>
            </div>
            <div class="penci-mega-thumbnail">
                <a class="mega-cat-name" href="category/creative-news/illustrations/index.html">
                    {{article.category.category}}
                </a><a
                    class="penci-image-holder  penci-lazy"
                    :style="article.image">
            </a>
            </div>
            <div class="penci-mega-meta ">
                <h3 class="post-mega-title entry-title">
                    <a href="13-tips-making-vr-gaming-world/index.html">
                        {{article.title}}
                    </a>
                </h3>
                <p class="penci-mega-date"><i class="fa fa-clock-o"></i>
                    {{article.created_at.date | moment("MMMM D, YYYY") }}
                </p>
            </div>
        </div>
        <div class="penci-mega-post penci-mega-post-1 penci-imgtype-landscape"
             v-if="index === 3"
             v-for="article in health">
            <div class="penci-mega-thumbnail">
                <a class="mega-cat-name" href="category/creative-news/3d-design/index.html">
                    3D Design
                </a>
            </div>
            <div class="penci-mega-thumbnail">
                <a class="mega-cat-name" href="category/creative-news/illustrations/index.html">
                    {{article.category.category}}
                </a><a
                    class="penci-image-holder  penci-lazy"
                    :style="article.image">
            </a>
            </div>
            <div class="penci-mega-meta ">
                <h3 class="post-mega-title entry-title">
                    <a href="13-tips-making-vr-gaming-world/index.html">
                        {{article.title}}
                    </a>
                </h3>
                <p class="penci-mega-date"><i class="fa fa-clock-o"></i>
                    {{article.created_at.date | moment("MMMM D, YYYY") }}
                </p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:['articles','index'],
        computed:{
            science(){
                let filteredArticles = this.articles.filter(article => article.category.id === 1);
                return filteredArticles.slice(1,6)
            },
            tech(){
                let filteredArticles = this.articles.filter(article => article.category.id === 2);
                return filteredArticles.slice(1,6)
            },
            fun(){
                let filteredArticles = this.articles.filter(article => article.category.id === 3);
                return filteredArticles.slice(1,6)
            },
            health(){
                let filteredArticles = this.articles.filter(article => article.category.id === 4);
                return filteredArticles.slice(1,6)
            }

        }
    }
</script>