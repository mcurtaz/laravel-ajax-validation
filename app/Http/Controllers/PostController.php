<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){

        return view('posts.index');
    }

    public function apiAll(){

        $posts = Post::all();

        return response() ->json($posts);
    }

    public function create(){

        return view('posts.create');

    }

    public function apiTop(){

        $posts = Post::orderBy('like', 'desc') -> take(10) -> get();

        return response() -> json($posts);
    }

    public function store(Request $request){

        $data = $request -> validate([

            'title' => 'required| min:3 | max:30',
            'body'  => 'required| min:10 | max:140',
            'like'  => 'required| gte:0',
            'tag'   => 'required| min: 3'
        ]);

        Post::create($data);

        return redirect() -> route('post-index');
    }
}
