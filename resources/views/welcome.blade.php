@extends('layouts.user')



@section('content')
    <div class="fw-page-builder-content">
        <section id="xs-sec-debc2e82" class="fw-main-row   xs-sc-debc2e82   ">
            <div class="xs-main-overlay"></div>
            <div class="fw-container-fluid">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-860b9289" class="fw-col-md-12     xs-sc-860b9289    ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">

                                    <div id="main-slide" class="carousel slide  " data-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="item active"
                                                style="background-image:url(../wp-content/uploads/2018/01/bg1.jpg)">
                                                <div class="container">
                                                    <div class="slider-content text-left ">
                                                        <div class="col-md-12">
                                                            <h2 class="slide-title title-light animated3">Vous
                                                                voulez maximiser vos investissements financiers ?
                                                            </h2>
                                                            <h3 class="slide-sub-title animated3">Rejoignez nous !
                                                            </h3>
                                                            <p class="slider-description lead animated3">Des
                                                                milliers
                                                                d'investisseurs ont déjà choisi notre service
                                                                financier.</p>
                                                            <p class="animated3">
                                                                <a target="_self" href="#"
                                                                    class="slider btn btn-primary"> Notre
                                                                    service</a>
                                                                <a target="_self" href="{{ route('contact') }}"
                                                                    class="slider btn btn-border"> Contactez
                                                                    Nous</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item  "
                                                style="background-image:url(../wp-content/uploads/2018/02/bg2.jpg)">
                                                <div class="container">
                                                    <div class="slider-content text-center ">
                                                        <div class="col-md-12">
                                                            <h2 class="slide-title title-light animated3"></h2>
                                                            <h3 class="slide-sub-title animated3">Les meilleurs
                                                                stratégies
                                                                <br />d'investissement
                                                            </h3>
                                                            <p class="animated3">
                                                                <a target="_self" href="#"
                                                                    class="slider btn btn-primary"> Notre
                                                                    service</a>
                                                                <a target="_self" href="{{ route('contact') }}"
                                                                    class="slider btn btn-border"> Contactez
                                                                    Nous</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item  "
                                                style="background-image:url(../wp-content/uploads/2018/01/bg3.jpg)">
                                                <div class="container">
                                                    <div class="slider-content text-right ">
                                                        <div class="col-md-12">
                                                            <h2 class="slide-title title-light animated3">Nous
                                                                offrons des stratégies
                                                                d'investissement</h2>
                                                            <h3 class="slide-sub-title animated3">Sur mesure
                                                            </h3>
                                                            <p class="slider-description lead animated3">Qu'il
                                                                s'agisse
                                                                de croissance à long terme ou de revenus réguliers.
                                                            </p>
                                                            <p class="animated3">
                                                                <a target="_self" href="#"
                                                                    class="slider btn btn-primary"> Notre
                                                                    service</a>
                                                                <a target="_self" href="{{ route('contact') }}"
                                                                    class="slider btn btn-border"> Contactez
                                                                    Nous</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ol class="carousel-indicators">
                                            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                                            <li data-target="#main-slide" data-slide-to="1" class=" "></li>
                                            <li data-target="#main-slide" data-slide-to="2" class=" "></li>
                                        </ol>

                                        <a class="left main-slide carousel-control" href="#main-slide" data-slide="prev">
                                            <span><i class="fa fa-angle-left"></i></span>
                                        </a>
                                        <a class="right main-slide carousel-control" href="#main-slide" data-slide="next">
                                            <span><i class="fa fa-angle-right"></i></span>
                                        </a>
                                    </div>
                                    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                    <script>
                                        //slider js
                                        jQuery(document).ready(function($) {

                                            $('#main-slide').carousel({
                                                pause: true,
                                                interval: 100000,
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="service" class="fw-main-row   xs-sc-6454c33a   ">
            <br>
            <div class="xs-main-overlay"></div>
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-f1ca8849" class="fw-col-md-6     xs-sc-f1ca8849    ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">
                                    <div class="heading  xs-heading-06189b44   ">
                                        <br>
                                        <h3 class="xs-title content-title boder-none">Investir et rentabiliser à
                                            court terme à votre portée.</h3>
                                    </div>
                                    <br>
                                    <div class="xs-text-block  xs-text-block-f5a71130">
                                        <p>Nous comprenons que prendre des décisions
                                            d'investissement peut être stressant et incertain. C'est pourquoi nous
                                            offrons des
                                            services de gestion de portefeuille de qualité pour aider nos clients à
                                            atteindre leurs
                                            objectifs financiers.</p>
                                    </div>
                                    {{-- <div id="xs-sc-cfda35b1" class="fw-divider-space "></div> --}}
                                    {{-- <div class="ts-feature-classic ">
                                    <div class="ts-feature-info icon-left">
                                        <span class="feature-icon">
                                            <i class="icon icon-business"></i>
                                        </span>
                                        <div class="feature-content">
                                            <h3 class="ts-feature-title">80% Cost Savings</h3>
                                            <p>We have a culturally diverse, forward thinking team.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                    <br>
                                    <div id="xs-sc-3d35374b" class="fw-divider-space "></div>
                                    <div class="ts-feature-classic ">
                                        <div class="ts-feature-info icon-left">
                                            <span class="feature-icon">
                                                <i class="icon icon-chart22"></i>
                                            </span>
                                            <div class="feature-content">
                                                <h3 class="ts-feature-title">12 % de rendement mensuel</h3>
                                                <p>C’est une réalité ! Associez vous à nous pour
                                                    le vivre !</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div id="xs-sc-f843b26c" class="fw-divider-space "></div>
                                <div class="ts-feature-classic ">
                                    <div class="ts-feature-info icon-left">
                                        <span class="feature-icon">
                                            <i class="icon icon-deal"></i>
                                        </span>
                                        <div class="feature-content">
                                            <h3 class="ts-feature-title">4.5% Tax Saved</h3>
                                            <p>Make your dream come true have ideas, goals.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-inner">
                            <div id="xs-col-da34acc1" class="fw-col-md-6     xs-sc-da34acc1    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="fw-single-image  ">
                                            <img src="../wp-content/uploads/2018/02/case-study3.jpg"
                                                class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="xs-sec-5bc649e0" class="fw-main-row   xs-sc-5bc649e0   ">
            <div class="xs-main-overlay"></div>
            <div class="fw-container-fluid">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-91665d5b" class="fw-col-md-4     xs-sc-91665d5b  xs-col-no-padding text-center ">
                            <div class="fw-main-row">
                                <div class="xs-main-overlay"></div>
                                <div class="fw-col-inner">
                                    <div class="ts-feature-box ">
                                        <div class="ts-feature-info">
                                            <span class="feature-icon">
                                                <i class="icon icon-consut2"></i>
                                            </span>
                                            <div class="feature-content">
                                                <h3 class="ts-feature-title">Transparence</h3>
                                                <p>Expert dans les instruments financiers à effets de levier
                                                    calculée.
                                                    Nous sommes un congloméra d’investissement axé sur la classe
                                                    moyenne avec
                                                    pour vision l’essor de cette dernière.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-inner">
                            <div id="xs-col-9cf15eff"
                                class="fw-col-md-4     xs-sc-9cf15eff  xs-col-no-padding text-center ">
                                <div class="fw-main-row">
                                    <div class="xs-main-overlay"></div>
                                    <div class="fw-col-inner">
                                        <div class="ts-feature-box ">
                                            <div class="ts-feature-info">
                                                <span class="feature-icon">
                                                    <i class="icon icon-chart22"></i>
                                                </span>
                                                <div class="feature-content">
                                                    <h3 class="ts-feature-title">Performance</h3>
                                                    <p>Favoriser la classe moyenne au travers d’instruments
                                                        financiers , à risques modérés
                                                        et à forte rentabilité en un laps de temps est le coeur de
                                                        notre métier . Le conseil et
                                                        le suivi des performances notre valeur de jugement.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-123b8dce"
                                    class="fw-col-md-4     xs-sc-123b8dce  xs-col-no-padding text-center ">
                                    <div class="fw-main-row">
                                        <div class="xs-main-overlay"></div>
                                        <div class="fw-col-inner">
                                            <div class="ts-feature-box ">
                                                <div class="ts-feature-info">
                                                    <span class="feature-icon">
                                                        <i class="icon icon-user2"></i>
                                                    </span>
                                                    <div class="feature-content">
                                                        <h3 class="ts-feature-title">Responsabilité</h3>
                                                        <p>L’accompagnement poste gain, notre fer de lance pour une
                                                            pérénisation de ce
                                                            projet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section>
        <section id="garantie" class="fw-main-row   xs-sc-1f6a129c   ">
            <div class="xs-main-overlay"></div>
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-ab06aaee" class="fw-col-md-8     xs-sc-ab06aaee    ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">
                                    <div class="call-to-action ">
                                        <h3>Investir et rentabiliser à court terme à votre portée.</h3>
                                        <p class="call-to-action-details">Rejoignez notre communauté
                                            d'investisseurs en confiance et laissez-nous vous
                                            aider à atteindre vos objectifs financiers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-inner">
                            <div id="xs-col-c1aeba22" class="fw-col-md-4     xs-sc-c1aeba22    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="text-right "> <a target="_self" href="{{ route('contact') }}"
                                                class="margin-top-20 margin-right-10 btn btn-primary">
                                                Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <section id="xs-sec-9776613e" class="fw-main-row   xs-sc-9776613e   ">
            <br>
            <div class="xs-main-overlay"></div>
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-4b2cc25d" class="fw-col-md-6     xs-sc-4b2cc25d    ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">
                                    <div class="fw-single-image  ">
                                        <img src="../wp-content/uploads/2018/01/case-study2.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-inner">
                            <div id="xs-col-79da8b80" class="fw-col-md-6     xs-sc-79da8b80    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="heading  xs-heading-ffe67c61   ">
                                            <br>
                                            <h3 class="xs-title content-title boder-none"> Notre offre:
                                            </h3>
                                        </div>
                                        <div class="xs-text-block  xs-text-block-dc963eda">
                                            <p>Notre équipe de professionnels expérimentés est dédiée à offrir des
                                                conseils
                                                personnalisés et des stratégies d'investissement adaptées aux
                                                besoins de chaque
                                                client. Nous nous engageons à maintenir une communication
                                                transparente et
                                                régulière pour que nos clients soient informés de l'évolution de
                                                leur portefeuille.
                                                <br>
                                                <strong>Faites reculer les barrières de l’inflation.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="xs-sec-0a1a81fb" class="fw-main-row parallax-section  xs-sc-0a1a81fb text-center  section-padding">
            <div class="xs-main-overlay"></div>
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-767bd371" class="fw-col-md-3     xs-sc-767bd371    ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">
                                    <div class="fact-box">
                                        <div class="text-center">
                                            <i class="icon icon-money-1"></i>
                                            <h3 class="facts-num">
                                                <span class="counterUp">72</span> x plus
                                            </h3>
                                            <p style="color: white">Rentable que le livret A sur 1 an.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-inner">
                            <div id="xs-col-3bf6c8a9" class="fw-col-md-3     xs-sc-3bf6c8a9    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="fact-box">
                                            <div class="text-center">
                                                <i class="icon icon-deal"></i>
                                                <h3 class="facts-num">
                                                    <span class="counterUp">36</span> x plus
                                                </h3>
                                                <p style="color: white">Rentable que le livret jeune sur 1 an.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-d549695b" class="fw-col-md-3     xs-sc-d549695b    ">
                                    <div class="fw-main-row">
                                        <div class="fw-col-inner">
                                            <div class="fact-box">
                                                <div class="text-center">
                                                    <i class="icon icon-chart22"></i>
                                                    <h3 class="facts-num">
                                                        <span class="counterUp">15</span> x plus
                                                    </h3>
                                                    <p style="color: white">Rentable que l’immobilier sur 25 ans.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fw-col-inner">
                                    <div id="xs-col-bf3dac22" class="fw-col-md-3     xs-sc-bf3dac22    ">
                                        <div class="fw-main-row">
                                            <div class="fw-col-inner">
                                                <div class="fact-box">
                                                    <div class="text-center">
                                                        <i class="icon icon-invest"></i>
                                                        <h3 class="facts-num">
                                                            Tout en un trimestre.
                                                        </h3>

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
            </div>
        </section>
        <section id="xs-sec-4b7150e5" class="fw-main-row   xs-sc-4b7150e5   ">
            <div class="xs-main-overlay"></div>
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-6b33f5b0" class="fw-col-md-6     xs-sc-6b33f5b0    ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">
                                    <div class="heading  xs-heading-c6a3aa9e   ">
                                        <br>
                                        <h3 class="xs-title content-title boder-none"> Notre challenge: </h3>
                                    </div>
                                    <div class="xs-text-block  xs-text-block-cc99f650">
                                        <p>Nous comprenons que chaque investisseur est unique, c'est pourquoi nous
                                            prenons
                                            le temps de comprendre les objectifs, la tolérance au risque et
                                            l'expérience
                                            d'investissement de chaque client pour élaborer des stratégies
                                            d'investissement
                                            personnalisées.</p>
                                    </div>
                                    <div class="fw-list list-default  ">
                                        <ol>
                                            <li style="list-style-type: none">
                                                <i class="fa fa-calculator" aria-hidden="true"></i>
                                                0 commissions ni frais cachés.
                                            </li>
                                            <li style="list-style-type: none">
                                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                                                Retour sur investissement garantie
                                            </li>
                                            <li style="list-style-type: none">
                                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                                Assurance Capital.
                                            </li>
                                            <li style="list-style-type: none">
                                                <i class="fa fa-university" aria-hidden="true"></i>
                                                Confidentialité.
                                            </li>
                                            <li style="list-style-type: none">
                                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                                Service Client à l’écoute.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-inner">
                            <div id="xs-col-9e6a981c" class="fw-col-md-6     xs-sc-9e6a981c    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="fw-single-image  ">
                                            <img src="../wp-content/uploads/2018/02/case-study1.jpg"
                                                class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="garantie" class="fw-main-row   xs-sc-1f6a129c   ">
            <div class="xs-main-overlay"></div>
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-ab06aaee" class="fw-col-md-8     xs-sc-ab06aaee    ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">
                                    <div class="call-to-action ">
                                        <h3>Investir et rentabiliser à court terme à votre portée.</h3>
                                        <p class="call-to-action-details">Rejoignez notre communauté
                                            d'investisseurs en confiance et laissez-nous vous
                                            aider à atteindre vos objectifs financiers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-inner">
                            <div id="xs-col-c1aeba22" class="fw-col-md-4     xs-sc-c1aeba22    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="text-right "> <a target="_self" href="{{ route('contact') }}"
                                                class="margin-top-20 margin-right-10 btn btn-primary">
                                                Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <section id="avis" class="fw-main-row parallax-section  xs-sc-3832556b   ">
            <div class="xs-main-overlay"></div>
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-a89b183e" class="fw-col-md-6     xs-sc-a89b183e get_quote_form   ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">
                                    <div class="xs-text-block  xs-text-block-778d81b6">
                                        <p>
                                        <div role="form" class="wpcf7" id="wpcf7-f1313-p1073-o1" lang="en-US"
                                            dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="#" method="post" class="wpcf7-form"
                                                novalidate="novalidate">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="1313" />
                                                    <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                        value="wpcf7-f1313-p1073-o1" />
                                                    <input type="hidden" name="_wpcf7_container_post" value="1073" />
                                                </div>
                                                <div class="ts_quote_form">
                                                    <h2 class="column-title title-white">
                                                        <span>Contactez-nous</span> Et nous vous rappellerons
                                                    </h2>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><span class="wpcf7-form-control-wrap text"><input
                                                                        type="text" name="text" value=""
                                                                        size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Nom Complet" /></span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><span class="wpcf7-form-control-wrap email"><input
                                                                        type="email" name="email" value=""
                                                                        size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Adresse E-Mail" /></span></p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p><span class="wpcf7-form-control-wrap text"><input
                                                                        type="text" name="text" value=""
                                                                        size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Sujet" /></span></p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p><span class="wpcf7-form-control-wrap textarea">
                                                                    <textarea name="textarea" cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea"
                                                                        aria-invalid="false" placeholder="Message"></textarea>
                                                                </span></p>
                                                            <p><input type="submit" value="Envoyer"
                                                                    class="wpcf7-form-control wpcf7-submit btn btn-primary" />
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-inner">
                            <div id="xs-col-4fcc4dbb" class="fw-col-md-6     xs-sc-4fcc4dbb    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
                                            @foreach ($avis as $item)
                                                <div class="item">
                                                    <div class="quote-item">
                                                        <p class="quote-text">{{ $item->description }}</p>
                                                        <div class="quote-item-footer">
                                                            <img class="testimonial-thumb"
                                                                src="../wp-content/uploads/2018/01/testimonial1.png"
                                                                alt="Sarah Arevik">
                                                            <div class="quote-item-info">
                                                                <h3 class="quote-author">{{ $item->name }}
                                                                    <span class="quote-subtext">
                                                                        Client(e)</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <section id="blog" class="fw-main-row   xs-sc-d1ef01c2   section-padding">
            <div class="xs-main-overlay"></div>
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-inner">
                        <div id="xs-col-ae48829c" class="fw-col-md-12     xs-sc-ae48829c    ">
                            <div class="fw-main-row">
                                <div class="fw-col-inner">
                                    <div class="heading  xs-heading-df708d12 text-center  ">
                                        <h2 class="xs-title section-title"><span class="shortheading">Ne rater
                                                pas</span> Nos derniers articles </h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="latest-post post-large">
                                            <div class="latest-post-media">
                                                <a href="{{ route('single', $item) }}" class="latest-post-img">
                                                    <img class="img-responsive"
                                                        src="{{ asset('assets/posts/'.$first_post->image) }}"
                                                        alt="{{ $first_post->title }}">
                                                </a>
                                                <div class="post-cat">
                                                    <a href="#"
                                                        rel="category tag">{{ $first_post->topic->name }}</a>
                                                </div>
                                                <div class="post-body">
                                                    <span
                                                        class="post-item-date">{{ $first_post->created_at->format('M d, Y') }}</span>
                                                    <h4 class="post-title">
                                                        <a href="{{ route('single', $item) }}">{{ $first_post->title }}</a>
                                                    </h4>
                                                    <a class="btn btn-primary" href="{{ route('single', $item) }}">En savoir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($offset as $item)
                                        <div class="col-md-3">
                                            <div class="latest-post">
                                                <div class="post-body">
                                                    <div class="post-cat">
                                                        <a href="#" rel="category tag">{{ $item->topic->name }}</a>
                                                    </div>
                                                    <h4 class="post-title">
                                                        <a href="{{ route('single', $item) }}">{{ $item->title }}</a>
                                                    </h4>
                                                    <span class="post-item-date">Jan 17, 2018</span>
                                                    <div class="post-text">
                                                        {!! $item->excerpt() !!}
                                                        <div class="text-right">
                                                            <a href="{{ route('single', $item) }}">En savoir
                                                                plus <i class="fa fa-long-arrow-right"> </i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
