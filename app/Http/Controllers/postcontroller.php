<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = post::findorfail($id);

        //$post  =  Post::where('title', 'bonjour.')->firstorfail();
        //dd($post);


        //  $posts = [
        //      1 => 'Mon titre n*1',
        //    2 => 'Mon titre n*2',
        //];


        //$post = $posts[$id];

        return view('article', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        //$post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        //$post->save();
        post::create([
            'title' =>  $request->title,
            'content' => $request->content
        ]);
        dd('post cree!');
    }
    public function contact()
    {
        return view('contact');
    }
}
