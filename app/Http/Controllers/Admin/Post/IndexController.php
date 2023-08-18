<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(){
        $posts = Post::paginate(10);
        return view('admin.post.index', compact('posts'));
    }    
}
