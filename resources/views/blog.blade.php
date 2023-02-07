@extends('layouts.user')

@section('extra-css')
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='bizipress-style-inline-css' type='text/css'>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .fw-special-title {
            font-family: gilroy;
            font-style: normal;
            font-weight: 700;
            color: #252a37;
        }

        .fw-special-subtitle,
        .fw-contact-form-description,
        .team-member h5 {
            font-family: Asap;
            font-style: normal;
            font-weight: 400;
        }

        body {
            font-family: Asap;
            font-style: normal;
            font-weight: 400;
            color: #626c84;
            line-height: 30px;
            font-size: 16px;
        }

        .colorsbg,
        .separator,
        .separator-left,
        .separator,
        .preloader {
            background: #2154cf;
        }

        .service-icon:before {
            border-bottom: 30px solid #2154cf;
        }

        .footer {
            background: url(../wp-content/uploads/2018/01/footer-bg.jpg);
        }

        .footer .xs-main-overlay {
            background-color: rgba(0, 8, 29, 0.9)
        }

        .footer,
        .footer-widget ul.list-dash li a,
        .footer .widget-title {
            color: #ffffff
        }

        .copyright-info,
        .copyright p {
            color: #ffffff;
        }

        .copyright {
            background: #00081d
        }

        a.link-more.color,
        a:hover,
        ul.main-menu li ul li.current-menu-item a,
        ul.main-menu li>ul.sub-menu>li:hover>a,
        .footer-widget ul.list-dash li a:hover,
        #footer-menu li a:hover,
        #responsive-menu ul li a:hover,
        .header-standard ul.navbar-nav>li.active>a,
        .header-standard ul.navbar-nav>li:hover>a,
        .entry-header .entry-title a:hover,
        .tab-content-info .btn-light:hover {
            color: #fc6a2a;
        }

        a,
        .download-btn i,
        .top-bar.solid-bg ul.top-menu li a:hover,
        .top-bar.solid-bg .top-social a:hover,
        ul.top-menu li a:hover,
        .top-info .info-icon,
        .team-social-icons a:hover,
        .ts-testimonial-static .ts-testimonial-text:before,
        .latest-post .post-title a:hover,
        .team-social a:hover,
        .plan.featured .btn,
        .footer-social ul li a:hover,
        .fw-accordion .fw-accordion-title.accordion-head.ui-state-active,
        ul.list-dash li:before,
        .ts-feature-info.icon-left .feature-icon,
        .section-title.border-left:before,
        .job-box .job-info .desc strong,
        .post-meta a:hover,
        .post-meta-left a:hover,
        .sidebar .widget ul li a:hover,
        .post-navigation span:hover,
        .post-navigation h3:hover,
        .post-navigation i,
        .post-navigation span:hover,
        .post-navigation h3:hover,
        .sidebar ul li.active a,
        .sidebar ul li:hover a,
        .ts-contact-info .ts-contact-icon,
        .tab-head i,
        .ts-feature-box .feature-icon,
        .featured-tab .nav-tabs>li.active>a,
        .featured-tab .nav-tabs>li.active>a,
        .toll-free-cta h3,
        .parallax-section .feature-content .toll-free-cta h3,
        .insurance-tab .nav.nav-tabs>li.active>a,
        .insurance-tab .nav.nav-tabs>li:hover>a {
            color: #2154cf;
        }

        .section-title.border-left:before,
        .section-title:after,
        .sidebar .widget-title,
        .box-slider-text .slider.btn.btn-border,
        ul.main-menu>li:hover>a:before,
        ul.main-menu>li.current-menu-item>a:before,
        ul.main-menu>li.current-menu-parent>a:before,
        .content-title,
        blockquote.light,
        .section-title-dash:after,
        .section-title-dash span.dashborder:before,
        .section-title-dash span.dashborder:after,
        #comments .form-control:focus,
        #comments input:focus {
            border-color: #2154cf;
        }

        ul.main-menu>li:hover>a:before,
        ul.main-menu>li.current-menu-item>a:before,
        ul.main-menu>li.current-menu-parent>a:before {
            border-color: #fc6a2a;
        }

        .btn-primary,
        .xs-custom-menu>li.current-menu-item>a,
        .xs-custom-menu>li:hover>a,
        #main-slide .carousel-indicators li.active,
        .owl-carousel.owl-theme .owl-nav [class*=owl-],
        .owl-theme .owl-dots .owl-dot.active span,
        #main-slide .carousel-indicators li:hover,
        #main-slide .carousel-control i:hover,
        .box-primary,
        .plan.featured,
        .quote-item .quote-text:before,
        .quote-item-area .quote-thumb,
        #back-to-top .btn.btn-primary,
        .sidebar .search-widget .input-group-btn i,
        .fw-accordion .fw-accordion-title.accordion-head .ui-icon:before,
        .finances-newsletter input[type=submit],
        .post-meta-date,
        .pagination>.active>a,
        .pagination>.active>a:hover,
        .pagination>li>a:hover,
        .featured-tab .nav-tabs>li.active>a:after,
        .page-slider.owl-carousel.owl-theme .owl-nav [class*=owl-]:hover,
        .header-standard .nav-search,
        .header-standard .search-block .search-close,
        .header-standard .nav-search,
        .header-standard .search-block .search-close,
        .ts-feature-info.icon-left.icon-round .feature-icon,
        .mc4wp-form .newsletter-bg-form,
        .ts-progress-bar .progress-bar {
            background-color: #2154cf;
        }

        .navbar-toggle {
            background-color: #fc6a2a;
        }

        .owl-carousel.featured-projects-slide.owl-theme .owl-nav>.disabled,
        .ts-service-overlay .service-title {
            background: rgba(33, 84, 207, 0.85)
        }

        .section-title-vertical .section-title {
            color: rgba(33, 84, 207, 0.20)
        }

        .section-title-vertical .section-title:after {
            border-bottom: 2px solid rgba(33, 84, 207, 0.20)
        }

        .wpcf7-form .wpcf7-form-control.wpcf7-submit:hover,
        .header-standard.header-boxed .search-block .search-close,
        .header-standard.header-boxed .nav-search {
            background: #fc6a2a
        }

        ul.main-menu li ul li.current-menu-item a,
        ul.main-menu li>ul.sub-menu>li:hover>a {
            color: #fc6a2a
        }
    </style>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
