<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts', compact('posts'));
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

    public function update(){
        $post = Post::find(6);
        $post->update([
            'title' => '6 post',
            'content' => 'This is updated from VSCode',
            'image' => 'image5',
            'likes' => '50',
            'is_published' => true,
        ]);
        dd('updated');
    }

    public function delete(){
        $post = Post::find(2);
        $post->delete();
        // $post = Post::withTrashed()->find(2);
        // $post->restore();
        dd('deleted');
    }
}
