<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $avis = Avis::all();
        $first_post = Post::latest()->first();
        //dd($first_post);
        $offset = Post::latest()->skip(1)->take(2)->get();
        return view('welcome', [
            'avis' => $avis,
            'first_post' => $first_post,
            'offset' => $offset
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        $posts = Post::latest()->paginate(8);
        $blog = Post::latest()->paginate(4);
        $topics = Topic::all();
        return view('blog', [
            'posts' => $posts,
            'blog' => $blog,
            'topics' => $topics,
        ]);
    }

    public function single(Post $post)
    {
        $blog = Post::latest()->paginate(4);
        $topics = Topic::all();
        return view('single', [
            'post' => $post,
            'blog' => $blog,
            'topics' => $topics,
        ]);
    }

    public function mention()
    {
        return view('mention');
    }

    public function conditions()
    {
        return view('condition');
    }
}
