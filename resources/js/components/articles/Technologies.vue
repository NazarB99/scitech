<template>
    <div id="penci_grid_2__5897368"
         class="penci-block-vc penci-block_grid penci-grid_2 style-title-7 style-title-left penci-link-filter-hidden penci-vc-column-2"
         data-current="1"
         data-blockUid="penci_grid_2__5897368">
        <div class="penci-block-heading">
            <h3 class="penci-block__title">
                <a href="#">Технологии</a>
            </h3>
        </div>
        <div id="penci_grid_2__5897368block_content"
             class="penci-block_content">
            <div class="penci-block_content__items penci-block-items__1">
                <div class="penci-block-wrapper-item penci-wrapper-hasitems">
                    <article class="grid2_first_item hentry penci-post-item">
                        <a class="penci-image-holder  penci-lazy penci-gradient penci-image_has_icon"
                           href="10-incredible-online-art-schools/index.html"
                           title="10 incredible online art schools"> <span
                                class="screen-reader-text">10 incredible online art schools</span></a>
                        <div class="penci_post_content">
                            <h3 class="penci__post-title entry-title">
                                <router-link
                                   :to="{name:'article',params:{id:mainIllustration.id}}">
                                    {{mainIllustration.title}}
                                </router-link>
                            </h3>
                            <div class="penci-schema-markup">
                                <span class="author vcard">
                                    <a class="url fn n"
                                       href="author/admin/index.html">Penci Design</a>
                                </span>
                            </div>
                            <div class="penci_post-meta">
                                <span class="entry-meta-item penci-posted-on">
                                    <i class="fa fa-clock-o"></i>
                                    <time
                                        class="entry-date published">
                                        {{mainIllustration.created_at | moment("MMMM D, YYYY")}}
                                    </time>
                                    <time class="updated">December 1, 2017</time></span>
                                <span class="entry-meta-item penci-comment-count">
                                    <a class="penci_pmeta-link"
                                    href="#">
                                        <i class="la la-comments"></i>0</a>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="grid2_items">
                        <article class="penci-post-item hentry" v-for="article in illustrations">
                            <a class="penci-image-holder  penci-lazy penci-gradient" :style="article.image">
                                <span class="screen-reader-text">Movie fans will love these illustrated movie maps</span></a>
                            <div class="penci_post_content">
                                <h3 class="penci__post-title entry-title">
                                    <router-link :to="{name:'article',params:{id:article.id}}">
                                        {{article.title}}
                                    </router-link>
                                </h3>
                                <div class="penci-schema-markup">

                                    <span class="author vcard">
                                        <a class="url fn n" href="author/admin/index.html">Penci Design</a>
                                    </span>
                                    <time class="entry-date published"
                                          datetime="2017-11-03T03:11:31+00:00">
                                        {{article.created_at | moment("MMMM D, YYYY")}}
                                    </time>
                                    <time class="updated"
                                          datetime="2017-12-01T07:36:13+00:00">
                                        December 1, 2017
                                    </time>
                                </div>
                                <div class="penci_post-meta">
                                    <span class="entry-meta-item penci-posted-on"><i
                                            class="fa fa-clock-o"></i><time
                                            class="entry-date published"
                                            datetime="2017-11-03T03:11:31+00:00">{{article.created_at | moment("MMMM D, YYYY")}}</time><time
                                            class="updated"
                                            datetime="2017-12-01T07:36:13+00:00">December 1, 2017</time></span>
                                    <span
                                        class="entry-meta-item penci-comment-count"><a
                                        class="penci_pmeta-link"
                                        href="movie-fans-will-love-illustrated-movie-maps/index.html#respond"><i
                                        class="la la-comments"></i>0</a>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <animation></animation>
        </div>
    </div>
</template>
<script>
    import Animation from './Animation'

    export default {
        props:['articles'],
        components: {
            Animation
        },
        computed:{
            mainIllustration(){
                let filteredArticles = this.articles.filter(article => article.category.id === 2);
                return filteredArticles[0];
            },
            illustrations(){
                let filteredArticles = this.articles.filter(article => article.category.id === 2);
                return filteredArticles.slice(1,4)
            }
        }
    }
</script>