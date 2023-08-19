<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke(){
        // $this->authorize('view', auth()->user());
        $posts = Post::paginate(10);
        return view('post.index', compact('posts'));
    }    
}
