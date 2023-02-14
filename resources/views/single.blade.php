@extends('layouts.user')

@section('content')
    <div id="banner-area" class="banner-area" style="background: url(../../../../wp-content/uploads/2018/01/banner5-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Articles</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li>Articles</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-container" class="main-container blog" role="main">
        <div class="sections">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <article id="post-1205"
                            class="post-content post-single post-1205 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-funds tag-insurance">
                            <div class="entry-thumbnail post-media post-image">
                                <img width="750" height="465" src="{{ asset('assets/posts/'.$post->image) }}"
                                    class="attachment-post-thumbnails size-post-thumbnails wp-post-image"
                                    alt="" /><span class="post-meta-date meta-date"><span
                                        class="day">{{ $post->created_at->format('d') }}</span>{{ $post->created_at->format('M') }}</span>
                            </div>
                            <div class="post-body clearfix">

                                <header class="entry-header clearfix">
                                    <div class="post-meta"><span class="meta-author post-author"><img alt=''
                                                src='https://secure.gravatar.com/avatar/7f85908a10a7fa54759a1e6dd3775985?s=55&amp;d=mm&amp;r=g'
                                                srcset='https://secure.gravatar.com/avatar/7f85908a10a7fa54759a1e6dd3775985?s=110&#038;d=mm&#038;r=g 2x'
                                                class='avatar avatar-55 photo' height='55' width='55' /> <a
                                                href="#" rel="author">Nw-Investments</a></span><span class="meta-categories post-cat"> <i
                                                class="icon icon-folder"></i> <a href="#"
                                                rel="category tag">{{ $post->topic->name }}</a> </span><span class="post-comment"><i
                                                class="icon icon-comment"></i> <a href="#">0</a></span>
                                    </div>
                                    <h2 class="entry-title">
                                        {{ $post->title }} </h2>
                                </header>

                                <div class="entry-content">
                                    {!! $post->description !!}
                                </div>
                                <div class="post-footer clearfix">
                                    <div class="share-items pull-right">
                                        <ul class="post-social-icons unstyled">
                                            <li><a
                                                    href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a
                                                    href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a
                                                    href="#"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a
                                                    href="#"><i
                                                        class="fa fa-pinterest"></i></a></li>
                                            <li><a
                                                    href="#"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div id="comments" class="comments-area">
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Laissez un commentaire <small><a rel="nofollow"
                                            id="cancel-comment-reply-link" href="#"
                                            style="display:none;">Annuler</a></small></h3>
                                <form action="#" method="post"
                                    id="commentform" class="comment-form">
                                    <p class="comment-notes"><span id="email-notes">Votre adresse e-mail ne sera pas dévoilée.</span> les champs requis sont indiqués <span class="required">*</span></p>
                                    <div class="comment-info row">
                                        <div class="col-md-6"><input placeholder="Nom" id="author"
                                                class="form-control" name="author" type="text" value=""
                                                size="30" aria-required='true' /></div>
                                        <div class="col-md-6">
                                            <input Placeholder="Email" id="email" name="email"
                                                class="form-control" type="email" value="" size="30"
                                                aria-required='true' />
                                        </div>
                                        <div class="col-md-12"><input Placeholder="SiteWeb" id="url"
                                                name="url" class="form-control" type="url" value=""
                                                size="30" /></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <textarea class="form-control" Placeholder="Votre commentaire" id="comment" name="comment" cols="45"
                                                rows="8" aria-required="true"></textarea>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit"
                                            class="btn-comments btn btn-primary" value="Commentez" /> <input
                                            type='hidden' name='comment_post_ID' value='1205' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent'
                                            value='0' />
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <aside id="sidebar" class="sidebar sidebar-right col-md-4" role="complementary">
                        <div id="search-2" class="widget widget_search">
                            <div class="search-widget input-group">
                                <form method="get" action="#" id="search">
                                    <input type="text" name="s" class="form-control" placeholder="Recherche.."
                                        value="">
                                    <span class="input-group-btn">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </form>
                            </div>
                        </div>
                        <div id="recent-posts-2" class="widget widget_recent_entries">
                            <h3 class="widget-title">Articles recents</h3>
                            <ul>
                                @foreach ($blog as $item)
                                    <li>
                                        <a href="#">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="categories-2" class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach ($topics as $item)
                                    <li class="cat-item cat-item-8">
                                        <a href="#">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
