<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>Home - PenNews Creative</title>
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Roboto%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%7CMukta+Vaani%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%7COswald%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%7CTeko%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%7CRoboto+Mono%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%7COverpass+Mono%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%26subset%3Dcyrillic%2Ccyrillic-ext%2Cgreek%2Cgreek-ext%2Clatin-ext">
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Oswald%3A400&amp;ver=4.9.8">
    <link rel="stylesheet"
          href="/css/styles.css">
    <link rel="stylesheet"
          href="/css/shortcode.css">
    <link rel="stylesheet"
          href="/css/demobar.css">
    <link rel="stylesheet"
          href="/css/settings.css">
    <link rel="stylesheet"
          href="/css/font-awesome.css">
    <link rel="stylesheet"
          href="/css/portfolio.css">
    <link rel="stylesheet"
          href="/css/review.css">
    <link rel="stylesheet"
          href="/css/style.css">
    <link rel="stylesheet"
          href="/css/inline.css">
    <link rel="stylesheet"
          href="/css/custom.css">
    <link rel="stylesheet"
          href="/css/composer.min.css">
    <link rel="stylesheet" href="/css/article.css">
    <meta name="csrf-token"
          content="{{ csrf_token() }}">
    <link rel="stylesheet"
          href="{{mix('/css/app.css')}}">
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-migrate.js"></script>
    <script src="/js/themepunch.js"></script>
    <script src="/js/themepunch.revolution.js"></script>
    <!--[if lte IE 9]>
    <link rel="stylesheet"
          type="text/css"
          href="/css/vc_lte_ie9.min.css"
          media="screen"><![endif]-->
    <style type="text/css"
           id="custom-background-css">
        body.custom-background {
            background-color: #111111;
        }
    </style>
    <style type="text/css"
           data-type="vc_shortcodes-custom-css">.vc_custom_1509693306480 {
            background-color: #263238 !important;
        }</style>
    <noscript>
        <style> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
</head>
<body class="home page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-10 custom-background wp-custom-logo header-sticky penci_enable_ajaxsearch penci_enable_retina penci_sticky_content_sidebar penci_dis_padding_bw penci_dark_layout wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
<div id="app">
    <div id="page"
         class="site">
        <div class="site-header-wrapper">
            <top-header :articles="articles"></top-header><!-- #masthead -->
            <logo></logo>
        </div>
        <div class="penci-header-mobile">
            <div class="penci-header-mobile_container">
                <button class="menu-toggle navbar-toggle"
                        aria-expanded="false">
                    <span class="screen-reader-text">Primary Menu</span>
                    <i class="fa fa-bars"></i>
                </button>
                <div class="site-branding">
                    <a href="index.html" class="custom-logo-link">
                        <img width="357"
                             height="120"
                             src="/img/logo.png"
                             class="custom-logo"
                             alt="PenNews Creative"/></a>
                </div>
                <div class="header__search-mobile header__search header__search_dis_bg"
                     id="top-search-mobile">
                    <a class="search-click"><i class="fa fa-search"></i></a>
                    <div class="show-search">
                        <div class="show-search__content">
                            <form method="get"
                                  class="search-form"
                                  action="http://pennews.pencidesign.com/pennews-creative/">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="text"
                                           id="penci-search-field-mobile"
                                           class="search-field penci-search-field-mobile"
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
                                <div class="penci-ajax-search-results-wrapper"></div>
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
        @yield('content')
        <footer id="colophon"
                class="site-footer"
                itemscope
                itemtype="http://schema.org/WPFooter">
            <meta itemprop="name"
                  content="Webpage footer for PenNews Creative"/>
            <meta itemprop="description"
                  content=""/>
            <meta itemprop="keywords"
                  content="Data Protection, Copyright Data"/>
            <meta itemprop="copyrightYear"
                  content="2018"/>
            <meta itemprop="copyrightHolder"
                  content="PenNews Creative"/>
            <footer-sidebars v-bind:categories="categories" v-bind:articles="articles"></footer-sidebars>
            <b-footer></b-footer>
        </footer><!-- #colophon -->
    </div><!-- #page -->
