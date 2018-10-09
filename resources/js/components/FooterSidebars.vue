<template>
    <div id="footer__sidebars"
         class="footer__sidebars footer__sidebar-col-3 footer__sidebars-style-11">
        <div class="footer__sidebars-inner penci-container-fluid">
            <div class="row">
                <div id="footer-1"
                     class="footer-sidebar-item footer-1 penci-col-3">
                    <div id="penci_block_6__98815468"
                         class="penci-block-vc penci-block_6 penci__general-meta widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left penci-block-vc penci-widget penci-block_6 penci-widget__block_6 penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-1"
                         data-current="1"
                         data-blockUid="penci_block_6__98815468">
                        <div class="penci-block-heading">
                            <h3 class="penci-block__title"><span>Recent Posts</span></h3></div>
                        <div id="penci_block_6__98815468block_content"
                             class="penci-block_content">
                            <div class="penci-block_content__items penci-block-items__1">
                                <article class="hentry penci-post-item" v-for="item in recents">
                                    <div class="penci_media_object ">
                                        <a class="penci-image-holder  penci-lazy penci_mobj__img penci-image_has_icon" :style="item.image"></a>
                                        <div class="penci_post_content penci_mobj__body">
                                            <h3 class="penci__post-title entry-title">
                                                <a href="#">
                                                    {{item.title}}
                                                </a>
                                            </h3>
                                            <div class="penci-schema-markup">
                                                    <span class="author vcard">
                                                        <a class="url fn n" href="author/admin/index.html">Penci Design</a>
                                                    </span>
                                            </div>
                                            <div class="penci_post-meta">
                                                    <span class="entry-meta-item penci-posted-on"><i class="fa fa-clock-o"></i>
                                                        <time class="entry-date published">{{item.created_at.date |
                                                            moment("MMMM D, YYYY")}}</time>
                                                        <time class="updated">December 1, 2017</time>
                                                    </span>
                                                <span class="entry-meta-item penci-comment-count">
                                                            <router-link class="penci_pmeta-link"
                                                               :to="{name:'article',params:{id: item.id}}">
                                                                <i class="la la-comments"></i>0
                                                            </router-link>
                                                </span>
                                            </div>
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
                <div id="footer-2"
                     class="footer-sidebar-item footer-2 penci-col-6">
                    <div id="penci_instagram-2"
                         class="widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left penci-instagram">
                        <div class="penci-block-heading"><h4 class="widget-title penci-block__title">
                            <span>Instagram</span></h4></div>
                        <div id="penci-insta-thumb14195"
                             class="penci-insta-thumb penci-insta-square">
                            <ul class="no-bullet thumbnails penci_col_6">
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/BkS4Li4BNRZ/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/bf7bed036edc3b349152f6538834c051/5C61A2ED/t51.2885-15/e35/c190.0.699.699/s480x480/35166386_2254177557955964_2310199763909214208_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/Bh-hnO0B0CM/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/f860b787a132c40b19ede2e95dff6915/5C432D8A/t51.2885-15/e35/c0.135.1080.1080/s480x480/30830202_239107693501192_5376142746316701696_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/BhQAXnqhoxB/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/e655579bbdf42b0720158efbf6cc1539/5C43CE9D/t51.2885-15/e35/c0.135.1080.1080/s480x480/29738020_228331997719671_2196598510290206720_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/BfMd8uXBp1O/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/a715523b3df2dc56c9148f86faa68fa4/5C450FBC/t51.2885-15/e35/c0.135.1080.1080/s480x480/27578423_144867479517869_4235209247052267520_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/Bes7B5hBzbp/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/acc6807cd9dbced75bc996b0e20bd478/5C40FC24/t51.2885-15/e35/c0.135.1080.1080/s480x480/26863740_215659469008797_5833218680695029760_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/BcqJmRtg-IX/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/bde9714110fa19ce41a2f883dae691a1/5C419CAE/t51.2885-15/e35/c0.135.1080.1080/s480x480/24845354_508304456220695_5043802910006181888_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/Bb1mymvgerV/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/61ca9c923f96d8c14690cc1b3ccb7455/5C413177/t51.2885-15/e35/s480x480/23825308_363120750780527_1746325048194498560_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/Bb1mwCbAEi3/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/e4e9d08974608d60ce23e70c4434260b/5C2CF60D/t51.2885-15/e35/s480x480/23824541_1632909383439313_5565595342881161216_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/BbkN-N-Amw_/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/41ee17a4be2378319a61b1dc20b0abf0/5C3E2711/t51.2885-15/e35/c0.135.1080.1080/s480x480/23594381_140930996629799_8958081669441519616_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/BaSwxn_ALBl/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/e019b28960622668220e1db33bde8a9f/5C285393/t51.2885-15/e35/c0.135.1080.1080/s480x480/22582608_1601191763274345_2421644243865960448_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/BWENVDfAJDq/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/a2d8c699db195a545084d8cef22b79ae/5C5B473E/t51.2885-15/e35/c0.135.1080.1080/s480x480/19535322_1997088257194871_6728854670560722944_n.jpg"></span></a>
                                </li>
                                <li><a class="instagram-item-thumbs"
                                       href="https://www.instagram.com/p/BVVEC0ZACq1/"
                                       target="_blank"><span class="penci-image-holder penci-lazy instagram-square-lazy"
                                                             data-src="https://scontent-sjc3-1.cdninstagram.com/vp/a29aefb39a45499b3c44cb83a1083f34/5C2916C1/t51.2885-15/e35/c0.135.1080.1080/s480x480/19051380_1409649169102725_615232414221860864_n.jpg"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="footer-3"
                     class="footer-sidebar-item footer-3 penci-col-3">
                    <div id="penci-popular-cat--38952"
                         class="penci-block-popular-cat  widget penci-block-vc widget_categories widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left penci-block-vc penci-widget penci-popular_category penci-widget__popular_category penci-link-filter-hidden penci-vc-column-1">
                        <div class="penci-block-heading">
                            <h3 class="penci-block__title"><span>Categories</span></h3></div>
                        <ul>
                            <li class="cat-item cat-item-3" v-for="category in categories">
                                <a href="category/editors-picks/index.html">
                                    {{category.category}}
                                    <span class="category-item-count">({{category.articles_num}})</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:['categories','articles'],
        computed:{
            recents(){
                return this.articles.slice(0,2)
            },
        }
    }
</script>