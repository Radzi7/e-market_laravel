<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return $post;
    }

    public function create(){
        $postsArr = [
            [
                'title' => '4 post',
                'content' => 'This is created from VSCode',
                'image' => 'image4',
                'likes' => '40',
                'is_published' => true,
            ],
            [
                'title' => '5 post',
                'content' => 'This is created from VSCode',
                'image' => 'image5',
                'likes' => '50',
                'is_published' => true,
            ],
        ];

        foreach ($postsArr as $post){
            Post::create($post);
        }
        dd('created');
    }
}
