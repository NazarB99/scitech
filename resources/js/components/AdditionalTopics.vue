<template>
    <div class="vc_row wpb_row vc_row_28271398 vc_row-fluid penci-pb-row vc_custom_1509693306480 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12 penci-col-12">
            <div class="vc_column-inner wpb_column vc_column_container vc_col-sm-12 penci-col-12 ">
                <div class="wpb_wrapper">
                    <div class="penci-container-vc penci-container-fluid penci-container-width-1400 penci_vc_sticky_sidebar">
                        <div class="penci-container__content row">
                            <div class="penci-content-main penci-col-6 "
                                 role="complementary">
                                <div class="theiaStickySidebar">
                                    <div id="penci_block_8__92338740"
                                         class="penci-block-vc penci-block_8 penci__general-meta style-title-7 style-title-center penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-2"
                                         data-current="1"
                                         data-blockUid="penci_block_8__92338740">
                                        <div class="penci-block-heading">
                                            <h3 class="penci-block__title">
                                                <a href="category/creative-news/uiux/index.html"
                                                   title="UI/UX Update">UI/UX Update</a></h3></div>
                                        <div id="penci_block_8__92338740block_content"
                                             class="penci-block_content">
                                            <div class="penci-block_content__items penci-block-items__1">
                                                <article class="penci-post-item__1 hentry penci-post-item"
                                                         v-for="article in uiux">
                                                    <div class="penci_post_thumb">
                                                        <a class="penci-image-holder  penci-lazy penci-image_has_icon"
                                                           :style="article.image"></a>
                                                    </div>
                                                    <div class="penci_post_content">
                                                        <h3 class="penci__post-title entry-title">
                                                            <router-link :to="{name:'article',params:{id:article.id}}">
                                                                {{article.title.split(" ").splice(0,5).join(" ") +
                                                                "..."}}
                                                            </router-link>
                                                        </h3>
                                                        <div class="penci-schema-markup">
                                                                        <span class="author vcard">
                                                                            <a class="url fn n"
                                                                               href="author/admin/index.html">Penci Design
                                                                            </a>
                                                                        </span>
                                                            <time class="entry-date published"
                                                                  datetime="2017-11-03T03:11:53+00:00">
                                                                {{article.created_at.date | moment("MMMM D, YYYY")}}
                                                            </time>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="penci-loader-effect penci-loading-animation-9">
                                                <div class="penci-loading-circle">
                                                    <div class="penci-loading-circle1 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle2 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle3 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle4 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle5 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle6 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle7 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle8 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle9 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle10 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle11 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle12 penci-loading-circle-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="penci-content-main penci-col-6 "
                                 role="complementary">
                                <div class="theiaStickySidebar">
                                    <div id="penci_block_8__41716964"
                                         class="penci-block-vc penci-block_8 penci__general-meta style-title-7 style-title-center penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-2"
                                         data-current="1"
                                         data-blockUid="penci_block_8__41716964">
                                        <div class="penci-block-heading">
                                            <h3 class="penci-block__title">
                                                <a href="category/creative-news/web-design/index.html"
                                                   title="Web Design">Web Design</a></h3></div>
                                        <div id="penci_block_8__41716964block_content"
                                             class="penci-block_content">
                                            <div class="penci-block_content__items penci-block-items__1">
                                                <article class="penci-post-item__1 hentry penci-post-item"
                                                         v-for="article in webdesign">
                                                    <div class="penci_post_thumb">
                                                        <a class="penci-image-holder  penci-lazy penci-image_has_icon" :style="article.image"></a>
                                                    </div>
                                                    <div class="penci_post_content">
                                                        <h3 class="penci__post-title entry-title">
                                                            <router-link :to="{name:'article',params:{id:article.id}}">
                                                                {{article.title.split(" ").splice(0,5).join(" ") +
                                                                "..."}}
                                                            </router-link>
                                                        </h3>
                                                        <div class="penci-schema-markup">
                                                            <span class="author vcard">
                                                                <a class="url fn n"
                                                                    href="author/admin/index.html">Penci Design
                                                                </a>
                                                            </span>
                                                            <time class="entry-date published"
                                                                  datetime="2017-11-03T03:11:47+00:00">
                                                                {{article.created_at.date | moment("MMMM D, YYYY")}}
                                                            </time>
                                                            <time class="updated">
                                                                December 1, 2017
                                                            </time>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="penci-loader-effect penci-loading-animation-9">
                                                <div class="penci-loading-circle">
                                                    <div class="penci-loading-circle1 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle2 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle3 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle4 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle5 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle6 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle7 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle8 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle9 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle10 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle11 penci-loading-circle-inner"></div>
                                                    <div class="penci-loading-circle12 penci-loading-circle-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_empty_space"
                         style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:['articles'],
        computed:{
            uiux(){
                let filteredArticles = this.articles.filter(article => article.category.id === 3);
                return filteredArticles.slice(1,7)
            },
            webdesign(){
                let filteredArticles = this.articles.filter(article => article.category.id === 4);
                return filteredArticles.slice(1,7)
            },
        }
    }
</script>