</div>
<aside class="mobile-sidebar ">
    <div id="sidebar-nav-logo">
        <a href="index.html"
           class="custom-logo-link"
           rel="home">
            <img width="357"
            height="120"
            src="/img/logo.png"
            class="custom-logo"
            alt="PenNews Creative"/>
        </a>
    </div>
    <div class="header-social sidebar-nav-social">
        <div class="inner-header-social">
            <a class="social-media-item socail_media__facebook"
               target="_blank"
               href="#"
               title="Facebook"
               rel="noopener"><span class="socail-media-item__content"><i class="fa fa-facebook"></i><span class="social_title screen-reader-text">Facebook</span></span></a><a
                    class="social-media-item socail_media__twitter"
                    target="_blank"
                    href="#"
                    title="Twitter"
                    rel="noopener"><span class="socail-media-item__content"><i class="fa fa-twitter"></i><span class="social_title screen-reader-text">Twitter</span></span></a><a
                    class="social-media-item socail_media__instagram"
                    target="_blank"
                    href="#"
                    title="Instagram"
                    rel="noopener"><span class="socail-media-item__content"><i class="fa fa-instagram"></i><span class="social_title screen-reader-text">Instagram</span></span></a><a
                    class="social-media-item socail_media__pinterest"
                    target="_blank"
                    href="#"
                    title="Pinterest"
                    rel="noopener"><span class="socail-media-item__content"><i class="fa fa-pinterest"></i><span class="social_title screen-reader-text">Pinterest</span></span></a><a
                    class="social-media-item socail_media__behance"
                    target="_blank"
                    href="#"
                    title="Behance"
                    rel="noopener"><span class="socail-media-item__content"><i class="fa fa-behance"></i><span class="social_title screen-reader-text">Behance</span></span></a><a
                    class="social-media-item socail_media__tumblr"
                    target="_blank"
                    href="#"
                    title="Tumblr"
                    rel="noopener"><span class="socail-media-item__content"><i class="fa fa-tumblr"></i><span class="social_title screen-reader-text">Tumblr</span></span></a><a
                    class="social-media-item socail_media__youtube"
                    target="_blank"
                    href="#"
                    title="Youtube"
                    rel="noopener"><span class="socail-media-item__content"><i class="fa fa-youtube-play"></i><span
                            class="social_title screen-reader-text">Youtube</span></span></a><a class="social-media-item socail_media__snapchat"
                                                                                                target="_blank"
                                                                                                href="#"
                                                                                                title="Snapchat"
                                                                                                rel="noopener"><span
                        class="socail-media-item__content"><i class="fa fa-snapchat"></i><span class="social_title screen-reader-text">Snapchat</span></span></a>
        </div>
    </div>
    <nav class="mobile-navigation"
         itemscope
         itemtype="http://schema.org/SiteNavigationElement">
        <ul id="primary-menu-mobile"
            class="primary-menu-mobile">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-751">
                <a href="index.html">Home</a></li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-726">
                <a href="category/creative-news/index.html">Creative News</a>
                <ul class="sub-menu">
                    <li id="menu-item-727"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-727">
                        <a href="category/creative-news/3d-design/index.html">3D Design</a></li>
                    <li id="menu-item-728"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-728">
                        <a href="category/creative-news/illustrations/index.html">Illustrations</a></li>
                    <li id="menu-item-729"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-729">
                        <a href="category/creative-news/typography/index.html">Typography</a></li>
                    <li id="menu-item-746"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-746">
                        <a href="category/creative-news/uiux/index.html">UI/UX</a></li>
                    <li id="menu-item-747"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-747">
                        <a href="category/creative-news/web-design/index.html">Web Design</a></li>
                </ul>
            </li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-748">
                <a href="category/creative-news/illustrations/index.html">Illustrations</a></li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-749">
                <a href="category/creative-news/uiux/index.html">UI/UX</a></li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-750">
                <a href="category/creative-news/web-design/index.html">Web Design</a></li>
        </ul>
    </nav>
</aside>
<a id="close-sidebar-nav"
   class="header-1"><i class="fa fa-close"></i></a>
<a href="#"
   id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
<script type="text/javascript">(function () {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }

        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields && urlFields.length > 0) {
            for (var j = 0; j < urlFields.length; j++) {
                addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
            }
        }
        /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if (testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for (var i = 0; i < dateFields.length; i++) {
                if (!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if (!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();</script>
<link rel="stylesheet"
      href="http://fonts.googleapis.com/css?family=Roboto+Mono">
<link rel="stylesheet"
      href="http://fonts.googleapis.com/css?family=Mukta+Vaani">
<link rel="stylesheet"
      href="http://fonts.googleapis.com/css?family=Overpass+Mono">
<script src="/js/scripts.js"></script>
<script src="/js/demobar.js"></script>
<script src="/js/easypiechart.js"></script>
<script src="/js/jquery.ratyo.js"></script>
<script src="/js/rating_review.js"></script>
<script src="/js/script.min.js"></script>
<script src="/js/others.js"></script>
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>