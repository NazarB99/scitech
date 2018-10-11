<template>
    <header id="masthead"
            class="site-header header--s3 header--s4">
        <div class="penci-container-fluid">
            <nav id="site-navigation"
                 class="main-navigation penci_disable_padding_menu pencimn-slide_down"
                 itemtype="http://schema.org/SiteNavigationElement">
                <ul id="menu-main-menu"
                    class="menu">
                    <li id="menu-item-751"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-751">
                        <router-link :to="{name:'main'}">На главную</router-link>
                    </li>
                    <li id="menu-item-726"
                        v-for="(category,index) in categories"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children penci-mega-menu penci-megamenu-container menu-item-726">
                        <router-link :to="{name:'getArticleByCategory',params:{id: category.id}}">
                            {{category.category}}
                        </router-link>
                        <ul class="sub-menu">
                            <li id="menu-item-0"
                                class="menu-item-0">
                                <div class="penci-megamenu">
                                    <div class="penci-content-megamenu penci-content-megamenu-style-1">
                                        <div class="penci-mega-latest-posts col-mn-5 mega-row-1 penci-post-border-bottom">
                                            <div class="penci-mega-row penci-mega-8 row-active"
                                                 data-current="1"
                                                 data-blockUid="penci_megamenu__47694">
                                                <div id="penci_megamenu__47694block_content"
                                                     class="penci-block_content penci-mega-row_content">
                                                    <MenuItem :articles="articles" :index="index"></MenuItem>
                                                    <animation></animation>
                                                </div>
                                                <span class="penci-slider-nav">
						<a class="penci-mega-pag penci-slider-prev penci-pag-disabled"
                           data-block_id="penci_megamenu__47694block_content"
                           href="#"><i class="fa fa-angle-left"></i></a>
						<a class="penci-mega-pag penci-slider-next "
                           data-block_id="penci_megamenu__47694block_content"
                           href="#"><i class="fa fa-angle-right"></i></a>
					</span>
                                            </div>
                                            <div class="penci-mega-row penci-mega-4"
                                                 data-current="1"
                                                 data-blockUid="penci_megamenu__59081">
                                                <div id="penci_megamenu__59081block_content"
                                                     class="penci-block_content penci-mega-row_content">
                                                </div>
                                                <span class="penci-slider-nav">
						<a class="penci-mega-pag penci-slider-prev penci-pag-disabled"
                           data-block_id="penci_megamenu__59081block_content"
                           href="#"><i class="fa fa-angle-left"></i></a>
						<a class="penci-mega-pag penci-slider-next "
                           data-block_id="penci_megamenu__59081block_content"
                           href="#"><i class="fa fa-angle-right"></i></a>
					</span>
                                            </div>
                                            <div class="penci-mega-row penci-mega-5"
                                                 data-current="1"
                                                 data-blockUid="penci_megamenu__53493">
                                                <div id="penci_megamenu__53493block_content"
                                                     class="penci-block_content penci-mega-row_content">
                                                </div>
                                                <span class="penci-slider-nav">
						<a class="penci-mega-pag penci-slider-prev penci-pag-disabled"
                           data-block_id="penci_megamenu__53493block_content"
                           href="#"><i class="fa fa-angle-left"></i></a>
						<a class="penci-mega-pag penci-slider-next "
                           data-block_id="penci_megamenu__53493block_content"
                           href="#"><i class="fa fa-angle-right"></i></a>
					</span>
                                            </div>
                                            <div class="penci-mega-row penci-mega-6"
                                                 data-current="1"
                                                 data-blockUid="penci_megamenu__83815">
                                                <div id="penci_megamenu__83815block_content"
                                                     class="penci-block_content penci-mega-row_content">
                                                </div>
                                                <span class="penci-slider-nav">
						<a class="penci-mega-pag penci-slider-prev penci-pag-disabled"
                           data-block_id="penci_megamenu__83815block_content"
                           href="#"><i class="fa fa-angle-left"></i></a>
						<a class="penci-mega-pag penci-slider-next "
                           data-block_id="penci_megamenu__83815block_content"
                           href="#"><i class="fa fa-angle-right"></i></a>
					</span>
                                            </div>
                                            <div class="penci-mega-row penci-mega-7"
                                                 data-current="1"
                                                 data-blockUid="penci_megamenu__19103">
                                                <div id="penci_megamenu__19103block_content"
                                                     class="penci-block_content penci-mega-row_content">
                                                </div>
                                                <span class="penci-slider-nav">
						<a class="penci-mega-pag penci-slider-prev penci-pag-disabled"
                           data-block_id="penci_megamenu__19103block_content"
                           href="#"><i class="fa fa-angle-left"></i></a>
						<a class="penci-mega-pag penci-slider-next "
                           data-block_id="penci_megamenu__19103block_content"
                           href="#"><i class="fa fa-angle-right"></i></a>
					</span>
                                            </div>
                                            <animation></animation>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #site-navigation -->
            <div class="header__social-search">
                <div class="header__search header__search_dis_bg"
                     id="top-search">
                    <a class="search-click"><i class="fa fa-search"></i></a>
                    <div class="show-search">
                        <div class="show-search__content">
                            <form method="get"
                                  class="search-form"
                                  action="http://pennews.pencidesign.com/pennews-creative/">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input id="penci-header-search"
                                           type="search"
                                           class="search-field"
                                           placeholder="Enter keyword..."
                                           value=""
                                           name="s"
                                           autocomplete="off">
                                </label>
                                <button type="submit"
                                        class="search-submit">
                                    <i class="fa fa-search"></i>
                                    <span class="screen-reader-text">Search</span>
                                </button>
                            </form>
                            <div class="penci-ajax-search-results">
                                <div id="penci-ajax-search-results-wrapper"
                                     class="penci-ajax-search-results-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__social-media">
                    <div class="header__content-social-media">
                        <a class="social-media-item socail_media__facebook"
                           target="_blank"
                           href="#"
                           title="Facebook"
                           rel="noopener"><span class="socail-media-item__content"><i class="fa fa-facebook"></i><span
                                class="social_title screen-reader-text">Facebook</span></span></a>
                        <a class="social-media-item socail_media__twitter" target="_blank" href="#"><span
                            class="socail-media-item__content"><i class="fa fa-twitter"></i><span class="social_title screen-reader-text">Twitter</span></span></a><a
                            class="social-media-item socail_media__instagram"
                            target="_blank"
                            href="#"
                            title="Instagram"
                            rel="noopener"><span class="socail-media-item__content"><i class="fa fa-instagram"></i><span
                            class="social_title screen-reader-text">Instagram</span></span></a><a class="social-media-item socail_media__pinterest"
                                                                                                  target="_blank"
                                                                                                  href="#"
                                                                                                  title="Pinterest"
                                                                                                  rel="noopener"><span
                            class="socail-media-item__content"><i class="fa fa-pinterest"></i><span class="social_title screen-reader-text">Pinterest</span></span></a><a
                            class="social-media-item socail_media__behance"
                            target="_blank"
                            href="#"
                            title="Behance"
                            rel="noopener"><span class="socail-media-item__content"><i class="fa fa-behance"></i><span
                            class="social_title screen-reader-text">Behance</span></span></a><a class="social-media-item socail_media__tumblr"
                                                                                                target="_blank"
                                                                                                href="#"
                                                                                                title="Tumblr"
                                                                                                rel="noopener"><span
                            class="socail-media-item__content"><i class="fa fa-tumblr"></i><span class="social_title screen-reader-text">Tumblr</span></span></a><a
                            class="social-media-item socail_media__youtube"
                            target="_blank"
                            href="#"
                            title="Youtube"
                            rel="noopener"><span class="socail-media-item__content"><i class="fa fa-youtube-play"></i><span
                            class="social_title screen-reader-text">Youtube</span></span></a>
                        <a class="social-media-item socail_media__snapchat"
                        target="_blank"
                        href="#"
                        title="Snapchat"
                        rel="noopener"><span
                        class="socail-media-item__content">
                            <i class="fa fa-snapchat"></i>
                            <span class="social_title screen-reader-text">Snapchat</span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
</template>
<script>
    import Animation from './articles/Animation.vue';
    import MenuItem from "./MenuItem";

    export default {
        props:['articles','categories'],
        components: {
            MenuItem,
            Animation
        }
    }
</script>