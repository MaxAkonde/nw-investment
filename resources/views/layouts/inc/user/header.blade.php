<header id="header" class="header nav-down nav-boxed-transparent">
    <div class="container">
        <div class="row">
            <div class="logo-area clearfix">
                <div class="col-md-3 col-xs-12 navbar-header">
                    <div class="logo">
                        <a href="#"> <img src="{{ asset('wp-content/uploads/2018/02/logo.png') }}" alt="Bizipress">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9 pull-right">
                    <ul class="top-info unstyled">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="site-navigation navdown">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="menubar site-nav-inner">

                        <div class="navbar-responsive-collapse ">
                            <ul id="main-menu" class="nav navbar-nav main-menu" style="text-align: center">
                                <li id="menu-item-1036"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-1036">
                                    <a href="/">Accueil</a>
                                </li>
                                <li id="menu-item-786"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-786">
                                    <a href="/#service">Confiance</a>
                                </li>
                                <li id="menu-item-1571"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1571">
                                    <a href="/#avis">Avis</a>
                                </li>
                                <li>
                                    <a href="{{ route('investir') }}">Investir</a>
                                </li>
                                {{-- <li id="menu-item-789"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-789">
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li> --}}
                                <li id="menu-item-187"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="responsive-menu" class="d-md-none d-lg-none">
                        <div class="ts-navbar-inner">

                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul id="menu-main-menu" class="nav navbar-nav">
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-1036 active active">
                                    <a title="Accueil" href="/">Accueil</a>
                                </li>
                                {{-- <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-885">
                                    <a title="Services" href="#service">Services</a>
                                </li> --}}
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-786">
                                    <a title="Garantie" href="/#service">Confiance</a>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1571">
                                    <a title="Avis" href="/#avis">Avis</a>
                                </li>
                                <li>
                                    <a href="{{ route('investir') }}">Investir</a>
                                </li>
                                {{-- <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-789">
                                    <a title="Blog" href="{{ route('blog') }}">Blog</a>
                                </li> --}}
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187">
                                    <a title="Contact" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