@endsection

@section('content')
    <div id="banner-area" class="banner-area" style="background: url(../wp-content/uploads/2018/01/banner5-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Articles</h1>
                        <ol class="breadcrumb"></ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="main-container" class="blog main-container" role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="post">

                        <div class="post-media post-image"><img width="750" height="465"
                                src="../wp-content/uploads/2018/01/news1.jpg"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /> </div>
                        <div class="post-body clearfix">
                            <div class="post-meta-left pull-left text-center">
                                <div class="entry-meta"><span class="post-meta-date meta-date"><span
                                            class="day">01</span>Jan</span><span class="meta-author post-author"><img
                                            alt=''
                                            src='https://secure.gravatar.com/avatar/7f85908a10a7fa54759a1e6dd3775985?s=55&amp;d=mm&amp;r=g'
                                            srcset='https://secure.gravatar.com/avatar/7f85908a10a7fa54759a1e6dd3775985?s=110&#038;d=mm&#038;r=g 2x'
                                            class='avatar avatar-55 photo' height='55' width='55' /> <a
                                            href="#" rel="author"> By Jhon
                                            Bizi</a></span><span class="post-comment"><i class="icon icon-comment"></i> <a
                                            href="#">0</a></span>
                                </div>
                            </div>
                            <div class="post-content-right">
                                <div class="entry-header">
                                    <div class="post-meta"><span class="meta-categories post-cat"> <i
                                                class="icon icon-folder"></i> <a href="#"
                                                rel="category tag">News</a>
                                        </span><span class="tagcloud"><i class="icon icon-tag"></i> <a
                                                href="#" rel="tag">funds</a>, <a
                                                href="#" rel="tag">insurance</a>
                                        </span></div>
                                    <h2 class="entry-title"><a href="#">Apple
                                            reveals its
                                            new Melbourne flagship store</a></h2>
                                    <div class="entry-content">
                                        What a crazy time. I have five children in colleghigh school graduates.jpge
                                        or pursing post graduate studies (ages 18 through 26 for those who were
                                        wondering). Each of my children attends college far from home,&hellip;</div>
                                    <div class="post-footer text-right"><a
                                            href="#"
                                            class="btn btn-primary">Continue Reading</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post">

                        <div class="post-media post-image"><img width="750" height="465"
                                src="../wp-content/uploads/2018/01/news2.jpg"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /> </div>
                        <div class="post-body clearfix">
                            <div class="post-meta-left pull-left text-center">
                                <div class="entry-meta"><span class="post-meta-date meta-date"><span
                                            class="day">01</span>Jan</span><span class="meta-author post-author"><img
                                            alt=''
                                            src='https://secure.gravatar.com/avatar/7f85908a10a7fa54759a1e6dd3775985?s=55&amp;d=mm&amp;r=g'
                                            srcset='https://secure.gravatar.com/avatar/7f85908a10a7fa54759a1e6dd3775985?s=110&#038;d=mm&#038;r=g 2x'
                                            class='avatar avatar-55 photo' height='55' width='55' /> <a
                                            href="#" rel="author"> By Jhon
                                            Bizi</a></span><span class="post-comment"><i class="icon icon-comment"></i> <a
                                            href="#">0</a></span>
                                </div>
                            </div>
                            <div class="post-content-right">
                                <div class="entry-header">
                                    <div class="post-meta"><span class="meta-categories post-cat"> <i
                                                class="icon icon-folder"></i> <a href="#"
                                                rel="category tag">News</a>
                                        </span><span class="tagcloud"><i class="icon icon-tag"></i> <a
                                                href="#" rel="tag">insurance</a>,
                                            <a href="#" rel="tag">tax
                                                planning</a> </span></div>
                                    <h2 class="entry-title"><a
                                            href="#">Bitcoin is the
                                            gag gift you should buy this holiday season</a></h2>
                                    <div class="entry-content">
                                        What a crazy time. I have five children in colleghigh school graduates.jpge
                                        or pursing post graduate studies (ages 18 through 26 for those who were
                                        wondering). Each of my children attends college far from home,&hellip;</div>
                                    <div class="post-footer text-right"><a
                                            href="#"
                                            class="btn btn-primary">Continue Reading</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post">

                        <div class="post-media post-image"><img width="750" height="465"
                                src="../wp-content/uploads/2018/01/news3.jpg"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                        </div>
                        <div class="post-body clearfix">
                            <div class="post-meta-left pull-left text-center">
                                <div class="entry-meta"><span class="post-meta-date meta-date"><span
                                            class="day">01</span>Jan</span><span class="meta-author post-author"><img
                                            alt=''
                                            src='https://secure.gravatar.com/avatar/7f85908a10a7fa54759a1e6dd3775985?s=55&amp;d=mm&amp;r=g'
                                            srcset='https://secure.gravatar.com/avatar/7f85908a10a7fa54759a1e6dd3775985?s=110&#038;d=mm&#038;r=g 2x'
                                            class='avatar avatar-55 photo' height='55' width='55' /> <a
                                            href="#" rel="author"> By Jhon
                                            Bizi</a></span><span class="post-comment"><i class="icon icon-comment"></i> <a
                                            href="#">0</a></span>
                                </div>
                            </div>
                            <div class="post-content-right">
                                <div class="entry-header">
                                    <div class="post-meta"><span class="meta-categories post-cat"> <i
                                                class="icon icon-folder"></i> <a href="#"
                                                rel="category tag">News</a>
                                        </span><span class="tagcloud"><i class="icon icon-tag"></i> <a
                                                href="#" rel="tag">financial</a>,
                                            <a href="#" rel="tag">loan</a> </span></div>
                                    <h2 class="entry-title"><a
                                            href="#">Uber
                                            is selling off its auto-leasing business</a></h2>
                                    <div class="entry-content">
                                        What a crazy time. I have five children in colleghigh school graduates.jpge
                                        or pursing post graduate studies (ages 18 through 26 for those who were
                                        wondering). Each of my children attends college far from home,&hellip;</div>
                                    <div class="post-footer text-right"><a
                                            href="#"
                                            class="btn btn-primary">Continue Reading</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="paging text-center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <aside id="sidebar" class="sidebar sidebar-right col-md-4" role="complementary">
                    <div id="search-2" class="widget widget_search">
                        <div class="search-widget input-group">
                            <form method="get" action="https://demo.xpeedstudio.com/wp/bizipress/" id="search">
                                <input type="text" name="s" class="form-control" placeholder="Search.."
                                    value="">
                                <span class="input-group-btn">
                                    <i class="fa fa-search"></i>
                                </span>
                            </form>
                        </div>
                    </div>
                    <div id="recent-posts-2" class="widget widget_recent_entries">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul>
                            <li>
                                <a href="#">Apple reveals its new
                                    Melbourne flagship store</a>
                            </li>
                            <li>
                                <a href="#">Bitcoin is the gag gift
                                    you should buy this holiday season</a>
                            </li>
                            <li>
                                <a href="#">Uber
                                    is selling off its auto-leasing business</a>
                            </li>
                            <li>
                                <a href="#">Website encourages
                                    scrolling</a>
                            </li>
                            <li>
                                <a href="#">The
                                    tibrantly colorful birds of Costa</a>
                            </li>
                        </ul>
                    </div>
                    <div id="recent-comments-2" class="widget widget_recent_comments">
                        <h3 class="widget-title">Recent Comments</h3>
                        <ul id="recentcomments">
                            <li class="recentcomments"><span class="comment-author-link">admin</span> on <a
                                    href="#">Website
                                    encourages scrolling</a></li>
                            <li class="recentcomments"><span class="comment-author-link">admin</span> on <a
                                    href="#">Website
                                    encourages scrolling</a></li>
                            <li class="recentcomments"><span class="comment-author-link">admin</span> on <a
                                    href="#">Website
                                    encourages scrolling</a></li>
                            <li class="recentcomments"><span class="comment-author-link">admin</span> on <a
                                    href="#">Website
                                    encourages scrolling</a></li>
                            <li class="recentcomments"><span class="comment-author-link">admin</span> on <a
                                    href="#">Travel
                                    on an exciting adventur Gap</a></li>
                        </ul>
                    </div>
                    <div id="archives-2" class="widget widget_archive">
                        <h3 class="widget-title">Archives</h3>
                        <ul>
                            <li><a href='#'>January 2018</a></li>
                            <li><a href='#'>February 2017</a></li>
                            <li><a href='#'>January 2017</a></li>
                        </ul>
                    </div>
                    <div id="categories-2" class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li class="cat-item cat-item-8"><a href="#">News</a>
                            </li>
                            <li class="cat-item cat-item-1"><a
                                    href="#">Uncategorized</a>
                            </li>
                        </ul>
                    </div>
                    <div id="meta-2" class="widget widget_meta">
                        <h3 class="widget-title">Meta</h3>
                        <ul>
                            <li><a href="#">Log in</a></li>
                            <li><a href="#">Entries <abbr
                                        title="Really Simple Syndication">RSS</abbr></a></li>
                            <li><a href="#">Comments <abbr
                                        title="Really Simple Syndication">RSS</abbr></a></li>
                            <li><a href="#"
                                    title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
