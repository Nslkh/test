<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Str;

class PostController extends Controller
{
    //display records

    public function index()
    {
        $posts = Post::get();
        // $posts = Post::where('id',3)->get();
        // $posts = Post::all()->where('id',3);
        dd($posts);
    }
    // store post
    public function store()
    {
        Post::create([
            'title'=>$title = 'this is a title',
            'body'=>'this is a body',
            'slug'=>Str::slug($title),
            'user_id'=>1
        ]);
    }

    //display single record
    public function show($id)
    {
        $post = Post::find($id);
        dd($post);
    }

    // update record

    // public function update($id)
    // {
    //     $post = Post::find($id);
    //     $post->title='updated title';
    //     $post->body='updated body';
    //     $post->save();
    // }

    public function update($id)
    {
        Post::where('id',$id)->update(
            [
                'title'=>'update title',
                'body'=>'update body'
            ]
            );
    }
}    