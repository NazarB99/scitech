<template>
    <div class="archive">
        <div class="category">
            <div class="category-creative-news">
                <div class="category-2">
                    <div class="blog-boxed">
                        <div class="two-sidebar">
                            <div id="content" class="site-content" style="transform: none;">
                                <div id="primary" class="content-area penci-archive" style="transform: none;">
                                    <main id="main" class="site-main" style="transform: none;">
                                        <div class="penci-container" style="transform: none;">
                                            <div class="penci-container__content" style="transform: none;">
                                                <div class="penci-wide-content penci-content-novc penci-sticky-content"
                                                     style="position: relative; overflow: visible; margin-bottom: 20px; box-sizing: border-box; min-height: 1px;">
                                                    <div class="theiaStickySidebar"
                                                         style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none;">
                                                        <div id="penci-archive__content"
                                                             class="penci-archive__content penci-layout-blog-boxed">
                                                            <div class="penci_breadcrumbs ">
                                                                <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                                                    <li itemprop="itemListElement" itemscope=""
                                                                        itemtype="http://schema.org/ListItem"><a class="home"
                                                                                                                 href="http://pennews.pencidesign.com/pennews-creative"
                                                                                                                 itemprop="item"><span
                                                                            itemprop="name">Home</span></a>
                                                                        <meta itemprop="position" content="1">
                                                                    </li>
                                                                    <li itemprop="itemListElement" itemscope=""
                                                                        itemtype="http://schema.org/ListItem"><i
                                                                            class="fa fa-angle-right"></i><a href="index.html"
                                                                                                             itemprop="item"><span
                                                                            itemprop="name"></span></a>
                                                                        <meta itemprop="position" content="2">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <header class="entry-header penci-entry-header penci-archive-entry-header">
                                                                <h1 class="page-title penci-page-title penci-title-">
                                                                    Категория : {{selectedCategory[0].category}}
                                                                </h1>
                                                            </header>
                                                            <div class="penci-archive__list_posts">
                                                                <article v-for="article in articlesCategory"
                                                                         class="penci-imgtype-landscape post-691 post type-post status-publish format-standard has-post-thumbnail hentry category-illustrations tag-creative tag-news tag-pennews tag-wordpress penci-post-item">
                                                                    <div class="article_content penci_media_object">
                                                                        <div class="entry-media penci_mobj__img">
                                                                            <a class="penci-link-post penci-image-holder penci-lazy"
                                                                               href="#"
                                                                               :style="article.image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="entry-text penci_mobj__body">
                                                                            <header class="entry-header">
                                                                                <h2 class="entry-title">
                                                                                    <router-link
                                                                                            :to="{name:'article',params:{id:article.id}}"
                                                                                       rel="bookmark">
                                                                                        {{article.title}}
                                                                                    </router-link>
                                                                                </h2>
                                                                                <div class="penci-schema-markup"><span
                                                                                        class="author vcard"><a class="url fn n"
                                                                                                                href="../../author/admin/index.html">Penci Design</a></span>
                                                                                    <time class="entry-date published"
                                                                                          datetime="2017-11-03T03:12:23+00:00">November
                                                                                        3, 2017
                                                                                    </time>
                                                                                    <time class="updated"
                                                                                          datetime="2017-12-01T07:45:01+00:00">December
                                                                                        1, 2017
                                                                                    </time>
                                                                                </div>
                                                                                <div class="entry-meta">
                                                                    <span class="entry-meta-item penci-byline">by <span
                                                                            class="author vcard"><a class="url fn n"
                                                                                                    href="../../author/admin/index.html">Penci Design</a></span></span><span
                                                                                        class="entry-meta-item penci-posted-on"><i
                                                                                        class="fa fa-clock-o"></i><a
                                                                                        href="../../10-incredible-online-art-schools/index.html"
                                                                                        rel="bookmark">
                                                                                    <time
                                                                                        class="entry-date published">{{article.created_at | moment("MMMM D, YYYY")}}
                                                                                    </time>
                                                                                    </a>
                                                                                </span>
                                                                                    <span
                                                                                        class="entry-meta-item penci-comment-count"><a
                                                                                        class="penci_pmeta-link"
                                                                                        href="../../10-incredible-online-art-schools/index.html#respond"><i
                                                                                        class="la la-comments"></i>0</a>
                                                                                    </span>
                                                                                </div>
                                                                                <!-- .entry-meta -->
                                                                            </header><!-- .entry-header -->
                                                                            <!--<div class="entry-content">Far far away, behind the word-->
                                                                                <!--mountains, far from the countries Vokalia and-->
                                                                                <!--Consonantia, there live the-->
                                                                            <!--</div>-->
                                                                            <footer class="entry-footer">
                                                                <span class="tags-links penci-tags-links"><a
                                                                        href="../../tag/creative/index.html" rel="tag">creative</a><a
                                                                        href="../../tag/news/index.html"
                                                                        rel="tag">news</a><a
                                                                        href="../../tag/pennews/index.html" rel="tag">pennews</a><a
                                                                        href="../../tag/wordpress/index.html" rel="tag">wordpress</a></span>
                                                                            </footer><!-- .entry-footer -->
                                                                        </div>
                                                                    </div>
                                                                </article><!-- #post-## -->


                                                            </div>
                                                            <div class="penci-pagination penci-pag-left">
                                                                <nav class="navigation pagination" role="navigation">
                                                                    <h2 class="screen-reader-text">Posts navigation</h2>
                                                                    <div class="nav-links"><span aria-current="page"
                                                                                                 class="page-numbers current">1</span>
                                                                        <a class="page-numbers" href="page/2/index.html">2</a>
                                                                        <span class="page-numbers dots">…</span>
                                                                        <a class="page-numbers" href="page/4/index.html">4</a>
                                                                        <a class="next page-numbers" href="page/2/index.html"><i
                                                                                class="fa fa-angle-right"></i></a></div>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <aside class="widget-area widget-area-2 penci-sticky-sidebar penci-sidebar-widgets"
                                                       style="position: relative; overflow: visible; margin-bottom: 20px; box-sizing: border-box; min-height: 1px;">
                                                    <div class="theiaStickySidebar"
                                                         style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                                                        <div id="penci-ad_box--34697"
                                                             class="penci-block-vc penci-ad-box penci-list-banner widget penci-block-vc penci-widget-sidebar style-title-7 style-title-left penci-block-vc penci-widget penci-ad_box penci-widget__ad_box penci-link-filter-hidden penci-empty-block-title penci-vc-column-1">
                                                            <div class="penci-block-heading">
                                                            </div>
                                                            <div class="penci-block_content">
                                                                <div class="penci-promo-item penci-banner-has-text">
                                                                    <a class="penci-promo-link" href="#" target="_self"></a><img
                                                                        width="600" height="500"
                                                                        src="/img/banner.jpg"
                                                                        class="penci-image-holder penci-ad-image  penci-lazy attachment-full"
                                                                        alt=""
                                                                >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <newsletter></newsletter>
                                                        <div id="penci_block_6__79102493"
                                                             class="penci-block-vc penci-block_6 penci__general-meta widget penci-block-vc penci-widget-sidebar style-title-7 style-title-left penci-block-vc penci-widget penci-block_6 penci-widget__block_6 penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-1"
                                                             data-current="1" data-blockuid="penci_block_6__79102493">
                                                            <div class="penci-block-heading">
                                                                <h3 class="penci-block__title"><span>Editor's Picks</span></h3></div>
                                                            <div id="penci_block_6__79102493block_content" class="penci-block_content">
                                                                <div class="penci-block_content__items penci-block-items__1">
                                                                    <article class="hentry penci-post-item">
                                                                        <div class="penci_media_object "><a
                                                                                class="penci-image-holder  penci-lazy penci_mobj__img penci-image_has_icon"
                                                                                data-delay=""
                                                                                href="../../learn-model-3d-portrait-zbrush-maya/index.html"
                                                                                title="Learn how to model a 3D portrait in ZBrush and Maya"
                                                                                style="display: block; background-image: url(&quot;http://max.pennews.pencidesign.com/pennews-creative/wp-content/uploads/sites/30/2017/11/3d1-280x186.jpg&quot;);"></a>
                                                                            <div class="penci_post_content penci_mobj__body"><h3
                                                                                    class="penci__post-title entry-title"><a
                                                                                    href="../../learn-model-3d-portrait-zbrush-maya/index.html"
                                                                                    title=" Learn how to model a 3D portrait in ZBrush and Maya ">Learn
                                                                                how to model a 3D portrait in ZBrush and Maya</a></h3>
                                                                                <div class="penci-schema-markup"><span
                                                                                        class="author vcard"><a class="url fn n"
                                                                                                                href="../../author/admin/index.html">Penci Design</a></span>
                                                                                    <time class="entry-date published"
                                                                                          datetime="2017-11-03T03:04:36+00:00">November
                                                                                        3, 2017
                                                                                    </time>
                                                                                    <time class="updated"
                                                                                          datetime="2017-12-01T07:39:14+00:00">December
                                                                                        1, 2017
                                                                                    </time>
                                                                                </div>
                                                                                <div class="penci_post-meta"><span
                                                                                        class="entry-meta-item penci-posted-on"><i
                                                                                        class="fa fa-clock-o"></i><time
                                                                                        class="entry-date published"
                                                                                        datetime="2017-11-03T03:04:36+00:00">November 3, 2017</time><time
                                                                                        class="updated"
                                                                                        datetime="2017-12-01T07:39:14+00:00">December 1, 2017</time></span><span
                                                                                        class="entry-meta-item penci-comment-count"><a
                                                                                        class="penci_pmeta-link"
                                                                                        href="../../learn-model-3d-portrait-zbrush-maya/index.html#comments"><i
                                                                                        class="la la-comments"></i>26 </a></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                    <article class="hentry penci-post-item">
                                                                        <div class="penci_media_object "><a
                                                                                class="penci-image-holder  penci-lazy penci_mobj__img penci-image_has_icon"
                                                                                data-delay=""
                                                                                href="../../get-grips-accessible-web-typography/index.html"
                                                                                title="Get to grips with accessible web typography"
                                                                                style="display: block; background-image: url(&quot;http://max.pennews.pencidesign.com/pennews-creative/wp-content/uploads/sites/30/2017/11/typo1-280x186.jpg&quot;);"></a>
                                                                            <div class="penci_post_content penci_mobj__body"><h3
                                                                                    class="penci__post-title entry-title"><a
                                                                                    href="../../get-grips-accessible-web-typography/index.html"
                                                                                    title=" Get to grips with accessible web typography ">Get
                                                                                to grips with accessible web typography</a></h3>
                                                                                <div class="penci-schema-markup"><span
                                                                                        class="author vcard"><a class="url fn n"
                                                                                                                href="../../author/admin/index.html">Penci Design</a></span>
                                                                                    <time class="entry-date published"
                                                                                          datetime="2017-11-03T03:04:33+00:00">November
                                                                                        3, 2017
                                                                                    </time>
                                                                                    <time class="updated"
                                                                                          datetime="2017-12-01T07:39:21+00:00">December
                                                                                        1, 2017
                                                                                    </time>
                                                                                </div>
                                                                                <div class="penci_post-meta"><span
                                                                                        class="entry-meta-item penci-posted-on"><i
                                                                                        class="fa fa-clock-o"></i><time
                                                                                        class="entry-date published"
                                                                                        datetime="2017-11-03T03:04:33+00:00">November 3, 2017</time><time
                                                                                        class="updated"
                                                                                        datetime="2017-12-01T07:39:21+00:00">December 1, 2017</time></span><span
                                                                                        class="entry-meta-item penci-comment-count"><a
                                                                                        class="penci_pmeta-link"
                                                                                        href="../../get-grips-accessible-web-typography/index.html#respond"><i
                                                                                        class="la la-comments"></i>0</a></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                    <article class="hentry penci-post-item">
                                                                        <div class="penci_media_object "><a
                                                                                class="penci-image-holder  penci-lazy penci_mobj__img penci-image_has_icon"
                                                                                data-delay=""
                                                                                href="../../meet-artist-brought-pratchetts-discworld-life/index.html"
                                                                                title="Meet the artist who brought Pratchett’s Discworld to life"
                                                                                style="display: block; background-image: url(&quot;http://max.pennews.pencidesign.com/pennews-creative/wp-content/uploads/sites/30/2017/11/illu1-280x186.jpg&quot;);"></a>
                                                                            <div class="penci_post_content penci_mobj__body"><h3
                                                                                    class="penci__post-title entry-title"><a
                                                                                    href="../../meet-artist-brought-pratchetts-discworld-life/index.html"
                                                                                    title=" Meet the artist who brought Pratchett’s Discworld to life ">Meet
                                                                                the artist who brought Pratchett’s Discworld to life</a>
                                                                            </h3>
                                                                                <div class="penci-schema-markup"><span
                                                                                        class="author vcard"><a class="url fn n"
                                                                                                                href="../../author/admin/index.html">Penci Design</a></span>
                                                                                    <time class="entry-date published"
                                                                                          datetime="2017-11-03T03:04:28+00:00">November
                                                                                        3, 2017
                                                                                    </time>
                                                                                    <time class="updated"
                                                                                          datetime="2017-12-01T07:39:29+00:00">December
                                                                                        1, 2017
                                                                                    </time>
                                                                                </div>
                                                                                <div class="penci_post-meta"><span
                                                                                        class="entry-meta-item penci-posted-on"><i
                                                                                        class="fa fa-clock-o"></i><time
                                                                                        class="entry-date published"
                                                                                        datetime="2017-11-03T03:04:28+00:00">November 3, 2017</time><time
                                                                                        class="updated"
                                                                                        datetime="2017-12-01T07:39:29+00:00">December 1, 2017</time></span><span
                                                                                        class="entry-meta-item penci-comment-count"><a
                                                                                        class="penci_pmeta-link"
                                                                                        href="../../meet-artist-brought-pratchetts-discworld-life/index.html#respond"><i
                                                                                        class="la la-comments"></i>0</a></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                    <article class="hentry penci-post-item">
                                                                        <div class="penci_media_object "><a
                                                                                class="penci-image-holder  penci-lazy penci_mobj__img penci-image_has_icon"
                                                                                data-delay=""
                                                                                href="../../build-web-animations-without-writing-line-code/index.html"
                                                                                title="Build web animations without writing a line of code"
                                                                                style="display: block; background-image: url(&quot;http://max.pennews.pencidesign.com/pennews-creative/wp-content/uploads/sites/30/2017/11/web1-280x186.jpg&quot;);"></a>
                                                                            <div class="penci_post_content penci_mobj__body"><h3
                                                                                    class="penci__post-title entry-title"><a
                                                                                    href="../../build-web-animations-without-writing-line-code/index.html"
                                                                                    title=" Build web animations without writing a line of code ">Build
                                                                                web animations without writing a line of code</a></h3>
                                                                                <div class="penci-schema-markup"><span
                                                                                        class="author vcard"><a class="url fn n"
                                                                                                                href="../../author/admin/index.html">Penci Design</a></span>
                                                                                    <time class="entry-date published"
                                                                                          datetime="2017-11-03T03:04:23+00:00">November
                                                                                        3, 2017
                                                                                    </time>
                                                                                    <time class="updated"
                                                                                          datetime="2017-12-01T07:39:38+00:00">December
                                                                                        1, 2017
                                                                                    </time>
                                                                                </div>
                                                                                <div class="penci_post-meta"><span
                                                                                        class="entry-meta-item penci-posted-on"><i
                                                                                        class="fa fa-clock-o"></i><time
                                                                                        class="entry-date published"
                                                                                        datetime="2017-11-03T03:04:23+00:00">November 3, 2017</time><time
                                                                                        class="updated"
                                                                                        datetime="2017-12-01T07:39:38+00:00">December 1, 2017</time></span><span
                                                                                        class="entry-meta-item penci-comment-count"><a
                                                                                        class="penci_pmeta-link"
                                                                                        href="../../build-web-animations-without-writing-line-code/index.html#respond"><i
                                                                                        class="la la-comments"></i>0</a></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                    <article class="hentry penci-post-item">
                                                                        <div class="penci_media_object "><a
                                                                                class="penci-image-holder  penci-lazy penci_mobj__img penci-image_has_icon"
                                                                                data-delay=""
                                                                                href="../../move-daz-studio-zbrush/index.html"
                                                                                title="How to move between DAZ Studio and ZBrush"
                                                                                style="display: block; background-image: url(&quot;http://max.pennews.pencidesign.com/pennews-creative/wp-content/uploads/sites/30/2017/11/3d2-280x186.jpg&quot;);"></a>
                                                                            <div class="penci_post_content penci_mobj__body"><h3
                                                                                    class="penci__post-title entry-title"><a
                                                                                    href="../../move-daz-studio-zbrush/index.html"
                                                                                    title=" How to move between DAZ Studio and ZBrush ">How
                                                                                to move between DAZ Studio and ZBrush</a></h3>
                                                                                <div class="penci-schema-markup"><span
                                                                                        class="author vcard"><a class="url fn n"
                                                                                                                href="../../author/admin/index.html">Penci Design</a></span>
                                                                                    <time class="entry-date published"
                                                                                          datetime="2017-11-03T03:04:18+00:00">November
                                                                                        3, 2017
                                                                                    </time>
                                                                                    <time class="updated"
                                                                                          datetime="2017-12-01T07:39:50+00:00">December
                                                                                        1, 2017
                                                                                    </time>
                                                                                </div>
                                                                                <div class="penci_post-meta"><span
                                                                                        class="entry-meta-item penci-posted-on"><i
                                                                                        class="fa fa-clock-o"></i><time
                                                                                        class="entry-date published"
                                                                                        datetime="2017-11-03T03:04:18+00:00">November 3, 2017</time><time
                                                                                        class="updated"
                                                                                        datetime="2017-12-01T07:39:50+00:00">December 1, 2017</time></span><span
                                                                                        class="entry-meta-item penci-comment-count"><a
                                                                                        class="penci_pmeta-link"
                                                                                        href="../../move-daz-studio-zbrush/index.html#respond"><i
                                                                                        class="la la-comments"></i>0</a></span></div>
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
                                                </aside><!-- #secondary -->
                                                <aside class="widget-area widget-area-1 penci-sticky-sidebar penci-sidebar-widgets"
                                                       style="position: relative; overflow: visible; margin-bottom: 20px; box-sizing: border-box; min-height: 1px;">
                                                    <div class="theiaStickySidebar"
                                                         style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                                                        <div id="search-2"
                                                             class="widget  penci-block-vc penci-widget-sidebar style-title-7 style-title-left widget_search">
                                                            <form method="get" class="search-form"
                                                                  action="http://pennews.pencidesign.com/pennews-creative/">
                                                                <label>
                                                                    <span class="screen-reader-text">Search for:</span>
                                                                    <input type="search" class="search-field"
                                                                           placeholder="Enter keyword..." value="" name="s">
                                                                </label>
                                                                <button type="submit" class="search-submit">
                                                                    <i class="fa fa-search"></i>
                                                                    <span class="screen-reader-text">Search</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <our-networks></our-networks>
                                                        <popular-posts></popular-posts>
                                                    </div>
                                                </aside><!-- #secondary -->
                                            </div>
                                        </div>
                                    </main><!-- #main -->
                                </div><!-- #primary -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import OurNetworks from '../components/OurNetworks.vue';
    import PopularPosts from '../components/PopularPosts.vue';
    import Newsletter from '../components/Newsletters.vue';
    export default {
        props: ['articles','categories'],
        data() {
            return {
                articlesCategory: [],
                selectedCategory:[]
            }
        },
        methods: {
            fetchArticles() {
                let articles = JSON.parse(this.articles);
                this.articlesCategory = articles.filter(article => article.category.id === this.$route.params.id)
                    .sort(function compare(a, b) {
                    let dateA = new Date(a.created_at);
                    let dateB = new Date(b.created_at);
                    return dateB - dateA ;
                });
            },
            fetchCategory(){
                let categories = JSON.parse(this.categories);
                this.selectedCategory = categories.filter(category => category.id ===
                    this.$route.params.id)
            },
            getLatest(article) {
                if(article.year >= 1500 && inventor.year <= 1600){
                    return inventor;
                }
            }
        },
        created(){
            this.fetchArticles();
            this.fetchCategory();
        },
        components:{
            OurNetworks,
            PopularPosts,
            Newsletter
        }
    }
</script>