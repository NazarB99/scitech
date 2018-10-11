<template>
    <div class="widget-area widget-area-1 "
         role="complementary">
        <div class="theiaStickySidebar">
            <div id="penci_block_6__24888952"
                 class="penci-block-vc penci-block_6 penci__general-meta style-title-7 style-title-left penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-1"
                 data-current="1"
                 data-blockUid="penci_block_6__24888952">
                <div class="penci-block-heading">
                    <h3 class="penci-block__title">
                        <span>Недавние посты</span>
                    </h3>
                </div>
                <div id="penci_block_6__24888952block_content"
                     class="penci-block_content">
                    <div class="penci-block_content__items penci-block-items__1">
                        <article class="hentry penci-post-item"
                                 v-for="article in latestArticles">
                            <div class="penci_media_object ">
                                <a class="penci-image-holder  penci-lazy penci_mobj__img penci-image_has_icon"
                                   :style="article.image"></a>
                                <div class="penci_post_content penci_mobj__body">
                                    <h3 class="penci__post-title entry-title">
                                        <router-link :to="{name:'article', params:{id: article.id}}"
                                           title=" 10 incredible online art schools ">
                                            {{article.title}}
                                        </router-link>
                                    </h3>
                                    <div class="penci-schema-markup">

                                                <span class="author vcard">
                                                    <a class="url fn n"
                                                       href="author/admin/index.html">Penci Design</a>
                                                </span>
                                        <time class="entry-date published"
                                              datetime="2017-11-03T03:12:23+00:00">
                                            November 3, 2017
                                        </time>
                                        <time class="updated"
                                              datetime="2017-12-01T07:45:01+00:00">
                                            December 1, 2017
                                        </time>
                                    </div>
                                    <div class="penci_post-meta">

                                                <span class="entry-meta-item penci-posted-on">
                                                    <i class="fa fa-clock-o"></i>
                                                    <time class="entry-date published">
                                                        {{article.created_at.date | moment("MMMM D, YYYY")}}
                                                    </time>
                                                    <time class="updated"
                                                          datetime="2017-12-01T07:45:01+00:00">December 1, 2017</time>
                                                </span>
                                        <span class="entry-meta-item penci-comment-count">
                                                <a class="penci_pmeta-link"
                                                   href="10-incredible-online-art-schools/index.html#respond">
                                                    <i class="la la-comments"></i>0
                                                </a>
                                                    </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <animation></animation>
                </div>
            </div>
            <div class="vc_empty_space"
                 style="height: 40px">
                <span class="vc_empty_space_inner"></span>
            </div>
            <div id="penci-ad_box--33124"
                 class="penci-block-vc penci-ad-box penci-list-banner style-title-1 style-title-left penci-link-filter-hidden penci-empty-block-title penci-vc-column-1">
                <div class="penci-block-heading">
                </div>
                <div class="penci-block_content">
                    <div class="penci-promo-item penci-banner-has-text">
                        <a class="penci-promo-link"
                           href="#"
                           target="_self"></a>
                        <img width="600"
                             height="500"
                             src="/img/banner.jpg"
                             class="penci-image-holder penci-ad-image penci-lazy attachment-full"
                             alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Animation from './Animation.vue';
    export default {
        props:['articles'],
        components:{
            Animation
        },
        computed:{
            latestArticles(){
                return this.articles.slice(1,7).filter(article => article.category.id);
            }
        }
    }
</script>