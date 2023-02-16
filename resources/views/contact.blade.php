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
        .xs-sc-11d38f79 {
            padding: 100px 0px 20px 0px;
        }

        .xs-heading-fa184abf .xs-title span {}

        .xs-sc-82cba4f7 {
            overflow: hidden;
        }

        .xs-sc-4a0fcce7 {
            padding: 60px 0px 130px 0px;
        }

        .xs-sc-cdd9ac55 .fw-col-inner {
            padding: 0px 0px 0px 30px;
        }

        .xs-sc-cdd9ac55 {
            margin: 10px 0px 0px 0px;
        }

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
@endsection

@section('content')
    <div class="blog" role="main">
        <div id="banner-area" class="banner-area" style="background: url(../wp-content/uploads/2018/02/banner2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Contactez nous</h1>
                            <ol class="breadcrumb">
                                <li><a href="/">Accueil</a></li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="builder-content">

            <div id="post-184" class="full-width-content post-184 page type-page status-publish hentry">
                <div class="fw-page-builder-content">
                    <section id="xs-sec-11d38f79" class="fw-main-row   xs-sc-11d38f79   ">
                        <div class="xs-main-overlay"></div>
                        <div class="fw-container">
                            <div class="fw-row">
                                <div class="fw-col-inner">
                                    <div id="xs-col-036fbd09" class="fw-col-md-12     xs-sc-036fbd09    ">
                                        <div class="fw-main-row">
                                            <div class="fw-col-inner">
                                                <div class="heading  xs-heading-fa184abf text-center  heading_margin">
                                                    <h3 class="xs-title section-title"><span class="shortheading">Envoyez nous un message</span> Contactez nous </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="xs-sec-82cba4f7" class="fw-main-row   xs-sc-82cba4f7   ">
                        <div class="xs-main-overlay"></div>
                        <div class="fw-container">
                            <div class="fw-row">
                                <div class="fw-col-inner">
                                    <div id="xs-col-74e9facb" class="fw-col-md-4     xs-sc-74e9facb    ">
                                        <div class="fw-main-row">
                                            <div class="fw-col-inner">
                                                <div class="ts-contact-info box-border ">
                                                    <span class="ts-contact-icon pull-left">
                                                        <i class="icon icon-map-marker2"></i>
                                                    </span>
                                                    <div class="ts-contact-content">
                                                        <h3 class="ts-contact-title">Adresse</h3>
                                                        <p>71-75 Shelton Street Covent Garden London WC2H 9JQ</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fw-col-inner">
                                        <div id="xs-col-4e434d9a" class="fw-col-md-4     xs-sc-4e434d9a    ">
                                            <div class="fw-main-row">
                                                <div class="fw-col-inner">
                                                    <div class="ts-contact-info box-border ">
                                                        <span class="ts-contact-icon pull-left">
                                                            <i class="icon icon-phone3"></i>
                                                        </span>
                                                        <div class="ts-contact-content">
                                                            <h3 class="ts-contact-title">Appelez nous</h3>
                                                            <p>
                                                                (+44) 7436-8432-98 <br>
                                                                (+44) 020-382-880-765
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fw-col-inner">
                                            <div id="xs-col-e407cb66" class="fw-col-md-4     xs-sc-e407cb66    ">
                                                <div class="fw-main-row">
                                                    <div class="fw-col-inner">
                                                        <div class="ts-contact-info box-border ">
                                                            <span class="ts-contact-icon pull-left">
                                                                <i class="icon icon-envelope2"></i>
                                                            </span>
                                                            <div class="ts-contact-content">
                                                                <h3 class="ts-contact-title">Contactez nous</h3>
                                                                <p>
                                                                    <br>
                                                                    contact@nw-investments.com</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="xs-sec-4a0fcce7" class="fw-main-row   xs-sc-4a0fcce7   ">
                        <div class="xs-main-overlay"></div>
                        <div class="fw-container">
                            <div class="fw-row">
                                <div class="fw-col-inner">
                                    <div id="xs-col-8ef7da08" class="fw-col-md-6     xs-sc-8ef7da08    ">
                                        <div class="fw-main-row">
                                            <div class="fw-col-inner">
                                                <div class="xs-text-block  xs-text-block-7afa497d">
                                                    <div role="form" class="wpcf7" id="wpcf7-f1580-p184-o1"
                                                        lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response"></div>
                                                        <form
                                                            action="#"
                                                            method="post" class="wpcf7-form" novalidate="novalidate">
                                                            <div style="display: none;">
                                                                <input type="hidden" name="_wpcf7" value="1580">
                                                                <input type="hidden" name="_wpcf7_version" value="5.0.2">
                                                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                                <input type="hidden" name="_wpcf7_unit_tag"
                                                                    value="wpcf7-f1580-p184-o1">
                                                                <input type="hidden" name="_wpcf7_container_post"
                                                                    value="184">
                                                            </div>
                                                            <div class="ts_contact_form">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p><span class="wpcf7-form-control-wrap text"><input
                                                                                    type="text" name="text"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Nom complet"></span></p>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <p><span class="wpcf7-form-control-wrap text"><input
                                                                                    type="text" name="number"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Numéro de téléphone"></span></p>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <p><span class="wpcf7-form-control-wrap email"><input
                                                                                    type="email" name="email"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Email"></span></p>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <p><span class="wpcf7-form-control-wrap textarea">
                                                                                <textarea name="textarea" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea"
                                                                                    aria-invalid="false" placeholder="Message"></textarea>
                                                                            </span></p>
                                                                        <p><input type="submit" value="Envoyer"
                                                                                class="wpcf7-form-control wpcf7-submit btn btn-primary"><span
                                                                                class="ajax-loader"></span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fw-col-inner">
                                        <div id="xs-col-cdd9ac55"
                                            class="fw-col-md-6     xs-sc-cdd9ac55 embed-responsive   ">
                                            <div class="fw-main-row">
                                                <div class="fw-col-inner">
                                                    <div class="xs-code">
                                                        <div class="mapouter">
                                                            <div class="gmap_canvas"><iframe width="1400"
                                                                    height="405" id="gmap_canvas"
                                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.2768097549897!2d-0.13219646903295926!3d51.48978761448582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876058c7c9527fb%3A0x79bc7464573598c1!2s71-75%20Shelton%20Street%2C%20London%20WC2H%209JQ%2C%20Royaume-Uni!5e0!3m2!1sfr!2sbj!4v1676279480925!5m2!1sfr!2sbj"
                                                                    frameborder="0" scrolling="no" marginheight="0"
                                                                    marginwidth="0"></iframe><a
                                                                    href="#"></a></div>
                                                            <style>
                                                                .mapouter {
                                                                    text-align: right;
                                                                    height: 405px;
                                                                    width: 100%;
                                                                }

                                                                .gmap_canvas {
                                                                    overflow: hidden;
                                                                    background: none !important;
                                                                    height: 405px;
                                                                    width: 1400px;
                                                                }
                                                            </style><small></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
