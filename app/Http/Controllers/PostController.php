<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Str;

class PostController extends Controller
{
    // store post
    public function store(){
        Post::create([
            'title'=>$title = 'this is a title',
            'body'=>'this is a body',
            'slug'=>Str::slug($title),
            'user_id'=>1
        ]);
    }

}
